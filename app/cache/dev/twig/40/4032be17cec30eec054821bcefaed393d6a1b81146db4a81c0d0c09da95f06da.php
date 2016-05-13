<?php

/* KPPlatformBundle::enseignantsShow.html.twig */
class __TwigTemplate_f0a746279465f88c68c9b5a0ef1963d34bca0745491d1fae447f11d9f85a2ef9 extends Twig_Template
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
        $__internal_4b82ccb9a4204adb7ec696096c3a14d808d2c8cd8e288734a1805a73060fc160 = $this->env->getExtension("native_profiler");
        $__internal_4b82ccb9a4204adb7ec696096c3a14d808d2c8cd8e288734a1805a73060fc160->enter($__internal_4b82ccb9a4204adb7ec696096c3a14d808d2c8cd8e288734a1805a73060fc160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::enseignantsShow.html.twig"));

        // line 1
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "</p>";
        
        $__internal_4b82ccb9a4204adb7ec696096c3a14d808d2c8cd8e288734a1805a73060fc160->leave($__internal_4b82ccb9a4204adb7ec696096c3a14d808d2c8cd8e288734a1805a73060fc160_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::enseignantsShow.html.twig";
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
/* <p>{{ enseignant.nom }} {{ enseignant.prenom }}</p>*/
