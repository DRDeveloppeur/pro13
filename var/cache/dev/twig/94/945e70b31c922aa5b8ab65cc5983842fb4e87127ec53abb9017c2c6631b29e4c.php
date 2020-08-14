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

/* home/index.html.twig */
class __TwigTemplate_2b0177049e0c9deb013f5b448bc642fb22554a212ce9e0282ed67b60e953ae8a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Home";
        
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
        echo "
<!--Carousel Wrapper-->
<div id=\"carousel-example-1z\" class=\"carousel slide carousel-fade pt-4\" data-ride=\"carousel\">

    <!--Indicators-->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carousel-example-1z\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carousel-example-1z\" data-slide-to=\"1\"></li>
        <li data-target=\"#carousel-example-1z\" data-slide-to=\"2\"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class=\"carousel-inner\" role=\"listbox\">

        <!--First slide-->
        <div class=\"carousel-item active\">
            <div class=\"view\"
                style=\"background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Mask & flexbox options-->
                <div class=\"mask rgba-black-strong d-flex justify-content-center align-items-center\">

                    <!-- Content -->
                    <div class=\"text-center white-text mx-5 wow fadeIn\">
                        <h1 class=\"mb-4\">
                            <strong>Pro13 E-Commerce</strong>
                        </h1>

                        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" class=\"btn btn-outline-white btn-lg\">
                            <i class=\"far fa-newspaper mr-2\"></i>
                            Articles
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class=\"carousel-item\">
            <div class=\"view\"
                style=\"background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Mask & flexbox options-->
                <div class=\"mask rgba-black-strong d-flex justify-content-center align-items-center\">

                    <!-- Content -->
                    <div class=\"text-center white-text mx-5 wow fadeIn\">
                        <h1 class=\"mb-4\">
                            <strong>Pro13 E-Commerce</strong>
                        </h1>

                        <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" class=\"btn btn-outline-white btn-lg\">
                            <i class=\"far fa-newspaper mr-2\"></i>
                            Articles
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class=\"carousel-item\">
            <div class=\"view\"
                style=\"background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Mask & flexbox options-->
                <div class=\"mask rgba-black-strong d-flex justify-content-center align-items-center\">

                    <!-- Content -->
                    <div class=\"text-center white-text mx-5 wow fadeIn\">
                        <h1 class=\"mb-4\">
                            <strong>Pro13 E-Commerce</strong>
                        </h1>

                        <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" class=\"btn btn-outline-white btn-lg\">
                            <i class=\"far fa-newspaper mr-2\"></i>
                            Articles
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<main>
    <div class=\"container\">

        <!--Section: Products v.3-->
        <section class=\"text-center mb-4 mt-4\">

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 133
            echo "                    <!--Grid column-->
                    <div class=\"col-lg-3 col-md-6 mb-4\">

                        <!--Card-->
                        <div class=\"card\">

                            <!--Card image-->
                            <div class=\"view overlay\">
                                <img src=\"";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 141), "html", null, true);
            echo "\"
                                    class=\"card-img-top\" alt=\"\">
                                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            echo "\">
                                    <div class=\"mask rgba-white-slight\"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class=\"card-body text-center\">
                                <!--Category & Title-->
                                <a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152)]), "html", null, true);
            echo "\" class=\"grey-text\">
                                    <h5>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 153), "title", [], "any", false, false, false, 153), "html", null, true);
            echo "</h5>
                                </a>
                                <h5>
                                    <strong>
                                        <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            echo "\" class=\"dark-grey-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "title", [], "any", false, false, false, 157), "html", null, true);
            echo "
                                        <!-- <span class=\"badge badge-pill danger-color\">NEW</span> -->
                                        <!-- <span class=\"badge badge-pill primary-color\">bestseller</span> -->

                                        </a>
                                    </strong>
                                </h5>

                                <h4 class=\"font-weight-bold blue-text\">
                                    <strong>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 166), "html", null, true);
            echo " €</strong>
                                </h4>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
            </div>
            <!--Grid row-->

        </section>
        <!--Section: Products v.3-->

    </div>
