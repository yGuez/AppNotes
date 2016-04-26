<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6862bab6942d25ad89bc1206b865fde12bca2fd7266900fd04f019601a0481fe extends Twig_Template
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
        $__internal_3e27a2ce31b8e556159bef105a0798766a804e271b243bf25b4a3b63eee91b1a = $this->env->getExtension("native_profiler");
        $__internal_3e27a2ce31b8e556159bef105a0798766a804e271b243bf25b4a3b63eee91b1a->enter($__internal_3e27a2ce31b8e556159bef105a0798766a804e271b243bf25b4a3b63eee91b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3e27a2ce31b8e556159bef105a0798766a804e271b243bf25b4a3b63eee91b1a->leave($__internal_3e27a2ce31b8e556159bef105a0798766a804e271b243bf25b4a3b63eee91b1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
