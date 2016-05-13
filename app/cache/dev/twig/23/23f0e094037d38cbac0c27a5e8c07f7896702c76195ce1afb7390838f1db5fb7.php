<?php

/* KPPlatformBundle::sessionsShow.html.twig */
class __TwigTemplate_094d0c1d5f8fc5f8d29e91d0a5b1523fc274a6fd95d96a8cbb445b90806483c7 extends Twig_Template
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
        $__internal_4327d5fe628c7ba2cfd2415ab3c77c1ba942cd11b4a2633e2b622d7fe1ded83e = $this->env->getExtension("native_profiler");
        $__internal_4327d5fe628c7ba2cfd2415ab3c77c1ba942cd11b4a2633e2b622d7fe1ded83e->enter($__internal_4327d5fe628c7ba2cfd2415ab3c77c1ba942cd11b4a2633e2b622d7fe1ded83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::sessionsShow.html.twig"));

        // line 1
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "titre", array()), "html", null, true);
        echo " du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateFin", array()), "d/m/Y"), "html", null, true);
        echo "</p>";
        
        $__internal_4327d5fe628c7ba2cfd2415ab3c77c1ba942cd11b4a2633e2b622d7fe1ded83e->leave($__internal_4327d5fe628c7ba2cfd2415ab3c77c1ba942cd11b4a2633e2b622d7fe1ded83e_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::sessionsShow.html.twig";
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
/* <p>{{ session.titre }} du {{ session.dateDebut | date('d/m/Y') }} au {{ session.dateFin | date('d/m/Y') }}</p>*/
