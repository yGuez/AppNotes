<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_16f10c44198b732505c1f927403afb43e2ad9c0804b4d191e0ca30bb8974fc71 extends Twig_Template
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
        $__internal_4b7a1df282d2e137a632a8dc19efa039003cf1af2722d6d6f8b5e95c1cb15ac8 = $this->env->getExtension("native_profiler");
        $__internal_4b7a1df282d2e137a632a8dc19efa039003cf1af2722d6d6f8b5e95c1cb15ac8->enter($__internal_4b7a1df282d2e137a632a8dc19efa039003cf1af2722d6d6f8b5e95c1cb15ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b7a1df282d2e137a632a8dc19efa039003cf1af2722d6d6f8b5e95c1cb15ac8->leave($__internal_4b7a1df282d2e137a632a8dc19efa039003cf1af2722d6d6f8b5e95c1cb15ac8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
