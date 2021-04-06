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

/* admin/index.html.twig */
class __TwigTemplate_71b240a052688bb4daad503808ce0f3c2100467ccf4d2719ff7ddd3e8f58bf6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Interface d'administration
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">

<h1 class=\"mt-5 mb-5\">Interface administrateur </h1>

<h4 class=\"mt-4 mb-4\">Gestion de la FAQ 
<a class=\"btn btn-primary btn-sm\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_faq");
        echo "\"><i class=\"fas fa-lg fa-cog\"></i>Gérer</a>
</h4>

<h4 class=\"mt-4 mb-4\">Gestion des messages 
<a class=\"btn btn-success ml-5\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_message_ajout");
        echo "\">Ajouter</a>
</h4>

<h5>Aperçu des messages en fonction de la priorité :</h5>
<i>Veuillez limiter les messages à 3 à la fois max !</i>
  

        <div class=\"w-auto linear-gradient\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-mdb-ride=\"carousel\">
                <div class=\"carousel-indicators mb-0 mt-3\">
                    ";
        // line 26
        $context["isFirst"] = true;
        // line 27
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 27, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 27, $this->source); })()), "priorite", [], "any", false, false, false, 27) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 27, $this->source); })()), "priorite", [], "any", false, false, false, 27)); }), 0, 3));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                    ";
            // line 28
            if ((0 === twig_compare((isset($context["isFirst"]) || array_key_exists("isFirst", $context) ? $context["isFirst"] : (function () { throw new RuntimeError('Variable "isFirst" does not exist.', 28, $this->source); })()), true))) {
                // line 29
                echo "
                        <a
                        type=\"button\"
                        data-mdb-target=\"#carouselExampleCaptions\"
                        data-mdb-slide-to=";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 33), "html", null, true);
                echo "
                        class=\"active \"
                        aria-current=\"true\"
                        aria-label=";
                // line 36
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 36)), "html", null, true);
                echo "
                        ></a>

                    ";
            } else {
                // line 40
                echo "
                        <a
                        type=\"button\"
                        data-mdb-target=\"#carouselExampleCaptions\"
                        data-mdb-slide-to=";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 44), "html", null, true);
                echo "
                        aria-current=\"true\"
                        aria-label=";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 46), "html", null, true);
                echo "
                        ></a>

                    ";
            }
            // line 50
            echo "                    ";
            $context["isFirst"] = false;
            // line 51
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </div>
                <div class=\"carousel-inner\">
                ";
        // line 54
        $context["isFirst"] = true;
        // line 55
        echo "                ";
        $context["i"] = 0;
        // line 56
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 56, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 56, $this->source); })()), "priorite", [], "any", false, false, false, 56) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 56, $this->source); })()), "priorite", [], "any", false, false, false, 56)); }), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo "   
                ";
            // line 57
            if ((0 === twig_compare((isset($context["isFirst"]) || array_key_exists("isFirst", $context) ? $context["isFirst"] : (function () { throw new RuntimeError('Variable "isFirst" does not exist.', 57, $this->source); })()), true))) {
                // line 58
                echo "
                    <div class=\"carousel-item active\">
                    ";
                // line 60
                $context["isFirst"] = true;
                // line 61
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_urgent", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\">
                            <div class=\"carousel-caption d-md-block position-static nopadding\">
                                <h2>";
                // line 63
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 63)), "html", null, true);
                echo "</h2>
                            </div>
                        </a>
                    </div>

                ";
            } else {
                // line 69
                echo "
                    <div class=\"carousel-item\">
\t\t\t\t\t\t\t<a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_urgent", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\">
                            <div class=\"carousel-caption d-md-block position-static nopadding\">
                                <h2>";
                // line 73
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 73)), "html", null, true);
                echo "</h2>
                            </div>
                        </a>
                    </div>
                
                ";
            }
            // line 79
            echo "                ";
            $context["isFirst"] = false;
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                </div>

            </div>
        </div>
