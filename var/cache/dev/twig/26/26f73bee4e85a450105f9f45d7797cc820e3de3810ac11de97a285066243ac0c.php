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
class __TwigTemplate_1e11347f65707daa06eef0d66db35d4d6fec33d9591e3294118b87894d70402b extends Template
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

        echo "Acceuil - Live Events
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
        echo "
        <div class=\"w-auto linear-gradient\">
            <div id=\"carouselExampleCaptions\" class=\"slide\" data-mdb-ride=\"carousel\">
                <div class=\"carousel-inner pt-4\">
                ";
        // line 11
        $context["isFirst"] = true;
        // line 12
        echo "                ";
        $context["i"] = 0;
        // line 13
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 13, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 13, $this->source); })()), "priorite", [], "any", false, false, false, 13) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 13, $this->source); })()), "priorite", [], "any", false, false, false, 13)); }), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo "   
                ";
            // line 14
            if ((0 === twig_compare((isset($context["isFirst"]) || array_key_exists("isFirst", $context) ? $context["isFirst"] : (function () { throw new RuntimeError('Variable "isFirst" does not exist.', 14, $this->source); })()), true))) {
                // line 15
                echo "
                    <div class=\"carousel-item active\">
                    ";
                // line 17
                $context["isFirst"] = true;
                // line 18
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_urgent", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\">
                            <div class=\"carousel-caption d-md-block position-static nopadding\">
                                <h2>";
                // line 20
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 20)), "html", null, true);
                echo "</h2>
                            </div>
                        </a>
                    </div>

                ";
            } else {
                // line 26
                echo "
                    <div class=\"carousel-item\">
\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_urgent", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">
                            <div class=\"carousel-caption d-md-block position-static nopadding\">
                                <h2>";
                // line 30
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 30)), "html", null, true);
                echo "</h2>
                            </div>
                        </a>
                    </div>
                
                ";
            }
            // line 36
            echo "                ";
            $context["isFirst"] = false;
            // line 37
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                </div>
                <div class=\"carousel-indicators d-md-block position-static text-center\">
                    ";
        // line 41
        $context["isFirst"] = true;
        // line 42
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 42, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 42, $this->source); })()), "priorite", [], "any", false, false, false, 42) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 42, $this->source); })()), "priorite", [], "any", false, false, false, 42)); }), 0, 3));
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
            // line 43
            if ((0 === twig_compare((isset($context["isFirst"]) || array_key_exists("isFirst", $context) ? $context["isFirst"] : (function () { throw new RuntimeError('Variable "isFirst" does not exist.', 43, $this->source); })()), true))) {
                // line 44
                echo "
                        <a
                        type=\"button\"
                        data-mdb-target=\"#carouselExampleCaptions\"
                        data-mdb-slide-to=";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 48), "html", null, true);
                echo "
                        class=\"active \"
                        aria-current=\"true\"
                        aria-label=";
                // line 51
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 51)), "html", null, true);
                echo "
                        ></a>

                    ";
            } else {
                // line 55
                echo "
                        <a
                        type=\"button\"
                        data-mdb-target=\"#carouselExampleCaptions\"
                        data-mdb-slide-to=";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59), "html", null, true);
                echo "
                        aria-current=\"true\"
                        aria-label=";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 61), "html", null, true);
                echo "
                        ></a>

                    ";
            }
            // line 65
            echo "                    ";
            $context["isFirst"] = false;
            // line 66
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
        // line 67
        echo "                </div>


            </div>
        </div>

\t<h1 class=\"mt-3 mb-4 text-center titre\">Bienvenue au festival Nation Sounds!</h1>
    <div class=\"brand2 mx-auto\"></div>

</br>
\t<div class=\"text-center font-weight-bold\"><i>Retrouvez vos artistes préféré en live</i></div>
\t<br/><br/>
\t<div class=\"container bg-vert pt-3 pb-4\">
\t<h4 class=\"titre\">Selectionnez un programme : </h4>
\t";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFiltre"]) || array_key_exists("formFiltre", $context) ? $context["formFiltre"] : (function () { throw new RuntimeError('Variable "formFiltre" does not exist.', 81, $this->source); })()), 'form_start');
        echo "

        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFiltre"]) || array_key_exists("formFiltre", $context) ? $context["formFiltre"] : (function () { throw new RuntimeError('Variable "formFiltre" does not exist.', 83, $this->source); })()), "programme", [], "any", false, false, false, 83), 'row');
        echo "

    <div class=\"text-center\">
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFiltre"]) || array_key_exists("formFiltre", $context) ? $context["formFiltre"] : (function () { throw new RuntimeError('Variable "formFiltre" does not exist.', 86, $this->source); })()), "Valider", [], "any", false, false, false, 86), 'row');
        echo "
    </div>
        

    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFiltre"]) || array_key_exists("formFiltre", $context) ? $context["formFiltre"] : (function () { throw new RuntimeError('Variable "formFiltre" does not exist.', 90, $this->source); })()), 'form_end');
        echo "


