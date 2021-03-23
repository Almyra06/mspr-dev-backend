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

/* accueil/index.html.twig */
class __TwigTemplate_b778d4a40fb5b9b2ac424dc0a30866d51ae96405cd835ded9454c7c9aa05a105 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        echo "Hello AccueilController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<style type=\"text/css\">
\t\tcaption/* Titre du tableau */
\t\t{
\t\t\tmargin: auto auto 20px; /* Centre le titre du tableau */
\t\t\tfont-family: Arial, Times, \"Times New Roman\", serif;
\t\t\tfont-weight: bold;
\t\t\tfont-size: 1.2em;
\t\t\tcolor: #009900; /* Pour éviter que le titre ne soit trop collé au tableau en-dessous */
\t\t}

\t\ttable/* Le tableau en lui-même */
\t\t{
\t\t\tmargin: auto; /* Centre le tableau */
\t\t\tborder: 4px outset green; /* Bordure du tableau avec effet 3D (outset) */
\t\t\tborder-collapse: collapse; /* Colle les bordures entre elles */
\t\t\twidth: 100%;
\t\t}
\t\tth/* Les cellules d'en-tête */
\t\t{
\t\t\tbackground-color: #006600;
\t\t\tcolor: white;
\t\t\tfont-size: 1.1em;
\t\t\tfont-family: Arial, \"Arial Black\", Times, \"Times New Roman\", serif;
\t\t\tborder: 1px solid red;
\t\t}

\t\ttd/* Les cellules normales */
\t\t{
\t\t\tfont-size: 0.8em;
\t\t\tborder: 1px solid black;
\t\t\tfont-family: Verdana, \"Trebuchet MS\", Times, \"Times New Roman\", serif;
\t\t\ttext-align: center; /* Tous les textes des cellules seront centrés*/
\t\t\tpadding: 5px; /* Petite marge intérieure aux cellules pour éviter que le texte touche les bordures */
\t\t\theight: 25px;
\t\t\twidth: 200px;
\t\t}
\t\ttd.time {
\t\t\tfont-size: 1em;
\t\t\theight: 50px;
\t\t\twidth: 100px;
\t\t}
\t</style>


\t<h1>Bienvenue au Festival LiveEvents</h1>
\tRetrouvez vos artistes préféré en live
\t<br/><br/>
\t<h3>ici ce placera l'alerte</h3>
\t<br/><br/>
\t<h3>ici ce placera le concert</h3>
\t<title>Mon super emploi du temps</title>


\t<label>Selectionnez une date</label>
\t<div class=\"card\" style=\"width: 18rem;\">
\t\t<select name=\"pets\" id=\"pet-select\">
\t\t\t<option value=\"jour1\">jour1</option>
\t\t\t<option value=\"jour2\">Jour2</option>
\t\t\t<option value=\"jour3\">Jour3</option>
\t\t</select>
\t</div>

\t<table>
\t\t<tr>
\t\t\t<th>heure</th>
\t\t\t<th>concert</th>
\t\t</tr>

\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concerts"]) || array_key_exists("concerts", $context) ? $context["concerts"] : (function () { throw new RuntimeError('Variable "concerts" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["concert"]) {
            // line 80
            echo "\t\t\t<tr>

\t\t\t\t<td class=\"\\\"time\\\"\" rowspan=\"\\\"2\\\"\">
\t\t\t\t\t<br/>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horaireDebut", [], "any", false, false, false, 83), "H:i"), "html", null, true);
            echo "
                    <br/>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horaireFin", [], "any", false, false, false, 84), "H:i"), "html", null, true);
            echo "</td>

\t\t\t\t<td>
\t\t\t\t\t";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "groupe", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
            echo "<br/>
\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "duree", [], "any", false, false, false, 88), "html", null, true);
            echo "<br/>
\t\t\t\t\t
\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "emplacement", [], "any", false, false, false, 90), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t</tr>
\t</table>

\t<br/><br/>
\t<h3>ici ce placera le lien vers la boutique</h3>
\t<a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("live_events_Boutique");
        echo "\" class=\"btn btn-primary-outline sensitive\">
\t\tAller à la boutique
\t</a>
\t<br/><br/>
\t<h3>ici ce placera la map interactive</h3>
\t<iframe src=\"https://www.google.com/maps/d/embed?mid=1YOhzjaL2tNn8QyeHFogBDwSxJG0pR64H\" width=\"640\" height=\"480\"></iframe>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 98,  220 => 93,  211 => 90,  206 => 88,  202 => 87,  196 => 84,  192 => 83,  187 => 80,  183 => 79,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccueilController!
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" type=\"text/css\"/>
{% endblock %}

