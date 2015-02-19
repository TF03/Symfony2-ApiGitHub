<?php

/* ::base.html.twig */
class __TwigTemplate_8158e7b24ec998ce2d3684ba367b6515583f153aa1e63046f7d5f59d10a444e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'title_hed' => array($this, 'block_title_hed'),
            'section' => array($this, 'block_section'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"wrapper\">
            <div class=\"w1\">
                <header id=\"header\">
                    <div class=\"header-panel\">
                        <div class=\"holder\">
                            <div class=\"text-box\">
                                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("git_hub_api_main");
        echo "\" class=\"logo\">MobiDev GitHub Browser</a> >> ";
        $this->displayBlock('title_hed', $context, $blocks);
        // line 19
        echo "                            </div>
                            <div class=\"search-box\">
                                <form method=\"get\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("git_hub_api_search");
        echo "\">
                                    <input type=\"search\" name=\"q\" class=\"search-input search-animate\">
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
                <section class=\"content\">
                    ";
        // line 29
        $this->displayBlock('section', $context, $blocks);
        // line 30
        echo "                </section>
            </div>
        </div>
        <input type=\"hidden\" value=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("git_hub_api_ajax");
        echo "\" id=\"sendL\">
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/github/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 18
    public function block_title_hed($context, array $blocks = array())
    {
    }

    // line 29
    public function block_section($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/github/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/github/js/main.js"), "html", null, true);
        echo "\" ></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  116 => 35,  113 => 34,  108 => 29,  103 => 18,  96 => 7,  93 => 6,  87 => 5,  81 => 38,  79 => 34,  75 => 33,  70 => 30,  68 => 29,  57 => 21,  53 => 19,  49 => 18,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
