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

/* band/band.html.twig */
class __TwigTemplate_a6c33b502b1771578b9c70f3328d90ca7ca6079952839f711a7c707288fd305d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "band/band.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "band/band.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "band/band.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <h1>Le groupe ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["band"]) || array_key_exists("band", $context) ? $context["band"] : (function () { throw new RuntimeError('Variable "band" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " </h1>
    <p>Composé de ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["band"]) || array_key_exists("band", $context) ? $context["band"] : (function () { throw new RuntimeError('Variable "band" does not exist.', 6, $this->source); })()), "members", [], "any", false, false, false, 6)), "html", null, true);
        echo " membres, qui sont :</p>

    <div class=\"container\">

        <div class=\"card-deck\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["band"]) || array_key_exists("band", $context) ? $context["band"] : (function () { throw new RuntimeError('Variable "band" does not exist.', 11, $this->source); })()), "members", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 12
            echo "
                <div class=\"card\">
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["member"], "picture", [], "any", false, false, false, 14))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\"
                         width=\"500\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_show", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">
                                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 18));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "firstname", [], "any", false, false, false, 18));
            echo "</a></h5>
                        <p class=\"card-text\">Né le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "birthDate", [], "any", false, false, false, 19), "d-m-Y"), "html", null, true);
            echo ".</p>
                    </div>
                    <div class=\"card-footer\"><small class=\"text-muted\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "job", [], "any", false, false, false, 21), "html", null, true);
            echo "</small>
                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
        </div>
        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("band_list");
        echo "\">Retour à la liste</a>

        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("band_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["band"]) || array_key_exists("band", $context) ? $context["band"] : (function () { throw new RuntimeError('Variable "band" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">Modifier</a>

        ";
        // line 32
        echo twig_include($this->env, $context, "band/_delete_form.html.twig");
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "band/band.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 32,  132 => 30,  127 => 28,  123 => 26,  112 => 21,  107 => 19,  101 => 18,  97 => 17,  91 => 14,  87 => 12,  83 => 11,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
    <h1>Le groupe {{ band.name }} </h1>
    <p>Composé de {{ band.members|length }} membres, qui sont :</p>

    <div class=\"container\">

        <div class=\"card-deck\">
            {% for member in band.members %}

                <div class=\"card\">
                    <img src=\"{{ asset('images/'~ member.picture) }}\" class=\"card-img-top\" alt=\"...\"
                         width=\"500\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"><a href=\"{{ path('member_show', {id: member.id}) }}\">
                                {{ member.name|e }} {{ member.firstname|e }}</a></h5>
                        <p class=\"card-text\">Né le {{ member.birthDate|date('d-m-Y') }}.</p>
                    </div>
                    <div class=\"card-footer\"><small class=\"text-muted\">{{ member.job }}</small>
                    </div>

                </div>
            {% endfor %}

        </div>
        <a href=\"{{ path('band_list') }}\">Retour à la liste</a>

        <a href=\"{{ path('band_edit', {'id': band.id}) }}\">Modifier</a>

        {{ include('band/_delete_form.html.twig') }}
    </div>

{% endblock %}", "band/band.html.twig", "/var/www/symfony/templates/band/band.html.twig");
    }
}
