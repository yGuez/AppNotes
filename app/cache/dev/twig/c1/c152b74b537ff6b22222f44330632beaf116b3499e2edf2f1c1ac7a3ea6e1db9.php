<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a4f59b2a00fec8bd95e8b7c2f1a341418e163f63316e9c2cd21ea23d00124432 extends Twig_Template
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
        $__internal_5e362777f0e2217e427b9905eae3f8bd0962de9bd9bb27c3d9b8327ef9b93c77 = $this->env->getExtension("native_profiler");
        $__internal_5e362777f0e2217e427b9905eae3f8bd0962de9bd9bb27c3d9b8327ef9b93c77->enter($__internal_5e362777f0e2217e427b9905eae3f8bd0962de9bd9bb27c3d9b8327ef9b93c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5e362777f0e2217e427b9905eae3f8bd0962de9bd9bb27c3d9b8327ef9b93c77->leave($__internal_5e362777f0e2217e427b9905eae3f8bd0962de9bd9bb27c3d9b8327ef9b93c77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
