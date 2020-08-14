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

/* article/show.html.twig */
class __TwigTemplate_172d4dfc058c9caf727b760ee1ba4ef720943ccb301e182572f1011c369780a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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

        echo "Article";
        
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
                <div class=\"col-md-8 mb-4\">

                    <!--Featured Image-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">

                    </div>
                    <!--/.Featured Image-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body text-center\">

                            <p class=\"h5 my-4\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo " </p>

                            <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>

                            <h5 class=\"my-4\">
                                <strong>MDB - trusted by 400 000 + developers &amp; designers</strong>
                            </h5>

                            <hr>

                            <!-- Logo carousel -->
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\"
                                data-interval=\"1800\">
                                <div class=\"carousel-inner\">
                                    <!-- First slide -->
                                    <div class=\"carousel-item\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/nike.png\"
                                                    class=\"img-fluid px-4\" alt=\"Nike - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/amazon.png\"
                                                    class=\"img-fluid px-4\" alt=\"Amazon - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/sony.png\"
                                                    class=\"img-fluid px-4\" alt=\"Sony - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/samsung.png\"
                                                    class=\"img-fluid px-4\" alt=\"Samsung - logo\"
                                                    style=\"max-height: 40px\">
                                            </div>
                                            <!--/Fourth column-->

                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- First slide -->

                                    <!-- Second slide -->
                                    <div class=\"carousel-item active carousel-item-left\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/airbus.png\"
                                                    class=\"img-fluid px-4\" alt=\"Airbus - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/yahoo.png\"
                                                    class=\"img-fluid px-4\" alt=\"Yahoo - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/deloitte.png\"
                                                    class=\"img-fluid px-4\" alt=\"Deloitte - logo\"
                                                    style=\"max-height: 40px\">
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/ge.png\"
                                                    class=\"img-fluid px-4\" alt=\"GE - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Fourth column-->

                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- Second slide -->

                                    <!-- Third slide -->
                                    <div class=\"carousel-item carousel-item-next carousel-item-left\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/kpmg.png\"
                                                    class=\"img-fluid px-4\" alt=\"KPMG - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/unity.png\"
                                                    class=\"img-fluid px-4\" alt=\"Unity - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/ikea.png\"
                                                    class=\"img-fluid px-4\" alt=\"Ikea - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/aegon.png\"
                                                    class=\"img-fluid px-4\" alt=\"Aegon - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Fourth column-->

                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- Third slide -->
                                </div>
                            </div>
                            <!-- Logo carousel -->

                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body\">

                            <p class=\"h5 my-4\">That's a very long heading </p>


                            <blockquote class=\"blockquote\">
                                <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                                <footer class=\"blockquote-footer\">Someone famous in
                                    <cite title=\"Source Title\">Source Title</cite>
                                </footer>
                            </blockquote>

                            <p class=\"h5 my-4\">That's a very long heading </p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt
                                corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt
                                corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt
                                corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>

                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <div class=\"card-header font-weight-bold\">
                            <span>About author</span>
                            <span class=\"pull-right\">
                                <a href=\"\">
                                    <i class=\"fab fa-facebook-f mr-2\"></i>
                                </a>
                                <a href=\"\">
                                    <i class=\"fab fa-twitter mr-2\"></i>
                                </a>
                                <a href=\"\">
                                    <i class=\"fab fa-instagram mr-2\"></i>
                                </a>
                                <a href=\"\">
                                    <i class=\"fab fa-linkedin-in mr-2\"></i>
                                </a>
                            </span>
                        </div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <div class=\"media d-block d-md-flex mt-3\">
                                <img class=\"d-flex mb-3 mx-auto z-depth-1\"
                                    src=\"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 248, $this->source); })()), "authorImage", [], "any", false, false, false, 248), "html", null, true);
        echo "\"
                                    alt=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 249, $this->source); })()), "author", [], "any", false, false, false, 249), "html", null, true);
        echo " image\" style=\"width: 100px;\">
                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                    <h5 class=\"mt-0 font-weight-bold\">";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 251, $this->source); })()), "author", [], "any", false, false, false, 251), "html", null, true);
        echo "
                                    </h5>
                                    ";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 253, $this->source); })()), "autherComment", [], "any", false, false, false, 253), "html", null, true);
        echo "
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-md-4 mb-4\">

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <div class=\"card-header\">Related articles</div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <ul class=\"list-unstyled\">
                                ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 277, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 278
            echo "                                <li class=\"media\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 280), "html", null, true);
            echo "\"
                                        width=\"100\"
                                        alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <a href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 284)]), "html", null, true);
            echo "\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 285), "html", null, true);
            echo "</h5>
                                        </a>
                                        ";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "resum", [], "any", false, false, false, 287), "html", null, true);
            echo "
                                    </div>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                            </ul>

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
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 291,  406 => 287,  401 => 285,  397 => 284,  390 => 280,  386 => 278,  382 => 277,  355 => 253,  350 => 251,  345 => 249,  341 => 248,  125 => 35,  120 => 33,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article{% endblock %}

