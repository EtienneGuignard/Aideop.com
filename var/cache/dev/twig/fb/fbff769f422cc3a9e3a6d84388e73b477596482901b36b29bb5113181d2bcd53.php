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

/* footer.php */
class __TwigTemplate_911f780cca2064c0f3f086cafa2f54a528e24ffcaa8814e6210c8dc35e5993b5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.php"));

        // line 1
        echo "

  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_us");
        echo "\" class=\"nav-link px-2 text-muted\">Qui sommes-nous?</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("informations");
        echo "\" class=\"nav-link px-2 text-muted\">Infos Pratiques</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link px-2 text-muted\">Contactez-nous</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("credits");
        echo "\" class=\"nav-link px-2 text-muted\">Credits</a></li>
    </ul>
    <p class=\"text-center text-muted\">&copy; 2022 aideop.com</p>
  </footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"{{path('about_us')}}\" class=\"nav-link px-2 text-muted\">Qui sommes-nous?</a></li>
      <li class=\"nav-item\"><a href=\"{{path('informations')}}\" class=\"nav-link px-2 text-muted\">Infos Pratiques</a></li>
      <li class=\"nav-item\"><a href=\"{{path('contact')}}\" class=\"nav-link px-2 text-muted\">Contactez-nous</a></li>
      <li class=\"nav-item\"><a href=\"{{path('credits')}}\" class=\"nav-link px-2 text-muted\">Credits</a></li>
    </ul>
    <p class=\"text-center text-muted\">&copy; 2022 aideop.com</p>
  </footer>
", "footer.php", "A:\\git\\Projet-AO\\templates\\footer.php");
    }
}
