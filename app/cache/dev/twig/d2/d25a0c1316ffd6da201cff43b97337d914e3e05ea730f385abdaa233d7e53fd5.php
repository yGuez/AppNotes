<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f758d1d04e029ac957caa076a8a7f6b45de7dc0f26a4ef58af0db801dc7f05bf extends Twig_Template
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
        $__internal_5989501152261214d62e4cb88499eb0f6618c878775344de9e2ed5b3f2740467 = $this->env->getExtension("native_profiler");
        $__internal_5989501152261214d62e4cb88499eb0f6618c878775344de9e2ed5b3f2740467->enter($__internal_5989501152261214d62e4cb88499eb0f6618c878775344de9e2ed5b3f2740467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5989501152261214d62e4cb88499eb0f6618c878775344de9e2ed5b3f2740467->leave($__internal_5989501152261214d62e4cb88499eb0f6618c878775344de9e2ed5b3f2740467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
