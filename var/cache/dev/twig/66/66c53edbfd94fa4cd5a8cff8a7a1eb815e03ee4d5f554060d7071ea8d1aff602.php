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

/* base.html.twig */
class __TwigTemplate_3abe3cee5c77d6e9c967d3e0912ec40ece662f710e630f781f672c67b2cbafc5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no\">

        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app_global.css"), "html", null, true);
        echo "\" />

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        
            <!-- Font Awesome -->
            <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\"
            rel=\"stylesheet\"
            />
            <!-- MDB -->
            <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css\"
            rel=\"stylesheet\"
            />

        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </head>
        <body>
            <nav class=\"navbar navbar-expand-lg navbar-light navcolor\">

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"fas fa-bars fa-1x text-light\"></span>
                </button>

                

                <ul class=\"nav navbar-nav navbar-logo mlogo\">

                        <a class=\"brand\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">

                        </a>
                </ul>
                    
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">

                    <ul class=\"navbar-nav\">


                    <li class=\"nav-item active\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reseaux");
        echo "\">Réseaux sociaux</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaires");
        echo "\">Partenaires</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'enregistrer</a>
                    </li>
                    <li class=\"nav-item\">
                    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "                        <p class=\"text-light font-weight-bold\">Connecté en tant que <i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "username", [], "any", false, false, false, 70), "html", null, true);
            echo "</i></p> <a class=\"btn btn-primary btn-sm linear-gradient\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fas fa-lg fa-power-off\"></i>Se déconnecter</a>
                    ";
        } else {
            // line 72
            echo "                        <a class=\"btn btn-primary btn-sm linear-gradient\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-lg fa-user\"></i> Se connecter</a>
                    ";
        }
        // line 74
        echo "                    </li>
                    <li>
                        ";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "                        <p class=\"text-danger\">
                            Compte administrateur.
                            <a class=\"btn btn-primary btn-sm linear-gradient\" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
            echo "\"><i class=\"fas fa-lg fa-cog\"></i>Gestion</a>
                        </p>
                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 82
            echo "                        <p class=\"text-danger\">
                            Compte utilisateur.
                        </p>
                        ";
        } else {
            // line 86
            echo "                        <p class=\"text-danger\">
                            Compte anonyme.
                        </p>
                        ";
        }
        // line 90
        echo "                    </li>
                    
                    </ul>
                </div>

            </nav>

        

        ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "        
            <!-- MDB -->
            <script
            type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js\"
            ></script>
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
    <div class=\"card-deck mt-3\">
        <div class=\"card\">
            <div class=\"card-body\">
            <div class=\"brand mx-auto\"></div>
            <h5 class=\"card-title text-center\">Live Events 2021 - Tout droits réservés.</h5>
            </div>
        </div>
    </div>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Base";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 99,  284 => 26,  274 => 25,  261 => 11,  251 => 10,  232 => 8,  203 => 100,  201 => 99,  190 => 90,  184 => 86,  178 => 82,  172 => 79,  168 => 77,  166 => 76,  162 => 74,  156 => 72,  148 => 70,  146 => 69,  140 => 66,  134 => 63,  128 => 60,  122 => 57,  116 => 54,  110 => 51,  96 => 40,  82 => 28,  80 => 25,  66 => 13,  64 => 10,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no\">

        <link rel=\"icon\" href=\"{{ asset('build/app_global.css') }}\" />

        <title>{% block title %}Base{% endblock %}</title>
        
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
        
            <!-- Font Awesome -->
            <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\"
            rel=\"stylesheet\"
            />
            <!-- MDB -->
            <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css\"
            rel=\"stylesheet\"
            />

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
        <body>
            <nav class=\"navbar navbar-expand-lg navbar-light navcolor\">

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"fas fa-bars fa-1x text-light\"></span>
                </button>

                

                <ul class=\"nav navbar-nav navbar-logo mlogo\">

                        <a class=\"brand\" href=\"{{ path(\"home\") }}\">

                        </a>
                </ul>
                    
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">

                    <ul class=\"navbar-nav\">


                    <li class=\"nav-item active\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"{{ path(\"home\") }}\">Accueil <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"{{ path(\"faq\") }}\">FAQ</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"{{ path(\"reseaux\") }}\">Réseaux sociaux</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"{{ path(\"partenaires\") }}\">Partenaires</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"{{ path(\"app_login\") }}\">Se connecter</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light font-weight-bold\" href=\"{{ path(\"app_register\") }}\">S'enregistrer</a>
                    </li>
                    <li class=\"nav-item\">
                    {% if app.user %}
                        <p class=\"text-light font-weight-bold\">Connecté en tant que <i>{{ app.user.username }}</i></p> <a class=\"btn btn-primary btn-sm linear-gradient\" href=\"{{ path('app_logout') }}\"><i class=\"fas fa-lg fa-power-off\"></i>Se déconnecter</a>
                    {% else %}
                        <a class=\"btn btn-primary btn-sm linear-gradient\" href=\"{{ path('app_login') }}\"><i class=\"fas fa-lg fa-user\"></i> Se connecter</a>
                    {% endif %}
                    </li>
                    <li>
                        {% if is_granted('ROLE_ADMIN') %}
                        <p class=\"text-danger\">
                            Compte administrateur.
                            <a class=\"btn btn-primary btn-sm linear-gradient\" href=\"{{ path('admin_home') }}\"><i class=\"fas fa-lg fa-cog\"></i>Gestion</a>
                        </p>
                        {% elseif is_granted('ROLE_USER') %}
                        <p class=\"text-danger\">
                            Compte utilisateur.
                        </p>
                        {% else %}
                        <p class=\"text-danger\">
                            Compte anonyme.
                        </p>
                        {% endif %}
                    </li>
                    
                    </ul>
                </div>

            </nav>

        

        {% block body %}{% endblock %}
        
            <!-- MDB -->
            <script
            type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js\"
            ></script>
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
    <div class=\"card-deck mt-3\">
        <div class=\"card\">
            <div class=\"card-body\">
            <div class=\"brand mx-auto\"></div>
            <h5 class=\"card-title text-center\">Live Events 2021 - Tout droits réservés.</h5>
            </div>
        </div>
    </div>
</html>
", "base.html.twig", "C:\\Program Files (x86)\\Cours\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend2 - Copie\\templates\\base.html.twig");
    }
}
