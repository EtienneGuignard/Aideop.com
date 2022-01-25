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

/* surgery_notification/display_surgery.html.twig */
class __TwigTemplate_38b882cd8e82aa3eef02a16ddb6d492cb1350ed6eb0a0f6ca9e5d319d8dbf8cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery_notification/display_surgery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery_notification/display_surgery.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "surgery_notification/display_surgery.html.twig", 1);
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
        echo "<div class=\"row justify-content-center\">
    <div class=\"col-md-8 pageTitle\">
            Mes demandes d'AO
    </div>
</div>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "deleteSurgerySuccess"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alert alert-success appFlashError mt-3\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <section class=\"row d-flex flex-wrap justify-content-center\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surgeries"]) || array_key_exists("surgeries", $context) ? $context["surgeries"] : (function () { throw new RuntimeError('Variable "surgeries" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["surgery"]) {
            // line 16
            echo "        <div class=\"col-md-3 p-3 m-3 border border-primary rounded\">
                <ul class=\"list-unstyled\">
                    <li><span class=\"text-secondary\">Chirugie le :</span> ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "start_date", [], "any", false, false, false, 18), "d-m-Y"), "html", null, true);
            echo "</li>
                    <li><span class=\"text-secondary\">Spécialité :</span> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "speciality", [], "any", false, false, false, 19), "html", null, true);
            echo "</li>
                    <li><span class=\"text-secondary\">Description :</span> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</li>
                    <li><span class=\"text-secondary\">Nom de la clinique :</span> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "clinic_name", [], "any", false, false, false, 21), "html", null, true);
            echo "</li>
                    <li><span class=\"text-secondary\">Code Postal :</span> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "clinic_zip_code", [], "any", false, false, false, 22), "html", null, true);
            echo "</li>          
                </ul>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_surgery_notification", ["id" => twig_get_attribute($this->env, $this->source, $context["surgery"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><button class=\"btn btn-secondary\">Modifier</button></a>
                <a  class=\"deleteButton\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_surgery_notification", ["id" => twig_get_attribute($this->env, $this->source, $context["surgery"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><button class=\"btn btn-danger\">Supprimer</button></a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surgery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if (twig_test_empty((isset($context["surgeries"]) || array_key_exists("surgeries", $context) ? $context["surgeries"] : (function () { throw new RuntimeError('Variable "surgeries" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "    <div class=\"text-center\">Aucun résultat à afficher.</div>
    ";
        }
        // line 31
        echo "</section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "surgery_notification/display_surgery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  139 => 29,  136 => 28,  127 => 25,  123 => 24,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 16,  94 => 15,  91 => 14,  82 => 11,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-md-8 pageTitle\">
            Mes demandes d'AO
    </div>
</div>
{% for message in app.flashes('deleteSurgerySuccess') %}
        <div class=\"alert alert-success appFlashError mt-3\">
            {{ message }}
        </div>
{% endfor %}
    <section class=\"row d-flex flex-wrap justify-content-center\">
    {% for surgery in surgeries %}
        <div class=\"col-md-3 p-3 m-3 border border-primary rounded\">
                <ul class=\"list-unstyled\">
                    <li><span class=\"text-secondary\">Chirugie le :</span> {{surgery.start_date | date('d-m-Y') }}</li>
                    <li><span class=\"text-secondary\">Spécialité :</span> {{surgery.speciality}}</li>
                    <li><span class=\"text-secondary\">Description :</span> {{surgery.description}}</li>
                    <li><span class=\"text-secondary\">Nom de la clinique :</span> {{surgery.clinic_name}}</li>
                    <li><span class=\"text-secondary\">Code Postal :</span> {{surgery.clinic_zip_code}}</li>          
                </ul>
                <a href=\"{{path('edit_surgery_notification',  { 'id': surgery.id })}}\"><button class=\"btn btn-secondary\">Modifier</button></a>
                <a  class=\"deleteButton\" href=\"{{path('delete_surgery_notification',  { 'id': surgery.id })}}\"><button class=\"btn btn-danger\">Supprimer</button></a>
        </div>
    {% endfor %}
    {% if surgeries is empty %}
    <div class=\"text-center\">Aucun résultat à afficher.</div>
    {% endif %}
</section>
</div>
{% endblock %}", "surgery_notification/display_surgery.html.twig", "A:\\git\\Projet-AO\\templates\\surgery_notification\\display_surgery.html.twig");
    }
}
