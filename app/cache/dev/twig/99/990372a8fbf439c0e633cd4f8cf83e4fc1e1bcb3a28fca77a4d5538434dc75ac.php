<?php

/* enseignant/show.html.twig */
class __TwigTemplate_006a2160a411e6789639c52894cbcbf43b924f62d84e66fb706e9e494f48a253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignant/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22739172358d1b100517f5657271a97f6505d48dcdf548ed00bcba638f57757a = $this->env->getExtension("native_profiler");
        $__internal_22739172358d1b100517f5657271a97f6505d48dcdf548ed00bcba638f57757a->enter($__internal_22739172358d1b100517f5657271a97f6505d48dcdf548ed00bcba638f57757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignant/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22739172358d1b100517f5657271a97f6505d48dcdf548ed00bcba638f57757a->leave($__internal_22739172358d1b100517f5657271a97f6505d48dcdf548ed00bcba638f57757a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebf38baffcd9b3845e3cca6202ec7c2bcbb08040fd826712063ca43c53d51e36 = $this->env->getExtension("native_profiler");
        $__internal_ebf38baffcd9b3845e3cca6202ec7c2bcbb08040fd826712063ca43c53d51e36->enter($__internal_ebf38baffcd9b3845e3cca6202ec7c2bcbb08040fd826712063ca43c53d51e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enseignant</h1>

    <h3>Formulaire d'annonce</h3>

    <div class=\"well\">
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_ebf38baffcd9b3845e3cca6202ec7c2bcbb08040fd826712063ca43c53d51e36->leave($__internal_ebf38baffcd9b3845e3cca6202ec7c2bcbb08040fd826712063ca43c53d51e36_prof);

    }

    public function getTemplateName()
    {
        return "enseignant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Enseignant</h1>*/
/* */
/*     <h3>Formulaire d'annonce</h3>*/
/* */
/*     <div class="well">*/
/*         {{ form(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
