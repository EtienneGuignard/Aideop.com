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

/* form/login.php */
class __TwigTemplate_a3bc2513c58bc8354e41c91bb37caa978f426b21ba51a1659c7773c6ddf2a219 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/login.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/login.php"));

        // line 1
        echo "<form class=\"loginForm\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"POST\">
    <div class=\"row row-flex justify-content-center align-self-end\">
        <div class=\"col-md-auto mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"_username\" id=\"username\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email\" required>
        </div>    
        <div class=\"col-md-auto mb-3\">       
            <input type=\"password\" class=\"form-control mb-3\" name=\"_password\" id=\"password\" placeholder=\"Mot de Passe\" required>
        </div>
        <div class=\"col-md-auto formSubmit mb-3\">         
            <button type=\"submit\" class=\"btn btn-primary\">Me connecter</button>
        </div>            
    </div>
</form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form/login.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"loginForm\" action=\"{{path('app_login')}}\" method=\"POST\">
    <div class=\"row row-flex justify-content-center align-self-end\">
        <div class=\"col-md-auto mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"_username\" id=\"username\" value=\"{{last_username}}\" placeholder=\"Email\" required>
        </div>    
        <div class=\"col-md-auto mb-3\">       
            <input type=\"password\" class=\"form-control mb-3\" name=\"_password\" id=\"password\" placeholder=\"Mot de Passe\" required>
        </div>
        <div class=\"col-md-auto formSubmit mb-3\">         
            <button type=\"submit\" class=\"btn btn-primary\">Me connecter</button>
        </div>            
    </div>
</form>
</div>", "form/login.php", "A:\\git\\Projet-AO\\templates\\form\\login.php");
    }
}
