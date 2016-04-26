<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ba0063a5e8f721a87d3dbcd3c47c3a9713e09276ddf59257cfa8266ea094715d extends Twig_Template
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
        $__internal_21a89542cb9486ca3afadd73893e4cf0dd7af28a108d638f3f91599f9ef54ffc = $this->env->getExtension("native_profiler");
        $__internal_21a89542cb9486ca3afadd73893e4cf0dd7af28a108d638f3f91599f9ef54ffc->enter($__internal_21a89542cb9486ca3afadd73893e4cf0dd7af28a108d638f3f91599f9ef54ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_21a89542cb9486ca3afadd73893e4cf0dd7af28a108d638f3f91599f9ef54ffc->leave($__internal_21a89542cb9486ca3afadd73893e4cf0dd7af28a108d638f3f91599f9ef54ffc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
