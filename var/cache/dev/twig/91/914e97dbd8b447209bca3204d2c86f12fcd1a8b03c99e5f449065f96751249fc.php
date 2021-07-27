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

/* appointment/new.html.twig */
class __TwigTemplate_596e5d21884c3b2d408cae33ba29b8d6e11485e939f757b89ebea216e1af4315 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/new.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "appointment/new.html.twig", 1);
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

        echo "NewAppointment
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<section id=\"hero\">
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
\t<!-- ========= Rendez-vous section =========== -->
\t<section id=\"appointment\" class=\"appointment section-bg\">
\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>PRENDRE RENDEZ-VOUS</h2>
\t\t\t\t<p>Vous pouvez dès maintenant prendre rendez-vous directement en ligne, avec un professionnel de santé 24h/24 et 7j/7, en seulement quelques clics !</p>
\t\t\t</div>
\t\t\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "date_rendez_vous", [], "any", false, false, false, 37), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "service", [], "any", false, false, false, 40), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "heure", [], "any", false, false, false, 43), 'row');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "examen", [], "any", false, false, false, 48), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type_examen", [], "any", false, false, false, 51), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "medecin", [], "any", false, false, false, 54), 'row');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "message", [], "any", false, false, false, 58), 'row');
        echo "
\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "save", [], "any", false, false, false, 61), 'row');
        echo "
\t\t\t</div>
\t\t\t";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appointment/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  171 => 61,  165 => 58,  158 => 54,  152 => 51,  146 => 48,  138 => 43,  132 => 40,  126 => 37,  120 => 34,  92 => 8,  82 => 7,  62 => 3,  51 => 1,  49 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}NewAppointment
{% endblock %}
{% form_theme form 'bootstrap_5_layout.html.twig' %}

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
\t<!-- ========= Rendez-vous section =========== -->
\t<section id=\"appointment\" class=\"appointment section-bg\">
\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t<div class=\"section-title\">
\t\t\t\t<h2>PRENDRE RENDEZ-VOUS</h2>
\t\t\t\t<p>Vous pouvez dès maintenant prendre rendez-vous directement en ligne, avec un professionnel de santé 24h/24 et 7j/7, en seulement quelques clics !</p>
\t\t\t</div>
\t\t\t{{ form_start(form) }}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t{{ form_row(form.date_rendez_vous) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t{{ form_row(form.service) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t{{ form_row(form.heure) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t\t{{ form_row(form.examen) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t{{ form_row(form.type_examen) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 form-group mt-3 mt-md-0\">
\t\t\t\t\t{{ form_row(form.medecin) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group mt-3\">
\t\t\t\t{{ form_row(form.message) }}
\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t{{ form_row(form.save) }}
\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</section>

{% endblock %}
", "appointment/new.html.twig", "/Users/retina/Desktop/git/projet-certification/templates/appointment/new.html.twig");
    }
}
