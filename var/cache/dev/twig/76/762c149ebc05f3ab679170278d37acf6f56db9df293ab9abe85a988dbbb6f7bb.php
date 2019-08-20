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
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
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

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group col-md-4\">
                <label>Choisissez votre date de séjour:</label>

                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        <i class=\"far fa-calendar-alt input-group-text\"></i>
                    </div>
                    <input type=\"text\" class=\"form-control pull-right\" id=\"reservation\">
                </div>
                <!-- /.input group -->
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <img class=\"img-fluid\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tentes.png"), "html", null, true);
        echo "\" alt=\"Nature\">
                    <div class=\"caption\">
                        <h3>Emplacement tentes</h3>
                        <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se deserunt se
                            culpa
                            doctrina possumus, irure distinguantur officia eram quamquam, ubi nam instituendarum,
                            quamquam
                            minim vidisse nescius.</p>
                        <p>
                            <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"En savoir +\">En savoir +</a>
                            <a href=\"#\" class=\"btn btn-xs btn-default text-white\" role=\"button\" title=\"Voir le détail\">Voir le détail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <img class=\"img-fluid\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome.png"), "html", null, true);
        echo "\" alt=\"Nature\">
                    <div class=\"caption\">
                        <h3>Mobil-home</h3>
                        <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se deserunt se
                            culpa
                            doctrina possumus, irure distinguantur officia eram quamquam, ubi nam instituendarum,
                            quamquam
                            minim vidisse nescius.</p>
                        <p>
                            <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"En savoir +\">En savoir +</a>
                            <a href=\"#\" class=\"btn btn-xs btn-default text-white\" role=\"button\" title=\"Voir le détail\">Voir le détail</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <img class=\"img-fluid\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome_interieur.png"), "html", null, true);
        echo "\" alt=\"Nature\">
                    <div class=\"caption\">
                        <h3>Chalet</h3>
                        <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se deserunt se
                            culpa
                            doctrina possumus, irure distinguantur officia eram quamquam, ubi nam instituendarum,
                            quamquam
                            minim vidisse nescius.</p>
                        <p><a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"En savoir +\">En savoir +</a>
                            <a href=\"#\" class=\"btn btn-xs btn-default text-white\" role=\"button\" title=\"Voir le détail\">Voir le détail</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    <!-- jQuery 3 -->
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery/latest/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
    <script>
        \$(function () {

            \$('#reservation').daterangepicker()

        });


    </script>
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
        return array (  190 => 80,  180 => 79,  154 => 62,  135 => 46,  115 => 29,  93 => 9,  83 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"{{ asset ('assets/css/reservation/choixemplacement.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}


{% block main %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group col-md-4\">
                <label>Choisissez votre date de séjour:</label>

                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        <i class=\"far fa-calendar-alt input-group-text\"></i>
                    </div>
                    <input type=\"text\" class=\"form-control pull-right\" id=\"reservation\">
                </div>
                <!-- /.input group -->
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <img class=\"img-fluid\" src=\"{{ asset ('assets/img/tentes.png') }}\" alt=\"Nature\">
                    <div class=\"caption\">
                        <h3>Emplacement tentes</h3>
                        <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se deserunt se
                            culpa
                            doctrina possumus, irure distinguantur officia eram quamquam, ubi nam instituendarum,
                            quamquam
                            minim vidisse nescius.</p>
                        <p>
                            <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"En savoir +\">En savoir +</a>
                            <a href=\"#\" class=\"btn btn-xs btn-default text-white\" role=\"button\" title=\"Voir le détail\">Voir le détail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <img class=\"img-fluid\" src=\"{{ asset ('assets/img/mobilhome.png') }}\" alt=\"Nature\">
                    <div class=\"caption\">
                        <h3>Mobil-home</h3>
                        <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se deserunt se
                            culpa
                            doctrina possumus, irure distinguantur officia eram quamquam, ubi nam instituendarum,
                            quamquam
                            minim vidisse nescius.</p>
                        <p>
                            <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"En savoir +\">En savoir +</a>
                            <a href=\"#\" class=\"btn btn-xs btn-default text-white\" role=\"button\" title=\"Voir le détail\">Voir le détail</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    <img class=\"img-fluid\" src=\"{{ asset ('assets/img/mobilhome_interieur.png') }}\" alt=\"Nature\">
                    <div class=\"caption\">
                        <h3>Chalet</h3>
                        <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se deserunt se
                            culpa
                            doctrina possumus, irure distinguantur officia eram quamquam, ubi nam instituendarum,
                            quamquam
                            minim vidisse nescius.</p>
                        <p><a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"En savoir +\">En savoir +</a>
                            <a href=\"#\" class=\"btn btn-xs btn-default text-white\" role=\"button\" title=\"Voir le détail\">Voir le détail</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <!-- jQuery 3 -->
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery/latest/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
    <script>
        \$(function () {

            \$('#reservation').daterangepicker()

        });


    </script>
{% endblock %}
", "reservation/choixemplacement.html.twig", "/Applications/MAMP/htdocs/camping_project/templates/reservation/choixemplacement.html.twig");
    }
}
