<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
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
        $__internal_3cd59bd21f2db63fedb0c77fafecf3fe30a650dcdef6a8061945d2ea7dc98410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd59bd21f2db63fedb0c77fafecf3fe30a650dcdef6a8061945d2ea7dc98410->enter($__internal_3cd59bd21f2db63fedb0c77fafecf3fe30a650dcdef6a8061945d2ea7dc98410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_315e5823c1575f678d124fd4ffd420a55003aeb2f7bbda6f9fbba59376efc040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315e5823c1575f678d124fd4ffd420a55003aeb2f7bbda6f9fbba59376efc040->enter($__internal_315e5823c1575f678d124fd4ffd420a55003aeb2f7bbda6f9fbba59376efc040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_3cd59bd21f2db63fedb0c77fafecf3fe30a650dcdef6a8061945d2ea7dc98410->leave($__internal_3cd59bd21f2db63fedb0c77fafecf3fe30a650dcdef6a8061945d2ea7dc98410_prof);

        
        $__internal_315e5823c1575f678d124fd4ffd420a55003aeb2f7bbda6f9fbba59376efc040->leave($__internal_315e5823c1575f678d124fd4ffd420a55003aeb2f7bbda6f9fbba59376efc040_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ce2fbae553c032cdcd48d87cd15e2b912ab3b50b465ab39319a49ddc0591ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce2fbae553c032cdcd48d87cd15e2b912ab3b50b465ab39319a49ddc0591ffa->enter($__internal_3ce2fbae553c032cdcd48d87cd15e2b912ab3b50b465ab39319a49ddc0591ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a477d7c10167beed4cf38290ff7f13f8056f886d5f913ef4b8dda4554fe96ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a477d7c10167beed4cf38290ff7f13f8056f886d5f913ef4b8dda4554fe96ef->enter($__internal_1a477d7c10167beed4cf38290ff7f13f8056f886d5f913ef4b8dda4554fe96ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1a477d7c10167beed4cf38290ff7f13f8056f886d5f913ef4b8dda4554fe96ef->leave($__internal_1a477d7c10167beed4cf38290ff7f13f8056f886d5f913ef4b8dda4554fe96ef_prof);

        
        $__internal_3ce2fbae553c032cdcd48d87cd15e2b912ab3b50b465ab39319a49ddc0591ffa->leave($__internal_3ce2fbae553c032cdcd48d87cd15e2b912ab3b50b465ab39319a49ddc0591ffa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8f10d64255134db9e09098e0a689b51bdf1d3d9241f95e539c44512d0cf5370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f10d64255134db9e09098e0a689b51bdf1d3d9241f95e539c44512d0cf5370->enter($__internal_b8f10d64255134db9e09098e0a689b51bdf1d3d9241f95e539c44512d0cf5370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a2e7655710bf026c87711bd54252a66d86c46a7de4d5851420f589311b58725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2e7655710bf026c87711bd54252a66d86c46a7de4d5851420f589311b58725->enter($__internal_5a2e7655710bf026c87711bd54252a66d86c46a7de4d5851420f589311b58725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a2e7655710bf026c87711bd54252a66d86c46a7de4d5851420f589311b58725->leave($__internal_5a2e7655710bf026c87711bd54252a66d86c46a7de4d5851420f589311b58725_prof);

        
        $__internal_b8f10d64255134db9e09098e0a689b51bdf1d3d9241f95e539c44512d0cf5370->leave($__internal_b8f10d64255134db9e09098e0a689b51bdf1d3d9241f95e539c44512d0cf5370_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_89f9577ed1d39951ad3e276dbe4f9a59a5acca349c833bbfadec63b79494631d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f9577ed1d39951ad3e276dbe4f9a59a5acca349c833bbfadec63b79494631d->enter($__internal_89f9577ed1d39951ad3e276dbe4f9a59a5acca349c833bbfadec63b79494631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4565bbb7cbc8dc2c96e4fe4b1fcf83035c3740acb9381b9624b84fe408751d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4565bbb7cbc8dc2c96e4fe4b1fcf83035c3740acb9381b9624b84fe408751d88->enter($__internal_4565bbb7cbc8dc2c96e4fe4b1fcf83035c3740acb9381b9624b84fe408751d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4565bbb7cbc8dc2c96e4fe4b1fcf83035c3740acb9381b9624b84fe408751d88->leave($__internal_4565bbb7cbc8dc2c96e4fe4b1fcf83035c3740acb9381b9624b84fe408751d88_prof);

        
        $__internal_89f9577ed1d39951ad3e276dbe4f9a59a5acca349c833bbfadec63b79494631d->leave($__internal_89f9577ed1d39951ad3e276dbe4f9a59a5acca349c833bbfadec63b79494631d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e55231918cba4eaa70d8180cc5f59d25a4a6b635eb22ec98da7de4cd7c69dd57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55231918cba4eaa70d8180cc5f59d25a4a6b635eb22ec98da7de4cd7c69dd57->enter($__internal_e55231918cba4eaa70d8180cc5f59d25a4a6b635eb22ec98da7de4cd7c69dd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_254783f238a17a7141fcbd261391e52eea456f45b7ec62e8a79935c30d5480ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254783f238a17a7141fcbd261391e52eea456f45b7ec62e8a79935c30d5480ca->enter($__internal_254783f238a17a7141fcbd261391e52eea456f45b7ec62e8a79935c30d5480ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_254783f238a17a7141fcbd261391e52eea456f45b7ec62e8a79935c30d5480ca->leave($__internal_254783f238a17a7141fcbd261391e52eea456f45b7ec62e8a79935c30d5480ca_prof);

        
        $__internal_e55231918cba4eaa70d8180cc5f59d25a4a6b635eb22ec98da7de4cd7c69dd57->leave($__internal_e55231918cba4eaa70d8180cc5f59d25a4a6b635eb22ec98da7de4cd7c69dd57_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
