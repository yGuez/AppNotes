<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4f3cfcdf473c383507d9114acb338bc5bcbb8378c8da7acb3a8c98bd96adcd8a extends Twig_Template
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
        $__internal_38c70432692d5f1b78609c166b88e9c3a4dd21708017c35ecfb01805d3434017 = $this->env->getExtension("native_profiler");
        $__internal_38c70432692d5f1b78609c166b88e9c3a4dd21708017c35ecfb01805d3434017->enter($__internal_38c70432692d5f1b78609c166b88e9c3a4dd21708017c35ecfb01805d3434017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_38c70432692d5f1b78609c166b88e9c3a4dd21708017c35ecfb01805d3434017->leave($__internal_38c70432692d5f1b78609c166b88e9c3a4dd21708017c35ecfb01805d3434017_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
