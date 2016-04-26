<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3124b04ffaa04ec1a7b2dfc3dbaec24c5bd7694704203f2f629af9659716e765 extends Twig_Template
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
        $__internal_ee298633a170b83260fe06c9640b68ce282cf4f3f50781a8606e609b37a4f78e = $this->env->getExtension("native_profiler");
        $__internal_ee298633a170b83260fe06c9640b68ce282cf4f3f50781a8606e609b37a4f78e->enter($__internal_ee298633a170b83260fe06c9640b68ce282cf4f3f50781a8606e609b37a4f78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ee298633a170b83260fe06c9640b68ce282cf4f3f50781a8606e609b37a4f78e->leave($__internal_ee298633a170b83260fe06c9640b68ce282cf4f3f50781a8606e609b37a4f78e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