{% block body %}
\t<style type=\"text/css\">
\t\tcaption/* Titre du tableau */
\t\t{
\t\t\tmargin: auto auto 20px; /* Centre le titre du tableau */
\t\t\tfont-family: Arial, Times, \"Times New Roman\", serif;
\t\t\tfont-weight: bold;
\t\t\tfont-size: 1.2em;
\t\t\tcolor: #009900; /* Pour éviter que le titre ne soit trop collé au tableau en-dessous */
\t\t}

\t\ttable/* Le tableau en lui-même */
\t\t{
\t\t\tmargin: auto; /* Centre le tableau */
\t\t\tborder: 4px outset green; /* Bordure du tableau avec effet 3D (outset) */
\t\t\tborder-collapse: collapse; /* Colle les bordures entre elles */
\t\t\twidth: 100%;
\t\t}
\t\tth/* Les cellules d'en-tête */
\t\t{
\t\t\tbackground-color: #006600;
\t\t\tcolor: white;
\t\t\tfont-size: 1.1em;
\t\t\tfont-family: Arial, \"Arial Black\", Times, \"Times New Roman\", serif;
\t\t\tborder: 1px solid red;
\t\t}

\t\ttd/* Les cellules normales */
\t\t{
\t\t\tfont-size: 0.8em;
\t\t\tborder: 1px solid black;
\t\t\tfont-family: Verdana, \"Trebuchet MS\", Times, \"Times New Roman\", serif;
\t\t\ttext-align: center; /* Tous les textes des cellules seront centrés*/
\t\t\tpadding: 5px; /* Petite marge intérieure aux cellules pour éviter que le texte touche les bordures */
\t\t\theight: 25px;
\t\t\twidth: 200px;
\t\t}
\t\ttd.time {
\t\t\tfont-size: 1em;
\t\t\theight: 50px;
\t\t\twidth: 100px;
\t\t}
\t</style>


\t<h1>Bienvenue au Festival LiveEvents</h1>
\tRetrouvez vos artistes préféré en live
\t<br/><br/>
\t<h3>ici ce placera l'alerte</h3>
\t<br/><br/>
\t<h3>ici ce placera le concert</h3>
\t<title>Mon super emploi du temps</title>


\t<label>Selectionnez une date</label>
\t<div class=\"card\" style=\"width: 18rem;\">
\t\t<select name=\"pets\" id=\"pet-select\">
\t\t\t<option value=\"jour1\">jour1</option>
\t\t\t<option value=\"jour2\">Jour2</option>
\t\t\t<option value=\"jour3\">Jour3</option>
\t\t</select>
\t</div>

\t<table>
\t\t<tr>
\t\t\t<th>heure</th>
\t\t\t<th>concert</th>
\t\t</tr>

\t\t{% for concert in concerts %}
\t\t\t<tr>

\t\t\t\t<td class=\"\\\"time\\\"\" rowspan=\"\\\"2\\\"\">
\t\t\t\t\t<br/>{{ concert.horaireDebut|date('H:i')}}
                    <br/>{{ concert.horaireFin|date('H:i')}}</td>

\t\t\t\t<td>
\t\t\t\t\t{{ concert.groupe.nom }}<br/>
\t\t\t\t\t{{ concert.duree }}<br/>
\t\t\t\t\t
\t\t\t\t\t{{ concert.emplacement }}
\t\t\t\t</td>
\t\t\t{% endfor %}
\t\t</tr>
\t</table>

\t<br/><br/>
\t<h3>ici ce placera le lien vers la boutique</h3>
\t<a href=\"{{ path('live_events_Boutique') }}\" class=\"btn btn-primary-outline sensitive\">
\t\tAller à la boutique
\t</a>
\t<br/><br/>
\t<h3>ici ce placera la map interactive</h3>
\t<iframe src=\"https://www.google.com/maps/d/embed?mid=1YOhzjaL2tNn8QyeHFogBDwSxJG0pR64H\" width=\"640\" height=\"480\"></iframe>

{% endblock %}
", "accueil/index.html.twig", "C:\\Users\\Willi\\Google Drive\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend\\templates\\accueil\\index.html.twig");
    }
}
