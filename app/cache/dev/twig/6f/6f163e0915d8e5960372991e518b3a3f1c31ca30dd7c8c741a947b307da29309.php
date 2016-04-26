<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_90a6cf82d7a315bd631625893e1f559d8fd2e0e25269a7ea667f61387f7153ae extends Twig_Template
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
        $__internal_45d33cd92d08ab864140f930d5d4a9565912ea71a78c5b56d55a07c264d69214 = $this->env->getExtension("native_profiler");
        $__internal_45d33cd92d08ab864140f930d5d4a9565912ea71a78c5b56d55a07c264d69214->enter($__internal_45d33cd92d08ab864140f930d5d4a9565912ea71a78c5b56d55a07c264d69214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_45d33cd92d08ab864140f930d5d4a9565912ea71a78c5b56d55a07c264d69214->leave($__internal_45d33cd92d08ab864140f930d5d4a9565912ea71a78c5b56d55a07c264d69214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
