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

/* nous/index.html.twig */
class __TwigTemplate_c8d6374d37b0ddae6b4d668fbabd3766d0010b9c41ee43a3244e134a93ebde00 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nous/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nous/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nous/index.html.twig", 1);
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

        echo "Qui sommes-nous";
        
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
        echo "<main id=\"nous\">
\t
\t<div class=\"container\">
        <h1 class=\"text-center\">Qui sommes-nous</h1>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
\t</div>

</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "nous/index.html.twig";
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

{% block title %}Qui sommes-nous{% endblock %}

{% block body %}
<main id=\"nous\">
\t
\t<div class=\"container\">
        <h1 class=\"text-center\">Qui sommes-nous</h1>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti similique eos atque neque in. Rerum, illo odit alias, deleniti, earum aliquam dolores quasi totam eius dolor est sunt! Ullam, voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur perferendis perspiciatis numquam fuga nesciunt quos, error adipisci maiores quam explicabo, dolorem earum, culpa repellendus veritatis eaque sequi ipsa eveniet excepturi?</p>
\t</div>

</main>
{% endblock %}
", "nous/index.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/nous/index.html.twig");
    }
}
