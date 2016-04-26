<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_890aa065ccfec31634c1c4a93f0e47fdfef23fdef5f9924e5cadaf9a8884f521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db920f0990cc4e0e2311b2357384649756c12555b35001f70a2ebf9760fecced = $this->env->getExtension("native_profiler");
        $__internal_db920f0990cc4e0e2311b2357384649756c12555b35001f70a2ebf9760fecced->enter($__internal_db920f0990cc4e0e2311b2357384649756c12555b35001f70a2ebf9760fecced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db920f0990cc4e0e2311b2357384649756c12555b35001f70a2ebf9760fecced->leave($__internal_db920f0990cc4e0e2311b2357384649756c12555b35001f70a2ebf9760fecced_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ad6d5fbd7a0b2b401f67beb3b9b69de9a025180fa892becf9b0459f4442c2d0 = $this->env->getExtension("native_profiler");
        $__internal_2ad6d5fbd7a0b2b401f67beb3b9b69de9a025180fa892becf9b0459f4442c2d0->enter($__internal_2ad6d5fbd7a0b2b401f67beb3b9b69de9a025180fa892becf9b0459f4442c2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ad6d5fbd7a0b2b401f67beb3b9b69de9a025180fa892becf9b0459f4442c2d0->leave($__internal_2ad6d5fbd7a0b2b401f67beb3b9b69de9a025180fa892becf9b0459f4442c2d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a022cd2bbf65895dacc480d1d2a098a8e10342443b41b2927d8c939cc6bb9c1 = $this->env->getExtension("native_profiler");
        $__internal_5a022cd2bbf65895dacc480d1d2a098a8e10342443b41b2927d8c939cc6bb9c1->enter($__internal_5a022cd2bbf65895dacc480d1d2a098a8e10342443b41b2927d8c939cc6bb9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a022cd2bbf65895dacc480d1d2a098a8e10342443b41b2927d8c939cc6bb9c1->leave($__internal_5a022cd2bbf65895dacc480d1d2a098a8e10342443b41b2927d8c939cc6bb9c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57b7901920a16338c8fc8bb356eb1fef5df03e16cd7e65ec89d811692a71ddc6 = $this->env->getExtension("native_profiler");
        $__internal_57b7901920a16338c8fc8bb356eb1fef5df03e16cd7e65ec89d811692a71ddc6->enter($__internal_57b7901920a16338c8fc8bb356eb1fef5df03e16cd7e65ec89d811692a71ddc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57b7901920a16338c8fc8bb356eb1fef5df03e16cd7e65ec89d811692a71ddc6->leave($__internal_57b7901920a16338c8fc8bb356eb1fef5df03e16cd7e65ec89d811692a71ddc6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
