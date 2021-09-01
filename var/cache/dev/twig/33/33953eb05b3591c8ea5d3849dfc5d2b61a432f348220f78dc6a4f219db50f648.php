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

/* abonneresto/new.html.twig */
class __TwigTemplate_e9d11fae9ca509133d5065ba4b3337a9e75df38c481d4f8482df1dbe29f5eeb5 extends \Twig\Template
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
        // line 18
        return "takwa.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/new.html.twig"));

        $this->parent = $this->loadTemplate("takwa.html.twig", "abonneresto/new.html.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription au restaurant";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <br/>
    <br/>

    <div class=\"col-12\">
        <h2 class=\"contact-title\">Inscrire votre enfant au restaurant </h2>
    </div>

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <table>

        <tr>
            <td><h5> nom  :</h5> </td> <td> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "cols" => "40", "placeholder" => "nom enfant"]]);
        echo "</td>
        </tr>
        <tr>
          <td> <h5> type Abonnement: </h5></td> <td> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAbo", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "cols" => "40", "placeholder" => "annuel,mensuel,hebdomadaire"]]);
        echo "</td>
        </tr>
        <tr>
            <div class=\"select_option\">
                <td> <h5> type Pension: </h5> </td> <td> ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typePension", []), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "cols" => "40", "placeholder" => "complete, demi pension1 , demi pension2", "value" => 7]]);
        echo "</td>
            </div>
</tr>
        <tr>
            <td> </td>
            <td>   <input  type=\"submit\" class=\"btn_3\" value=\"                Inscrie                \"> </td>

        </tr>


    </table>
    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonneresto/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 51,  109 => 40,  102 => 36,  96 => 33,  88 => 28,  79 => 21,  70 => 20,  52 => 19,  30 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}

{% block body %}
    <h1>Abonneresto creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('abonneresto_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
#}
{% extends \"takwa.html.twig\" %}
{% block title %}Inscription au restaurant{% endblock %}
{% block body %}
    <br/>
    <br/>

    <div class=\"col-12\">
        <h2 class=\"contact-title\">Inscrire votre enfant au restaurant </h2>
    </div>

    {{ form_start(form) }}

    <table>

        <tr>
            <td><h5> nom  :</h5> </td> <td> {{ form_widget(form.nom, {'attr': {'class': 'form-control','rows':'4','cols':'40','placeholder':'nom enfant'}}) }}</td>
        </tr>
        <tr>
          <td> <h5> type Abonnement: </h5></td> <td> {{ form_widget(form.typeAbo, {'attr': {'class': 'form-control','rows':'4','cols':'40','placeholder':'annuel,mensuel,hebdomadaire'}}) }}</td>
        </tr>
        <tr>
            <div class=\"select_option\">
                <td> <h5> type Pension: </h5> </td> <td> {{ form_widget(form.typePension, {'attr': {'class': 'form-control','rows':'4','cols':'40','placeholder':'complete, demi pension1 , demi pension2','value' : 7  }}) }}</td>
            </div>
</tr>
        <tr>
            <td> </td>
            <td>   <input  type=\"submit\" class=\"btn_3\" value=\"                Inscrie                \"> </td>

        </tr>


    </table>
    {{ form_end(form) }}

{% endblock %}


", "abonneresto/new.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\abonneresto\\new.html.twig");
    }
}
