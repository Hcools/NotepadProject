<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_624d64d2889f621bd859cbc7ee636f2572a63ed21ea27cfa75ecdf309b8f6f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624d64d2889f621bd859cbc7ee636f2572a63ed21ea27cfa75ecdf309b8f6f4e->enter($__internal_624d64d2889f621bd859cbc7ee636f2572a63ed21ea27cfa75ecdf309b8f6f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_770608f02d7e827f61a48fbf3c998d14d00bc52275e7ed409ced923034bce82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770608f02d7e827f61a48fbf3c998d14d00bc52275e7ed409ced923034bce82a->enter($__internal_770608f02d7e827f61a48fbf3c998d14d00bc52275e7ed409ced923034bce82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624d64d2889f621bd859cbc7ee636f2572a63ed21ea27cfa75ecdf309b8f6f4e->leave($__internal_624d64d2889f621bd859cbc7ee636f2572a63ed21ea27cfa75ecdf309b8f6f4e_prof);

        
        $__internal_770608f02d7e827f61a48fbf3c998d14d00bc52275e7ed409ced923034bce82a->leave($__internal_770608f02d7e827f61a48fbf3c998d14d00bc52275e7ed409ced923034bce82a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c250c6229756a3c778dfce7ced9c7f9622795883189f259173feecc435922ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c250c6229756a3c778dfce7ced9c7f9622795883189f259173feecc435922ccf->enter($__internal_c250c6229756a3c778dfce7ced9c7f9622795883189f259173feecc435922ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e6e6f91e1776d20108bf5740a17d3612ba1497d9f3afe193d9e4fe6df15fdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6e6f91e1776d20108bf5740a17d3612ba1497d9f3afe193d9e4fe6df15fdbc->enter($__internal_2e6e6f91e1776d20108bf5740a17d3612ba1497d9f3afe193d9e4fe6df15fdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e6e6f91e1776d20108bf5740a17d3612ba1497d9f3afe193d9e4fe6df15fdbc->leave($__internal_2e6e6f91e1776d20108bf5740a17d3612ba1497d9f3afe193d9e4fe6df15fdbc_prof);

        
        $__internal_c250c6229756a3c778dfce7ced9c7f9622795883189f259173feecc435922ccf->leave($__internal_c250c6229756a3c778dfce7ced9c7f9622795883189f259173feecc435922ccf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2dbb6e0a7aae6f6984b6be3d8a1d3b184fc64b8b9cb4d66615927c172c6988e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2dbb6e0a7aae6f6984b6be3d8a1d3b184fc64b8b9cb4d66615927c172c6988e->enter($__internal_c2dbb6e0a7aae6f6984b6be3d8a1d3b184fc64b8b9cb4d66615927c172c6988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb7cb97763c98d3514ebb98f23ad62311ae36a882ac05d13dc8e3f9603c4dd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7cb97763c98d3514ebb98f23ad62311ae36a882ac05d13dc8e3f9603c4dd8e->enter($__internal_cb7cb97763c98d3514ebb98f23ad62311ae36a882ac05d13dc8e3f9603c4dd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb7cb97763c98d3514ebb98f23ad62311ae36a882ac05d13dc8e3f9603c4dd8e->leave($__internal_cb7cb97763c98d3514ebb98f23ad62311ae36a882ac05d13dc8e3f9603c4dd8e_prof);

        
        $__internal_c2dbb6e0a7aae6f6984b6be3d8a1d3b184fc64b8b9cb4d66615927c172c6988e->leave($__internal_c2dbb6e0a7aae6f6984b6be3d8a1d3b184fc64b8b9cb4d66615927c172c6988e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0469f6535aa388ae2a21325a13046bb4692fbfd1a7158fd6109b07ce434f35c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0469f6535aa388ae2a21325a13046bb4692fbfd1a7158fd6109b07ce434f35c6->enter($__internal_0469f6535aa388ae2a21325a13046bb4692fbfd1a7158fd6109b07ce434f35c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5277bcd25da7df3ed4ffe439f9f2407a3c1d606d2e6438abcd3402ad9563de4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5277bcd25da7df3ed4ffe439f9f2407a3c1d606d2e6438abcd3402ad9563de4e->enter($__internal_5277bcd25da7df3ed4ffe439f9f2407a3c1d606d2e6438abcd3402ad9563de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5277bcd25da7df3ed4ffe439f9f2407a3c1d606d2e6438abcd3402ad9563de4e->leave($__internal_5277bcd25da7df3ed4ffe439f9f2407a3c1d606d2e6438abcd3402ad9563de4e_prof);

        
        $__internal_0469f6535aa388ae2a21325a13046bb4692fbfd1a7158fd6109b07ce434f35c6->leave($__internal_0469f6535aa388ae2a21325a13046bb4692fbfd1a7158fd6109b07ce434f35c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
