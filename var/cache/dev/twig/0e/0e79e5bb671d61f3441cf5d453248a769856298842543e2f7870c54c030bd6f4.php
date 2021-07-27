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

/* base.html.twig */
class __TwigTemplate_89ee98c13ca7507c4c8095f73ff97d08fa5caa836d8021526b54061e1146cdc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 11
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
\t\t";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "\t</head>
\t<body>

\t<!-- ======= Top Bar ======= -->
  <div id=\"topbar\" class=\"d-flex align-items-center fixed-top\">
    <div class=\"container d-flex align-items-center justify-content-center justify-content-md-between\">
      <div class=\"align-items-center d-none d-md-flex\">
        <i class=\"bi bi-clock\"></i> Lundi - Vendredi, 9h - 17h
      </div>
      <div class=\"d-flex align-items-center\">
        <i class=\"bi bi-phone\"></i> Téléphone : 33 821 21 50
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">

      <a href=\"/\" class=\"logo me-auto\">Cidis</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class=\"logo me-auto\"><a href=\"index.html\">Medicio</a></h1> -->

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto \" href=\"/\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">À PROPOS DE NOUS</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#departments\">Patient</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#doctors\">MÉDECINS</a></li>
\t\t  <li><a class=\"nav-link scrollto\" href=\"/login\">Se connecter</a></li>
\t\t  <li><a class=\"nav-link scrollto\" href=\"/register\">S'inscrire</a></li>
\t\t  <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"/login\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">PRENDRE </span> RENDEZ-VOUS</a>

    </div>
  </header><!-- End Header -->
\t\t";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "
\t\t<!-- ======= Footer ======= -->
\t<footer id=\"footer\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-info\">
\t\t\t\t\t\t\t<h3>CIDIS</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFANN HOCK
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tDAKAR<br><br>
\t\t\t\t\t\t\t\t<strong>Téléphone:</strong>
\t\t\t\t\t\t\t\t+221 33 821 21 50<br>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tcidisarl@yahoo.fr<br>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"social-links mt-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"google-plus\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-skype\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-2 col-md-6 footer-links\">
\t\t\t\t\t\t<h4>Liens utiles</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Acceuil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">A propos de nous</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Patient</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Medecin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-links\">
\t\t\t\t\t\t<h4>Nos services</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Web Design</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Web Development</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Product Management</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Marketing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Graphic Design</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-newsletter\">
\t\t\t\t\t\t<h4>Notre Newsletter</h4>
\t\t\t\t\t\t<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"copyright\">
\t\t\t\t&copy; Copyright
\t\t\t\t<strong>
\t\t\t\t\t<span>Cidis</span>
\t\t\t\t</strong>. All Rights Reserved
\t\t\t</div>
\t\t\t<div class=\"credits\"> Designed by
\t\t\t\t\t<a href=\"#\"> <h6>FallouMbengue </h6></a>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- End Footer -->
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t";
        // line 13
        echo "
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">


\t\t\t<!-- Favicons -->
\t\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\"> <link
\t\t\thref=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "\t\t\t";
        // line 42
        echo "
\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>

\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"> </script>
\t\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 100,  388 => 57,  382 => 54,  378 => 53,  374 => 52,  370 => 51,  366 => 50,  362 => 49,  353 => 42,  351 => 41,  341 => 40,  329 => 37,  323 => 34,  318 => 32,  314 => 31,  310 => 30,  306 => 29,  302 => 28,  298 => 27,  294 => 26,  284 => 19,  280 => 18,  273 => 13,  271 => 12,  261 => 11,  241 => 6,  112 => 101,  110 => 100,  67 => 59,  65 => 40,  62 => 39,  59 => 11,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{# Run `composer require symfony/webpack-encore-bundle`
\t\t\t\t           and uncomment the following Encore helpers to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{#{{ encore_entry_link_tags('app') }}#}

\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">


\t\t\t<!-- Favicons -->
\t\t\t<link href=\"{{asset('assets/img/favicon.png')}}\" rel=\"icon\"> <link
\t\t\thref=\"{{asset('assets/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"{{asset('assets/vendor/animate.css/animate.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{#{{ encore_entry_script_tags('app') }}#}

\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>

\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"{{asset('assets/vendor/aos/aos.js')}}\"> </script>
\t\t\t<script src=\"{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/vendor/php-email-form/validate.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/vendor/purecounter/purecounter.js')}}\"></script>
\t\t\t<script src=\"{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"{{asset('assets/js/main.js')}}\"></script>
\t\t{% endblock %}
\t</head>
\t<body>

\t<!-- ======= Top Bar ======= -->
  <div id=\"topbar\" class=\"d-flex align-items-center fixed-top\">
    <div class=\"container d-flex align-items-center justify-content-center justify-content-md-between\">
      <div class=\"align-items-center d-none d-md-flex\">
        <i class=\"bi bi-clock\"></i> Lundi - Vendredi, 9h - 17h
      </div>
      <div class=\"d-flex align-items-center\">
        <i class=\"bi bi-phone\"></i> Téléphone : 33 821 21 50
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center\">

      <a href=\"/\" class=\"logo me-auto\">Cidis</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class=\"logo me-auto\"><a href=\"index.html\">Medicio</a></h1> -->

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto \" href=\"/\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">À PROPOS DE NOUS</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#departments\">Patient</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#doctors\">MÉDECINS</a></li>
\t\t  <li><a class=\"nav-link scrollto\" href=\"/login\">Se connecter</a></li>
\t\t  <li><a class=\"nav-link scrollto\" href=\"/register\">S'inscrire</a></li>
\t\t  <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

      <a href=\"/login\" class=\"appointment-btn scrollto\"><span class=\"d-none d-md-inline\">PRENDRE </span> RENDEZ-VOUS</a>

    </div>
  </header><!-- End Header -->
\t\t{% block body %}{% endblock %}

\t\t<!-- ======= Footer ======= -->
\t<footer id=\"footer\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-info\">
\t\t\t\t\t\t\t<h3>CIDIS</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFANN HOCK
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tDAKAR<br><br>
\t\t\t\t\t\t\t\t<strong>Téléphone:</strong>
\t\t\t\t\t\t\t\t+221 33 821 21 50<br>
\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\tcidisarl@yahoo.fr<br>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"social-links mt-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-facebook\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"google-plus\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-skype\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t\t<i class=\"bx bxl-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-2 col-md-6 footer-links\">
\t\t\t\t\t\t<h4>Liens utiles</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Acceuil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">A propos de nous</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Patient</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Medecin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6 footer-links\">
\t\t\t\t\t\t<h4>Nos services</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Web Design</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Web Development</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Product Management</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Marketing</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"bx bx-chevron-right\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Graphic Design</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4 col-md-6 footer-newsletter\">
\t\t\t\t\t\t<h4>Notre Newsletter</h4>
\t\t\t\t\t\t<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"copyright\">
\t\t\t\t&copy; Copyright
\t\t\t\t<strong>
\t\t\t\t\t<span>Cidis</span>
\t\t\t\t</strong>. All Rights Reserved
\t\t\t</div>
\t\t\t<div class=\"credits\"> Designed by
\t\t\t\t\t<a href=\"#\"> <h6>FallouMbengue </h6></a>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- End Footer -->
\t</body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/medis/templates/base.html.twig");
    }
}
