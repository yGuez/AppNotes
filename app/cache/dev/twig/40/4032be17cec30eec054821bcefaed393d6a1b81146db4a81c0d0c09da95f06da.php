<?php

/* KPPlatformBundle::enseignantsShow.html.twig */
class __TwigTemplate_f0a746279465f88c68c9b5a0ef1963d34bca0745491d1fae447f11d9f85a2ef9 extends Twig_Template
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
        $__internal_55652b926bc0d2cd805482893d6d551b6ed8f6fe7124260462d11e9b1de04a7f = $this->env->getExtension("native_profiler");
        $__internal_55652b926bc0d2cd805482893d6d551b6ed8f6fe7124260462d11e9b1de04a7f->enter($__internal_55652b926bc0d2cd805482893d6d551b6ed8f6fe7124260462d11e9b1de04a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::enseignantsShow.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("platform_enseignants_add");
        echo "\">Ajouter un enseigant</a></p>
<p>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignants"]) ? $context["enseignants"] : $this->getContext($context, "enseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo "<br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</p>";
        
        $__internal_55652b926bc0d2cd805482893d6d551b6ed8f6fe7124260462d11e9b1de04a7f->leave($__internal_55652b926bc0d2cd805482893d6d551b6ed8f6fe7124260462d11e9b1de04a7f_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::enseignantsShow.html.twig";
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
/* <p><a href="{{ path('platform_enseignants_add') }}">Ajouter un enseigant</a></p>*/
/* <p>*/
/*     {% for enseignant in enseignants %}*/
/*         {{ enseignant.nom }} {{ enseignant.prenom }}<br />*/
/*     {% endfor %}*/
/* </p>*/
