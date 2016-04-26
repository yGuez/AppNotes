<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_83b2eb12aa0e796c1c133f297e7365f6850b51459e2c36ccaa2ac4eb53ff931b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15a12bdd199c4af2ebd22dc8a455dc72c439a8b1f519703a6988ed16e3f8e9bd = $this->env->getExtension("native_profiler");
        $__internal_15a12bdd199c4af2ebd22dc8a455dc72c439a8b1f519703a6988ed16e3f8e9bd->enter($__internal_15a12bdd199c4af2ebd22dc8a455dc72c439a8b1f519703a6988ed16e3f8e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_15a12bdd199c4af2ebd22dc8a455dc72c439a8b1f519703a6988ed16e3f8e9bd->leave($__internal_15a12bdd199c4af2ebd22dc8a455dc72c439a8b1f519703a6988ed16e3f8e9bd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2f7b02a95fc0d8f2bd79654bdedbb4d591a253f1c7a029d32fd5090b4c31ea6 = $this->env->getExtension("native_profiler");
        $__internal_c2f7b02a95fc0d8f2bd79654bdedbb4d591a253f1c7a029d32fd5090b4c31ea6->enter($__internal_c2f7b02a95fc0d8f2bd79654bdedbb4d591a253f1c7a029d32fd5090b4c31ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c2f7b02a95fc0d8f2bd79654bdedbb4d591a253f1c7a029d32fd5090b4c31ea6->leave($__internal_c2f7b02a95fc0d8f2bd79654bdedbb4d591a253f1c7a029d32fd5090b4c31ea6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
