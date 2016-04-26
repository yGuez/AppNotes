<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d74a0298af7022fc4f0cf888b0bda596fbbb94a009dda6c793d2c9e1de1a2584 extends Twig_Template
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
        $__internal_8994749b82ac2726a4a78bb8783b7102ae8e512b33c9e7ff0e568cdb64659b40 = $this->env->getExtension("native_profiler");
        $__internal_8994749b82ac2726a4a78bb8783b7102ae8e512b33c9e7ff0e568cdb64659b40->enter($__internal_8994749b82ac2726a4a78bb8783b7102ae8e512b33c9e7ff0e568cdb64659b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8994749b82ac2726a4a78bb8783b7102ae8e512b33c9e7ff0e568cdb64659b40->leave($__internal_8994749b82ac2726a4a78bb8783b7102ae8e512b33c9e7ff0e568cdb64659b40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
