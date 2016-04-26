<?php

/* KPPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_ada80e6081250fa0a2877b3590858762dbb29d9dd06fa244bfdd9a10e48fb0d1 extends Twig_Template
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
        $__internal_f99b9373ad4c352a2ef6500646a5945ecbbc603778c8e0f70cdd58dcba3d093e = $this->env->getExtension("native_profiler");
        $__internal_f99b9373ad4c352a2ef6500646a5945ecbbc603778c8e0f70cdd58dcba3d093e->enter($__internal_f99b9373ad4c352a2ef6500646a5945ecbbc603778c8e0f70cdd58dcba3d093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_f99b9373ad4c352a2ef6500646a5945ecbbc603778c8e0f70cdd58dcba3d093e->leave($__internal_f99b9373ad4c352a2ef6500646a5945ecbbc603778c8e0f70cdd58dcba3d093e_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle:Advert:index.html.twig";
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
