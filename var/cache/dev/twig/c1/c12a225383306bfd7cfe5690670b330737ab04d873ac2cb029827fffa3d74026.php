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

/* contact/index.html.twig */
class __TwigTemplate_a50181dd7b36de000c2c37715f9ecf23656e3703b20a4a4aec1649105e362890 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact";
        
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
        echo "<main id=\"contact\">
    <div class=\"container\">
        <!--Section: Contact v.2-->
        <section class=\"mb-4\">

            <!--Section heading-->
            <h2 class=\"h1-responsive font-weight-bold text-center my-4\">Contact us</h2>
            <!--Section description-->
            <p class=\"text-center w-responsive mx-auto mb-5\">Do you have any questions? Please do not hesitate to
                contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-md-9 mb-md-0 mb-5\">
                    <form id=\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">

                        <!--Grid row-->
                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-md-6\">
                                <div class=\"md-form mb-0\">
                                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                                    <label for=\"name\" class=\"\">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-md-6\">
                                <div class=\"md-form mb-0\">
                                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                                    <label for=\"email\" class=\"\">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"md-form mb-0\">
                                    <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                                    <label for=\"subject\" class=\"\">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-md-12\">

                                <div class=\"md-form\">
                                    <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"2\"
                                        class=\"form-control md-textarea\"></textarea>
                                    <label for=\"message\">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class=\"text-center text-md-left\">
                        <a class=\"btn btn-primary\" onclick=\"document.getElementById('contact-form').submit();\">Send</a>
                    </div>
                    <div class=\"status\"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-md-3 text-center\">
                    <ul class=\"list-unstyled mb-0\">
                        <li><i class=\"fas fa-map-marker-alt fa-2x\"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>

                        <li><i class=\"fas fa-phone mt-4 fa-2x\"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class=\"fas fa-envelope mt-4 fa-2x\"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->
    </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
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

{% block title %}Contact{% endblock %}

{% block body %}
<main id=\"contact\">
    <div class=\"container\">
        <!--Section: Contact v.2-->
        <section class=\"mb-4\">

            <!--Section heading-->
            <h2 class=\"h1-responsive font-weight-bold text-center my-4\">Contact us</h2>
            <!--Section description-->
            <p class=\"text-center w-responsive mx-auto mb-5\">Do you have any questions? Please do not hesitate to
                contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class=\"row\">

                <!--Grid column-->
                <div class=\"col-md-9 mb-md-0 mb-5\">
                    <form id=\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">

                        <!--Grid row-->
                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-md-6\">
                                <div class=\"md-form mb-0\">
                                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                                    <label for=\"name\" class=\"\">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class=\"col-md-6\">
                                <div class=\"md-form mb-0\">
                                    <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                                    <label for=\"email\" class=\"\">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"md-form mb-0\">
                                    <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                                    <label for=\"subject\" class=\"\">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class=\"row\">

                            <!--Grid column-->
                            <div class=\"col-md-12\">

                                <div class=\"md-form\">
                                    <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"2\"
                                        class=\"form-control md-textarea\"></textarea>
                                    <label for=\"message\">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class=\"text-center text-md-left\">
                        <a class=\"btn btn-primary\" onclick=\"document.getElementById('contact-form').submit();\">Send</a>
                    </div>
                    <div class=\"status\"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-md-3 text-center\">
                    <ul class=\"list-unstyled mb-0\">
                        <li><i class=\"fas fa-map-marker-alt fa-2x\"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>

                        <li><i class=\"fas fa-phone mt-4 fa-2x\"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class=\"fas fa-envelope mt-4 fa-2x\"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->
    </div>
</main>
{% endblock %}", "contact/index.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/contact/index.html.twig");
    }
}
