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

/* home/index.html.twig */
class __TwigTemplate_c54b70baf1520035fbecc38056c941d191348ad43b2f34f610226dab059f6140 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "registrationSuccess"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "    <div class=\"alert alert-success registrationSuccess\">
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
        echo "    <div class=\"d-flex justify-content-center\" style=\"height:fit-content;\">
        <div class=\"row justify-content-center bannerImage\" style=\"background-image: url(' ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/undraw_doctors.png"), "html", null, true);
        echo " ');
        height: 100vh\">
        <div class=\"row justify-content-center\">
            <div class=\"homeIntro col-md-auto mt-4\">
                <h2 class=\"display-2 logo\"><span class=\"text-primary\">aide</span><span class=\"text-secondary\">op</span>.com</h2> 
                <p>Mise en relation des Chirurgiens et Aides Opératoires (IBODE et IDE)</p>
            </div>
        </div>
    ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "        <p class=\"error\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</p>
    ";
        }
        // line 21
        echo "        <div class=\"row row-flex justify-content-center align-self-end\">
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "        <div class=\"col-md-5 mb-3\">
            ";
            // line 24
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SURGEON")) {
                // line 25
                echo "                ";
                $this->loadTemplate("form/searchAO.html.twig", "home/index.html.twig", 25)->display($context);
                // line 26
                echo "            </div>
            <div class=\"col-md-5 mb-3\">
                ";
                // line 28
                $this->loadTemplate("form/searchUser.html.twig", "home/index.html.twig", 28)->display($context);
                // line 29
                echo "            </div>  
                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_NURSE")) {
                // line 31
                echo "                    ";
                $this->loadTemplate("form/searchSurgery.html.twig", "home/index.html.twig", 31)->display($context);
                echo " 
                    </div>
                    <div class=\"col-md-5 mb-3\">
                    ";
                // line 34
                $this->loadTemplate("form/searchUser.html.twig", "home/index.html.twig", 34)->display($context);
                // line 35
                echo "                    </div>  
            ";
            }
            // line 37
            echo "        ";
        } else {
            // line 38
            echo "                ";
            $this->loadTemplate("form/login.html.twig", "home/index.html.twig", 38)->display($context);
            echo " 
                ";
            // line 39
            $this->loadTemplate("home/homeCards.php", "home/index.html.twig", 39)->display($context);
            // line 40
            echo "                </div>
        ";
        }
        // line 42
        echo "            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  153 => 40,  151 => 39,  146 => 38,  143 => 37,  139 => 35,  137 => 34,  130 => 31,  126 => 29,  124 => 28,  120 => 26,  117 => 25,  115 => 24,  112 => 23,  110 => 22,  107 => 21,  101 => 19,  99 => 18,  88 => 10,  85 => 9,  76 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for message in app.flashes('registrationSuccess') %}
    <div class=\"alert alert-success registrationSuccess\">
        {{ message }}
    </div>
    {% endfor %}
    <div class=\"d-flex justify-content-center\" style=\"height:fit-content;\">
        <div class=\"row justify-content-center bannerImage\" style=\"background-image: url(' {{ asset(\"../assets/img/undraw_doctors.png\") }} ');
        height: 100vh\">
        <div class=\"row justify-content-center\">
            <div class=\"homeIntro col-md-auto mt-4\">
                <h2 class=\"display-2 logo\"><span class=\"text-primary\">aide</span><span class=\"text-secondary\">op</span>.com</h2> 
                <p>Mise en relation des Chirurgiens et Aides Opératoires (IBODE et IDE)</p>
            </div>
        </div>
    {% if error %}
        <p class=\"error\"> {{error.messageKey | trans(error.messageData, 'security') }}</p>
    {% endif %}
        <div class=\"row row-flex justify-content-center align-self-end\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <div class=\"col-md-5 mb-3\">
            {% if is_granted(\"ROLE_SURGEON\") %}
                {% include \"form/searchAO.html.twig\" %}
            </div>
            <div class=\"col-md-5 mb-3\">
                {% include \"form/searchUser.html.twig\" %}
            </div>  
                {% elseif is_granted(\"ROLE_NURSE\") %}
                    {% include \"form/searchSurgery.html.twig\" %} 
                    </div>
                    <div class=\"col-md-5 mb-3\">
                    {% include \"form/searchUser.html.twig\" %}
                    </div>  
            {% endif %}
        {% else %}
                {% include \"form/login.html.twig\" %} 
                {% include \"home/homeCards.php\" %}
                </div>
        {% endif %}
            </div>
        </div>
    </div>
</div>

{% endblock %}", "home/index.html.twig", "A:\\git\\Projet-AO\\templates\\home\\index.html.twig");
    }
}
