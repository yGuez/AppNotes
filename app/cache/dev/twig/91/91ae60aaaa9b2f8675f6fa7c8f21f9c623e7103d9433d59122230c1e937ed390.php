<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e3b8576f33139c9f60d5a1f66b4cd8464148708f26b961d9f42f83f345e3f623 extends Twig_Template
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
        $__internal_972c48e1f8343d4cad7cf3a6463d3fd32ca2faabced726f3c54d02dee72a1a73 = $this->env->getExtension("native_profiler");
        $__internal_972c48e1f8343d4cad7cf3a6463d3fd32ca2faabced726f3c54d02dee72a1a73->enter($__internal_972c48e1f8343d4cad7cf3a6463d3fd32ca2faabced726f3c54d02dee72a1a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_972c48e1f8343d4cad7cf3a6463d3fd32ca2faabced726f3c54d02dee72a1a73->leave($__internal_972c48e1f8343d4cad7cf3a6463d3fd32ca2faabced726f3c54d02dee72a1a73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
