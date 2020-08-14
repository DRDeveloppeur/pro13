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

/* admin/produits.html.twig */
class __TwigTemplate_cccd7ce585b638ad5e37eca053b55cc58984247351d9d026fed60a75a7b4ebf2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/produits.html.twig", 1);
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
                    <p class=\"h5 text-primary createShowP mt-4\">Produits</p>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
        echo "\" method=\"post\">
                                    ";
        // line 31
        echo twig_include($this->env, $context, "admin/produit_form.html.twig");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "                <div class=\"modal fade\" id=\"modalDelete";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"modalDelete\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header text-center\">
                                <h4 class=\"modal-title w-100 font-weight-bold ml-5 text-danger\">Supprimer
                                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</h4>
                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body mx-3\">
                                <p class=\"text-center h4\">Etes-vous sûr de vouloir supprimer la produit
                                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "title", [], "any", false, false, false, 57), "html", null, true);
            echo " ?</p>

                            </div>
                            <div class=\"modal-footer d-flex justify-content-center deleteButtonsWrapper\">
                                <form method=\"post\" action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\"
                                        value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 64))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
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
                            Categorie
                        </th>
                        <th class=\"th-sm\">
                            Prix
                        </th>
                        <th class=\"th-sm\">
                            Description
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
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 108
            echo "                    <tr>
                        <td>
                            <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 110), "html", null, true);
            echo "\" width=\"50\" alt=\"\">
                        </td>
                        <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "title", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                        <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 113), "title", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                        <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 114), "html", null, true);
            echo " €</td>
                        <td>
                            ";
            // line 116
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 116)), 20))) {
                // line 117
                echo "                                ";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 117), 0, 20), "html", null, true);
                echo "...
                            ";
            } else {
                // line 119
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 119), "html", null, true);
                echo "
                            ";
            }
            // line 121
            echo "                        </td>
                        <td>
                            <div class=\"text-center buttonEditWrapper\">
                                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 124)]), "html", null, true);
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
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 133), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                </tbody>
            </table>
        </div>
    </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
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
        return "admin/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 149,  308 => 148,  293 => 141,  279 => 133,  267 => 124,  262 => 121,  256 => 119,  250 => 117,  248 => 116,  243 => 114,  239 => 113,  235 => 112,  230 => 110,  226 => 108,  222 => 107,  189 => 76,  171 => 64,  165 => 61,  158 => 57,  148 => 50,  138 => 44,  134 => 43,  119 => 31,  115 => 30,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
                    <p class=\"h5 text-primary createShowP mt-4\">Produits</p>
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
                                <form action=\"{{ path('produit_new') }}\" method=\"post\">
                                    {{ include('admin/produit_form.html.twig') }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"text-center\">
                    <a href=\"\" class=\"btn btn-info btn-rounded btn-sm\" data-toggle=\"modal\" data-target=\"#modalAdd\">Add<i
                        class=\"fas fa-plus-square ml-1\"></i></a>
                </div>

                {% for produit in produits %}
                <div class=\"modal fade\" id=\"modalDelete{{ produit.id }}\" tabindex=\"-1\" role=\"dialog\"
                    aria-labelledby=\"modalDelete\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header text-center\">
                                <h4 class=\"modal-title w-100 font-weight-bold ml-5 text-danger\">Supprimer
                                    {{ produit.title }}</h4>
                                <button type=\"button\" class=\"close text-danger\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body mx-3\">
                                <p class=\"text-center h4\">Etes-vous sûr de vouloir supprimer la produit
                                    {{ produit.title }} ?</p>

                            </div>
                            <div class=\"modal-footer d-flex justify-content-center deleteButtonsWrapper\">
                                <form method=\"post\" action=\"{{ path('produit_delete', {'id': produit.id}) }}\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_token\"
                                        value=\"{{ csrf_token('delete' ~ produit.id) }}\">
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
                            Categorie
                        </th>
                        <th class=\"th-sm\">
                            Prix
                        </th>
                        <th class=\"th-sm\">
                            Description
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
                    {% for produit in produits %}
                    <tr>
                        <td>
                            <img src=\"{{ produit.image }}\" width=\"50\" alt=\"\">
                        </td>
                        <td>{{ produit.title }}</td>
                        <td>{{ produit.categorie.title }}</td>
                        <td>{{ produit.price }} €</td>
                        <td>
                            {% if produit.description|length > 20 %}
                                {{ produit.description[:20] }}...
                            {% else %}
                                {{ produit.description }}
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"text-center buttonEditWrapper\">
                                <a href=\"{{ path('produit_edit', {'id': produit.id}) }}\" class=\"btn btn-info btn-rounded btn-sm buttonEdit\">
                                    Edit
                                    <i class=\"fas fa-pencil-alt ml-1\"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class=\"text-center\">
                                <button class=\"btn btn-danger btn-sm btn-rounded buttonDelete\" data-toggle=\"modal\"
                                    data-target=\"#modalDelete{{produit.id}}\">
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
{% endblock %}", "admin/produits.html.twig", "/var/www/html/3WA/Semaine 6/Symfony initiation/pro13/templates/admin/produits.html.twig");
    }
}
