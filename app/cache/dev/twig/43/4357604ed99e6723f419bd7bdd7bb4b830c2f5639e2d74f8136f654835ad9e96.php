<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ab8c1a8bea13c9ea2d067af1883c1efe2999878c7f8d1b41b0ef177293de09a5 extends Twig_Template
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
        $__internal_60b8d4d6637f4c9af17c07d719e8934670902c01097712e67d44df6f721e9f7f = $this->env->getExtension("native_profiler");
        $__internal_60b8d4d6637f4c9af17c07d719e8934670902c01097712e67d44df6f721e9f7f->enter($__internal_60b8d4d6637f4c9af17c07d719e8934670902c01097712e67d44df6f721e9f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_60b8d4d6637f4c9af17c07d719e8934670902c01097712e67d44df6f721e9f7f->leave($__internal_60b8d4d6637f4c9af17c07d719e8934670902c01097712e67d44df6f721e9f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
