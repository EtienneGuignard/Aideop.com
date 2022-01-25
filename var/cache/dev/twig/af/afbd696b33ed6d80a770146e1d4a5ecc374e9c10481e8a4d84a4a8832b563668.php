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

/* form_theme.html.twig */
class __TwigTemplate_7938444ffa77cd0cb0c112a8b14adda8e8afc7367892d07c291f6c687b9f4251 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'show_hide_password_row' => [$this, 'block_show_hide_password_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "bootstrap_4_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_theme.html.twig"));

        $this->parent = $this->loadTemplate("bootstrap_4_layout.html.twig", "form_theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_show_hide_password_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_hide_password_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_hide_password_row"));

        // line 4
        echo "<!-- Theme for showHidePassword -->
    <style>
        .showHiddenPassword-wrapper {
            position: relative;
        }
        .showHiddenPassword-wrapper .is-invalid {
            background-image: none!important;
            background-size: 0!important;
        }
        .showHiddenPassword-toggle {
            position: absolute;
            top: 50%;
            right: 1.5em;
            transform: translateY(-50%);
        }
    </style>

    <script>
        function __togglePassword__";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "() {
            const _passwordField = document.querySelector('#";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "');
            const _showHideToggle = document.querySelector('#showHideToggle-";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "');
            if (_showHideToggle.classList.contains('fa-eye-slash')) {
                _showHideToggle.classList.remove('fa-eye-slash')
                _showHideToggle.classList.add('fa-eye')
                _passwordField.type = 'text'
            } else {
                _showHideToggle.classList.remove('fa-eye')
                _showHideToggle.classList.add('fa-eye-slash')
                _passwordField.type = 'password'
            }
        }
    </script>";
        // line 37
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 37, $this->source); })()))) {
            // line 38
            $context["element"] = "fieldset";
        }
        // line 40
        $context["widget_attr"] = [];
        // line 41
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 41, $this->source); })()))) {
            // line 42
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })()) . "_help"), "class" => "showHiddenPassword-widget"]];
        }
        // line 44
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 44, $this->source); })()), "div")) : ("div")), "html", null, true);
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 44, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 44), "")) : ("")) . " form-group"))])];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 44, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'label');
        // line 48
        echo "<div class='showHiddenPassword-wrapper'>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 49, $this->source); })()));
        // line 50
        echo "<span class='showHiddenPassword-toggle'
              onclick='__togglePassword__";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "()'
        >
            <i id='showHideToggle-";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
        echo "' class=\"fa fa-eye-slash\"></i>
        </span>
    </div>";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'help');
        // line 58
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 58, $this->source); })()), "div")) : ("div")), "html", null, true);
        echo ">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  154 => 57,  149 => 53,  144 => 51,  141 => 50,  139 => 49,  137 => 48,  135 => 45,  122 => 44,  119 => 42,  117 => 41,  115 => 40,  112 => 38,  110 => 37,  96 => 24,  92 => 23,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'bootstrap_4_layout.html.twig' %}

{% block show_hide_password_row %}
<!-- Theme for showHidePassword -->
    <style>
        .showHiddenPassword-wrapper {
            position: relative;
        }
        .showHiddenPassword-wrapper .is-invalid {
            background-image: none!important;
            background-size: 0!important;
        }
        .showHiddenPassword-toggle {
            position: absolute;
            top: 50%;
            right: 1.5em;
            transform: translateY(-50%);
        }
    </style>

    <script>
        function __togglePassword__{{ form.vars.id }}() {
            const _passwordField = document.querySelector('#{{ form.vars.id }}');
            const _showHideToggle = document.querySelector('#showHideToggle-{{ form.vars.id }}');
            if (_showHideToggle.classList.contains('fa-eye-slash')) {
                _showHideToggle.classList.remove('fa-eye-slash')
                _showHideToggle.classList.add('fa-eye')
                _passwordField.type = 'text'
            } else {
                _showHideToggle.classList.remove('fa-eye')
                _showHideToggle.classList.add('fa-eye-slash')
                _passwordField.type = 'password'
            }
        }
    </script>

    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    {%- set widget_attr = {} -%}
    {%- if help is not empty -%}
        {%- set widget_attr = {attr: {'aria-describedby': id ~\"_help\", 'class': 'showHiddenPassword-widget'}} -%}
    {%- endif -%}
    <{{ element|default('div') }}{% with {attr: row_attr|merge({class: (row_attr.class|default('') ~ ' form-group')|trim})} %}{{ block('attributes') }}{% endwith %}>
    {{- form_label(form) -}}


    <div class='showHiddenPassword-wrapper'>
        {{- form_widget(form, widget_attr) -}}
        <span class='showHiddenPassword-toggle'
              onclick='__togglePassword__{{ form.vars.id }}()'
        >
            <i id='showHideToggle-{{ form.vars.id }}' class=\"fa fa-eye-slash\"></i>
        </span>
    </div>

    {{- form_help(form) -}}
    </{{ element|default('div') }}>
{% endblock %}", "form_theme.html.twig", "A:\\git\\Projet-AO\\templates\\form_theme.html.twig");
    }
}
