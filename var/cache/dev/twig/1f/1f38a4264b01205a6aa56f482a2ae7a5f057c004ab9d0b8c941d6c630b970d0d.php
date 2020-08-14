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

/* base.html.twig */
class __TwigTemplate_755a9387ea19c184c464cad074d7f826f9ce8f2fd98058de425e5bf540c7ebe7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\">
    <!-- Google Fonts -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">
    <!-- Bootstrap core CSS -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    <!-- JQuery -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js\"></script>

    <!-- JQuery -->
    <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mdb.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mdb.js"), "html", null, true);
        echo "\"></script>
    <!-- Initializations -->
    <script type=\"text/javascript\">
        new WOW().init();
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/md-flash.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
    ";
        // line 54
        $context["uri"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54);
        // line 55
        echo "    <!--Navbar -->
    <nav class=\"mb-1 navbar navbar-expand-lg navbar-dark bg-dark fixed-top scrolling-navbar\">
        <a class=\"navbar-brand\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fas fa-home\"></i></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent-333\"
            aria-controls=\"navbarSupportedContent-333\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent-333\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item ";
        // line 64
        if (((0 === twig_compare((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 64, $this->source); })()), "home")) || (0 === twig_compare((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 64, $this->source); })()), "")))) {
            echo " active ";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                </li>

                <li class=\"nav-item ";
        // line 68
        if ((0 === twig_compare((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 68, $this->source); })()), "categorie_index"))) {
            echo " active ";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\">Categories</a>
                </li>

                <li class=\"nav-item ";
        // line 72
        if ((0 === twig_compare((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 72, $this->source); })()), "article_index"))) {
            echo " active ";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">Articles</a>
                </li>

                <li class=\"nav-item ";
        // line 76
        if ((0 === twig_compare((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 76, $this->source); })()), "nous"))) {
            echo " active ";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nous");
        echo "\">Qui sommes-nous</a>
                </li>

                <li class=\"nav-item ";
        // line 80
        if ((0 === twig_compare((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 80, $this->source); })()), "contact"))) {
            echo " active ";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                </li>

                <li class=\"nav-item ";
        // line 84
        if ((0 === twig_compare((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 84, $this->source); })()), "admin"))) {
            echo " active ";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto nav-flex-icons\">
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\">
                        <i class=\"fab fa-google-plus-g\"></i>
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-default\"
                        aria-labelledby=\"navbarDropdownMenuLink-333\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class=\"mb-n\"></div>
    <!--/.Navbar -->

    <!--Flash -->
    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 119
            echo "    <script>
        toastr.error(\"";
            // line 120
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\");
    </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 124
            echo "    <script>
        toastr.success(\"";
            // line 125
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\");
    </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 129
            echo "    <script>
        toastr.warning(\"";
            // line 130
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\");
    </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 134
            echo "    <script>
        toastr.info(\"";
            // line 135
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "\");
    </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    <!--End Flash -->

    ";
        // line 140
        $this->displayBlock('body', $context, $blocks);
        // line 141
        echo "
    ";
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 142,  383 => 140,  365 => 24,  346 => 6,  334 => 143,  332 => 142,  329 => 141,  327 => 140,  323 => 138,  314 => 135,  311 => 134,  306 => 133,  297 => 130,  294 => 129,  289 => 128,  280 => 125,  277 => 124,  272 => 123,  263 => 120,  260 => 119,  256 => 118,  220 => 85,  214 => 84,  208 => 81,  202 => 80,  196 => 77,  190 => 76,  184 => 73,  178 => 72,  172 => 69,  166 => 68,  160 => 65,  154 => 64,  144 => 57,  140 => 55,  138 => 54,  131 => 50,  123 => 45,  119 => 44,  114 => 42,  109 => 40,  104 => 38,  89 => 25,  87 => 24,  83 => 23,  78 => 21,  73 => 19,  68 => 17,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\">
    <!-- Google Fonts -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">
    <!-- Bootstrap core CSS -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"{{ asset('css/mdb.min.css') }}\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"{{ asset('css/style.min.css') }}\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
    <!-- JQuery -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js\"></script>

    <!-- JQuery -->
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.4.1.min.js') }}\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"{{ asset('js/popper.min.js') }}\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\" src=\"{{ asset('js/mdb.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/mdb.js') }}\"></script>
    <!-- Initializations -->
    <script type=\"text/javascript\">
        new WOW().init();
    </script>
    <script type=\"text/javascript\" src=\"{{ asset('js/md-flash.js') }}\"></script>
</head>

<body>
    {% set uri = app.request.attributes.get('_route') %}
    <!--Navbar -->
    <nav class=\"mb-1 navbar navbar-expand-lg navbar-dark bg-dark fixed-top scrolling-navbar\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\"><i class=\"fas fa-home\"></i></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent-333\"
            aria-controls=\"navbarSupportedContent-333\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent-333\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item {% if uri == 'home' or uri == '' %} active {% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('home') }}\">Home</a>
                </li>

                <li class=\"nav-item {% if uri == 'categorie_index' %} active {% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('categorie_index') }}\">Categories</a>
                </li>

                <li class=\"nav-item {% if uri == 'article_index' %} active {% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('article_index') }}\">Articles</a>
                </li>

                <li class=\"nav-item {% if uri == 'nous' %} active {% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('nous') }}\">Qui sommes-nous</a>
                </li>

                <li class=\"nav-item {% if uri == 'contact' %} active {% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                </li>

                <li class=\"nav-item {% if uri == 'admin' %} active {% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('admin') }}\">Admin</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ml-auto nav-flex-icons\">
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\">
                        <i class=\"fab fa-twitter\"></i>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link waves-effect waves-light\">
                        <i class=\"fab fa-google-plus-g\"></i>
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-default\"
                        aria-labelledby=\"navbarDropdownMenuLink-333\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class=\"mb-n\"></div>
    <!--/.Navbar -->

    <!--Flash -->
    {% for message in app.flashes('error') %}
    <script>
        toastr.error(\"{{ message }}\");
    </script>
    {% endfor %}
    {% for message in app.flashes('success') %}
    <script>
        toastr.success(\"{{ message }}\");
    </script>
    {% endfor %}
    {% for message in app.flashes('warning') %}
    <script>
        toastr.warning(\"{{ message }}\");
    </script>
    {% endfor %}
    {% for message in app.flashes('info') %}
    <script>
        toastr.info(\"{{ message }}\");
    </script>
    {% endfor %}
    <!--End Flash -->

    {% block body %}{% endblock %}

    {% block javascripts %}{% endblock %}
</body>

</html>", "base.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/base.html.twig");
    }
}
