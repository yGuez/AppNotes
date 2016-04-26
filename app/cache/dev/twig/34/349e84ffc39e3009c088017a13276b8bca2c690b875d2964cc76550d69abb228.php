<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_86f6e78bc76aaaaefad732878a05b2025f99d13125f8777c3a53496cb2dbf05a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_7805df15856999d526b70c58bcc8c8ce7a71289f5006b6cfa71ea349d69a37ca = $this->env->getExtension("native_profiler");
        $__internal_7805df15856999d526b70c58bcc8c8ce7a71289f5006b6cfa71ea349d69a37ca->enter($__internal_7805df15856999d526b70c58bcc8c8ce7a71289f5006b6cfa71ea349d69a37ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7805df15856999d526b70c58bcc8c8ce7a71289f5006b6cfa71ea349d69a37ca->leave($__internal_7805df15856999d526b70c58bcc8c8ce7a71289f5006b6cfa71ea349d69a37ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2da8d5e340d429189b980ff29b71f601ee86225a1773dbd76cb05152f714dc16 = $this->env->getExtension("native_profiler");
        $__internal_2da8d5e340d429189b980ff29b71f601ee86225a1773dbd76cb05152f714dc16->enter($__internal_2da8d5e340d429189b980ff29b71f601ee86225a1773dbd76cb05152f714dc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2da8d5e340d429189b980ff29b71f601ee86225a1773dbd76cb05152f714dc16->leave($__internal_2da8d5e340d429189b980ff29b71f601ee86225a1773dbd76cb05152f714dc16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe765eafa183f001242ff705598563c3fbaf8cbe93244aa3c706bbd3d4ae003 = $this->env->getExtension("native_profiler");
        $__internal_fbe765eafa183f001242ff705598563c3fbaf8cbe93244aa3c706bbd3d4ae003->enter($__internal_fbe765eafa183f001242ff705598563c3fbaf8cbe93244aa3c706bbd3d4ae003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fbe765eafa183f001242ff705598563c3fbaf8cbe93244aa3c706bbd3d4ae003->leave($__internal_fbe765eafa183f001242ff705598563c3fbaf8cbe93244aa3c706bbd3d4ae003_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
