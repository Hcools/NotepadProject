<?php

/* NotepadBundle:view:listcategory.html.twig */
class __TwigTemplate_00e07d859496465b7c8112e638ec2d44e551a73cc5a8d34a5323b0a5402d906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:listcategory.html.twig", 1);
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
        $__internal_5c10556377560c2e00f698372d08e819e0d810ab20b76b847ae9fd9e2581f3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c10556377560c2e00f698372d08e819e0d810ab20b76b847ae9fd9e2581f3b8->enter($__internal_5c10556377560c2e00f698372d08e819e0d810ab20b76b847ae9fd9e2581f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listcategory.html.twig"));

        $__internal_f9fb2d645417164d41f4cc3f7f8ec73aa5beb511a6db820cce40b38f8d84256c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fb2d645417164d41f4cc3f7f8ec73aa5beb511a6db820cce40b38f8d84256c->enter($__internal_f9fb2d645417164d41f4cc3f7f8ec73aa5beb511a6db820cce40b38f8d84256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c10556377560c2e00f698372d08e819e0d810ab20b76b847ae9fd9e2581f3b8->leave($__internal_5c10556377560c2e00f698372d08e819e0d810ab20b76b847ae9fd9e2581f3b8_prof);

        
        $__internal_f9fb2d645417164d41f4cc3f7f8ec73aa5beb511a6db820cce40b38f8d84256c->leave($__internal_f9fb2d645417164d41f4cc3f7f8ec73aa5beb511a6db820cce40b38f8d84256c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_408be3a719a5f1cb8aec06e9f4cf6500082c5e76406856be9cd39b78eee7ae1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408be3a719a5f1cb8aec06e9f4cf6500082c5e76406856be9cd39b78eee7ae1b->enter($__internal_408be3a719a5f1cb8aec06e9f4cf6500082c5e76406856be9cd39b78eee7ae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1032e967980b9bd6adc8ed839403951e45661df71c64b1befe1e1e30e5e8e385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1032e967980b9bd6adc8ed839403951e45661df71c64b1befe1e1e30e5e8e385->enter($__internal_1032e967980b9bd6adc8ed839403951e45661df71c64b1befe1e1e30e5e8e385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Category list";
        
        $__internal_1032e967980b9bd6adc8ed839403951e45661df71c64b1befe1e1e30e5e8e385->leave($__internal_1032e967980b9bd6adc8ed839403951e45661df71c64b1befe1e1e30e5e8e385_prof);

        
        $__internal_408be3a719a5f1cb8aec06e9f4cf6500082c5e76406856be9cd39b78eee7ae1b->leave($__internal_408be3a719a5f1cb8aec06e9f4cf6500082c5e76406856be9cd39b78eee7ae1b_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_8d441fb1726108cebe759122fad67f6902af2ed023365b03ef5955274c165d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d441fb1726108cebe759122fad67f6902af2ed023365b03ef5955274c165d94->enter($__internal_8d441fb1726108cebe759122fad67f6902af2ed023365b03ef5955274c165d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_6dbd7e7cbe42cdcab578771e6ce04fb2eaabc91c3014d715d5c926a0e8de9b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbd7e7cbe42cdcab578771e6ce04fb2eaabc91c3014d715d5c926a0e8de9b90->enter($__internal_6dbd7e7cbe42cdcab578771e6ce04fb2eaabc91c3014d715d5c926a0e8de9b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 6
        echo "Category list
  <p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "      <div class=\"alert alert-danger\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "yolo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "          <div class=\"alert alert-success\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </p>
";
        
        $__internal_6dbd7e7cbe42cdcab578771e6ce04fb2eaabc91c3014d715d5c926a0e8de9b90->leave($__internal_6dbd7e7cbe42cdcab578771e6ce04fb2eaabc91c3014d715d5c926a0e8de9b90_prof);

        
        $__internal_8d441fb1726108cebe759122fad67f6902af2ed023365b03ef5955274c165d94->leave($__internal_8d441fb1726108cebe759122fad67f6902af2ed023365b03ef5955274c165d94_prof);

    }

    // line 21
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e7c81ebbee306995ba6f7fbf4c2b38f4eb27626303ddcb7a411dffd19f1a6426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c81ebbee306995ba6f7fbf4c2b38f4eb27626303ddcb7a411dffd19f1a6426->enter($__internal_e7c81ebbee306995ba6f7fbf4c2b38f4eb27626303ddcb7a411dffd19f1a6426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_df2e5d3a4fda494627494264563168d3a762887f08a53b47405da1ca30b3ef8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2e5d3a4fda494627494264563168d3a762887f08a53b47405da1ca30b3ef8e->enter($__internal_df2e5d3a4fda494627494264563168d3a762887f08a53b47405da1ca30b3ef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 22
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadcategorynew");
        echo "\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add category
</a>
<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Back
</a>
";
        
        $__internal_df2e5d3a4fda494627494264563168d3a762887f08a53b47405da1ca30b3ef8e->leave($__internal_df2e5d3a4fda494627494264563168d3a762887f08a53b47405da1ca30b3ef8e_prof);

        
        $__internal_e7c81ebbee306995ba6f7fbf4c2b38f4eb27626303ddcb7a411dffd19f1a6426->leave($__internal_e7c81ebbee306995ba6f7fbf4c2b38f4eb27626303ddcb7a411dffd19f1a6426_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_f996643db205a43bc09a6ef9b5b66774de3e4125f6a281eb7efbee104fd3cff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f996643db205a43bc09a6ef9b5b66774de3e4125f6a281eb7efbee104fd3cff6->enter($__internal_f996643db205a43bc09a6ef9b5b66774de3e4125f6a281eb7efbee104fd3cff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0d78cc0409cb542f0641920f211ad3cf0fe522742844320a1f0dd8d376f69e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d78cc0409cb542f0641920f211ad3cf0fe522742844320a1f0dd8d376f69e00->enter($__internal_0d78cc0409cb542f0641920f211ad3cf0fe522742844320a1f0dd8d376f69e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "
<table class=\"table table-striped\">
 <div class=\" col-md-offset-2\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "  <tr>
    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
    <td class=\"text-right\">
      <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadeditcategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modify
      </a>
      <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletecategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Delete
      </a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>
</table>

";
        
        $__internal_0d78cc0409cb542f0641920f211ad3cf0fe522742844320a1f0dd8d376f69e00->leave($__internal_0d78cc0409cb542f0641920f211ad3cf0fe522742844320a1f0dd8d376f69e00_prof);

        
        $__internal_f996643db205a43bc09a6ef9b5b66774de3e4125f6a281eb7efbee104fd3cff6->leave($__internal_f996643db205a43bc09a6ef9b5b66774de3e4125f6a281eb7efbee104fd3cff6_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:listcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  186 => 47,  178 => 42,  173 => 40,  170 => 39,  166 => 38,  161 => 35,  152 => 34,  136 => 27,  127 => 22,  118 => 21,  107 => 18,  98 => 15,  95 => 14,  90 => 13,  81 => 10,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Category list{% endblock %}

{% block pageheader %}
Category list
  <p>
    {% for flashMessage in app.session.flashbag.get('error') %}
      <div class=\"alert alert-danger\">
        {{ flashMessage }}
      </div>
        {% endfor %}
        {% for flashMessage in app.session.flashbag.get('yolo') %}
          <div class=\"alert alert-success\">
            {{ flashMessage }}
          </div>
        {% endfor %}
  </p>
{% endblock %}

{% block actions %}
<a href=\"{{ path('notepadcategorynew') }}\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add category
</a>
<a href=\"{{ path('notepadnotelist') }}\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Back
</a>
{% endblock %}

{% block content %}

<table class=\"table table-striped\">
 <div class=\" col-md-offset-2\">
{% for category in categories %}
  <tr>
    <td>{{ category.name }}</td>
    <td class=\"text-right\">
      <a href=\"{{ path('notepadeditcategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modify
      </a>
      <a href=\"{{ path('notepaddeletecategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Delete
      </a>
    </td>
  </tr>
{% endfor %}
</div>
</table>

{% endblock %}
", "NotepadBundle:view:listcategory.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/view/listcategory.html.twig");
    }
}
