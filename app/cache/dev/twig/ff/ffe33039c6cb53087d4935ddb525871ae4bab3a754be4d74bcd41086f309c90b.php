<?php

/* :enseignant:show.html.twig */
class __TwigTemplate_a5ca7f69782503c4c260b89705dff03c800f265e24ceff17f87e73d0c20a92bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enseignant:show.html.twig", 1);
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
        $__internal_a9b6616c6337fd83f609912ae173de835895051b974024c881fce09f29670f9c = $this->env->getExtension("native_profiler");
        $__internal_a9b6616c6337fd83f609912ae173de835895051b974024c881fce09f29670f9c->enter($__internal_a9b6616c6337fd83f609912ae173de835895051b974024c881fce09f29670f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignant:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b6616c6337fd83f609912ae173de835895051b974024c881fce09f29670f9c->leave($__internal_a9b6616c6337fd83f609912ae173de835895051b974024c881fce09f29670f9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_772d1732137b1c61857177d64d0d65c9d580fb36438b37705cd8dfc5db1f726c = $this->env->getExtension("native_profiler");
        $__internal_772d1732137b1c61857177d64d0d65c9d580fb36438b37705cd8dfc5db1f726c->enter($__internal_772d1732137b1c61857177d64d0d65c9d580fb36438b37705cd8dfc5db1f726c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_772d1732137b1c61857177d64d0d65c9d580fb36438b37705cd8dfc5db1f726c->leave($__internal_772d1732137b1c61857177d64d0d65c9d580fb36438b37705cd8dfc5db1f726c_prof);

    }

    public function getTemplateName()
    {
        return ":enseignant:show.html.twig";
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
