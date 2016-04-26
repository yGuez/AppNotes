<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e00eb432a32fa7c491e0a196c5544a268860ef15aaf8e8c8d18e76b3ec638dc1 extends Twig_Template
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
        $__internal_45fb9485ad1d1a6c4b63c93d49dcb9918cf3bb118195aec124c7e9f4f6a694fc = $this->env->getExtension("native_profiler");
        $__internal_45fb9485ad1d1a6c4b63c93d49dcb9918cf3bb118195aec124c7e9f4f6a694fc->enter($__internal_45fb9485ad1d1a6c4b63c93d49dcb9918cf3bb118195aec124c7e9f4f6a694fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_45fb9485ad1d1a6c4b63c93d49dcb9918cf3bb118195aec124c7e9f4f6a694fc->leave($__internal_45fb9485ad1d1a6c4b63c93d49dcb9918cf3bb118195aec124c7e9f4f6a694fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
