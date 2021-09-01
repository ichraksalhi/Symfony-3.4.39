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

/* @Reclamation/Evaluation/affichage1.html.twig */
class __TwigTemplate_9a6767cbb3e26ee9d2bda3b486fce246f327a11a8e862247c9d43534f3b37875 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "//base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/affichage1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/affichage1.html.twig"));

        $this->parent = $this->loadTemplate("//base1.html.twig", "@Reclamation/Evaluation/affichage1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "




     <!-- breadcrumb part start-->
     <section class=\"breadcrumb_part\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"breadcrumb_iner\">
                         <h2>espace evaluation</h2>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center> Rester en contacte avec nous dans les reseaux sociaux </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>
     <div class=\"container\">
     
     <!-- breadcrumb part end-->
     </div>
     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center> entrer la date de l'valuation  </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>




     <div class=\"container\">
         <aside class=\"single_sidebar_widget search_widget\">
             <form class=\"form-group\" method=\"post\" action=\"searchdate\">
             <div class=\"form-group\">

             <div class=\"row\">


                     <input type=\"date\" class=\"form-control\" name=\"datee\">



                     <div class=\"container\">
                     <input type=\"submit\" value=\"chercher\" class=\"button rounded-0 primary-bg text-white w-100 btn_1\">
                     </div>


                 </div>
             </div>

         </form>


             <div class=\"section-top-border\">
                 <h4 class=\"mb-30\"> <center> c'est facile a connaitre les evaluation anciennces et les futures evaluations oups !  </center></h4>
                 <div class=\"row\">
                     <div class=\"col-lg-12\">

                     </div>
                 </div>
             </div>




             <div class=\"container\">
         <hr>
         <div class=\"row\">
             <div class=\"col-md-6\">
                 <a href=\"recents\" class=\"genric-btn success\">

                     LES ANCIENNES EVALUATIONS
                 </a>
             </div>
             <div class=\"col-md-6 \">
                 <a href=\"venir\" class=\"genric-btn warning\">
                 LES DATES DES FUTURES EVALUATIONS

                 </a>
             </div>
         </div>
         <hr>
     </div>




     <div class=\"col-md-12\">
         <div class=\"card\">
             <div class=\"card-header card-header-primary\">
                <center> <h4 class=\"card-title \">liste des reclamations</h4></center>
                 ";
        // line 106
        echo "             </div>

             <div class=\"card-body\">
                 <div class=\"table-responsive\">
                     <table class=\"table\">
                         <thead>
                         <tr>

                             <th> ID DE L'EVALUATION</th>
                             <th>NOTE</th>
                             <th>DATE DE L'EVALUATION</th>





                             <th>MODIFIER</th>


                             ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Evaluations"] ?? $this->getContext($context, "Evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["Evaluation"]) {
            // line 126
            echo "                         <tr>

                             <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["Evaluation"], "Id", []), "html", null, true);
            echo "</td>
                             <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["Evaluation"], "note", []), "html", null, true);
            echo "</td>
                             <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Evaluation"], "datee", [])), "html", null, true);
            echo "</td>

                             <td><a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier", ["id" => $this->getAttribute($context["Evaluation"], "id", [])]), "html", null, true);
            echo "\" >  <button class=\"genric-btn primary circle\">Modifier</button></a></td>

                         </tr>



                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                         </tr>
                         </thead>
                         <hr>


                         </tbody>
                     </table>

                 </div>

             </div>

         </div>
     </div>
     </div>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Evaluation/affichage1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 139,  206 => 132,  201 => 130,  197 => 129,  193 => 128,  189 => 126,  185 => 125,  164 => 106,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '//base1.html.twig' %}
 {% block  body  %}





     <!-- breadcrumb part start-->
     <section class=\"breadcrumb_part\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"breadcrumb_iner\">
                         <h2>espace evaluation</h2>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center> Rester en contacte avec nous dans les reseaux sociaux </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>
     <div class=\"container\">
     
     <!-- breadcrumb part end-->
     </div>
     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center> entrer la date de l'valuation  </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>




     <div class=\"container\">
         <aside class=\"single_sidebar_widget search_widget\">
             <form class=\"form-group\" method=\"post\" action=\"searchdate\">
             <div class=\"form-group\">

             <div class=\"row\">


                     <input type=\"date\" class=\"form-control\" name=\"datee\">



                     <div class=\"container\">
                     <input type=\"submit\" value=\"chercher\" class=\"button rounded-0 primary-bg text-white w-100 btn_1\">
                     </div>


                 </div>
             </div>

         </form>


             <div class=\"section-top-border\">
                 <h4 class=\"mb-30\"> <center> c'est facile a connaitre les evaluation anciennces et les futures evaluations oups !  </center></h4>
                 <div class=\"row\">
                     <div class=\"col-lg-12\">

                     </div>
                 </div>
             </div>




             <div class=\"container\">
         <hr>
         <div class=\"row\">
             <div class=\"col-md-6\">
                 <a href=\"recents\" class=\"genric-btn success\">

                     LES ANCIENNES EVALUATIONS
                 </a>
             </div>
             <div class=\"col-md-6 \">
                 <a href=\"venir\" class=\"genric-btn warning\">
                 LES DATES DES FUTURES EVALUATIONS

                 </a>
             </div>
         </div>
         <hr>
     </div>




     <div class=\"col-md-12\">
         <div class=\"card\">
             <div class=\"card-header card-header-primary\">
                <center> <h4 class=\"card-title \">liste des reclamations</h4></center>
                 {#                        <p class=\"card-category\"> Here is a subtitle for this table</p>#}
             </div>

             <div class=\"card-body\">
                 <div class=\"table-responsive\">
                     <table class=\"table\">
                         <thead>
                         <tr>

                             <th> ID DE L'EVALUATION</th>
                             <th>NOTE</th>
                             <th>DATE DE L'EVALUATION</th>





                             <th>MODIFIER</th>


                             {% for Evaluation in Evaluations %}
                         <tr>

                             <td>{{ Evaluation.Id }}</td>
                             <td>{{ Evaluation.note }}</td>
                             <td>{{ Evaluation.datee|date }}</td>

                             <td><a href=\"{{ path('modifier',{'id':Evaluation.id}) }}\" >  <button class=\"genric-btn primary circle\">Modifier</button></a></td>

                         </tr>



                         {% endfor %}
                         </tr>
                         </thead>
                         <hr>


                         </tbody>
                     </table>

                 </div>

             </div>

         </div>
     </div>
     </div>

 {% endblock  %}", "@Reclamation/Evaluation/affichage1.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Evaluation\\affichage1.html.twig");
    }
}
