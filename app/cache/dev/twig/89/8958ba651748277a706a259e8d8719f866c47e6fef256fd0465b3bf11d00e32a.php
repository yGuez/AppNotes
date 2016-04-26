<?php

/* @KPPlatform/Advert/index.html.twig */
class __TwigTemplate_384babd4c514209682849f98a811cf9c6c7645c60c84ac661a99d6da59926d9b extends Twig_Template
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
        $__internal_dd617f843905dcd9c958309e5968c539507a225d9c358b04d29fec2e69cca29d = $this->env->getExtension("native_profiler");
        $__internal_dd617f843905dcd9c958309e5968c539507a225d9c358b04d29fec2e69cca29d->enter($__internal_dd617f843905dcd9c958309e5968c539507a225d9c358b04d29fec2e69cca29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KPPlatform/Advert/index.html.twig"));

        // line 2
        echo "

<!DOCTYPE html>

<html>

<head>

    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>

</head>

<body>

<h1>Hello ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>



<p>

    Le Hello World est un grand classique en programmation.

    Il signifie énormément, car cela veut dire que vous avez

    réussi à exécuter le programme pour accomplir une tâche simple :

    afficher ce hello world !

</p>

</body>

</html>";
        
        $__internal_dd617f843905dcd9c958309e5968c539507a225d9c358b04d29fec2e69cca29d->leave($__internal_dd617f843905dcd9c958309e5968c539507a225d9c358b04d29fec2e69cca29d_prof);

    }

    public function getTemplateName()
    {
        return "@KPPlatform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  22 => 2,);
    }
}
/* {# src/KP/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/* <head>*/
/* */
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <h1>Hello {{ nom }} !</h1>*/
/* */
/* */
/* */
/* <p>*/
/* */
/*     Le Hello World est un grand classique en programmation.*/
/* */
/*     Il signifie énormément, car cela veut dire que vous avez*/
/* */
/*     réussi à exécuter le programme pour accomplir une tâche simple :*/
/* */
/*     afficher ce hello world !*/
/* */
/* </p>*/
/* */
/* </body>*/
/* */
/* </html>*/
