<?php

/* base.html.twig */
class __TwigTemplate_2b318514c16cc9174b6e9ff19863372551140a3ce210be5465d35066b9f0d072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9db906bb277b109ef6312b5be5af0985ed12158800fedcbc2dfe808c29d2c9b8 = $this->env->getExtension("native_profiler");
        $__internal_9db906bb277b109ef6312b5be5af0985ed12158800fedcbc2dfe808c29d2c9b8->enter($__internal_9db906bb277b109ef6312b5be5af0985ed12158800fedcbc2dfe808c29d2c9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9db906bb277b109ef6312b5be5af0985ed12158800fedcbc2dfe808c29d2c9b8->leave($__internal_9db906bb277b109ef6312b5be5af0985ed12158800fedcbc2dfe808c29d2c9b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7c7d3045316f1074bcbc184a8f6f3692cc67190bcd6994a7a302a1c5d57704d = $this->env->getExtension("native_profiler");
        $__internal_d7c7d3045316f1074bcbc184a8f6f3692cc67190bcd6994a7a302a1c5d57704d->enter($__internal_d7c7d3045316f1074bcbc184a8f6f3692cc67190bcd6994a7a302a1c5d57704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d7c7d3045316f1074bcbc184a8f6f3692cc67190bcd6994a7a302a1c5d57704d->leave($__internal_d7c7d3045316f1074bcbc184a8f6f3692cc67190bcd6994a7a302a1c5d57704d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2370cd73a5404c07bc9ed5b535a379fab120fa0804fb9b025228895471df11ea = $this->env->getExtension("native_profiler");
        $__internal_2370cd73a5404c07bc9ed5b535a379fab120fa0804fb9b025228895471df11ea->enter($__internal_2370cd73a5404c07bc9ed5b535a379fab120fa0804fb9b025228895471df11ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2370cd73a5404c07bc9ed5b535a379fab120fa0804fb9b025228895471df11ea->leave($__internal_2370cd73a5404c07bc9ed5b535a379fab120fa0804fb9b025228895471df11ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_25f4d43f611578bb304fa61c0a4f03bf444524e28d2952d11b99cdd049522d8d = $this->env->getExtension("native_profiler");
        $__internal_25f4d43f611578bb304fa61c0a4f03bf444524e28d2952d11b99cdd049522d8d->enter($__internal_25f4d43f611578bb304fa61c0a4f03bf444524e28d2952d11b99cdd049522d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_25f4d43f611578bb304fa61c0a4f03bf444524e28d2952d11b99cdd049522d8d->leave($__internal_25f4d43f611578bb304fa61c0a4f03bf444524e28d2952d11b99cdd049522d8d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f258a42744b120b5e6f8598823712f0f90fd47f462c14797935c445a6882d235 = $this->env->getExtension("native_profiler");
        $__internal_f258a42744b120b5e6f8598823712f0f90fd47f462c14797935c445a6882d235->enter($__internal_f258a42744b120b5e6f8598823712f0f90fd47f462c14797935c445a6882d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f258a42744b120b5e6f8598823712f0f90fd47f462c14797935c445a6882d235->leave($__internal_f258a42744b120b5e6f8598823712f0f90fd47f462c14797935c445a6882d235_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
