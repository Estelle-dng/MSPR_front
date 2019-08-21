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
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/reservation/choixemplacement.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "<!--  Details -->
<div class=\"form-group\">
    <div class=\"container mt-4\">
        <h2 class=\"heading\">Details</h2>
    </div>
    <div class=\"container-fluid mt-md-5 mt-2\">
        <form class=\"row p-5\">
                ";
        // line 35
        echo "                <div class=\"controls col-md-6 col-lg-3\">
                    <i class=\"fa fa-sort flechedaterange\"></i>
                    <input type=\"text\" class=\"floatLabel\" id=\"reservation\" value=\"<?php echo date('Y-m-d');?>\">
                    <label for=\"reservation\" class=\"label-date ml-2\">
                        <i class=\"fa fa-calendar\"></i> Date de séjour
                    </label>
                </div>

                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"controls\">
                        <i class=\"fa fa-sort\"></i>
                        <select class=\"floatLabel\">
                            <option value=\"tentes\">Tentes/Camping-car</option>
                            <option value=\"mobil-home\" selected>Mobil-home</option>
                            <option value=\"mobil-home-luxe\">Mobil-home Luxe</option>
                            <option value=\"chalet\">Chalet</option>
                        </select>
                        <label for=\"fruit\"><i class=\"fas fa-campground\"></i> Logement</label>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"controls\">
                        <i class=\"fa fa-sort\"></i>
                        <select class=\"floatLabel\">
                            <option value=\"1\">1 et +</option>
                            <option value=\"2\">2 et +</option>
                            <option value=\"3\">3 et +</option>
                            <option value=\"4\" selected>4 et +</option>
                            <option value=\"5\">5 et +</option>
                            <option value=\"6\">6 et +</option>
                        </select>
                        <label for=\"fruit\"><i class=\"fa fa-male\"></i>&nbsp;Couchages</label>
                    </div>
                </div>

            <div class=\"col-md-6 col-lg-3 divrecherche\">
                <button class=\"p-2 rechercher rounded button\" type=\"submit\" value=\"Submit\"><i class=\"fas fa-search\"></i>   CHERCHER</button>
            </div>
        </form>
    </div>