<h4 class=\"mt-4 mb-4 titre\">Les concerts : </h4>

";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concertsfiltre"]) || array_key_exists("concertsfiltre", $context) ? $context["concertsfiltre"] : (function () { throw new RuntimeError('Variable "concertsfiltre" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["concert"]) {
            // line 96
            echo "    ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 96, $this->source); })()) + 1);
            // line 97
            echo "    ";
            if ((0 === twig_compare(((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 97, $this->source); })()) % 2), 1))) {
                // line 98
                echo "    <div class=\"row mb-3\">
        <div class=\"col nopadding\">
            <img class=\"imgprogramme\" src=\"";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 100), "img", [], "any", false, false, false, 100), "html", null, true);
                echo "\"/>
        </div>
        
        <div class=\"col nopadding\">
        <h1 class=\"titre\">";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104), "html", null, true);
                echo "</h1>
        <h2 class=\"text-light\">";
                // line 105
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 105), "date", [], "any", false, false, false, 105), "d-m-Y"), "html", null, true);
                echo "</h2>
        <h3 class=\"text-light\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "groupe", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "html", null, true);
                echo "</h3>
        <p class=\"text-light bg-vert-clair\">
        ";
                // line 108
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horairedebut", [], "any", false, false, false, 108), "H:i:s"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horairefin", [], "any", false, false, false, 108), "H:i:s"), "html", null, true);
                echo "
        ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "emplacement", [], "any", false, false, false, 109), "html", null, true);
                echo "
        </p>
        </div>

        
        
    </div>
    <hr>
    
    ";
            } else {
                // line 119
                echo "
    <div class=\"row mb-3\">
        
        <div class=\"col nopadding\">
        <h1 class=\"titre\">";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
                echo "</h1>
        <h2 class=\"text-light\">";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 124), "date", [], "any", false, false, false, 124), "d-m-Y"), "html", null, true);
                echo "</h2>
        <h3 class=\"text-light\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "groupe", [], "any", false, false, false, 125), "nom", [], "any", false, false, false, 125), "html", null, true);
                echo "</h3>
        <p class=\"text-light bg-vert-clair\">
        ";
                // line 127
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horairedebut", [], "any", false, false, false, 127), "H:i:s"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "horairefin", [], "any", false, false, false, 127), "H:i:s"), "html", null, true);
                echo "
        ";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["concert"], "emplacement", [], "any", false, false, false, 128), "html", null, true);
                echo "</p>
        </div>

        <div class=\"col nopadding\">
            <img class=\"imgprogramme\" src=\"";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["concert"], "programmeid", [], "any", false, false, false, 132), "img", [], "any", false, false, false, 132), "html", null, true);
                echo "\"/>
        </div>
        
    </div>
    <hr>

    ";
            }
            // line 139
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "

\t<br/><br/>
    <div class=\"text-center titre\">
\t<h3>Accéder à la billeterie</h3>
    
\t<a href=\"https://www.billetweb.fr/nation-sounds1\" class=\"btn btn-primary btn-lg sensitive linear-gradient\">
\t\tBILLETERIE
\t</a>
    </div>
\t<br/><br/>
\t<h3 class=\"titre\">Retrouvez tout nos stands sur notre map !</h3>
    <div class=\"map-responsive\">
\t<iframe src=\"https://www.google.com/maps/d/embed?mid=1YOhzjaL2tNn8QyeHFogBDwSxJG0pR64H\" width=\"640\" height=\"480\"></iframe>
    </div>
