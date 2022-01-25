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

/* admin/index.html.twig */
class __TwigTemplate_50b2a6088c6d58147df28f8ba1d835488fb88855323e430fafc8009ad0bdce11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table class=\"table tableAdmin\">
        <thead>
            <th>id</th>
            ";
        // line 10
        echo "            <th>email</th>
            <th>roles</th>
            <th>nom</th>
            <th>prenom</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Numéro de téléphone</th>
            <th>editer</th>
            <th>supprimer</th>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                ";
            // line 26
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 27), ", "), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adress", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "zipCode", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "city", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phoneNumber", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">editer</a></td>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">supprimer</a></td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    <table class=\"table tableAdmin\">
        <thead>
            <th>id</th>
            <th>date de début</th>
            <th>date de fin</th>
            <th>distance maximum a parcourir</th>
            <th>id des utilisateurs</th>
            <th>noms des utilisateurs</th>
            <th>prenoms des utilisateurs</th>
            <th>emails des utilisateurs</th>
            <th>supprimer</th>
        </thead>
        <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availabilities"]) || array_key_exists("availabilities", $context) ? $context["availabilities"] : (function () { throw new RuntimeError('Variable "availabilities" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["availability"]) {
            // line 55
            echo "        
                <tr>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availability"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availability"], "startDate", [], "any", false, false, false, 58), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availability"], "endDate", [], "any", false, false, false, 59), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availability"], "commuteDistance", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["availability"], "users", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["availabilityUser"]) {
                // line 62
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availabilityUser"], "id", [], "any", false, false, false, 62), "html", null, true);
                echo ", 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availabilityUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "</td>
                    <td>";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["availability"], "users", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["availabilityUser"]) {
                // line 65
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availabilityUser"], "name", [], "any", false, false, false, 65), "html", null, true);
                echo ", 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availabilityUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "</td>
                    <td>";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["availability"], "users", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["availabilityUser"]) {
                // line 68
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availabilityUser"], "firstname", [], "any", false, false, false, 68), "html", null, true);
                echo ", 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availabilityUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "</td>
                    <td>";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["availability"], "users", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["availabilityUser"]) {
                // line 71
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["availabilityUser"], "email", [], "any", false, false, false, 71), "html", null, true);
                echo ", 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availabilityUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "</td>
                    <td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_availability", ["id" => twig_get_attribute($this->env, $this->source, $context["availability"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">supprimer</a></td>
                </tr>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
    <table class=\"table tableAdmin\">
        <thead>
            <th>id</th>
            <th>date de début</th>
            <th >date de fin</th>
            <th >clinicZipCode</th>
            <th>id de l'utilisateur</th>
            <th>nom de l'utilisateur</th>
            <th>prenom de l'utilisateur</th>
            <th>utilisateur code postal</th>
            <th>Numéro de téléphone</th>
            <th>supprimer</th>
        </thead>
        <tbody>
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surgeries"]) || array_key_exists("surgeries", $context) ? $context["surgeries"] : (function () { throw new RuntimeError('Variable "surgeries" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["surgery"]) {
            // line 94
            echo "        
                <tr>
                    <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "startDate", [], "any", false, false, false, 97), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "enDate", [], "any", false, false, false, 98), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "clinicZipCode", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                    <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["surgery"], "fkIdUser", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["surgery"], "fkIdUser", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["surgery"], "fkIdUser", [], "any", false, false, false, 102), "firstname", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["surgery"], "fkIdUser", [], "any", false, false, false, 103), "zipCode", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["surgery"], "fkIdUser", [], "any", false, false, false, 104), "phoneNumber", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_surgery", ["id" => twig_get_attribute($this->env, $this->source, $context["surgery"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">supprimer</a></td>
                </tr>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surgery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 109,  342 => 105,  338 => 104,  334 => 103,  330 => 102,  326 => 101,  322 => 100,  318 => 99,  314 => 98,  310 => 97,  306 => 96,  302 => 94,  298 => 93,  280 => 77,  270 => 73,  267 => 72,  258 => 71,  254 => 70,  251 => 69,  242 => 68,  238 => 67,  235 => 66,  226 => 65,  222 => 64,  219 => 63,  210 => 62,  206 => 61,  202 => 60,  198 => 59,  194 => 58,  190 => 57,  186 => 55,  182 => 54,  165 => 39,  155 => 35,  151 => 34,  147 => 33,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  127 => 28,  123 => 27,  118 => 26,  114 => 24,  111 => 23,  107 => 22,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
    <table class=\"table tableAdmin\">
        <thead>
            <th>id</th>
            {# <th>Spécialité chirugical id</th> #}
            <th>email</th>
            <th>roles</th>
            <th>nom</th>
            <th>prenom</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Numéro de téléphone</th>
            <th>editer</th>
            <th>supprimer</th>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{user.id}}</td>
                {# <td>{{user.surgicalSpeciality.name}}</td> #}
                <td>{{user.email}}</td>
                <td>{{user.roles | join(', ')}}</td>
                <td>{{user.name}}</td>
                <td>{{user.firstname}}</td>
                <td>{{user.adress}}</td>
                <td>{{user.zipCode}}</td>
                <td>{{user.city}}</td>
                <td>{{user.phoneNumber}}</td>
                <td><a href=\"{{path('admin_edit_user',  { 'id': user.id })}}\">editer</a></td>
                <td><a href=\"{{path('admin_delete_user',  { 'id': user.id })}}\">supprimer</a></td>
                
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <table class=\"table tableAdmin\">
        <thead>
            <th>id</th>
            <th>date de début</th>
            <th>date de fin</th>
            <th>distance maximum a parcourir</th>
            <th>id des utilisateurs</th>
            <th>noms des utilisateurs</th>
            <th>prenoms des utilisateurs</th>
            <th>emails des utilisateurs</th>
            <th>supprimer</th>
        </thead>
        <tbody>
        {% for availability in availabilities %}
        
                <tr>
                    <td>{{availability.id}}</td>
                    <td>{{availability.startDate | date('d-m-Y')}}</td>
                    <td>{{availability.endDate | date('d-m-Y')}}</td>
                    <td>{{availability.commuteDistance}}</td>
                    <td>{% for availabilityUser in availability.users  %}
                    {{availabilityUser.id}}, 
                    {% endfor %}</td>
                    <td>{% for availabilityUser in availability.users  %}
                    {{availabilityUser.name}}, 
                    {% endfor %}</td>
                    <td>{% for availabilityUser in availability.users  %}
                    {{availabilityUser.firstname}}, 
                    {% endfor %}</td>
                    <td>{% for availabilityUser in availability.users  %}
                    {{availabilityUser.email}}, 
                    {% endfor %}</td>
                    <td><a href=\"{{path('admin_delete_availability',  { 'id': availability.id })}}\">supprimer</a></td>
                </tr>
            
        {% endfor %}
        </tbody>
    </table>
    <table class=\"table tableAdmin\">
        <thead>
            <th>id</th>
            <th>date de début</th>
            <th >date de fin</th>
            <th >clinicZipCode</th>
            <th>id de l'utilisateur</th>
            <th>nom de l'utilisateur</th>
            <th>prenom de l'utilisateur</th>
            <th>utilisateur code postal</th>
            <th>Numéro de téléphone</th>
            <th>supprimer</th>
        </thead>
        <tbody>
        {% for surgery in surgeries %}
        
                <tr>
                    <td>{{surgery.id}}</td>
                    <td>{{surgery.startDate | date('d-m-Y')}}</td>
                    <td>{{surgery.enDate | date('d-m-Y')}}</td>
                    <td>{{surgery.clinicZipCode}}</td>
                    <td>{{surgery.fkIdUser.id}}</td>
                    <td>{{surgery.fkIdUser.name}}</td>
                    <td>{{surgery.fkIdUser.firstname}}</td>
                    <td>{{surgery.fkIdUser.zipCode}}</td>
                    <td>{{surgery.fkIdUser.phoneNumber}}</td>
                    <td><a href=\"{{path('admin_delete_surgery',  { 'id': surgery.id })}}\">supprimer</a></td>
                </tr>
            
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/index.html.twig", "A:\\git\\Projet-AO\\templates\\admin\\index.html.twig");
    }
}
