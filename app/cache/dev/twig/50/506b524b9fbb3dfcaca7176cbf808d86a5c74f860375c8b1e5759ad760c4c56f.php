<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_71cbf14c7a489cb96c7f3f88115c258adcbc923c38a6af43f626e9f84a3b4f27 extends Twig_Template
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
        $__internal_048bc53fe0dea49c536b542b49416db78576fc3c22ad3da8d86b2fdd7e3de8d7 = $this->env->getExtension("native_profiler");
        $__internal_048bc53fe0dea49c536b542b49416db78576fc3c22ad3da8d86b2fdd7e3de8d7->enter($__internal_048bc53fe0dea49c536b542b49416db78576fc3c22ad3da8d86b2fdd7e3de8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_048bc53fe0dea49c536b542b49416db78576fc3c22ad3da8d86b2fdd7e3de8d7->leave($__internal_048bc53fe0dea49c536b542b49416db78576fc3c22ad3da8d86b2fdd7e3de8d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
