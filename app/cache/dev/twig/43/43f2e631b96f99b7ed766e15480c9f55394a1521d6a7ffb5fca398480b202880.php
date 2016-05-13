<?php

/* KPPlatformBundle::etudiantsShow.html.twig */
class __TwigTemplate_4a50ae18946ee8575d94eabd81bf8648e79dd209f6385bfb812608b656c5f009 extends Twig_Template
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
        $__internal_34c34ef537d8553d1defaedef6694b6023c1acc911f98489d6342ab659cd42e9 = $this->env->getExtension("native_profiler");
        $__internal_34c34ef537d8553d1defaedef6694b6023c1acc911f98489d6342ab659cd42e9->enter($__internal_34c34ef537d8553d1defaedef6694b6023c1acc911f98489d6342ab659cd42e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::etudiantsShow.html.twig"));

        // line 1
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "string", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etudiant"]) ? $context["etudiant"] : $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</p>";
        
        $__internal_34c34ef537d8553d1defaedef6694b6023c1acc911f98489d6342ab659cd42e9->leave($__internal_34c34ef537d8553d1defaedef6694b6023c1acc911f98489d6342ab659cd42e9_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::etudiantsShow.html.twig";
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
/* <p>{{ etudiant.string }} {{ etudiant.prenom }}</p>*/
