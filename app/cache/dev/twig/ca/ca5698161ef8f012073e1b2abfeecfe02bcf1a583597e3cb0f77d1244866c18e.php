<?php

/* KPPlatformBundle::index.html.twig */
class __TwigTemplate_2a5344270629232dfa665d60a83a05d529a673a78ebc79570de2cf9553849e7f extends Twig_Template
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
        $__internal_fbba4ed74012c3636085967cc71a0e0b69a5e4fd4843379827cd838e4229b12e = $this->env->getExtension("native_profiler");
        $__internal_fbba4ed74012c3636085967cc71a0e0b69a5e4fd4843379827cd838e4229b12e->enter($__internal_fbba4ed74012c3636085967cc71a0e0b69a5e4fd4843379827cd838e4229b12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::index.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\">

</head>
<body>

";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</body>
</html>";
        
        $__internal_fbba4ed74012c3636085967cc71a0e0b69a5e4fd4843379827cd838e4229b12e->leave($__internal_fbba4ed74012c3636085967cc71a0e0b69a5e4fd4843379827cd838e4229b12e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bda6639efe4d0a58f0a7013b6bd1d314fc12b7c9ee9757e4c925f7744c36d03 = $this->env->getExtension("native_profiler");
        $__internal_0bda6639efe4d0a58f0a7013b6bd1d314fc12b7c9ee9757e4c925f7744c36d03->enter($__internal_0bda6639efe4d0a58f0a7013b6bd1d314fc12b7c9ee9757e4c925f7744c36d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0bda6639efe4d0a58f0a7013b6bd1d314fc12b7c9ee9757e4c925f7744c36d03->leave($__internal_0bda6639efe4d0a58f0a7013b6bd1d314fc12b7c9ee9757e4c925f7744c36d03_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2784b0b4f4b2f7f3e411fa8e0da0d5afd4e5249edef23e8b4336340427f366d3 = $this->env->getExtension("native_profiler");
        $__internal_2784b0b4f4b2f7f3e411fa8e0da0d5afd4e5249edef23e8b4336340427f366d3->enter($__internal_2784b0b4f4b2f7f3e411fa8e0da0d5afd4e5249edef23e8b4336340427f366d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2784b0b4f4b2f7f3e411fa8e0da0d5afd4e5249edef23e8b4336340427f366d3->leave($__internal_2784b0b4f4b2f7f3e411fa8e0da0d5afd4e5249edef23e8b4336340427f366d3_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0f535848f61c9c35ac80c42af3ee16d501131e4162200c883e20f546c531a82 = $this->env->getExtension("native_profiler");
        $__internal_f0f535848f61c9c35ac80c42af3ee16d501131e4162200c883e20f546c531a82->enter($__internal_f0f535848f61c9c35ac80c42af3ee16d501131e4162200c883e20f546c531a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <ul class=\"menu\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("platform_enseignants_show_list");
        echo "\">Enseignants</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("platform_etudiants_show_list");
        echo "\">Etudiants</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("platform_sessions_show_list");
        echo "\">Sessions</a></li>
    </ul>
";
        
        $__internal_f0f535848f61c9c35ac80c42af3ee16d501131e4162200c883e20f546c531a82->leave($__internal_f0f535848f61c9c35ac80c42af3ee16d501131e4162200c883e20f546c531a82_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87ab5afa7b32094c1d3d0057629ed9ecf51a8262a5e0caf2496ce83217a5cdcd = $this->env->getExtension("native_profiler");
        $__internal_87ab5afa7b32094c1d3d0057629ed9ecf51a8262a5e0caf2496ce83217a5cdcd->enter($__internal_87ab5afa7b32094c1d3d0057629ed9ecf51a8262a5e0caf2496ce83217a5cdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87ab5afa7b32094c1d3d0057629ed9ecf51a8262a5e0caf2496ce83217a5cdcd->leave($__internal_87ab5afa7b32094c1d3d0057629ed9ecf51a8262a5e0caf2496ce83217a5cdcd_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 20,  103 => 17,  99 => 16,  95 => 15,  92 => 14,  86 => 13,  75 => 6,  63 => 5,  55 => 21,  53 => 20,  51 => 13,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" href="{{ asset("bundles/framework/css/styles.css")}}">*/
/* */
/* </head>*/
/* <body>*/
/* */
/* {% block body %}*/
/*     <ul class="menu">*/
/*         <li><a href="{{ path('platform_enseignants_show_list') }}">Enseignants</a></li>*/
/*         <li><a href="{{ path('platform_etudiants_show_list') }}">Etudiants</a></li>*/
/*         <li><a href="{{ path('platform_sessions_show_list') }}">Sessions</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
