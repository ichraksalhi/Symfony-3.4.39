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

/* abonneresto/index.html.twig */
class __TwigTemplate_1850309a418678b360955cdddae18fd1b509597454152fe35d293e72271eac28 extends \Twig\Template
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
        return "AcceuilAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonneresto/index.html.twig"));

        $this->parent = $this->loadTemplate("AcceuilAdmin.html.twig", "abonneresto/index.html.twig", 1);
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

        echo "Les reservations";
        
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
    <h1>Les abonnements restaurant</h1>

    <form method=\"post\">
        <input type=\"text\" name=\"nom\"   placeholder=\"nom\">
        <select id=\"typeAbo\"  name=\"typeAbo\"  >
            <option value=\"\"></option>
            <option value=\"annuel\">annuel</option>
            <option value=\"mensuel\">mensuel</option>
            <option value=\"hebdomadaire\">hebdomadaire</option>

        </select>

        <select id=\"typePension\"  name=\"typePension\">
            <option value=\"\"></option>
            <option value=\"complete\">complete</option>
            <option value=\"Demi p1\">Demi p1</option>
            <option value=\"Demi p2\">Demi p2</option>

        </select>

        <select id=\"etat\"  name=\"etat\">
            <option value=\"\"></option>
            <option value=\"1\">payer</option>
            <option value=\"NULL\">non payer</option>
        </select>

        <input type=\"submit\" value=\"rechercher\" class=\"btn btn-dark\">
    </form>







    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Cherchez une reservation ...\">
    <table  class=\"table table-bordered\"  id=\"tableac\">
        <thead>
            <tr>


                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Type abonnement</th>
                <th scope=\"col\">Type pension</th>
                <th scope=\"col\">Absence</th>
                <th scope=\"col\">Date abonnement</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnerestos"]) ? $context["abonnerestos"] : $this->getContext($context, "abonnerestos")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonneresto"]) {
            // line 58
            echo "            ";
            if (($this->getAttribute($context["abonneresto"], "etat", []) == 1)) {
                // line 59
                echo "                ";
                $context["color"] = "#80c1ff";
                // line 60
                echo "            ";
            } elseif (($this->getAttribute($context["abonneresto"], "etat", []) == 0)) {
                // line 61
                echo "                ";
                $context["color"] = "#ff8080";
                // line 62
                echo "
            ";
            }
            // line 64
            echo "


            <tr>
                <td style=\"background-color:";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo " ; color:";
            echo "#3f4c5a";
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonneresto"], "nom", []), "html", null, true);
            echo "</td>
                <td style=\"background-color:";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo " ; color:";
            echo "#3f4c5a";
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonneresto"], "typeAbo", []), "html", null, true);
            echo "</td>
                <td style=\"background-color:";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo " ; color:";
            echo "#3f4c5a";
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonneresto"], "typePension", []), "html", null, true);
            echo "</td>
                <td style=\"background-color:";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo " ; color:";
            echo "#3f4c5a";
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonneresto"], "absence", []), "html", null, true);
            echo "</td>
                <td style=\"background-color:";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo " ; color:";
            echo "#3f4c5a";
            echo "\">";
            if ($this->getAttribute($context["abonneresto"], "dateAbo", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["abonneresto"], "dateAbo", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td style=\"background-color:";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo " ; color:";
            echo "#3f4c5a";
            echo "\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_show", ["id" => $this->getAttribute($context["abonneresto"], "id", [])]), "html", null, true);
            echo " \" style=\"color:#b08ead;\" >voir</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_edit", ["id" => $this->getAttribute($context["abonneresto"], "id", [])]), "html", null, true);
            echo "\" style=\"color:#b08ead;\">modifier</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonneresto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_new");
        echo "\" style=\"color:#b08ead;\"> créer une nouvelle reservation</a>
        </li>
    </ul>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonneresto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 91,  228 => 86,  215 => 79,  209 => 76,  201 => 73,  191 => 72,  183 => 71,  175 => 70,  167 => 69,  159 => 68,  153 => 64,  149 => 62,  146 => 61,  143 => 60,  140 => 59,  137 => 58,  133 => 57,  79 => 5,  70 => 4,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'AcceuilAdmin.html.twig' %}
{% block title %}Les reservations{% endblock %}

{% block body %}
    <br/>
    <br/>
    <h1>Les abonnements restaurant</h1>

    <form method=\"post\">
        <input type=\"text\" name=\"nom\"   placeholder=\"nom\">
        <select id=\"typeAbo\"  name=\"typeAbo\"  >
            <option value=\"\"></option>
            <option value=\"annuel\">annuel</option>
            <option value=\"mensuel\">mensuel</option>
            <option value=\"hebdomadaire\">hebdomadaire</option>

        </select>

        <select id=\"typePension\"  name=\"typePension\">
            <option value=\"\"></option>
            <option value=\"complete\">complete</option>
            <option value=\"Demi p1\">Demi p1</option>
            <option value=\"Demi p2\">Demi p2</option>

        </select>

        <select id=\"etat\"  name=\"etat\">
            <option value=\"\"></option>
            <option value=\"1\">payer</option>
            <option value=\"NULL\">non payer</option>
        </select>

        <input type=\"submit\" value=\"rechercher\" class=\"btn btn-dark\">
    </form>







    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Cherchez une reservation ...\">
    <table  class=\"table table-bordered\"  id=\"tableac\">
        <thead>
            <tr>


                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Type abonnement</th>
                <th scope=\"col\">Type pension</th>
                <th scope=\"col\">Absence</th>
                <th scope=\"col\">Date abonnement</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for abonneresto in abonnerestos %}
            {% if abonneresto.etat == 1 %}
                {% set color = '#80c1ff' %}
            {% elseif abonneresto.etat == 0 %}
                {% set color = '#ff8080' %}

            {% endif %}



            <tr>
                <td style=\"background-color:{{color}} ; color:{{'#3f4c5a'}}\">{{ abonneresto.nom }}</td>
                <td style=\"background-color:{{color}} ; color:{{'#3f4c5a'}}\">{{ abonneresto.typeAbo }}</td>
                <td style=\"background-color:{{color}} ; color:{{'#3f4c5a'}}\">{{ abonneresto.typePension }}</td>
                <td style=\"background-color:{{color}} ; color:{{'#3f4c5a'}}\">{{ abonneresto.absence }}</td>
                <td style=\"background-color:{{color}} ; color:{{'#3f4c5a'}}\">{% if abonneresto.dateAbo %}{{ abonneresto.dateAbo|date('Y-m-d') }}{% endif %}</td>
                <td style=\"background-color:{{color}} ; color:{{'#3f4c5a'}}\">
                    <ul>
                        <li>
                            <a href=\"{{ path('abonneresto_show', { 'id': abonneresto.id }) }} \" style=\"color:#b08ead;\" >voir</a>
                        </li>
                        <li>
                            <a href=\"{{ path('abonneresto_edit', { 'id': abonneresto.id }) }}\" style=\"color:#b08ead;\">modifier</a>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('abonneresto_new') }}\" style=\"color:#b08ead;\"> créer une nouvelle reservation</a>
        </li>
    </ul>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();

                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>

{% endblock %}
", "abonneresto/index.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\abonneresto\\index.html.twig");
    }
}
