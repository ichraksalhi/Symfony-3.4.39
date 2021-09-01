<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* abonneresto/show.html.twig */
class __TwigTemplate_a2f4bfd0951dde557fe06c141738e2fb5d49a5e26f7709b37242ea6dad99f6c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "takwa.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/show.html.twig"));

        $this->parent = $this->loadTemplate("takwa.html.twig", "abonneresto/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes reservations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Abonneresto</h1>

    <table>
        <tbody>


            <tr>
                <th>Nom</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "nom", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type abonnement</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "typeAbo", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type pension</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "typePension", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "etat", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Absence</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "absence", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date abonnement</th>
                <td>";
        // line 32
        if ($this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "dateAbo", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "dateAbo", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_reservations");
        echo "\" style=\"color:#b08ead;\">Retourner vers ma liste de reservations</a>
        </li>
        <li>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_edit", ["id" => $this->getAttribute((isset($context["abonneresto"]) ? $context["abonneresto"] : $this->getContext($context, "abonneresto")), "id", [])]), "html", null, true);
        echo "\" style=\"color:#b08ead;\">Edit</a>
        </li>
        <li>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\"  class=\"btn_3\" value=\"Delete\">
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>

    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonneresto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  148 => 45,  142 => 42,  136 => 39,  124 => 32,  117 => 28,  110 => 24,  103 => 20,  96 => 16,  89 => 12,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'takwa.html.twig' %}
{% block title %}Mes reservations{% endblock %}
{% block body %}
    <h1>Abonneresto</h1>

    <table>
        <tbody>


            <tr>
                <th>Nom</th>
                <td>{{ abonneresto.nom }}</td>
            </tr>
            <tr>
                <th>Type abonnement</th>
                <td>{{ abonneresto.typeAbo }}</td>
            </tr>
            <tr>
                <th>Type pension</th>
                <td>{{ abonneresto.typePension }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ abonneresto.etat }}</td>
            </tr>
            <tr>
                <th>Absence</th>
                <td>{{ abonneresto.absence }}</td>
            </tr>
            <tr>
                <th>Date abonnement</th>
                <td>{% if abonneresto.dateAbo %}{{ abonneresto.dateAbo|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('show_reservations') }}\" style=\"color:#b08ead;\">Retourner vers ma liste de reservations</a>
        </li>
        <li>
            <a href=\"{{ path('abonneresto_edit', { 'id': abonneresto.id }) }}\" style=\"color:#b08ead;\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\"  class=\"btn_3\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>

    </ul>
{% endblock %}
", "abonneresto/show.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\abonneresto\\show.html.twig");
    }
}
