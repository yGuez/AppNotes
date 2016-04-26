<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b715e70032f30c9a1d4a50b06d136d6429966c3208e4be9f7dcd15e3f65afeed extends Twig_Template
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
        $__internal_7355bdcaa2e28249ba64fabd9de88b201c7d573c3decf3863957aaa48445ae80 = $this->env->getExtension("native_profiler");
        $__internal_7355bdcaa2e28249ba64fabd9de88b201c7d573c3decf3863957aaa48445ae80->enter($__internal_7355bdcaa2e28249ba64fabd9de88b201c7d573c3decf3863957aaa48445ae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7355bdcaa2e28249ba64fabd9de88b201c7d573c3decf3863957aaa48445ae80->leave($__internal_7355bdcaa2e28249ba64fabd9de88b201c7d573c3decf3863957aaa48445ae80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
