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

/* products/show.html.twig */
class __TwigTemplate_07f8bd97334684dde234b740ec1f08bdb7a93fdc0d30c65e6589fd1fd524e552 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/show.html.twig", 1);
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

        echo "Produit ";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        echo "<!--Main layout-->
<main class=\"mt-5 pt-4\">
    <div class=\"container dark-grey-text mt-5\">

        <!--Grid row-->
        <div class=\"row wow fadeIn\">

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">

                <!--Content-->
                <div class=\"p-4\">

                    <div class=\"mb-3\">
                        <a href=\"\">
                            <span class=\"badge purple mr-1\">Category 2</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge blue mr-1\">New</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge red mr-1\">Bestseller</span>
                        </a>
                    </div>

                    <p class=\"lead\">
                        <span class=\"mr-1\">
                            <del>\$200</del>
                        </span>
                        <span>\$100</span>
                    </p>

                    <p class=\"lead font-weight-bold\">Description</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia
                        ipsa
                        sint voluptatibus!
                        Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

                    <form class=\"d-flex justify-content-left\">
                        <!-- Default input -->
                        <input type=\"number\" value=\"1\" aria-label=\"Search\" class=\"form-control\" style=\"width: 100px\">
                        <button class=\"btn btn-primary btn-md my-0 p\" type=\"submit\">Add to cart
                            <i class=\"fas fa-shopping-cart ml-1\"></i>
                        </button>

                    </form>

                </div>
                <!--Content-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr>

        <!--Grid row-->
        <div class=\"row d-flex justify-content-center wow fadeIn\">

            <!--Grid column-->
            <div class=\"col-md-6 text-center\">

                <h4 class=\"my-4 h4\">Additional information</h4>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta
                    odit
                    voluptates,
                    quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class=\"row wow fadeIn\">

            <!--Grid column-->
            <div class=\"col-lg-4 col-md-12 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-4 col-md-6 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-4 col-md-6 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit {{ id }}{% endblock %}

{% block body %}
<!--Main layout-->
<main class=\"mt-5 pt-4\">
    <div class=\"container dark-grey-text mt-5\">

        <!--Grid row-->
        <div class=\"row wow fadeIn\">

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">

                <!--Content-->
                <div class=\"p-4\">

                    <div class=\"mb-3\">
                        <a href=\"\">
                            <span class=\"badge purple mr-1\">Category 2</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge blue mr-1\">New</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge red mr-1\">Bestseller</span>
                        </a>
                    </div>

                    <p class=\"lead\">
                        <span class=\"mr-1\">
                            <del>\$200</del>
                        </span>
                        <span>\$100</span>
                    </p>

                    <p class=\"lead font-weight-bold\">Description</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia
                        ipsa
                        sint voluptatibus!
                        Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

                    <form class=\"d-flex justify-content-left\">
                        <!-- Default input -->
                        <input type=\"number\" value=\"1\" aria-label=\"Search\" class=\"form-control\" style=\"width: 100px\">
                        <button class=\"btn btn-primary btn-md my-0 p\" type=\"submit\">Add to cart
                            <i class=\"fas fa-shopping-cart ml-1\"></i>
                        </button>

                    </form>

                </div>
                <!--Content-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr>

        <!--Grid row-->
        <div class=\"row d-flex justify-content-center wow fadeIn\">

            <!--Grid column-->
            <div class=\"col-md-6 text-center\">

                <h4 class=\"my-4 h4\">Additional information</h4>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta
                    odit
                    voluptates,
                    quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class=\"row wow fadeIn\">

            <!--Grid column-->
            <div class=\"col-lg-4 col-md-12 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-4 col-md-6 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-4 col-md-6 mb-4\">

                <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg\" class=\"img-fluid\"
                    alt=\"\">

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->
{% endblock %}", "products/show.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/products/show.html.twig");
    }
}
