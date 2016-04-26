<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a36c7c0128ccfd378fb7e2955dcc24d4399faed645ad4e47c5bd2336ef4ffa47 extends Twig_Template
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
        $__internal_cfb29b3d3e54b64ec7c072de5e4388c0166359786638efaff5a012f559445486 = $this->env->getExtension("native_profiler");
        $__internal_cfb29b3d3e54b64ec7c072de5e4388c0166359786638efaff5a012f559445486->enter($__internal_cfb29b3d3e54b64ec7c072de5e4388c0166359786638efaff5a012f559445486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cfb29b3d3e54b64ec7c072de5e4388c0166359786638efaff5a012f559445486->leave($__internal_cfb29b3d3e54b64ec7c072de5e4388c0166359786638efaff5a012f559445486_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
