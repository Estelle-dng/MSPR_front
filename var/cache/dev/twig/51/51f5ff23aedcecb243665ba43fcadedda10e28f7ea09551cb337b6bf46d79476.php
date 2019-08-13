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

/* vitrine/accueil.html.twig */
class __TwigTemplate_91c26d196740e025d65ca76adefad72a7c389a4b9db86b33a08615df6578973d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/accueil.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vitrine/accueil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "        <div class=\"imgNavbar\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/emplacement.png"), "html", null, true);
        echo "\" alt=\"emplacement\" class=\"img\">
        </div>

        <div class=\"whiteveil\"></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "
        ";
        // line 20
        echo "
        <hgroup class=\"hgroupaccueil\">
            <h1 style=\"font-weight: bold; font-size: 70px\">CAMPING <br> LA  JAMONIÈRE</h1>
            <h2 style=\"font-weight: lighter; font-size: 3rem;\">MERVENT</h2>
            <h3 style=\"font-size: 25px;\">Mobil-homes, chalets, tentes, camping-car</h3>
            <h4 style=\"font-weight: bolder\">V  e  n  d  é  e</h4>
        </hgroup>

        <main>
            ";
        // line 30
        echo "            <div class=\"bienvenue container\">
                <div class=\"row\">
                    <div class=\"col-4 offset-1 col-md-3 offset-md-7 logomain\">
                        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-02.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-fluid\">
                    </div>
                    <div class=\"col-6 col-md-4 offset-md-7\">
                        <p class=\"text\">Bienvenue au camping de la Jamonière à Mervent !
                            <br>
                            Ouverture le 6 Avril 2019 !
                            Jusqu’au 30 Septembre 2019
                        </p>
                    </div>
                </div>
            </div>


            ";
        // line 49
        echo "
            <div class=\"greensquare\"></div>



            <div>
                <div class=\"barrerose mb-5 pb-5\" id=\"article1\"></div>
            </div>

            ";
        // line 59
        echo "
            <section>
                <article class=\"container-fluid my-4\">
                    <h1 class=\"bigtitle offset-1\"><b>INFORMATIONS</b> GÉNÉRALES</h1>

                    <div class=\"row\">
                        <div class=\"col-md-5 offset-md-1 col-10 offset-1 cadreimg\">
                            <img alt=\"pêcheurs\" class=\"img-fluid imgarticle\"
                                 src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pecheur.png"), "html", null, true);
        echo "\">
                            <h2 class=\"gradient1\">À 50 MIN DU PUY DU FOU</h2>
                        </div>
                        <div class=\"col-md-5 offset-md-0 col-10 offset-1\">
                            <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met à
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

                <div class=\"pinksquaremain\"></div>


                <article class=\"container-fluid my-4\">
                    <h1 class=\"bigtitle offset-2\" id=\"article1\"><b>7 HA DE SITE</b> dont:</h1>

                    <div class=\"row\">
                        <div class=\"col-md-4 offset-md-2 col-10 offset-1 cadreimg\">
                            <img alt=\"lac\" class=\"img-fluid imgarticle\"
                                 src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lac_barques.jpg"), "html", null, true);
        echo "\">
                            <div class=\"gradient2\">
                                <h2 class=\"etang\">AVEC UN ÉTANG DE PÊCHE</h2>
                                <p class=\"infos\">Gratuité pour 1 ligne</p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 109
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-4 offset-md-2 col-10 offset-1\" id=\"slide2\">
                            <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met à votre
                                disposition:</h2>
                            <ul class=\"listinfo\">
                                <li>Un snack bar (repas de groupe sur commande et location de salle possible)</li>
                                <li>Un étang de pêche (gratuité pour 1 ligne aux client du camping)</li>
                                <li>L'éco-musée \"Les amis de la forêt\" avec visites guidées sur réservation</li>
                            </ul>
                            <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Proximité");
        echo "\"><span class=\"infos\">Plus d'infos &#x2794;</span></a>
                        </div>
                    </div>
                </article>
            </section>

            <div class=\"imgSide\">
                <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pecheur.png"), "html", null, true);
        echo "\" alt=\"emplacement\" class=\"imgbot\">
            </div>
            <div class=\"whiteveilside\"></div>

            <div>
                <div class=\"barrerosebot\"></div>
            </div>

            ";
        // line 135
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
        // line 168
        echo "
                        <h2 class=\"bigtitle contact mt-0\" id=\"slide3\">E-mail :</h2>
                        <p>contact@camping-jamoniere.com</p>
                    </div>
                </article>
            </section>

            ";
        // line 176
        echo "
            <section style=\"margin-top: 100px\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lac2.png"), "html", null, true);
        echo "\" alt=\"lac\" class=\"imgfluid  p-0 col-3\">
                        <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mobilhome_interieur.png"), "html", null, true);
        echo "\" alt=\"interieur de mobil-home\"
                             class=\"imgfluid p-0 col-3\">
                        <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sanitaires.png"), "html", null, true);
        echo "\" alt=\"sanitaires\"
                             class=\"imgfluid  p-0 col-3\">
                        <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tentes.png"), "html", null, true);
        echo "\" alt=\"tentes\" class=\"imgfluid  p-0 col-3\">
                    </div>
                </div>
            </section>
            ";
        // line 190
        echo "        </main>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 190,  314 => 185,  309 => 183,  304 => 181,  300 => 180,  294 => 176,  285 => 168,  255 => 135,  244 => 126,  234 => 119,  222 => 109,  211 => 98,  177 => 67,  167 => 59,  156 => 49,  140 => 33,  135 => 30,  124 => 20,  121 => 18,  111 => 17,  96 => 10,  93 => 9,  83 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"{{ asset ('assets/css/vitrine/accueil.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

    {#HEADER#}
    {% block header %}
        <div class=\"imgNavbar\">
            <img src=\"{{ asset ('assets/img/emplacement.png') }}\" alt=\"emplacement\" class=\"img\">
        </div>

        <div class=\"whiteveil\"></div>
    {% endblock %}
    {#/HEADER#}

    {% block main %}

        {#HEADER ACCUEIL - HEADER ACCUEIL - HEADER ACCUEIL#}

        <hgroup class=\"hgroupaccueil\">
            <h1 style=\"font-weight: bold; font-size: 70px\">CAMPING <br> LA  JAMONIÈRE</h1>
            <h2 style=\"font-weight: lighter; font-size: 3rem;\">MERVENT</h2>
            <h3 style=\"font-size: 25px;\">Mobil-homes, chalets, tentes, camping-car</h3>
            <h4 style=\"font-weight: bolder\">V  e  n  d  é  e</h4>
        </hgroup>

        <main>
            {#MAIN#}
            <div class=\"bienvenue container\">
                <div class=\"row\">
                    <div class=\"col-4 offset-1 col-md-3 offset-md-7 logomain\">
                        <img src=\"{{ asset ('assets/img/logo-02.png') }}\" alt=\"logo\" class=\"img-fluid\">
                    </div>
                    <div class=\"col-6 col-md-4 offset-md-7\">
                        <p class=\"text\">Bienvenue au camping de la Jamonière à Mervent !
                            <br>
                            Ouverture le 6 Avril 2019 !
                            Jusqu’au 30 Septembre 2019
                        </p>
                    </div>
                </div>
            </div>


            {#<div style=\"width: 10%; margin: 0 auto;\">
                <a class=\"bouton\" href=\"#article1\">&raquo;</a>
            </div>#}

            <div class=\"greensquare\"></div>



            <div>
                <div class=\"barrerose mb-5 pb-5\" id=\"article1\"></div>
            </div>

            {#PARTIE INFO - PARTIE INFOS - PARTIE INFOS#}

            <section>
                <article class=\"container-fluid my-4\">
                    <h1 class=\"bigtitle offset-1\"><b>INFORMATIONS</b> GÉNÉRALES</h1>

                    <div class=\"row\">
                        <div class=\"col-md-5 offset-md-1 col-10 offset-1 cadreimg\">
                            <img alt=\"pêcheurs\" class=\"img-fluid imgarticle\"
                                 src=\"{{ asset ('assets/img/pecheur.png') }}\">
                            <h2 class=\"gradient1\">À 50 MIN DU PUY DU FOU</h2>
                        </div>
                        <div class=\"col-md-5 offset-md-0 col-10 offset-1\">
                            <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met à
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

                <div class=\"pinksquaremain\"></div>


                <article class=\"container-fluid my-4\">
                    <h1 class=\"bigtitle offset-2\" id=\"article1\"><b>7 HA DE SITE</b> dont:</h1>

                    <div class=\"row\">
                        <div class=\"col-md-4 offset-md-2 col-10 offset-1 cadreimg\">
                            <img alt=\"lac\" class=\"img-fluid imgarticle\"
                                 src=\"{{ asset ('assets/img/lac_barques.jpg') }}\">
                            <div class=\"gradient2\">
                                <h2 class=\"etang\">AVEC UN ÉTANG DE PÊCHE</h2>
                                <p class=\"infos\">Gratuité pour 1 ligne</p>
                            </div>
                        </div>
                    </div>

                    {#<div class=\"row\" style=\"width: 10%; margin: 0 auto;\">
                        <a class=\"bouton\" href=\"#slide2\">&raquo;</a>
                    </div>#}

                    <div class=\"row\">
                        <div class=\"col-md-4 offset-md-2 col-10 offset-1\" id=\"slide2\">
                            <h2 class=\"smalltitle\">En bordure d'étang et semi-obragé, le camping de la Jamonière met à votre
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

            <div class=\"imgSide\">
                <img src=\"{{ asset ('assets/img/pecheur.png') }}\" alt=\"emplacement\" class=\"imgbot\">
            </div>
            <div class=\"whiteveilside\"></div>

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
                        <p>contact@camping-jamoniere.com</p>
                    </div>
                </article>
            </section>

            {#PARTIE IMAGES - PARTIE IMAGES - PARTIE IMAGES#}

            <section style=\"margin-top: 100px\">
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
        </main>
    {% endblock %}", "vitrine/accueil.html.twig", "/Applications/MAMP/htdocs/Symfony/camping/templates/vitrine/accueil.html.twig");
    }
}
