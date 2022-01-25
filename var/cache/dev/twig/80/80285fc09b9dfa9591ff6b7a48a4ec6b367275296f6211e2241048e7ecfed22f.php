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

/* form/login.html.twig */
class __TwigTemplate_2a7a91c6c3775cb93d1129673467548588dda9cec96a966b3192abd3bf27fc13 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/login.html.twig"));

        // line 1
        echo "<form class=\"loginForm\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"POST\">
    <div class=\"row justify-content-center mb-3\">
        <div class=\"col-md-auto\">
            <div class=\"row row-flex justify-content-center border border-secondary rounded bg-white p-3 align-content-center\">
                <div class=\"col-md-auto mb-1\">
                    <input type=\"text\" class=\"form-control\" name=\"_username\" id=\"username\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email\" required>
                </div>    
                <div class=\"col-md-auto\">       
                    <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"password\" placeholder=\"Mot de Passe\" required>
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-decoration-none mb-3\">Mot de passe oublié</a>
                </div>
                <div class=\"col-md-auto text-center\">
                    <input type=\"hidden\" name=\"_token\" value=\"user\" />
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">        
                    <button type=\"submit\" class=\"btn btn-primary\">Me connecter</button>
                </div> 
            </div> 
         </div>             
    </div>
</form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  59 => 10,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"loginForm\" action=\"{{path('app_login')}}\" method=\"POST\">
    <div class=\"row justify-content-center mb-3\">
        <div class=\"col-md-auto\">
            <div class=\"row row-flex justify-content-center border border-secondary rounded bg-white p-3 align-content-center\">
                <div class=\"col-md-auto mb-1\">
                    <input type=\"text\" class=\"form-control\" name=\"_username\" id=\"username\" value=\"{{last_username}}\" placeholder=\"Email\" required>
                </div>    
                <div class=\"col-md-auto\">       
                    <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"password\" placeholder=\"Mot de Passe\" required>
                    <a href=\"{{path('app_forgot_password_request')}}\" class=\"text-decoration-none mb-3\">Mot de passe oublié</a>
                </div>
                <div class=\"col-md-auto text-center\">
                    <input type=\"hidden\" name=\"_token\" value=\"user\" />
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">        
                    <button type=\"submit\" class=\"btn btn-primary\">Me connecter</button>
                </div> 
            </div> 
         </div>             
    </div>
</form>
</div>", "form/login.html.twig", "A:\\git\\Projet-AO\\templates\\form\\login.html.twig");
    }
}
