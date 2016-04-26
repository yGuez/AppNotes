<?php

/* @KPPlatform/enseignants.html.twig */
class __TwigTemplate_52cd07ce3a48593159b9f8156281c9feaaa7c060e0277c8f5aee9abcc93b53e6 extends Twig_Template
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
        $__internal_2febd341b18bdbee05b21ae9062f0ccbaa6db5b42f426fa3059635c434ad5b0b = $this->env->getExtension("native_profiler");
        $__internal_2febd341b18bdbee05b21ae9062f0ccbaa6db5b42f426fa3059635c434ad5b0b->enter($__internal_2febd341b18bdbee05b21ae9062f0ccbaa6db5b42f426fa3059635c434ad5b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KPPlatform/enseignants.html.twig"));

        // line 1
        echo "<h3>Entrez vos Enseignants</h3>


    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_2febd341b18bdbee05b21ae9062f0ccbaa6db5b42f426fa3059635c434ad5b0b->leave($__internal_2febd341b18bdbee05b21ae9062f0ccbaa6db5b42f426fa3059635c434ad5b0b_prof);

    }

    public function getTemplateName()
    {
        return "@KPPlatform/enseignants.html.twig";
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
/* <h3>Entrez vos Enseignants</h3>*/
/* */
/* */
/*     {{ form(form) }}*/
/* */
