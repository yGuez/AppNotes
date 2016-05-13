<?php

/* KPPlatformBundle::sessionsShowList.html.twig */
class __TwigTemplate_c49334d75a2f040cdc1d818b39f92d4540be1fae3b02e6a28a12eade909e99b7 extends Twig_Template
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
        $__internal_fd84535270fd19f030d413de424c2aa53765e4b783f923612bcecc116b7ba629 = $this->env->getExtension("native_profiler");
        $__internal_fd84535270fd19f030d413de424c2aa53765e4b783f923612bcecc116b7ba629->enter($__internal_fd84535270fd19f030d413de424c2aa53765e4b783f923612bcecc116b7ba629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KPPlatformBundle::sessionsShowList.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("platform_sessions_add");
        echo "\">Ajouter une session</a></p>
<p>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) ? $context["sessions"] : $this->getContext($context, "sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 12
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "titre", array()), "html", null, true);
            echo " du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</p><br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</p>";
        
        $__internal_fd84535270fd19f030d413de424c2aa53765e4b783f923612bcecc116b7ba629->leave($__internal_fd84535270fd19f030d413de424c2aa53765e4b783f923612bcecc116b7ba629_prof);

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
        return array (  69 => 14,  56 => 12,  52 => 11,  47 => 9,  44 => 8,  40 => 6,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
/* <p><a href="{{ path('platform_sessions_add') }}">Ajouter une session</a></p>*/
/* <p>*/
/*     {% for session in sessions %}*/
/*         <p>{{ session.titre }} du {{ session.dateDebut | date('d/m/Y') }} au {{ session.dateFin | date('d/m/Y') }}</p><br />*/
/*     {% endfor %}*/
/* </p>*/
