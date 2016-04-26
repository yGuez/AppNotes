<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0eb61f765a6bbb754ad76e123cc5ff751ed2e7a5ebb6215a31a3122608c6adb0 extends Twig_Template
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
        $__internal_4c6fc72813bc37dfe38fcbc8604dd0572e11250ee2538a217e71240c175dbfb5 = $this->env->getExtension("native_profiler");
        $__internal_4c6fc72813bc37dfe38fcbc8604dd0572e11250ee2538a217e71240c175dbfb5->enter($__internal_4c6fc72813bc37dfe38fcbc8604dd0572e11250ee2538a217e71240c175dbfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4c6fc72813bc37dfe38fcbc8604dd0572e11250ee2538a217e71240c175dbfb5->leave($__internal_4c6fc72813bc37dfe38fcbc8604dd0572e11250ee2538a217e71240c175dbfb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
