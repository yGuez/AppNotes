<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_01efb77b8992642a7022dbb711103f3fcb178075fbb7558a03e4aaacf7382cf2 extends Twig_Template
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
        $__internal_0f9a012009285785f1d021d301ff0da90cc940121a670866b1e325ffbdaa0a19 = $this->env->getExtension("native_profiler");
        $__internal_0f9a012009285785f1d021d301ff0da90cc940121a670866b1e325ffbdaa0a19->enter($__internal_0f9a012009285785f1d021d301ff0da90cc940121a670866b1e325ffbdaa0a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0f9a012009285785f1d021d301ff0da90cc940121a670866b1e325ffbdaa0a19->leave($__internal_0f9a012009285785f1d021d301ff0da90cc940121a670866b1e325ffbdaa0a19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
