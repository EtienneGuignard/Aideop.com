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

/* form/searchUser.html.twig */
class __TwigTemplate_38a9ba33523a2f473137ed2c682c6c0b774c89472f92062ed355963e9f0259d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/searchUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/searchUser.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", [0 => "searchUserError"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "        <div class=\"alert alert-danger appFlashError mt-3\">
            ";
            // line 3
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
<div class=\"text-white bg-secondary mb-3 text-center h-100\">
    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"post\" class=\"loginForm\">

        <div class=\"card-header\">Rechercher un(e) utilisateur(rice)</div>
        <div class=\"card-body row justify-content-center\">
            <div class=\"col-md-8\">
                <label for=\"search\">Nom et/ou Prénom :</label>
                <input type=\"search\" name=\"search\" id=\"search\" class=\"form-control mb-3\" required minlength=\"2\">
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
        return "form/searchUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 6,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for message in app.flashes('searchUserError') %}
        <div class=\"alert alert-danger appFlashError mt-3\">
            {{ message }}
        </div>
{% endfor %}

<div class=\"text-white bg-secondary mb-3 text-center h-100\">
    <form action=\"{{path('search')}}\" method=\"post\" class=\"loginForm\">

        <div class=\"card-header\">Rechercher un(e) utilisateur(rice)</div>
        <div class=\"card-body row justify-content-center\">
            <div class=\"col-md-8\">
                <label for=\"search\">Nom et/ou Prénom :</label>
                <input type=\"search\" name=\"search\" id=\"search\" class=\"form-control mb-3\" required minlength=\"2\">
                <button type=\"submit\" class=\"btn btn-light mb-3\">Rechercher</button>
            </div>   
        </div> 

    </form>
    
</div>
        
", "form/searchUser.html.twig", "A:\\git\\Projet-AO\\templates\\form\\searchUser.html.twig");
    }
}
