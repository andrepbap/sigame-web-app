<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3837137684d9bd5adff14346c598f2de87c4ed292003bf33019437db60b3d2c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61b85d4f020b255e3efee117e11ff7a6379ec8a2909b836c9edb5eb6d1010f45 = $this->env->getExtension("native_profiler");
        $__internal_61b85d4f020b255e3efee117e11ff7a6379ec8a2909b836c9edb5eb6d1010f45->enter($__internal_61b85d4f020b255e3efee117e11ff7a6379ec8a2909b836c9edb5eb6d1010f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b85d4f020b255e3efee117e11ff7a6379ec8a2909b836c9edb5eb6d1010f45->leave($__internal_61b85d4f020b255e3efee117e11ff7a6379ec8a2909b836c9edb5eb6d1010f45_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4631b48e73b122b4a1c53f0d58b299da9d16a15a24f6ca130c46dcd173992fc = $this->env->getExtension("native_profiler");
        $__internal_a4631b48e73b122b4a1c53f0d58b299da9d16a15a24f6ca130c46dcd173992fc->enter($__internal_a4631b48e73b122b4a1c53f0d58b299da9d16a15a24f6ca130c46dcd173992fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a4631b48e73b122b4a1c53f0d58b299da9d16a15a24f6ca130c46dcd173992fc->leave($__internal_a4631b48e73b122b4a1c53f0d58b299da9d16a15a24f6ca130c46dcd173992fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c4db582854904298da09f7b6909465e090bba5c378a527099a66f6e9cfc7804 = $this->env->getExtension("native_profiler");
        $__internal_1c4db582854904298da09f7b6909465e090bba5c378a527099a66f6e9cfc7804->enter($__internal_1c4db582854904298da09f7b6909465e090bba5c378a527099a66f6e9cfc7804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c4db582854904298da09f7b6909465e090bba5c378a527099a66f6e9cfc7804->leave($__internal_1c4db582854904298da09f7b6909465e090bba5c378a527099a66f6e9cfc7804_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b1dbf0690045312ff651c7d999ea6ce89765c0397d3373b969ceb758bdba562 = $this->env->getExtension("native_profiler");
        $__internal_3b1dbf0690045312ff651c7d999ea6ce89765c0397d3373b969ceb758bdba562->enter($__internal_3b1dbf0690045312ff651c7d999ea6ce89765c0397d3373b969ceb758bdba562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3b1dbf0690045312ff651c7d999ea6ce89765c0397d3373b969ceb758bdba562->leave($__internal_3b1dbf0690045312ff651c7d999ea6ce89765c0397d3373b969ceb758bdba562_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
