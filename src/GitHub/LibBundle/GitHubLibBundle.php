<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.02.15
 * Time: 11:48
 */

namespace GitHub\LibBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GitHubLibBundle extends Bundle {

    protected $url = 'https://api.github.com';
    protected $debug = false;
    protected $username = null;
    protected $password = null;
    protected $timeout = 240;

    protected $lastPage = null;
    protected $lastUrl = null;
    protected $lastMethod = null;
    protected $lastData = null;

    public function setCredentials($username, $password) {

        $this->username = $username;
        $this->password = $password;
    }

    public function getInfo($owner, $repo, $data = array()) {

        return $this->request("/$owner/$repo", 'GET', $data);
    }

    public function request($url, $method, $data) {

        $this->lastUrl = $url;
        $this->lastMethod = $method;
        $this->lastData = $data;

        $response = $this->doRequest($url, $method, $data);

        return $this->parseResponse($url, $response);
    }

    protected function doRequest($url, $method, $data) {

        $url = $this->url . $url;

        if($this->debug) {

            echo "URL: $url\n";
            echo "Data: " . print_r($data, true) . "\n";
        }

        $c = curl_init();
        curl_setopt($c, CURLOPT_VERBOSE, $this->debug);

        if($this->username && $this->password) {

            curl_setopt($c, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($c, CURLOPT_USERPWD, "$this->username:$this->password");
        }

        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_USERAGENT, "tan-tan.github-api");
        curl_setopt($c, CURLOPT_TIMEOUT, $this->timeout);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        if(is_array($data)) {

            foreach($data as $key => $value) {

                if(is_bool($value))
                    $data[$key] = $value ? 'true' : 'false';
            }
        }

        switch($method) {

            case 'GET':
                curl_setopt($c, CURLOPT_HTTPGET, true);
                if(count($data))
                    $url .= '?' . http_build_query($data);
                break;

            case 'POST':
                curl_setopt($c, CURLOPT_POST, true);
                if(count($data))
                    curl_setopt($c, CURLOPT_POSTFIELDS, $data);
                break;
        }
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($c);

        curl_close($c);
        if($this->debug)
            echo "Response:\n$response\n";

        return $response;
    }

    public function parseResponse($url, $response) {

        // parse response
        $header = false;
        $content = array();

        foreach(explode("\r\n", $response) as $line) {

            if (strpos($line, 'HTTP/1.1') === 0) {

                $header = true;
            }
            else if ($line == '') {

                $header = false;
            }
            else if ($header) {

                $line = explode(': ', $line);
                switch($line[0]) {

                    case 'X-RateLimit-Limit':
                        $this->rateLimit = intval($line[1]);
                        break;

                    case 'X-RateLimit-Remaining':
                        $this->rateLimitRemaining = intval($line[1]);
                        break;

                    case 'Link':
                        $matches = null;
                        if(preg_match_all('/<https:\/\/api\.github\.com\/[^?]+\?([^>]+)>; rel="([^"]+)"/', $line[1], $matches))
                        {
                            foreach($matches[2] as $index => $page)
                            {
                                $this->pageData[$page] = array();
                                $requestParts = explode('&', $matches[1][$index]);
                                foreach($requestParts as $requestPart)
                                {
                                    list($field, $value) = explode('=', $requestPart, 2);
                                    $this->pageData[$page][$field] = $value;
                                }
                            }
                        }
                        break;
                }
            }
            else
            {
                $content[] = $line;
            }
        }

        $response = json_decode(implode("\n", $content));

        return $response;
    }
}