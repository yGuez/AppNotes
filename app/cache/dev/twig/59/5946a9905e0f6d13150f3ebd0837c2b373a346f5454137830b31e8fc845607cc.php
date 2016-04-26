<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_559dacf5af626a9551ac0706e48a2cd77a9ce23e859e6865ab38079249162084 extends Twig_Template
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
        $__internal_b1330421ed3a29515828c9ac00b05756201d164a421023eb28c61dc79f80544d = $this->env->getExtension("native_profiler");
        $__internal_b1330421ed3a29515828c9ac00b05756201d164a421023eb28c61dc79f80544d->enter($__internal_b1330421ed3a29515828c9ac00b05756201d164a421023eb28c61dc79f80544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b1330421ed3a29515828c9ac00b05756201d164a421023eb28c61dc79f80544d->leave($__internal_b1330421ed3a29515828c9ac00b05756201d164a421023eb28c61dc79f80544d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
