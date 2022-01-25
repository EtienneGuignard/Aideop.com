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

/* informations/informations.html.twig */
class __TwigTemplate_94371192ab491ac5cfe5bb8c0c9e253591330a7792c5238f1046688d6df3e8bb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/informations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/informations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "informations/informations.html.twig", 1);
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
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">           
            <div class=\"pageTitle\">
                Infos Pratiques
            </div>
            <h5>FONCTIONNEMENT DU SITE :</h5>
            <h6>Vous êtes chirurgien? </h6>
            <ul>
                <li>créez votre compte</li>
                <li>utilisez le formulaire de recherche pour rechercher les aides opératoires disponibles près de chez vous</li>
            </ul>
            <h6>Vous êtes IBODE / IDE?</h6>
            <ul>
                <li>créez votre compte en indiquant vos coordonnées</li>
                <li>indiquez vos disponibilités : soit en cliquant le bouton \"me rendre disponible\" dans mon compte, soit en programmant votre calendrier<li></li>
                <li>votre profil est désormais consultable par les chirurgiens. Ils vous contacteront directement dès que vous apparaîtrez dans leur résultat de recherche</li>
            </ul>
            <h5>UN PROBLEME LORS DE VOTRE ENREGISTREMENT?</h5>
            <p>Si vous venez d'obtenir (moins d'un mois) votre CPS/CPF et que vous n'arrivez pas à vous enregister, nous vous inviteons à re-essayer ultérieurement. 
                La base de données et mise à jour mensuellement, mais nous travaillons pour automatiser ce processus.</p>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "informations/informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">           
            <div class=\"pageTitle\">
                Infos Pratiques
            </div>
            <h5>FONCTIONNEMENT DU SITE :</h5>
            <h6>Vous êtes chirurgien? </h6>
            <ul>
                <li>créez votre compte</li>
                <li>utilisez le formulaire de recherche pour rechercher les aides opératoires disponibles près de chez vous</li>
            </ul>
            <h6>Vous êtes IBODE / IDE?</h6>
            <ul>
                <li>créez votre compte en indiquant vos coordonnées</li>
                <li>indiquez vos disponibilités : soit en cliquant le bouton \"me rendre disponible\" dans mon compte, soit en programmant votre calendrier<li></li>
                <li>votre profil est désormais consultable par les chirurgiens. Ils vous contacteront directement dès que vous apparaîtrez dans leur résultat de recherche</li>
            </ul>
            <h5>UN PROBLEME LORS DE VOTRE ENREGISTREMENT?</h5>
            <p>Si vous venez d'obtenir (moins d'un mois) votre CPS/CPF et que vous n'arrivez pas à vous enregister, nous vous inviteons à re-essayer ultérieurement. 
                La base de données et mise à jour mensuellement, mais nous travaillons pour automatiser ce processus.</p>
        </div>
    </div>

{% endblock %}", "informations/informations.html.twig", "A:\\git\\Projet-AO\\templates\\informations\\informations.html.twig");
    }
}
