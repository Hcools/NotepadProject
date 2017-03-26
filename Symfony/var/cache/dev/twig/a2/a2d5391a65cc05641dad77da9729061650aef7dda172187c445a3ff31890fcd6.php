<?php

/* NotepadBundle:view:layout.html.twig */
class __TwigTemplate_65f064eca5d6138cafa1837de79cc382f44ff6b44c88d416e6139643e8b36673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'actions' => array($this, 'block_actions'),
            'pageheader' => array($this, 'block_pageheader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42d4f078800698f0fbaa38b6bc2fca098d564f5c77f744f640db9732cd792d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d4f078800698f0fbaa38b6bc2fca098d564f5c77f744f640db9732cd792d67->enter($__internal_42d4f078800698f0fbaa38b6bc2fca098d564f5c77f744f640db9732cd792d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:layout.html.twig"));

        $__internal_ca19fd7a30b1f40a1eef93e333b5da6ea4d1cd3076297514bce3a1f104b54e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca19fd7a30b1f40a1eef93e333b5da6ea4d1cd3076297514bce3a1f104b54e1a->enter($__internal_ca19fd7a30b1f40a1eef93e333b5da6ea4d1cd3076297514bce3a1f104b54e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "Notepad</title>
    <link rel=\"icon\" type=\"image/x -icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script
         src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
    </script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
      <a class=\"navbar-brand\">
    ";
        // line 18
        $this->displayBlock('nav', $context, $blocks);
        // line 20
        echo "  </a>
    <div class=\"container\">

      <div class=\"page-header\">
        <div class=\"btn-toolbar pull-right\">
          ";
        // line 25
        $this->displayBlock('actions', $context, $blocks);
        // line 26
        echo "        </div>
        <h1>
          ";
        // line 28
        $this->displayBlock('pageheader', $context, $blocks);
        // line 29
        echo "        </h1>
      </div>
      </nav>

      ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
    </div>
    
    <script> function wrapText(elementID, openTag, closeTag) {
      var textArea = \$('#' + elementID);
      var len = textArea.val().length;
      var start = textArea[0].selectionStart;
      var end = textArea[0].selectionEnd;
      var selectedText = textArea.val().substring(start, end);
      var replacement = openTag + selectedText + closeTag;
      textArea.val(textArea.val().substring(0, start) + replacement +
      textArea.val().substring(end, len));
    }
    \$('#tag').click(function() {
      wrapText(\"note_content\", \"<tag>\", \"</tag>\");
    });
</script>
  </body>
</html>
";
        
        $__internal_42d4f078800698f0fbaa38b6bc2fca098d564f5c77f744f640db9732cd792d67->leave($__internal_42d4f078800698f0fbaa38b6bc2fca098d564f5c77f744f640db9732cd792d67_prof);

        
        $__internal_ca19fd7a30b1f40a1eef93e333b5da6ea4d1cd3076297514bce3a1f104b54e1a->leave($__internal_ca19fd7a30b1f40a1eef93e333b5da6ea4d1cd3076297514bce3a1f104b54e1a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_40058ae5b415c7752683e68eca8291ae11485eef8c91097c421f0add6c84d0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40058ae5b415c7752683e68eca8291ae11485eef8c91097c421f0add6c84d0b8->enter($__internal_40058ae5b415c7752683e68eca8291ae11485eef8c91097c421f0add6c84d0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d39933b08c8311e361645119bf9c3fd1ca0f92775621cfa5bc32d37fa413b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d39933b08c8311e361645119bf9c3fd1ca0f92775621cfa5bc32d37fa413b88->enter($__internal_2d39933b08c8311e361645119bf9c3fd1ca0f92775621cfa5bc32d37fa413b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_2d39933b08c8311e361645119bf9c3fd1ca0f92775621cfa5bc32d37fa413b88->leave($__internal_2d39933b08c8311e361645119bf9c3fd1ca0f92775621cfa5bc32d37fa413b88_prof);

        
        $__internal_40058ae5b415c7752683e68eca8291ae11485eef8c91097c421f0add6c84d0b8->leave($__internal_40058ae5b415c7752683e68eca8291ae11485eef8c91097c421f0add6c84d0b8_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_12a09fb9953859f7e7beafe00d8f3ad569b212b8e190cba57c8742ca8d1b7db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a09fb9953859f7e7beafe00d8f3ad569b212b8e190cba57c8742ca8d1b7db1->enter($__internal_12a09fb9953859f7e7beafe00d8f3ad569b212b8e190cba57c8742ca8d1b7db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_1cd569a81b39f998094566f2e5d032e78501b8476b0757cbb5713994b548d22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd569a81b39f998094566f2e5d032e78501b8476b0757cbb5713994b548d22a->enter($__internal_1cd569a81b39f998094566f2e5d032e78501b8476b0757cbb5713994b548d22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "    ";
        
        $__internal_1cd569a81b39f998094566f2e5d032e78501b8476b0757cbb5713994b548d22a->leave($__internal_1cd569a81b39f998094566f2e5d032e78501b8476b0757cbb5713994b548d22a_prof);

        
        $__internal_12a09fb9953859f7e7beafe00d8f3ad569b212b8e190cba57c8742ca8d1b7db1->leave($__internal_12a09fb9953859f7e7beafe00d8f3ad569b212b8e190cba57c8742ca8d1b7db1_prof);

    }

    // line 25
    public function block_actions($context, array $blocks = array())
    {
        $__internal_910ceb76b0377fa8788ec922a072340d0e12ce3293891fca466ee70dfa2df1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910ceb76b0377fa8788ec922a072340d0e12ce3293891fca466ee70dfa2df1e2->enter($__internal_910ceb76b0377fa8788ec922a072340d0e12ce3293891fca466ee70dfa2df1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_11978290e4e17e0b72c38484039e3f2cf12eae6fa6d46692789fd125749640c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11978290e4e17e0b72c38484039e3f2cf12eae6fa6d46692789fd125749640c1->enter($__internal_11978290e4e17e0b72c38484039e3f2cf12eae6fa6d46692789fd125749640c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_11978290e4e17e0b72c38484039e3f2cf12eae6fa6d46692789fd125749640c1->leave($__internal_11978290e4e17e0b72c38484039e3f2cf12eae6fa6d46692789fd125749640c1_prof);

        
        $__internal_910ceb76b0377fa8788ec922a072340d0e12ce3293891fca466ee70dfa2df1e2->leave($__internal_910ceb76b0377fa8788ec922a072340d0e12ce3293891fca466ee70dfa2df1e2_prof);

    }

    // line 28
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_1d7a865a4522db0dcf54950eba5935f22ef68fd14b54f3548e0aa86d21ccac58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7a865a4522db0dcf54950eba5935f22ef68fd14b54f3548e0aa86d21ccac58->enter($__internal_1d7a865a4522db0dcf54950eba5935f22ef68fd14b54f3548e0aa86d21ccac58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_154490709b714093381aba83d7a8b1117cb11cec18a5c239ce4743bf61fba2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154490709b714093381aba83d7a8b1117cb11cec18a5c239ce4743bf61fba2f3->enter($__internal_154490709b714093381aba83d7a8b1117cb11cec18a5c239ce4743bf61fba2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        
        $__internal_154490709b714093381aba83d7a8b1117cb11cec18a5c239ce4743bf61fba2f3->leave($__internal_154490709b714093381aba83d7a8b1117cb11cec18a5c239ce4743bf61fba2f3_prof);

        
        $__internal_1d7a865a4522db0dcf54950eba5935f22ef68fd14b54f3548e0aa86d21ccac58->leave($__internal_1d7a865a4522db0dcf54950eba5935f22ef68fd14b54f3548e0aa86d21ccac58_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_a76f09c93496bc0a94c017179c9683deac913966eea4a15acc84318748ff18ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76f09c93496bc0a94c017179c9683deac913966eea4a15acc84318748ff18ab->enter($__internal_a76f09c93496bc0a94c017179c9683deac913966eea4a15acc84318748ff18ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7904c37c5ce2624064f23edec43af6a7a8ec53062d122eeaad5cf1992b3aebcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7904c37c5ce2624064f23edec43af6a7a8ec53062d122eeaad5cf1992b3aebcc->enter($__internal_7904c37c5ce2624064f23edec43af6a7a8ec53062d122eeaad5cf1992b3aebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7904c37c5ce2624064f23edec43af6a7a8ec53062d122eeaad5cf1992b3aebcc->leave($__internal_7904c37c5ce2624064f23edec43af6a7a8ec53062d122eeaad5cf1992b3aebcc_prof);

        
        $__internal_a76f09c93496bc0a94c017179c9683deac913966eea4a15acc84318748ff18ab->leave($__internal_a76f09c93496bc0a94c017179c9683deac913966eea4a15acc84318748ff18ab_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 33,  172 => 28,  155 => 25,  145 => 19,  136 => 18,  118 => 6,  89 => 34,  87 => 33,  81 => 29,  79 => 28,  75 => 26,  73 => 25,  66 => 20,  64 => 18,  56 => 13,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
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
    <title>{% block title %}Notepad{% endblock %}Notepad</title>
    <link rel=\"icon\" type=\"image/x -icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\">
    <script
         src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
    </script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
      <a class=\"navbar-brand\">
    {% block nav %}
    {% endblock %}
  </a>
    <div class=\"container\">

      <div class=\"page-header\">
        <div class=\"btn-toolbar pull-right\">
          {% block actions %}{% endblock %}
        </div>
        <h1>
          {% block pageheader %}{% endblock %}
        </h1>
      </div>
      </nav>

      {% block content %}{% endblock %}

    </div>
    
    <script> function wrapText(elementID, openTag, closeTag) {
      var textArea = \$('#' + elementID);
      var len = textArea.val().length;
      var start = textArea[0].selectionStart;
      var end = textArea[0].selectionEnd;
      var selectedText = textArea.val().substring(start, end);
      var replacement = openTag + selectedText + closeTag;
      textArea.val(textArea.val().substring(0, start) + replacement +
      textArea.val().substring(end, len));
    }
    \$('#tag').click(function() {
      wrapText(\"note_content\", \"<tag>\", \"</tag>\");
    });
</script>
  </body>
</html>
", "NotepadBundle:view:layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/view/layout.html.twig");
    }
}
