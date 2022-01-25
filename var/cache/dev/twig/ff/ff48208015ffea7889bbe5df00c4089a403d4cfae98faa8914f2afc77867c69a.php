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

/* update_user/index.html.twig */
class __TwigTemplate_d8d6991950005c5514367b2cd47b473a8b161879d6c4f4d95b2d4db3a38ae40a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "update_user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "update_user/index.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "update_user/index.html.twig", 1);
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
        echo "    <div class=\"row justify-content-center\">
        <div class=\"pageTitle\">
            Mettez à jour vos données 
        </div>
        <div class=\"col-md-5\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "cpsSuccess"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "registrationError"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-auto text-center\">
            <h5 class=\"my-3\">Données fournis par votre CPS/CPF (non modifiables) :</h5>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-5\">
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "cpsnumber", [], "any", false, false, false, 32), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "cpsnumber", [], "any", false, false, false, 32), "class" => "formDisabled"]]);
        echo " 
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "cpsnumber", [], "any", false, false, false, 33), "html", null, true);
        echo "
             <label for=\"role\" class=\"form-label m-0\">Profession</label>
                        ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "roles", [], "any", false, false, false, 35) == [0 => "ROLE_SURGEON"])) {
            // line 36
            echo "                        <input type=\"text\" value=\"Chirurgien\" id=\"role\" class=\"form-control formDisabled m-0\">
                        ";
        } else {
            // line 38
            echo "                        <input type=\"text\" value=\"Infirmier(ère)\" id=\"role\" class=\"form-control formDisabled m-0\">   
                        ";
        }
        // line 40
        echo "        </div>
        <div class=\"col-md-5\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "class" => "formDisabled"]]);
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "firstname", [], "any", false, false, false, 43), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "firstname", [], "any", false, false, false, 43), "class" => "formDisabled"]]);
        echo "
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-auto text-center\">
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), 'row', ["attr" => ["label" => "Nouveau mot de passe"]]);
        echo "
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-5 text-center\">
            <h5 class=\"my-3\">Coordonnées :</h5>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-5\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "phoneNumber", [], "any", false, false, false, 66), 'row');
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "adress", [], "any", false, false, false, 67), 'row');
        echo "
        </div>
        <div class=\"col-md-5\">
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "zipCode", [], "any", false, false, false, 70), 'row');
        echo " 
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "city", [], "any", false, false, false, 71), 'row');
        echo "
        </div>   
            
        
        ";
        // line 76
        echo "        
    </div>
</div>
<div class=\"row justify-content-center\">
    <div class=\"col-auto\">
        <button type=\"submit\" class=\"btn btn-secondary\">Mettre à jour</button>
    </div>
</div>
    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "update_user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 84,  207 => 76,  200 => 71,  196 => 70,  190 => 67,  186 => 66,  173 => 56,  167 => 53,  154 => 43,  150 => 42,  146 => 40,  142 => 38,  138 => 36,  136 => 35,  131 => 33,  127 => 32,  122 => 30,  111 => 21,  102 => 18,  99 => 17,  94 => 16,  85 => 13,  82 => 12,  78 => 11,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block body %}
    <div class=\"row justify-content-center\">
        <div class=\"pageTitle\">
            Mettez à jour vos données 
        </div>
        <div class=\"col-md-5\">
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
            {{form_start(form, {attr: {novalidate: 'novalidate'}})}}
            
            {{form_row(form.cpsnumber, {'attr': {'value' : app.user.cpsnumber, 'class' : 'formDisabled'} })}} 
            {{ app.user.cpsnumber}}
             <label for=\"role\" class=\"form-label m-0\">Profession</label>
                        {% if app.user.roles == ['ROLE_SURGEON'] %}
                        <input type=\"text\" value=\"Chirurgien\" id=\"role\" class=\"form-control formDisabled m-0\">
                        {% else %}
                        <input type=\"text\" value=\"Infirmier(ère)\" id=\"role\" class=\"form-control formDisabled m-0\">   
                        {% endif %}
        </div>
        <div class=\"col-md-5\">
            {{form_row(form.name, {'attr': {'value' : app.user.name, 'class' : 'formDisabled'} }) }}
            {{form_row(form.firstname, {'attr': {'value' : app.user.firstname, 'class' : 'formDisabled'}} ) }}
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-auto text-center\">
            <h5 class=\"my-3\">Identifiants :</h5>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-5\">
            {{form_row(form.email) }}
        </div>
        <div class=\"col-md-5\">
            {{form_row(form.password, {'attr': {'label' : 'Nouveau mot de passe'}}) }}
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-5 text-center\">
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
        <button type=\"submit\" class=\"btn btn-secondary\">Mettre à jour</button>
    </div>
</div>
    {{form_end(form)}}
{% endblock %}", "update_user/index.html.twig", "A:\\git\\Projet-AO\\templates\\update_user\\index.html.twig");
    }
}
