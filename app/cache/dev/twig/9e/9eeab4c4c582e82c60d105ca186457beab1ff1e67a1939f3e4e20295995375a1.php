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
        $__internal_a4434d24d5968cedf419b29fcbf2317c339f4f2a766d22dc899b5f0bb1e10a7f = $this->env->getExtension("native_profiler");
        $__internal_a4434d24d5968cedf419b29fcbf2317c339f4f2a766d22dc899b5f0bb1e10a7f->enter($__internal_a4434d24d5968cedf419b29fcbf2317c339f4f2a766d22dc899b5f0bb1e10a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4434d24d5968cedf419b29fcbf2317c339f4f2a766d22dc899b5f0bb1e10a7f->leave($__internal_a4434d24d5968cedf419b29fcbf2317c339f4f2a766d22dc899b5f0bb1e10a7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ee07553f0a8813a712706578505762303ad76482006165a01890af81d9f4850 = $this->env->getExtension("native_profiler");
        $__internal_8ee07553f0a8813a712706578505762303ad76482006165a01890af81d9f4850->enter($__internal_8ee07553f0a8813a712706578505762303ad76482006165a01890af81d9f4850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ee07553f0a8813a712706578505762303ad76482006165a01890af81d9f4850->leave($__internal_8ee07553f0a8813a712706578505762303ad76482006165a01890af81d9f4850_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a9a0bd6a5138a3f993ce2a59ffb7ecb93d0b5d10b541a47224cf0a2dbd9d06 = $this->env->getExtension("native_profiler");
        $__internal_64a9a0bd6a5138a3f993ce2a59ffb7ecb93d0b5d10b541a47224cf0a2dbd9d06->enter($__internal_64a9a0bd6a5138a3f993ce2a59ffb7ecb93d0b5d10b541a47224cf0a2dbd9d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64a9a0bd6a5138a3f993ce2a59ffb7ecb93d0b5d10b541a47224cf0a2dbd9d06->leave($__internal_64a9a0bd6a5138a3f993ce2a59ffb7ecb93d0b5d10b541a47224cf0a2dbd9d06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6dd75be94fbd6af12673f3baebdc080dbd5e0bfe3f38011f749e8bd1ce5c7bf = $this->env->getExtension("native_profiler");
        $__internal_c6dd75be94fbd6af12673f3baebdc080dbd5e0bfe3f38011f749e8bd1ce5c7bf->enter($__internal_c6dd75be94fbd6af12673f3baebdc080dbd5e0bfe3f38011f749e8bd1ce5c7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c6dd75be94fbd6af12673f3baebdc080dbd5e0bfe3f38011f749e8bd1ce5c7bf->leave($__internal_c6dd75be94fbd6af12673f3baebdc080dbd5e0bfe3f38011f749e8bd1ce5c7bf_prof);

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
