<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3c885085b0101dd9fae52f4ab3e0e50872a4723847a9fee83ff09417a27b8e05 extends Twig_Template
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
        $__internal_cc0f873a0d51c4f089bf04109665352946d5e540e390029a1466dcd3bb7d3afd = $this->env->getExtension("native_profiler");
        $__internal_cc0f873a0d51c4f089bf04109665352946d5e540e390029a1466dcd3bb7d3afd->enter($__internal_cc0f873a0d51c4f089bf04109665352946d5e540e390029a1466dcd3bb7d3afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc0f873a0d51c4f089bf04109665352946d5e540e390029a1466dcd3bb7d3afd->leave($__internal_cc0f873a0d51c4f089bf04109665352946d5e540e390029a1466dcd3bb7d3afd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
