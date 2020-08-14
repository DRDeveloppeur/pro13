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

/* categorie/show.html.twig */
class __TwigTemplate_3e96c0aab4d612c323a123e58f0e8cec88281642cfcaada378baa718f447e58a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
<main class=\"mt-5 pt-5\">
    <div class=\"container\">

        <!--Section: Post-->
        <section class=\"mt-4\">

            <!--Grid row-->
            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-md-12 mb-4\">

                    <!--Featured Image-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">

                    </div>
                    <!--/.Featured Image-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body text-center\">

                            <p class=\"h5 my-4\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo " </p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In numquam officiis dicta
                                eligendi nemo totam. Sapiente illum nulla iste omnis expedita dignissimos ea dolores
                                aliquam temporibus. Quos quisquam maiores iusto?</p>

                            <h5 class=\"my-4\">
                                <strong>Suggestions</strong>
                            </h5>

                            <hr>

                            <!-- Logo carousel -->
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\"
                                data-interval=\"1800\">
                                <div class=\"carousel-inner\">


                                    <!-- First slide -->
                                    <div class=\"carousel-item active\">
                                        <!--Grid row-->
                                        <div class=\"row\">
                                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 55, $this->source); })()), "produits", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 56
            echo "                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center mb-3 mt-3\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 63), "html", null, true);
            echo "\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->

                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\"
                                                            class=\"grey-text\">
                                                            <h5>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 76), "title", [], "any", false, false, false, 76), "html", null, true);
            echo "</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\"
                                                                    class=\"dark-grey-text\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "title", [], "any", false, false, false, 81), "html", null, true);
            echo "</a>
                                                            </strong>
                                                        </h5>

                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 86), "html", null, true);
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
        // line 96
        echo "
                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- First slide -->
                                </div>
                            </div>
                            <!-- Logo carousel -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 96,  199 => 86,  191 => 81,  187 => 80,  180 => 76,  175 => 74,  163 => 65,  158 => 63,  149 => 56,  145 => 55,  120 => 33,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ categorie.title }}{% endblock %}

{% block body %}
<!--Main layout-->
<main class=\"mt-5 pt-5\">
    <div class=\"container\">

        <!--Section: Post-->
        <section class=\"mt-4\">

            <!--Grid row-->
            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-md-12 mb-4\">

                    <!--Featured Image-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <img src=\"{{ categorie.image }}\" class=\"img-fluid\" alt=\"\">

                    </div>
                    <!--/.Featured Image-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body text-center\">

                            <p class=\"h5 my-4\">{{ categorie.title }} </p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In numquam officiis dicta
                                eligendi nemo totam. Sapiente illum nulla iste omnis expedita dignissimos ea dolores
                                aliquam temporibus. Quos quisquam maiores iusto?</p>

                            <h5 class=\"my-4\">
                                <strong>Suggestions</strong>
                            </h5>

                            <hr>

                            <!-- Logo carousel -->
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\"
                                data-interval=\"1800\">
                                <div class=\"carousel-inner\">


                                    <!-- First slide -->
                                    <div class=\"carousel-item active\">
                                        <!--Grid row-->
                                        <div class=\"row\">
                                            {% for produit in categorie.produits %}
                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center mb-3 mt-3\">
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
                                                        <a href=\"{{ path('category', {id: produit.categorie.id}) }}\"
                                                            class=\"grey-text\">
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
                                        <!--/Grid row-->
                                    </div>
                                    <!-- First slide -->
                                </div>
                            </div>
                            <!-- Logo carousel -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->
{% endblock %}", "categorie/show.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/categorie/show.html.twig");
    }
}
