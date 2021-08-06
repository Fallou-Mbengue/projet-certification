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
class __TwigTemplate_f3139bce62933a01bc73b851a25ad1124a148a8f18c0a5666764faa8d91ac6d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Projet
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<!-- ======= Hero Section ======= -->
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
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Lire la suite</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 2 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-2.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDISs</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Lire la suite</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 3 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-3.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Lire la suite</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<main
\t\tid=\"main\">

\t\t<!-- ======= Featured Services Section ======= -->
\t\t<section id=\"featured-services\" class=\"featured-services\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-heartbeat\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Radiographie</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">
\t\t\t\t\t\t\t\tTechnique d'imagerie de transmission, par rayons X dans le cadre de la radiographie X.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pills\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Mammographie</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">Modalité de l'image médicale mettant en œuvre la radiographie des seins.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-thermometer\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Scanner</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">Appareil d'imagerie médicale qui utilise des rayons X.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-dna\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Radiologie Interventionnelle</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">Spécialité de la radiologie. Elle désigne l'ensemble des actes médicaux réalisés par des radiologues.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Featured Services Section -->

\t\t<!-- ======= Cta Section ======= -->
\t\t<section id=\"cta\" class=\"cta\">
\t\t\t<div class=\"container\" data-aos=\"zoom-in\">

\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h3>Bienvenue au Centre D'imagerie Médical CIDIS</h3>
\t\t\t\t\t<p></p>
\t\t\t\t\t<a class=\"cta-btn scrollto\" href=\"/appointment\">PRENDRE RENDEZ-VOUS</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Cta Section -->

\t\t<!-- ======= About Us Section ======= -->
\t\t<section id=\"about\" class=\"about\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>À PROPOS DE NOUS</h2>
\t\t\t\t\t<h4>Cidis est un centre d’imagerie médical avec des médecins spécialistes renommés dans le domaine.</h4>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\" data-aos=\"fade-right\">
\t\t\t\t\t\t<img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
\t\t\t\t\t\t<h3>Des techniciens compétents et expérimentés dans le domaine</h3>
\t\t\t\t\t\t<p class=\"fst-italic\">
\t\t\t\t\t\t\tPour une meilleur traitement et de prise en charge des nos patients.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t<strong style=\"color: red;\">Urgence 24h/24.</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t<strong style=\"color: red;\">
\t\t\t\t\t\t\t\t\tInterprétation et disponibilité des résultats</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t<strong style=\"color: red;\">Facilité la prise en charge personnalisée</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tNos services offrent tous les moyens existants en termes de dépistage et de diagnostic médical complet. 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              CIDIS associe des équipements de dernière technologie au savoir-faire pluridisciplinaire des équipes, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              autour de trois exigences fortes : Qualité médicale, sécurité et confort du patient et Facilité de prise en charge personnalisée.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End About Us Section -->

\t\t<!-- ======= Counts Section ======= -->
\t\t<section id=\"counts\" class=\"counts\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"row no-gutters\">

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"fas fa-user-md\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"05\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Médecins</strong>
\t\t\t\t\t\t\t\tspécialistes radiologues</p>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tEn savoir plus &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"far fa-hospital\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"06\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Services</strong>
\t\t\t\t\t\t\t\tde diagnostique et dintervention</p>
\t\t\t\t\t\t\t<a href=\"#\">Find out more &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"fas fa-flask\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"14\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Research Lab</strong>
\t\t\t\t\t\t\t\taut commodi quaerat. Aliquam ratione</p>
\t\t\t\t\t\t\t<a href=\"#\">Find out more &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"fas fa-award\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"150\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Awards</strong>
\t\t\t\t\t\t\t\trerum asperiores dolor molestiae doloribu</p>
\t\t\t\t\t\t\t<a href=\"#\">Find out more &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Counts Section -->

\t\t<!-- ======= Features Section ======= -->
\t\t<section id=\"features\" class=\"features\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 order-2 order-lg-1\" data-aos=\"fade-right\">
\t\t\t\t\t\t<div class=\"icon-box mt-5 mt-lg-0\">
\t\t\t\t\t\t\t<i class=\"bx bx-receipt\"></i>
\t\t\t\t\t\t\t<h4>Imagerie</h4>
\t\t\t\t\t\t\t<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-box mt-5\">
\t\t\t\t\t\t\t<i class=\"bx bx-cube-alt\"></i>
\t\t\t\t\t\t\t<h4>Scanner</h4>
\t\t\t\t\t\t\t<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-box mt-5\">
\t\t\t\t\t\t\t<i class=\"bx bx-images\"></i>
\t\t\t\t\t\t\t<h4>IRM</h4>
\t\t\t\t\t\t\t<p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-box mt-5\">
\t\t\t\t\t\t\t<i class=\"bx bx-shield\"></i>
\t\t\t\t\t\t\t<h4>Radiologie</h4>
\t\t\t\t\t\t\t<p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"image col-lg-6 order-1 order-lg-2\" style='background-image: url(\"assets/img/gallery/gallery-7.jpg\");' data-aos=\"zoom-in\"></div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Features Section -->

