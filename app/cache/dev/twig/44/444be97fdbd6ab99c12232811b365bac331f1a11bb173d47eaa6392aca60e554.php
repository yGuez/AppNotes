<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6ab6fb69bc12deeaa46b04fd73f53e7ad65e76f287c079fe97a8a8b9dc569061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fb20d3cb66941ecfac6330a3bf6f2597a0ada60894148f73b9d74fe6a6e1c3b = $this->env->getExtension("native_profiler");
        $__internal_2fb20d3cb66941ecfac6330a3bf6f2597a0ada60894148f73b9d74fe6a6e1c3b->enter($__internal_2fb20d3cb66941ecfac6330a3bf6f2597a0ada60894148f73b9d74fe6a6e1c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2fb20d3cb66941ecfac6330a3bf6f2597a0ada60894148f73b9d74fe6a6e1c3b->leave($__internal_2fb20d3cb66941ecfac6330a3bf6f2597a0ada60894148f73b9d74fe6a6e1c3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
