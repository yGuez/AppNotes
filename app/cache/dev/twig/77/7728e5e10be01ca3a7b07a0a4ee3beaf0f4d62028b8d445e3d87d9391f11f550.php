<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2cdee328c7f14749471e46b981e3eed9e0f680300aa9c25b52f3cf2beb7c8e38 extends Twig_Template
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
        $__internal_2d44700d5931042846bd15f1cec27a150ba0e5666ce9fbcf2fb46c3953a145cf = $this->env->getExtension("native_profiler");
        $__internal_2d44700d5931042846bd15f1cec27a150ba0e5666ce9fbcf2fb46c3953a145cf->enter($__internal_2d44700d5931042846bd15f1cec27a150ba0e5666ce9fbcf2fb46c3953a145cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2d44700d5931042846bd15f1cec27a150ba0e5666ce9fbcf2fb46c3953a145cf->leave($__internal_2d44700d5931042846bd15f1cec27a150ba0e5666ce9fbcf2fb46c3953a145cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