\t\t<!-- ======= Services Section ======= -->
\t\t<section id=\"services\" class=\"services services\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Services</h2>
\t\t\t\t\t<p></p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-heartbeat\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Radiographie</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">
\t\t\t\t\t\t\tLa radiographie est une technique d'imagerie de transmission, par rayons X dans le cadre de la radiographie X, ou par rayons gamma en gammagraphie.Enregistrement photographique de la structure d'un corps traversé par des rayons X.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-pills\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Mommographie</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">La mammographie est une modalité de l'image médicale mettant en œuvre la radiographie des seins. Elle permet d'obtenir des images des tissus intérieur et ainsi de détecter d’éventuelles anomalies, notamment des nodules, qui peuvent être signes d'un cancer du sein.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-hospital-user\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Echographie Doppler</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">L'échographie Doppler est un examen médical échographique en deux dimensions non invasif qui permet d'explorer les flux sanguins intracardiaques et intravasculaires.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-dna\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Panoramique Dentaire</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Un orthopantomogramme, abrégé par les sigles OPT ou OPG, est une radiographie panoramique de toute la denture. À ce titre, cet examen est plus souvent appelé « panoramique dentaire ». Il consiste en une mise à plat de l'arc dentaire, d'une oreille à une autre</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-wheelchair\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Scanner</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Un scanner est un appareil d'imagerie médicale qui utilise des rayons X. L'examen réalisé s'appelle par analogie un scanner ou un examen tomodensitométrique (TDM). Le scanner permet de réaliser l'ensemble des examens traditionnels pour ce type d'appareil.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-notes-medical\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Radiologie Interventionnelle</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">La radiologie interventionnelle est une spécialité de la radiologie. Elle désigne l'ensemble des actes médicaux réalisés par des radiologues et sous contrôle radiologique, permettant le traitement ou le diagnostic invasif de nombreuses pathologies.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Services Section -->

\t\t<!-- ======= Contact Section ======= -->
\t\t<section id=\"contact\" class=\"contact\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t<p>Pour tous informatons complémentaire veuillez nous contacter aux adresses suivants.</p>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div>
\t\t\t\t<iframe style=\"border:0; width: 100%; height: 350px;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5965661644254!2d-17.464961985961526!3d14.678821879092169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17263dc18beed%3A0x3a7d82bd7eaae8ae!2sCIDIS!5e0!3m2!1sfr!2ssn!4v1622844126485!5m2!1sfr!2ssn\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t</div>

\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row mt-5\">

