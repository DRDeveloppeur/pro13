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

/* blog/index.html.twig */
class __TwigTemplate_4870633971ff96202b4154c0aa32325da170b65d342129cfe32e79e0ff8da43b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        echo "Hello BlogController!";
        
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
        echo "<main id=\"blog\">
    <div class=\"container\">
        <h1 class=\"text-center\">Blog</h1>

        <!--Section: Comments-->
        <section class=\"my-5\">

            <!-- Card header -->
            <div class=\"card-header border-0 font-weight-bold\">4 comments</div>

            <div class=\"media d-block d-md-flex mt-4\">
                <img class=\"card-img-64 d-flex mx-auto mb-3\"
                    src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" alt=\"Generic placeholder image\">
                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                    <h5 class=\"font-weight-bold mt-0\">
                        <a href=\"\">Miley Steward</a>
                        <a href=\"\" class=\"pull-right\">
                            <i class=\"fas fa-reply\"></i>
                        </a>
                    </h5>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <div class=\"media d-block d-md-flex mt-4\">
                        <img class=\"card-img-64 d-flex mx-auto mb-3\"
                            src=\"https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg\"
                            alt=\"Generic placeholder image\">
                        <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                            <h5 class=\"font-weight-bold mt-0\">
                                <a href=\"\">Tommy Smith</a>
                                <a href=\"\" class=\"pull-right\">
                                    <i class=\"fas fa-reply\"></i>
                                </a>
                            </h5>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium,
                            totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>
                    </div>

                    <!-- Quick Reply -->
                    <div class=\"form-group mt-4\">
                        <label for=\"quickReplyFormComment\">Your comment</label>
                        <textarea class=\"form-control\" id=\"quickReplyFormComment\" rows=\"5\"></textarea>

                        <div class=\"text-center my-4\">
                            <button class=\"btn btn-primary btn-sm\" type=\"submit\">Post</button>
                        </div>
                    </div>

                    <div class=\"media d-block d-md-flex mt-3\">
                        <img class=\"card-img-64 d-flex mx-auto mb-3\"
                            src=\"https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg\"
                            alt=\"Generic placeholder image\">
                        <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                            <h5 class=\"font-weight-bold mt-0\">
                                <a href=\"\">Sylvester the Cat</a>
                                <a href=\"\" class=\"pull-right\">
                                    <i class=\"fas fa-reply\"></i>
                                </a>
                            </h5>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                            velit, sed
                            quia non numquam eius modi
                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"media d-block d-md-flex mt-3\">
                <img class=\"card-img-64 d-flex mx-auto mb-3\"
                    src=\"https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg\" alt=\"Generic placeholder image\">
                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                    <h5 class=\"font-weight-bold mt-0\">
                        <a href=\"\">Caroline Horwitz</a>
                        <a href=\"\" class=\"pull-right\">
                            <i class=\"fas fa-reply\"></i>
                        </a>
                    </h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti
                    atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                    culpa
                    officia deserunt mollitia animi, id est laborum et dolorum fuga.
                </div>
            </div>

            <!--Pagination -->
            <nav class=\"d-flex justify-content-center mt-5\">
                <ul class=\"pagination pg-blue mb-0\">

                    <!--First-->
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\">First</a>
                    </li>

                    <!--Arrow left-->
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>

                    <!--Numbers-->
                    <li class=\"page-item active\">
                        <a class=\"page-link\">1</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">2</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">3</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">4</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">5</a>
                    </li>

                    <!--Arrow right-->
                    <li class=\"page-item\">
                        <a class=\"page-link\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>

                    <!--Last-->
                    <li class=\"page-item\">
                        <a class=\"page-link\">Last</a>
                    </li>

                </ul>
            </nav>
            <!--Pagination -->

        </section>
        <!--Section: Comments-->
    </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
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

{% block title %}Hello BlogController!{% endblock %}

{% block body %}
<main id=\"blog\">
    <div class=\"container\">
        <h1 class=\"text-center\">Blog</h1>

        <!--Section: Comments-->
        <section class=\"my-5\">

            <!-- Card header -->
            <div class=\"card-header border-0 font-weight-bold\">4 comments</div>

            <div class=\"media d-block d-md-flex mt-4\">
                <img class=\"card-img-64 d-flex mx-auto mb-3\"
                    src=\"https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg\" alt=\"Generic placeholder image\">
                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                    <h5 class=\"font-weight-bold mt-0\">
                        <a href=\"\">Miley Steward</a>
                        <a href=\"\" class=\"pull-right\">
                            <i class=\"fas fa-reply\"></i>
                        </a>
                    </h5>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <div class=\"media d-block d-md-flex mt-4\">
                        <img class=\"card-img-64 d-flex mx-auto mb-3\"
                            src=\"https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg\"
                            alt=\"Generic placeholder image\">
                        <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                            <h5 class=\"font-weight-bold mt-0\">
                                <a href=\"\">Tommy Smith</a>
                                <a href=\"\" class=\"pull-right\">
                                    <i class=\"fas fa-reply\"></i>
                                </a>
                            </h5>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium,
                            totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>
                    </div>

                    <!-- Quick Reply -->
                    <div class=\"form-group mt-4\">
                        <label for=\"quickReplyFormComment\">Your comment</label>
                        <textarea class=\"form-control\" id=\"quickReplyFormComment\" rows=\"5\"></textarea>

                        <div class=\"text-center my-4\">
                            <button class=\"btn btn-primary btn-sm\" type=\"submit\">Post</button>
                        </div>
                    </div>

                    <div class=\"media d-block d-md-flex mt-3\">
                        <img class=\"card-img-64 d-flex mx-auto mb-3\"
                            src=\"https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg\"
                            alt=\"Generic placeholder image\">
                        <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                            <h5 class=\"font-weight-bold mt-0\">
                                <a href=\"\">Sylvester the Cat</a>
                                <a href=\"\" class=\"pull-right\">
                                    <i class=\"fas fa-reply\"></i>
                                </a>
                            </h5>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                            velit, sed
                            quia non numquam eius modi
                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"media d-block d-md-flex mt-3\">
                <img class=\"card-img-64 d-flex mx-auto mb-3\"
                    src=\"https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg\" alt=\"Generic placeholder image\">
                <div class=\"media-body text-center text-md-left ml-md-3 ml-0\">
                    <h5 class=\"font-weight-bold mt-0\">
                        <a href=\"\">Caroline Horwitz</a>
                        <a href=\"\" class=\"pull-right\">
                            <i class=\"fas fa-reply\"></i>
                        </a>
                    </h5>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti
                    atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                    culpa
                    officia deserunt mollitia animi, id est laborum et dolorum fuga.
                </div>
            </div>

            <!--Pagination -->
            <nav class=\"d-flex justify-content-center mt-5\">
                <ul class=\"pagination pg-blue mb-0\">

                    <!--First-->
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\">First</a>
                    </li>

                    <!--Arrow left-->
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>

                    <!--Numbers-->
                    <li class=\"page-item active\">
                        <a class=\"page-link\">1</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">2</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">3</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">4</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link\">5</a>
                    </li>

                    <!--Arrow right-->
                    <li class=\"page-item\">
                        <a class=\"page-link\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>

                    <!--Last-->
                    <li class=\"page-item\">
                        <a class=\"page-link\">Last</a>
                    </li>

                </ul>
            </nav>
            <!--Pagination -->

        </section>
        <!--Section: Comments-->
    </div>
</main>
{% endblock %}", "blog/index.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/blog/index.html.twig");
    }
}
