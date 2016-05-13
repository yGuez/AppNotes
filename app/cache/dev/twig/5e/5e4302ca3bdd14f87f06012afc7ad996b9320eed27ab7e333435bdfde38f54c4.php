<?php

/* KPPlatformBundle::enseignants.html.twig */
class __TwigTemplate_1bdda3ff13e1bc8614094050afef8d09b785d436c703b697e929d3486a7fb521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KPPlatformBundle::index.html.twig", "KPPlatformBundle::enseignants.html.twig", 1);
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
        $__internal_dad5fbba0b927874a6ce0c2532fe1a5cc45d94e661172ae2fdc03a239632c891 = $this->env->getExtension("native_profiler");
        $__internal_dad5fbba0b927874a6ce0c2532fe1a5cc45d94e661172ae2fdc03a239632c891->enter($__internal_dad5fbba0b927874a6ce0c2532fe1a5cc45d94e661172ae2fdc03a239632c891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::enseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dad5fbba0b927874a6ce0c2532fe1a5cc45d94e661172ae2fdc03a239632c891->leave($__internal_dad5fbba0b927874a6ce0c2532fe1a5cc45d94e661172ae2fdc03a239632c891_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_424fbd4404bf7023d9480a9a42cf79e3e3364e6e01c2db2345f1acf1d6398139 = $this->env->getExtension("native_profiler");
        $__internal_424fbd4404bf7023d9480a9a42cf79e3e3364e6e01c2db2345f1acf1d6398139->enter($__internal_424fbd4404bf7023d9480a9a42cf79e3e3364e6e01c2db2345f1acf1d6398139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h3>Entrez vos Enseignants</h3>


    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_424fbd4404bf7023d9480a9a42cf79e3e3364e6e01c2db2345f1acf1d6398139->leave($__internal_424fbd4404bf7023d9480a9a42cf79e3e3364e6e01c2db2345f1acf1d6398139_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::enseignants.html.twig";
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
/*     <h3>Entrez vos Enseignants</h3>*/
/* */
/* */
/*     {{ form(form) }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
