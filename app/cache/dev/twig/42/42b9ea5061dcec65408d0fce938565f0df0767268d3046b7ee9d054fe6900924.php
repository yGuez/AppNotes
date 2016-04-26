<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1ce206ea927adc3db67442dd38c46953d9e50719b15b1a611b74928c119ace6f extends Twig_Template
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
        $__internal_c61dc4efc7d5d31222679da6bfb4d1a7ce4acd869d9d135f60f4b78972bd79c8 = $this->env->getExtension("native_profiler");
        $__internal_c61dc4efc7d5d31222679da6bfb4d1a7ce4acd869d9d135f60f4b78972bd79c8->enter($__internal_c61dc4efc7d5d31222679da6bfb4d1a7ce4acd869d9d135f60f4b78972bd79c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c61dc4efc7d5d31222679da6bfb4d1a7ce4acd869d9d135f60f4b78972bd79c8->leave($__internal_c61dc4efc7d5d31222679da6bfb4d1a7ce4acd869d9d135f60f4b78972bd79c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
