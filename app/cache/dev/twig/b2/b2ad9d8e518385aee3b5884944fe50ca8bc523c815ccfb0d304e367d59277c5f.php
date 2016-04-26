<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_642be886781d797a8d8404bf52b1d349c25f983af38318545b4886ce0d3c3d5b extends Twig_Template
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
        $__internal_d46113419eb45f6e1bd25b4c13be6d94b089c4b6508a72645134e2dd77b5904f = $this->env->getExtension("native_profiler");
        $__internal_d46113419eb45f6e1bd25b4c13be6d94b089c4b6508a72645134e2dd77b5904f->enter($__internal_d46113419eb45f6e1bd25b4c13be6d94b089c4b6508a72645134e2dd77b5904f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d46113419eb45f6e1bd25b4c13be6d94b089c4b6508a72645134e2dd77b5904f->leave($__internal_d46113419eb45f6e1bd25b4c13be6d94b089c4b6508a72645134e2dd77b5904f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5828cb574e5cd95fb1645e4d1d78780dd2367059a73a849b74ed1b7f5ea1a65f = $this->env->getExtension("native_profiler");
        $__internal_5828cb574e5cd95fb1645e4d1d78780dd2367059a73a849b74ed1b7f5ea1a65f->enter($__internal_5828cb574e5cd95fb1645e4d1d78780dd2367059a73a849b74ed1b7f5ea1a65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5828cb574e5cd95fb1645e4d1d78780dd2367059a73a849b74ed1b7f5ea1a65f->leave($__internal_5828cb574e5cd95fb1645e4d1d78780dd2367059a73a849b74ed1b7f5ea1a65f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
