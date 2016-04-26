<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0bdef023cc18b4684eb5f80bc3d4d95b3e48b8b26826aaf89daad16ebc27be19 extends Twig_Template
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
        $__internal_0229390620b38ca2c2a3ce70f88639dab5b138ab05705860ed1c65fdda711970 = $this->env->getExtension("native_profiler");
        $__internal_0229390620b38ca2c2a3ce70f88639dab5b138ab05705860ed1c65fdda711970->enter($__internal_0229390620b38ca2c2a3ce70f88639dab5b138ab05705860ed1c65fdda711970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0229390620b38ca2c2a3ce70f88639dab5b138ab05705860ed1c65fdda711970->leave($__internal_0229390620b38ca2c2a3ce70f88639dab5b138ab05705860ed1c65fdda711970_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
