<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_50dac3fab2224dcde08a078f5775b26b89093c63620d5055c1dc5be3c72616b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2db5b85f50bffb9b5e27fba7eaf460ff45b09ec3525d50dd8903cf81a44b326c = $this->env->getExtension("native_profiler");
        $__internal_2db5b85f50bffb9b5e27fba7eaf460ff45b09ec3525d50dd8903cf81a44b326c->enter($__internal_2db5b85f50bffb9b5e27fba7eaf460ff45b09ec3525d50dd8903cf81a44b326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db5b85f50bffb9b5e27fba7eaf460ff45b09ec3525d50dd8903cf81a44b326c->leave($__internal_2db5b85f50bffb9b5e27fba7eaf460ff45b09ec3525d50dd8903cf81a44b326c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db9c4f7e7f3552466318cbf15b5c7cb9fe4aeca6a196c4feffe1b72474cb2675 = $this->env->getExtension("native_profiler");
        $__internal_db9c4f7e7f3552466318cbf15b5c7cb9fe4aeca6a196c4feffe1b72474cb2675->enter($__internal_db9c4f7e7f3552466318cbf15b5c7cb9fe4aeca6a196c4feffe1b72474cb2675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db9c4f7e7f3552466318cbf15b5c7cb9fe4aeca6a196c4feffe1b72474cb2675->leave($__internal_db9c4f7e7f3552466318cbf15b5c7cb9fe4aeca6a196c4feffe1b72474cb2675_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ef4ad1ee4779204c111d7fcabc77f45dd29ae05170e969bcdde430cca252663 = $this->env->getExtension("native_profiler");
        $__internal_8ef4ad1ee4779204c111d7fcabc77f45dd29ae05170e969bcdde430cca252663->enter($__internal_8ef4ad1ee4779204c111d7fcabc77f45dd29ae05170e969bcdde430cca252663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ef4ad1ee4779204c111d7fcabc77f45dd29ae05170e969bcdde430cca252663->leave($__internal_8ef4ad1ee4779204c111d7fcabc77f45dd29ae05170e969bcdde430cca252663_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d88119d6b45ee2865b0fd908ca8fa3e3fcbc68a0036decb2f416b8d07695071d = $this->env->getExtension("native_profiler");
        $__internal_d88119d6b45ee2865b0fd908ca8fa3e3fcbc68a0036decb2f416b8d07695071d->enter($__internal_d88119d6b45ee2865b0fd908ca8fa3e3fcbc68a0036decb2f416b8d07695071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d88119d6b45ee2865b0fd908ca8fa3e3fcbc68a0036decb2f416b8d07695071d->leave($__internal_d88119d6b45ee2865b0fd908ca8fa3e3fcbc68a0036decb2f416b8d07695071d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
