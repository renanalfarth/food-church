<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fba5f3e40ebadeb62da4f7a9a5849d326fb18aabab3fd5364612d47c6e063501 extends Twig_Template
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
        $__internal_7df6e7fc19124a506c09eca8054bed2674cbc1c3cf4b069979bbd9350af9f303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df6e7fc19124a506c09eca8054bed2674cbc1c3cf4b069979bbd9350af9f303->enter($__internal_7df6e7fc19124a506c09eca8054bed2674cbc1c3cf4b069979bbd9350af9f303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e5f590b5dcd8f72ffab579c351464334c6cdd3b003fbcdc7e1027a0c3da890eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f590b5dcd8f72ffab579c351464334c6cdd3b003fbcdc7e1027a0c3da890eb->enter($__internal_e5f590b5dcd8f72ffab579c351464334c6cdd3b003fbcdc7e1027a0c3da890eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df6e7fc19124a506c09eca8054bed2674cbc1c3cf4b069979bbd9350af9f303->leave($__internal_7df6e7fc19124a506c09eca8054bed2674cbc1c3cf4b069979bbd9350af9f303_prof);

        
        $__internal_e5f590b5dcd8f72ffab579c351464334c6cdd3b003fbcdc7e1027a0c3da890eb->leave($__internal_e5f590b5dcd8f72ffab579c351464334c6cdd3b003fbcdc7e1027a0c3da890eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cdc5d938e9ce59af00b1da6c75dbb33403880397f5b0b5648ddc474e735f098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdc5d938e9ce59af00b1da6c75dbb33403880397f5b0b5648ddc474e735f098->enter($__internal_6cdc5d938e9ce59af00b1da6c75dbb33403880397f5b0b5648ddc474e735f098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6cb9ed68b89d6ff28193274901bbbe7784466351e7e0b73f618599dc7fea4268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb9ed68b89d6ff28193274901bbbe7784466351e7e0b73f618599dc7fea4268->enter($__internal_6cb9ed68b89d6ff28193274901bbbe7784466351e7e0b73f618599dc7fea4268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6cb9ed68b89d6ff28193274901bbbe7784466351e7e0b73f618599dc7fea4268->leave($__internal_6cb9ed68b89d6ff28193274901bbbe7784466351e7e0b73f618599dc7fea4268_prof);

        
        $__internal_6cdc5d938e9ce59af00b1da6c75dbb33403880397f5b0b5648ddc474e735f098->leave($__internal_6cdc5d938e9ce59af00b1da6c75dbb33403880397f5b0b5648ddc474e735f098_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69cd45d72de80aea0c95135ea2855e57cee631e4e961e9ae0541e1a82a1c57c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cd45d72de80aea0c95135ea2855e57cee631e4e961e9ae0541e1a82a1c57c9->enter($__internal_69cd45d72de80aea0c95135ea2855e57cee631e4e961e9ae0541e1a82a1c57c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da63437600bfe61d98ed092c5f9abf5593dad582eae061abb21e142ac920d6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da63437600bfe61d98ed092c5f9abf5593dad582eae061abb21e142ac920d6c7->enter($__internal_da63437600bfe61d98ed092c5f9abf5593dad582eae061abb21e142ac920d6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_da63437600bfe61d98ed092c5f9abf5593dad582eae061abb21e142ac920d6c7->leave($__internal_da63437600bfe61d98ed092c5f9abf5593dad582eae061abb21e142ac920d6c7_prof);

        
        $__internal_69cd45d72de80aea0c95135ea2855e57cee631e4e961e9ae0541e1a82a1c57c9->leave($__internal_69cd45d72de80aea0c95135ea2855e57cee631e4e961e9ae0541e1a82a1c57c9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3e6b77eebf03bdae6ea582d57951509e3739f7f3e7a4cad0d01b3b6c8df3f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e6b77eebf03bdae6ea582d57951509e3739f7f3e7a4cad0d01b3b6c8df3f9a->enter($__internal_f3e6b77eebf03bdae6ea582d57951509e3739f7f3e7a4cad0d01b3b6c8df3f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d534fc8dccec2d8d1d57b3f34410bb05e1adfc22a2fcada232c3b09e264d3ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d534fc8dccec2d8d1d57b3f34410bb05e1adfc22a2fcada232c3b09e264d3ac9->enter($__internal_d534fc8dccec2d8d1d57b3f34410bb05e1adfc22a2fcada232c3b09e264d3ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d534fc8dccec2d8d1d57b3f34410bb05e1adfc22a2fcada232c3b09e264d3ac9->leave($__internal_d534fc8dccec2d8d1d57b3f34410bb05e1adfc22a2fcada232c3b09e264d3ac9_prof);

        
        $__internal_f3e6b77eebf03bdae6ea582d57951509e3739f7f3e7a4cad0d01b3b6c8df3f9a->leave($__internal_f3e6b77eebf03bdae6ea582d57951509e3739f7f3e7a4cad0d01b3b6c8df3f9a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\foodchurch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
