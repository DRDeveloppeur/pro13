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

/* articles/show.html.twig */
class __TwigTemplate_80350ee028ba8e08b1e936f4048be17a21e3423c6d96ee42049f9b2ffff7143d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/show.html.twig", 1);
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
                                    src=\"https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg\"
                                    alt=\"Generic placeholder image\" style=\"width: 100px;\">
                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                    <h5 class=\"mt-0 font-weight-bold\">Caroline Horwitz
                                    </h5>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti
                                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                    dolorum
                                    fuga.
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
                                <li class=\"media\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg\"
                                        alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <a href=\"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 1]);
        echo "\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">Article 1</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class=\"media my-4\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg\" alt=\"An image\">
                                    <div class=\"media-body\">
                                        <a href=\"";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 2]);
        echo "\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">Article 2</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg\"
                                        alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <a href=\"";
        // line 310
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 3]);
        echo "\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">Article 3</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
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

        <!-- Third slide -->
        <div class=\"carousel-item carousel-item-next carousel-item-left\">
            <!--Grid row-->
            <div class=\"row\">

                <!--First column-->
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"";
        // line 345
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
        echo "\">
                                <div class=\"mask rgba-white-slight\"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class=\"card-body text-center\">
                            <!--Category & Title-->
                            <a href=\"";
        // line 354
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href=\"";
        // line 359
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
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
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"";
        // line 382
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
        echo "\">
                                <div class=\"mask rgba-white-slight\"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class=\"card-body text-center\">
                            <!--Category & Title-->
                            <a href=\"";
        // line 391
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href=\"";
        // line 396
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
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
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"";
        // line 419
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
        echo "\">
                                <div class=\"mask rgba-white-slight\"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class=\"card-body text-center\">
                            <!--Category & Title-->
                            <a href=\"";
        // line 428
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href=\"";
        // line 433
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
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
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"";
        // line 456
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
        echo "\">
                                <div class=\"mask rgba-white-slight\"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class=\"card-body text-center\">
                            <!--Category & Title-->
                            <a href=\"";
        // line 465
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => 2]);
        echo "\" class=\"grey-text\">
                                <h5>Sport wear</h5>
                            </a>
                            <h5>
                                <strong>
                                    <a href=\"";
        // line 470
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => 2]);
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
</main>
<!--Main layout-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 470,  591 => 465,  579 => 456,  553 => 433,  545 => 428,  533 => 419,  507 => 396,  499 => 391,  487 => 382,  461 => 359,  453 => 354,  441 => 345,  403 => 310,  389 => 299,  376 => 289,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                    src=\"https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg\"
                                    alt=\"Generic placeholder image\" style=\"width: 100px;\">
                                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                                    <h5 class=\"mt-0 font-weight-bold\">Caroline Horwitz
                                    </h5>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti
                                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                    dolorum
                                    fuga.
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
                                <li class=\"media\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg\"
                                        alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <a href=\"{{ path('article', {'id': 1}) }}\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">Article 1</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class=\"media my-4\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg\" alt=\"An image\">
                                    <div class=\"media-body\">
                                        <a href=\"{{ path('article', {'id': 2}) }}\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">Article 2</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"d-flex mr-3\"
                                        src=\"https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg\"
                                        alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <a href=\"{{ path('article', {'id': 3}) }}\">
                                            <h5 class=\"mt-0 mb-1 font-weight-bold\">Article 3</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
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

        <!-- Third slide -->
        <div class=\"carousel-item carousel-item-next carousel-item-left\">
            <!--Grid row-->
            <div class=\"row\">

                <!--First column-->
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"{{ path('produit_show', {id: 2}) }}\">
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
                                    <a href=\"{{ path('produit_show', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
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
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"{{ path('produit_show', {id: 2}) }}\">
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
                                    <a href=\"{{ path('produit_show', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
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
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"{{ path('produit_show', {id: 2}) }}\">
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
                                    <a href=\"{{ path('produit_show', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
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
                <div class=\"col-lg-3 col-md-6 d-flex align-items-center justify-content-center\">
                    <div class=\"card\">

                        <!--Card image-->
                        <div class=\"view overlay\">
                            <img src=\"https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg\"
                                class=\"card-img-top\" alt=\"\">
                            <a href=\"{{ path('produit_show', {id: 2}) }}\">
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
                                    <a href=\"{{ path('produit_show', {id: 2}) }}\" class=\"dark-grey-text\">Sweatshirt</a>
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
</main>
<!--Main layout-->
{% endblock %}", "articles/show.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/articles/show.html.twig");
    }
}
