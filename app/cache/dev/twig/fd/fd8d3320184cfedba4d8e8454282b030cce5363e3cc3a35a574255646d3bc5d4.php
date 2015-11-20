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
        $__internal_33c3b605f5bc264f51b8a50d49aff141480bd5b5f97be24e7dbbb5f093e6733f = $this->env->getExtension("native_profiler");
        $__internal_33c3b605f5bc264f51b8a50d49aff141480bd5b5f97be24e7dbbb5f093e6733f->enter($__internal_33c3b605f5bc264f51b8a50d49aff141480bd5b5f97be24e7dbbb5f093e6733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_33c3b605f5bc264f51b8a50d49aff141480bd5b5f97be24e7dbbb5f093e6733f->leave($__internal_33c3b605f5bc264f51b8a50d49aff141480bd5b5f97be24e7dbbb5f093e6733f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e23c9cdb0dda2b5f131cf759da449c0288b730697d55e53a7c1e9e63483a68e6 = $this->env->getExtension("native_profiler");
        $__internal_e23c9cdb0dda2b5f131cf759da449c0288b730697d55e53a7c1e9e63483a68e6->enter($__internal_e23c9cdb0dda2b5f131cf759da449c0288b730697d55e53a7c1e9e63483a68e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e23c9cdb0dda2b5f131cf759da449c0288b730697d55e53a7c1e9e63483a68e6->leave($__internal_e23c9cdb0dda2b5f131cf759da449c0288b730697d55e53a7c1e9e63483a68e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6531020a4308d41b752a0868282e89e8b801c357b96f53a95d05dbb2eb3a9f61 = $this->env->getExtension("native_profiler");
        $__internal_6531020a4308d41b752a0868282e89e8b801c357b96f53a95d05dbb2eb3a9f61->enter($__internal_6531020a4308d41b752a0868282e89e8b801c357b96f53a95d05dbb2eb3a9f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6531020a4308d41b752a0868282e89e8b801c357b96f53a95d05dbb2eb3a9f61->leave($__internal_6531020a4308d41b752a0868282e89e8b801c357b96f53a95d05dbb2eb3a9f61_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9e763bdbd8d9b4d81af74a7d27034f2792fee5b16a8afd09a691940dcc21b8 = $this->env->getExtension("native_profiler");
        $__internal_fe9e763bdbd8d9b4d81af74a7d27034f2792fee5b16a8afd09a691940dcc21b8->enter($__internal_fe9e763bdbd8d9b4d81af74a7d27034f2792fee5b16a8afd09a691940dcc21b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe9e763bdbd8d9b4d81af74a7d27034f2792fee5b16a8afd09a691940dcc21b8->leave($__internal_fe9e763bdbd8d9b4d81af74a7d27034f2792fee5b16a8afd09a691940dcc21b8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf011f568c2995a9ad30893b79261145960e780e98c42b065202b7412d4999f5 = $this->env->getExtension("native_profiler");
        $__internal_bf011f568c2995a9ad30893b79261145960e780e98c42b065202b7412d4999f5->enter($__internal_bf011f568c2995a9ad30893b79261145960e780e98c42b065202b7412d4999f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bf011f568c2995a9ad30893b79261145960e780e98c42b065202b7412d4999f5->leave($__internal_bf011f568c2995a9ad30893b79261145960e780e98c42b065202b7412d4999f5_prof);

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
