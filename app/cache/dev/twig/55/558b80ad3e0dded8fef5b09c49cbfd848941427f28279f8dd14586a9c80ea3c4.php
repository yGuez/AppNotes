<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3ddbd99b16186d41fb42a276d0a9b2dab631106fb61e8f705ba95ea17c25d8f1 extends Twig_Template
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
        $__internal_af78e4df96e54ee64d41c25894e33676ec4fc40e6e45eb48ed205a32adcff3f7 = $this->env->getExtension("native_profiler");
        $__internal_af78e4df96e54ee64d41c25894e33676ec4fc40e6e45eb48ed205a32adcff3f7->enter($__internal_af78e4df96e54ee64d41c25894e33676ec4fc40e6e45eb48ed205a32adcff3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_af78e4df96e54ee64d41c25894e33676ec4fc40e6e45eb48ed205a32adcff3f7->leave($__internal_af78e4df96e54ee64d41c25894e33676ec4fc40e6e45eb48ed205a32adcff3f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
