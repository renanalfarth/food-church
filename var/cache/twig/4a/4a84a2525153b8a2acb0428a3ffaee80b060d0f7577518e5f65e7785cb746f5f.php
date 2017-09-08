<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6b3084c55d11fd17a95bc7e5374e5080ed620b7b30c6924195f84ea68d48d8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5611e3484a8b18e35d4179dbd2c141c4b59eff7f7b9af52bfec5e3a69b5dff55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5611e3484a8b18e35d4179dbd2c141c4b59eff7f7b9af52bfec5e3a69b5dff55->enter($__internal_5611e3484a8b18e35d4179dbd2c141c4b59eff7f7b9af52bfec5e3a69b5dff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1e65a0a40f6b93de4bd53d4ecf1bbe3a7ceffeb817d34289d0b821d2a865dc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e65a0a40f6b93de4bd53d4ecf1bbe3a7ceffeb817d34289d0b821d2a865dc76->enter($__internal_1e65a0a40f6b93de4bd53d4ecf1bbe3a7ceffeb817d34289d0b821d2a865dc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5611e3484a8b18e35d4179dbd2c141c4b59eff7f7b9af52bfec5e3a69b5dff55->leave($__internal_5611e3484a8b18e35d4179dbd2c141c4b59eff7f7b9af52bfec5e3a69b5dff55_prof);

        
        $__internal_1e65a0a40f6b93de4bd53d4ecf1bbe3a7ceffeb817d34289d0b821d2a865dc76->leave($__internal_1e65a0a40f6b93de4bd53d4ecf1bbe3a7ceffeb817d34289d0b821d2a865dc76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b3930e9f263e6746a3c7f8de41e3da34cd8cddc062a85dc3fef30890f7c6614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3930e9f263e6746a3c7f8de41e3da34cd8cddc062a85dc3fef30890f7c6614->enter($__internal_3b3930e9f263e6746a3c7f8de41e3da34cd8cddc062a85dc3fef30890f7c6614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ebcdf721dcc065f6ebb0322f0a907cb58f9ec16dd93fa8fb590aa8985aa537e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcdf721dcc065f6ebb0322f0a907cb58f9ec16dd93fa8fb590aa8985aa537e7->enter($__internal_ebcdf721dcc065f6ebb0322f0a907cb58f9ec16dd93fa8fb590aa8985aa537e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ebcdf721dcc065f6ebb0322f0a907cb58f9ec16dd93fa8fb590aa8985aa537e7->leave($__internal_ebcdf721dcc065f6ebb0322f0a907cb58f9ec16dd93fa8fb590aa8985aa537e7_prof);

        
        $__internal_3b3930e9f263e6746a3c7f8de41e3da34cd8cddc062a85dc3fef30890f7c6614->leave($__internal_3b3930e9f263e6746a3c7f8de41e3da34cd8cddc062a85dc3fef30890f7c6614_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\foodchurch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
