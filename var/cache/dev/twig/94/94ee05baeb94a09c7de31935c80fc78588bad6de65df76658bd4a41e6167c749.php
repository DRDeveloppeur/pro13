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

/* admin/contact_form.html.twig */
class __TwigTemplate_6428fcb8c9f4ca0f94fe7546b41b3bbd6d790d901a1df58cf25e42d2fb263477 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contact_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"md-form mb-5\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), 'row', ["attr" => ["class" => "form-control validate"]]);
        echo "
    </div>
    <div class=\"md-form mb-5\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "address", [], "any", false, false, false, 6), 'row', ["attr" => ["class" => "form-control validate"]]);
        echo "
    </div>
    <div class=\"md-form mb-5\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "phone", [], "any", false, false, false, 9), 'row', ["attr" => ["class" => "form-control validate"]]);
        echo "
    </div>
    <div class=\"md-form mb-5\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control validate"]]);
        echo "
    </div>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'widget');
        echo "
    <div class=\"modal-footer d-flex justify-content-center buttonAddFormWrapper\">
        <button type=\"submit\" class=\"";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("button_class", $context)) ? (_twig_default_filter((isset($context["button_class"]) || array_key_exists("button_class", $context) ? $context["button_class"] : (function () { throw new RuntimeError('Variable "button_class" does not exist.', 16, $this->source); })()), "btn btn-outline-primary btn-block buttonAdd")) : ("btn btn-outline-primary btn-block buttonAdd")), "html", null, true);
        echo "\">
            ";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 17, $this->source); })()), "Add")) : ("Add")), "html", null, true);
        echo "
            <i class=\"fas fa-paper-plane-o ml-1\"></i>
        </button>
    </div>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  80 => 17,  76 => 16,  71 => 14,  66 => 12,  60 => 9,  54 => 6,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"md-form mb-5\">
        {{ form_row(form.title, {'attr': {'class': 'form-control validate'}}) }}
    </div>
    <div class=\"md-form mb-5\">
        {{ form_row(form.address, {'attr': {'class': 'form-control validate'}}) }}
    </div>
    <div class=\"md-form mb-5\">
        {{ form_row(form.phone, {'attr': {'class': 'form-control validate'}}) }}
    </div>
    <div class=\"md-form mb-5\">
        {{ form_row(form.email, {'attr': {'class': 'form-control validate'}}) }}
    </div>
    {{ form_widget(form) }}
    <div class=\"modal-footer d-flex justify-content-center buttonAddFormWrapper\">
        <button type=\"submit\" class=\"{{ button_class|default('btn btn-outline-primary btn-block buttonAdd') }}\">
            {{ button_label|default('Add') }}
            <i class=\"fas fa-paper-plane-o ml-1\"></i>
        </button>
    </div>
{{ form_end(form) }}
", "admin/contact_form.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/admin/contact_form.html.twig");
    }
}