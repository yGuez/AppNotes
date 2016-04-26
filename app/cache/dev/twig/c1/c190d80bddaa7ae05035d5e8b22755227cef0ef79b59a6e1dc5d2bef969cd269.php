<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1ecf67c1c922e619fe6441150c472b1dbf3583e413d9a9faad70777a4e29924f extends Twig_Template
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
        $__internal_85c6e05e2ab9892ea3ce0770199c636715c79133acaf1bfacf89a38be38c29f2 = $this->env->getExtension("native_profiler");
        $__internal_85c6e05e2ab9892ea3ce0770199c636715c79133acaf1bfacf89a38be38c29f2->enter($__internal_85c6e05e2ab9892ea3ce0770199c636715c79133acaf1bfacf89a38be38c29f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_85c6e05e2ab9892ea3ce0770199c636715c79133acaf1bfacf89a38be38c29f2->leave($__internal_85c6e05e2ab9892ea3ce0770199c636715c79133acaf1bfacf89a38be38c29f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
