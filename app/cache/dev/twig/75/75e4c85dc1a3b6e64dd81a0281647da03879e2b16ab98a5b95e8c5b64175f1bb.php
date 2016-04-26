<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_bdfdd765848bc7ec2084d2b86f2317adc11ad1f1775603d025c08837bb0d6ff5 extends Twig_Template
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
        $__internal_7529b369ce8bf76420d55f0144bd621dc7d9bd0ba74e9ff0652a06204ed5ae2d = $this->env->getExtension("native_profiler");
        $__internal_7529b369ce8bf76420d55f0144bd621dc7d9bd0ba74e9ff0652a06204ed5ae2d->enter($__internal_7529b369ce8bf76420d55f0144bd621dc7d9bd0ba74e9ff0652a06204ed5ae2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7529b369ce8bf76420d55f0144bd621dc7d9bd0ba74e9ff0652a06204ed5ae2d->leave($__internal_7529b369ce8bf76420d55f0144bd621dc7d9bd0ba74e9ff0652a06204ed5ae2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
