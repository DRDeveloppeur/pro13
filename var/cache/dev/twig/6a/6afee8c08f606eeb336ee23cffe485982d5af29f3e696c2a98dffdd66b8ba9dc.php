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

/* article/index.html.twig */
class __TwigTemplate_58055abc94eba8d3afc0eb584dc841b0d7eb0369319ffd48e255e4a5b6e55e75 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        echo "Article index";
        
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
        echo "<main class=\"mt-5 pt-5\">
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
                    & tutorials.
                </p>

                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\" class=\"btn btn-outline-black\">Nouvelle article</a>
            </div>
            
            <!-- Heading & Description -->
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"img-fluid\"
                            alt=\"\">
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</strong>
                    </h3>
                    <p class=\"grey-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "resum", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md\">More
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
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
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 64,  157 => 53,  153 => 52,  148 => 50,  135 => 40,  130 => 38,  121 => 31,  117 => 30,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article index{% endblock %}

{% block body %}
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
                    & tutorials.
                </p>

                <a href=\"{{ path('article_new') }}\" class=\"btn btn-outline-black\">Nouvelle article</a>
            </div>
            
            <!-- Heading & Description -->
            {% for article in articles %}
            <!--Grid row-->
            <div class=\"row wow fadeIn\">

                <!--Grid column-->
                <div class=\"col-lg-5 col-xl-4 mb-4\">
                    <!--Featured image-->
                    <div class=\"view overlay rounded z-depth-1\">
                        <img src=\"{{ article.image }}\" class=\"img-fluid\"
                            alt=\"\">
                        <a href=\"{{ path('article_show', {'id': article.id}) }}\">
                            <div class=\"mask rgba-white-slight\"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class=\"col-lg-7 col-xl-7 ml-xl-4 mb-4\">
                    <h3 class=\"mb-3 font-weight-bold dark-grey-text\">
                        <strong>{{ article.title }}</strong>
                    </h3>
                    <p class=\"grey-text\">{{ article.resum }}</p>
                    <a href=\"{{ path('article_show', {'id': article.id}) }}\" class=\"btn btn-primary btn-md\">More
                        <i class=\"fas fa-play ml-2\"></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class=\"mb-5\">
            {% endfor %}

        </section>
        <!--Section: Cards-->

    </div>
</main>
<!--Main layout-->
{% endblock %}
", "article/index.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/article/index.html.twig");
    }
}
