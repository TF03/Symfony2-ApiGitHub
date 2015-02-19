<?php

/* GitHubApiBundle:Main:user_info.html.twig */
class __TwigTemplate_8279bc6e060a71767d2a24ca1bf1f5b35728333bd6607f6100bccac932066079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title_hed' => array($this, 'block_title_hed'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title_hed($context, array $blocks = array())
    {
        echo "User info - ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"block-user-info\">
        <div class=\"user-info-left\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["avatar_url"]) ? $context["avatar_url"] : $this->getContext($context, "avatar_url")), "html", null, true);
        echo "\">
            <a class=\"button ajax\" id=\"like_";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["textButton"]) ? $context["textButton"] : $this->getContext($context, "textButton")), "html", null, true);
        echo "</a>
        </div>
        <div class=\"user-info-right\">
            <span class=\"name-user\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</span>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "</span>
            ";
        // line 14
        if ((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company"))) {
            // line 15
            echo "                <span>Company: ";
            echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "html", null, true);
            echo "</span>
            ";
        }
        // line 17
        echo "            ";
        if ((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog"))) {
            // line 18
            echo "                    <span>Blog: ";
            echo twig_escape_filter($this->env, (isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "html", null, true);
            echo "</span>
            ";
        }
        // line 20
        echo "            <span>Followers: ";
        echo twig_escape_filter($this->env, (isset($context["followers"]) ? $context["followers"] : $this->getContext($context, "followers")), "html", null, true);
        echo "</span>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GitHubApiBundle:Main:user_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  82 => 18,  79 => 17,  73 => 15,  71 => 14,  67 => 13,  63 => 12,  55 => 9,  51 => 8,  47 => 6,  44 => 5,  37 => 3,  11 => 1,);
    }
}
