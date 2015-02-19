<?php

/* GitHubApiBundle:Main:main_left.html.twig */
class __TwigTemplate_3d2cec9342cad41aa851c3b302f6fed31f5c16351466263b89b05fde0df31172 extends Twig_Template
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
        echo "Main";
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"content-left\">
        <span class=\"content-main-text\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</span>
        <span class=\"content-description\">Description: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "</span>
        <span>watchers: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["watchers"]) ? $context["watchers"] : $this->getContext($context, "watchers")), "html", null, true);
        echo "</span>
        <span>forks: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["forks"]) ? $context["forks"] : $this->getContext($context, "forks")), "html", null, true);
        echo "</span>
        <span>open issues: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["issues"]) ? $context["issues"] : $this->getContext($context, "issues")), "html", null, true);
        echo "</span>
        ";
        // line 12
        if ((isset($context["homepage"]) ? $context["homepage"] : $this->getContext($context, "homepage"))) {
            // line 13
            echo "            <span>homepage: ";
            echo twig_escape_filter($this->env, (isset($context["homepage"]) ? $context["homepage"] : $this->getContext($context, "homepage")), "html", null, true);
            echo "</span>
        ";
        }
        // line 15
        echo "        <span>GitHub repo: ";
        echo twig_escape_filter($this->env, (isset($context["watchers"]) ? $context["watchers"] : $this->getContext($context, "watchers")), "html", null, true);
        echo "</span>
        <span>created at: ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["created"]) ? $context["created"] : $this->getContext($context, "created")), "html", null, true);
        echo "</span>
    </div>
    <div class=\"content-right\">
        <span class=\"content-main-text\">Contributors:</span>

        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responseRight"]) ? $context["responseRight"] : $this->getContext($context, "responseRight")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "            <span>
                <a href=\"/web/app_dev.php/git-hub/user/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
            echo "\" title=\"Открыть профиль\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
            echo "</a>
                <a class=\"button ajax\" id=\"like_";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "login", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text_button", array()), "html", null, true);
            echo "</a>
            </span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <span>Not found</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "GitHubApiBundle:Main:main_left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  114 => 27,  104 => 24,  98 => 23,  95 => 22,  90 => 21,  82 => 16,  77 => 15,  71 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
