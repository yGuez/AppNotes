<?php

/* KPPlatformBundle::etudiants.html.twig */
class __TwigTemplate_46eb5081db730921527827a85093b1feea7ee5446d780d7675cfa0794d96a58c extends Twig_Template
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
        $__internal_5c3d7bdc1f275573000302436228886f76e33b0885f30698e9a9f9e0586c7258 = $this->env->getExtension("native_profiler");
        $__internal_5c3d7bdc1f275573000302436228886f76e33b0885f30698e9a9f9e0586c7258->enter($__internal_5c3d7bdc1f275573000302436228886f76e33b0885f30698e9a9f9e0586c7258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::etudiants.html.twig"));

        // line 1
        echo "<h3>Entrez vos Etudiants</h3>


";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_5c3d7bdc1f275573000302436228886f76e33b0885f30698e9a9f9e0586c7258->leave($__internal_5c3d7bdc1f275573000302436228886f76e33b0885f30698e9a9f9e0586c7258_prof);

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
        return array (  27 => 4,  22 => 1,);
    }
}
/* <h3>Entrez vos Etudiants</h3>*/
/* */
/* */
/* {{ form(form) }}*/
