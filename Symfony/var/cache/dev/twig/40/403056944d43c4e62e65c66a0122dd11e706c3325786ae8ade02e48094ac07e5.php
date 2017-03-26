<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_676de0edaa8f566afab5bf7d9cbb2504f1ac2641a29e9f5845bdda970d39306d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676de0edaa8f566afab5bf7d9cbb2504f1ac2641a29e9f5845bdda970d39306d->enter($__internal_676de0edaa8f566afab5bf7d9cbb2504f1ac2641a29e9f5845bdda970d39306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_09b582d31deb2b08c2d0c035706dc4580d3d2ab0894e712d68789de142a73099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b582d31deb2b08c2d0c035706dc4580d3d2ab0894e712d68789de142a73099->enter($__internal_09b582d31deb2b08c2d0c035706dc4580d3d2ab0894e712d68789de142a73099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_676de0edaa8f566afab5bf7d9cbb2504f1ac2641a29e9f5845bdda970d39306d->leave($__internal_676de0edaa8f566afab5bf7d9cbb2504f1ac2641a29e9f5845bdda970d39306d_prof);

        
        $__internal_09b582d31deb2b08c2d0c035706dc4580d3d2ab0894e712d68789de142a73099->leave($__internal_09b582d31deb2b08c2d0c035706dc4580d3d2ab0894e712d68789de142a73099_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_115c4b2b61fca3ad5e32688fbc20df26548e9f2ae1ade970b5ed83f989ab4163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115c4b2b61fca3ad5e32688fbc20df26548e9f2ae1ade970b5ed83f989ab4163->enter($__internal_115c4b2b61fca3ad5e32688fbc20df26548e9f2ae1ade970b5ed83f989ab4163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3ecf44b7136de1c92407d1d69d06daec601b304757fd473160c91bef3c137b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ecf44b7136de1c92407d1d69d06daec601b304757fd473160c91bef3c137b1->enter($__internal_d3ecf44b7136de1c92407d1d69d06daec601b304757fd473160c91bef3c137b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d3ecf44b7136de1c92407d1d69d06daec601b304757fd473160c91bef3c137b1->leave($__internal_d3ecf44b7136de1c92407d1d69d06daec601b304757fd473160c91bef3c137b1_prof);

        
        $__internal_115c4b2b61fca3ad5e32688fbc20df26548e9f2ae1ade970b5ed83f989ab4163->leave($__internal_115c4b2b61fca3ad5e32688fbc20df26548e9f2ae1ade970b5ed83f989ab4163_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a343089555c8ef1850381601ebe4c11e023903ba56cb31fb7bb9f89e1ea93ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a343089555c8ef1850381601ebe4c11e023903ba56cb31fb7bb9f89e1ea93ab9->enter($__internal_a343089555c8ef1850381601ebe4c11e023903ba56cb31fb7bb9f89e1ea93ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b108a53e8295b8ff9c9c615df7d6908bdee622551e4982640f72fec3987b6291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b108a53e8295b8ff9c9c615df7d6908bdee622551e4982640f72fec3987b6291->enter($__internal_b108a53e8295b8ff9c9c615df7d6908bdee622551e4982640f72fec3987b6291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b108a53e8295b8ff9c9c615df7d6908bdee622551e4982640f72fec3987b6291->leave($__internal_b108a53e8295b8ff9c9c615df7d6908bdee622551e4982640f72fec3987b6291_prof);

        
        $__internal_a343089555c8ef1850381601ebe4c11e023903ba56cb31fb7bb9f89e1ea93ab9->leave($__internal_a343089555c8ef1850381601ebe4c11e023903ba56cb31fb7bb9f89e1ea93ab9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0260b1a7b5ad8c7b0e4f744c4b6592e0a3a68bb77b2a4fa6cdc121ee277c8d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0260b1a7b5ad8c7b0e4f744c4b6592e0a3a68bb77b2a4fa6cdc121ee277c8d0a->enter($__internal_0260b1a7b5ad8c7b0e4f744c4b6592e0a3a68bb77b2a4fa6cdc121ee277c8d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0835a19e5c6e1d4c2729c4a39ca555c0177a4bcc56cbb0fe845f03ef64672b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0835a19e5c6e1d4c2729c4a39ca555c0177a4bcc56cbb0fe845f03ef64672b3->enter($__internal_a0835a19e5c6e1d4c2729c4a39ca555c0177a4bcc56cbb0fe845f03ef64672b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a0835a19e5c6e1d4c2729c4a39ca555c0177a4bcc56cbb0fe845f03ef64672b3->leave($__internal_a0835a19e5c6e1d4c2729c4a39ca555c0177a4bcc56cbb0fe845f03ef64672b3_prof);

        
        $__internal_0260b1a7b5ad8c7b0e4f744c4b6592e0a3a68bb77b2a4fa6cdc121ee277c8d0a->leave($__internal_0260b1a7b5ad8c7b0e4f744c4b6592e0a3a68bb77b2a4fa6cdc121ee277c8d0a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
