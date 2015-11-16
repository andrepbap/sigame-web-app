<?php

/* base.html.twig */
class __TwigTemplate_4925e467dae3022df8a09baafed17edac7a47fbfbdaa5af30f5636fbd39e366f extends Twig_Template
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
        $__internal_c3fb4726ceb57c7ef79265c84c37c553b2f0a4239d11cd01d2d2c7373a9ff566 = $this->env->getExtension("native_profiler");
        $__internal_c3fb4726ceb57c7ef79265c84c37c553b2f0a4239d11cd01d2d2c7373a9ff566->enter($__internal_c3fb4726ceb57c7ef79265c84c37c553b2f0a4239d11cd01d2d2c7373a9ff566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c3fb4726ceb57c7ef79265c84c37c553b2f0a4239d11cd01d2d2c7373a9ff566->leave($__internal_c3fb4726ceb57c7ef79265c84c37c553b2f0a4239d11cd01d2d2c7373a9ff566_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c13e35b8889687cad4ae95640327c83aa28233800f21fb1bc400df93d3f32a2c = $this->env->getExtension("native_profiler");
        $__internal_c13e35b8889687cad4ae95640327c83aa28233800f21fb1bc400df93d3f32a2c->enter($__internal_c13e35b8889687cad4ae95640327c83aa28233800f21fb1bc400df93d3f32a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c13e35b8889687cad4ae95640327c83aa28233800f21fb1bc400df93d3f32a2c->leave($__internal_c13e35b8889687cad4ae95640327c83aa28233800f21fb1bc400df93d3f32a2c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6e70618513bb99e93aa01f9185148bb5c3ac111a11f9d41a87630c67e37c454 = $this->env->getExtension("native_profiler");
        $__internal_e6e70618513bb99e93aa01f9185148bb5c3ac111a11f9d41a87630c67e37c454->enter($__internal_e6e70618513bb99e93aa01f9185148bb5c3ac111a11f9d41a87630c67e37c454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e6e70618513bb99e93aa01f9185148bb5c3ac111a11f9d41a87630c67e37c454->leave($__internal_e6e70618513bb99e93aa01f9185148bb5c3ac111a11f9d41a87630c67e37c454_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_34d8b7f6f5695f47597a1b841d2c3525952aa812485017c6b1a5f35c9c644106 = $this->env->getExtension("native_profiler");
        $__internal_34d8b7f6f5695f47597a1b841d2c3525952aa812485017c6b1a5f35c9c644106->enter($__internal_34d8b7f6f5695f47597a1b841d2c3525952aa812485017c6b1a5f35c9c644106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34d8b7f6f5695f47597a1b841d2c3525952aa812485017c6b1a5f35c9c644106->leave($__internal_34d8b7f6f5695f47597a1b841d2c3525952aa812485017c6b1a5f35c9c644106_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eef1da4b73d16407ba40599653252be399965dcc5b6279448cdd3c603a6dc560 = $this->env->getExtension("native_profiler");
        $__internal_eef1da4b73d16407ba40599653252be399965dcc5b6279448cdd3c603a6dc560->enter($__internal_eef1da4b73d16407ba40599653252be399965dcc5b6279448cdd3c603a6dc560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eef1da4b73d16407ba40599653252be399965dcc5b6279448cdd3c603a6dc560->leave($__internal_eef1da4b73d16407ba40599653252be399965dcc5b6279448cdd3c603a6dc560_prof);

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