</main>
<!--Main layout-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 178,  281 => 166,  267 => 157,  260 => 153,  256 => 152,  244 => 143,  239 => 141,  229 => 133,  225 => 132,  181 => 91,  150 => 63,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}

<!--Carousel Wrapper-->
<div id=\"carousel-example-1z\" class=\"carousel slide carousel-fade pt-4\" data-ride=\"carousel\">

    <!--Indicators-->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carousel-example-1z\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carousel-example-1z\" data-slide-to=\"1\"></li>
        <li data-target=\"#carousel-example-1z\" data-slide-to=\"2\"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class=\"carousel-inner\" role=\"listbox\">

        <!--First slide-->
        <div class=\"carousel-item active\">
            <div class=\"view\"
                style=\"background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Mask & flexbox options-->
                <div class=\"mask rgba-black-strong d-flex justify-content-center align-items-center\">

                    <!-- Content -->
                    <div class=\"text-center white-text mx-5 wow fadeIn\">
                        <h1 class=\"mb-4\">
                            <strong>Pro13 E-Commerce</strong>
                        </h1>

                        <a href=\"{{ path('article_index') }}\" class=\"btn btn-outline-white btn-lg\">
                            <i class=\"far fa-newspaper mr-2\"></i>
                            Articles
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class=\"carousel-item\">
            <div class=\"view\"
                style=\"background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Mask & flexbox options-->
                <div class=\"mask rgba-black-strong d-flex justify-content-center align-items-center\">

                    <!-- Content -->
                    <div class=\"text-center white-text mx-5 wow fadeIn\">
                        <h1 class=\"mb-4\">
                            <strong>Pro13 E-Commerce</strong>
                        </h1>

                        <a href=\"{{ path('article_index') }}\" class=\"btn btn-outline-white btn-lg\">
                            <i class=\"far fa-newspaper mr-2\"></i>
                            Articles
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class=\"carousel-item\">
            <div class=\"view\"
                style=\"background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover;\">

                <!-- Mask & flexbox options-->
                <div class=\"mask rgba-black-strong d-flex justify-content-center align-items-center\">

                    <!-- Content -->
                    <div class=\"text-center white-text mx-5 wow fadeIn\">
                        <h1 class=\"mb-4\">
                            <strong>Pro13 E-Commerce</strong>
                        </h1>

                        <a href=\"{{ path('article_index') }}\" class=\"btn btn-outline-white btn-lg\">
                            <i class=\"far fa-newspaper mr-2\"></i>
                            Articles
                        </a>
                    </div>
                    <!-- Content -->

                </div>
                <!-- Mask & flexbox options-->

            </div>
        </div>
        <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<main>
    <div class=\"container\">

        <!--Section: Products v.3-->
        <section class=\"text-center mb-4 mt-4\">

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                {% for produit in produits %}
                    <!--Grid column-->
                    <div class=\"col-lg-3 col-md-6 mb-4\">

                        <!--Card-->
                        <div class=\"card\">

                            <!--Card image-->
                            <div class=\"view overlay\">
                                <img src=\"{{ produit.image }}\"
                                    class=\"card-img-top\" alt=\"\">
                                <a href=\"{{ path('produit_show', {id: produit.id}) }}\">
                                    <div class=\"mask rgba-white-slight\"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class=\"card-body text-center\">
                                <!--Category & Title-->
                                <a href=\"{{ path('category', {id: produit.categorie.id}) }}\" class=\"grey-text\">
                                    <h5>{{ produit.categorie.title }}</h5>
                                </a>
                                <h5>
                                    <strong>
                                        <a href=\"{{ path('produit_show', {id: produit.id}) }}\" class=\"dark-grey-text\">{{ produit.title }}
                                        <!-- <span class=\"badge badge-pill danger-color\">NEW</span> -->
                                        <!-- <span class=\"badge badge-pill primary-color\">bestseller</span> -->

                                        </a>
                                    </strong>
                                </h5>

                                <h4 class=\"font-weight-bold blue-text\">
                                    <strong>{{ produit.price }} €</strong>
                                </h4>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->
                {% endfor %}

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Products v.3-->

    </div>
</main>
<!--Main layout-->
{% endblock %}", "home/index.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/home/index.html.twig");
    }
}
