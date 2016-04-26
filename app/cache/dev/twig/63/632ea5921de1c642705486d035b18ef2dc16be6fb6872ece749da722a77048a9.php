<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_92029bec8bd38b58bf1f489ba4f76544f9a5fba1be4d1b18e86cfce5f49f0e92 extends Twig_Template
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
        $__internal_0a7861028a129acb22c5fd22e38f7c546d471543ab0bb685111a3d4dd5f28dc0 = $this->env->getExtension("native_profiler");
        $__internal_0a7861028a129acb22c5fd22e38f7c546d471543ab0bb685111a3d4dd5f28dc0->enter($__internal_0a7861028a129acb22c5fd22e38f7c546d471543ab0bb685111a3d4dd5f28dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0a7861028a129acb22c5fd22e38f7c546d471543ab0bb685111a3d4dd5f28dc0->leave($__internal_0a7861028a129acb22c5fd22e38f7c546d471543ab0bb685111a3d4dd5f28dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
