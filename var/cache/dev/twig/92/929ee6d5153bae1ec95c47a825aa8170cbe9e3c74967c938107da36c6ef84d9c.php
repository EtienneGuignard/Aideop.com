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

/* availability/display_availability.html.twig */
class __TwigTemplate_31cd4c62eddb40a2dd393a454e650be5f0c9d5fc580559fab78904b6c921ce62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/display_availability.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/display_availability.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "availability/display_availability.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "removeAvailabiltySuccess"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <div class=\"alert alert-success appFlashError mt-3\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <div class=\"row d-flex flex-wrap justify-content-center\" >
        <div class=\"pageTitle\">
            Mes disponibilités :
        </div>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availabilities"]) || array_key_exists("availabilities", $context) ? $context["availabilities"] : (function () { throw new RuntimeError('Variable "availabilities" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["availability"]) {
            // line 15
            echo "        <div class=\"col-md-3 p-3 m-3 border border-primary rounded\">
            <div class=\"row d-flex\">
                <div class=\"col align-self-center\">
                    <p><span>Du : </span>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availability"], "start_date", [], "any", false, false, false, 18), "d-m-Y"), "html", null, true);
            echo "<br>Au : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availability"], "end_date", [], "any", false, false, false, 18), "d-m-Y"), "html", null, true);
            echo "</p>
                    <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availability"], "commute_distance", [], "any", false, false, false, 19), "html", null, true);
            echo " <span>km maximum</span></p>
                </div>
            
                <div class=\"col text-center\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit_availability", ["id" => twig_get_attribute($this->env, $this->source, $context["availability"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\"><button class=\"btn btn-secondary my-1\">modifier</button></a>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_availability", ["id" => twig_get_attribute($this->env, $this->source, $context["availability"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><button class=\"btn btn-danger my-1\">Supprimer</button></a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
        if (twig_test_empty((isset($context["availabilities"]) || array_key_exists("availabilities", $context) ? $context["availabilities"] : (function () { throw new RuntimeError('Variable "availabilities" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "    <div class=\"text-center\">Aucun résultat à afficher.</div>
    ";
        }
        // line 32
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "availability/display_availability.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  131 => 30,  128 => 29,  117 => 24,  113 => 23,  106 => 19,  100 => 18,  95 => 15,  91 => 14,  84 => 9,  75 => 6,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{% for message in app.flashes('removeAvailabiltySuccess') %}
        <div class=\"alert alert-success appFlashError mt-3\">
            {{ message }}
        </div>
{% endfor %}

    <div class=\"row d-flex flex-wrap justify-content-center\" >
        <div class=\"pageTitle\">
            Mes disponibilités :
        </div>
    {% for availability in availabilities %}
        <div class=\"col-md-3 p-3 m-3 border border-primary rounded\">
            <div class=\"row d-flex\">
                <div class=\"col align-self-center\">
                    <p><span>Du : </span>{{availability.start_date | date('d-m-Y') }}<br>Au : {{availability.end_date | date('d-m-Y') }}</p>
                    <p>{{availability.commute_distance}} <span>km maximum</span></p>
                </div>
            
                <div class=\"col text-center\">
                    <a href=\"{{path('user_edit_availability',  { 'id': availability.id })}}\"><button class=\"btn btn-secondary my-1\">modifier</button></a>
                    <a href=\"{{path('user_delete_availability',  { 'id': availability.id })}}\"><button class=\"btn btn-danger my-1\">Supprimer</button></a>
                </div>
            </div>
        </div>
    {% endfor %}
    {% if availabilities is empty %}
    <div class=\"text-center\">Aucun résultat à afficher.</div>
    {% endif %}
</div>
{% endblock %}", "availability/display_availability.html.twig", "A:\\git\\Projet-AO\\templates\\availability\\display_availability.html.twig");
    }
}
