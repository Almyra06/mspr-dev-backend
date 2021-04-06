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

/* admin/faq/index.html.twig */
class __TwigTemplate_603ff7e9124ca031e15fdbb847cc306f48bc0a9d36f562b5ae3bb0af5bef591c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/faq/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/faq/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/faq/index.html.twig", 1);
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

        echo "FAQ LiveEvents";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 class = \"mt-4 mb-2\">FAQ DE LIVE EVENTS !</h1>
<h3>Interface de gestion des questions : </h3>

";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formQuestions"]) || array_key_exists("formQuestions", $context) ? $context["formQuestions"] : (function () { throw new RuntimeError('Variable "formQuestions" does not exist.', 9, $this->source); })()), 'form');
        echo "


<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
\t    <th scope=\"col\">Questions</th>
      <th scope=\"col\">Réponses</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 23
            echo "
    <tr> 
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
        <td>
          <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 27), "question", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
        </td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
        <td>
            <a class=\"btn btn-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq_repondre", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Répondre</a>
            <a class=\"btn btn-danger\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq_suppression", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Supprimer</a>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/faq/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 36,  136 => 32,  132 => 31,  127 => 29,  122 => 27,  117 => 25,  113 => 23,  109 => 22,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FAQ LiveEvents{% endblock %}

{% block body %}
<h1 class = \"mt-4 mb-2\">FAQ DE LIVE EVENTS !</h1>
<h3>Interface de gestion des questions : </h3>

{{ form(formQuestions) }}


<table class=\"table mb-4\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
\t    <th scope=\"col\">Questions</th>
      <th scope=\"col\">Réponses</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for reponse in reponses %}

    <tr> 
        <td>{{ reponse.question.id }}</td>
        <td>
          <p>{{ reponse.question.question }}</p>
        </td>
        <td>{{ reponse.reponse }}</td>
        <td>
            <a class=\"btn btn-primary\" href=\"{{ path('faq_repondre', {id: reponse.question.id}) }}\">Répondre</a>
            <a class=\"btn btn-danger\" href=\"{{ path('faq_suppression', {id: reponse.question.id}) }}\">Supprimer</a>
        </td>
    </tr>
    {% endfor %}
    </tbody>
</table>

{% endblock %}
", "admin/faq/index.html.twig", "C:\\Program Files (x86)\\Cours\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend2 - Copie\\templates\\admin\\faq\\index.html.twig");
    }
}
