<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.02.15
 * Time: 9:32
 */
namespace GitHub\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GitHub\LibBundle\GitHubLibBundle;
use Symfony\Component\HttpFoundation\JsonResponse;
use GitHub\LikeBundle\Entity\LikeRepo;

class MainController extends Controller {

    protected $libGitHub;
    protected $username = '';// login
    protected $password = '';// password

    public function __construct() {
        $this->libGitHub = new GitHubLibBundle();
        $this->libGitHub->setCredentials($this->username, $this->password);
    }

    public function indexAction($projectFirst = 'yiisoft', $projectSecond = 'yii') {

        $project = $projectFirst . '/' . $projectSecond;
        $response = $this->libGitHub->getInfo('repos', $project);

        $responseRight = $this->libGitHub->getInfo('repos', $project . '/contributors');
        $responseRightNew = $this->getDataWithButton($responseRight);

        $arrayResponse = array(
            'name'          => $response->full_name,
            'description'   => $response->description,
            'watchers'      => $response->watchers,
            'forks'         => $response->forks,
            'issues'        => $response->open_issues,
            'homepage'      => $response->homepage,
            'watchers'      => $response->watchers,
            'created'       => $response->created_at,
            'responseRight' => $responseRightNew
        );
        return $this->render('GitHubApiBundle:Main:main_left.html.twig', $arrayResponse);
    }

    public function userAction($login) {

        if($login) {
            $responseRight = $this->libGitHub->getInfo('users', $login);

            $textButton = $this->getInfoButton($login);

            $dataInfo = array(
                'avatar_url'    => $responseRight->avatar_url,
                'name'          => $responseRight->name,
                'login'         => $responseRight->login,
                'company'       => $responseRight->company,
                'blog'          => $responseRight->blog,
                'followers'     => $responseRight->followers,
                'textButton'    => $textButton
            );
            return $this->render('GitHubApiBundle:Main:user_info.html.twig', $dataInfo);
        }
    }

    public function searchAction() {

        $searchQ = $this->get('request')->query->get('q');

        $filter = array(
            'q'     => $searchQ,
            'sort'  => 'forks',
            'order' => 'desc'
        );

        $response = $this->libGitHub->getInfo('search', 'repositories', $filter);
        $responseRightNew = $this->getDataWithButton($response->items);

        $data = array(
            'q'         => $searchQ,
            'search'    => $responseRightNew
        );

        return $this->render('GitHubApiBundle:Main:search.html.twig', $data);
    }

    public function sendLikeAction() {

        $ajaxData = explode('_', $this->get('request')->query->get('login'));
        $ajaxId = $ajaxData[1];

        $textButton = $this->getInfoButton($ajaxId, 1);

        return new JsonResponse(array(
                'login' => $ajaxId,
                'text' => $textButton));
    }

    public function updateAction($log, $updateData) {
        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('GitHubLikeBundle:LikeRepo')->findOneBy(array( 'login' => $log));

        $product->setLikeU($updateData);
        $em->flush();

        return true;
    }

    public function getInfoButton($log, $flagUpdate = 0) {

        $objDoc = $this->getDoctrine()->getRepository('GitHubLikeBundle:LikeRepo');
        $infoUser = $objDoc->findOneBy(array( 'login' => $log));

        $likeRepo = new LikeRepo();

        if(!$infoUser) {
            if($flagUpdate != 0) {
                $j = 1;
                $textButton = 'Unlike';
            }
            else {
                $j = 0;
                $textButton = 'Like';
            }
            $likeRepo->setLogin($log);
            $likeRepo->setlikeU($j);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($likeRepo);
            $em->flush();
        }
        elseif( $flagUpdate != 0 ) {
            if($infoUser->getLikeU() == 1) {
                $updateData = 0;
                $textButton = 'Like';
            }
            else {
                $updateData = 1;
                $textButton = 'Unlike';
            }

            $this->updateAction($log, $updateData);
        }
        else {
            if($infoUser->getLikeU() == 1)
                $textButton = 'Unlike';
            else
                $textButton = 'Like';
        }

        return $textButton;
    }

    public function getDataWithButton($data) {

        $i = 0;
        $responseRightNew = array();

        foreach($data as $k => $v) {
            $responseRightNew[$i] = $v;
            if(isset($v->login))
                $textButton = $this->getInfoButton($v->login);
            elseif($v->full_name)
                $textButton = $this->getInfoButton($v->full_name);
            $responseRightNew[$i]->text_button = $textButton;
            ++$i;
        }

        return $responseRightNew;
    }
}