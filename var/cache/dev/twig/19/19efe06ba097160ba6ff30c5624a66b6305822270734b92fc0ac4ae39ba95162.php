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

/* @Reclamation/Default/read1.html.twig */
class __TwigTemplate_875e221dfd3f9f86e751b2f46f8aa105afab12ae507fc1a0b99f2f507d98a360 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Default/read1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Default/read1.html.twig"));

        $this->parent = $this->loadTemplate("//base1.html.twig", "@Reclamation/Default/read1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet') }}\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("responsive.dataTables.min.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet') }}\" type=\"text/css\"   href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("responsive.dataTables.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "




     <!-- breadcrumb part start-->
     <section class=\"breadcrumb_part\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"breadcrumb_iner\">
                         <h2>espace reclamation</h2>
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
         <h4 class=\"mb-30\"> <center> table des reclamations  </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>




     <!-- breadcrumb part end-->


     <div class=\"col-md-12\">
         <div class=\"card\">
             <div class=\"card-header card-header-primary\">
              <center>   <h3 class=\"card-title \">liste des reclamations</h3></center>
                 ";
        // line 58
        echo "             </div>
             <input id=\"myInput\" type=\"text\" placeholder=\"Chercher une reclamation\">
             <div class=\"card-body\">
                 <div class=\"table-responsive\">
                     <table class=\"table\"  id=\"example23\">
                         <thead>
                         <tr>
                             <th>Objet</th>
                             <th>Etat</th>
                             <th>Num reclamtion</th>

                             <th>MODIFIER</th>


                             <th>DETAILS</th>


                             ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TabReclamations"]) ? $context["TabReclamations"] : $this->getContext($context, "TabReclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["TabReclamation"]) {
            // line 76
            echo "                         <tr>
                             <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "NomDemande", []), "html", null, true);
            echo "</td>
                             <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "PrenomDemande", []), "html", null, true);
            echo "</td>
                             <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "idDemande", []), "html", null, true);
            echo "</td>

                             <td><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update", ["id" => $this->getAttribute($context["TabReclamation"], "idDemande", [])]), "html", null, true);
            echo "\" >  <button class=\"genric-btn primary circle\">Modifier</button></a></td>
                             <td> <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detaile", ["id" => $this->getAttribute($context["TabReclamation"], "idDemande", [])]), "html", null, true);
            echo "\"><button type=\"button\" class=\"genric-btn success circle\">DETAILS</button></a></td>

                         </tr>

                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TabReclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                         </tr>
                         </thead>



                         </tbody>
                     </table>



                 </div>
                 <hr>
                 <div class=\"navigation\">
                     ";
        // line 100
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["TabReclamations"]) ? $context["TabReclamations"] : $this->getContext($context, "TabReclamations")));
        echo "
                 </div>

             </div>

             </div>
         </div>
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<script>
    \$(function () {
        \$('#myTable').DataTable({
            \"bPaginate\": false,
        });
        var table = \$('#example').DataTable({
            \"columnDefs\": [{
                \"visible\": false,
                \"targets\": 2
            }],
            \"order\": [
                [2, 'asc']
            ],
            \"displayLength\": 25,
            \"drawCallback\": function (settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(3, {
                    page: 'current'
                }).data().each(function (group, i) {
                    if (last !== group) {
                        \$(rows).eq(i).before('<tr class=\"group\"><td colspan=\"5\">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        \$('#example tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        \$('#config-table').DataTable({
            responsive: true
        });
        \$('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        \$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    });

</script>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#example23 tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Default/read1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 114,  248 => 111,  243 => 110,  234 => 109,  215 => 100,  200 => 87,  189 => 82,  185 => 81,  180 => 79,  176 => 78,  172 => 77,  169 => 76,  165 => 75,  146 => 58,  97 => 10,  88 => 9,  76 => 7,  71 => 5,  67 => 4,  62 => 3,  53 => 2,  31 => 1,);
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
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('dataTables.bootstrap4.css')}}\">
    <link rel=\"stylesheet') }}\" type=\"text/css\" href=\"{{ asset('responsive.dataTables.min.css') }}\">

<link rel=\"stylesheet') }}\" type=\"text/css\"   href=\"{{ asset('responsive.dataTables.min.css') }}\">
{% endblock %}
 {% block  body  %}





     <!-- breadcrumb part start-->
     <section class=\"breadcrumb_part\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"breadcrumb_iner\">
                         <h2>espace reclamation</h2>
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
         <h4 class=\"mb-30\"> <center> table des reclamations  </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>




     <!-- breadcrumb part end-->


     <div class=\"col-md-12\">
         <div class=\"card\">
             <div class=\"card-header card-header-primary\">
              <center>   <h3 class=\"card-title \">liste des reclamations</h3></center>
                 {#                        <p class=\"card-category\"> Here is a subtitle for this table</p>#}
             </div>
             <input id=\"myInput\" type=\"text\" placeholder=\"Chercher une reclamation\">
             <div class=\"card-body\">
                 <div class=\"table-responsive\">
                     <table class=\"table\"  id=\"example23\">
                         <thead>
                         <tr>
                             <th>Objet</th>
                             <th>Etat</th>
                             <th>Num reclamtion</th>

                             <th>MODIFIER</th>


                             <th>DETAILS</th>


                             {% for TabReclamation in TabReclamations %}
                         <tr>
                             <td>{{ TabReclamation.NomDemande }}</td>
                             <td>{{ TabReclamation.PrenomDemande }}</td>
                             <td>{{ TabReclamation.idDemande }}</td>

                             <td><a href=\"{{ path('update',{'id':TabReclamation.idDemande}) }}\" >  <button class=\"genric-btn primary circle\">Modifier</button></a></td>
                             <td> <a href=\"{{ path('detaile',{'id': TabReclamation.idDemande}) }}\"><button type=\"button\" class=\"genric-btn success circle\">DETAILS</button></a></td>

                         </tr>

                         {% endfor %}
                         </tr>
                         </thead>



                         </tbody>
                     </table>



                 </div>
                 <hr>
                 <div class=\"navigation\">
                     {{ knp_pagination_render(TabReclamations) }}
                 </div>

             </div>

             </div>
         </div>
     </div>
 {% endblock  %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>


    <script src=\"{{ asset('jquery-min.js') }}\"></script>


    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<script>
    \$(function () {
        \$('#myTable').DataTable({
            \"bPaginate\": false,
        });
        var table = \$('#example').DataTable({
            \"columnDefs\": [{
                \"visible\": false,
                \"targets\": 2
            }],
            \"order\": [
                [2, 'asc']
            ],
            \"displayLength\": 25,
            \"drawCallback\": function (settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(3, {
                    page: 'current'
                }).data().each(function (group, i) {
                    if (last !== group) {
                        \$(rows).eq(i).before('<tr class=\"group\"><td colspan=\"5\">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        \$('#example tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        \$('#config-table').DataTable({
            responsive: true
        });
        \$('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        \$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    });

</script>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#example23 tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
{% endblock %}
", "@Reclamation/Default/read1.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Default\\read1.html.twig");
    }
}
