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

/* abonneresto/edit.html.twig */
class __TwigTemplate_91d9704a04e42780bdfef0839355dc3a7281853880ac15601f79099b9ca90291 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/edit.html.twig"));

        $this->parent = $this->loadTemplate("takwa.html.twig", "abonneresto/edit.html.twig", 1);
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

        echo "Modifier reservation";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <br/>
    <br/>
    <h1>Modifier reservation</h1>

    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <table>

        <tr>
            <td><h5> nom  :</h5> </td> <td> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "cols" => "40", "placeholder" => "nom enfant"]]);
        echo "</td>
        </tr>
        <tr>
            <td> <h5> type Abonnement: </h5></td> <td> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeAbo", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "cols" => "40", "placeholder" => "annuel,mensuel,hebdomadaire"]]);
        echo "</td>
        </tr>
        <tr>
            <td> <h5> type Pension: </h5> </td> <td> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typePension", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "cols" => "40", "placeholder" => "complete, demi pension1 , demi pension2"]]);
        echo "</td>
        </tr>
        <tr>
            <td> </td>
            <td>   <input  type=\"submit\" class=\"btn_3\" value=\"           Modifier            \"> </td>

        </tr>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

        <tr>
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <td> </td>
         <td>   <input type=\"submit\"  class=\"btn_3\" value=\"        Supprimer           \" >   </td>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </tr>
        <tr>
            <td></td>
            <td>   <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_reservations");
        echo "\"  class=\"btn_3\">retourner vers ma liste de reservations</a></td>
        </tr>


    </table>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonneresto/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  126 => 32,  120 => 29,  114 => 26,  104 => 19,  98 => 16,  92 => 13,  85 => 9,  79 => 5,  70 => 4,  52 => 2,  30 => 1,);
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
{% block title %}Modifier reservation{% endblock %}

{% block body %}
    <br/>
    <br/>
    <h1>Modifier reservation</h1>

    {{ form_start(edit_form) }}
    <table>

        <tr>
            <td><h5> nom  :</h5> </td> <td> {{ form_widget(edit_form.nom, {'attr': {'class': 'form-control','rows':'4','cols':'40','placeholder':'nom enfant'}}) }}</td>
        </tr>
        <tr>
            <td> <h5> type Abonnement: </h5></td> <td> {{ form_widget(edit_form.typeAbo, {'attr': {'class': 'form-control','rows':'4','cols':'40','placeholder':'annuel,mensuel,hebdomadaire'}}) }}</td>
        </tr>
        <tr>
            <td> <h5> type Pension: </h5> </td> <td> {{ form_widget(edit_form.typePension, {'attr': {'class': 'form-control','rows':'4','cols':'40','placeholder':'complete, demi pension1 , demi pension2'}}) }}</td>
        </tr>
        <tr>
            <td> </td>
            <td>   <input  type=\"submit\" class=\"btn_3\" value=\"           Modifier            \"> </td>

        </tr>
        {{ form_end(edit_form) }}

        <tr>
            {{ form_start(delete_form) }}
            <td> </td>
         <td>   <input type=\"submit\"  class=\"btn_3\" value=\"        Supprimer           \" >   </td>
            {{ form_end(delete_form) }}
        </tr>
        <tr>
            <td></td>
            <td>   <a href=\"{{ path('show_reservations') }}\"  class=\"btn_3\">retourner vers ma liste de reservations</a></td>
        </tr>


    </table>



{% endblock %}
", "abonneresto/edit.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\abonneresto\\edit.html.twig");
    }
}
