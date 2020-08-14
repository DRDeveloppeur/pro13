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

/* produit/show.html.twig */
class __TwigTemplate_802b352f35322c42f2ffeb47b4f0a561337549fedcf752319548822946f81563 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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

                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">

                <!--Content-->
                <div class=\"p-4\">

                    <div class=\"mb-3\">
                        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">
                            <span class=\"badge purple mr-1\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 29, $this->source); })()), "categorie", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                        </a>
                        <!-- <a href=\"\">
                            <span class=\"badge blue mr-1\">New</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge red mr-1\">Bestseller</span>
                        </a> -->
                    </div>

                    <p class=\"lead\">
                        <!-- <span class=\"mr-1\">
                            <del>\$200</del>
                        </span> -->
                        <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 43, $this->source); })()), "price", [], "any", false, false, false, 43), "html", null, true);
        echo " €</span>
                    </p>

                    <p class=\"lead font-weight-bold\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>

                    <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>

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

        <div class=\"row\">
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 123), "produits", [], "any", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 124
            echo "            <!--First column-->
            <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center mb-3 mt-3\">
                <div class=\"card\">

                    <!--Card image-->
                    <div class=\"view overlay\">
                        <img src=\"";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 130), "html", null, true);
            echo "\"
                            class=\"card-img-top\" alt=\"\">
                        <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 132)]), "html", null, true);
            echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class=\"card-body text-center\">
                        <!--Category & Title-->
                        <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\" class=\"grey-text\">
                            <h5>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 142), "title", [], "any", false, false, false, 142), "html", null, true);
            echo "</h5>
                        </a>
                        <h5>
                            <strong>
                                <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\"
                                    class=\"dark-grey-text\">";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "title", [], "any", false, false, false, 147), "html", null, true);
            echo "</a>
                            </strong>
                        </h5>

                        <h4 class=\"font-weight-bold blue-text\">
                            <strong>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 152), "html", null, true);
            echo " €</strong>
                        </h4>

                    </div>
                    <!--Card content-->

                </div>
            </div>
            <!--/First column-->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "        </div>
    </div>
</main>
<!--Main layout-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 162,  277 => 152,  269 => 147,  265 => 146,  258 => 142,  254 => 141,  242 => 132,  237 => 130,  229 => 124,  225 => 123,  147 => 48,  142 => 46,  136 => 43,  119 => 29,  115 => 28,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ produit.title }}{% endblock %}

{% block body %}
<!--Main layout-->
<main class=\"mt-5 pt-4\">
    <div class=\"container dark-grey-text mt-5\">

        <!--Grid row-->
        <div class=\"row wow fadeIn\">

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">

                <img src=\"{{ produit.image }}\" class=\"img-fluid\" alt=\"\">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">

                <!--Content-->
                <div class=\"p-4\">

                    <div class=\"mb-3\">
                        <a href=\"{{ path('category', {'id': produit.categorie.id}) }}\">
                            <span class=\"badge purple mr-1\">{{ produit.categorie.title }}</span>
                        </a>
                        <!-- <a href=\"\">
                            <span class=\"badge blue mr-1\">New</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge red mr-1\">Bestseller</span>
                        </a> -->
                    </div>

                    <p class=\"lead\">
                        <!-- <span class=\"mr-1\">
                            <del>\$200</del>
                        </span> -->
                        <span>{{ produit.price }} €</span>
                    </p>

                    <p class=\"lead font-weight-bold\">{{ produit.title }}</p>

                    <p>{{ produit.description }}</p>

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

        <div class=\"row\">
            {% for produit in produit.categorie.produits %}
            <!--First column-->
            <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center mb-3 mt-3\">
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
                                <a href=\"{{ path('produit_show', {id: produit.id}) }}\"
                                    class=\"dark-grey-text\">{{ produit.title }}</a>
                            </strong>
                        </h5>

                        <h4 class=\"font-weight-bold blue-text\">
                            <strong>{{ produit.price }} €</strong>
                        </h4>

                    </div>
                    <!--Card content-->

                </div>
            </div>
            <!--/First column-->
            {% endfor %}
        </div>
    </div>
</main>
<!--Main layout-->
{% endblock %}", "produit/show.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/produit/show.html.twig");
    }
}
