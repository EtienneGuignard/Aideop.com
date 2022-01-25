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

/* informations/credits.html.twig */
class __TwigTemplate_21f31b03d6bdcb21d1444e417b806da53a7bd23dd876d23e855fcb98a54804af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/credits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/credits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "informations/credits.html.twig", 1);
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
        <div class=\"col-auto\">
            <div class=\"pageTitle\">
                Crédits
            </div>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-auto \">
            <h5 class=\"my-3 text-center\">Ce site a été développé par : </h5>
                <div class=\"card my-3 border-primary\" style=\"max-width: 520px;\">
                    <h5 class=\"card-header\">
                        Benoit Baudrin
                    </h5>
                    <div class=\"row g-0\">
                        <div class=\"col-4\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/pfp/pfp_benoit.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"Profile Pic Benoit\">
                        </div>
                        <div class=\"col-8\">
                            <div class=\"card-body\">
                                
                                <p class=\"card-text\">Développeur Web en formation <br> WebForce3 Marseille</p>
                                <div class=\"card-socialLogos\">
                                    <a href=\"https://github.com/benoitBvg\">
                                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/gitLogo.png"), "html", null, true);
        echo "\" alt=\"Logo Github\">
                                    </a>
                                    <a href=\"https://www.linkedin.com/in/benoit-baudrin-vg\">
                                        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/linkedin_logo_small.png"), "html", null, true);
        echo "\" alt=\"logo LinkedIn\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card my-3 border-primary\" style=\"max-width: 520px;\">
                    <h5 class=\"card-header\">
                        Etienne Guignard
                    </h5>
                    <div class=\"row g-0\">
                        <div class=\"col-4\">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/EG.jpg"), "html", null, true);
        echo "\" id=\"imgEG\" alt=\"photo profile Etienne\">
                        </div>
                        <div class=\"col-8\">
                            <div class=\"card-body\">
                                
                                <p class=\"card-text\">Développeur Web en formation<br>WebForce3 Marseille</p>
                                <div class=\"card-socialLogos\">
                                    <a href=\"https://github.com/EtienneGuignard\">
                                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/gitLogo.png"), "html", null, true);
        echo "\" alt=\"Logo Github\">
                                    </a>
                                    <a href=\"https://www.linkedin.com/in/etienne-guignard-dev/\">
                                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/linkedin_logo_small.png"), "html", null, true);
        echo "\" alt=\"logo LinkedIn\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class=\"mt-5 text-center\">Selon une idée de : </h5> 
                <div class=\"card my-3 border-primary\" style=\"max-width: 520px;\">
                    <h5 class=\"card-header\">
                        Benjamin Coquet
                    </h5>
                    <div class=\"row g-0\">
                        <div class=\"col-4\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/pfp/pfp_benjamin.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"Profile Pic Benjamin\">
                        </div>
                        <div class=\"col-8\">
                            <div class=\"card-body\">
                                
                                <p class=\"card-text\">Chirurgien Viscéral <br> CH de Salon-de-Provence</p>
                                <div class=\"card-socialLogos\">
                                    <a href=\"https://www.linkedin.com/in/benjamin-coquet-32498994/\">
                                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/linkedin_logo_small.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-5 text-center\">
                    <h5> Sous le chaperonnage bienveillant de : </h5> 
                        <p>Gérard Kassapian (Formateur, WebForce3 Marseille)</p>
                </div>
                <div class=\"mt-5 text-center\">
                    <h5> Et avec les conseils de : </h5> 
                        <p>Carole Bonnet (Infirmière Anesthésiste, CH de Salon-de-Provence)<br>
                        Joëlle Devaux (Directrice, WebForce3 Marseille)</p>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "informations/credits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 80,  156 => 72,  139 => 58,  133 => 55,  122 => 47,  105 => 33,  99 => 30,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


    <div class=\"row justify-content-center\">
        <div class=\"col-auto\">
            <div class=\"pageTitle\">
                Crédits
            </div>
        </div>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-auto \">
            <h5 class=\"my-3 text-center\">Ce site a été développé par : </h5>
                <div class=\"card my-3 border-primary\" style=\"max-width: 520px;\">
                    <h5 class=\"card-header\">
                        Benoit Baudrin
                    </h5>
                    <div class=\"row g-0\">
                        <div class=\"col-4\">
                            <img src=\"{{ asset('../assets/img/pfp/pfp_benoit.jpg') }}\" class=\"img-fluid rounded-start\" alt=\"Profile Pic Benoit\">
                        </div>
                        <div class=\"col-8\">
                            <div class=\"card-body\">
                                
                                <p class=\"card-text\">Développeur Web en formation <br> WebForce3 Marseille</p>
                                <div class=\"card-socialLogos\">
                                    <a href=\"https://github.com/benoitBvg\">
                                        <img src=\"{{ asset('../assets/img/gitLogo.png') }}\" alt=\"Logo Github\">
                                    </a>
                                    <a href=\"https://www.linkedin.com/in/benoit-baudrin-vg\">
                                        <img src=\"{{ asset('../assets/img/linkedin_logo_small.png') }}\" alt=\"logo LinkedIn\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card my-3 border-primary\" style=\"max-width: 520px;\">
                    <h5 class=\"card-header\">
                        Etienne Guignard
                    </h5>
                    <div class=\"row g-0\">
                        <div class=\"col-4\">
                            <img src=\"{{ asset('../assets/img/EG.jpg') }}\" id=\"imgEG\" alt=\"photo profile Etienne\">
                        </div>
                        <div class=\"col-8\">
                            <div class=\"card-body\">
                                
                                <p class=\"card-text\">Développeur Web en formation<br>WebForce3 Marseille</p>
                                <div class=\"card-socialLogos\">
                                    <a href=\"https://github.com/EtienneGuignard\">
                                        <img src=\"{{ asset('../assets/img/gitLogo.png')}}\" alt=\"Logo Github\">
                                    </a>
                                    <a href=\"https://www.linkedin.com/in/etienne-guignard-dev/\">
                                        <img src=\"{{ asset('../assets/img/linkedin_logo_small.png') }}\" alt=\"logo LinkedIn\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class=\"mt-5 text-center\">Selon une idée de : </h5> 
                <div class=\"card my-3 border-primary\" style=\"max-width: 520px;\">
                    <h5 class=\"card-header\">
                        Benjamin Coquet
                    </h5>
                    <div class=\"row g-0\">
                        <div class=\"col-4\">
                            <img src=\"{{ asset('../assets/img/pfp/pfp_benjamin.jpg') }}\" class=\"img-fluid rounded-start\" alt=\"Profile Pic Benjamin\">
                        </div>
                        <div class=\"col-8\">
                            <div class=\"card-body\">
                                
                                <p class=\"card-text\">Chirurgien Viscéral <br> CH de Salon-de-Provence</p>
                                <div class=\"card-socialLogos\">
                                    <a href=\"https://www.linkedin.com/in/benjamin-coquet-32498994/\">
                                        <img src=\"{{ asset('../assets/img/linkedin_logo_small.png') }}\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-5 text-center\">
                    <h5> Sous le chaperonnage bienveillant de : </h5> 
                        <p>Gérard Kassapian (Formateur, WebForce3 Marseille)</p>
                </div>
                <div class=\"mt-5 text-center\">
                    <h5> Et avec les conseils de : </h5> 
                        <p>Carole Bonnet (Infirmière Anesthésiste, CH de Salon-de-Provence)<br>
                        Joëlle Devaux (Directrice, WebForce3 Marseille)</p>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "informations/credits.html.twig", "A:\\git\\Projet-AO\\templates\\informations\\credits.html.twig");
    }
}
