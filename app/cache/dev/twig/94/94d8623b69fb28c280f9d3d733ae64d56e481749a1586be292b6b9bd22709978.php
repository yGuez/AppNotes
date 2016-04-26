<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1c3ac3d7afa77699526069f62521a9ffd77e28691d1497ecc38d3fa9ac1df108 extends Twig_Template
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
        $__internal_5da90eefddf106c7290a6d5417f4ffbca804bbfdce9789a58115ecb5460e7f7e = $this->env->getExtension("native_profiler");
        $__internal_5da90eefddf106c7290a6d5417f4ffbca804bbfdce9789a58115ecb5460e7f7e->enter($__internal_5da90eefddf106c7290a6d5417f4ffbca804bbfdce9789a58115ecb5460e7f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5da90eefddf106c7290a6d5417f4ffbca804bbfdce9789a58115ecb5460e7f7e->leave($__internal_5da90eefddf106c7290a6d5417f4ffbca804bbfdce9789a58115ecb5460e7f7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
