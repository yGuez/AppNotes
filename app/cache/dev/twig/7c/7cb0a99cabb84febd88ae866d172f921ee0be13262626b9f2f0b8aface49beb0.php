<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bcd2efacfc245c0a84c5aad09e989a177c8b9ddb400b2552acdce9c41ac19910 extends Twig_Template
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
        $__internal_d4748ac75369e1f6addc79b1a8f5f057f08d4166c6e09f4dbf851330e5b7be0e = $this->env->getExtension("native_profiler");
        $__internal_d4748ac75369e1f6addc79b1a8f5f057f08d4166c6e09f4dbf851330e5b7be0e->enter($__internal_d4748ac75369e1f6addc79b1a8f5f057f08d4166c6e09f4dbf851330e5b7be0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d4748ac75369e1f6addc79b1a8f5f057f08d4166c6e09f4dbf851330e5b7be0e->leave($__internal_d4748ac75369e1f6addc79b1a8f5f057f08d4166c6e09f4dbf851330e5b7be0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
