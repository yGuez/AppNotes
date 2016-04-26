<?php

/* :session:show.html.twig */
class __TwigTemplate_6465e8c0aaefb66ca60b9f2e4225baf9271b6ed9623e0b17feca16df6cc5fa8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":session:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_773eeb8f13150716288655db84ce47340a8772a0d2b47e13220b7cec85ad3b30 = $this->env->getExtension("native_profiler");
        $__internal_773eeb8f13150716288655db84ce47340a8772a0d2b47e13220b7cec85ad3b30->enter($__internal_773eeb8f13150716288655db84ce47340a8772a0d2b47e13220b7cec85ad3b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773eeb8f13150716288655db84ce47340a8772a0d2b47e13220b7cec85ad3b30->leave($__internal_773eeb8f13150716288655db84ce47340a8772a0d2b47e13220b7cec85ad3b30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2722f8d92731519dab9fbdd7dd15f910fc49681642b7787de8707e4715096917 = $this->env->getExtension("native_profiler");
        $__internal_2722f8d92731519dab9fbdd7dd15f910fc49681642b7787de8707e4715096917->enter($__internal_2722f8d92731519dab9fbdd7dd15f910fc49681642b7787de8707e4715096917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Session</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "dateFin", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("session_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2722f8d92731519dab9fbdd7dd15f910fc49681642b7787de8707e4715096917->leave($__internal_2722f8d92731519dab9fbdd7dd15f910fc49681642b7787de8707e4715096917_prof);

    }

    public function getTemplateName()
    {
        return ":session:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Session</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ session.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ session.titre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datedebut</th>*/
/*                 <td>{% if session.dateDebut %}{{ session.dateDebut|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datefin</th>*/
/*                 <td>{% if session.dateFin %}{{ session.dateFin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('session_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
