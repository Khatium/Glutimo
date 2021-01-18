<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* properties/show.html.twig */
class __TwigTemplate_048af02b429b6df7065a61c9227a0d416abae4a22c4a15cd16b18552d7dfb138 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "properties/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "properties/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "properties/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"show_property\">
  <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h2>
  <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 6, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"\">
  <div class=\"property_content\">
    <h2>Adresse</h2>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 9, $this->source); })()), "adresseNumero", [], "any", false, false, false, 9), "html", null, true);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 10, $this->source); })()), "adresseLibelle", [], "any", false, false, false, 10), "html", null, true);
        echo " </br>
    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 11, $this->source); })()), "adresseCp", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 11, $this->source); })()), "adresseVille", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    <h2>Propriétaire</h2>
    <p>
      Nom : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "ownerLastname", [], "any", false, false, false, 14), "html", null, true);
        echo "
      <br> Prenom : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 15, $this->source); })()), "ownerFirstname", [], "any", false, false, false, 15), "html", null, true);
        echo "
      <br> Phone : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 16, $this->source); })()), "ownerPhone", [], "any", false, false, false, 16), "html", null, true);
        echo "
      <br> Email : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 17, $this->source); })()), "ownerEmail", [], "any", false, false, false, 17), "html", null, true);
        echo "
    </p>
    <h2>Détails</h2>
    <p>Prix : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
    <p>Surface : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 21, $this->source); })()), "surface", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
    <p>N° Pièces : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 22, $this->source); })()), "nombrePiece", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
    <p>N° Places de parking : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 23, $this->source); })()), "nombreParking", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
    <p>Offre enregistrée le : ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "H:i"), "html", null, true);
        echo "</p>
    <h2> Description </h2>
    <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
    <h2>Images</h2>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 30, $this->source); })()), "pictures", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "          <div class=\"container col-4\">
            <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"...\">
            <div class=\"title row\">
                <h5 class=\"text- col-6\"> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</h5>
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("picture_delete", ["id_prop" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "id_pic" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-success col-4\">X</a>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
      </div>
    </div>
    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("properties_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Modifier</a>
    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("properties_picturesAdd", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Ajouter des images</a>
    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("properties_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" onclick=\"return confirm('are u sure?')\" class=\"btn btn-secondary\">Supprimer</a>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "properties/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 44,  180 => 43,  176 => 42,  171 => 39,  161 => 35,  157 => 34,  152 => 32,  149 => 31,  145 => 30,  138 => 26,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  89 => 11,  85 => 10,  81 => 9,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"show_property\">
  <h1>{{ property.title }}</h2>
  <img src=\"{{ property.imagePrincipale }}\" alt=\"\">
  <div class=\"property_content\">
    <h2>Adresse</h2>
    <p>{{ property.adresseNumero}}
    {{ property.adresseLibelle}} </br>
    {{property.adresseCp}} {{property.adresseVille}}</p>
    <h2>Propriétaire</h2>
    <p>
      Nom : {{ property.ownerLastname }}
      <br> Prenom : {{ property.ownerFirstname}}
      <br> Phone : {{ property.ownerPhone }}
      <br> Email : {{ property.ownerEmail }}
    </p>
    <h2>Détails</h2>
    <p>Prix : {{ property.prix }}</p>
    <p>Surface : {{ property.surface }}</p>
    <p>N° Pièces : {{ property.nombrePiece }}</p>
    <p>N° Places de parking : {{ property.nombreParking }}</p>
    <p>Offre enregistrée le : {{ property.createdAt | date('d/m/Y') }} à {{ property.createdAt | date('H:i')}}</p>
    <h2> Description </h2>
    <p>{{ property.description }}</p>
    <h2>Images</h2>
    <div class=\"container\">
      <div class=\"row\">
        {% for item in property.pictures %}
          <div class=\"container col-4\">
            <img src=\"{{ item.url }}\" class=\"img-fluid\" alt=\"...\">
            <div class=\"title row\">
                <h5 class=\"text- col-6\"> {{  item.name }}</h5>
                <a href=\"{{ path('picture_delete', {'id_prop' : property.id, \"id_pic\" : item.id})}}\" class=\"btn btn-success col-4\">X</a>
            </div>
          </div>
        {% endfor %}

      </div>
    </div>
    <a href=\"{{ path('properties_edit', {'id': property.id}) }}\" class=\"btn btn-primary\">Modifier</a>
    <a href=\"{{ path('properties_picturesAdd', {'id': property.id}) }}\" class=\"btn btn-success\">Ajouter des images</a>
    <a href=\"{{ path('properties_delete', {'id': property.id}) }}\" onclick=\"return confirm('are u sure?')\" class=\"btn btn-secondary\">Supprimer</a>
  </div>
</div>
{% endblock %}
", "properties/show.html.twig", "/home/maxime/Documents/glutimo/glutimo/templates/properties/show.html.twig");
    }
}