{% block body %}
<!--Main layout-->
<main class=\"mt-5 pt-5\">
    <div class=\"container\">

        <!--Section: Post-->
        <section class=\"mt-4\">

            <!--Grid row-->
            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-md-8 mb-4\">

                    <!--Featured Image-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <img src=\"{{ article.image }}\" class=\"img-fluid\" alt=\"\">

                    </div>
                    <!--/.Featured Image-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body text-center\">

                            <p class=\"h5 my-4\">{{ article.title }} </p>

                            <p>{{ article.description }}</p>

                            <h5 class=\"my-4\">
                                <strong>MDB - trusted by 400 000 + developers &amp; designers</strong>
                            </h5>

                            <hr>

                            <!-- Logo carousel -->
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\"
                                data-interval=\"1800\">
                                <div class=\"carousel-inner\">
                                    <!-- First slide -->
                                    <div class=\"carousel-item\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/nike.png\"
                                                    class=\"img-fluid px-4\" alt=\"Nike - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/amazon.png\"
                                                    class=\"img-fluid px-4\" alt=\"Amazon - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/sony.png\"
                                                    class=\"img-fluid px-4\" alt=\"Sony - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/samsung.png\"
                                                    class=\"img-fluid px-4\" alt=\"Samsung - logo\"
                                                    style=\"max-height: 40px\">
                                            </div>
                                            <!--/Fourth column-->

                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- First slide -->

                                    <!-- Second slide -->
                                    <div class=\"carousel-item active carousel-item-left\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/airbus.png\"
                                                    class=\"img-fluid px-4\" alt=\"Airbus - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/yahoo.png\"
                                                    class=\"img-fluid px-4\" alt=\"Yahoo - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/deloitte.png\"
                                                    class=\"img-fluid px-4\" alt=\"Deloitte - logo\"
                                                    style=\"max-height: 40px\">
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/ge.png\"
                                                    class=\"img-fluid px-4\" alt=\"GE - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Fourth column-->

                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- Second slide -->

                                    <!-- Third slide -->
                                    <div class=\"carousel-item carousel-item-next carousel-item-left\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/kpmg.png\"
                                                    class=\"img-fluid px-4\" alt=\"KPMG - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/unity.png\"
                                                    class=\"img-fluid px-4\" alt=\"Unity - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/ikea.png\"
                                                    class=\"img-fluid px-4\" alt=\"Ikea - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <img src=\"https://mdbootstrap.com/img/logo/brands/aegon.png\"
                                                    class=\"img-fluid px-4\" alt=\"Aegon - logo\" style=\"max-height: 40px\">
                                            </div>
                                            <!--/Fourth column-->

                                        </div>
                                        <!--/Grid row-->
                                    </div>
                                    <!-- Third slide -->
                                </div>
                            </div>
                            <!-- Logo carousel -->

                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body\">

                            <p class=\"h5 my-4\">That's a very long heading </p>


                            <blockquote class=\"blockquote\">
                                <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                                <footer class=\"blockquote-footer\">Someone famous in
                                    <cite title=\"Source Title\">Source Title</cite>
                                </footer>
                            </blockquote>

                            <p class=\"h5 my-4\">That's a very long heading </p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt
                                corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt
                                corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt
                                corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>

                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <div class=\"card-header font-weight-bold\">
                            <span>About author</span>
                            <span class=\"pull-right\">
                                <a href=\"\">
                                    <i class=\"fab fa-facebook-f mr-2\"></i>
                                </a>
                                <a href=\"\">
                                    <i class=\"fab fa-twitter mr-2\"></i>
                                </a>
                                <a href=\"\">
                                    <i class=\"fab fa-instagram mr-2\"></i>
                                </a>
                                <a href=\"\">
                                    <i class=\"fab fa-linkedin-in mr-2\"></i>
                                </a>
                            </span>
                        </div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <div class=\"media d-block d-md-flex mt-3\">
                                <img class=\"d-flex mb-3 mx-auto z-depth-1\"
                                    src=\"{{ article.authorImage }}\"
                                    alt=\"{{ article.author }} image\" style=\"width: 100px;\">
                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                    <h5 class=\"mt-0 font-weight-bold\">{{ article.author }}
                                    </h5>
                                    {{ article.autherComment }}
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-md-4 mb-4\">

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <div class=\"card-header\">Related articles</div>

                        <!--Card content-->
                        <div class=\"card-body\">

                            <ul class=\"list-unstyled\">
                                {% for article in articles %}
                                <li class=\"media\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"{{ article.image }}\"
                                        width=\"100\"
                                        alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <a href=\"{{ path('article_show', {'id': article.id}) }}\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">{{ article.title }}</h5>
                                        </a>
                                        {{ article.resum }}
                                    </div>
                                </li>
                                {% endfor %}
                            </ul>

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
{% endblock %}", "article/show.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/article/show.html.twig");
    }
}