<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Message</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Priorité</th>
      <th scope=\"col\">Actions</th>

    </tr>
  </thead>
  <tbody>
    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 100
            echo "    <tr>
      <th scope=\"row\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "</th>
      <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
      <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "description", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
      <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "priorite", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
      <td>
        <a class=\"btn btn-primary\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_message_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_message_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">Supprimer</a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "  </tbody>
</table>
</div>

<h4 class=\"mt-4 mb-4\">Gestion des programmes
  <a class=\"btn btn-success ml-5\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_ajout");
        echo "\">Ajouter</a>
</h4>

<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Date</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Heure</th>
      <th scope=\"col\">Lieu</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 133
            echo "    <tr>
      <th scope=\"row\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 134), "html", null, true);
            echo "</th>
      <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "date", [], "any", false, false, false, 135), "d/m/Y"), "html", null, true);
            echo "</td>
      <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "name", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
      <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "hours", [], "any", false, false, false, 137), "H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "location", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
      <td>
        <a class=\"btn btn-primary\" href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            echo "\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_programme_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\">Supprimer</a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "  </tbody>
</table>
</div>

<h4 class=\"mt-4 mb-4\">Gestion des concerts
  <a class=\"btn btn-success ml-5\" href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_concert_ajout");
        echo "\">Ajouter</a>
</h4>

<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Programme</th>
      <th scope=\"col\">Groupe</th>
      <th scope=\"col\">Début</th>
      <th scope=\"col\">Fin</th>
      <th scope=\"col\">Durée</th>
      <th scope=\"col\">Lieu</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concerts"]) || array_key_exists("concerts", $context) ? $context["concerts"] : (function () { throw new RuntimeError('Variable "concerts" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["concert"]) {
            // line 169
            echo "
    <tr>
      <th scope=\"row\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 171), "html", null, true);
            echo "</th>
      <td>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
            echo "(ID : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172), "html", null, true);
            echo ")</td>
      <td>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "groupe", [], "any", false, false, false, 173), "nom", [], "any", false, false, false, 173), "html", null, true);
            echo "</td>
      <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horairedebut", [], "any", false, false, false, 174), "H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 175
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horairefin", [], "any", false, false, false, 175), "H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "duree", [], "any", false, false, false, 176), "html", null, true);
            echo "</td>
      <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "emplacement", [], "any", false, false, false, 177), "html", null, true);
            echo "</td>
      <td>
        <a class=\"btn btn-primary\" href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_concert_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 179)]), "html", null, true);
            echo "\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_concert_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["concert"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            echo "\">Supprimer</a>
      </td>
      

    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "

        

  </tbody>
</table>
</div>

<h4 class=\"mt-4 mb-4\">Gestion des groupes
  <a class=\"btn btn-success ml-5\" href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_groupe_ajout");
        echo "\">Ajouter</a>
</h4>

<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Programme</th>
      <th scope=\"col\">Groupe</th>
      <th scope=\"col\">Actions</th>

    </tr>
  </thead>
  <tbody>
    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 210, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 211
            echo "
    <tr>
      <th scope=\"row\">";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 213), "html", null, true);
            echo "</th>
      <td>";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "nom", [], "any", false, false, false, 214), "html", null, true);
            echo "</td>
      <td>";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupe"], "stylemusique", [], "any", false, false, false, 215), "html", null, true);
            echo "</td>
      <td>
        <a class=\"btn btn-primary\" href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_groupe_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 217)]), "html", null, true);
            echo "\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_groupe_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 218)]), "html", null, true);
            echo "\">Supprimer</a>
      </td>

      

    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "

        

  </tbody>
</table>
</div>

