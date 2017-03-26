<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8d793aa47c5aef06e9f5fbccf78c7bd843685275cd03eee02b05f5808561c736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d793aa47c5aef06e9f5fbccf78c7bd843685275cd03eee02b05f5808561c736->enter($__internal_8d793aa47c5aef06e9f5fbccf78c7bd843685275cd03eee02b05f5808561c736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9dd7c6328bea0c8e1b69d834b01a9f0318f3aa5da758604346dc23a35eb805d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd7c6328bea0c8e1b69d834b01a9f0318f3aa5da758604346dc23a35eb805d6->enter($__internal_9dd7c6328bea0c8e1b69d834b01a9f0318f3aa5da758604346dc23a35eb805d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d793aa47c5aef06e9f5fbccf78c7bd843685275cd03eee02b05f5808561c736->leave($__internal_8d793aa47c5aef06e9f5fbccf78c7bd843685275cd03eee02b05f5808561c736_prof);

        
        $__internal_9dd7c6328bea0c8e1b69d834b01a9f0318f3aa5da758604346dc23a35eb805d6->leave($__internal_9dd7c6328bea0c8e1b69d834b01a9f0318f3aa5da758604346dc23a35eb805d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5576a316e0f78725c54d972c1d4cc673f910c7403877aaaa8497ef7e02563435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5576a316e0f78725c54d972c1d4cc673f910c7403877aaaa8497ef7e02563435->enter($__internal_5576a316e0f78725c54d972c1d4cc673f910c7403877aaaa8497ef7e02563435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f58e4de2583883a269a9d20e3911553ea5ace69f395953c8e7ec3bbbe2fa65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f58e4de2583883a269a9d20e3911553ea5ace69f395953c8e7ec3bbbe2fa65d->enter($__internal_2f58e4de2583883a269a9d20e3911553ea5ace69f395953c8e7ec3bbbe2fa65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2f58e4de2583883a269a9d20e3911553ea5ace69f395953c8e7ec3bbbe2fa65d->leave($__internal_2f58e4de2583883a269a9d20e3911553ea5ace69f395953c8e7ec3bbbe2fa65d_prof);

        
        $__internal_5576a316e0f78725c54d972c1d4cc673f910c7403877aaaa8497ef7e02563435->leave($__internal_5576a316e0f78725c54d972c1d4cc673f910c7403877aaaa8497ef7e02563435_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_27fcba555cec3fa40f69b1fe5b7c0459e3303efe499f3037d731c0ea607addde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fcba555cec3fa40f69b1fe5b7c0459e3303efe499f3037d731c0ea607addde->enter($__internal_27fcba555cec3fa40f69b1fe5b7c0459e3303efe499f3037d731c0ea607addde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7b10b37d78886cad893cb029e958cb4def374d84c2320a86c9ef6dfca4b8de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b10b37d78886cad893cb029e958cb4def374d84c2320a86c9ef6dfca4b8de3->enter($__internal_c7b10b37d78886cad893cb029e958cb4def374d84c2320a86c9ef6dfca4b8de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7b10b37d78886cad893cb029e958cb4def374d84c2320a86c9ef6dfca4b8de3->leave($__internal_c7b10b37d78886cad893cb029e958cb4def374d84c2320a86c9ef6dfca4b8de3_prof);

        
        $__internal_27fcba555cec3fa40f69b1fe5b7c0459e3303efe499f3037d731c0ea607addde->leave($__internal_27fcba555cec3fa40f69b1fe5b7c0459e3303efe499f3037d731c0ea607addde_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d49d2d76a06e3fa94ea80cb3bcddea391f2339cd70ed021e882bd2f8600a323d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49d2d76a06e3fa94ea80cb3bcddea391f2339cd70ed021e882bd2f8600a323d->enter($__internal_d49d2d76a06e3fa94ea80cb3bcddea391f2339cd70ed021e882bd2f8600a323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9620c9a6bb29d9eb89698eff4003ddee4ef545b6e7e40e725eec38d243f0b18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9620c9a6bb29d9eb89698eff4003ddee4ef545b6e7e40e725eec38d243f0b18c->enter($__internal_9620c9a6bb29d9eb89698eff4003ddee4ef545b6e7e40e725eec38d243f0b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9620c9a6bb29d9eb89698eff4003ddee4ef545b6e7e40e725eec38d243f0b18c->leave($__internal_9620c9a6bb29d9eb89698eff4003ddee4ef545b6e7e40e725eec38d243f0b18c_prof);

        
        $__internal_d49d2d76a06e3fa94ea80cb3bcddea391f2339cd70ed021e882bd2f8600a323d->leave($__internal_d49d2d76a06e3fa94ea80cb3bcddea391f2339cd70ed021e882bd2f8600a323d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
