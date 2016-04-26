<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1c754ef2d3c640cea59b64fb95d995ea40824ddfac375fd3d4a4d4f092f9741b extends Twig_Template
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
        $__internal_e54635bf5ede22e0c39357c3b5124de570663e9b199028786f6504fd336f7ed0 = $this->env->getExtension("native_profiler");
        $__internal_e54635bf5ede22e0c39357c3b5124de570663e9b199028786f6504fd336f7ed0->enter($__internal_e54635bf5ede22e0c39357c3b5124de570663e9b199028786f6504fd336f7ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e54635bf5ede22e0c39357c3b5124de570663e9b199028786f6504fd336f7ed0->leave($__internal_e54635bf5ede22e0c39357c3b5124de570663e9b199028786f6504fd336f7ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