</div>
\t\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 225,  523 => 218,  519 => 217,  514 => 215,  510 => 214,  506 => 213,  502 => 211,  498 => 210,  480 => 195,  469 => 186,  457 => 180,  453 => 179,  448 => 177,  444 => 176,  440 => 175,  436 => 174,  432 => 173,  426 => 172,  422 => 171,  418 => 169,  414 => 168,  393 => 150,  386 => 145,  376 => 141,  372 => 140,  367 => 138,  363 => 137,  359 => 136,  355 => 135,  351 => 134,  348 => 133,  344 => 132,  325 => 116,  318 => 111,  308 => 107,  304 => 106,  299 => 104,  295 => 103,  291 => 102,  287 => 101,  284 => 100,  280 => 99,  260 => 81,  254 => 80,  251 => 79,  242 => 73,  237 => 71,  233 => 69,  224 => 63,  218 => 61,  216 => 60,  212 => 58,  210 => 57,  203 => 56,  200 => 55,  198 => 54,  194 => 52,  180 => 51,  177 => 50,  170 => 46,  165 => 44,  159 => 40,  152 => 36,  146 => 33,  140 => 29,  138 => 28,  118 => 27,  116 => 26,  103 => 16,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Interface d'administration
{% endblock %}

{% block body %}
<div class=\"container\">

<h1 class=\"mt-5 mb-5\">Interface administrateur </h1>

<h4 class=\"mt-4 mb-4\">Gestion de la FAQ 
<a class=\"btn btn-primary btn-sm\" href=\"{{ path('admin_faq') }}\"><i class=\"fas fa-lg fa-cog\"></i>Gérer</a>
</h4>

<h4 class=\"mt-4 mb-4\">Gestion des messages 
<a class=\"btn btn-success ml-5\" href=\"{{ path('admin_message_ajout') }}\">Ajouter</a>
</h4>

<h5>Aperçu des messages en fonction de la priorité :</h5>
<i>Veuillez limiter les messages à 3 à la fois max !</i>
  

        <div class=\"w-auto linear-gradient\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-mdb-ride=\"carousel\">
                <div class=\"carousel-indicators mb-0 mt-3\">
                    {% set isFirst = true %}
                    {% for message in messages | sort((a, b) => b.priorite <=> a.priorite) | slice(0, 3) %} 
                    {% if isFirst == true %}

                        <a
                        type=\"button\"
                        data-mdb-target=\"#carouselExampleCaptions\"
                        data-mdb-slide-to={{ loop.index0 }}
                        class=\"active \"
                        aria-current=\"true\"
                        aria-label={{ message.message | upper }}
                        ></a>

                    {% else  %}

                        <a
                        type=\"button\"
                        data-mdb-target=\"#carouselExampleCaptions\"
                        data-mdb-slide-to={{ loop.index0 }}
                        aria-current=\"true\"
                        aria-label={{ message.message }}
                        ></a>

                    {% endif  %}
                    {% set isFirst = false %}
                    {% endfor %}
                </div>
                <div class=\"carousel-inner\">
                {% set isFirst = true %}
                {% set i = 0 %}
                {% for message in messages | sort((a, b) => b.priorite <=> a.priorite) | slice(0, 3) %}   
                {% if isFirst == true %}

                    <div class=\"carousel-item active\">
                    {% set isFirst = true %}
\t\t\t\t\t\t\t<a href=\"{{ path(\"message_urgent\", {id: message.id}) }}\">
                            <div class=\"carousel-caption d-md-block position-static nopadding\">
                                <h2>{{ message.message | upper  }}</h2>
                            </div>
                        </a>
                    </div>

                {% else %}

                    <div class=\"carousel-item\">
\t\t\t\t\t\t\t<a href=\"{{ path(\"message_urgent\", {id: message.id}) }}\">
                            <div class=\"carousel-caption d-md-block position-static nopadding\">
                                <h2>{{ message.message | upper  }}</h2>
                            </div>
                        </a>
                    </div>
                
                {% endif %}
                {% set isFirst = false %}
                {% endfor %}

                </div>

            </div>
        </div>
