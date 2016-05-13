<?php

/* KPPlatformBundle::etudiantsShowList.html.twig */
class __TwigTemplate_45cbd1be588eee8bd90ac10e50ba3cfde5a7cebffb99de708a12a3e5fcc2de0a extends Twig_Template
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
        $__internal_6eb6132f3b2047ab563f3c7bb474917dc368b3d489be09bb52545caac40e114a = $this->env->getExtension("native_profiler");
        $__internal_6eb6132f3b2047ab563f3c7bb474917dc368b3d489be09bb52545caac40e114a->enter($__internal_6eb6132f3b2047ab563f3c7bb474917dc368b3d489be09bb52545caac40e114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::etudiantsShowList.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 2
            echo "    <div class=\"alert alert-success\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </div>
";
        }
        // line 8
        echo "
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("platform_etudiants_add");
        echo "\">Ajouter un enseigant</a></p>
<p>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "string", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etudiant"], "prenom", array()), "html", null, true);
            echo "<br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</p>";
        
        $__internal_6eb6132f3b2047ab563f3c7bb474917dc368b3d489be09bb52545caac40e114a->leave($__internal_6eb6132f3b2047ab563f3c7bb474917dc368b3d489be09bb52545caac40e114a_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::etudiantsShowList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  56 => 12,  52 => 11,  47 => 9,  44 => 8,  40 => 6,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if app.session.flashBag.has('success') %}*/
/*     <div class="alert alert-success">*/
/*         {% for msg in app.session.flashBag.get('success') %}*/
/*             {{ msg }}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* <p><a href="{{ path('platform_etudiants_add') }}">Ajouter un enseigant</a></p>*/
/* <p>*/
/*     {% for etudiant in etudiants %}*/
/*         {{ etudiant.string }} {{ etudiant.prenom }}<br />*/
/*     {% endfor %}*/
/* </p>*/
