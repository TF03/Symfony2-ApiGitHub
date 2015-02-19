<?php

/* GitHubApiBundle:Main:search.html.twig */
class __TwigTemplate_a62bdbdd5a052c1d98441a832cb2d45b83cccc93d28d9d73a97f3747525e16b5 extends Twig_Template
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
        echo "Search";
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "    <h3>For search term \"";
        echo twig_escape_filter($this->env, (isset($context["q"]) ? $context["q"] : $this->getContext($context, "q")), "html", null, true);
        echo "\" found</h3>

    <ul class=\"search-list\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "            <li>
                <div class=\"search-item-block\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("git_hub_api_project", array("projectFirst" => $this->getAttribute($this->getAttribute($context["item"], "owner", array()), "login", array()), "projectSecond" => $this->getAttribute($context["item"], "name", array()))), "html", null, true);
            echo "\"
                       title=\"Open project\" class=\"search-item-name\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "homepage", array()), "html", null, true);
            echo "\" title=\"Open homepage\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "homepage", array()), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("git_hub_api_user_info", array("login" => $this->getAttribute($this->getAttribute($context["item"], "owner", array()), "login", array()))), "html", null, true);
            echo "\"
                       title=\"User info\" target=\"_blank\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "owner", array()), "login", array()), "html", null, true);
            echo "</a>
                </div>
                <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "</p>
                <span class=\"search-item-watchers\">watchers: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "watchers", array()), "html", null, true);
            echo "</span>
                <span>forks: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "forks", array()), "html", null, true);
            echo "</span>
                <div class=\"search-item-button\">
                    <a class=\"button ajax\" id=\"like_";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "owner", array()), "login", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text_button", array()), "html", null, true);
            echo "</a>
                </div>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <li>We couldn't find any repositories matching \"";
            echo twig_escape_filter($this->env, (isset($context["q"]) ? $context["q"] : $this->getContext($context, "q")), "html", null, true);
            echo "\"</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "GitHubApiBundle:Main:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 28,  110 => 26,  98 => 22,  93 => 20,  89 => 19,  85 => 18,  80 => 16,  76 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 10,  53 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
