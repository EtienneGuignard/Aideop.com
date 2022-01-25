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

/* header.html.twig */
class __TwigTemplate_9ab3ddce9370b85b252287f8d7a860ef8463bc13206507d98309806e499f1970 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
            <a class=\"navbar-brand bannerLogo text-secondary\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">aideop.com</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle active ms-3\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">A propos</a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_us");
        echo "\">Qui sommes-nous?</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("informations");
        echo "\">Infos Pratiques</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donate");
        echo "\">Faire un don</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("credits");
        echo "\">Crédits</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active ms-3\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contactez-nous</a>
                        <span class=\"visually-hidden\">(current)</span>
                    </li>
                </ul>
                <div class=\"d-flex\">
                    ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "                    <div class=\"btn-group\">
                        ";
            // line 26
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SURGEON")) {
                // line 27
                echo "                            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
                echo "\"><button type=\"button\" class=\"btn btn-secondary accountButton\">Mon compte</button></a>
                            <button type=\"button\" class=\"btn btn-secondary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <span class=\"visually-hidden\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"";
                // line 32
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("surgery_notification");
                echo "\">Ajouter une Annonce</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_user_surgery", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">Mes annonces</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">Modifier mes données</a></li>
                            </ul>
                        ";
            } else {
                // line 37
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
                echo "\"><button type=\"button\" class=\"btn btn-secondary accountButton\">Mon compte</button></a>
                                <button type=\"button\" class=\"btn btn-secondary dropdown-toggle dropdown-toggle-split marginDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <span class=\"visually-hidden\">Toggle Dropdown</span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("availability");
                echo "\">Ajouter une disponibilité</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_availability", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">Mes disponibilités</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">Modifier mes données</a></li>
                                </ul>
                        ";
            }
            // line 47
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><button class=\"btn btn-danger mx-2\" href=\"\">Déconnexion</button></a>
                            ";
        } else {
            // line 49
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><button class=\"btn btn-secondary mx-2\" href=\"\">Me Connecter</button></a>    
                            <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cps_check");
            echo "\"><button class=\"btn btn-light mx-2\" href=\"\">M'enregistrer</button></a>    
                        ";
        }
        // line 52
        echo "                    </div>
                </div>
            </div>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  150 => 50,  145 => 49,  139 => 47,  133 => 44,  129 => 43,  125 => 42,  116 => 37,  110 => 34,  106 => 33,  102 => 32,  93 => 27,  91 => 26,  88 => 25,  86 => 24,  78 => 19,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
            <a class=\"navbar-brand bannerLogo text-secondary\" href=\"{{path('home')}}\">aideop.com</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle active ms-3\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">A propos</a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{path('about_us')}}\">Qui sommes-nous?</a>
                            <a class=\"dropdown-item\" href=\"{{path('informations')}}\">Infos Pratiques</a>
                            <a class=\"dropdown-item\" href=\"{{path('donate')}}\">Faire un don</a>
                            <a class=\"dropdown-item\" href=\"{{path('credits')}}\">Crédits</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active ms-3\" href=\"{{path('contact')}}\">Contactez-nous</a>
                        <span class=\"visually-hidden\">(current)</span>
                    </li>
                </ul>
                <div class=\"d-flex\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"btn-group\">
                        {% if is_granted('ROLE_SURGEON') %}
                            <a href=\"{{path('account')}}\"><button type=\"button\" class=\"btn btn-secondary accountButton\">Mon compte</button></a>
                            <button type=\"button\" class=\"btn btn-secondary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <span class=\"visually-hidden\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a class=\"dropdown-item\" href=\"{{path('surgery_notification')}}\">Ajouter une Annonce</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('display_user_surgery', { 'id': app.user.id } ) }}\">Mes annonces</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{path('update_user', { 'id': app.user.id })}}\">Modifier mes données</a></li>
                            </ul>
                        {% else %}
                                <a href=\"{{path('account')}}\"><button type=\"button\" class=\"btn btn-secondary accountButton\">Mon compte</button></a>
                                <button type=\"button\" class=\"btn btn-secondary dropdown-toggle dropdown-toggle-split marginDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <span class=\"visually-hidden\">Toggle Dropdown</span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"{{path('availability')}}\">Ajouter une disponibilité</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('display_availability',  { 'id': app.user.id })}}\">Mes disponibilités</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{path('update_user', { 'id': app.user.id })}}\">Modifier mes données</a></li>
                                </ul>
                        {% endif %}
                            <a href=\"{{ path('app_logout') }}\"><button class=\"btn btn-danger mx-2\" href=\"\">Déconnexion</button></a>
                            {% else %}
                            <a href=\"{{ path('app_login') }}\"><button class=\"btn btn-secondary mx-2\" href=\"\">Me Connecter</button></a>    
                            <a href=\"{{ path('cps_check') }}\"><button class=\"btn btn-light mx-2\" href=\"\">M'enregistrer</button></a>    
                        {% endif %}
                    </div>
                </div>
            </div>
    </nav>
</header>", "header.html.twig", "A:\\git\\Projet-AO\\templates\\header.html.twig");
    }
}
