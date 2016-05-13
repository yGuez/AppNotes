<?php

/* KPPlatformBundle::sessions.html.twig */
class __TwigTemplate_cac900c5ebd08329594d46ced601b8475d5a11c2654849a337ce22c0366d8938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KPPlatformBundle::index.html.twig", "KPPlatformBundle::sessions.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KPPlatformBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7102af259ec73f41e464d02538513dd93edb3e23ca62e03d06cb07fc8622e76a = $this->env->getExtension("native_profiler");
        $__internal_7102af259ec73f41e464d02538513dd93edb3e23ca62e03d06cb07fc8622e76a->enter($__internal_7102af259ec73f41e464d02538513dd93edb3e23ca62e03d06cb07fc8622e76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::sessions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7102af259ec73f41e464d02538513dd93edb3e23ca62e03d06cb07fc8622e76a->leave($__internal_7102af259ec73f41e464d02538513dd93edb3e23ca62e03d06cb07fc8622e76a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_300010f2c5695f4c022c5a874a825646f2709796ab5c1572cec95e3c006368cc = $this->env->getExtension("native_profiler");
        $__internal_300010f2c5695f4c022c5a874a825646f2709796ab5c1572cec95e3c006368cc->enter($__internal_300010f2c5695f4c022c5a874a825646f2709796ab5c1572cec95e3c006368cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h3>Entrez vos Sessions</h3>


    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_300010f2c5695f4c022c5a874a825646f2709796ab5c1572cec95e3c006368cc->leave($__internal_300010f2c5695f4c022c5a874a825646f2709796ab5c1572cec95e3c006368cc_prof);

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
        return array (  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "KPPlatformBundle::index.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h3>Entrez vos Sessions</h3>*/
/* */
/* */
/*     {{ form(form) }}*/
/* */
/* {% endblock %}*/
