<?php

/* base.html.twig */
class __TwigTemplate_a17967a7dbd5cb2864f87c9d1e96f4fc227c43fb4c59d307fa8412e71be8670b extends Twig_Template
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
        $__internal_6753471a22891523da993c333b3f7ce1a2dafecd47b7d987b506df3c67fe0ac5 = $this->env->getExtension("native_profiler");
        $__internal_6753471a22891523da993c333b3f7ce1a2dafecd47b7d987b506df3c67fe0ac5->enter($__internal_6753471a22891523da993c333b3f7ce1a2dafecd47b7d987b506df3c67fe0ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6753471a22891523da993c333b3f7ce1a2dafecd47b7d987b506df3c67fe0ac5->leave($__internal_6753471a22891523da993c333b3f7ce1a2dafecd47b7d987b506df3c67fe0ac5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad2500f40cd3def08101949819082fd3fad55b657563be2b64766a9b8954a715 = $this->env->getExtension("native_profiler");
        $__internal_ad2500f40cd3def08101949819082fd3fad55b657563be2b64766a9b8954a715->enter($__internal_ad2500f40cd3def08101949819082fd3fad55b657563be2b64766a9b8954a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ad2500f40cd3def08101949819082fd3fad55b657563be2b64766a9b8954a715->leave($__internal_ad2500f40cd3def08101949819082fd3fad55b657563be2b64766a9b8954a715_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8487451caa4714ce7426af7f07bd647b3530b76bea740717450855223aeb2af7 = $this->env->getExtension("native_profiler");
        $__internal_8487451caa4714ce7426af7f07bd647b3530b76bea740717450855223aeb2af7->enter($__internal_8487451caa4714ce7426af7f07bd647b3530b76bea740717450855223aeb2af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8487451caa4714ce7426af7f07bd647b3530b76bea740717450855223aeb2af7->leave($__internal_8487451caa4714ce7426af7f07bd647b3530b76bea740717450855223aeb2af7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_61d58ff3b24f1c70ca3ce133972081fdf73ba9a0a035983fd14eae9f9e0b3c7e = $this->env->getExtension("native_profiler");
        $__internal_61d58ff3b24f1c70ca3ce133972081fdf73ba9a0a035983fd14eae9f9e0b3c7e->enter($__internal_61d58ff3b24f1c70ca3ce133972081fdf73ba9a0a035983fd14eae9f9e0b3c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61d58ff3b24f1c70ca3ce133972081fdf73ba9a0a035983fd14eae9f9e0b3c7e->leave($__internal_61d58ff3b24f1c70ca3ce133972081fdf73ba9a0a035983fd14eae9f9e0b3c7e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d59e276d0c27654359b9dc1e19770aaaaa6d8e54a1de1a3494f76f9ba20a2d6a = $this->env->getExtension("native_profiler");
        $__internal_d59e276d0c27654359b9dc1e19770aaaaa6d8e54a1de1a3494f76f9ba20a2d6a->enter($__internal_d59e276d0c27654359b9dc1e19770aaaaa6d8e54a1de1a3494f76f9ba20a2d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d59e276d0c27654359b9dc1e19770aaaaa6d8e54a1de1a3494f76f9ba20a2d6a->leave($__internal_d59e276d0c27654359b9dc1e19770aaaaa6d8e54a1de1a3494f76f9ba20a2d6a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