</div>


                ";
        // line 101
        echo "


           <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Emplacement tentes</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/emplacement.png"), "html", null, true);
        echo "\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenan\">
                                        Réserver dès maintenant
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Mobil-home</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome.png"), "html", null, true);
        echo "\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenant\">
                                        Réserver dès maintenant
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Mobil-home Luxe</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/emplacement_mobilhome.png"), "html", null, true);
        echo "\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenant\">
                                        Réserver dès maintenant
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Chalet</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome_interieur.png"), "html", null, true);
        echo "\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenan\">
                                         Réserver dès maintenant
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 196
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 197
        echo "    <!-- jQuery 3 -->
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery/latest/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
    <script>
        (function(\$){
            function floatLabel(inputType){
                \$(inputType).each(function(){
                    var \$this = \$(this);
                    // on focus add cladd active to label
                    \$this.focus(function(){
                        \$this.next().addClass(\"active\");
                    });
                    //on blur check field and remove class if needed
                    \$this.blur(function(){
                        if(\$this.val() === '' || \$this.val() === 'blank'){
                            \$this.next().removeClass();
                        }
                    });
                });
            }
            // just add a class of \"floatLabel to the input field!\"
            floatLabel(\".floatLabel\");
        })(jQuery);
    </script>
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
        return array (  275 => 197,  265 => 196,  234 => 174,  210 => 153,  186 => 132,  161 => 110,  150 => 101,  104 => 35,  95 => 10,  85 => 9,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/css/reservation/choixemplacement.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}


{% block main %}
<!--  Details -->
<div class=\"form-group\">
    <div class=\"container mt-4\">
        <h2 class=\"heading\">Details</h2>
    </div>
    <div class=\"container-fluid mt-md-5 mt-2\">
        <form class=\"row p-5\">
                {#<div class=\"col-md-2 offset-md-1\">
                    <div class=\"controls\">
                        <input type=\"date\" id=\"arrive\" class=\"floatLabel\" name=\"arrive\"
                               value=\"<?php echo date('Y-m-d'); ?>\">
                        <label for=\"arrive\" class=\"label-date\"><i
                                    class=\"fa fa-calendar\"></i>&nbsp;&nbsp;Arrive</label>
                    </div>
                </div>

                <div class=\"col-md-2\">
                    <div class=\"controls\">
                        <input type=\"date\" id=\"depart\" class=\"floatLabel\" name=\"depart\"
                               value=\"<?php echo date('Y-m-d'); ?>\"/>
                        <label for=\"depart\" class=\"label-date\">
                            <i class=\"fa fa-calendar\"></i>&nbsp;&nbsp;Depart
                        </label>
                    </div>
                </div>#}
                <div class=\"controls col-md-6 col-lg-3\">
                    <i class=\"fa fa-sort flechedaterange\"></i>
                    <input type=\"text\" class=\"floatLabel\" id=\"reservation\" value=\"<?php echo date('Y-m-d');?>\">
                    <label for=\"reservation\" class=\"label-date ml-2\">
                        <i class=\"fa fa-calendar\"></i> Date de séjour
                    </label>
                </div>

                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"controls\">
                        <i class=\"fa fa-sort\"></i>
                        <select class=\"floatLabel\">
                            <option value=\"tentes\">Tentes/Camping-car</option>
                            <option value=\"mobil-home\" selected>Mobil-home</option>
                            <option value=\"mobil-home-luxe\">Mobil-home Luxe</option>
                            <option value=\"chalet\">Chalet</option>
                        </select>
                        <label for=\"fruit\"><i class=\"fas fa-campground\"></i> Logement</label>
                    </div>
                </div>

                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"controls\">
                        <i class=\"fa fa-sort\"></i>
                        <select class=\"floatLabel\">
                            <option value=\"1\">1 et +</option>
                            <option value=\"2\">2 et +</option>
                            <option value=\"3\">3 et +</option>
                            <option value=\"4\" selected>4 et +</option>
                            <option value=\"5\">5 et +</option>
                            <option value=\"6\">6 et +</option>
                        </select>
                        <label for=\"fruit\"><i class=\"fa fa-male\"></i>&nbsp;Couchages</label>
                    </div>
                </div>

            <div class=\"col-md-6 col-lg-3 divrecherche\">
                <button class=\"p-2 rechercher rounded button\" type=\"submit\" value=\"Submit\"><i class=\"fas fa-search\"></i>   CHERCHER</button>
            </div>
        </form>
    </div>
</div>


                {#
                    <form>
                        <div class=\"col-md-4 from-group\">
                            <label class=\"text-success text-left\" for=\"inlineFormCustomSelectPref\">Type de
                                logement</label>
                            <select class=\"custom-select\" id=\"inlineFormCustomSelectPref\">
                                <option selected>Tentes/Camping-cars</option>
                                <option value=\"1\">Mobil-home</option>
                                <option value=\"2\">Mobil-home Luxe</option>
                                <option value=\"3\">Chalet</option>
                            </select>
                        </div>
    <div class=\"col-md-2 from-group\">
        <label class=\"text-success text-left\" for=\"inlineFormCustomSelectPref\">Capacité</label>
        <select class=\"custom-select\" id=\"inlineFormCustomSelectPref\">
                                <option selected>1 et +</option>
                                <option value=\"1\">2 et +</option>
                                <option value=\"2\">4 et +</option>
                                <option value=\"3\">6 et +</option>
                            </select>
    </div>
    <button type=\"submit\" class=\"btn btn-success col-md-2\">Submit</button>#}



           <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Emplacement tentes</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"{{ asset ('assets/img/emplacement.png') }}\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenan\">
                                        Réserver dès maintenant
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Mobil-home</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"{{ asset ('assets/img/mobilhome.png') }}\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenant\">
                                        Réserver dès maintenant
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Mobil-home Luxe</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"{{ asset ('assets/img/emplacement_mobilhome.png') }}\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenant\">
                                        Réserver dès maintenant
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"thumbnail\">
                            <h3 class=\"thumbnailtitle\">Chalet</h3>
                            <div class=\"imgthumnail\">
                                <img class=\"img-fluid\" src=\"{{ asset ('assets/img/mobilhome_interieur.png') }}\" alt=\"Nature\">
                            </div>
                            <div class=\"caption\">
                                <p>Hic dolore eram illum nescius, summis an nostrud ne varias. Ut quid dolore se
                                    deserunt se
                                    culpa
                                    doctrina possumus, irure distinguantur officia eram quamquam, ubi nam
                                    instituendarum,
                                    quamquam
                                    minim vidisse nescius.</p>
                                <p>
                                    <a href=\"#\" class=\"btn btn-xs btn-success\" role=\"button\" title=\"Réserver dès maintenan\">
                                         Réserver dès maintenant
                                    </a>
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
        (function(\$){
            function floatLabel(inputType){
                \$(inputType).each(function(){
                    var \$this = \$(this);
                    // on focus add cladd active to label
                    \$this.focus(function(){
                        \$this.next().addClass(\"active\");
                    });
                    //on blur check field and remove class if needed
                    \$this.blur(function(){
                        if(\$this.val() === '' || \$this.val() === 'blank'){
                            \$this.next().removeClass();
                        }
                    });
                });
            }
            // just add a class of \"floatLabel to the input field!\"
            floatLabel(\".floatLabel\");
        })(jQuery);
    </script>
    <script>
        \$(function () {

            \$('#reservation').daterangepicker()

        });


    </script>
{% endblock %}
", "reservation/choixemplacement.html.twig", "/Applications/MAMP/htdocs/camping_project/templates/reservation/choixemplacement.html.twig");
    }
}
