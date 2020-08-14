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

/* articles/index.html.twig */
class __TwigTemplate_7b640071ddd742c288fb31e665a734d499d2c5d48a55b50d87ef1be20afa035f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
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

        echo "Articles";
        
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

        <!--Section: Cards-->
        <section class=\"pt-4\">

            <!-- Heading & Description -->
            <div class=\"wow fadeIn\">
                <!--Section heading-->
                <h2 class=\"h1 text-center mb-5\">Articles</h2>
                <!--Section description-->
                <p class=\"text-center\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi doloremque,
                    odit, omnis officiis ab nesciunt accusantium eveniet suscipit cumque praesentium error impedit!
                    Inventore distinctio saepe consequuntur porro harum, consequatur quisquam.</p>
                <p class=\"text-center mb-5 pb-5\">Trusted by over
                    <strong>400 000</strong> developers and designers. Easy to use & customize. 400+ material UI
                    elements, templates
                    & tutorials.</p>
            </div>
            <!-- Heading & Description -->

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://mdbootstrap.com/wp-content/uploads/2018/01/push-fb.jpg\" class=\"img-fluid\"
                            alt=\"\">
                        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 1]);
        echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Article 1</strong>
                    </h3>
                    <p class=\"grey-text\">Push messaging provides a simple and effective way to re-engage with your users
                        and in this tutorial
                        you'll learn how to add push notifications to your web app</p>
                    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 1]);
        echo "\" class=\"btn btn-primary btn-md\">More
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
                        <img src=\"https://mdbootstrap.com/wp-content/uploads/2017/11/brandflow-tutorial-fb.jpg\"
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 2]);
        echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Article 2</strong>
                    </h3>
                    <p class=\"grey-text\">Learn how to create a smart website which learns your user and reacts properly
                        to his behavior.</p>
                    <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 2]);
        echo "\" class=\"btn btn-primary btn-md\">More
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
                        <img src=\"https://mdbootstrap.com/wp-content/uploads/2018/01/push-fb.jpg\" class=\"img-fluid\"
                            alt=\"\">
                        <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 3]);
        echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Article 3</strong>
                    </h3>
                    <p class=\"grey-text\">Push messaging provides a simple and effective way to re-engage with your users
                        and in this tutorial
                        you'll learn how to add push notifications to your web app</p>
                    <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => 3]);
        echo "\" class=\"btn btn-primary btn-md\">More
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
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 121,  202 => 106,  179 => 86,  162 => 72,  139 => 52,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles{% endblock %}

{% block body %}
<!--Main layout-->
<main class=\"mt-5 pt-5\">
    <div class=\"container\">

        <!--Section: Cards-->
        <section class=\"pt-4\">

            <!-- Heading & Description -->
            <div class=\"wow fadeIn\">
                <!--Section heading-->
                <h2 class=\"h1 text-center mb-5\">Articles</h2>
                <!--Section description-->
                <p class=\"text-center\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi doloremque,
                    odit, omnis officiis ab nesciunt accusantium eveniet suscipit cumque praesentium error impedit!
                    Inventore distinctio saepe consequuntur porro harum, consequatur quisquam.</p>
                <p class=\"text-center mb-5 pb-5\">Trusted by over
                    <strong>400 000</strong> developers and designers. Easy to use & customize. 400+ material UI
                    elements, templates
                    & tutorials.</p>
            </div>
            <!-- Heading & Description -->

            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"https://mdbootstrap.com/wp-content/uploads/2018/01/push-fb.jpg\" class=\"img-fluid\"
                            alt=\"\">
                        <a href=\"{{ path('article', {'id': 1}) }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Article 1</strong>
                    </h3>
                    <p class=\"grey-text\">Push messaging provides a simple and effective way to re-engage with your users
                        and in this tutorial
                        you'll learn how to add push notifications to your web app</p>
                    <a href=\"{{ path('article', {'id': 1}) }}\" class=\"btn btn-primary btn-md\">More
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
                        <img src=\"https://mdbootstrap.com/wp-content/uploads/2017/11/brandflow-tutorial-fb.jpg\"
                            class=\"img-fluid\" alt=\"\">
                        <a href=\"{{ path('article', {'id': 2}) }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Article 2</strong>
                    </h3>
                    <p class=\"grey-text\">Learn how to create a smart website which learns your user and reacts properly
                        to his behavior.</p>
                    <a href=\"{{ path('article', {'id': 2}) }}\" class=\"btn btn-primary btn-md\">More
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
                        <img src=\"https://mdbootstrap.com/wp-content/uploads/2018/01/push-fb.jpg\" class=\"img-fluid\"
                            alt=\"\">
                        <a href=\"{{ path('article', {'id': 3}) }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>Article 3</strong>
                    </h3>
                    <p class=\"grey-text\">Push messaging provides a simple and effective way to re-engage with your users
                        and in this tutorial
                        you'll learn how to add push notifications to your web app</p>
                    <a href=\"{{ path('article', {'id': 3}) }}\" class=\"btn btn-primary btn-md\">More
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
{% endblock %}", "articles/index.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/articles/index.html.twig");
    }
}
