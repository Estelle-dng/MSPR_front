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

/* reservation/choixemplacement.html.twig */
class __TwigTemplate_ca54ef18cb66dfe12d40a74dc6ba147511825a4e05c5b12f64d7677a03e0dd54 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/choixemplacement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/choixemplacement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/choixemplacement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/reservation/choixemplacement.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "        <div class=\"header\">
            ";
        // line 9
        echo " ";
        // line 10
        echo "            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1365 637.14\"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#f8a39d;}</style></defs><title>header</title><g id=\"Calque_blanc\"><path id=\"Tracé_blanc\" class=\"cls-1\" d=\"M958.65,49.27v561l-1365,1.68V13.52l177.08,355.2,27.1,45s15.46,34.89,62.85,61.12S-43.63,508-43.63,508l7,.45s55.31,7.85,112.39-20.4S958.65,49.27,958.65,49.27Z\" transform=\"translate(406.35 25.14)\"/></g><g id=\"Calque_rose\"><path id=\"Tracé_rose\" class=\"cls-2\" d=\"M-406.35-25.14-197,391.57s3.42,5.71,4.25,7c5.94,9.37,30.64,47.49,69.76,75.74,17.75,12.82,39.17,24.61,86.38,34.15L-59,507a144.55,144.55,0,0,1-32.93-6l-20.57-6.28s-38.73-14.11-76.33-57.46a252.87,252.87,0,0,1-20.88-27.74C-259.8,332.64-406.35,19.64-406.35,19.64Z\" transform=\"translate(406.35 25.14)\"/></g></svg>
            ";
        // line 12
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "       <div class=\"container\">Prout prout</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/choixemplacement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 17,  112 => 16,  101 => 12,  98 => 10,  96 => 9,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"{{ asset ('assets/css/reservation/choixemplacement.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

    {% block header %}
        <div class=\"header\">
            {# SVG #} {# CACHE POUR LA WAVE #}
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1365 637.14\"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#f8a39d;}</style></defs><title>header</title><g id=\"Calque_blanc\"><path id=\"Tracé_blanc\" class=\"cls-1\" d=\"M958.65,49.27v561l-1365,1.68V13.52l177.08,355.2,27.1,45s15.46,34.89,62.85,61.12S-43.63,508-43.63,508l7,.45s55.31,7.85,112.39-20.4S958.65,49.27,958.65,49.27Z\" transform=\"translate(406.35 25.14)\"/></g><g id=\"Calque_rose\"><path id=\"Tracé_rose\" class=\"cls-2\" d=\"M-406.35-25.14-197,391.57s3.42,5.71,4.25,7c5.94,9.37,30.64,47.49,69.76,75.74,17.75,12.82,39.17,24.61,86.38,34.15L-59,507a144.55,144.55,0,0,1-32.93-6l-20.57-6.28s-38.73-14.11-76.33-57.46a252.87,252.87,0,0,1-20.88-27.74C-259.8,332.64-406.35,19.64-406.35,19.64Z\" transform=\"translate(406.35 25.14)\"/></g></svg>
            {# FIN SVG #}
        </div>
    {% endblock %}


{% block main %}
       <div class=\"container\">Prout prout</div>
    {% endblock %}", "reservation/choixemplacement.html.twig", "/Applications/MAMP/htdocs/Symfony/camping/templates/reservation/choixemplacement.html.twig");
    }
}
