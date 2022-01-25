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

/* home/homeCards.php */
class __TwigTemplate_756b5d39efd1df60ba2bc766f51d4b75036f3cd7f8eb70bec6b83bcdf13f41e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/homeCards.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/homeCards.php"));

        // line 1
        echo "<div class=\"row row-flex justify-content-center align-self-end\">
    <div class=\"col-md-5 mb-3 bg-primary border rounded mx-2\">
        <div class=\"text-white h-100\">
            <div class=\"card-header\">Aides Opératoires</div>
            <div class=\"card-body\">
                <p class=\"card-text\">Indiquez vos coordonnées, vos disponibilités et un chirurgien entrera directement en contact avec vous.</p>
            </div>
            <div class=\"text-center\">
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cps_check");
        echo "\"><button type=\"button\" class=\"btn btn-light bt-lg mb-3\">Inscrivez-vous</button></a>
            </div>
        </div>
    </div>
    <div class=\"col-md-5 bg-secondary border rounded mb-3 mx-2\">
        <div class=\"text-white h-100\">
            <div class=\"card-header\">Chirurgiens</div>
            <div class=\"card-body\">
                <p class=\"card-text\">Créez votre compte et recherchez un(e) IBODE ou IDE en quelques clics.</p>
            </div>
            <div class=\"text-center align-self-end\">
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cps_check");
        echo "\"><button type=\"button\" class=\"btn btn-light bt-lg mb-3\">Inscrivez-vous</button></a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/homeCards.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row row-flex justify-content-center align-self-end\">
    <div class=\"col-md-5 mb-3 bg-primary border rounded mx-2\">
        <div class=\"text-white h-100\">
            <div class=\"card-header\">Aides Opératoires</div>
            <div class=\"card-body\">
                <p class=\"card-text\">Indiquez vos coordonnées, vos disponibilités et un chirurgien entrera directement en contact avec vous.</p>
            </div>
            <div class=\"text-center\">
                <a href=\"{{ path('cps_check') }}\"><button type=\"button\" class=\"btn btn-light bt-lg mb-3\">Inscrivez-vous</button></a>
            </div>
        </div>
    </div>
    <div class=\"col-md-5 bg-secondary border rounded mb-3 mx-2\">
        <div class=\"text-white h-100\">
            <div class=\"card-header\">Chirurgiens</div>
            <div class=\"card-body\">
                <p class=\"card-text\">Créez votre compte et recherchez un(e) IBODE ou IDE en quelques clics.</p>
            </div>
            <div class=\"text-center align-self-end\">
                <a href=\"{{ path('cps_check') }}\"><button type=\"button\" class=\"btn btn-light bt-lg mb-3\">Inscrivez-vous</button></a>
            </div>
        </div>
    </div>
</div>
", "home/homeCards.php", "A:\\git\\Projet-AO\\templates\\home\\homeCards.php");
    }
}
