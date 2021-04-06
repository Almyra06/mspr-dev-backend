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

/* reseaux/index.html.twig */
class __TwigTemplate_55070176d0176595850f8b258b092ceb5b3322a2b51d6b20ecda5f73c1b29cbc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reseaux/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reseaux/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reseaux/index.html.twig", 1);
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

        echo "Nos réseaux sociaux";
        
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
        echo "<h1 class=\"mt-3 mb-4 titre\">Nos réseaux sociaux</h1>


<div class=\"container text-center\">
  <div class=\"row mb-5\">
    <div class=\"col-sm mb-5\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Instagram</h3>
            <img class=\"card-img-top\" src=\"https://thegreattrail.ca/wp-content/uploads/2017/10/Instagram-logo-250X250.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">@LiveEvents</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm mb-5\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Facebook</h3>
            <img class=\"card-img-top\" src=\"https://worldfest.net/wp-content/uploads/2018/04/facebook-logo-square-250.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Live Events</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm mb-5\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Snapchat</h3>
            <img class=\"card-img-top\" src=\"https://upload.wikimedia.org/wikipedia/fr/thumb/a/ad/Logo-Snapchat.png/220px-Logo-Snapchat.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">live_events</p>
            </div>
        </div>
      
    </div>
  </div>
   <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Youtube</h3>
            <img class=\"card-img-top\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX////+AAD/+vr+Q0P+T0/+jIz/9vb/AAD+EhL+goL7AAD7v7/+wsL/8/P//f39Hh77dHT+1dX91NT/7e3+3Nz9Li79DAv8rq78iIj9qqr9Njb+ycn9fn7+z8/9tLT9Hx/8W1v85eX9Jyb+Zmb6l5f+VVT5oJ/9ubn9Pj/+cG/8WVn/bGv7np7+kpL9SUr7QD+EDmTsAAAEr0lEQVR4nO3ci3aiOgCFYUShGEVR8IKKQqVS6+B5/7c72GlPtcqsGbJj4pz9PYCLf4GES4hlERERERERERERERERERERERERERERERERERERkRaDgY01GOhOeme7vh+GUW8d59302AZ6CcpdXCRhGPqurSPWzaJRsiziMtgeJ9OWMs+v6b67m/WSUZSF9t3qRv1ZuX0dVhvw9KQu7tJ08hLkxTJy1fdl6/mx1RL3KrsgvM58FqntG8T7oZa4/0zTPFMYGB2GevbeOfG2UxZYdHTX/eQFigLjhe60D0KkSs44O0932ReRhvjAYqH/L/hFBD46MEp1R10SOfgCwHd0J323SLCFS4P+hB9W0L+iv9fdc82D7sRI4dV1U2IOHDIGzt0usf/AEHiY2povRmsAD9NMd8ttXdyt8Vp3y20L3JAY6G65TeCua0y55P5G4O6GdafUEDEq0NedUueAKhzrLqkzQRXGuktqoQpXukNqoQZEw24Nz6Aeuxk6WFSWoEIzr0pPQMOFa27hHFMYyhSKoVD4BAs0II5lnmCI1Y8JLOhKB1PYl3pGU/rZStluBA35a6lHGI5tucuOosQNpjCX2jzn9DTFjdW80tlg7hDnUhvh/Hxe5M83oKpzG8zDqK7URjifGzE+4BtBD6NAhdUf+gX9UNIbYQqlHiWeFVphDj7leJjLNlxhdaiW0NHR6xlXWI0cAXB0NLGwOlR7R1QgrFBqI64Kq5Fjh9qNXt/Mwmo/HjCN5hZWp5yXv73QsuPjVHo/Gl1oWVn5jymF2HPpmaQreUFu5mhxzi4OUonmF1aH6uwo0fgIhZYVlZvGjaaO+N/Yo8aH6oMUVvrPDQvNHi0u5M9N9uMjFVpRk9uqByoMi0an1Icp9KubxkY//hijhTUYOw1PNA9SmOXNx/yHKIzfvOYXNQ8wHi5TqVd3xhf6gZC71zf8XOrKvRAxvtDtteWf1RhcaCeQ2YDmFo7LRpehygrRo0UWt1HPS40cD91iC/t+0cjCJMAcoO8MLAznRr57ktqIi8J4An5/iJmuDytM4JOrhpipe5hCO9rjp2OA3uND5mJkedN7wF8ZYuZiAObTZLOOknlRoBlDM7k5Ua5lF3tFX4aBZn315Oa1WckKOAJeesUUys1NDMo2LOjKG6YwkzrJD+Xfg9bbYwr//jnCloo5dxhrUOGr7pBaqG8szf3eAvWdrLnfzIACrZ3ukFqowkR3SJ0FqtDY7w9Bw6H1P/iG1FJx4wMgMHOgT0z9lhu3bEShu+U24Pf4me6W24BrKthm/hExj/TfDYxbYejEQy5NNzJpFawP2MWwTFxjSAAP0spSd8+1ALtkm3lrfQnMK4svEe4zEIwf8JVp+wo/5/1z072CNT7XBiVO0zE+8JRozJixBS+496lvyH9RdJUttRs5KpcP+N2+51jB0p6f/OVBd+DUGatd39sfzZW9Z/kNi/wOC14P7GwdLFqtOy80+NSaBOvsbquWn4Tjolyl7cWw4nke+AWMmFa/efrpRfstKGdJpnOdfdvPRsv+LHfmq/027chKt/tV18nj3nKU+XfdZ0RERERERERERERERERERERERERERER0D/8Cz+xyTIZajIsAAAAASUVORK5CYII=\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">www.youtube.com/channel/liveevents</p>
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
        return "reseaux/index.html.twig";
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

