<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1d6d3111004d5222b7cdb25e8514bdf059eb334b39eff693798cf93efe7acbb7 extends Twig_Template
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
        $__internal_b1a902ae36b71f2138dd1124b089dabf0e46b686a26d36db0c6f8675b6c2353c = $this->env->getExtension("native_profiler");
        $__internal_b1a902ae36b71f2138dd1124b089dabf0e46b686a26d36db0c6f8675b6c2353c->enter($__internal_b1a902ae36b71f2138dd1124b089dabf0e46b686a26d36db0c6f8675b6c2353c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b1a902ae36b71f2138dd1124b089dabf0e46b686a26d36db0c6f8675b6c2353c->leave($__internal_b1a902ae36b71f2138dd1124b089dabf0e46b686a26d36db0c6f8675b6c2353c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
