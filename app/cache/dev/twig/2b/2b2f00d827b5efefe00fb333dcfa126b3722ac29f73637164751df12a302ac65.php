<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ea78a90cde6e78f46fe62494e072e1707ece78731d3c8ab4cdf03a065a12c3e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e5ad2ce58b9829f0635ec53934277a81dda63316f6858742c4cf76f98bf61b = $this->env->getExtension("native_profiler");
        $__internal_96e5ad2ce58b9829f0635ec53934277a81dda63316f6858742c4cf76f98bf61b->enter($__internal_96e5ad2ce58b9829f0635ec53934277a81dda63316f6858742c4cf76f98bf61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e5ad2ce58b9829f0635ec53934277a81dda63316f6858742c4cf76f98bf61b->leave($__internal_96e5ad2ce58b9829f0635ec53934277a81dda63316f6858742c4cf76f98bf61b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a8bea50bbf84868544dd15e103e02fc0ec6ca569e40b54583a91dd279a0f7b4 = $this->env->getExtension("native_profiler");
        $__internal_6a8bea50bbf84868544dd15e103e02fc0ec6ca569e40b54583a91dd279a0f7b4->enter($__internal_6a8bea50bbf84868544dd15e103e02fc0ec6ca569e40b54583a91dd279a0f7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a8bea50bbf84868544dd15e103e02fc0ec6ca569e40b54583a91dd279a0f7b4->leave($__internal_6a8bea50bbf84868544dd15e103e02fc0ec6ca569e40b54583a91dd279a0f7b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02f23317c19b10cb67fb30bc8153ae2a78212ed1af3ea4ba958582c702e30c9 = $this->env->getExtension("native_profiler");
        $__internal_d02f23317c19b10cb67fb30bc8153ae2a78212ed1af3ea4ba958582c702e30c9->enter($__internal_d02f23317c19b10cb67fb30bc8153ae2a78212ed1af3ea4ba958582c702e30c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d02f23317c19b10cb67fb30bc8153ae2a78212ed1af3ea4ba958582c702e30c9->leave($__internal_d02f23317c19b10cb67fb30bc8153ae2a78212ed1af3ea4ba958582c702e30c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_410130ed244842470828b42902773d6963fdce36fc9c23ba3e1c257e26a96c1a = $this->env->getExtension("native_profiler");
        $__internal_410130ed244842470828b42902773d6963fdce36fc9c23ba3e1c257e26a96c1a->enter($__internal_410130ed244842470828b42902773d6963fdce36fc9c23ba3e1c257e26a96c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_410130ed244842470828b42902773d6963fdce36fc9c23ba3e1c257e26a96c1a->leave($__internal_410130ed244842470828b42902773d6963fdce36fc9c23ba3e1c257e26a96c1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
