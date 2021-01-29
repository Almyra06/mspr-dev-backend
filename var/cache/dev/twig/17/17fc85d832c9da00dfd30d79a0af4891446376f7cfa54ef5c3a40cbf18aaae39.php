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
class __TwigTemplate_e81dbd8b31bc83ece23c600961402db64e00c02c6eec5515f106fd044b83d728 extends Template
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

        echo "Hello AccueilController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <style type=\"text/css\">
            caption /* Titre du tableau */
            {
            margin: auto; /* Centre le titre du tableau */
            font-family: Arial, Times, \"Times New Roman\", serif;
            font-weight: bold;
            font-size: 1.2em;
            color: #009900;
            margin-bottom: 20px; /* Pour éviter que le titre ne soit trop collé au tableau en-dessous */
            }
    
            table /* Le tableau en lui-même */
            {
            margin: auto; /* Centre le tableau */
            border: 4px outset green; /* Bordure du tableau avec effet 3D (outset) */
            border-collapse: collapse; /* Colle les bordures entre elles */
            width:100%;
            }
            th /* Les cellules d'en-tête */
            {
            background-color: #006600;
            color: white;
            font-size: 1.1em;
            font-family: Arial, \"Arial Black\", Times, \"Times New Roman\", serif;
            border:1px solid red;
            }
    
            td /* Les cellules normales */
            {
                font-size:0.8em;
            border: 1px solid black;
            font-family: Verdana, \"Trebuchet MS\", Times, \"Times New Roman\", serif;
            text-align: center; /* Tous les textes des cellules seront centrés*/
            padding: 5px; /* Petite marge intérieure aux cellules pour éviter que le texte touche les bordures */
            height:25px;
            width:200px;
            }
            td.time
            {
                font-size:1em;
                height:50px;
                width:100px;
            }
</style>



    <h1>Bienvenue au Festival LiveEvents</h1>
    Retrouvez vos artistes préféré en live
    <br /><br />
    <h3>ici ce placera l'alerte</h3>
    <br /><br />
    <h3>ici ce placera le programme</h3>
    <title>Mon super emploi du temps</title>
        

    <label>Selectionnez une date</label>
    <div class=\"card\" style=\"width: 18rem;\">
        <select name=\"pets\" id=\"pet-select\">
            <option value=\"jour1\">jour1</option>
            <option value=\"jour2\">Jour2</option>
            <option value=\"jour3\">Jour3</option>
        </select>
    </div>

    <table>
        <tr><th>heure</th>
        <th>jour</th>
        </tr>
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 80
            echo "        <tr>
                    <td class=\\\"time\\\" rowspan=\\\"2\\\"> ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "date_debut", [], "any", false, false, false, 81), "html", null, true);
            echo " <br />14h30</td>
                <td>    ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["programme"], "group_id", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82), "html", null, true);
            echo " <br />
                        ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "duree", [], "any", false, false, false, 83), "html", null, true);
            echo "<br />
                        ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "emplacement", [], "any", false, false, false, 84), "html", null, true);
            echo "
                </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tr>
    </table>

    <br /><br />
        <h3>ici ce placera le lien vers la boutique</h3>
    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("live_events_Boutique");
        echo "\" class=\"btn btn-primary-outline sensitive\" >
        Aller à la boutique
        </a>
        <br /><br />
    <h3>ici ce placera la map interactive</h3>
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.869543450512!2d2.36323451591207!3d51.03703015280544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc8c6ba91d1801%3A0x2ddc9f6f60a56566!2sPatinoire%20Michel-Raffoux%20de%20Dunkerque!5e0!3m2!1sfr!2sfr!4v1611934368503!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>

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
        return array (  218 => 92,  211 => 87,  202 => 84,  198 => 83,  194 => 82,  190 => 81,  187 => 80,  183 => 79,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccueilController!{% endblock %}

{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    <style type=\"text/css\">
            caption /* Titre du tableau */
            {
            margin: auto; /* Centre le titre du tableau */
            font-family: Arial, Times, \"Times New Roman\", serif;
            font-weight: bold;
            font-size: 1.2em;
            color: #009900;
            margin-bottom: 20px; /* Pour éviter que le titre ne soit trop collé au tableau en-dessous */
            }
    
            table /* Le tableau en lui-même */
            {
            margin: auto; /* Centre le tableau */
            border: 4px outset green; /* Bordure du tableau avec effet 3D (outset) */
            border-collapse: collapse; /* Colle les bordures entre elles */
            width:100%;
            }
            th /* Les cellules d'en-tête */
            {
            background-color: #006600;
            color: white;
            font-size: 1.1em;
            font-family: Arial, \"Arial Black\", Times, \"Times New Roman\", serif;
            border:1px solid red;
            }
    
            td /* Les cellules normales */
            {
                font-size:0.8em;
            border: 1px solid black;
            font-family: Verdana, \"Trebuchet MS\", Times, \"Times New Roman\", serif;
            text-align: center; /* Tous les textes des cellules seront centrés*/
            padding: 5px; /* Petite marge intérieure aux cellules pour éviter que le texte touche les bordures */
            height:25px;
            width:200px;
            }
            td.time
            {
                font-size:1em;
                height:50px;
                width:100px;
            }
</style>



    <h1>Bienvenue au Festival LiveEvents</h1>
    Retrouvez vos artistes préféré en live
    <br /><br />
    <h3>ici ce placera l'alerte</h3>
    <br /><br />
    <h3>ici ce placera le programme</h3>
    <title>Mon super emploi du temps</title>
        

    <label>Selectionnez une date</label>
    <div class=\"card\" style=\"width: 18rem;\">
        <select name=\"pets\" id=\"pet-select\">
            <option value=\"jour1\">jour1</option>
            <option value=\"jour2\">Jour2</option>
            <option value=\"jour3\">Jour3</option>
        </select>
    </div>

    <table>
        <tr><th>heure</th>
        <th>jour</th>
        </tr>
            {% for programme in programmes %}
        <tr>
                    <td class=\\\"time\\\" rowspan=\\\"2\\\"> {{ programme.date_debut }} <br />14h30</td>
                <td>    {{ programme.group_id.nom }} <br />
                        {{ programme.duree }}<br />
                        {{ programme.emplacement }}
                </td>
            {% endfor %}
        </tr>
    </table>

    <br /><br />
        <h3>ici ce placera le lien vers la boutique</h3>
    <a href=\"{{ path('live_events_Boutique') }}\" class=\"btn btn-primary-outline sensitive\" >
        Aller à la boutique
        </a>
        <br /><br />
    <h3>ici ce placera la map interactive</h3>
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.869543450512!2d2.36323451591207!3d51.03703015280544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc8c6ba91d1801%3A0x2ddc9f6f60a56566!2sPatinoire%20Michel-Raffoux%20de%20Dunkerque!5e0!3m2!1sfr!2sfr!4v1611934368503!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>

{% endblock %}
", "accueil/index.html.twig", "D:\\vie perso\\ecole\\wis\\mspr back et front\\projet\\mspr-dev-backend\\templates\\accueil\\index.html.twig");
    }
}
