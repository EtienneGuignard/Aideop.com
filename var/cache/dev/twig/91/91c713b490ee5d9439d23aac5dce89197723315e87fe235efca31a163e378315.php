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

/* registration/index.html.twig */
class __TwigTemplate_c5faa483db24f36baf53cb0cbb4e56b00ff21ca69f953ab5768bb1277e487bdd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context["cpsAlert"] = "";
        // line 7
        echo "
    ";
        // line 40
        echo "        ";
        // line 41
        echo "            
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
                        
                        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "cpsCardOwner", [], "any", false, false, false, 46), "numeroCarte", [], "any", false, false, false, 46), 'row');
        echo "
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "postaCode", [], "any", false, false, false, 47), 'row');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'row');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), 'row');
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), 'row');
        echo "
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "firstname", [], "any", false, false, false, 51), 'row');
        echo "
                    </div>
                    <div class=\"col-md-5\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "adress", [], "any", false, false, false, 54), 'row');
        echo "
                        
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "city", [], "any", false, false, false, 56), 'row');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "phoneNumber", [], "any", false, false, false, 57), 'row');
        echo "
                        <select name=\"role\" id=\"role\" class=\"form-select\">
                            <option value =\"ROLE_SURGEON\">Chirugien</option>
                            <option value =\"ROLE_NURSE\">Aide opératoire</option>  
                        </select>
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "surgicalSpeciality", [], "any", false, false, false, 62), 'row');
        echo "
                        
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-auto\">
                        <button type=\"submit\" class=\"btn btn-secondary\">S'inscrire</button>
                    </div>
                </div>
                    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
            
        ";
        // line 74
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 74,  143 => 71,  131 => 62,  123 => 57,  119 => 56,  114 => 54,  108 => 51,  104 => 50,  100 => 49,  96 => 48,  92 => 47,  88 => 46,  84 => 45,  78 => 41,  76 => 40,  73 => 7,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block body %}
{% set cpsAlert = \"\" %}

    {# <div class=\"row justify-content-center\">
        <div class=\"col-md-8 pageTitle\">
                Formulaire d'inscription
        </div>
    </div>
    <div class=\"row justify-content-center\"> 
        <div class=\"col-md-5\">
            {{form_start(formCps)}}
            {{form_widget(formCps.numeroCarte, {'attr': {'placeholder' : \"Votre n° de carte CPS/CPF (10 chiffres)\"} }) }}
            {{form_errors(formCps.numeroCarte)}}
        </div>
        <div class=\"col-md-auto formSubmit\">
            <button type=\"submit\" class=\"btn btn-secondary\">Verifier numéro CPS</button>
        </div>
    </div>
    <div class=\"row my-5\">
        <div class=\"col\">
            {% for message in app.flashes('cpsSuccess') %}
            {% set cpsAlert = \"cpsSuccess\" %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
            {% endfor %}
            {% for message in app.flashes('cpsError') %}
            {% set cpsAlert = \"cpsFail\" %}
            <div class=\"alert alert-warning\">
            {{ message }}
            </div>
            {% endfor %}
        {{form_end(formCps)}}
        </div>
    </div> #}
        {# {% if cpsAlert == \"cpsSuccess\" %} #}
            
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
                        
                        {{form_start(form)}}
                        {{form_row(form.cpsCardOwner.numeroCarte)}}
                        {{form_row(form.postaCode)}}
                        {{form_row(form.email) }}
                        {{form_row(form.password) }}
                        {{form_row(form.name)}}
                        {{form_row(form.firstname)}}
                    </div>
                    <div class=\"col-md-5\">
                        {{form_row(form.adress)}}
                        
                        {{form_row(form.city)}}
                        {{form_row(form.phoneNumber)}}
                        <select name=\"role\" id=\"role\" class=\"form-select\">
                            <option value =\"ROLE_SURGEON\">Chirugien</option>
                            <option value =\"ROLE_NURSE\">Aide opératoire</option>  
                        </select>
                        {{form_row(form.surgicalSpeciality)}}
                        
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-auto\">
                        <button type=\"submit\" class=\"btn btn-secondary\">S'inscrire</button>
                    </div>
                </div>
                    {{form_end(form)}}
            
        {# {% endif %} #}

{% endblock %}
", "registration/index.html.twig", "A:\\git\\Projet-AO\\templates\\registration\\index.html.twig");
    }
}
