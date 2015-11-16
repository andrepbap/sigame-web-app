<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f67698199bba0d7ae4b1d3b3831a3fe6a3c4b1a269ea67b26e3451ad0b9f5911 extends Twig_Template
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
        $__internal_a0242f21252382940cd7a05528f0bf53bbc42d3495e1224063ba0998ea2c7298 = $this->env->getExtension("native_profiler");
        $__internal_a0242f21252382940cd7a05528f0bf53bbc42d3495e1224063ba0998ea2c7298->enter($__internal_a0242f21252382940cd7a05528f0bf53bbc42d3495e1224063ba0998ea2c7298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0242f21252382940cd7a05528f0bf53bbc42d3495e1224063ba0998ea2c7298->leave($__internal_a0242f21252382940cd7a05528f0bf53bbc42d3495e1224063ba0998ea2c7298_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e25c41946afc189a32c74b033f4a2a1e56ce61313b9d697ab704c3540afcfb22 = $this->env->getExtension("native_profiler");
        $__internal_e25c41946afc189a32c74b033f4a2a1e56ce61313b9d697ab704c3540afcfb22->enter($__internal_e25c41946afc189a32c74b033f4a2a1e56ce61313b9d697ab704c3540afcfb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e25c41946afc189a32c74b033f4a2a1e56ce61313b9d697ab704c3540afcfb22->leave($__internal_e25c41946afc189a32c74b033f4a2a1e56ce61313b9d697ab704c3540afcfb22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31b4a8b443aaa260202ddf0092f4d7e1f1b5d476556fb5e44762a31589e06ed8 = $this->env->getExtension("native_profiler");
        $__internal_31b4a8b443aaa260202ddf0092f4d7e1f1b5d476556fb5e44762a31589e06ed8->enter($__internal_31b4a8b443aaa260202ddf0092f4d7e1f1b5d476556fb5e44762a31589e06ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31b4a8b443aaa260202ddf0092f4d7e1f1b5d476556fb5e44762a31589e06ed8->leave($__internal_31b4a8b443aaa260202ddf0092f4d7e1f1b5d476556fb5e44762a31589e06ed8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfbbe9f2176f11fec099aa6e23197cefb66f45f506a19f831c6e7e21b8323af1 = $this->env->getExtension("native_profiler");
        $__internal_dfbbe9f2176f11fec099aa6e23197cefb66f45f506a19f831c6e7e21b8323af1->enter($__internal_dfbbe9f2176f11fec099aa6e23197cefb66f45f506a19f831c6e7e21b8323af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dfbbe9f2176f11fec099aa6e23197cefb66f45f506a19f831c6e7e21b8323af1->leave($__internal_dfbbe9f2176f11fec099aa6e23197cefb66f45f506a19f831c6e7e21b8323af1_prof);

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
