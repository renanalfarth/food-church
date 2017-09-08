<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0c21f696a39a6d7e3f3680bdab0e40dde382a6ebc91981cfc07d0a8714505244 extends Twig_Template
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
        $__internal_ca71dd56242e96c56723edc526fd5a116328fd0b4a89e7f9f46c3ae6f851a56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca71dd56242e96c56723edc526fd5a116328fd0b4a89e7f9f46c3ae6f851a56e->enter($__internal_ca71dd56242e96c56723edc526fd5a116328fd0b4a89e7f9f46c3ae6f851a56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a5db96b4b635920dada79c1aa01765ea2f5d88adf28c5e3ff980f05a857718e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5db96b4b635920dada79c1aa01765ea2f5d88adf28c5e3ff980f05a857718e1->enter($__internal_a5db96b4b635920dada79c1aa01765ea2f5d88adf28c5e3ff980f05a857718e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca71dd56242e96c56723edc526fd5a116328fd0b4a89e7f9f46c3ae6f851a56e->leave($__internal_ca71dd56242e96c56723edc526fd5a116328fd0b4a89e7f9f46c3ae6f851a56e_prof);

        
        $__internal_a5db96b4b635920dada79c1aa01765ea2f5d88adf28c5e3ff980f05a857718e1->leave($__internal_a5db96b4b635920dada79c1aa01765ea2f5d88adf28c5e3ff980f05a857718e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e9b92d4c1f9b9e297ad3be6c84d9073dbef472a6577f9d74d7dca2d6c6fe945f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b92d4c1f9b9e297ad3be6c84d9073dbef472a6577f9d74d7dca2d6c6fe945f->enter($__internal_e9b92d4c1f9b9e297ad3be6c84d9073dbef472a6577f9d74d7dca2d6c6fe945f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_68f71b97c5b1e355bea2ab52cf196b25f7fd3dcc7215e5c662dd566499e45a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f71b97c5b1e355bea2ab52cf196b25f7fd3dcc7215e5c662dd566499e45a30->enter($__internal_68f71b97c5b1e355bea2ab52cf196b25f7fd3dcc7215e5c662dd566499e45a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68f71b97c5b1e355bea2ab52cf196b25f7fd3dcc7215e5c662dd566499e45a30->leave($__internal_68f71b97c5b1e355bea2ab52cf196b25f7fd3dcc7215e5c662dd566499e45a30_prof);

        
        $__internal_e9b92d4c1f9b9e297ad3be6c84d9073dbef472a6577f9d74d7dca2d6c6fe945f->leave($__internal_e9b92d4c1f9b9e297ad3be6c84d9073dbef472a6577f9d74d7dca2d6c6fe945f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7b585575c291fffc0c69adb12c2b0b4b9dc4fad22566df60bedd36589377d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b585575c291fffc0c69adb12c2b0b4b9dc4fad22566df60bedd36589377d90->enter($__internal_e7b585575c291fffc0c69adb12c2b0b4b9dc4fad22566df60bedd36589377d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6022e9668de06ee01c4667681ff0b8f66f8e35e267b1f57dbe4194950a6c9bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6022e9668de06ee01c4667681ff0b8f66f8e35e267b1f57dbe4194950a6c9bb5->enter($__internal_6022e9668de06ee01c4667681ff0b8f66f8e35e267b1f57dbe4194950a6c9bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6022e9668de06ee01c4667681ff0b8f66f8e35e267b1f57dbe4194950a6c9bb5->leave($__internal_6022e9668de06ee01c4667681ff0b8f66f8e35e267b1f57dbe4194950a6c9bb5_prof);

        
        $__internal_e7b585575c291fffc0c69adb12c2b0b4b9dc4fad22566df60bedd36589377d90->leave($__internal_e7b585575c291fffc0c69adb12c2b0b4b9dc4fad22566df60bedd36589377d90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f2aa9a19e376f808a01ac51048cbbf07e3a4c5c2dfea69774800dc67df6a80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2aa9a19e376f808a01ac51048cbbf07e3a4c5c2dfea69774800dc67df6a80f->enter($__internal_7f2aa9a19e376f808a01ac51048cbbf07e3a4c5c2dfea69774800dc67df6a80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ae2ba367fa24254b0e01a76f80ddcbdd7984d2dd2cee8f25530e2ce15b1fafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae2ba367fa24254b0e01a76f80ddcbdd7984d2dd2cee8f25530e2ce15b1fafa->enter($__internal_7ae2ba367fa24254b0e01a76f80ddcbdd7984d2dd2cee8f25530e2ce15b1fafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7ae2ba367fa24254b0e01a76f80ddcbdd7984d2dd2cee8f25530e2ce15b1fafa->leave($__internal_7ae2ba367fa24254b0e01a76f80ddcbdd7984d2dd2cee8f25530e2ce15b1fafa_prof);

        
        $__internal_7f2aa9a19e376f808a01ac51048cbbf07e3a4c5c2dfea69774800dc67df6a80f->leave($__internal_7f2aa9a19e376f808a01ac51048cbbf07e3a4c5c2dfea69774800dc67df6a80f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\foodchurch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
