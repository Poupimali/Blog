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

/* article/show.html.twig */
class __TwigTemplate_5e75a3d76ecade2e40ff6f2de30fc42d2f585ab556f821168bd39e00921809e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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
        echo "    <h1 class=\"text-center pt-3 pb-3\">Article</h1>
    <div class=\"row\">
        <div class=\"container mb-5 col-10\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "slug", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Catégorie</th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "category", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Tag</th>
                    <td>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "tags", [], "any", false, false, false, 34));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 35
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                            No tags for this article
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </td>
                </tr>
                <tr>
                    <th>Mettre en favori</th>
                    <td>
                        <a onclick=\"addToFavorite()\">
                            ";
        // line 45
        echo (((isset($context["isFavorite"]) || array_key_exists("isFavorite", $context) ? $context["isFavorite"] : (function () { throw new RuntimeError('Variable "isFavorite" does not exist.', 45, $this->source); })())) ? ("<i id=\"favorite\" class=\"fas fa-star\"></i>") : ("<i id=\"favorite\" class=\"far fa-star\"></i>"));
        // line 46
        echo "</a>

                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class=\"container mb-5 col-4 d-flex flex-column justify-content-center align-items-center\">
        <a class=\"btn text-light bg-dark m-1 col-4\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">Retour à la liste</a>
        ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTHOR")) {
            // line 58
            echo "            <a class=\"btn text-light bg-dark m-1 col-2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Editer</a>
            ";
            // line 59
            echo twig_include($this->env, $context, "article/_delete_form.html.twig");
            echo "
        ";
        }
        // line 61
        echo "
    </div>
    <script>
        function addToFavorite() {
            fetch('";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_favorite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
        echo "')
                .then(response => response.json())
                .then(json => {
                    let favoriteElt = document.getElementById('favorite');
                    if (json.isFavorite) {
                        favoriteElt.classList.remove('far');
                        favoriteElt.classList.add('fas');
                    }
                    else {
                        favoriteElt.classList.remove('fas');
                        favoriteElt.classList.add('far');
                    }
                });
        }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 65,  191 => 61,  186 => 59,  181 => 58,  179 => 57,  175 => 56,  163 => 46,  161 => 45,  153 => 39,  146 => 37,  138 => 35,  133 => 34,  125 => 29,  118 => 25,  111 => 21,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article{% endblock %}

{% block body %}
    <h1 class=\"text-center pt-3 pb-3\">Article</h1>
    <div class=\"row\">
        <div class=\"container mb-5 col-10\">
            <table class=\"table\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ article.id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ article.title }}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{ article.slug }}</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{{ article.content }}</td>
                </tr>
                <tr>
                    <th>Catégorie</th>
                    <td>{{ article.category.name }}</td>
                </tr>
                <tr>
                    <th>Tag</th>
                    <td>
                        {% for tag in article.tags %}
                            {{ tag.name }}
                        {% else %}
                            No tags for this article
                        {% endfor %}
                    </td>
                </tr>
                <tr>
                    <th>Mettre en favori</th>
                    <td>
                        <a onclick=\"addToFavorite()\">
                            {{ isFavorite ? '<i id=\"favorite\" class=\"fas fa-star\"></i>' :
                            '<i id=\"favorite\" class=\"far fa-star\"></i>' }}</a>

                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
    <div class=\"container mb-5 col-4 d-flex flex-column justify-content-center align-items-center\">
        <a class=\"btn text-light bg-dark m-1 col-4\" href=\"{{ path('article_index') }}\">Retour à la liste</a>
        {% if is_granted('ROLE_AUTHOR') %}
            <a class=\"btn text-light bg-dark m-1 col-2\" href=\"{{ path('article_edit', {'id': article.id}) }}\">Editer</a>
            {{ include('article/_delete_form.html.twig') }}
        {% endif %}

    </div>
    <script>
        function addToFavorite() {
            fetch('{{ path('article_favorite', {'id': article.id}) }}')
                .then(response => response.json())
                .then(json => {
                    let favoriteElt = document.getElementById('favorite');
                    if (json.isFavorite) {
                        favoriteElt.classList.remove('far');
                        favoriteElt.classList.add('fas');
                    }
                    else {
                        favoriteElt.classList.remove('fas');
                        favoriteElt.classList.add('far');
                    }
                });
        }
    </script>


{% endblock %}
", "article/show.html.twig", "/Users/malika/Desktop/Blog 2/templates/article/show.html.twig");
    }
}
