<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d7ae65bf136888be3c246fd4ff69fd530e8370d0bc4f557e13177aeb10c6bcc9 extends Twig_Template
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
        $__internal_59c8ed3aca7b8f109363123d27a7b243f2b6cfc873c1f6563f8ebc48fad48462 = $this->env->getExtension("native_profiler");
        $__internal_59c8ed3aca7b8f109363123d27a7b243f2b6cfc873c1f6563f8ebc48fad48462->enter($__internal_59c8ed3aca7b8f109363123d27a7b243f2b6cfc873c1f6563f8ebc48fad48462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_59c8ed3aca7b8f109363123d27a7b243f2b6cfc873c1f6563f8ebc48fad48462->leave($__internal_59c8ed3aca7b8f109363123d27a7b243f2b6cfc873c1f6563f8ebc48fad48462_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
