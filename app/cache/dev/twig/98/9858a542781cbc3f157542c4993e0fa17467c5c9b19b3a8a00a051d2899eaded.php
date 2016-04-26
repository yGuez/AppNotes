<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bbe25c3b417583e1bafaebf903a1abea7c36a5afdeca2f52c4eb715a51ad0eb2 extends Twig_Template
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
        $__internal_0ea5cbb1af610e1a8f60ab9f10bffb7a2c15aef68ee29887cb79cff87932847e = $this->env->getExtension("native_profiler");
        $__internal_0ea5cbb1af610e1a8f60ab9f10bffb7a2c15aef68ee29887cb79cff87932847e->enter($__internal_0ea5cbb1af610e1a8f60ab9f10bffb7a2c15aef68ee29887cb79cff87932847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0ea5cbb1af610e1a8f60ab9f10bffb7a2c15aef68ee29887cb79cff87932847e->leave($__internal_0ea5cbb1af610e1a8f60ab9f10bffb7a2c15aef68ee29887cb79cff87932847e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
