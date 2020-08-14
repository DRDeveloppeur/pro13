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

/* categories/show.html.twig */
class __TwigTemplate_264acb431b982f39d9e58205b82e692606c351ebdb6cddb8a8eaf8cc9294600a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/show.html.twig", 1);
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

        echo "Categories";
        
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

                        <img src=\"https://mdbootstrap.com/img/Photos/Slides/img%20(148).jpg\" class=\"img-fluid\" alt=\"\">

                    </div>
                    <!--/.Featured Image-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body text-center\">

                            <p class=\"h5 my-4\">Article ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })()), "html", null, true);
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
                                    <div class=\"carousel-item\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
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
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 263
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 277
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 301
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 310
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 315
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 348
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 353
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
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
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 387
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 396
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 401
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 425
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 434
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 439
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 463
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 472
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 477
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"";
        // line 501
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"";
        // line 510
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"";
        // line 515
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => 2]);
        echo "\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
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
        return "categories/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 515,  699 => 510,  687 => 501,  660 => 477,  652 => 472,  640 => 463,  613 => 439,  605 => 434,  593 => 425,  566 => 401,  558 => 396,  546 => 387,  509 => 353,  501 => 348,  489 => 339,  462 => 315,  454 => 310,  442 => 301,  415 => 277,  407 => 272,  395 => 263,  368 => 239,  360 => 234,  348 => 225,  311 => 191,  303 => 186,  291 => 177,  264 => 153,  256 => 148,  244 => 139,  217 => 115,  209 => 110,  197 => 101,  170 => 77,  162 => 72,  150 => 63,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categories{% endblock %}

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

                        <img src=\"https://mdbootstrap.com/img/Photos/Slides/img%20(148).jpg\" class=\"img-fluid\" alt=\"\">

                    </div>
                    <!--/.Featured Image-->

                    <!--Card-->
                    <div class=\"card mb-4 wow fadeIn\">

                        <!--Card content-->
                        <div class=\"card-body text-center\">

                            <p class=\"h5 my-4\">Article {{ id }} </p>

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
                                    <div class=\"carousel-item\">
                                        <!--Grid row-->
                                        <div class=\"row\">

                                            <!--First column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
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
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
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
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Second column-->

                                            <!--Third column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
                                            </div>
                                            <!--/Third column-->

                                            <!--Fourth column-->
                                            <div
                                                class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                                                <div class=\"card\">

                                                    <!--Card image-->
                                                    <div class=\"view overlay\">
                                                        <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                                            class=\"card-img-top\" alt=\"\">
                                                        <a href=\"{{ path('product', {id: 2}) }}\">
                                                            <div class=\"mask rgba-white-slight\"></div>
                                                        </a>
                                                    </div>
                                                    <!--Card image-->
                            
                                                    <!--Card content-->
                                                    <div class=\"card-body text-center\">
                                                        <!--Category & Title-->
                                                        <a href=\"{{ path('category', {id: 2}) }}\" class=\"grey-text\">
                                                            <h5>Sport wear</h5>
                                                        </a>
                                                        <h5>
                                                            <strong>
                                                                <a href=\"{{ path('product', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
                                                            </strong>
                                                        </h5>
                            
                                                        <h4 class=\"font-weight-bold blue-text\">
                                                            <strong>139 €</strong>
                                                        </h4>
                            
                                                    </div>
                                                    <!--Card content-->
                            
                                                </div>
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

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->
{% endblock %}", "categories/show.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/categories/show.html.twig");
    }
}
