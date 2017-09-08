<?php

/* index.html.twig */
class __TwigTemplate_f0c796fc36f79766e0532c8d60f1ab019eff322a91670b98c59acf3a74aa651f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c17d9be5b6d4cebefafd21e769d52a8c33e9015c7c372487ad868d5f76e75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c17d9be5b6d4cebefafd21e769d52a8c33e9015c7c372487ad868d5f76e75c->enter($__internal_a0c17d9be5b6d4cebefafd21e769d52a8c33e9015c7c372487ad868d5f76e75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_b69bdcf24ac7727afac740e4e98d9e9edc5d9ce3c557812914b03e102e066476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69bdcf24ac7727afac740e4e98d9e9edc5d9ce3c557812914b03e102e066476->enter($__internal_b69bdcf24ac7727afac740e4e98d9e9edc5d9ce3c557812914b03e102e066476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c17d9be5b6d4cebefafd21e769d52a8c33e9015c7c372487ad868d5f76e75c->leave($__internal_a0c17d9be5b6d4cebefafd21e769d52a8c33e9015c7c372487ad868d5f76e75c_prof);

        
        $__internal_b69bdcf24ac7727afac740e4e98d9e9edc5d9ce3c557812914b03e102e066476->leave($__internal_b69bdcf24ac7727afac740e4e98d9e9edc5d9ce3c557812914b03e102e066476_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_87b0b76db6beff36dc3de8c8aaeec51d07a002ed1f173f6020a358172199d06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b0b76db6beff36dc3de8c8aaeec51d07a002ed1f173f6020a358172199d06f->enter($__internal_87b0b76db6beff36dc3de8c8aaeec51d07a002ed1f173f6020a358172199d06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cf6b9a004586440eaed4221624016722af3f69f3c00c25e08086f25776ba98c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6b9a004586440eaed4221624016722af3f69f3c00c25e08086f25776ba98c8->enter($__internal_cf6b9a004586440eaed4221624016722af3f69f3c00c25e08086f25776ba98c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"row\">

  <br />

  <form action=\"javascript:void(0)\" method=\"post\">

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plates"]) ? $context["plates"] : $this->getContext($context, "plates")));
        foreach ($context['_seq'] as $context["_key"] => $context["plate"]) {
            // line 12
            echo "
      <div class=\"col-sm-2 col-5\">
        <div class=\"thumbnail\">
          <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "image", array()), "html", null, true);
            echo "\">
          <div class=\"caption\">
            <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "name", array()), "html", null, true);
            echo "</h3>
            <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "description", array()), "html", null, true);
            echo "</p>

            <div class=\"row\">
              <div class=\"col-sm-2\">
                <a href=\"javascript:void(0)\" class=\"btn btn-primary less\" role=\"button\" data-id=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "id", array()), "html", null, true);
            echo "\">
                  <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                </a>
              </div>
              <div class=\"col-sm-4\">
                <input type=\"number\" class=\"col-sm-12 quantity-input-";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "id", array()), "html", null, true);
            echo " quantity-input\" data-price=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "price", array()), "html", null, true);
            echo "\" value=\"0\" name=\"quantidade[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "name", array()), "html", null, true);
            echo "]\" />
              </div>
              <div class=\"col-sm-2\">
                <a href=\"javascript:void(0)\" class=\"btn btn-primary more\" role=\"button\" data-id=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["plate"], "id", array()), "html", null, true);
            echo "\">
                  <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    <div class=\"observacao-box col-md-12\">
      <p class=\"pull-right\">Observação</p>
      <br />
      <br />
      <textarea name=\"observacao\" class=\"pull-right\"></textarea>
    </div>

  </form>

</div>

<div class=\"alert alert-info total pull-right\" role=\"alert\"><b>Total</b>: R\$ 0,00</div>

<div id=\"totais-geral\"></div>

