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

/* appointment/index.html.twig */
class __TwigTemplate_becd331dcf9d8bf3945c4faa208fb25c04df560eaf5692291586436e0a5fc8b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/index.html.twig", 1);
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

        echo "Apointment";
        
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
        echo "
\t<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/slide-1.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#appointment\" class=\"btn-get-started scrollto\">Prendre Rendez-vous</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ======= Rendez-vous Section ======= -->
\t<section id=\"appointment\" class=\"appointment section-bg\">
\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>PRENDRE RENDEZ-VOUS</h2>
\t\t\t\t<p>Vous pouvez dès maintenant prendre rendez-vous directement en ligne, avec un professionnel de santé 24h/24 et 7j/7, en seulement quelques clics !</p>
\t\t\t</div>

\t\t\t<form  method=\"POST\" role=\"form\" class=\"php-email-form\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Nom\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"datetime\" class=\"form-control\" name=\"dat\" id=\"dat\" placeholder=\"Date de naissance\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\" Numéro de Téléphone\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adresse\" placeholder=\" Adresse\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3\">
\t\t\t\t\t\t<input type=\"date\" name=\"dateR\" id=\"dateR\" class=\"form-control\" placeholder=\"Date rendez-vous\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3\">
\t\t\t\t\t\t<select name=\"department\" id=\"department\" class=\"form-select\">
\t\t\t\t\t\t\t<option value=\"\">Type Examen</option>
\t\t\t\t\t\t\t<option value=\"Department 1\">Radio</option>
\t\t\t\t\t\t\t<option value=\"Department 2\">IRM</option>
\t\t\t\t\t\t\t<option value=\"Department 3\">Scaner</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3\">
\t\t\t\t\t\t<select name=\"doctor\" id=\"doctor\" class=\"form-select\">
\t\t\t\t\t\t\t<option value=\"\">Examen</option>
\t\t\t\t\t\t\t<option value=\"Doctor 1\">Pr Ababacar Mbengue</option>
\t\t\t\t\t\t\t<option value=\"Doctor 2\">Pr Ndoye Diop</option>
\t\t\t\t\t\t\t<option value=\"Doctor 3\">Pr Dioni Diop</option>
\t\t\t\t\t\t\t<option value=\"Doctor 4\">Dr Diakhaté</option>
\t\t\t\t\t\t\t<option value=\"Doctor 5\">Dr Ndiaye</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message (Optional)\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t<div class=\"loading\">Loading</div>
\t\t\t\t\t<div class=\"error-message\"></div>
\t\t\t\t\t<div class=\"sent-message\">Your appointment request has been sent successfully. Thank you!</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<button type=\"submit\">PRENDRE RENDEZ-VOUS</button>
\t\t\t\t</div>
\t\t\t</form>

\t\t</div>
\t</section>
\t<!-- Fin Rendez-vous Section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appointment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Apointment{% endblock %}

{% block body %}

\t<section id=\"hero\">
\t\t<div id=\"heroCarousel\" data-bs-interval=\"5000\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\" id=\"hero-carousel-indicators\"></ol>

\t\t\t<div
\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">

\t\t\t\t<!-- Slide 1 -->
\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url(assets/img/slide/slide-1.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#appointment\" class=\"btn-get-started scrollto\">Prendre Rendez-vous</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ======= Rendez-vous Section ======= -->
\t<section id=\"appointment\" class=\"appointment section-bg\">
\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>PRENDRE RENDEZ-VOUS</h2>
\t\t\t\t<p>Vous pouvez dès maintenant prendre rendez-vous directement en ligne, avec un professionnel de santé 24h/24 et 7j/7, en seulement quelques clics !</p>
\t\t\t</div>

\t\t\t<form  method=\"POST\" role=\"form\" class=\"php-email-form\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Nom\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"datetime\" class=\"form-control\" name=\"dat\" id=\"dat\" placeholder=\"Date de naissance\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\" Numéro de Téléphone\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adresse\" placeholder=\" Adresse\" required>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3\">
\t\t\t\t\t\t<input type=\"date\" name=\"dateR\" id=\"dateR\" class=\"form-control\" placeholder=\"Date rendez-vous\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3\">
\t\t\t\t\t\t<select name=\"department\" id=\"department\" class=\"form-select\">
\t\t\t\t\t\t\t<option value=\"\">Type Examen</option>
\t\t\t\t\t\t\t<option value=\"Department 1\">Radio</option>
\t\t\t\t\t\t\t<option value=\"Department 2\">IRM</option>
\t\t\t\t\t\t\t<option value=\"Department 3\">Scaner</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 form-group mt-3\">
\t\t\t\t\t\t<select name=\"doctor\" id=\"doctor\" class=\"form-select\">
\t\t\t\t\t\t\t<option value=\"\">Examen</option>
\t\t\t\t\t\t\t<option value=\"Doctor 1\">Pr Ababacar Mbengue</option>
\t\t\t\t\t\t\t<option value=\"Doctor 2\">Pr Ndoye Diop</option>
\t\t\t\t\t\t\t<option value=\"Doctor 3\">Pr Dioni Diop</option>
\t\t\t\t\t\t\t<option value=\"Doctor 4\">Dr Diakhaté</option>
\t\t\t\t\t\t\t<option value=\"Doctor 5\">Dr Ndiaye</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message (Optional)\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t<div class=\"loading\">Loading</div>
\t\t\t\t\t<div class=\"error-message\"></div>
\t\t\t\t\t<div class=\"sent-message\">Your appointment request has been sent successfully. Thank you!</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<button type=\"submit\">PRENDRE RENDEZ-VOUS</button>
\t\t\t\t</div>
\t\t\t</form>

\t\t</div>
\t</section>
\t<!-- Fin Rendez-vous Section -->
{% endblock %}
", "appointment/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/medis/templates/appointment/index.html.twig");
    }
}