{% block title %}Nos réseaux sociaux{% endblock %}

{% block body %}
<h1 class=\"mt-3 mb-4 titre\">Nos réseaux sociaux</h1>


<div class=\"container text-center\">
  <div class=\"row mb-5\">
    <div class=\"col-sm mb-5\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Instagram</h3>
            <img class=\"card-img-top\" src=\"https://thegreattrail.ca/wp-content/uploads/2017/10/Instagram-logo-250X250.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">@LiveEvents</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm mb-5\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Facebook</h3>
            <img class=\"card-img-top\" src=\"https://worldfest.net/wp-content/uploads/2018/04/facebook-logo-square-250.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">Live Events</p>
            </div>
        </div>
      
    </div>
    <div class=\"col-sm mb-5\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Snapchat</h3>
            <img class=\"card-img-top\" src=\"https://upload.wikimedia.org/wikipedia/fr/thumb/a/ad/Logo-Snapchat.png/220px-Logo-Snapchat.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">live_events</p>
            </div>
        </div>
      
    </div>
  </div>
   <div class=\"row mb-5\">
    <div class=\"col-sm\">
        <div class=\"card mx-auto\" style=\"width: 18rem;\">
            <h3>Youtube</h3>
            <img class=\"card-img-top\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX////+AAD/+vr+Q0P+T0/+jIz/9vb/AAD+EhL+goL7AAD7v7/+wsL/8/P//f39Hh77dHT+1dX91NT/7e3+3Nz9Li79DAv8rq78iIj9qqr9Njb+ycn9fn7+z8/9tLT9Hx/8W1v85eX9Jyb+Zmb6l5f+VVT5oJ/9ubn9Pj/+cG/8WVn/bGv7np7+kpL9SUr7QD+EDmTsAAAEr0lEQVR4nO3ci3aiOgCFYUShGEVR8IKKQqVS6+B5/7c72GlPtcqsGbJj4pz9PYCLf4GES4hlERERERERERERERERERERERERERERERERERERkRaDgY01GOhOeme7vh+GUW8d59302AZ6CcpdXCRhGPqurSPWzaJRsiziMtgeJ9OWMs+v6b67m/WSUZSF9t3qRv1ZuX0dVhvw9KQu7tJ08hLkxTJy1fdl6/mx1RL3KrsgvM58FqntG8T7oZa4/0zTPFMYGB2GevbeOfG2UxZYdHTX/eQFigLjhe60D0KkSs44O0932ReRhvjAYqH/L/hFBD46MEp1R10SOfgCwHd0J323SLCFS4P+hB9W0L+iv9fdc82D7sRI4dV1U2IOHDIGzt0usf/AEHiY2povRmsAD9NMd8ttXdyt8Vp3y20L3JAY6G65TeCua0y55P5G4O6GdafUEDEq0NedUueAKhzrLqkzQRXGuktqoQpXukNqoQZEw24Nz6Aeuxk6WFSWoEIzr0pPQMOFa27hHFMYyhSKoVD4BAs0II5lnmCI1Y8JLOhKB1PYl3pGU/rZStluBA35a6lHGI5tucuOosQNpjCX2jzn9DTFjdW80tlg7hDnUhvh/Hxe5M83oKpzG8zDqK7URjifGzE+4BtBD6NAhdUf+gX9UNIbYQqlHiWeFVphDj7leJjLNlxhdaiW0NHR6xlXWI0cAXB0NLGwOlR7R1QgrFBqI64Kq5Fjh9qNXt/Mwmo/HjCN5hZWp5yXv73QsuPjVHo/Gl1oWVn5jymF2HPpmaQreUFu5mhxzi4OUonmF1aH6uwo0fgIhZYVlZvGjaaO+N/Yo8aH6oMUVvrPDQvNHi0u5M9N9uMjFVpRk9uqByoMi0an1Icp9KubxkY//hijhTUYOw1PNA9SmOXNx/yHKIzfvOYXNQ8wHi5TqVd3xhf6gZC71zf8XOrKvRAxvtDtteWf1RhcaCeQ2YDmFo7LRpehygrRo0UWt1HPS40cD91iC/t+0cjCJMAcoO8MLAznRr57ktqIi8J4An5/iJmuDytM4JOrhpipe5hCO9rjp2OA3uND5mJkedN7wF8ZYuZiAObTZLOOknlRoBlDM7k5Ua5lF3tFX4aBZn315Oa1WckKOAJeesUUys1NDMo2LOjKG6YwkzrJD+Xfg9bbYwr//jnCloo5dxhrUOGr7pBaqG8szf3eAvWdrLnfzIACrZ3ukFqowkR3SJ0FqtDY7w9Bw6H1P/iG1FJx4wMgMHOgT0z9lhu3bEShu+U24Pf4me6W24BrKthm/hExj/TfDYxbYejEQy5NNzJpFawP2MWwTFxjSAAP0spSd8+1ALtkm3lrfQnMK4svEe4zEIwf8JVp+wo/5/1z072CNT7XBiVO0zE+8JRozJixBS+496lvyH9RdJUttRs5KpcP+N2+51jB0p6f/OVBd+DUGatd39sfzZW9Z/kNi/wOC14P7GwdLFqtOy80+NSaBOvsbquWn4Tjolyl7cWw4nke+AWMmFa/efrpRfstKGdJpnOdfdvPRsv+LHfmq/027chKt/tV18nj3nKU+XfdZ0RERERERERERERERERERERERERERER0D/8Cz+xyTIZajIsAAAAASUVORK5CYII=\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">www.youtube.com/channel/liveevents</p>
            </div>
        </div>
      
    </div>
  </div>
</div>
{% endblock %}
", "reseaux/index.html.twig", "C:\\Program Files (x86)\\Cours\\cours\\Cours\\MSPR\\BACK-FRONT\\mspr-dev-backend2 - Copie\\templates\\reseaux\\index.html.twig");
    }
}
