<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_01fb4f7f84ee25dc7aed280928d2756ca3d3f9a33117ceee5d00a6339b4de43e extends Twig_Template
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
        $__internal_a051bbcc609e303e7360edaf6592fe36dfe87cf5b8994c115a95fa931b2d73b7 = $this->env->getExtension("native_profiler");
        $__internal_a051bbcc609e303e7360edaf6592fe36dfe87cf5b8994c115a95fa931b2d73b7->enter($__internal_a051bbcc609e303e7360edaf6592fe36dfe87cf5b8994c115a95fa931b2d73b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a051bbcc609e303e7360edaf6592fe36dfe87cf5b8994c115a95fa931b2d73b7->leave($__internal_a051bbcc609e303e7360edaf6592fe36dfe87cf5b8994c115a95fa931b2d73b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
