<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7ed820d22aa4a87348257d0773e565c729da5fb85bcda3bb625fe092830f8c30 extends Twig_Template
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
        $__internal_0776a7435460f63e576728522a179c40d0c5795858fceba912200005717294a4 = $this->env->getExtension("native_profiler");
        $__internal_0776a7435460f63e576728522a179c40d0c5795858fceba912200005717294a4->enter($__internal_0776a7435460f63e576728522a179c40d0c5795858fceba912200005717294a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0776a7435460f63e576728522a179c40d0c5795858fceba912200005717294a4->leave($__internal_0776a7435460f63e576728522a179c40d0c5795858fceba912200005717294a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
