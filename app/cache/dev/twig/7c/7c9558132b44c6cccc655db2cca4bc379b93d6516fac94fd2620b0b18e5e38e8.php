<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dacf2e0f297661a3db62c540fe3b3fb4ee12b0a1db38f5664e03c9decd9a19ca extends Twig_Template
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
        $__internal_2ef8c1169e2ba2b3ac9ae34ca7aff8ffe21465ba777434d8a5894f1ee9afb9d4 = $this->env->getExtension("native_profiler");
        $__internal_2ef8c1169e2ba2b3ac9ae34ca7aff8ffe21465ba777434d8a5894f1ee9afb9d4->enter($__internal_2ef8c1169e2ba2b3ac9ae34ca7aff8ffe21465ba777434d8a5894f1ee9afb9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2ef8c1169e2ba2b3ac9ae34ca7aff8ffe21465ba777434d8a5894f1ee9afb9d4->leave($__internal_2ef8c1169e2ba2b3ac9ae34ca7aff8ffe21465ba777434d8a5894f1ee9afb9d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
