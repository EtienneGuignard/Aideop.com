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

/* account/account_nurse.html.twig */
class __TwigTemplate_84c390dfbe8aeeff756b91ebf42426c1bddb5f547e1a93ca19a988a17791638f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/account_nurse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/account_nurse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/account_nurse.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "addAvailabiltySuccess"], "method", false, false, false, 4));
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
    <div class=\"row justify-content-center\">
        <div class=\"col-8\">
            <div class=\"pageTitle\">
                Mon Compte
            </div>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h4 class=\"mb-4 text-secondary\">Bonjour, ";
        // line 19
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "firstname", [], "any", false, false, false, 19)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "! </h4>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 border border-primary rounded d-flex justify-content-center m-1\">
            <div class=\"row\">
                <div class=\"col-auto align-self-center text-center\">
                    
                        <i class=\"fas fa-info-circle text-primary img-thumbnail fa-7x\"></i>
                   
                </div>
                <div class=\"col d-flex\">
                    <div class=\"align-self-center text-center m-3\">
                        Signalez votre disponibilité immédiatement en cliquant sur le bouton ci-dessous, ou programmez vos disponibilités à l'aide du calendrier.
                        ";
        // line 33
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "InstantAvailability", [], "any", false, false, false, 33) == "Inactive") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "InstantAvailability", [], "any", false, false, false, 33) == null))) {
            // line 34
            echo "                        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_nurse_active");
            echo "\">
                            <input type=\"hidden\" name=\"nurseActive\" id=\"nurseActive\" value=\"nurseActive\">
                            <button type=\"submit\" class=\"btn btn-primary m-3\">Me rendre disponible</button>
                        </form>
                    ";
        } else {
            // line 39
            echo "                        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_nurse_inactive");
            echo "\">
                            <input type=\"hidden\" name=\"nurseInactive\" id=\"nurseInactive\" value=\"nurseInactive\">
                            <button type=\"submit\" class=\"btn btn-danger m-3\">Me rendre non disponible</button>
                        </form>
                    ";
        }
        // line 44
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-md-3 border border-primary rounded d-flex justify-content-center m-1\">
            <div class=\"align-self-center text-center m-3\">
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("availability");
        echo "\" class=\"text-dark\">
                <p><i class=\"fas fa-calendar-plus text-secondary img-thumbnail fa-7x mb-3\"></i></p>
                Programmer mon calendrier</a>
            </div>
        </div>
        <div class=\"col-md-3 border border-secondary rounded d-flex justify-content-center m-1\">
            <div class=\"col-auto d-flex\">
                <div class=\"align-self-center text-center m-3\">
                    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_availability", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "html", null, true);
        echo "\" class=\"text-dark\">
                    <p><i class=\"far fa-calendar-alt  text-primary img-thumbnail fa-7x mb-3\" id=\"calendar\"></i></p>
                    Voir mes disponibilités</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 border border-secondary rounded d-flex justify-content-center m-1\">
            <div class=\"col-auto d-flex\">
                <p class=\"align-self-center text-center\"><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" class=\"text-dark\">
                    <i class=\"fas fa-user-edit text-primary img-thumbnail fa-7x m-3\"></i><br>
                Modifier</a></p>
            </div>
            <div class=\"col\"> 
                <ul class=\"list-unstyled m-3\">
                    <h5>Informations Personnelles</h5>
                    <li><span>Adresse:</span> ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "adress", [], "any", false, false, false, 75), "html", null, true);
        echo "</li>
                    <li><span>Numéro:</span> ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "phoneNumber", [], "any", false, false, false, 76), "html", null, true);
        echo "</li>
                    <li><span>Code Postal:</span> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "zipCode", [], "any", false, false, false, 77), "html", null, true);
        echo " </li>
                    <li><span>Ville:</span> ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "city", [], "any", false, false, false, 78), "html", null, true);
        echo "</li>
                    <li><span>Numéro CPS:</span> ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "CPSNumber", [], "any", false, false, false, 79), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
    </div>     
            


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/account_nurse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 79,  189 => 78,  185 => 77,  181 => 76,  177 => 75,  167 => 68,  156 => 60,  145 => 52,  135 => 44,  126 => 39,  117 => 34,  115 => 33,  96 => 19,  84 => 9,  75 => 6,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{% for message in app.flashes('addAvailabiltySuccess') %}
        <div class=\"alert alert-success appFlashError mt-3\">
            {{ message }}
        </div>
{% endfor %}

    <div class=\"row justify-content-center\">
        <div class=\"col-8\">
            <div class=\"pageTitle\">
                Mon Compte
            </div>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h4 class=\"mb-4 text-secondary\">Bonjour, {{app.user.firstname | capitalize}} {{app.user.name}}! </h4>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 border border-primary rounded d-flex justify-content-center m-1\">
            <div class=\"row\">
                <div class=\"col-auto align-self-center text-center\">
                    
                        <i class=\"fas fa-info-circle text-primary img-thumbnail fa-7x\"></i>
                   
                </div>
                <div class=\"col d-flex\">
                    <div class=\"align-self-center text-center m-3\">
                        Signalez votre disponibilité immédiatement en cliquant sur le bouton ci-dessous, ou programmez vos disponibilités à l'aide du calendrier.
                        {% if (app.user.InstantAvailability =='Inactive') or (app.user.InstantAvailability == null)  %}
                        <form action=\"{{path('account_nurse_active')}}\">
                            <input type=\"hidden\" name=\"nurseActive\" id=\"nurseActive\" value=\"nurseActive\">
                            <button type=\"submit\" class=\"btn btn-primary m-3\">Me rendre disponible</button>
                        </form>
                    {% else %}
                        <form action=\"{{path('account_nurse_inactive')}}\">
                            <input type=\"hidden\" name=\"nurseInactive\" id=\"nurseInactive\" value=\"nurseInactive\">
                            <button type=\"submit\" class=\"btn btn-danger m-3\">Me rendre non disponible</button>
                        </form>
                    {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-md-3 border border-primary rounded d-flex justify-content-center m-1\">
            <div class=\"align-self-center text-center m-3\">
                <a href=\"{{path('availability')}}\" class=\"text-dark\">
                <p><i class=\"fas fa-calendar-plus text-secondary img-thumbnail fa-7x mb-3\"></i></p>
                Programmer mon calendrier</a>
            </div>
        </div>
        <div class=\"col-md-3 border border-secondary rounded d-flex justify-content-center m-1\">
            <div class=\"col-auto d-flex\">
                <div class=\"align-self-center text-center m-3\">
                    <a href=\"{{path('display_availability',  { 'id': app.user.id })}}\" class=\"text-dark\">
                    <p><i class=\"far fa-calendar-alt  text-primary img-thumbnail fa-7x mb-3\" id=\"calendar\"></i></p>
                    Voir mes disponibilités</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 border border-secondary rounded d-flex justify-content-center m-1\">
            <div class=\"col-auto d-flex\">
                <p class=\"align-self-center text-center\"><a href=\"{{ path('update_user', { 'id': app.user.id } ) }}\" class=\"text-dark\">
                    <i class=\"fas fa-user-edit text-primary img-thumbnail fa-7x m-3\"></i><br>
                Modifier</a></p>
            </div>
            <div class=\"col\"> 
                <ul class=\"list-unstyled m-3\">
                    <h5>Informations Personnelles</h5>
                    <li><span>Adresse:</span> {{app.user.adress}}</li>
                    <li><span>Numéro:</span> {{app.user.phoneNumber}}</li>
                    <li><span>Code Postal:</span> {{app.user.zipCode}} </li>
                    <li><span>Ville:</span> {{app.user.city}}</li>
                    <li><span>Numéro CPS:</span> {{app.user.CPSNumber}}</li>
                </ul>
            </div>
        </div>
    </div>     
            


{% endblock %}
", "account/account_nurse.html.twig", "A:\\git\\Projet-AO\\templates\\account\\account_nurse.html.twig");
    }
}