\t\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-map\"></i>
\t\t\t\t\t\t\t\t\t<h3>Notre adresse</h3>
\t\t\t\t\t\t\t\t\t<p>FANN HOCK</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"info-box mt-4\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-envelope\"></i>
\t\t\t\t\t\t\t\t\t<h3>Envoyez-nous un email</h3>
\t\t\t\t\t\t\t\t\t<p>cidisarl@yahoo.fr<br>cidisarl@yahoo.fr</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"info-box mt-4\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-phone-call\"></i>
\t\t\t\t\t\t\t\t\t<h3>Appelez-nous</h3>
\t\t\t\t\t\t\t\t\t<p>+221 33 821 21 50<br>+221 77 877 95 55</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Votre Nom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col form-group mt-3\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Votre Email\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Object\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t\t\t\t<div class=\"loading\">Loading</div>
\t\t\t\t\t\t\t\t<div class=\"error-message\"></div>
\t\t\t\t\t\t\t\t<div class=\"sent-message\">Your message has been sent. Thank you!</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<button type=\"submit\">Envoyer Message</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Contact Section -->
\t</main>
\t<!-- End #main -->


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
        return array (  230 => 146,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Projet
{% endblock %}

{% block body %}

\t<!-- ======= Hero Section ======= -->
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
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Lire la suite</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 2 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-2.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDISs</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Lire la suite</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slide 3 -->
\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url(assets/img/slide/slide-3.jpg)\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<h1>CIDIS</h1>
\t\t\t\t\t\t<h3 style=\"color: black;\">Centre D'imagerie Diagnostique et Interventionnelle De Soumbedioune</h3>
\t\t\t\t\t\t<a href=\"#about\" class=\"btn-get-started scrollto\">Lire la suite</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<a class=\"carousel-control-prev\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t\t<a class=\"carousel-control-next\" href=\"#heroCarousel\" role=\"button\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t</a>

\t\t</div>
\t</section>
\t<!-- End Hero -->

\t<main
\t\tid=\"main\">

\t\t<!-- ======= Featured Services Section ======= -->
\t\t<section id=\"featured-services\" class=\"featured-services\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-heartbeat\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Radiographie</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">
\t\t\t\t\t\t\t\tTechnique d'imagerie de transmission, par rayons X dans le cadre de la radiographie X.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pills\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Mammographie</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">Modalité de l'image médicale mettant en œuvre la radiographie des seins.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-thermometer\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Scanner</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">Appareil d'imagerie médicale qui utilise des rayons X.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-dna\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"\">Radiologie Interventionnelle</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"description\">Spécialité de la radiologie. Elle désigne l'ensemble des actes médicaux réalisés par des radiologues.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Featured Services Section -->

\t\t<!-- ======= Cta Section ======= -->
\t\t<section id=\"cta\" class=\"cta\">
\t\t\t<div class=\"container\" data-aos=\"zoom-in\">

\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h3>Bienvenue au Centre D'imagerie Médical CIDIS</h3>
\t\t\t\t\t<p></p>
\t\t\t\t\t<a class=\"cta-btn scrollto\" href=\"/appointment\">PRENDRE RENDEZ-VOUS</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Cta Section -->

\t\t<!-- ======= About Us Section ======= -->
\t\t<section id=\"about\" class=\"about\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>À PROPOS DE NOUS</h2>
\t\t\t\t\t<h4>Cidis est un centre d’imagerie médical avec des médecins spécialistes renommés dans le domaine.</h4>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\" data-aos=\"fade-right\">
\t\t\t\t\t\t<img src=\"{{asset('assets/img/2.png')}}\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
\t\t\t\t\t\t<h3>Des techniciens compétents et expérimentés dans le domaine</h3>
\t\t\t\t\t\t<p class=\"fst-italic\">
\t\t\t\t\t\t\tPour une meilleur traitement et de prise en charge des nos patients.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t<strong style=\"color: red;\">Urgence 24h/24.</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t<strong style=\"color: red;\">
\t\t\t\t\t\t\t\t\tInterprétation et disponibilité des résultats</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t<strong style=\"color: red;\">Facilité la prise en charge personnalisée</strong>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tNos services offrent tous les moyens existants en termes de dépistage et de diagnostic médical complet. 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              CIDIS associe des équipements de dernière technologie au savoir-faire pluridisciplinaire des équipes, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              autour de trois exigences fortes : Qualité médicale, sécurité et confort du patient et Facilité de prise en charge personnalisée.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End About Us Section -->

\t\t<!-- ======= Counts Section ======= -->
\t\t<section id=\"counts\" class=\"counts\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"row no-gutters\">

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"fas fa-user-md\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"05\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Médecins</strong>
\t\t\t\t\t\t\t\tspécialistes radiologues</p>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tEn savoir plus &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"far fa-hospital\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"06\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Services</strong>
\t\t\t\t\t\t\t\tde diagnostique et dintervention</p>
\t\t\t\t\t\t\t<a href=\"#\">Find out more &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"fas fa-flask\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"14\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Research Lab</strong>
\t\t\t\t\t\t\t\taut commodi quaerat. Aliquam ratione</p>
\t\t\t\t\t\t\t<a href=\"#\">Find out more &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\">
\t\t\t\t\t\t<div class=\"count-box\">
\t\t\t\t\t\t\t<i class=\"fas fa-award\"></i>
\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"150\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Awards</strong>
\t\t\t\t\t\t\t\trerum asperiores dolor molestiae doloribu</p>
\t\t\t\t\t\t\t<a href=\"#\">Find out more &raquo;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Counts Section -->

\t\t<!-- ======= Features Section ======= -->
\t\t<section id=\"features\" class=\"features\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 order-2 order-lg-1\" data-aos=\"fade-right\">
\t\t\t\t\t\t<div class=\"icon-box mt-5 mt-lg-0\">
\t\t\t\t\t\t\t<i class=\"bx bx-receipt\"></i>
\t\t\t\t\t\t\t<h4>Imagerie</h4>
\t\t\t\t\t\t\t<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-box mt-5\">
\t\t\t\t\t\t\t<i class=\"bx bx-cube-alt\"></i>
\t\t\t\t\t\t\t<h4>Scanner</h4>
\t\t\t\t\t\t\t<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-box mt-5\">
\t\t\t\t\t\t\t<i class=\"bx bx-images\"></i>
\t\t\t\t\t\t\t<h4>IRM</h4>
\t\t\t\t\t\t\t<p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-box mt-5\">
\t\t\t\t\t\t\t<i class=\"bx bx-shield\"></i>
\t\t\t\t\t\t\t<h4>Radiologie</h4>
\t\t\t\t\t\t\t<p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"image col-lg-6 order-1 order-lg-2\" style='background-image: url(\"assets/img/gallery/gallery-7.jpg\");' data-aos=\"zoom-in\"></div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Features Section -->

\t\t<!-- ======= Services Section ======= -->
\t\t<section id=\"services\" class=\"services services\">
\t\t\t<div class=\"container\" data-aos=\"fade-up\">

\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Services</h2>
\t\t\t\t\t<p></p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-heartbeat\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Radiographie</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">
\t\t\t\t\t\t\tLa radiographie est une technique d'imagerie de transmission, par rayons X dans le cadre de la radiographie X, ou par rayons gamma en gammagraphie.Enregistrement photographique de la structure d'un corps traversé par des rayons X.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-pills\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Mommographie</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">La mammographie est une modalité de l'image médicale mettant en œuvre la radiographie des seins. Elle permet d'obtenir des images des tissus intérieur et ainsi de détecter d’éventuelles anomalies, notamment des nodules, qui peuvent être signes d'un cancer du sein.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-hospital-user\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Echographie Doppler</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">L'échographie Doppler est un examen médical échographique en deux dimensions non invasif qui permet d'explorer les flux sanguins intracardiaques et intravasculaires.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-dna\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Panoramique Dentaire</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Un orthopantomogramme, abrégé par les sigles OPT ou OPG, est une radiographie panoramique de toute la denture. À ce titre, cet examen est plus souvent appelé « panoramique dentaire ». Il consiste en une mise à plat de l'arc dentaire, d'une oreille à une autre</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-wheelchair\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Scanner</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">Un scanner est un appareil d'imagerie médicale qui utilise des rayons X. L'examen réalisé s'appelle par analogie un scanner ou un examen tomodensitométrique (TDM). Le scanner permet de réaliser l'ensemble des examens traditionnels pour ce type d'appareil.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 icon-box\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<i class=\"fas fa-notes-medical\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t<a href=\"\">Radiologie Interventionnelle</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p class=\"description\">La radiologie interventionnelle est une spécialité de la radiologie. Elle désigne l'ensemble des actes médicaux réalisés par des radiologues et sous contrôle radiologique, permettant le traitement ou le diagnostic invasif de nombreuses pathologies.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Services Section -->

\t\t<!-- ======= Contact Section ======= -->
\t\t<section id=\"contact\" class=\"contact\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t<p>Pour tous informatons complémentaire veuillez nous contacter aux adresses suivants.</p>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div>
\t\t\t\t<iframe style=\"border:0; width: 100%; height: 350px;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5965661644254!2d-17.464961985961526!3d14.678821879092169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17263dc18beed%3A0x3a7d82bd7eaae8ae!2sCIDIS!5e0!3m2!1sfr!2ssn!4v1622844126485!5m2!1sfr!2ssn\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t</div>

\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row mt-5\">

\t\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"info-box\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-map\"></i>
\t\t\t\t\t\t\t\t\t<h3>Notre adresse</h3>
\t\t\t\t\t\t\t\t\t<p>FANN HOCK</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"info-box mt-4\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-envelope\"></i>
\t\t\t\t\t\t\t\t\t<h3>Envoyez-nous un email</h3>
\t\t\t\t\t\t\t\t\t<p>cidisarl@yahoo.fr<br>cidisarl@yahoo.fr</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"info-box mt-4\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bx-phone-call\"></i>
\t\t\t\t\t\t\t\t\t<h3>Appelez-nous</h3>
\t\t\t\t\t\t\t\t\t<p>+221 33 821 21 50<br>+221 77 877 95 55</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Votre Nom\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col form-group mt-3\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Votre Email\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Object\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t\t\t\t<div class=\"loading\">Loading</div>
\t\t\t\t\t\t\t\t<div class=\"error-message\"></div>
\t\t\t\t\t\t\t\t<div class=\"sent-message\">Your message has been sent. Thank you!</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<button type=\"submit\">Envoyer Message</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t\t<!-- End Contact Section -->
\t</main>
\t<!-- End #main -->


{% endblock %}
", "home/index.html.twig", "/Users/retina/Desktop/git/projet-certification/templates/home/index.html.twig");
    }
}
