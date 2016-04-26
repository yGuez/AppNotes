<?php

/* ::base.html.twig */
class __TwigTemplate_046ff3a82dd6ed45e72a3b966942a403416db41760e4a1fffc54d812378dca32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d93fa06ce69a007c70d59d710dac43dcace21b546abb501ac4b096a77fc5c3c3 = $this->env->getExtension("native_profiler");
        $__internal_d93fa06ce69a007c70d59d710dac43dcace21b546abb501ac4b096a77fc5c3c3->enter($__internal_d93fa06ce69a007c70d59d710dac43dcace21b546abb501ac4b096a77fc5c3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d93fa06ce69a007c70d59d710dac43dcace21b546abb501ac4b096a77fc5c3c3->leave($__internal_d93fa06ce69a007c70d59d710dac43dcace21b546abb501ac4b096a77fc5c3c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5119b8dbda97f858bbca5cbea24ab1a337e8c58900e1b47e4c5835d8a1d75167 = $this->env->getExtension("native_profiler");
        $__internal_5119b8dbda97f858bbca5cbea24ab1a337e8c58900e1b47e4c5835d8a1d75167->enter($__internal_5119b8dbda97f858bbca5cbea24ab1a337e8c58900e1b47e4c5835d8a1d75167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5119b8dbda97f858bbca5cbea24ab1a337e8c58900e1b47e4c5835d8a1d75167->leave($__internal_5119b8dbda97f858bbca5cbea24ab1a337e8c58900e1b47e4c5835d8a1d75167_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1b3e6f3b7ab8b786c53742ea4a4a1211046a384fb147bd3c2a5e2e5eee7076b = $this->env->getExtension("native_profiler");
        $__internal_a1b3e6f3b7ab8b786c53742ea4a4a1211046a384fb147bd3c2a5e2e5eee7076b->enter($__internal_a1b3e6f3b7ab8b786c53742ea4a4a1211046a384fb147bd3c2a5e2e5eee7076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1b3e6f3b7ab8b786c53742ea4a4a1211046a384fb147bd3c2a5e2e5eee7076b->leave($__internal_a1b3e6f3b7ab8b786c53742ea4a4a1211046a384fb147bd3c2a5e2e5eee7076b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b0f86c9a221ba2fd6f924b42c25b66e4d1f31f5eb1867f12c1cc5fcf0c3a987 = $this->env->getExtension("native_profiler");
        $__internal_6b0f86c9a221ba2fd6f924b42c25b66e4d1f31f5eb1867f12c1cc5fcf0c3a987->enter($__internal_6b0f86c9a221ba2fd6f924b42c25b66e4d1f31f5eb1867f12c1cc5fcf0c3a987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b0f86c9a221ba2fd6f924b42c25b66e4d1f31f5eb1867f12c1cc5fcf0c3a987->leave($__internal_6b0f86c9a221ba2fd6f924b42c25b66e4d1f31f5eb1867f12c1cc5fcf0c3a987_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c587fc09d511faddec410ae980b4664bcc3228275864f336fe4d59665826d05 = $this->env->getExtension("native_profiler");
        $__internal_6c587fc09d511faddec410ae980b4664bcc3228275864f336fe4d59665826d05->enter($__internal_6c587fc09d511faddec410ae980b4664bcc3228275864f336fe4d59665826d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c587fc09d511faddec410ae980b4664bcc3228275864f336fe4d59665826d05->leave($__internal_6c587fc09d511faddec410ae980b4664bcc3228275864f336fe4d59665826d05_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
