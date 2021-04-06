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

/* partenaires/index.html.twig */
class __TwigTemplate_d085f38a6bd0ef5d5ffb6250fc9bee4fad94af5a06ddd11c550da442d8cc25ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaires/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaires/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaires/index.html.twig", 1);
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

        echo "Nos partenaires";
        
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
        echo "<h1 class=\"mt-3 mb-4 titre\">Nos partenaires</h1>


<div class=\"container text-center \">
  <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
  </div>
   <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
  </div>
  <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partenaires/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos partenaires{% endblock %}

{% block body %}
<h1 class=\"mt-3 mb-4 titre\">Nos partenaires</h1>


<div class=\"container text-center \">
  <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
  </div>
   <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
  </div>
  <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
            <h3>Heineken</h3>
            <img class=\"card-img-top\" src=\"http://assets.stickpng.com/thumbs/58480a5fcef1014c0b5e4919.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
      
    </div>
  </div>
</div>
{% endblock %}
", "partenaires/index.html.twig", "C:\\Program Files (x86)\\Cours\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend2 - Copie\\templates\\partenaires\\index.html.twig");
    }
}
