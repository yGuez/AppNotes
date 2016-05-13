<?php

/* KPPlatformBundle::etudiantsShowList.html.twig */
class __TwigTemplate_45cbd1be588eee8bd90ac10e50ba3cfde5a7cebffb99de708a12a3e5fcc2de0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KPPlatformBundle::index.html.twig", "KPPlatformBundle::etudiantsShowList.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KPPlatformBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_877fa73b85b08958a79b1c3a3f234ed36790fb42ed7fabfcc417b24941092395 = $this->env->getExtension("native_profiler");
        $__internal_877fa73b85b08958a79b1c3a3f234ed36790fb42ed7fabfcc417b24941092395->enter($__internal_877fa73b85b08958a79b1c3a3f234ed36790fb42ed7fabfcc417b24941092395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::etudiantsShowList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877fa73b85b08958a79b1c3a3f234ed36790fb42ed7fabfcc417b24941092395->leave($__internal_877fa73b85b08958a79b1c3a3f234ed36790fb42ed7fabfcc417b24941092395_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cb4d13090d23e856a2f11240fc86450590fc86d15ddd328edc4f3db8e629666 = $this->env->getExtension("native_profiler");
        $__internal_3cb4d13090d23e856a2f11240fc86450590fc86d15ddd328edc4f3db8e629666->enter($__internal_3cb4d13090d23e856a2f11240fc86450590fc86d15ddd328edc4f3db8e629666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </div>
";
        }
        // line 13
        echo "
<p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("platform_etudiants_add");
        echo "\">Ajouter un etudiants</a></p>
<p>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiants"]) ? $context["etudiants"] : $this->getContext($context, "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant"]) {
            // line 17
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
        // line 19
        echo "</p>

";
        
        $__internal_3cb4d13090d23e856a2f11240fc86450590fc86d15ddd328edc4f3db8e629666->leave($__internal_3cb4d13090d23e856a2f11240fc86450590fc86d15ddd328edc4f3db8e629666_prof);

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
        return array (  90 => 19,  79 => 17,  75 => 16,  70 => 14,  67 => 13,  63 => 11,  54 => 9,  50 => 8,  47 => 7,  45 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "KPPlatformBundle::index.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* {% if app.session.flashBag.has('success') %}*/
/*     <div class="alert alert-success">*/
/*         {% for msg in app.session.flashBag.get('success') %}*/
/*             {{ msg }}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* <p><a href="{{ path('platform_etudiants_add') }}">Ajouter un etudiants</a></p>*/
/* <p>*/
/*     {% for etudiant in etudiants %}*/
/*         {{ etudiant.string }} {{ etudiant.prenom }}<br />*/
/*     {% endfor %}*/
/* </p>*/
/* */
/* {% endblock %}*/
