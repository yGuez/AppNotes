<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b11d1e4122bba41fa310aa20248e6a681803b2fac49de5b0da29381d5102225b extends Twig_Template
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
        $__internal_d9cdb2be3e2b23f37d4ebcf7b35ff954cf291a91c227672f3839bc1993016b93 = $this->env->getExtension("native_profiler");
        $__internal_d9cdb2be3e2b23f37d4ebcf7b35ff954cf291a91c227672f3839bc1993016b93->enter($__internal_d9cdb2be3e2b23f37d4ebcf7b35ff954cf291a91c227672f3839bc1993016b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d9cdb2be3e2b23f37d4ebcf7b35ff954cf291a91c227672f3839bc1993016b93->leave($__internal_d9cdb2be3e2b23f37d4ebcf7b35ff954cf291a91c227672f3839bc1993016b93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
