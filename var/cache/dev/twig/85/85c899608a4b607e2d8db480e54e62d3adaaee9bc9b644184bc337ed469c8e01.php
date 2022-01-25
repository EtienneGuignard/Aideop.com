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

/* form/searchUser.php */
class __TwigTemplate_ce07e791f58e64eb4736fe7a28d6dfe31d9662dafc6449d85e5a74e548f17f52 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/searchUser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/searchUser.php"));

        // line 1
        echo "<div class=\"text-white bg-secondary mb-3 text-center h-100\">
    <form action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"post\" class=\"loginForm\">

        <div class=\"card-header\">Rechercher un(e) utilisateur(rice)</div>
        <div class=\"card-body row justify-content-center\">
            <div class=\"col-md-8\">
                <label for=\"search\">Nom et/ou Prénom :</label>
                <input type=\"search\" name=\"search\" id=\"search\" class=\"form-control mb-3\">
                <button type=\"submit\" class=\"btn btn-light mb-3\">Rechercher</button>
            </div>   
        </div> 

</form>
    
</div>
        
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form/searchUser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-white bg-secondary mb-3 text-center h-100\">
    <form action=\"{{path('search')}}\" method=\"post\" class=\"loginForm\">

        <div class=\"card-header\">Rechercher un(e) utilisateur(rice)</div>
        <div class=\"card-body row justify-content-center\">
            <div class=\"col-md-8\">
                <label for=\"search\">Nom et/ou Prénom :</label>
                <input type=\"search\" name=\"search\" id=\"search\" class=\"form-control mb-3\">
                <button type=\"submit\" class=\"btn btn-light mb-3\">Rechercher</button>
            </div>   
        </div> 

</form>
    
</div>
        
", "form/searchUser.php", "A:\\git\\Projet-AO\\templates\\form\\searchUser.php");
    }
}
