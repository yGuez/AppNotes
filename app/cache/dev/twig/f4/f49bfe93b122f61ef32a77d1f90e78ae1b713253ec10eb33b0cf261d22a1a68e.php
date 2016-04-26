<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d83609c21c578e326ff45a3805c8d06655183bb1ddeff424c7213a7981de988d extends Twig_Template
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
        $__internal_ca829c6da22021184e6f07454ddbf3af8db8fd10aa3011673a7b065bbe8c0420 = $this->env->getExtension("native_profiler");
        $__internal_ca829c6da22021184e6f07454ddbf3af8db8fd10aa3011673a7b065bbe8c0420->enter($__internal_ca829c6da22021184e6f07454ddbf3af8db8fd10aa3011673a7b065bbe8c0420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ca829c6da22021184e6f07454ddbf3af8db8fd10aa3011673a7b065bbe8c0420->leave($__internal_ca829c6da22021184e6f07454ddbf3af8db8fd10aa3011673a7b065bbe8c0420_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
