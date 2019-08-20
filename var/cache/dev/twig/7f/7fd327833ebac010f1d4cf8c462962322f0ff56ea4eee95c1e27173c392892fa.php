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
class __TwigTemplate_0b5c35090fe633f34af78715b4f73e93218fa1e1dc6b15c754dcadb3bfa61453 extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
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
<html lang=\"fr\">
<head>
    ";
        // line 5
        echo "    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">

    ";
        // line 9
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-02.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\"
          rel=\"stylesheet\">

    ";
        // line 15
        echo "    <link crossorigin=\"anonymous\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styleBase.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
</head>
<body>
<div class=\"wrap stickyfooter\">
    <header class=\"position-relative\">
        ";
        // line 25
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "
        ";
        // line 34
        echo "        <nav class=\"navbar navbar-expand-md navbar-dark gradientnavbar absolutenavbar textnav\" id=\"mainNav\">

            <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">";
        // line 36
        echo "Camping la Jamonière</a>
            <button class=\"navbar-toggler navbar-toggler-right text-white\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav text-uppercase ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Photos");
        echo "\">Photos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Proximité");
        echo "\">A proximité</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Tarifs
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Mobil-Homes</a>
                            <a class=\"dropdown-item\" href=\"#\">Chalet</a>
                            <a class=\"dropdown-item\" href=\"#\">Tente / Camping-Cars</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("FAQ");
        echo "\">F.A.Q</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        echo "\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <button type=\"button\" class=\"btn p-0 btn-default\"><a class=\"nav-link js-scroll-trigger text-white\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Choix");
        echo "\">RÉSERVATION</a></button>
                    </li>
                </ul>
            </div>
        </nav>
        ";
        // line 74
        echo "    </header>
    ";
        // line 76
        echo "
    ";
        // line 77
        $this->displayBlock('main', $context, $blocks);
        // line 78
        echo "

    ";
        // line 81
        echo "

    <footer>
        <div class=\"container mt-5 mb-2\">
            <div class=\"row\">
                <h1 class=\"resa col-md-5 offset-md-1 col-6 offset-0 mt-3\">Réservation et paiement en ligne ou sur
                    place. CB, chèques et chèques
                    vacances acceptés.
                </h1>
                <div class=\"col-6 offset-0 col-md-5 offset-md-1 mt-3 mt-md-5 offset-lg-2 cadrebtnresa\">
                    <a class=\"buttonresa\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Choix");
        echo "\">RÉSERVEZ DÈS MAINTENANT</a>
                </div>
            </div>
        </div>

        <div class=\"container-fluid botlogoinfos\">
            <div class=\"row\">
                <div class=\"col-md-2 offset-md-10\">
                    <img class=\"img-fluid\" src=\"../public/assets/img/logo-02.png\" alt=\"logo\">
                </div>
                <p class=\"col-md-6 offset-md-6\" style=\"color: white; text-align: right\">
                    Camping la Jamonière - Mervent - Vendée
                    <br>
                    Mobil-homes, chalets, tentes, camping-cars
                </p>
            </div>
        </div>

        <div class=\"container-fluid navbot mt-md-0 mt-lg-5 mt-0\">
            <div class=\"row justify-content-around\">
                <div class=\"col-md-2 col-5 offset-1 offset-lg-6 col-lg-3\">
                    <nav>
                        <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\">Accueil</a>
                        <br>
                        <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Photos");
        echo "\">Photos</a>
                        <br>
                        <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Proximité");
        echo "\">À proximité</a>
                    </nav>
                </div>
                <div class=\"col-md-2 col-5 col-lg-3\">
                    <nav>
                        <a href=\"#\">Tarifs</a>
                        <br>
                        <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("FAQ");
        echo "\">FAQ</a>
                        <br>
                        <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact");
        echo "\">Contact</a>
                    </nav>
                </div>
                ";
        // line 140
        echo "            </div>
        </div>
    </footer>
    ";
        // line 144
        echo "


    ";
        // line 148
        echo "
    <script src=\"https://kit.fontawesome.com/75abba9047.js\"></script>
    <script crossorigin=\"anonymous\"
            integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
            src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
    <script crossorigin=\"anonymous\"
            integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script crossorigin=\"anonymous\"
            integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
            src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    ";
        // line 159
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "    ";
        // line 161
        echo "</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Camping la Jamonière";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "            <div class=\"header d-md-block d-none mb-md-5\">
                ";
        // line 27
        echo " ";
        // line 28
        echo "                <svg class=\"mt-5\" id=\"Calque_1\" data-name=\"Calque 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1264.27 162.13\"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#e5baad;opacity:0.5;}</style></defs><title>Capture d’écran 2019-08-15 à 03.33.38</title><path class=\"cls-1\" d=\"M0,54.07S61.89,176.8,224.09,146.76L1264.27,0V162.13L0,162.08Z\"/><path class=\"cls-2\" d=\"M0,54.68s46.8,88.2,156.49,96.12a246.5,246.5,0,0,0,29.19.54s-54.9,13.13-111.59-16.71S0,72.58,0,72.58Z\"/></svg>
                ";
        // line 29
        echo " ";
        // line 30
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 159,  342 => 77,  331 => 30,  329 => 29,  326 => 28,  324 => 27,  321 => 26,  311 => 25,  293 => 18,  274 => 10,  261 => 161,  259 => 160,  257 => 159,  244 => 148,  239 => 144,  234 => 140,  228 => 126,  223 => 124,  213 => 117,  208 => 115,  203 => 113,  178 => 91,  166 => 81,  162 => 78,  160 => 77,  157 => 76,  154 => 74,  146 => 68,  140 => 65,  134 => 62,  118 => 49,  112 => 46,  106 => 43,  97 => 36,  93 => 34,  90 => 32,  87 => 25,  80 => 19,  78 => 18,  74 => 17,  70 => 15,  63 => 10,  58 => 9,  53 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    {# Required meta tags #}
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">

    {#Onglet et typo#}
    <link rel=\"icon\" href=\"{{ asset ('assets/img/logo-02.png') }}\" type=\"image/png\">
    <title>{% block title %}Camping la Jamonière{% endblock %}</title>
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\"
          rel=\"stylesheet\">

    {# Bootstrap CSS #}
    <link crossorigin=\"anonymous\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/css/styleBase.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    {% block stylesheets %}{% endblock %}

</head>
<body>
<div class=\"wrap stickyfooter\">
    <header class=\"position-relative\">
        {#HEADER#}
        {% block header %}
            <div class=\"header d-md-block d-none mb-md-5\">
                {# SVG #} {# CACHE POUR LA WAVE #}
                <svg class=\"mt-5\" id=\"Calque_1\" data-name=\"Calque 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1264.27 162.13\"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#e5baad;opacity:0.5;}</style></defs><title>Capture d’écran 2019-08-15 à 03.33.38</title><path class=\"cls-1\" d=\"M0,54.07S61.89,176.8,224.09,146.76L1264.27,0V162.13L0,162.08Z\"/><path class=\"cls-2\" d=\"M0,54.68s46.8,88.2,156.49,96.12a246.5,246.5,0,0,0,29.19.54s-54.9,13.13-111.59-16.71S0,72.58,0,72.58Z\"/></svg>
                {# /SVG #} {# /CACHE POUR LA WAVE #}
            </div>
        {% endblock %}

        {# Navbar #}
        <nav class=\"navbar navbar-expand-md navbar-dark gradientnavbar absolutenavbar textnav\" id=\"mainNav\">

            <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">{#<img src=\"../public/assets/img/logo-02.png\" alt=\"logo\" class=\"img-fluid\" style=\"height: 50px;\">#}Camping la Jamonière</a>
            <button class=\"navbar-toggler navbar-toggler-right text-white\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav text-uppercase ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"{{ path('Accueil') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"{{ path('Photos') }}\">Photos</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"{{ path('Proximité') }}\">A proximité</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Tarifs
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Mobil-Homes</a>
                            <a class=\"dropdown-item\" href=\"#\">Chalet</a>
                            <a class=\"dropdown-item\" href=\"#\">Tente / Camping-Cars</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"{{ path('FAQ') }}\">F.A.Q</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger text-white\" href=\"{{ path ('Contact') }}\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <button type=\"button\" class=\"btn p-0 btn-default\"><a class=\"nav-link js-scroll-trigger text-white\" href=\"{{ path ('Choix') }}\">RÉSERVATION</a></button>
                    </li>
                </ul>
            </div>
        </nav>
        {#/Navbar#}
    </header>
    {#/HEADER#}

    {% block main %}{% endblock %}


    {#FOOTER#}


    <footer>
        <div class=\"container mt-5 mb-2\">
            <div class=\"row\">
                <h1 class=\"resa col-md-5 offset-md-1 col-6 offset-0 mt-3\">Réservation et paiement en ligne ou sur
                    place. CB, chèques et chèques
                    vacances acceptés.
                </h1>
                <div class=\"col-6 offset-0 col-md-5 offset-md-1 mt-3 mt-md-5 offset-lg-2 cadrebtnresa\">
                    <a class=\"buttonresa\" href=\"{{ path ('Choix') }}\">RÉSERVEZ DÈS MAINTENANT</a>
                </div>
            </div>
        </div>

        <div class=\"container-fluid botlogoinfos\">
            <div class=\"row\">
                <div class=\"col-md-2 offset-md-10\">
                    <img class=\"img-fluid\" src=\"../public/assets/img/logo-02.png\" alt=\"logo\">
                </div>
                <p class=\"col-md-6 offset-md-6\" style=\"color: white; text-align: right\">
                    Camping la Jamonière - Mervent - Vendée
                    <br>
                    Mobil-homes, chalets, tentes, camping-cars
                </p>
            </div>
        </div>

        <div class=\"container-fluid navbot mt-md-0 mt-lg-5 mt-0\">
            <div class=\"row justify-content-around\">
                <div class=\"col-md-2 col-5 offset-1 offset-lg-6 col-lg-3\">
                    <nav>
                        <a href=\"{{ path ('Accueil') }}\">Accueil</a>
                        <br>
                        <a href=\"{{ path ('Photos') }}\">Photos</a>
                        <br>
                        <a href=\"{{ path ('Proximité') }}\">À proximité</a>
                    </nav>
                </div>
                <div class=\"col-md-2 col-5 col-lg-3\">
                    <nav>
                        <a href=\"#\">Tarifs</a>
                        <br>
                        <a href=\"{{ path ('FAQ') }}\">FAQ</a>
                        <br>
                        <a href=\"{{ path ('Contact') }}\">Contact</a>
                    </nav>
                </div>
                {#<div class=\"col-md-3 mb-5 newsletter text-white\">
                    <p>
                        Inscrivez vous à la new-letter pour connaître les
                        dernières actualités du camping :
                    </p>
                    <div class=\"newsletterdnone\">
                        <input class=\"button\" type=\"text\" placeholder=\"Votre Email\"
                               style=\"font-weight: lighter; width: 265px;\">
                        <button type=\"submit\" class=\"button new\">Submit</button>
                    </div>
                </div>#}
            </div>
        </div>
    </footer>
    {#/FOOTER #}



    {#Jquery#}

    <script src=\"https://kit.fontawesome.com/75abba9047.js\"></script>
    <script crossorigin=\"anonymous\"
            integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
            src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
    <script crossorigin=\"anonymous\"
            integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script crossorigin=\"anonymous\"
            integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
            src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
    {% block javascripts %}{% endblock %}
    {#Jquery#}
</div>
</body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/camping_project/templates/base.html.twig");
    }
}
