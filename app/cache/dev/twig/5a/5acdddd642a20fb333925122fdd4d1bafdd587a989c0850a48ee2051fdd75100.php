<?php

/* KPPlatformBundle::sessions.html.twig */
class __TwigTemplate_cac900c5ebd08329594d46ced601b8475d5a11c2654849a337ce22c0366d8938 extends Twig_Template
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
        $__internal_79842b2e5f15c40625064732545a53b7b884e3c1e920408cda2daba817502a22 = $this->env->getExtension("native_profiler");
        $__internal_79842b2e5f15c40625064732545a53b7b884e3c1e920408cda2daba817502a22->enter($__internal_79842b2e5f15c40625064732545a53b7b884e3c1e920408cda2daba817502a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::sessions.html.twig"));

        // line 1
        echo "<h3>Entrez vos Sessions</h3>


";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_79842b2e5f15c40625064732545a53b7b884e3c1e920408cda2daba817502a22->leave($__internal_79842b2e5f15c40625064732545a53b7b884e3c1e920408cda2daba817502a22_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::sessions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <h3>Entrez vos Sessions</h3>*/
/* */
/* */
/* {{ form(form) }}*/
