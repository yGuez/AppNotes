<?php

/* KPPlatformBundle::enseignants.html.twig */
class __TwigTemplate_1bdda3ff13e1bc8614094050afef8d09b785d436c703b697e929d3486a7fb521 extends Twig_Template
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
        $__internal_7d7c20afd5c94e5bbd9c1b797544a4793541b99daf57789b837a525471b4a18a = $this->env->getExtension("native_profiler");
        $__internal_7d7c20afd5c94e5bbd9c1b797544a4793541b99daf57789b837a525471b4a18a->enter($__internal_7d7c20afd5c94e5bbd9c1b797544a4793541b99daf57789b837a525471b4a18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::enseignants.html.twig"));

        // line 1
        echo "

<h3>Entrez vos Enseignants</h3>


    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_7d7c20afd5c94e5bbd9c1b797544a4793541b99daf57789b837a525471b4a18a->leave($__internal_7d7c20afd5c94e5bbd9c1b797544a4793541b99daf57789b837a525471b4a18a_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::enseignants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* */
/* */
/* <h3>Entrez vos Enseignants</h3>*/
/* */
/* */
/*     {{ form(form) }}*/
/* */