</div>
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
        return array (  384 => 141,  377 => 139,  367 => 132,  360 => 128,  354 => 127,  349 => 125,  345 => 124,  341 => 123,  335 => 119,  322 => 109,  316 => 108,  311 => 106,  307 => 105,  303 => 104,  296 => 100,  292 => 98,  289 => 97,  286 => 96,  282 => 95,  274 => 90,  267 => 86,  261 => 83,  256 => 81,  240 => 67,  226 => 66,  223 => 65,  216 => 61,  211 => 59,  205 => 55,  198 => 51,  192 => 48,  186 => 44,  184 => 43,  164 => 42,  162 => 41,  157 => 38,  151 => 37,  148 => 36,  139 => 30,  134 => 28,  130 => 26,  121 => 20,  115 => 18,  113 => 17,  109 => 15,  107 => 14,  100 => 13,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Acceuil - Live Events
{% endblock %}

{% block body %}

        <div class=\"w-auto linear-gradient\">
            <div id=\"carouselExampleCaptions\" class=\"slide\" data-mdb-ride=\"carousel\">
                <div class=\"carousel-inner pt-4\">
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
                <div class=\"carousel-indicators d-md-block position-static text-center\">
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


            </div>
        </div>

\t<h1 class=\"mt-3 mb-4 text-center titre\">Bienvenue au festival Nation Sounds!</h1>
    <div class=\"brand2 mx-auto\"></div>

</br>
\t<div class=\"text-center font-weight-bold\"><i>Retrouvez vos artistes préféré en live</i></div>
\t<br/><br/>
\t<div class=\"container bg-vert pt-3 pb-4\">
\t<h4 class=\"titre\">Selectionnez un programme : </h4>
\t{{ form_start(formFiltre) }}

        {{ form_row(formFiltre.programme) }}

    <div class=\"text-center\">
        {{ form_row(formFiltre.Valider) }}
    </div>
        

    {{ form_end(formFiltre) }}


<h4 class=\"mt-4 mb-4 titre\">Les concerts : </h4>

{% for concert in concertsfiltre %}
    {% set i = i + 1 %}
    {% if i % 2 == 1 %}
    <div class=\"row mb-3\">
        <div class=\"col nopadding\">
            <img class=\"imgprogramme\" src=\"{{ concert.programmeid.img }}\"/>
        </div>
        
        <div class=\"col nopadding\">
        <h1 class=\"titre\">{{ concert.programmeid.name}}</h1>
        <h2 class=\"text-light\">{{ concert.programmeid.date|date('d-m-Y') }}</h2>
        <h3 class=\"text-light\">{{ concert.groupe.nom}}</h3>
        <p class=\"text-light bg-vert-clair\">
        {{ concert.horairedebut|date('H:i:s') }} - {{ concert.horairefin|date('H:i:s') }}
        {{ concert.emplacement }}
        </p>
        </div>

        
        
    </div>
    <hr>
    
    {% else %}

    <div class=\"row mb-3\">
        
        <div class=\"col nopadding\">
        <h1 class=\"titre\">{{ concert.programmeid.name}}</h1>
        <h2 class=\"text-light\">{{ concert.programmeid.date|date('d-m-Y') }}</h2>
        <h3 class=\"text-light\">{{ concert.groupe.nom}}</h3>
        <p class=\"text-light bg-vert-clair\">
        {{ concert.horairedebut|date('H:i:s') }} - {{ concert.horairefin|date('H:i:s') }}
        {{ concert.emplacement }}</p>
        </div>

        <div class=\"col nopadding\">
            <img class=\"imgprogramme\" src=\"{{ concert.programmeid.img }}\"/>
        </div>
        
    </div>
    <hr>

    {% endif %}

{% endfor %}


\t<br/><br/>
    <div class=\"text-center titre\">
\t<h3>Accéder à la billeterie</h3>
    
\t<a href=\"https://www.billetweb.fr/nation-sounds1\" class=\"btn btn-primary btn-lg sensitive linear-gradient\">
\t\tBILLETERIE
\t</a>
    </div>
\t<br/><br/>
\t<h3 class=\"titre\">Retrouvez tout nos stands sur notre map !</h3>
    <div class=\"map-responsive\">
\t<iframe src=\"https://www.google.com/maps/d/embed?mid=1YOhzjaL2tNn8QyeHFogBDwSxJG0pR64H\" width=\"640\" height=\"480\"></iframe>
    </div>
</div>
{% endblock %}
", "accueil/index.html.twig", "C:\\Program Files (x86)\\Cours\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend2 - Copie\\templates\\accueil\\index.html.twig");
    }
}
