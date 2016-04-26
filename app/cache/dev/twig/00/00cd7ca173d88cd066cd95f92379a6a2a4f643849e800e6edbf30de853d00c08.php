<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_73a884b7635562e75a1922ab360f29c443ba1e9d0f0b3ef6884627750931e89f extends Twig_Template
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
        $__internal_1e5fc13b1c53bfdc22d0fdc00c3c5d9389b84ca622104681df0a46b9f516a42c = $this->env->getExtension("native_profiler");
        $__internal_1e5fc13b1c53bfdc22d0fdc00c3c5d9389b84ca622104681df0a46b9f516a42c->enter($__internal_1e5fc13b1c53bfdc22d0fdc00c3c5d9389b84ca622104681df0a46b9f516a42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1e5fc13b1c53bfdc22d0fdc00c3c5d9389b84ca622104681df0a46b9f516a42c->leave($__internal_1e5fc13b1c53bfdc22d0fdc00c3c5d9389b84ca622104681df0a46b9f516a42c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
