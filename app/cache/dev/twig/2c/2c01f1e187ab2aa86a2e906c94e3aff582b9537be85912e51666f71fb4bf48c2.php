<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e39b6a74c1965758b3c34eed7aae36009f7ff38ca3b38a7943e498bf02d9b747 extends Twig_Template
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
        $__internal_25e99d9d4bb399e47fdaf03a5b2341110d344491ae0fa2483ffb8617a74832f8 = $this->env->getExtension("native_profiler");
        $__internal_25e99d9d4bb399e47fdaf03a5b2341110d344491ae0fa2483ffb8617a74832f8->enter($__internal_25e99d9d4bb399e47fdaf03a5b2341110d344491ae0fa2483ffb8617a74832f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_25e99d9d4bb399e47fdaf03a5b2341110d344491ae0fa2483ffb8617a74832f8->leave($__internal_25e99d9d4bb399e47fdaf03a5b2341110d344491ae0fa2483ffb8617a74832f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
