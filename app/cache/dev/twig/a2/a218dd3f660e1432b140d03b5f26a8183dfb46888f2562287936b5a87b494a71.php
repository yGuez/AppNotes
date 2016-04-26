<?php

/* enseignant/index.html.twig */
class __TwigTemplate_00ec7ae4472a76c391ac5d5de499daf922593a0e077ee9ea7c72d208b2cbb3a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignant/index.html.twig", 1);
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
        $__internal_40d6f3dab482d79344f4f7a97f53bb9cf3372544698b7b99cd8d571639640f8c = $this->env->getExtension("native_profiler");
        $__internal_40d6f3dab482d79344f4f7a97f53bb9cf3372544698b7b99cd8d571639640f8c->enter($__internal_40d6f3dab482d79344f4f7a97f53bb9cf3372544698b7b99cd8d571639640f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignant/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d6f3dab482d79344f4f7a97f53bb9cf3372544698b7b99cd8d571639640f8c->leave($__internal_40d6f3dab482d79344f4f7a97f53bb9cf3372544698b7b99cd8d571639640f8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d127e26bfe096a57d26890a9ed8c4c8478a4429061c35942f48348ef6f93bbe5 = $this->env->getExtension("native_profiler");
        $__internal_d127e26bfe096a57d26890a9ed8c4c8478a4429061c35942f48348ef6f93bbe5->enter($__internal_d127e26bfe096a57d26890a9ed8c4c8478a4429061c35942f48348ef6f93bbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d127e26bfe096a57d26890a9ed8c4c8478a4429061c35942f48348ef6f93bbe5->leave($__internal_d127e26bfe096a57d26890a9ed8c4c8478a4429061c35942f48348ef6f93bbe5_prof);

    }

    public function getTemplateName()
    {
        return "enseignant/index.html.twig";
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
