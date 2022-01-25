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

/* search/index.html.twig */
class __TwigTemplate_22bf6e8db2a3c97af352ddc7c284f675b4e56539d7cd0bb8e5209c597e4fadd0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
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
        echo "<div class=\"row row-flex justify-content-center mb-5\">
    <div class=\"pageTitle\">
        Rechercher un(e) utilisateur(rice)
    </div>
    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"post\" class=\"loginForm\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center\">
                <label for=\"search\">Nom et/ou Prénom :</label>
                <input type=\"search\" name=\"search\" id=\"search\" class=\"form-control mb-3\" required minlength=\"2\">
                <button type=\"submit\" class=\"btn btn-secondary mb-3\">Rechercher</button>
            </div>   
        </div> 
    </form>
</div>
    <section class=\"row d-flex justify-content-center\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 20
            echo "            <div class=\"flip-card\">
                <div class=\"flip-card-inner\">
                    <div class=\"flip-card-front border border-primary rounded bg-white\">
                        <h5 class=\"p-2 text-white bg-primary rounded-top\">";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "firstname", [], "any", false, false, false, 23)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5>
                        <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/surgeon_icon.png"), "html", null, true);
            echo "\" alt=\"Icon chirurgien\" class=\"mb-3\">
                        <h5>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "city", [], "any", false, false, false, 25), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "zipcode", [], "any", false, false, false, 25), "html", null, true);
            echo ")</h5>
                    </div>
                    <div class=\"flip-card-back border border-secondary rounded bg-white\">
                        <h5 class=\"p-2 text-white bg-secondary rounded-top\">";
            // line 28
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "firstname", [], "any", false, false, false, 28)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
                        <ul class=\"list-unstyled\">
                            <li><span class =\"text-secondary\">Adresse email: </span><a class=\"text-decoration-none\" href=\"mailto:";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></li>
                            <li><span class =\"text-secondary\">Numéro: </span><a class=\"text-decoration-none\" href=\"tel:";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "phoneNumber", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "phoneNumber", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></li>
                            <li><span class =\"text-secondary\">Numéro CPS/CPF: </span>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "cpsnumber", [], "any", false, false, false, 32), "html", null, true);
            echo "</li>
                            <li><span class =\"text-secondary\">Ville: </span>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "city", [], "any", false, false, false, 33), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "zipCode", [], "any", false, false, false, 33), "html", null, true);
            echo ")</li>
                        </ul>
                    </div>
                </div>
            </div> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        ";
        if (twig_test_empty((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 39, $this->source); })()))) {
            // line 40
            echo "        <div class=\"text-center\">Aucun résultat à afficher.</div>
        ";
        }
        // line 42
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 42,  155 => 40,  152 => 39,  138 => 33,  134 => 32,  128 => 31,  122 => 30,  115 => 28,  107 => 25,  103 => 24,  97 => 23,  92 => 20,  88 => 19,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row row-flex justify-content-center mb-5\">
    <div class=\"pageTitle\">
        Rechercher un(e) utilisateur(rice)
    </div>
    <form action=\"{{path('search')}}\" method=\"post\" class=\"loginForm\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center\">
                <label for=\"search\">Nom et/ou Prénom :</label>
                <input type=\"search\" name=\"search\" id=\"search\" class=\"form-control mb-3\" required minlength=\"2\">
                <button type=\"submit\" class=\"btn btn-secondary mb-3\">Rechercher</button>
            </div>   
        </div> 
    </form>
</div>
    <section class=\"row d-flex justify-content-center\">
        {% for result in results %}
            <div class=\"flip-card\">
                <div class=\"flip-card-inner\">
                    <div class=\"flip-card-front border border-primary rounded bg-white\">
                        <h5 class=\"p-2 text-white bg-primary rounded-top\">{{result.firstname | capitalize}} {{result.name}}</h5>
                        <img src=\"{{asset('assets/img/surgeon_icon.png')}}\" alt=\"Icon chirurgien\" class=\"mb-3\">
                        <h5>{{result.city}} ({{result.zipcode}})</h5>
                    </div>
                    <div class=\"flip-card-back border border-secondary rounded bg-white\">
                        <h5 class=\"p-2 text-white bg-secondary rounded-top\">{{result.firstname | capitalize}} {{result.name}}</h5>
                        <ul class=\"list-unstyled\">
                            <li><span class =\"text-secondary\">Adresse email: </span><a class=\"text-decoration-none\" href=\"mailto:{{result.email}}\">{{result.email}}</a></li>
                            <li><span class =\"text-secondary\">Numéro: </span><a class=\"text-decoration-none\" href=\"tel:{{result.phoneNumber}}\">{{result.phoneNumber}}</a></li>
                            <li><span class =\"text-secondary\">Numéro CPS/CPF: </span>{{result.cpsnumber}}</li>
                            <li><span class =\"text-secondary\">Ville: </span>{{result.city}} ({{result.zipCode}})</li>
                        </ul>
                    </div>
                </div>
            </div> 
        {% endfor %}
        {% if results is empty %}
        <div class=\"text-center\">Aucun résultat à afficher.</div>
        {% endif %}
    </section>
{% endblock %}
", "search/index.html.twig", "A:\\git\\Projet-AO\\templates\\search\\index.html.twig");
    }
}
