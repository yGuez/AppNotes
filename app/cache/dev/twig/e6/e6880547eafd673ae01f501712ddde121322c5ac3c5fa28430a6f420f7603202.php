<?php

/* KPPlatformBundle::etudiants.html.twig */
class __TwigTemplate_46eb5081db730921527827a85093b1feea7ee5446d780d7675cfa0794d96a58c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KPPlatformBundle::index.html.twig", "KPPlatformBundle::etudiants.html.twig", 1);
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
        $__internal_5bae2749a7fc11bf1478e88652122f396198bd40be747fe20f16569cc132d6c8 = $this->env->getExtension("native_profiler");
        $__internal_5bae2749a7fc11bf1478e88652122f396198bd40be747fe20f16569cc132d6c8->enter($__internal_5bae2749a7fc11bf1478e88652122f396198bd40be747fe20f16569cc132d6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::etudiants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bae2749a7fc11bf1478e88652122f396198bd40be747fe20f16569cc132d6c8->leave($__internal_5bae2749a7fc11bf1478e88652122f396198bd40be747fe20f16569cc132d6c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c205621f6a2ef24a7cb4f4c897a77b9541199b77076ae091b03e4b942aa7062 = $this->env->getExtension("native_profiler");
        $__internal_5c205621f6a2ef24a7cb4f4c897a77b9541199b77076ae091b03e4b942aa7062->enter($__internal_5c205621f6a2ef24a7cb4f4c897a77b9541199b77076ae091b03e4b942aa7062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h3>Entrez vos Etudiants</h3>


    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_5c205621f6a2ef24a7cb4f4c897a77b9541199b77076ae091b03e4b942aa7062->leave($__internal_5c205621f6a2ef24a7cb4f4c897a77b9541199b77076ae091b03e4b942aa7062_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::etudiants.html.twig";
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
/*     <h3>Entrez vos Etudiants</h3>*/
/* */
/* */
/*     {{ form(form) }}*/
/* */
/* {% endblock %}*/
/* */
/* */
