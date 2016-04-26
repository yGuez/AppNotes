<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bc4a6cbc7e54291c1716357b0a5d016451085f53ec39249a26ff5aa104de6a78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed561d3569282bf1a622ca55bb81194861cc4fd2441a55a5628634b693b92322 = $this->env->getExtension("native_profiler");
        $__internal_ed561d3569282bf1a622ca55bb81194861cc4fd2441a55a5628634b693b92322->enter($__internal_ed561d3569282bf1a622ca55bb81194861cc4fd2441a55a5628634b693b92322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed561d3569282bf1a622ca55bb81194861cc4fd2441a55a5628634b693b92322->leave($__internal_ed561d3569282bf1a622ca55bb81194861cc4fd2441a55a5628634b693b92322_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_392cdf405d5143ff969950a957481777aa45dec498caf5d33d43d9e8ee630728 = $this->env->getExtension("native_profiler");
        $__internal_392cdf405d5143ff969950a957481777aa45dec498caf5d33d43d9e8ee630728->enter($__internal_392cdf405d5143ff969950a957481777aa45dec498caf5d33d43d9e8ee630728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_392cdf405d5143ff969950a957481777aa45dec498caf5d33d43d9e8ee630728->leave($__internal_392cdf405d5143ff969950a957481777aa45dec498caf5d33d43d9e8ee630728_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eed9c51b89247e873c0616c00ea8c3df6c38167d14b95bf2ac3477a9ebb5b8f3 = $this->env->getExtension("native_profiler");
        $__internal_eed9c51b89247e873c0616c00ea8c3df6c38167d14b95bf2ac3477a9ebb5b8f3->enter($__internal_eed9c51b89247e873c0616c00ea8c3df6c38167d14b95bf2ac3477a9ebb5b8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eed9c51b89247e873c0616c00ea8c3df6c38167d14b95bf2ac3477a9ebb5b8f3->leave($__internal_eed9c51b89247e873c0616c00ea8c3df6c38167d14b95bf2ac3477a9ebb5b8f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca88cc751fdd2995da72d229ed9f4fd291311de4f3eb0913e47856f05d5b8d21 = $this->env->getExtension("native_profiler");
        $__internal_ca88cc751fdd2995da72d229ed9f4fd291311de4f3eb0913e47856f05d5b8d21->enter($__internal_ca88cc751fdd2995da72d229ed9f4fd291311de4f3eb0913e47856f05d5b8d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca88cc751fdd2995da72d229ed9f4fd291311de4f3eb0913e47856f05d5b8d21->leave($__internal_ca88cc751fdd2995da72d229ed9f4fd291311de4f3eb0913e47856f05d5b8d21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
