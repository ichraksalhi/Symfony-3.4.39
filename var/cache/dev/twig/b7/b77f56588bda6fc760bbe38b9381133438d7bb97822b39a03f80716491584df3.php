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

/* @Reclamation/Evaluation/evaluations.html.twig */
class __TwigTemplate_21856ae6d5b7c6d427a4e29ea30e899d966883108f7d4c22128cb3891329babe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/evaluations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/evaluations.html.twig"));

        $this->parent = $this->loadTemplate("//base1.html.twig", "@Reclamation/Evaluation/evaluations.html.twig", 1);
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
     <!-- breadcrumb part end-->
     <div class=\"sidebar-search\">

         <div class=\"input-group custom-search-form\">

             <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
         </div>
         <!-- /input-group -->
     </div>
     <ul class=\"nav\" id=\"side-menu\">
         <li>
             <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
             <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
             </ul>
         </li>
     </ul><br><br><br><br>

     <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

     <script type=\"text/javascript\">
         jQuery(document).ready(function() {
             var searchRequest = null;
             \$(\"#search\").keyup(function() {
                 var minlength = 1;
                 var that = this;
                 var value = \$(this).val();
                 var entitySelector = \$(\"#entitiesNav\").html('');
                 if (value.length >= minlength ) {
                     if (searchRequest != null)
                         searchRequest.abort();
                     searchRequest = \$.ajax({
                         type: \"GET\",
                         url: \"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\",
                         data: {
                             'q' : value
                         },
                         dataType: \"text\",
                         success: function(msg){
                             //we need to check if the value is the same
                             if (value===\$(that).val()) {
                                 var result = JSON.parse(msg);
                                 \$.each(result, function(key, arr) {
                                     \$.each(arr, function(id, value) {
                                         if (key === 'evaluations') {
                                             if (id !== 'error') {
                                                 console.log(value[1]);
                                                 entitySelector.append('<li><b>'+value[1]+'</b><a href=\"/modifier/'+id+'\">');
                                             } else {
                                                 entitySelector.append('<li class=\"error\">'+value+'</li>');
                                             }
                                         }
                                     });
                                 });
                             }
                         }
                     });
                 }
             });
         });
     </script>


     <div class=\"container\">
         <hr>
         <div class=\"row\">


             <div class=\"col-md-6\">
                 <a href=\"recents\" class=\"genric-btn success\">    LES ANCIENNES EVALUATIONS
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
                 <h4 class=\"card-title \">liste des reclamations</h4>
                 ";
        // line 110
        echo "             </div>
             <div class=\"card-body\">
                 <div class=\"table-responsive\">
                     <table class=\"table\">
                         <thead>
                         <tr>
                             <th>Note</th>

                             <th>date</th>




                             <th>modifier</th>


                             ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Evaluations"] ?? $this->getContext($context, "Evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["Evaluation"]) {
            // line 127
            echo "                         <tr>


                             <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["Evaluation"], "note", []), "html", null, true);
            echo "</td>
                             <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Evaluation"], "datee", [])), "html", null, true);
            echo "</td>

                             <td><a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier", ["id" => $this->getAttribute($context["Evaluation"], "id", [])]), "html", null, true);
            echo "\" >  <button class=\"genric-btn primary circle\">Modifier</button></a></td>

                         </tr>



                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
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
        return "@Reclamation/Evaluation/evaluations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 140,  207 => 133,  202 => 131,  198 => 130,  193 => 127,  189 => 126,  171 => 110,  111 => 52,  60 => 3,  51 => 2,  29 => 1,);
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
     <!-- breadcrumb part end-->
     <div class=\"sidebar-search\">

         <div class=\"input-group custom-search-form\">

             <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
         </div>
         <!-- /input-group -->
     </div>
     <ul class=\"nav\" id=\"side-menu\">
         <li>
             <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
             <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
             </ul>
         </li>
     </ul><br><br><br><br>

     <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

     <script type=\"text/javascript\">
         jQuery(document).ready(function() {
             var searchRequest = null;
             \$(\"#search\").keyup(function() {
                 var minlength = 1;
                 var that = this;
                 var value = \$(this).val();
                 var entitySelector = \$(\"#entitiesNav\").html('');
                 if (value.length >= minlength ) {
                     if (searchRequest != null)
                         searchRequest.abort();
                     searchRequest = \$.ajax({
                         type: \"GET\",
                         url: \"{{ path('search') }}\",
                         data: {
                             'q' : value
                         },
                         dataType: \"text\",
                         success: function(msg){
                             //we need to check if the value is the same
                             if (value===\$(that).val()) {
                                 var result = JSON.parse(msg);
                                 \$.each(result, function(key, arr) {
                                     \$.each(arr, function(id, value) {
                                         if (key === 'evaluations') {
                                             if (id !== 'error') {
                                                 console.log(value[1]);
                                                 entitySelector.append('<li><b>'+value[1]+'</b><a href=\"/modifier/'+id+'\">');
                                             } else {
                                                 entitySelector.append('<li class=\"error\">'+value+'</li>');
                                             }
                                         }
                                     });
                                 });
                             }
                         }
                     });
                 }
             });
         });
     </script>


     <div class=\"container\">
         <hr>
         <div class=\"row\">


             <div class=\"col-md-6\">
                 <a href=\"recents\" class=\"genric-btn success\">    LES ANCIENNES EVALUATIONS
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
                 <h4 class=\"card-title \">liste des reclamations</h4>
                 {#                        <p class=\"card-category\"> Here is a subtitle for this table</p>#}
             </div>
             <div class=\"card-body\">
                 <div class=\"table-responsive\">
                     <table class=\"table\">
                         <thead>
                         <tr>
                             <th>Note</th>

                             <th>date</th>




                             <th>modifier</th>


                             {% for Evaluation in Evaluations %}
                         <tr>


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
 {% endblock  %}", "@Reclamation/Evaluation/evaluations.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Evaluation\\evaluations.html.twig");
    }
}
