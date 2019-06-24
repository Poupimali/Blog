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

/* navbar.html.twig */
class __TwigTemplate_ad20eebb33e09497470cf12048085ef9ddee4198b7619e2344345c9657df10d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo " <header class=\"container pt-3 pb-3\">
    <nav class=\"nav nav-pills nav-fill\">
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\">Home</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">Articles</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Catégories</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\">Nouvel Article</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_category");
        echo "\">Nouvelle Catégorie</a>
        <a class=\"nav-item nav-link text-light btn-secondary m-2\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
    </nav>
 </header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <header class=\"container pt-3 pb-3\">
    <nav class=\"nav nav-pills nav-fill\">
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"{{ path('blog_index') }}\">Home</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"{{ path('article_index') }}\">Articles</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"{{ path('category_index') }}\">Catégories</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"{{ path('article_new') }}\">Nouvel Article</a>
        <a class=\"nav-item nav-link text-light bg-info m-2\" href=\"{{ path('add_category') }}\">Nouvelle Catégorie</a>
        <a class=\"nav-item nav-link text-light btn-secondary m-2\" href=\"{{ path('app_login') }}\">Connexion</a>
    </nav>
 </header>", "navbar.html.twig", "/Users/malika/Desktop/Blog 2/templates/navbar.html.twig");
    }
}
