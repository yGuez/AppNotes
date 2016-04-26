<?php

/* :enseignant:index.html.twig */
class __TwigTemplate_f41126ddad1d46166eb432a38bbc0cfd98285847dad0fe0ee7f8c6f6e67cb039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enseignant:index.html.twig", 1);
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
        $__internal_d487e78eb671fb47e761580409d91d857f9cfe5c87054cfd4cc11a980421a008 = $this->env->getExtension("native_profiler");
        $__internal_d487e78eb671fb47e761580409d91d857f9cfe5c87054cfd4cc11a980421a008->enter($__internal_d487e78eb671fb47e761580409d91d857f9cfe5c87054cfd4cc11a980421a008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d487e78eb671fb47e761580409d91d857f9cfe5c87054cfd4cc11a980421a008->leave($__internal_d487e78eb671fb47e761580409d91d857f9cfe5c87054cfd4cc11a980421a008_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3195ed7d5a0ac3b634fbbd765171f1acef96ed307f9b5b850c0f3ce4dc2d9320 = $this->env->getExtension("native_profiler");
        $__internal_3195ed7d5a0ac3b634fbbd765171f1acef96ed307f9b5b850c0f3ce4dc2d9320->enter($__internal_3195ed7d5a0ac3b634fbbd765171f1acef96ed307f9b5b850c0f3ce4dc2d9320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enseignant list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <div class=\"well\">
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
        </div>
        </tbody>
    </table>

    
";
        
        $__internal_3195ed7d5a0ac3b634fbbd765171f1acef96ed307f9b5b850c0f3ce4dc2d9320->leave($__internal_3195ed7d5a0ac3b634fbbd765171f1acef96ed307f9b5b850c0f3ce4dc2d9320_prof);

    }

    public function getTemplateName()
    {
        return ":enseignant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Enseignant list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         <div class="well">*/
/*             {{ form(form) }}*/
/*         </div>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
