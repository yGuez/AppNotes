<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f3ad2939f4576d23ef7c7e4f8e1bac78950f4d9d42293922bc5e09cb31fb7d07 extends Twig_Template
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
        $__internal_bd759a790ebe017d5fffdc1e8398998b8434fb8ad9673de1690600744e4a651c = $this->env->getExtension("native_profiler");
        $__internal_bd759a790ebe017d5fffdc1e8398998b8434fb8ad9673de1690600744e4a651c->enter($__internal_bd759a790ebe017d5fffdc1e8398998b8434fb8ad9673de1690600744e4a651c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bd759a790ebe017d5fffdc1e8398998b8434fb8ad9673de1690600744e4a651c->leave($__internal_bd759a790ebe017d5fffdc1e8398998b8434fb8ad9673de1690600744e4a651c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
