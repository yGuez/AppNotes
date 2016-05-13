<?php

/* KPPlatformBundle::enseignantsShowList.html.twig */
class __TwigTemplate_e9b9854b05990494faaa894235dafa4390bf556f929df432fbfd1cb32a5d119a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KPPlatformBundle::index.html.twig", "KPPlatformBundle::enseignantsShowList.html.twig", 1);
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
        $__internal_5348f8983b088d30b4398a9e97d7978007a8c2a886aac9b36fcd4a4a0d4e3de5 = $this->env->getExtension("native_profiler");
        $__internal_5348f8983b088d30b4398a9e97d7978007a8c2a886aac9b36fcd4a4a0d4e3de5->enter($__internal_5348f8983b088d30b4398a9e97d7978007a8c2a886aac9b36fcd4a4a0d4e3de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::enseignantsShowList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5348f8983b088d30b4398a9e97d7978007a8c2a886aac9b36fcd4a4a0d4e3de5->leave($__internal_5348f8983b088d30b4398a9e97d7978007a8c2a886aac9b36fcd4a4a0d4e3de5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe6b06bd9dddf0b99078cbd1ac8648f6dc5cf0aeb891b9399b6bf8629301b58 = $this->env->getExtension("native_profiler");
        $__internal_fbe6b06bd9dddf0b99078cbd1ac8648f6dc5cf0aeb891b9399b6bf8629301b58->enter($__internal_fbe6b06bd9dddf0b99078cbd1ac8648f6dc5cf0aeb891b9399b6bf8629301b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 8
            echo "    <div class=\"alert alert-success\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </div>
";
        }
        // line 14
        echo "
<p><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("platform_enseignants_add");
        echo "\">Ajouter un enseigant</a></p>
<p>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignants"]) ? $context["enseignants"] : $this->getContext($context, "enseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 18
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
        // line 20
        echo "</p>

";
        
        $__internal_fbe6b06bd9dddf0b99078cbd1ac8648f6dc5cf0aeb891b9399b6bf8629301b58->leave($__internal_fbe6b06bd9dddf0b99078cbd1ac8648f6dc5cf0aeb891b9399b6bf8629301b58_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::enseignantsShowList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  80 => 18,  76 => 17,  71 => 15,  68 => 14,  64 => 12,  55 => 10,  51 => 9,  48 => 8,  46 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "KPPlatformBundle::index.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
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
/* */
/* {% endblock %}*/
