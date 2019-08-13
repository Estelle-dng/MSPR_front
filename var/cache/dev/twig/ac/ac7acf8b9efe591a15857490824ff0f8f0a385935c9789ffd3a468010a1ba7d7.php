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

/* vitrine/faq.html.twig */
class __TwigTemplate_0504b5e2daa1afef04dd23a59a9082f2d589b40a2232bbcafd28a70361fd653f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vitrine/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vitrine/faq.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vitrine/faq.css"), "html", null, true);
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
        echo "    <main>
        <div class=\"parent-container container\">
            <ul class=\"faq\">
                <li>
                    <h3 class=\"question\">Les animaux sont-ils acceptés dans le camping ?
                        <div class=\"plus-minus-toggle collapsed\"></div>
                    </h3>
                    <div class=\"answer\">
                        Les animaux de compagnie sont acceptés à l'intérieur du camping. Ils doivent être vaccinés et
                        tatoués (avec justificatifs), tenus en laisse et ne doivent pas être laissés seuls en absence de
                        leur maître.
                    </div>
                </li>
                <li>
                    <h3 class=\"question\">Peut-on inviter des amis sur le site du camping ?
                        <div class=\"plus-minus-toggle collapsed\"></div>
                    </h3>
                    <div class=\"answer\">
                        Les campeurs recevant des visiteurs extérieurs doivent en informer la réception. Une redevance
                        par visiteur pourra être facturée. Les visiteurs sont sous la responsabilité des campeurs qui
                        les reçoivent.
                    </div>
                </li>
                <li>
                    <h3 class=\"question\">Où peut-on trouver une aire de vidange pour les camping-cars ?
                        <div class=\"plus-minus-toggle collapsed\"></div>
                    </h3>
                    <div class=\"answer\">
                        La commune de Mervent dispose d'une aire de service pour Camping-Car. Pour plus d'information,
                        contactez la Mairie.
                    </div>
                </li>
            </ul>
        </div>
    </main>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        // line 47
        echo "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script>
            \$( document ).ready(function()
            {
                \$('.faq li .question').click(function () {
                    \$(this).find('.plus-minus-toggle').toggleClass('collapsed');
                    \$(this).parent().toggleClass('active');
                });
            });
        </script>
    ";
        // line 58
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 58,  150 => 47,  148 => 46,  138 => 45,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

{% block stylesheets %}
    <link href=\"{{ asset ('assets/css/vitrine/faq.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

    {% block main %}
    <main>
        <div class=\"parent-container container\">
            <ul class=\"faq\">
                <li>
                    <h3 class=\"question\">Les animaux sont-ils acceptés dans le camping ?
                        <div class=\"plus-minus-toggle collapsed\"></div>
                    </h3>
                    <div class=\"answer\">
                        Les animaux de compagnie sont acceptés à l'intérieur du camping. Ils doivent être vaccinés et
                        tatoués (avec justificatifs), tenus en laisse et ne doivent pas être laissés seuls en absence de
                        leur maître.
                    </div>
                </li>
                <li>
                    <h3 class=\"question\">Peut-on inviter des amis sur le site du camping ?
                        <div class=\"plus-minus-toggle collapsed\"></div>
                    </h3>
                    <div class=\"answer\">
                        Les campeurs recevant des visiteurs extérieurs doivent en informer la réception. Une redevance
                        par visiteur pourra être facturée. Les visiteurs sont sous la responsabilité des campeurs qui
                        les reçoivent.
                    </div>
                </li>
                <li>
                    <h3 class=\"question\">Où peut-on trouver une aire de vidange pour les camping-cars ?
                        <div class=\"plus-minus-toggle collapsed\"></div>
                    </h3>
                    <div class=\"answer\">
                        La commune de Mervent dispose d'une aire de service pour Camping-Car. Pour plus d'information,
                        contactez la Mairie.
                    </div>
                </li>
            </ul>
        </div>
    </main>
    {% endblock %}

    {% block javascripts %}
    {#Script DropDown#}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script>
            \$( document ).ready(function()
            {
                \$('.faq li .question').click(function () {
                    \$(this).find('.plus-minus-toggle').toggleClass('collapsed');
                    \$(this).parent().toggleClass('active');
                });
            });
        </script>
    {#/Script Dropdown#}
    {% endblock %}
", "vitrine/faq.html.twig", "/Applications/MAMP/htdocs/Symfony/camping/templates/vitrine/faq.html.twig");
    }
}
