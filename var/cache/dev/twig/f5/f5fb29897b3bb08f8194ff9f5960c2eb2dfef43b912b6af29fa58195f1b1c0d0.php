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

/* admin/categories.html.twig */
class __TwigTemplate_d68415b0bae0d427812c24541f2cae851bf66b3de346f39fe5240a3c7cf1897d extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/categories.html.twig", 1);
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

        echo "Admin Categories";
        
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
        echo "<main id=\"admin\">
    <div class=\"container\">
        <div class=\"wrapper-editor\">

            <div class=\"block my-4\">
                <div class=\"d-flex justify-content-center\">
                    <p class=\"h5 text-primary createShowP mt-4\">Categories</p>
                </div>
            </div>

            <div class=\"row d-flex justify-content-center modalWrapper\">
                <div class=\"modal fade addNewInputs\" id=\"modalAdd\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"modalAdd\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header text-center\">
                                <h4 class=\"modal-title w-100 font-weight-bold text-primary ml-5\">Add new form</h4>
                                <button type=\"button\" class=\"close text-primary\" data-dismiss=\"modal\"
                                    aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>

                            <div class=\"modal-body mx-3\">
                                <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        echo "\" method=\"post\">
                                    ";
        // line 31
        echo twig_include($this->env, $context, "admin/categorie_form.html.twig");
        echo "
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"text-center\">
                    <a href=\"\" class=\"btn btn-info btn-rounded btn-sm\" data-toggle=\"modal\" data-target=\"#modalAdd\">Add<i
                        class=\"fas fa-plus-square ml-1\"></i></a>
                </div>

                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 44
            echo "                <div class=\"modal fade\" id=\"modalDelete";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"modalDelete\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header text-center\">
                                <h4 class=\"modal-title w-100 font-weight-bold ml-5 text-danger\">Supprimer
                                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</h4>
                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body mx-3\">
                                <p class=\"text-center h4\">Etes-vous sûr de vouloir supprimer la categorie
                                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "title", [], "any", false, false, false, 57), "html", null, true);
            echo " ?</p>

                            </div>
                            <div class=\"modal-footer d-flex justify-content-center deleteButtonsWrapper\">
                                <form method=\"post\" action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\"
                                        value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 64))), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-danger btnYesClass\">
                                        Yes
                                    </button>
                                </form>
                                <button type=\"button\" class=\"btn btn-primary btnNoClass\" id=\"btnNo\"
                                    data-dismiss=\"modal\">No</button>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "

            </div>

            <table id=\"dtBasicExample\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                    <tr>
                        <th class=\"th-sm\">
                            Image
                        </th>
                        <th class=\"th-sm\">
                            Nom
                        </th>
                        <th class=\"th-sm\">
                            Edit
                        </th>
                        <th class=\"th-sm\">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 99
            echo "                    <tr>
                        <td>
                            <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 101), "html", null, true);
            echo "\" width=\"50\" alt=\"\">
                        </td>
                        <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "title", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"text-center buttonEditWrapper\">
                                <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-rounded btn-sm buttonEdit\">
                                    Edit
                                    <i class=\"fas fa-pencil-alt ml-1\"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class=\"text-center\">
                                <button class=\"btn btn-danger btn-sm btn-rounded buttonDelete\" data-toggle=\"modal\"
                                    data-target=\"#modalDelete";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                                    Delete
                                    <i class=\"fas fa-times ml-1\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                </tbody>
            </table>
        </div>
    </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "<script src=\"https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js\"></script>
<script>
    \$(document).ready( function () {
        \$('#dtBasicExample').DataTable();
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 131,  273 => 130,  258 => 123,  244 => 115,  232 => 106,  226 => 103,  221 => 101,  217 => 99,  213 => 98,  189 => 76,  171 => 64,  165 => 61,  158 => 57,  148 => 50,  138 => 44,  134 => 43,  119 => 31,  115 => 30,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Categories{% endblock %}

{% block body %}
<main id=\"admin\">
    <div class=\"container\">
        <div class=\"wrapper-editor\">

            <div class=\"block my-4\">
                <div class=\"d-flex justify-content-center\">
                    <p class=\"h5 text-primary createShowP mt-4\">Categories</p>
                </div>
            </div>

            <div class=\"row d-flex justify-content-center modalWrapper\">
                <div class=\"modal fade addNewInputs\" id=\"modalAdd\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"modalAdd\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header text-center\">
                                <h4 class=\"modal-title w-100 font-weight-bold text-primary ml-5\">Add new form</h4>
                                <button type=\"button\" class=\"close text-primary\" data-dismiss=\"modal\"
                                    aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>

                            <div class=\"modal-body mx-3\">
                                <form action=\"{{ path('categorie_new') }}\" method=\"post\">
                                    {{ include('admin/categorie_form.html.twig') }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"text-center\">
                    <a href=\"\" class=\"btn btn-info btn-rounded btn-sm\" data-toggle=\"modal\" data-target=\"#modalAdd\">Add<i
                        class=\"fas fa-plus-square ml-1\"></i></a>
                </div>

                {% for categorie in categories %}
                <div class=\"modal fade\" id=\"modalDelete{{ categorie.id }}\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"modalDelete\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header text-center\">
                                <h4 class=\"modal-title w-100 font-weight-bold ml-5 text-danger\">Supprimer
                                    {{ categorie.title }}</h4>
                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body mx-3\">
                                <p class=\"text-center h4\">Etes-vous sûr de vouloir supprimer la categorie
                                    {{ categorie.title }} ?</p>

                            </div>
                            <div class=\"modal-footer d-flex justify-content-center deleteButtonsWrapper\">
                                <form method=\"post\" action=\"{{ path('categorie_delete', {'id': categorie.id}) }}\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\"
                                        value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
                                    <button class=\"btn btn-danger btnYesClass\">
                                        Yes
                                    </button>
                                </form>
                                <button type=\"button\" class=\"btn btn-primary btnNoClass\" id=\"btnNo\"
                                    data-dismiss=\"modal\">No</button>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}


            </div>

            <table id=\"dtBasicExample\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                    <tr>
                        <th class=\"th-sm\">
                            Image
                        </th>
                        <th class=\"th-sm\">
                            Nom
                        </th>
                        <th class=\"th-sm\">
                            Edit
                        </th>
                        <th class=\"th-sm\">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {% for categorie in categories %}
                    <tr>
                        <td>
                            <img src=\"{{ categorie.image }}\" width=\"50\" alt=\"\">
                        </td>
                        <td>{{ categorie.title }}</td>
                        <td>
                            <div class=\"text-center buttonEditWrapper\">
                                <a href=\"{{ path('categorie_edit', {'id': categorie.id}) }}\" class=\"btn btn-info btn-rounded btn-sm buttonEdit\">
                                    Edit
                                    <i class=\"fas fa-pencil-alt ml-1\"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class=\"text-center\">
                                <button class=\"btn btn-danger btn-sm btn-rounded buttonDelete\" data-toggle=\"modal\"
                                    data-target=\"#modalDelete{{categorie.id}}\">
                                    Delete
                                    <i class=\"fas fa-times ml-1\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</main>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js\"></script>
<script>
    \$(document).ready( function () {
        \$('#dtBasicExample').DataTable();
    });
</script>
{% endblock %}", "admin/categories.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/admin/categories.html.twig");
    }
}