<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Message</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Priorité</th>
      <th scope=\"col\">Actions</th>

    </tr>
  </thead>
  <tbody>
    {% for message in messages %}
    <tr>
      <th scope=\"row\">{{ message.id }}</th>
      <td>{{ message.message }}</td>
      <td>{{ message.description }}</td>
      <td>{{ message.priorite }}</td>
      <td>
        <a class=\"btn btn-primary\" href=\"{{ path('admin_message_modification', {id: message.id}) }}\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"{{ path('admin_message_suppression', {id: message.id}) }}\">Supprimer</a>
      </td>
    </tr>
    {% endfor %}
  </tbody>
</table>
</div>

<h4 class=\"mt-4 mb-4\">Gestion des programmes
  <a class=\"btn btn-success ml-5\" href=\"{{ path('admin_programme_ajout') }}\">Ajouter</a>
</h4>

<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Date</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Heure</th>
      <th scope=\"col\">Lieu</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for programme in programmes %}
    <tr>
      <th scope=\"row\">{{ programme.id }}</th>
      <td>{{ programme.date|date(\"d/m/Y\") }}</td>
      <td>{{ programme.name }}</td>
      <td>{{ programme.hours|date('H:i:s') }}</td>
      <td>{{ programme.location }}</td>
      <td>
        <a class=\"btn btn-primary\" href=\"{{ path('admin_programme_modification', {id: programme.id}) }}\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"{{ path('admin_programme_suppression', {id: programme.id}) }}\">Supprimer</a>
      </td>
    </tr>
    {% endfor %}
  </tbody>
</table>
</div>

<h4 class=\"mt-4 mb-4\">Gestion des concerts
  <a class=\"btn btn-success ml-5\" href=\"{{ path('admin_concert_ajout') }}\">Ajouter</a>
</h4>

<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Programme</th>
      <th scope=\"col\">Groupe</th>
      <th scope=\"col\">Début</th>
      <th scope=\"col\">Fin</th>
      <th scope=\"col\">Durée</th>
      <th scope=\"col\">Lieu</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for concert in concerts %}

    <tr>
      <th scope=\"row\">{{ concert.id }}</th>
      <td>{{ concert.programmeid.name}}(ID : {{ concert.programmeid.id}})</td>
      <td>{{ concert.groupe.nom}}</td>
      <td>{{ concert.horairedebut|date('H:i:s') }}</td>
      <td>{{ concert.horairefin|date('H:i:s') }}</td>
      <td>{{ concert.duree }}</td>
      <td>{{ concert.emplacement }}</td>
      <td>
        <a class=\"btn btn-primary\" href=\"{{ path('admin_concert_modification', {id: concert.id}) }}\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"{{ path('admin_concert_suppression', {id: concert.id}) }}\">Supprimer</a>
      </td>
      

    </tr>
    {% endfor %}


        

  </tbody>
</table>
</div>

<h4 class=\"mt-4 mb-4\">Gestion des groupes
  <a class=\"btn btn-success ml-5\" href=\"{{ path('admin_groupe_ajout') }}\">Ajouter</a>
</h4>

<div class=\"table-responsive-sm\">
<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Programme</th>
      <th scope=\"col\">Groupe</th>
      <th scope=\"col\">Actions</th>

    </tr>
  </thead>
  <tbody>
    {% for groupe in groupes %}

    <tr>
      <th scope=\"row\">{{ groupe.id}}</th>
      <td>{{ groupe.nom}}</td>
      <td>{{ groupe.stylemusique}}</td>
      <td>
        <a class=\"btn btn-primary\" href=\"{{ path('admin_groupe_modification', {id: groupe.id}) }}\">Modifier</a>
        <a class=\"btn btn-danger\" href=\"{{ path('admin_groupe_suppression', {id: groupe.id}) }}\">Supprimer</a>
      </td>

      

    </tr>
    {% endfor %}


        

  </tbody>
</table>
</div>

</div>
\t\t

{% endblock %}
", "admin/index.html.twig", "C:\\Program Files (x86)\\Cours\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend2 - Copie\\templates\\admin\\index.html.twig");
    }
}
