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

/* registration/registration.html.twig */
class __TwigTemplate_b1512f6b2fc2e9b0bd39e25393b96817fa89fa9119fea2a2470e9d5a52a1136b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/registration.html.twig", 1);
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
        echo "                <div class=\"row justify-content-center\">
                    <div class=\"pageTitle\">
                        Enregistrement (2/2)
                    </div>
                    <div class=\"col-md-5\">
<!-- Alerts (if any : CPS check success / registration fail) -->
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "cpsSuccess"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "registrationError"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-auto text-center\">
                        <h5 class=\"my-3\">Données fournis par votre CPS/CPF (non modifiables) :</h5>
                    </div>
                 </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
<!-- Form/Registration -->
                        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <!-- Pre-filled -->
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "cpsnumber", [], "any", false, false, false, 32), 'row', ["attr" => ["value" => (isset($context["numeroCarte"]) || array_key_exists("numeroCarte", $context) ? $context["numeroCarte"] : (function () { throw new RuntimeError('Variable "numeroCarte" does not exist.', 32, $this->source); })()), "class" => "formDisabled"]]);
        echo " 
                        <label for=\"role\" class=\"form-label m-0\">Profession</label>
                        ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "session", [], "any", false, false, false, 34), "get", [0 => "codeProfession"], "method", false, false, false, 34) == 10)) {
            // line 35
            echo "                        <input type=\"text\" value=\"Chirurgien\" id=\"role\" class=\"form-control formDisabled m-0\">
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "codeProfession"], "method", false, false, false, 36) == 60)) {
            // line 37
            echo "                        <input type=\"text\" value=\"Infirmier(ère)\" id=\"role\" class=\"form-control formDisabled m-0\">   
                        ";
        }
        // line 39
        echo "                    </div>
                    <div class=\"col-md-5\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), 'row', ["attr" => ["value" => (isset($context["nomDexercice"]) || array_key_exists("nomDexercice", $context) ? $context["nomDexercice"] : (function () { throw new RuntimeError('Variable "nomDexercice" does not exist.', 41, $this->source); })()), "class" => "formDisabled"]]);
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "firstname", [], "any", false, false, false, 42), 'row', ["attr" => ["value" => (isset($context["prenomDexercice"]) || array_key_exists("prenomDexercice", $context) ? $context["prenomDexercice"] : (function () { throw new RuntimeError('Variable "prenomDexercice" does not exist.', 42, $this->source); })()), "class" => "formDisabled"]]);
        echo "
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-auto text-center\">
    <!-- login/password -->
                        <h5 class=\"my-3\">Identifiants :</h5>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'row');
        echo "
                    </div>
                    <div class=\"col-md-5\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), 'row');
        echo "
                        
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5 text-center\">
    <!-- Contact info -->
                        <h5 class=\"my-3\">Coordonnées :</h5>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "phoneNumber", [], "any", false, false, false, 68), 'row');
        echo "
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "adress", [], "any", false, false, false, 69), 'row');
        echo "
                    </div>
                    <div class=\"col-md-5\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "zipCode", [], "any", false, false, false, 72), 'row');
        echo " 
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "city", [], "any", false, false, false, 73), 'row');
        echo "
                    </div>   
                        ";
        // line 75
        echo " 
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-auto\">
                        <button type=\"submit\" class=\"btn btn-secondary my-3\">S'inscrire</button>
                    </div>
                </div>
                    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 83,  204 => 75,  199 => 73,  195 => 72,  189 => 69,  185 => 68,  170 => 56,  164 => 53,  150 => 42,  146 => 41,  142 => 39,  138 => 37,  136 => 36,  133 => 35,  131 => 34,  126 => 32,  121 => 30,  109 => 20,  100 => 17,  97 => 16,  92 => 15,  83 => 12,  80 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
                <div class=\"row justify-content-center\">
                    <div class=\"pageTitle\">
                        Enregistrement (2/2)
                    </div>
                    <div class=\"col-md-5\">
<!-- Alerts (if any : CPS check success / registration fail) -->
                        {% for message in app.flashes('cpsSuccess') %}
                            <div class=\"alert alert-success\">
                                {{ message }}
                            </div>
                        {% endfor %}
                        {% for message in app.flashes('registrationError') %}
                            <div class=\"alert alert-success\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-auto text-center\">
                        <h5 class=\"my-3\">Données fournis par votre CPS/CPF (non modifiables) :</h5>
                    </div>
                 </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
<!-- Form/Registration -->
                        {{ form_start(form, {attr: {novalidate: 'novalidate'}} ) }}
    <!-- Pre-filled -->
                        {{ form_row(form.cpsnumber, {'attr': {'value' : numeroCarte, 'class' : 'formDisabled'} }) }} 
                        <label for=\"role\" class=\"form-label m-0\">Profession</label>
                        {% if app.session.get('codeProfession')==10 %}
                        <input type=\"text\" value=\"Chirurgien\" id=\"role\" class=\"form-control formDisabled m-0\">
                        {% elseif app.session.get('codeProfession')==60 %}
                        <input type=\"text\" value=\"Infirmier(ère)\" id=\"role\" class=\"form-control formDisabled m-0\">   
                        {% endif %}
                    </div>
                    <div class=\"col-md-5\">
                        {{ form_row(form.name, {'attr': {'value' : nomDexercice, 'class' : 'formDisabled'} }) }}
                        {{ form_row(form.firstname, {'attr': {'value' : prenomDexercice, 'class' : 'formDisabled'}} ) }}
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-auto text-center\">
    <!-- login/password -->
                        <h5 class=\"my-3\">Identifiants :</h5>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
                        {{form_row(form.email) }}
                    </div>
                    <div class=\"col-md-5\">
                        {{form_row(form.password) }}
                        
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5 text-center\">
    <!-- Contact info -->
                        <h5 class=\"my-3\">Coordonnées :</h5>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-5\">
                        {{form_row(form.phoneNumber)}}
                        {{form_row(form.adress)}}
                    </div>
                    <div class=\"col-md-5\">
                        {{form_row(form.zipCode) }} 
                        {{form_row(form.city)}}
                    </div>   
                        {# {{form_row(form.surgicalSpeciality)}} #} 
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-auto\">
                        <button type=\"submit\" class=\"btn btn-secondary my-3\">S'inscrire</button>
                    </div>
                </div>
                    {{form_end(form)}}

{% endblock %}
", "registration/registration.html.twig", "A:\\git\\Projet-AO\\templates\\registration\\registration.html.twig");
    }
}
