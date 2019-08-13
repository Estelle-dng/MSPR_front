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

/* vitrine/proximite.html.twig */
class __TwigTemplate_de17e90e97bb13dfedb11f87932f9f20190df93906c49bcd27282492a1769d7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/proximite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/proximite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/proximite.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vitrine/contact.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1 class=\"bigtitle m-2\">À PROXIMITÉ</h1>
                    <h3 class=\"m-1 h6 ml-4 mb-2\">Idéalement situé, le camping de la Jamonière se trouve à proximité de nombreuses acivités telles que :</h3>
                    <ul>
                        <li>La fôret de Mervent de  5.000 ha<span class=\"infos\">(randonnée pédestre, équestre, VTT)</span></li>
                        <li>L'éco-musée des \"Amis de la fôret\"</li>
                        <li>Un rocher d'escalade<span class=\"infos\">(Pierre-Blanche</span></li>
                        <li>Une base de loisirs, nautisme et plain air</li>
                        <li>Un parc d'attractions<span class=\"infos\">Parc de Pierre-Brune</span></li>
                        <li>Un parc animalier<span class=\"infos\">Natur'Zoo</span></li>
                        <li>La grotte du Père Montfort</li>
                        <li>Des villages classés<span class=\"infos\">(Vouvant, Foussais-Payré,..)</span></li>
                        <li>Des animations estivales à Fontenay-le-Comte<span class=\"infos\">(15 min)</span></li>
                        <li>L'abbaye de Maillezais et l'abbaye royale de Nieul s/ l'Autize<span class=\"infos\"></span></li>
                    </ul>
                    <div>
                        <div style=\"margin:  20px auto; border-bottom: rgb(230, 186, 172) solid 3px;\"></div>
                    </div>
                    <p>Le camping de la Jamonière se situe également à proximité d'une supérette (dans le bourg à 3km) et de nombreux autres services</p>
                    <div>
                        <div style=\"margin:  20px auto; border-bottom: rgb(230, 186, 172) solid 3px;\"></div>
                    </div>
                    <p style=\"font-size: small\">Pour plus d'informations sur les lieux touristiques de Vendée, consultez le site internet de l'Office de Tourisme de Fontenay-le-compte</p>
                </div>
                <div class=\"offset-md-1 col-md-5\">
                    <h1 class=\"bigtitle m-2\">AUX ALENTOURS</h1>
                    <ul>
                        <li>Le parc du Puy du Fou <span class=\"infos\">(env. 50 min)</span></li>
                        <li>L'océan Atlantique<span class=\"infos\">(env. 1h)</span></li>
                        <li>Le port de la Rochelle<span class=\"infos\">(env. 1h)</span></li>
                        <li>Le marais Poitevin<span class=\"infos\">(env. 30min</span></li>
                        <li>Le par du Futuroscope<span class=\"infos\">(env. 1h15)</span></li>
                    </ul>
                    <iframe class=\"d-none d-md-block\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.5909340516955!2d-0.7345560488431175!3d46.5359959790258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4806e73faa2891c9%3A0x9446fbf7d12eed92!2sCamping+de+la+Jamoni%C3%A8re!5e0!3m2!1sfr!2sfr!4v1563906386289!5m2!1sfr!2sfr\" width=\"400\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>        </div>

            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/proximite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"{{ asset ('assets/css/vitrine/contact.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

    {% block main %}
        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h1 class=\"bigtitle m-2\">À PROXIMITÉ</h1>
                    <h3 class=\"m-1 h6 ml-4 mb-2\">Idéalement situé, le camping de la Jamonière se trouve à proximité de nombreuses acivités telles que :</h3>
                    <ul>
                        <li>La fôret de Mervent de  5.000 ha<span class=\"infos\">(randonnée pédestre, équestre, VTT)</span></li>
                        <li>L'éco-musée des \"Amis de la fôret\"</li>
                        <li>Un rocher d'escalade<span class=\"infos\">(Pierre-Blanche</span></li>
                        <li>Une base de loisirs, nautisme et plain air</li>
                        <li>Un parc d'attractions<span class=\"infos\">Parc de Pierre-Brune</span></li>
                        <li>Un parc animalier<span class=\"infos\">Natur'Zoo</span></li>
                        <li>La grotte du Père Montfort</li>
                        <li>Des villages classés<span class=\"infos\">(Vouvant, Foussais-Payré,..)</span></li>
                        <li>Des animations estivales à Fontenay-le-Comte<span class=\"infos\">(15 min)</span></li>
                        <li>L'abbaye de Maillezais et l'abbaye royale de Nieul s/ l'Autize<span class=\"infos\"></span></li>
                    </ul>
                    <div>
                        <div style=\"margin:  20px auto; border-bottom: rgb(230, 186, 172) solid 3px;\"></div>
                    </div>
                    <p>Le camping de la Jamonière se situe également à proximité d'une supérette (dans le bourg à 3km) et de nombreux autres services</p>
                    <div>
                        <div style=\"margin:  20px auto; border-bottom: rgb(230, 186, 172) solid 3px;\"></div>
                    </div>
                    <p style=\"font-size: small\">Pour plus d'informations sur les lieux touristiques de Vendée, consultez le site internet de l'Office de Tourisme de Fontenay-le-compte</p>
                </div>
                <div class=\"offset-md-1 col-md-5\">
                    <h1 class=\"bigtitle m-2\">AUX ALENTOURS</h1>
                    <ul>
                        <li>Le parc du Puy du Fou <span class=\"infos\">(env. 50 min)</span></li>
                        <li>L'océan Atlantique<span class=\"infos\">(env. 1h)</span></li>
                        <li>Le port de la Rochelle<span class=\"infos\">(env. 1h)</span></li>
                        <li>Le marais Poitevin<span class=\"infos\">(env. 30min</span></li>
                        <li>Le par du Futuroscope<span class=\"infos\">(env. 1h15)</span></li>
                    </ul>
                    <iframe class=\"d-none d-md-block\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.5909340516955!2d-0.7345560488431175!3d46.5359959790258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4806e73faa2891c9%3A0x9446fbf7d12eed92!2sCamping+de+la+Jamoni%C3%A8re!5e0!3m2!1sfr!2sfr!4v1563906386289!5m2!1sfr!2sfr\" width=\"400\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>        </div>

            </div>
        </div>
    {% endblock %}", "vitrine/proximite.html.twig", "/Applications/MAMP/htdocs/Symfony/camping/templates/vitrine/proximite.html.twig");
    }
}
