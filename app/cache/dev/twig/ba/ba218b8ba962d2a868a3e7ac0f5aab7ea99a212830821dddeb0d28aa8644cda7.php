<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ad939b60fcc1d9bc7abb60f0bc7ef148495a24f3532334dfe8c50a8cf836026b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96dafabced0bea58154be3d93ee625dea60cc6df4b2004e0771089d851096481 = $this->env->getExtension("native_profiler");
        $__internal_96dafabced0bea58154be3d93ee625dea60cc6df4b2004e0771089d851096481->enter($__internal_96dafabced0bea58154be3d93ee625dea60cc6df4b2004e0771089d851096481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96dafabced0bea58154be3d93ee625dea60cc6df4b2004e0771089d851096481->leave($__internal_96dafabced0bea58154be3d93ee625dea60cc6df4b2004e0771089d851096481_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13ba71ec5a2cdc743b1ce2410bbcc222f16e63fff047061555c6394bd09b7423 = $this->env->getExtension("native_profiler");
        $__internal_13ba71ec5a2cdc743b1ce2410bbcc222f16e63fff047061555c6394bd09b7423->enter($__internal_13ba71ec5a2cdc743b1ce2410bbcc222f16e63fff047061555c6394bd09b7423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_13ba71ec5a2cdc743b1ce2410bbcc222f16e63fff047061555c6394bd09b7423->leave($__internal_13ba71ec5a2cdc743b1ce2410bbcc222f16e63fff047061555c6394bd09b7423_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a538c5d0fece5ea2c343c70810ff3e556fcb891fc476bfd621d0719ebc42d9fb = $this->env->getExtension("native_profiler");
        $__internal_a538c5d0fece5ea2c343c70810ff3e556fcb891fc476bfd621d0719ebc42d9fb->enter($__internal_a538c5d0fece5ea2c343c70810ff3e556fcb891fc476bfd621d0719ebc42d9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a538c5d0fece5ea2c343c70810ff3e556fcb891fc476bfd621d0719ebc42d9fb->leave($__internal_a538c5d0fece5ea2c343c70810ff3e556fcb891fc476bfd621d0719ebc42d9fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
