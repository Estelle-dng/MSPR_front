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
        echo "        <div class=\"headerAccueil d-md-block d-none\">
            ";
        // line 9
        echo " ";
        // line 10
        echo "            <svg class=\"mt-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1365 637.14\"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#f8a39d;}</style></defs>
                <title>header</title><g id=\"Calque_blanc\"><path id=\"Tracé_blanc\" class=\"cls-1\" d=\"M958.65,49.27v561l-1365,1.68V13.52l177.08,355.2,27.1,45s15.46,34.89,62.85,61.12S-43.63,508-43.63,508l7,.45s55.31,7.85,112.39-20.4S958.65,49.27,958.65,49.27Z\" transform=\"translate(406.35 25.14)\"/></g>
                <g id=\"Calque_rose\"><path id=\"Tracé_rose\" class=\"cls-2\" d=\"M-406.35-25.14-197,391.57s3.42,5.71,4.25,7c5.94,9.37,30.64,47.49,69.76,75.74,17.75,12.82,39.17,24.61,86.38,34.15L-59,507a144.55,144.55,0,0,1-32.93-6l-20.57-6.28s-38.73-14.11-76.33-57.46a252.87,252.87,0,0,1-20.88-27.74C-259.8,332.64-406.35,19.64-406.35,19.64Z\" transform=\"translate(406.35 25.14)\"/></g>
            </svg>
            ";
        // line 15
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        // line 21
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <hgroup class=\"hgroupaccueil d-md-block d-none col-md-5 offset-md-1 offset-xl-1\">
                <h1 class=\"campinglajam\">CAMPING<br>LA  JAMONIÈRE</h1>
                <h2 class=\"mervent\">MERVENT</h2>
                <h3 class=\"mobilhomes\">Mobil-homes, chalets, tentes, camping-car</h3>
                <h4 class=\"vendee\">V  e  n  d  é  e</h4>
            </hgroup>
        </div>
    </div>
    ";
        // line 32
        echo "    <main>
        ";
        // line 34
        echo "        <div class=\"bienvenue container-fluid absolutebienvenue\">
            <div class=\"row\">
                <div class=\"col-5 offset-1 col-md-2 offset-md-8 pl-0\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-02.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-fluid\">
                </div>
                <div class=\"col-6 col-md-4 offset-md-7 text-center\">
                    <p class=\"text\">Bienvenue au camping de la Jamonière à Mervent !
                        <br>
                        Ouverture le 6 Avril 2019 !
                        Jusqu’au 30 Septembre 2019
                    </p>
                </div>
            </div>
        </div>


        <div class=\"relative\">
                <div class=\"cadrebarre\">
                    <div class=\"barrerose\" id=\"article1\"></div>
                </div>

                ";
        // line 56
        echo "
                <section>
                    <article class=\"container-fluid my-4\">
                        <h1 class=\"bigtitle offset-1\"><b>INFORMATIONS</b> GÉNÉRALES</h1>

                        <div class=\"row\">
                            <div class=\"col-sm-5 offset-sm-1 col-md-8 offset-md-2 col-10 offset-1 col-lg-5 offset-lg-1 cadreimg\">
                                <img alt=\"pêcheurs\" class=\"img-fluid imgarticle\"
                                     src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pecheur.png"), "html", null, true);
        echo "\">
                                <h2 class=\"gradient1 parc\">À 50 MIN DU PUY DU FOU</h2>
                            </div>
                            <div class=\"col-lg-5 offset-lg-0 col-10 offset-1 col-md-10 offset-md-1\">
                                <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met
                                    à
                                    votre disposition:</h2>
                                <ul class=\"listinfo\">
                                    <li>30 emplacements de camping</li>
                                    <li>8 mobil-homes Confort <span class=\"infos\">(4 personnes)</span></li>
                                    <li>2 mobil-homes Premium Luxe <span class=\"infos\">(4/6 personnes)</span></li>
                                    <li>2 chalets <span class=\"infos\">(4/5 personnes)</span></li>
                                    <li>Douches et toilettes avec accès PMR <span class=\"infos\">(personne à mobilité réduite)</span>
                                    </li>
                                    <li>Un lave linge</li>
                                    <li>Un barbecue collectif</li>
                                    <li>Une table de ping-pong avec prêt de raquettes gratuit</li>
                                    <li>Un accès WIFI gratuit à l'accueil</li>
                                </ul>
                            </div>
                        </div>
                    </article>


                    <article class=\"container-fluid my-4\">
                        <h1 class=\"bigtitle offset-2\" id=\"article1\"><b>7 HA DE SITE</b> dont:</h1>

                        <div class=\"row\">
                            <div class=\"col-sm-5 offset-sm-1 col-md-8 offset-md-2 col-10 offset-1 col-lg-5 offset-lg-1 cadreimg\">
                                <img alt=\"lac\" class=\"img-fluid imgarticle\"
                                     src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lac_barques.jpg"), "html", null, true);
        echo "\">
                                <div class=\"gradient2\">
                                    <h2 class=\"etang\">AVEC UN ÉTANG DE PÊCHE</h2>
                                    <p class=\"infos\">Gratuité pour 1 ligne</p>
                                </div>
                            </div>
                        </div>


                        <div class=\"row\">
                            <div class=\"col-lg-4 offset-lg-2 col-10 offset-1 col-md-10 offset-md-1\" id=\"slide2\">
                                <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met
                                    à
                                    votre
                                    disposition:</h2>
                                <ul class=\"listinfo\">
                                    <li>Un snack bar (repas de groupe sur commande et location de salle possible)</li>
                                    <li>Un étang de pêche (gratuité pour 1 ligne aux client du camping)</li>
                                    <li>L'éco-musée \"Les amis de la forêt\" avec visites guidées sur réservation</li>
                                </ul>
                                <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Proximité");
        echo "\"><span class=\"infos\">Plus d'infos &#x2794;</span></a>
                            </div>
                        </div>
                    </article>
                </section>

                <div>
                    <div class=\"barrerosebot\"></div>
                </div>

                ";
        // line 125
        echo "
                <section class=\"container mt-5\">

                    <article class=\"row\">
                        <div class=\"offset-md-2 col-md-4 col-6\">
                            <h2 class=\"bigtitle contact mt-0\">Contact:</h2>
                            <p>
                                Camping De La Jamonière
                                <br>
                                <br>
                                \"Les Amis de la Forêt\"
                                <br>
                                <br>
                                129 route de la Bironnière
                                <br>
                                85200 MERVENT
                                <br>
                            </p>
                        </div>

                        <div class=\"col-md-6 d-none\"></div>

                        <div class=\"offset-md-0 col-md-4 col-6\">
                            <h2 class=\"bigtitle contact mt-1\">Tél :</h2>
                            <p>02 51 00 26 29 / 06 20 17 18 54</p>

                            <div class=\"col-md-6\"></div>

                            ";
        // line 158
        echo "
                            <h2 class=\"bigtitle contact mt-0\" id=\"slide3\">E-mail :</h2>
                            <p class=\"mail\">contact@camping-jamoniere.com</p>
                        </div>
                    </article>
                </section>

                ";
        // line 166
        echo "
                <section class=\"picline\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lac2.png"), "html", null, true);
        echo "\" alt=\"lac\" class=\"imgfluid  p-0 col-3\">
                            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome_interieur.png"), "html", null, true);
        echo "\" alt=\"interieur de mobil-home\"
                                 class=\"imgfluid p-0 col-3\">
                            <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sanitaires.png"), "html", null, true);
        echo "\" alt=\"sanitaires\"
                                 class=\"imgfluid  p-0 col-3\">
                            <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tentes.png"), "html", null, true);
        echo "\" alt=\"tentes\" class=\"imgfluid  p-0 col-3\">
                        </div>
                    </div>
                </section>
                ";
        // line 180
        echo "            </div>
    </main>
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
        return array (  313 => 180,  306 => 175,  301 => 173,  296 => 171,  292 => 170,  286 => 166,  277 => 158,  247 => 125,  234 => 114,  211 => 94,  178 => 64,  168 => 56,  147 => 37,  142 => 34,  139 => 32,  127 => 21,  125 => 20,  115 => 19,  104 => 15,  98 => 10,  96 => 9,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"{{ asset ('assets/css/reservation/choixemplacement.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

    {% block header %}
        <div class=\"headerAccueil d-md-block d-none\">
            {# SVG #} {# CACHE POUR LA WAVE #}
            <svg class=\"mt-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1365 637.14\"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#f8a39d;}</style></defs>
                <title>header</title><g id=\"Calque_blanc\"><path id=\"Tracé_blanc\" class=\"cls-1\" d=\"M958.65,49.27v561l-1365,1.68V13.52l177.08,355.2,27.1,45s15.46,34.89,62.85,61.12S-43.63,508-43.63,508l7,.45s55.31,7.85,112.39-20.4S958.65,49.27,958.65,49.27Z\" transform=\"translate(406.35 25.14)\"/></g>
                <g id=\"Calque_rose\"><path id=\"Tracé_rose\" class=\"cls-2\" d=\"M-406.35-25.14-197,391.57s3.42,5.71,4.25,7c5.94,9.37,30.64,47.49,69.76,75.74,17.75,12.82,39.17,24.61,86.38,34.15L-59,507a144.55,144.55,0,0,1-32.93-6l-20.57-6.28s-38.73-14.11-76.33-57.46a252.87,252.87,0,0,1-20.88-27.74C-259.8,332.64-406.35,19.64-406.35,19.64Z\" transform=\"translate(406.35 25.14)\"/></g>
            </svg>
            {# FIN SVG #}
        </div>
    {% endblock %}


{% block main %}
    {#HEADER ACCUEIL - HEADER ACCUEIL - HEADER ACCUEIL#}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <hgroup class=\"hgroupaccueil d-md-block d-none col-md-5 offset-md-1 offset-xl-1\">
                <h1 class=\"campinglajam\">CAMPING<br>LA  JAMONIÈRE</h1>
                <h2 class=\"mervent\">MERVENT</h2>
                <h3 class=\"mobilhomes\">Mobil-homes, chalets, tentes, camping-car</h3>
                <h4 class=\"vendee\">V  e  n  d  é  e</h4>
            </hgroup>
        </div>
    </div>
    {# FIN HEADER ACCUEIL - FIN HEADER ACCUEIL - FIN HEADER ACCUEIL#}
    <main>
        {#MAIN#}
        <div class=\"bienvenue container-fluid absolutebienvenue\">
            <div class=\"row\">
                <div class=\"col-5 offset-1 col-md-2 offset-md-8 pl-0\">
                    <img src=\"{{ asset ('assets/img/logo-02.png') }}\" alt=\"logo\" class=\"img-fluid\">
                </div>
                <div class=\"col-6 col-md-4 offset-md-7 text-center\">
                    <p class=\"text\">Bienvenue au camping de la Jamonière à Mervent !
                        <br>
                        Ouverture le 6 Avril 2019 !
                        Jusqu’au 30 Septembre 2019
                    </p>
                </div>
            </div>
        </div>


        <div class=\"relative\">
                <div class=\"cadrebarre\">
                    <div class=\"barrerose\" id=\"article1\"></div>
                </div>

                {#PARTIE INFO - PARTIE INFOS - PARTIE INFOS#}

                <section>
                    <article class=\"container-fluid my-4\">
                        <h1 class=\"bigtitle offset-1\"><b>INFORMATIONS</b> GÉNÉRALES</h1>

                        <div class=\"row\">
                            <div class=\"col-sm-5 offset-sm-1 col-md-8 offset-md-2 col-10 offset-1 col-lg-5 offset-lg-1 cadreimg\">
                                <img alt=\"pêcheurs\" class=\"img-fluid imgarticle\"
                                     src=\"{{ asset ('assets/img/pecheur.png') }}\">
                                <h2 class=\"gradient1 parc\">À 50 MIN DU PUY DU FOU</h2>
                            </div>
                            <div class=\"col-lg-5 offset-lg-0 col-10 offset-1 col-md-10 offset-md-1\">
                                <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met
                                    à
                                    votre disposition:</h2>
                                <ul class=\"listinfo\">
                                    <li>30 emplacements de camping</li>
                                    <li>8 mobil-homes Confort <span class=\"infos\">(4 personnes)</span></li>
                                    <li>2 mobil-homes Premium Luxe <span class=\"infos\">(4/6 personnes)</span></li>
                                    <li>2 chalets <span class=\"infos\">(4/5 personnes)</span></li>
                                    <li>Douches et toilettes avec accès PMR <span class=\"infos\">(personne à mobilité réduite)</span>
                                    </li>
                                    <li>Un lave linge</li>
                                    <li>Un barbecue collectif</li>
                                    <li>Une table de ping-pong avec prêt de raquettes gratuit</li>
                                    <li>Un accès WIFI gratuit à l'accueil</li>
                                </ul>
                            </div>
                        </div>
                    </article>


                    <article class=\"container-fluid my-4\">
                        <h1 class=\"bigtitle offset-2\" id=\"article1\"><b>7 HA DE SITE</b> dont:</h1>

                        <div class=\"row\">
                            <div class=\"col-sm-5 offset-sm-1 col-md-8 offset-md-2 col-10 offset-1 col-lg-5 offset-lg-1 cadreimg\">
                                <img alt=\"lac\" class=\"img-fluid imgarticle\"
                                     src=\"{{ asset ('assets/img/lac_barques.jpg') }}\">
                                <div class=\"gradient2\">
                                    <h2 class=\"etang\">AVEC UN ÉTANG DE PÊCHE</h2>
                                    <p class=\"infos\">Gratuité pour 1 ligne</p>
                                </div>
                            </div>
                        </div>


                        <div class=\"row\">
                            <div class=\"col-lg-4 offset-lg-2 col-10 offset-1 col-md-10 offset-md-1\" id=\"slide2\">
                                <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met
                                    à
                                    votre
                                    disposition:</h2>
                                <ul class=\"listinfo\">
                                    <li>Un snack bar (repas de groupe sur commande et location de salle possible)</li>
                                    <li>Un étang de pêche (gratuité pour 1 ligne aux client du camping)</li>
                                    <li>L'éco-musée \"Les amis de la forêt\" avec visites guidées sur réservation</li>
                                </ul>
                                <a href=\"{{ path ('Proximité') }}\"><span class=\"infos\">Plus d'infos &#x2794;</span></a>
                            </div>
                        </div>
                    </article>
                </section>

                <div>
                    <div class=\"barrerosebot\"></div>
                </div>

                {#PARTIE CONTACT - PARTIE CONTACT - PARTIE CONTACT#}

                <section class=\"container mt-5\">

                    <article class=\"row\">
                        <div class=\"offset-md-2 col-md-4 col-6\">
                            <h2 class=\"bigtitle contact mt-0\">Contact:</h2>
                            <p>
                                Camping De La Jamonière
                                <br>
                                <br>
                                \"Les Amis de la Forêt\"
                                <br>
                                <br>
                                129 route de la Bironnière
                                <br>
                                85200 MERVENT
                                <br>
                            </p>
                        </div>

                        <div class=\"col-md-6 d-none\"></div>

                        <div class=\"offset-md-0 col-md-4 col-6\">
                            <h2 class=\"bigtitle contact mt-1\">Tél :</h2>
                            <p>02 51 00 26 29 / 06 20 17 18 54</p>

                            <div class=\"col-md-6\"></div>

                            {#<div class=\"row\" style=\"height: 10px\">
                                <div style=\"width: 10%; margin: 0 auto;\">
                                    <a class=\"bouton\" href=\"#slide3\">&raquo;</a>
                                </div>
                            </div>#}

                            <h2 class=\"bigtitle contact mt-0\" id=\"slide3\">E-mail :</h2>
                            <p class=\"mail\">contact@camping-jamoniere.com</p>
                        </div>
                    </article>
                </section>

                {#PARTIE IMAGES - PARTIE IMAGES - PARTIE IMAGES#}

                <section class=\"picline\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <img src=\"{{ asset ('assets/img/lac2.png') }}\" alt=\"lac\" class=\"imgfluid  p-0 col-3\">
                            <img src=\"{{ asset ('assets/img/mobilhome_interieur.png') }}\" alt=\"interieur de mobil-home\"
                                 class=\"imgfluid p-0 col-3\">
                            <img src=\"{{ asset ('assets/img/sanitaires.png') }}\" alt=\"sanitaires\"
                                 class=\"imgfluid  p-0 col-3\">
                            <img src=\"{{ asset ('assets/img/tentes.png') }}\" alt=\"tentes\" class=\"imgfluid  p-0 col-3\">
                        </div>
                    </div>
                </section>
                {#/MAIN#}
            </div>
    </main>
{% endblock %}
", "reservation/choixemplacement.html.twig", "/Applications/MAMP/htdocs/camping_project/templates/reservation/choixemplacement.html.twig");
    }
}
