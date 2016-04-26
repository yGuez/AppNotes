<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2eae8dd37a724933f30a7b7542294c1abfd901fddcc833809d9bb5c4cd62b892 extends Twig_Template
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
        $__internal_2c9d683304b8ae055398455e0f252f56299ef6dbf62469d3cc8a8aff3948a7a4 = $this->env->getExtension("native_profiler");
        $__internal_2c9d683304b8ae055398455e0f252f56299ef6dbf62469d3cc8a8aff3948a7a4->enter($__internal_2c9d683304b8ae055398455e0f252f56299ef6dbf62469d3cc8a8aff3948a7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2c9d683304b8ae055398455e0f252f56299ef6dbf62469d3cc8a8aff3948a7a4->leave($__internal_2c9d683304b8ae055398455e0f252f56299ef6dbf62469d3cc8a8aff3948a7a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
