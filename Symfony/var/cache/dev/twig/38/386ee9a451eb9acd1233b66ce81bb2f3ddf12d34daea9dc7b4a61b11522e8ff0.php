<?php

/* NotepadBundle:view:newnote.html.twig */
class __TwigTemplate_0faeff9525879f95d6f27c49564e6bcaa38c8f67ceadcf175507148b4e86ab18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:newnote.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageheader' => array($this, 'block_pageheader'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle:view:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_063f30185eaadd154584c74a4e03615b31b646eb52a315086d7fa9bff8019db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063f30185eaadd154584c74a4e03615b31b646eb52a315086d7fa9bff8019db5->enter($__internal_063f30185eaadd154584c74a4e03615b31b646eb52a315086d7fa9bff8019db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newnote.html.twig"));

        $__internal_169ff0aaf31c77735370d5543f9a7e246af25feb76c83dd7795beac633e6d1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169ff0aaf31c77735370d5543f9a7e246af25feb76c83dd7795beac633e6d1e2->enter($__internal_169ff0aaf31c77735370d5543f9a7e246af25feb76c83dd7795beac633e6d1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063f30185eaadd154584c74a4e03615b31b646eb52a315086d7fa9bff8019db5->leave($__internal_063f30185eaadd154584c74a4e03615b31b646eb52a315086d7fa9bff8019db5_prof);

        
        $__internal_169ff0aaf31c77735370d5543f9a7e246af25feb76c83dd7795beac633e6d1e2->leave($__internal_169ff0aaf31c77735370d5543f9a7e246af25feb76c83dd7795beac633e6d1e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a963b77b31df7388847947351cf6f1caafcf225f03185f48bbaaf747ca9a736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a963b77b31df7388847947351cf6f1caafcf225f03185f48bbaaf747ca9a736->enter($__internal_5a963b77b31df7388847947351cf6f1caafcf225f03185f48bbaaf747ca9a736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c5fc1ba3f1166337bef7863d93fddb3193598ea84768cbd9b7ebf9153cf7c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5fc1ba3f1166337bef7863d93fddb3193598ea84768cbd9b7ebf9153cf7c55->enter($__internal_6c5fc1ba3f1166337bef7863d93fddb3193598ea84768cbd9b7ebf9153cf7c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Note";
        
        $__internal_6c5fc1ba3f1166337bef7863d93fddb3193598ea84768cbd9b7ebf9153cf7c55->leave($__internal_6c5fc1ba3f1166337bef7863d93fddb3193598ea84768cbd9b7ebf9153cf7c55_prof);

        
        $__internal_5a963b77b31df7388847947351cf6f1caafcf225f03185f48bbaaf747ca9a736->leave($__internal_5a963b77b31df7388847947351cf6f1caafcf225f03185f48bbaaf747ca9a736_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_c2f182a8cefad5187a9c8762d2ceb0c48b672f7df355faca8d61d520f2882c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f182a8cefad5187a9c8762d2ceb0c48b672f7df355faca8d61d520f2882c0e->enter($__internal_c2f182a8cefad5187a9c8762d2ceb0c48b672f7df355faca8d61d520f2882c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_456fe78f5a7942d044cc0c0f84d23f2814a004171ba40a72fa8208460f1c5806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456fe78f5a7942d044cc0c0f84d23f2814a004171ba40a72fa8208460f1c5806->enter($__internal_456fe78f5a7942d044cc0c0f84d23f2814a004171ba40a72fa8208460f1c5806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "New Note";
        
        $__internal_456fe78f5a7942d044cc0c0f84d23f2814a004171ba40a72fa8208460f1c5806->leave($__internal_456fe78f5a7942d044cc0c0f84d23f2814a004171ba40a72fa8208460f1c5806_prof);

        
        $__internal_c2f182a8cefad5187a9c8762d2ceb0c48b672f7df355faca8d61d520f2882c0e->leave($__internal_c2f182a8cefad5187a9c8762d2ceb0c48b672f7df355faca8d61d520f2882c0e_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_05c9a0fd9695e9c04f0b9df81f4b701d694c0a26baf783a4edca19562eff01de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c9a0fd9695e9c04f0b9df81f4b701d694c0a26baf783a4edca19562eff01de->enter($__internal_05c9a0fd9695e9c04f0b9df81f4b701d694c0a26baf783a4edca19562eff01de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_ab32cb414d1de71dea2b2a7e0258322423b1a7944ae0467f18071bb5bdc29e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab32cb414d1de71dea2b2a7e0258322423b1a7944ae0467f18071bb5bdc29e8c->enter($__internal_ab32cb414d1de71dea2b2a7e0258322423b1a7944ae0467f18071bb5bdc29e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    <i class=\"glyphicon glyphicon-plus\"></i>
    Add tag
  </button>
  <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
     class=\"btn btn-lg btn-default\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
    Back
  </a>
";
        
        $__internal_ab32cb414d1de71dea2b2a7e0258322423b1a7944ae0467f18071bb5bdc29e8c->leave($__internal_ab32cb414d1de71dea2b2a7e0258322423b1a7944ae0467f18071bb5bdc29e8c_prof);

        
        $__internal_05c9a0fd9695e9c04f0b9df81f4b701d694c0a26baf783a4edca19562eff01de->leave($__internal_05c9a0fd9695e9c04f0b9df81f4b701d694c0a26baf783a4edca19562eff01de_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_46e1f2f6646d09b71e8463e0d7c0fcca608c7f11658620dfd19340c43b987695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e1f2f6646d09b71e8463e0d7c0fcca608c7f11658620dfd19340c43b987695->enter($__internal_46e1f2f6646d09b71e8463e0d7c0fcca608c7f11658620dfd19340c43b987695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_599842502e96b993f4b75bcb55c9a05dab950099f6b9a27c3bd5d692af901347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599842502e96b993f4b75bcb55c9a05dab950099f6b9a27c3bd5d692af901347->enter($__internal_599842502e96b993f4b75bcb55c9a05dab950099f6b9a27c3bd5d692af901347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_599842502e96b993f4b75bcb55c9a05dab950099f6b9a27c3bd5d692af901347->leave($__internal_599842502e96b993f4b75bcb55c9a05dab950099f6b9a27c3bd5d692af901347_prof);

        
        $__internal_46e1f2f6646d09b71e8463e0d7c0fcca608c7f11658620dfd19340c43b987695->leave($__internal_46e1f2f6646d09b71e8463e0d7c0fcca608c7f11658620dfd19340c43b987695_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:newnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  126 => 22,  122 => 21,  119 => 20,  110 => 19,  94 => 12,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NotepadBundle:view:layout.html.twig' %}

{% block title %}New Note{% endblock %}

{% block pageheader %}New Note{% endblock %}

{% block actions %}
  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    <i class=\"glyphicon glyphicon-plus\"></i>
    Add tag
  </button>
  <a href=\"{{ path('notepadnotelist') }}\"
     class=\"btn btn-lg btn-default\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
    Back
  </a>
{% endblock %}

{% block content %}

{{ form_start(form) }}
  {{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "NotepadBundle:view:newnote.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/view/newnote.html.twig");
    }
}
