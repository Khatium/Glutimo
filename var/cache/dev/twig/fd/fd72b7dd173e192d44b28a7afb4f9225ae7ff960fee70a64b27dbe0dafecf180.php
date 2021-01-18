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

/* properties/home.html.twig */
class __TwigTemplate_0ee57858e6de44cf224382f44a2d6081701f07375ab817b72eb3ee55f2822e3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "properties/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "properties/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "properties/home.html.twig", 1);
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
        echo "
  <h1>Tableau de bord</h1>

  <table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Titre</th>
      <th scope=\"col\">Adresse</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Surface</th>
      <th scope=\"col\">N° Pièces</th>
      <th scope=\"col\">N° Parking</th>
      <th scope=\"col\">Date de création</th>
      <th scope=\"col\">N° Propriétaire</th>
      <th scope=\"col\">Edit</th>
      <th scope=\"col\">Delete</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 24
            echo "    <tr class=\"
    ";
            // line 25
            if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 25) % 2), 0))) {
                // line 26
                echo "      table-success
    ";
            } else {
                // line 28
                echo "      table-info
    ";
            }
            // line 30
            echo "    \">
      <th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</th>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "adresseLibelle", [], "any", false, false, false, 32), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "adresseCp", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "adresseVille", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
      <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "prix", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
      <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "surface", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
      <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "nombrePiece", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "nombreParking", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
      <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "createdAt", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "ownerPhone", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
      <td> <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("properties_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">0</a></td>
      <td> <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("properties_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" onclick=\"return confirm('are u sure?')\" class=\"btn btn-danger\">X</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "properties/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  149 => 40,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  113 => 32,  109 => 31,  106 => 30,  102 => 28,  98 => 26,  96 => 25,  93 => 24,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body %}

  <h1>Tableau de bord</h1>

  <table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Titre</th>
      <th scope=\"col\">Adresse</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Surface</th>
      <th scope=\"col\">N° Pièces</th>
      <th scope=\"col\">N° Parking</th>
      <th scope=\"col\">Date de création</th>
      <th scope=\"col\">N° Propriétaire</th>
      <th scope=\"col\">Edit</th>
      <th scope=\"col\">Delete</th>
    </tr>
  </thead>
  <tbody>
    {% for property in properties %}
    <tr class=\"
    {% if property.id % 2 == 0 %}
      table-success
    {% else %}
      table-info
    {% endif %}
    \">
      <th scope=\"row\">{{property.title}}</th>
      <td>{{property.adresseLibelle}}<br>{{property.adresseCp}} {{property.adresseVille}}</td>
      <td>{{property.prix}}</td>
      <td>{{property.surface}}</td>
      <td>{{property.nombrePiece}}</td>
      <td>{{property.nombreParking}}</td>
      <td>{{ property.createdAt | date('d/m/Y') }}</td>
      <td>{{property.ownerPhone}}</td>
      <td> <a href=\"{{ path('properties_edit', {'id': property.id}) }}\" class=\"btn btn-warning\">0</a></td>
      <td> <a href=\"{{ path('properties_delete', {'id': property.id}) }}\" onclick=\"return confirm('are u sure?')\" class=\"btn btn-danger\">X</a></td>
    </tr>
    {% endfor %}
  </tbody>
</table>

{% endblock %}
", "properties/home.html.twig", "/home/maxime/Documents/glutimo/glutimo/templates/properties/home.html.twig");
    }
}
