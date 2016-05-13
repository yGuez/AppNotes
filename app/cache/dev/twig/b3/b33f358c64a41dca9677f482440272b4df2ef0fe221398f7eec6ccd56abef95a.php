<?php

/* KPPlatformBundle::sessionsShowList.html.twig */
class __TwigTemplate_c49334d75a2f040cdc1d818b39f92d4540be1fae3b02e6a28a12eade909e99b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KPPlatformBundle::index.html.twig", "KPPlatformBundle::sessionsShowList.html.twig", 1);
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
        $__internal_e1727ea7c83d21b9808d42569a4a6dc9a64b3eb92d3f78ad7b65b15882ba7a54 = $this->env->getExtension("native_profiler");
        $__internal_e1727ea7c83d21b9808d42569a4a6dc9a64b3eb92d3f78ad7b65b15882ba7a54->enter($__internal_e1727ea7c83d21b9808d42569a4a6dc9a64b3eb92d3f78ad7b65b15882ba7a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::sessionsShowList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1727ea7c83d21b9808d42569a4a6dc9a64b3eb92d3f78ad7b65b15882ba7a54->leave($__internal_e1727ea7c83d21b9808d42569a4a6dc9a64b3eb92d3f78ad7b65b15882ba7a54_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7f220c4987da3789f7d74bfd6ab526e7012cfc5a77a5ebd16d844405ec0adea = $this->env->getExtension("native_profiler");
        $__internal_d7f220c4987da3789f7d74bfd6ab526e7012cfc5a77a5ebd16d844405ec0adea->enter($__internal_d7f220c4987da3789f7d74bfd6ab526e7012cfc5a77a5ebd16d844405ec0adea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </div>
    ";
        }
        // line 13
        echo "
    <p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("platform_sessions_add");
        echo "\">Ajouter une session</a></p>
    <p>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) ? $context["sessions"] : $this->getContext($context, "sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 17
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "titre", array()), "html", null, true);
            echo " du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </p>
";
        
        $__internal_d7f220c4987da3789f7d74bfd6ab526e7012cfc5a77a5ebd16d844405ec0adea->leave($__internal_d7f220c4987da3789f7d74bfd6ab526e7012cfc5a77a5ebd16d844405ec0adea_prof);

    }

    public function getTemplateName()
    {
        return "KPPlatformBundle::sessionsShowList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  79 => 17,  75 => 16,  70 => 14,  67 => 13,  63 => 11,  54 => 9,  50 => 8,  47 => 7,  45 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "KPPlatformBundle::index.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {% if app.session.flashBag.has('success') %}*/
/*         <div class="alert alert-success">*/
/*             {% for msg in app.session.flashBag.get('success') %}*/
/*                 {{ msg }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <p><a href="{{ path('platform_sessions_add') }}">Ajouter une session</a></p>*/
/*     <p>*/
/*         {% for session in sessions %}*/
/*             <p>{{ session.titre }} du {{ session.dateDebut | date('d/m/Y') }} au {{ session.dateFin | date('d/m/Y') }}</p>*/
/*         {% endfor %}*/
/*     </p>*/
/* {% endblock %}*/
