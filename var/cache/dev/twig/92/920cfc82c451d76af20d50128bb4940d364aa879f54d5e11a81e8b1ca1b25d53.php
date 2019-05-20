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
class __TwigTemplate_68cfd9d73a665a24455af3ecea9b3b824bf8a4e6f0601d9c212bdd17e3fd08dc extends \Twig\Template
{
    private $source;

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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tous les articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1 class =\"text-center pt-3 pb-3\">Tous les articles du blog</h1>

    <div class=\"container mb-4\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "searchField", [], "any", false, false, false, 13), 'row');
        echo "
            </div>
        </div>
        <button type=\"submit\" name=\"btnSearch\">Rechercher</button>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
    </div>

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "        <div class=\"container mb-5\">
            ";
            // line 23
            echo "            <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</h2>
            <h4>Category : ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</h4>
            <p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        Aucun article trouvé.
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <div class=\"container pb-5\">
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["slug" => "javascript-vs-php"]);
        echo "\">
            Voir l'article sur \"javascript-vs-php\"
        </a>
        <br>
        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["name" => "PHP"]);
        echo "\">
            Voir la catégorie PHP
        </a>
        <br>
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["name" => "Javascript"]);
        echo "\">
            Voir la catégorie Javascript
        </a>
        <br>
        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["name" => "Java"]);
        echo "\">
            Voir la catégorie Java
        </a>
        <br>
        <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["name" => "SQL"]);
        echo "\">
            Voir la catégorie SQL
        </a>
        <br>
        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_tag", ["name" => "PHP"]);
        echo "\">
            Voir les articles correspondants au tag \"PHP\"
        </a>
        <br>
        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_tag", ["name" => "Et sinon quand est-ce qu'on mange ? "]);
        echo "\">
            Voir les articles correspondants au tag \"Et sinon quand est-ce qu'on mange\" ?
        </a>
        <br>
        <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
            Retour sur la page d'accueil
        </a>

    </div>

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
        return array (  216 => 60,  209 => 56,  202 => 52,  195 => 48,  188 => 44,  181 => 40,  174 => 36,  167 => 32,  163 => 30,  156 => 28,  140 => 25,  136 => 24,  129 => 23,  126 => 21,  108 => 20,  102 => 17,  95 => 13,  89 => 10,  84 => 7,  75 => 6,  57 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/blog/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Tous les articles{% endblock %}

{% block body %}
    <h1 class =\"text-center pt-3 pb-3\">Tous les articles du blog</h1>

    <div class=\"container mb-4\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col\">
                {{ form_row(form.searchField) }}
            </div>
        </div>
        <button type=\"submit\" name=\"btnSearch\">Rechercher</button>
        {{ form_end(form) }}
    </div>

    {% for article in articles %}
        <div class=\"container mb-5\">
            {# {{ loop.index }} = l’index de l’itération courant#}
            <h2>{{ loop.index }} / {{ article.title }}</h2>
            <h4>Category : {{ article.category.name }}</h4>
            <p>{{ article.content }}</p>
        </div>
    {% else %}
        Aucun article trouvé.
    {% endfor %}

    <div class=\"container pb-5\">
        <a href=\"{{ path('blog_show', { 'slug': \"javascript-vs-php\" }) }}\">
            Voir l'article sur \"javascript-vs-php\"
        </a>
        <br>
        <a href=\"{{ path('show_category', { 'name': \"PHP\" }) }}\">
            Voir la catégorie PHP
        </a>
        <br>
        <a href=\"{{ path('show_category', { 'name': \"Javascript\" }) }}\">
            Voir la catégorie Javascript
        </a>
        <br>
        <a href=\"{{ path('show_category', { 'name': \"Java\" }) }}\">
            Voir la catégorie Java
        </a>
        <br>
        <a href=\"{{ path('show_category', { 'name': \"SQL\" }) }}\">
            Voir la catégorie SQL
        </a>
        <br>
        <a href=\"{{ path('show_tag', { 'name': \"PHP\" }) }}\">
            Voir les articles correspondants au tag \"PHP\"
        </a>
        <br>
        <a href=\"{{ path('show_tag', { 'name': \"Et sinon quand est-ce qu'on mange ? \" }) }}\">
            Voir les articles correspondants au tag \"Et sinon quand est-ce qu'on mange\" ?
        </a>
        <br>
        <a href=\"{{ path('index') }}\">
            Retour sur la page d'accueil
        </a>

    </div>

{% endblock %}", "blog/index.html.twig", "/Users/malika/Desktop/Blog/templates/blog/index.html.twig");
    }
}
