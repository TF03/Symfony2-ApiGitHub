<?php

/* GitHubApiBundle:Main:index.html.twig */
class __TwigTemplate_5adda81e9ba14b646beda2ce71638c641061545005e27f814d91a833cd764700 extends Twig_Template
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
        <span>homepage: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["homepage"]) ? $context["homepage"] : $this->getContext($context, "homepage")), "html", null, true);
        echo "</span>
        <span>GitHub repo: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["watchers"]) ? $context["watchers"] : $this->getContext($context, "watchers")), "html", null, true);
        echo "</span>
        <span>created at: ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["created"]) ? $context["created"] : $this->getContext($context, "created")), "html", null, true);
        echo "</span>
    </div>
    <div class=\"content-right\">
        <span class=\"content-main-text\">Contributors:</span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GitHubApiBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
