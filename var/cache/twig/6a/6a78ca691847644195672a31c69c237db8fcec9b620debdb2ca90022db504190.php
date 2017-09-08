<?php

/* layout.html.twig */
class __TwigTemplate_10417112ae12570203349d431010bcd5fbc2a30c80cb937571eb1d07dd0676ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34d602390e26f70d25cc5adc1c87205b728c97b27a7c468f6ecccab5199ed39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d602390e26f70d25cc5adc1c87205b728c97b27a7c468f6ecccab5199ed39d->enter($__internal_34d602390e26f70d25cc5adc1c87205b728c97b27a7c468f6ecccab5199ed39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_7d7b729396003ec52035511855d9e18115c37fc936b9a61ce257d5ac6beb28a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7b729396003ec52035511855d9e18115c37fc936b9a61ce257d5ac6beb28a4->enter($__internal_7d7b729396003ec52035511855d9e18115c37fc936b9a61ce257d5ac6beb28a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 6
        $this->displayBlock('styles', $context, $blocks);
        // line 21
        echo "
    </head>

    <body>

        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Food Church</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav\">
                <li class=\"";
        // line 39
        if (((isset($context["menu_ativo"]) ? $context["menu_ativo"] : $this->getContext($context, "menu_ativo")) == "balcao")) {
            echo "active";
        }
        echo "\"><a href=\"index\">Balcão</a></li>
                <li class=\"";
        // line 40
        if (((isset($context["menu_ativo"]) ? $context["menu_ativo"] : $this->getContext($context, "menu_ativo")) == "pedidos")) {
            echo "active";
        }
        echo "\"><a href=\"orders\">Pedidos</a></li>
                <li class=\"";
        // line 41
        if (((isset($context["menu_ativo"]) ? $context["menu_ativo"] : $this->getContext($context, "menu_ativo")) == "pedidos-entregues")) {
            echo "active";
        }
        echo "\"><a href=\"delivered\">Pedidos Entregues</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

        <div class=\"container\">
          ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "        </div>

    </body>

  ";
        // line 55
        $this->displayBlock('scripts', $context, $blocks);
        // line 60
        echo "
</html>
";
        
        $__internal_34d602390e26f70d25cc5adc1c87205b728c97b27a7c468f6ecccab5199ed39d->leave($__internal_34d602390e26f70d25cc5adc1c87205b728c97b27a7c468f6ecccab5199ed39d_prof);

        
        $__internal_7d7b729396003ec52035511855d9e18115c37fc936b9a61ce257d5ac6beb28a4->leave($__internal_7d7b729396003ec52035511855d9e18115c37fc936b9a61ce257d5ac6beb28a4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1826205eafcb1ee008ad2d5a2a5d2d880cf35e5182c85f682f90a1d84e054ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1826205eafcb1ee008ad2d5a2a5d2d880cf35e5182c85f682f90a1d84e054ab3->enter($__internal_1826205eafcb1ee008ad2d5a2a5d2d880cf35e5182c85f682f90a1d84e054ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e40a9ad3ae0a30dfb4efdfae6f0fb02d36ddcbf276c0cef1d960f19f2aa279d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e40a9ad3ae0a30dfb4efdfae6f0fb02d36ddcbf276c0cef1d960f19f2aa279d->enter($__internal_0e40a9ad3ae0a30dfb4efdfae6f0fb02d36ddcbf276c0cef1d960f19f2aa279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_0e40a9ad3ae0a30dfb4efdfae6f0fb02d36ddcbf276c0cef1d960f19f2aa279d->leave($__internal_0e40a9ad3ae0a30dfb4efdfae6f0fb02d36ddcbf276c0cef1d960f19f2aa279d_prof);

        
        $__internal_1826205eafcb1ee008ad2d5a2a5d2d880cf35e5182c85f682f90a1d84e054ab3->leave($__internal_1826205eafcb1ee008ad2d5a2a5d2d880cf35e5182c85f682f90a1d84e054ab3_prof);

    }

    // line 6
    public function block_styles($context, array $blocks = array())
    {
        $__internal_13d7665e9c4616b1802f2b14db8de0020f24ad10b3d4b698d3aaa849bb7a682b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d7665e9c4616b1802f2b14db8de0020f24ad10b3d4b698d3aaa849bb7a682b->enter($__internal_13d7665e9c4616b1802f2b14db8de0020f24ad10b3d4b698d3aaa849bb7a682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_7e05fa61c297d469de168409c964dc32e909c287870ae87a1b0a04fada34a131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e05fa61c297d469de168409c964dc32e909c287870ae87a1b0a04fada34a131->enter($__internal_7e05fa61c297d469de168409c964dc32e909c287870ae87a1b0a04fada34a131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 7
        echo "
          <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
          <!-- Latest compiled and minified CSS -->
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

          <!-- Optional theme -->
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

          <script
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_7e05fa61c297d469de168409c964dc32e909c287870ae87a1b0a04fada34a131->leave($__internal_7e05fa61c297d469de168409c964dc32e909c287870ae87a1b0a04fada34a131_prof);

        
        $__internal_13d7665e9c4616b1802f2b14db8de0020f24ad10b3d4b698d3aaa849bb7a682b->leave($__internal_13d7665e9c4616b1802f2b14db8de0020f24ad10b3d4b698d3aaa849bb7a682b_prof);

    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        $__internal_71af2f1b30676f66002b004a1d1c1b82b1659257f3f0eff09c80f29c809f5378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71af2f1b30676f66002b004a1d1c1b82b1659257f3f0eff09c80f29c809f5378->enter($__internal_71af2f1b30676f66002b004a1d1c1b82b1659257f3f0eff09c80f29c809f5378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7559a55f798ef0b0c7a2a4443c4e0534819fddc889bb1e4034065dc6df7793e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7559a55f798ef0b0c7a2a4443c4e0534819fddc889bb1e4034065dc6df7793e3->enter($__internal_7559a55f798ef0b0c7a2a4443c4e0534819fddc889bb1e4034065dc6df7793e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 49
        echo "
        ";
        
        $__internal_7559a55f798ef0b0c7a2a4443c4e0534819fddc889bb1e4034065dc6df7793e3->leave($__internal_7559a55f798ef0b0c7a2a4443c4e0534819fddc889bb1e4034065dc6df7793e3_prof);

        
        $__internal_71af2f1b30676f66002b004a1d1c1b82b1659257f3f0eff09c80f29c809f5378->leave($__internal_71af2f1b30676f66002b004a1d1c1b82b1659257f3f0eff09c80f29c809f5378_prof);

    }

    // line 55
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c559507e0ac5aa3e84e35530abab8c25572fc9e74b1423a6029707ade06d7770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c559507e0ac5aa3e84e35530abab8c25572fc9e74b1423a6029707ade06d7770->enter($__internal_c559507e0ac5aa3e84e35530abab8c25572fc9e74b1423a6029707ade06d7770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_2cf133cb9cc2a9cd67c3bb986e6b8cb5ff24294f0ebf8a0c8ec1d432387ea533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf133cb9cc2a9cd67c3bb986e6b8cb5ff24294f0ebf8a0c8ec1d432387ea533->enter($__internal_2cf133cb9cc2a9cd67c3bb986e6b8cb5ff24294f0ebf8a0c8ec1d432387ea533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 56
        echo "
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
  ";
        
        $__internal_2cf133cb9cc2a9cd67c3bb986e6b8cb5ff24294f0ebf8a0c8ec1d432387ea533->leave($__internal_2cf133cb9cc2a9cd67c3bb986e6b8cb5ff24294f0ebf8a0c8ec1d432387ea533_prof);

        
        $__internal_c559507e0ac5aa3e84e35530abab8c25572fc9e74b1423a6029707ade06d7770->leave($__internal_c559507e0ac5aa3e84e35530abab8c25572fc9e74b1423a6029707ade06d7770_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 56,  180 => 55,  169 => 49,  160 => 48,  137 => 8,  134 => 7,  125 => 6,  107 => 4,  95 => 60,  93 => 55,  87 => 51,  85 => 48,  73 => 41,  67 => 40,  61 => 39,  41 => 21,  39 => 6,  34 => 4,  29 => 1,);
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
        <title>{% block title 'Dashboard' %}</title>

        {% block styles %}

          <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
          <!-- Latest compiled and minified CSS -->
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

          <!-- Optional theme -->
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

          <script
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>

        {% endblock %}

    </head>

    <body>

        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Food Church</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
              <ul class=\"nav navbar-nav\">
                <li class=\"{% if menu_ativo == 'balcao' %}active{% endif %}\"><a href=\"index\">Balcão</a></li>
                <li class=\"{% if menu_ativo == 'pedidos' %}active{% endif %}\"><a href=\"orders\">Pedidos</a></li>
                <li class=\"{% if menu_ativo == 'pedidos-entregues' %}active{% endif %}\"><a href=\"delivered\">Pedidos Entregues</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

        <div class=\"container\">
          {% block content %}

        {% endblock %}
        </div>

    </body>

  {% block scripts %}

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
  {% endblock %}

</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\foodchurch\\templates\\layout.html.twig");
    }
}
