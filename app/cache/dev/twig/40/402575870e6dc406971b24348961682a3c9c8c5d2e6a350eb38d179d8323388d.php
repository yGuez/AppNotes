<?php

/* :session:index.html.twig */
class __TwigTemplate_fc7c4bb0633085c4dae676083704e1cae45df8067110724875a6132cc60da6cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":session:index.html.twig", 1);
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
        $__internal_2a58734def8087bf7b1fb69cd87143b78090cd9e4417b02825a5507e741c30ff = $this->env->getExtension("native_profiler");
        $__internal_2a58734def8087bf7b1fb69cd87143b78090cd9e4417b02825a5507e741c30ff->enter($__internal_2a58734def8087bf7b1fb69cd87143b78090cd9e4417b02825a5507e741c30ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a58734def8087bf7b1fb69cd87143b78090cd9e4417b02825a5507e741c30ff->leave($__internal_2a58734def8087bf7b1fb69cd87143b78090cd9e4417b02825a5507e741c30ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e05a5f0235b5b422f4dfd58804ceb77a3d396b91da73b65fabc753b65ac4285 = $this->env->getExtension("native_profiler");
        $__internal_0e05a5f0235b5b422f4dfd58804ceb77a3d396b91da73b65fabc753b65ac4285->enter($__internal_0e05a5f0235b5b422f4dfd58804ceb77a3d396b91da73b65fabc753b65ac4285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Session list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Datedebut</th>
                <th>Datefin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) ? $context["sessions"] : $this->getContext($context, "sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("session_show", array("id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["session"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateDebut", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["session"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["session"], "dateFin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("session_show", array("id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    
";
        
        $__internal_0e05a5f0235b5b422f4dfd58804ceb77a3d396b91da73b65fabc753b65ac4285->leave($__internal_0e05a5f0235b5b422f4dfd58804ceb77a3d396b91da73b65fabc753b65ac4285_prof);

    }

    public function getTemplateName()
    {
        return ":session:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  87 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Session list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Datedebut</th>*/
/*                 <th>Datefin</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for session in sessions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('session_show', { 'id': session.id }) }}">{{ session.id }}</a></td>*/
/*                 <td>{{ session.titre }}</td>*/
/*                 <td>{% if session.dateDebut %}{{ session.dateDebut|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if session.dateFin %}{{ session.dateFin|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('session_show', { 'id': session.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
