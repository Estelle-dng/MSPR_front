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

/* vitrine/contact.html.twig */
class __TwigTemplate_808c5a65996cd3a182836076b7769305b9af50ce5361182ee8e13e836fcafa88 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/contact.html.twig", 1);
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
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-12\">

                    <h1 class=\"bigtitle\">NOUS CONTACTER</h1>

                    <form>
                        <div class=\"form-group\">
                            <label for=\"mail\">Email</label>
                            <input class=\"form-control\" type=\"email\" id=\"mail\" name=\"mail\" placeholder=\"Votre Email\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"pseudo\">Username</label>
                            <input  class=\"form-control\" type=\"text\" id=\"pseudo\" name=\"pseudo\" placeholder=\"Votre nom\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"titre\">Titre du mail</label><br>
                            <input class=\"form-control\" type=\"text\" id=\"titre\" name=\"titre\" placeholder=\"Titre de votre mail\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"mailcontent\">Contenu de votre Email</label><br>
                            <textarea class=\"form-control\" rows=\"5\" id=\"mailcontent\" name=\"mailcontent\" placeholder=\"Ecriver votre demande/remarque\" style=\"width: 100%;\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
                    </form>


                </div>
                <div class=\"offset-md-1 col-md-5 col-12 mt-3\">
                    <iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.5909340516955!2d-0.7345560488431175!3d46.5359959790258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4806e73faa2891c9%3A0x9446fbf7d12eed92!2sCamping+de+la+Jamoni%C3%A8re!5e0!3m2!1sfr!2sfr!4v1563906386289!5m2!1sfr!2sfr\" width=\"400\" height=\"600\" frameborder=\"0\" style=\"border:0;width: 100%; height: 100%\" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/contact.html.twig";
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
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-12\">

                    <h1 class=\"bigtitle\">NOUS CONTACTER</h1>

                    <form>
                        <div class=\"form-group\">
                            <label for=\"mail\">Email</label>
                            <input class=\"form-control\" type=\"email\" id=\"mail\" name=\"mail\" placeholder=\"Votre Email\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"pseudo\">Username</label>
                            <input  class=\"form-control\" type=\"text\" id=\"pseudo\" name=\"pseudo\" placeholder=\"Votre nom\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"titre\">Titre du mail</label><br>
                            <input class=\"form-control\" type=\"text\" id=\"titre\" name=\"titre\" placeholder=\"Titre de votre mail\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"mailcontent\">Contenu de votre Email</label><br>
                            <textarea class=\"form-control\" rows=\"5\" id=\"mailcontent\" name=\"mailcontent\" placeholder=\"Ecriver votre demande/remarque\" style=\"width: 100%;\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
                    </form>


                </div>
                <div class=\"offset-md-1 col-md-5 col-12 mt-3\">
                    <iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.5909340516955!2d-0.7345560488431175!3d46.5359959790258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4806e73faa2891c9%3A0x9446fbf7d12eed92!2sCamping+de+la+Jamoni%C3%A8re!5e0!3m2!1sfr!2sfr!4v1563906386289!5m2!1sfr!2sfr\" width=\"400\" height=\"600\" frameborder=\"0\" style=\"border:0;width: 100%; height: 100%\" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    {% endblock %}", "vitrine/contact.html.twig", "/Applications/MAMP/htdocs/Symfony/camping/templates/vitrine/contact.html.twig");
    }
}
