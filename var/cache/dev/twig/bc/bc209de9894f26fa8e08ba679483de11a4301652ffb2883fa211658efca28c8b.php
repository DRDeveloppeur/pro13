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
class __TwigTemplate_076e91a7201d292aa54bdf9633bdb1df52f15306dbdd6eb838e2a04eed7b60d0 extends Template
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

        echo "Admin";
        
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
        echo "<main class=\"mt-5 pt-5\">
    <div class=\"container\">
        
        <!--Section: Cards-->
        <section class=\"pt-4\">

            <!-- Heading & Description -->
            <div class=\"wow fadeIn\">
                <!--Section heading-->
                <h2 class=\"h1 text-center mb-5\">Admin</h2>
                <!--Section description-->
                <p class=\"text-center mb-5\">
                    D'ici vous pouvez voir, ajouter, modiffier ou supprimer vos categories, produits ou articles.
                </p>
            </div>
            <!-- Heading & Description -->

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://firstsiteguide.com/wp-content/uploads/2017/09/wordpress-categories-640x400.png\" 
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Categories</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les categories disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        echo "\" class=\"btn btn-primary btn-md\">
                        Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

            <!--Grid row-->
            <div class=\"row mt-3 wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://www.je-suis-papa.com/wp-content/uploads/2019/06/top-marques-vetement-enfant.png\"
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits");
        echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Produits</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les produits disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits");
        echo "\" class=\"btn btn-primary btn-md\">
                        Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://angouaolivier-notaire.com/wp-content/uploads/2015/05/menu-articles.jpg\" 
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_articles");
        echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Articles</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les articles disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_articles");
        echo "\" class=\"btn btn-primary btn-md\">Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://img.phonandroid.com/2016/08/google-contacts.jpg\" 
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contacts");
        echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Contacts</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les contacts disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contacts");
        echo "\" class=\"btn btn-primary btn-md\">Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

        </section>
        <!--Section: Cards-->

    </div>
</main>
<!--Main layout-->
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
        return array (  267 => 162,  247 => 145,  224 => 125,  204 => 108,  180 => 87,  160 => 70,  136 => 49,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}
<main class=\"mt-5 pt-5\">
    <div class=\"container\">
        
        <!--Section: Cards-->
        <section class=\"pt-4\">

            <!-- Heading & Description -->
            <div class=\"wow fadeIn\">
                <!--Section heading-->
                <h2 class=\"h1 text-center mb-5\">Admin</h2>
                <!--Section description-->
                <p class=\"text-center mb-5\">
                    D'ici vous pouvez voir, ajouter, modiffier ou supprimer vos categories, produits ou articles.
                </p>
            </div>
            <!-- Heading & Description -->

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://firstsiteguide.com/wp-content/uploads/2017/09/wordpress-categories-640x400.png\" 
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"{{ path('admin_categories') }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Categories</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les categories disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"{{ path('admin_categories') }}\" class=\"btn btn-primary btn-md\">
                        Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

            <!--Grid row-->
            <div class=\"row mt-3 wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://www.je-suis-papa.com/wp-content/uploads/2019/06/top-marques-vetement-enfant.png\"
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"{{ path('admin_produits') }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Produits</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les produits disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"{{ path('admin_produits') }}\" class=\"btn btn-primary btn-md\">
                        Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://angouaolivier-notaire.com/wp-content/uploads/2015/05/menu-articles.jpg\" 
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"{{ path('admin_articles') }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Articles</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les articles disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"{{ path('admin_articles') }}\" class=\"btn btn-primary btn-md\">Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://img.phonandroid.com/2016/08/google-contacts.jpg\" 
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"{{ path('admin_contacts') }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Contacts</strong>
                    </h3>
                    <p class=\"grey-text\">
                        Voir les contacts disponibles, les modiffier, les supprimer ou alors bien en ajouter d'autre.
                        <br>
                        Vous pouver tout géré d'ici
                    </p>
                    <a href=\"{{ path('admin_contacts') }}\" class=\"btn btn-primary btn-md\">Continuer
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">

        </section>
        <!--Section: Cards-->

    </div>
</main>
<!--Main layout-->
{% endblock %}", "admin/index.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/admin/index.html.twig");
    }
}