<button type=\"button\" class=\"btn btn-success btn-lg pull-right submit\">Salvar Pedido</button>
<br />
<br />
<br />
";
        
        $__internal_cf6b9a004586440eaed4221624016722af3f69f3c00c25e08086f25776ba98c8->leave($__internal_cf6b9a004586440eaed4221624016722af3f69f3c00c25e08086f25776ba98c8_prof);

        
        $__internal_87b0b76db6beff36dc3de8c8aaeec51d07a002ed1f173f6020a358172199d06f->leave($__internal_87b0b76db6beff36dc3de8c8aaeec51d07a002ed1f173f6020a358172199d06f_prof);

    }

    // line 63
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ef2bb9ef0bc5f7331d887693b8048b6464ee22e804eeeabe84133386f2250d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2bb9ef0bc5f7331d887693b8048b6464ee22e804eeeabe84133386f2250d04->enter($__internal_ef2bb9ef0bc5f7331d887693b8048b6464ee22e804eeeabe84133386f2250d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_a6c87e89fc886800995ea304987debc63c98caf8781567f028f0dc190408220b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c87e89fc886800995ea304987debc63c98caf8781567f028f0dc190408220b->enter($__internal_a6c87e89fc886800995ea304987debc63c98caf8781567f028f0dc190408220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 64
        echo "
  <!-- Latest compiled and minified JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

  <script type=\"text/javascript\">
    window.url_save   = \"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("save");
        echo "\";
    window.url_totais = \"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("totais");
        echo "\";
  </script>

  <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>

  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\">Atenção</h4>
        </div>
        <div class=\"modal-body\" id=\"modal-body-senha\">

        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

";
        
        $__internal_a6c87e89fc886800995ea304987debc63c98caf8781567f028f0dc190408220b->leave($__internal_a6c87e89fc886800995ea304987debc63c98caf8781567f028f0dc190408220b_prof);

        
        $__internal_ef2bb9ef0bc5f7331d887693b8048b6464ee22e804eeeabe84133386f2250d04->leave($__internal_ef2bb9ef0bc5f7331d887693b8048b6464ee22e804eeeabe84133386f2250d04_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  169 => 70,  165 => 69,  158 => 64,  149 => 63,  119 => 41,  102 => 30,  92 => 27,  84 => 22,  77 => 18,  73 => 17,  68 => 15,  63 => 12,  59 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}

<div class=\"row\">

  <br />

  <form action=\"javascript:void(0)\" method=\"post\">

    {% for plate in plates %}

      <div class=\"col-sm-2 col-5\">
        <div class=\"thumbnail\">
          <img src=\"{{ plate.image }}\">
          <div class=\"caption\">
            <h3>{{ plate.name }}</h3>
            <p>{{ plate.description }}</p>

            <div class=\"row\">
              <div class=\"col-sm-2\">
                <a href=\"javascript:void(0)\" class=\"btn btn-primary less\" role=\"button\" data-id=\"{{ plate.id }}\">
                  <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span>
                </a>
              </div>
              <div class=\"col-sm-4\">
                <input type=\"number\" class=\"col-sm-12 quantity-input-{{ plate.id }} quantity-input\" data-price=\"{{ plate.price }}\" value=\"0\" name=\"quantidade[{{ plate.name }}]\" />
              </div>
              <div class=\"col-sm-2\">
                <a href=\"javascript:void(0)\" class=\"btn btn-primary more\" role=\"button\" data-id=\"{{ plate.id }}\">
                  <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

    {% endfor %}

    <div class=\"observacao-box col-md-12\">
      <p class=\"pull-right\">Observação</p>
      <br />
      <br />
      <textarea name=\"observacao\" class=\"pull-right\"></textarea>
    </div>

  </form>

</div>

<div class=\"alert alert-info total pull-right\" role=\"alert\"><b>Total</b>: R\$ 0,00</div>

<div id=\"totais-geral\"></div>

<button type=\"button\" class=\"btn btn-success btn-lg pull-right submit\">Salvar Pedido</button>
<br />
<br />
<br />
{% endblock %}

{% block scripts %}

  <!-- Latest compiled and minified JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

  <script type=\"text/javascript\">
    window.url_save   = \"{{ url('save') }}\";
    window.url_totais = \"{{ url('totais') }}\";
  </script>

  <script type=\"text/javascript\" src=\"{{ asset('js/index.js') }}\"></script>

  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"myModal\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\">Atenção</h4>
        </div>
        <div class=\"modal-body\" id=\"modal-body-senha\">

        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\foodchurch\\templates\\index.html.twig");
    }
}
