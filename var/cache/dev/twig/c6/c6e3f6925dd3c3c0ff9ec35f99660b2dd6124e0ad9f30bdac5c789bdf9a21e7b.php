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

/* informations/aboutus.html.twig */
class __TwigTemplate_d74d51036a89b71600374bcc10271e8c7219552bdc88c198c3aa7140fd5cf596 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/aboutus.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/aboutus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "informations/aboutus.html.twig", 1);
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
        <div class=\"col-md-8\">
            <div class=\"pageTitle\">
                Qui sommes-nous?
            </div>
            <h5>PRINCIPE DU SITE : </h5>
            <p>Notre but : mettre en relation les chirurgiens (lib??raux, exer??ant en clinique) avec les aides op??ratoires (IBODE et IDE).
                Les chirurgiens ayant besoin de peronnel peuvent, en quelques clics, avoir acc??s aux coordonn??es des aides op??ratoires disponibles et proches de chez eux.<br>
                Les IBODE et IDE peuvent, eux, indiquer leurs coordonn??es et leurs disponibilit??s et ainsi rendre leur profil consultables par les chirurgiens.</p>
                Notre site ne fait \"que\" centraliser les coordonn??es, disponibilit??s des usagers.<br> 
                Il ne g??re ni les communications entre usagers, ni le r??glement de toute contrepartie financi??re.</p> 
            
            
            <h5>PARTAGE DES DONNEES :</h5>
            <p>Nous NE COMMUNIQUERONS JAMAIS VOS DONNEES ?? des tiers.</p>
            <p>Lors de votre enregistrement, nous v??rifions juste que vous ??tes bien porteur de votre CPS/CPF. Ceci est tout simplement afin de d??courager les cr??ations de compte frauduleux ou intempestifs. Nous comparons vos informations avec des extractions publiques fournies par annuaire.sante.fr. 
                Nous n'avons pas acc??s ?? votre mot de passe, celui-ci est encrypt?? d??s votre enregistrement.</p>
            <h5>ET L'ARGENT DANS TOUT CA?</h5>
            <p>Ce site est enti??rerement gratuit et b??n??vole.</p>
            <p> Il n'est pas et ne sera jamais mon??tis?? au moyen d'annonces publicitaires.</p> 
                Ce site a ??t?? cr???? comme projet de fin d'??tudes par deux ??tudiants d??veloppeurs web <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("credits");
        echo "\">(voir cr??dits)</a> dont le seul but est de valider leur dipl??me. 
                Si, en plus, ce site peut rendre service ?? certains, on en sera d'autant plus ravis.
                D'autant plus que facturer l'utilisation de ce site freinerait grandement son adoption, et ??a ??a nous plait pas.
                N??anmoins, si vous tenez ?? nous remercier et nous encourager, n'h??sitez pas ?? contribuer aux frais d'h??bergement en nous faisant un don!!! Toute aide sera grandement appr??ci??e...</p>
            <div class=\"text-center\">
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donate");
        echo "\"><button class=\"btn btn-primary mb-3\">Faire un don</button></a>
            </div>
            <h5>J'AI TOUT LU MAIS JE ME POSE ENCORE DES QUESTIONS / J'AI UNE REMARQUE OU UNE SUGGESTION A FAIRE / J'AI UN BUG A SIGNALER :</h5>
            <p>N'h??sitez pas ?? <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">nous contacter!</a></p>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "informations/aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  99 => 30,  91 => 25,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"pageTitle\">
                Qui sommes-nous?
            </div>
            <h5>PRINCIPE DU SITE : </h5>
            <p>Notre but : mettre en relation les chirurgiens (lib??raux, exer??ant en clinique) avec les aides op??ratoires (IBODE et IDE).
                Les chirurgiens ayant besoin de peronnel peuvent, en quelques clics, avoir acc??s aux coordonn??es des aides op??ratoires disponibles et proches de chez eux.<br>
                Les IBODE et IDE peuvent, eux, indiquer leurs coordonn??es et leurs disponibilit??s et ainsi rendre leur profil consultables par les chirurgiens.</p>
                Notre site ne fait \"que\" centraliser les coordonn??es, disponibilit??s des usagers.<br> 
                Il ne g??re ni les communications entre usagers, ni le r??glement de toute contrepartie financi??re.</p> 
            
            
            <h5>PARTAGE DES DONNEES :</h5>
            <p>Nous NE COMMUNIQUERONS JAMAIS VOS DONNEES ?? des tiers.</p>
            <p>Lors de votre enregistrement, nous v??rifions juste que vous ??tes bien porteur de votre CPS/CPF. Ceci est tout simplement afin de d??courager les cr??ations de compte frauduleux ou intempestifs. Nous comparons vos informations avec des extractions publiques fournies par annuaire.sante.fr. 
                Nous n'avons pas acc??s ?? votre mot de passe, celui-ci est encrypt?? d??s votre enregistrement.</p>
            <h5>ET L'ARGENT DANS TOUT CA?</h5>
            <p>Ce site est enti??rerement gratuit et b??n??vole.</p>
            <p> Il n'est pas et ne sera jamais mon??tis?? au moyen d'annonces publicitaires.</p> 
                Ce site a ??t?? cr???? comme projet de fin d'??tudes par deux ??tudiants d??veloppeurs web <a href=\"{{ path('credits') }}\">(voir cr??dits)</a> dont le seul but est de valider leur dipl??me. 
                Si, en plus, ce site peut rendre service ?? certains, on en sera d'autant plus ravis.
                D'autant plus que facturer l'utilisation de ce site freinerait grandement son adoption, et ??a ??a nous plait pas.
                N??anmoins, si vous tenez ?? nous remercier et nous encourager, n'h??sitez pas ?? contribuer aux frais d'h??bergement en nous faisant un don!!! Toute aide sera grandement appr??ci??e...</p>
            <div class=\"text-center\">
                <a href=\"{{ path('donate') }}\"><button class=\"btn btn-primary mb-3\">Faire un don</button></a>
            </div>
            <h5>J'AI TOUT LU MAIS JE ME POSE ENCORE DES QUESTIONS / J'AI UNE REMARQUE OU UNE SUGGESTION A FAIRE / J'AI UN BUG A SIGNALER :</h5>
            <p>N'h??sitez pas ?? <a href=\"{{ path('contact')}}\">nous contacter!</a></p>
        </div>
    </div>

{% endblock %}
", "informations/aboutus.html.twig", "A:\\git\\Projet-AO\\templates\\informations\\aboutus.html.twig");
    }
}
