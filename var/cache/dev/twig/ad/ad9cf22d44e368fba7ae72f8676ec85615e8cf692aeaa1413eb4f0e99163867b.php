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

/* @Reclamation/Evaluation/affichage.html.twig */
class __TwigTemplate_17a4a200cfb550c590f22198f5e3a51ee302c68d549e3006693cc905b31ae51e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/affichage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/affichage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title> DataTables   </title>

    <link href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">

    <link href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
    <link href=\"https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css\">
    <link href=\"https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css\">
    <!-- Bootstrap -->
    <link href=\"../vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"../vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"../vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"../vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"../build/css/custom.min.css\" rel=\"stylesheet\">
</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">

                    </div>
                    <div class=\"profile_info\">

                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"index.html\">Dashboard</a></li>
                                    <li><a href=\"index2.html\">Dashboard2</a></li>
                                    <li><a href=\"index3.html\">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> Inscription <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> ines <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>


                            <li><a><i class=\"fa fa-desktop\"></i> Clubs <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-desktop\"></i> Produits <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>
                            <li><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_index");
        echo "\"><i class=\"fa fa-table\"></i> Espace restauration <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a  href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_index");
        echo "\">Les reservations resto </a></li>
                                    <li><a  href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_indexAdmin");
        echo "\">Les paiements resto</a></li>
                                    <li><a  href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelite_indexAdmin");
        echo "\">Les
                                            cartes fidelités</a></li>
                                    <li><a  href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plats_stat");
        echo "\">Statistique</a></li>


                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-edit\"></i> Espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read");
        echo "\">Reclamation</a></li>
                                    <li><a href=\"/devitt2/web/app_dev.php/read\">liste reclamations</a></li>
                                    <li><a href=\"/devitt2/web/app_dev.php/affichage\">liste evaluations</a></li>

                                </ul>
                            </li>

                            <li><a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage");
        echo "\" ><i class=\"fa fa-bar-chart-o\"></i> Espace evaluation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage");
        echo "\">les ecaluations</a></li>
                                    <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre1");
        echo "\">Statistiques</a></li>

                                </ul>
                            </li>
                            <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre1");
        echo "\" ><i class=\"fa fa-bar-chart-o\"></i> Statistique<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                                    <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"menu_section\">
                        <h3>Live On</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"e_commerce.html\">E-commerce</a></li>
                                    <li><a href=\"projects.html\">Projects</a></li>
                                    <li><a href=\"project_detail.html\">Project Detail</a></li>
                                    <li><a href=\"contacts.html\">Contacts</a></li>
                                    <li><a href=\"profile.html\">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"page_403.html\">403 Error</a></li>
                                    <li><a href=\"page_404.html\">404 Error</a></li>
                                    <li><a href=\"page_500.html\">500 Error</a></li>
                                    <li><a href=\"plain_page.html\">Plain Page</a></li>
                                    <li><a href=\"login.html\">Login Page</a></li>
                                    <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#level1_1\">Level One</a>
                                    <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_1\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_2\">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#level1_2\">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <nav>
                    <div class=\"nav toggle\">
                        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                    </div>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"\">
                            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"images/img.jpg\" alt=\"\">John Doe
                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                <li><a href=\"javascript:;\"> Profile</a></li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <span class=\"badge bg-red pull-right\">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href=\"javascript:;\">Help</a></li>
                                <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role=\"presentation\" class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"badge bg-green\">6</span>
                            </a>
                            <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"text-center\">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <div class=\"\">
                <div class=\"page-title\">
                    <div class=\"title_left\">
                        <h3>Salhi Ichrak <small>espace evaluation</small></h3>
                    </div>

                    <div class=\"title_right\"> ";
        // line 319
        echo "                        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                            <div class=\"input-group\">



                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>

                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>La liste des evaluation <small></small></h2>
                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"#\">Settings 1</a>
                                            </li>
                                            <li><a href=\"#\">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                    </li>
                                </ul>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <p class=\"text-muted font-13 m-b-30\">
                                    Les Evaluations
                                </p>
                                <table border=\"0\" cellspacing=\"5\" cellpadding=\"5\">
                                    <tbody><tr>
                                        <td>Minimum id :</td>
                                        <td><input type=\"text\" id=\"min\" name=\"min\"></td>
                                    </tr>
                                    <tr>
                                        <td>Maximum id:</td>
                                        <td><input type=\"text\" id=\"max\" name=\"max\"></td>
                                    </tr>


                                <table id=\"example\" class=\"table table-striped table-bordered\"  class=\"display\">

                                    <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>note</th>
                                        <th>date</th>



                                        <th>Supprimer</th>



                                        ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Evaluations"]) ? $context["Evaluations"] : $this->getContext($context, "Evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["Evaluation"]) {
            // line 385
            echo "                                    <tr>

                                        <td>";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute($context["Evaluation"], "Id", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 388
            echo twig_escape_filter($this->env, $this->getAttribute($context["Evaluation"], "Note", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 389
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Evaluation"], "datee", [])), "html", null, true);
            echo "</td>


                                        <td><a href=\"";
            // line 392
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", ["id" => $this->getAttribute($context["Evaluation"], "id", [])]), "html", null, true);
            echo "\" >  <button class=\"btn btn-danger btn-xs\"> <i class=\"fa fa-trash-o\"></i> Supprimer</button></a></td>
                                    </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "                                    </tr>
                                    </thead>







                                    </tbody>
                                </table>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->
</body>

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src=\"../vendors/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- FastClick -->
<script src=\"../vendors/fastclick/lib/fastclick.js\"></script>
<!-- NProgress -->
<script src=\"../vendors/nprogress/nprogress.js\"></script>
<!-- iCheck -->
<script src=\"../vendors/iCheck/icheck.min.js\"></script>
<!-- Datatables -->
<script src=\"../vendors/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/buttons.flash.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/buttons.html5.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/buttons.print.min.js\"></script>
<script src=\"../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js\"></script>
<script src=\"../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js\"></script>
<script src=\"../vendors/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js\"></script>
<script src=\"../vendors/datatables.net-scroller/js/dataTables.scroller.min.js\"></script>
<script src=\"../vendors/jszip/dist/jszip.min.js\"></script>
<script src=\"../vendors/pdfmake/build/pdfmake.min.js\"></script>
<script src=\"../vendors/pdfmake/build/vfs_fonts.js\"></script>


<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/dataTables.jqueryui.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.jqueryui.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js\"></script>

<!-- Custom Theme Scripts -->
<script src=\"../build/js/custom.min.js\"></script>


<script>
    \$(document).ready(function() {
        var table = \$('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );

        table.buttons().container()
            .insertBefore( '#example_filter' );
    } );
    /* Custom filtering function which will search data in column four between two values */
    \$.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = parseInt( \$('#min').val(), 10 );
            var max = parseInt( \$('#max').val(), 10 );
            var id = parseFloat( data[3] ) || 0; // use data for the age column

            if ( ( isNaN( min ) && isNaN( max ) ) ||
                ( isNaN( min ) && id <= max ) ||
                ( min <= id   && isNaN( max ) ) ||
                ( min <= id   && id <= max ) )
            {
                return true;
            }
            return false;
        }
    );

    \$(document).ready(function() {
        var table = \$('#example').DataTable();

        // Event listener to the two range filtering inputs to redraw on input
        \$('#min, #max').keyup( function() {
            table.draw();
        } );
    } );

    \$.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            // Don't filter on anything other than \"myTable\"
            if ( settings.nTable.id !== 'myTable' ) {
                return true;
            }

            // Filtering for \"myTable\".
        }
    );
</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Evaluation/affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 396,  474 => 392,  468 => 389,  464 => 388,  460 => 387,  456 => 385,  452 => 384,  385 => 319,  199 => 135,  192 => 131,  188 => 130,  183 => 128,  173 => 121,  162 => 113,  157 => 111,  153 => 110,  149 => 109,  144 => 107,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title> DataTables   </title>

    <link href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">

    <link href=\"https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
    <link href=\"https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css\">
    <link href=\"https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css\">
    <!-- Bootstrap -->
    <link href=\"../vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"../vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"../vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"../vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"../build/css/custom.min.css\" rel=\"stylesheet\">
</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">

                    </div>
                    <div class=\"profile_info\">

                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"index.html\">Dashboard</a></li>
                                    <li><a href=\"index2.html\">Dashboard2</a></li>
                                    <li><a href=\"index3.html\">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> Inscription <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> ines <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>


                            <li><a><i class=\"fa fa-desktop\"></i> Clubs <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-desktop\"></i> Produits <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>

                                </ul>
                            </li>
                            <li><a href=\"{{ path('abonneresto_index') }}\"><i class=\"fa fa-table\"></i> Espace restauration <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a  href=\"{{ path('abonneresto_index') }}\">Les reservations resto </a></li>
                                    <li><a  href=\"{{ path('paiement_indexAdmin') }}\">Les paiements resto</a></li>
                                    <li><a  href=\"{{ path('cartefidelite_indexAdmin') }}\">Les
                                            cartes fidelités</a></li>
                                    <li><a  href=\"{{ path('plats_stat') }}\">Statistique</a></li>


                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-edit\"></i> Espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('read') }}\">Reclamation</a></li>
                                    <li><a href=\"/devitt2/web/app_dev.php/read\">liste reclamations</a></li>
                                    <li><a href=\"/devitt2/web/app_dev.php/affichage\">liste evaluations</a></li>

                                </ul>
                            </li>

                            <li><a href=\"{{ path('affichage') }}\" ><i class=\"fa fa-bar-chart-o\"></i> Espace evaluation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('affichage') }}\">les ecaluations</a></li>
                                    <li><a href=\"{{ path('RatingsNbre1') }}\">Statistiques</a></li>

                                </ul>
                            </li>
                            <li><a href=\"{{ path('RatingsNbre1') }}\" ><i class=\"fa fa-bar-chart-o\"></i> Statistique<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                                    <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"menu_section\">
                        <h3>Live On</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"e_commerce.html\">E-commerce</a></li>
                                    <li><a href=\"projects.html\">Projects</a></li>
                                    <li><a href=\"project_detail.html\">Project Detail</a></li>
                                    <li><a href=\"contacts.html\">Contacts</a></li>
                                    <li><a href=\"profile.html\">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"page_403.html\">403 Error</a></li>
                                    <li><a href=\"page_404.html\">404 Error</a></li>
                                    <li><a href=\"page_500.html\">500 Error</a></li>
                                    <li><a href=\"plain_page.html\">Plain Page</a></li>
                                    <li><a href=\"login.html\">Login Page</a></li>
                                    <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#level1_1\">Level One</a>
                                    <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_1\">Level Two</a>
                                            </li>
                                            <li><a href=\"#level2_2\">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#level1_2\">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <nav>
                    <div class=\"nav toggle\">
                        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                    </div>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"\">
                            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"images/img.jpg\" alt=\"\">John Doe
                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                <li><a href=\"javascript:;\"> Profile</a></li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <span class=\"badge bg-red pull-right\">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href=\"javascript:;\">Help</a></li>
                                <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role=\"presentation\" class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"badge bg-green\">6</span>
                            </a>
                            <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"text-center\">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <div class=\"\">
                <div class=\"page-title\">
                    <div class=\"title_left\">
                        <h3>Salhi Ichrak <small>espace evaluation</small></h3>
                    </div>

                    <div class=\"title_right\"> {#hetha bih feyda hh#}
                        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                            <div class=\"input-group\">



                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>

                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>La liste des evaluation <small></small></h2>
                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"#\">Settings 1</a>
                                            </li>
                                            <li><a href=\"#\">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                    </li>
                                </ul>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <p class=\"text-muted font-13 m-b-30\">
                                    Les Evaluations
                                </p>
                                <table border=\"0\" cellspacing=\"5\" cellpadding=\"5\">
                                    <tbody><tr>
                                        <td>Minimum id :</td>
                                        <td><input type=\"text\" id=\"min\" name=\"min\"></td>
                                    </tr>
                                    <tr>
                                        <td>Maximum id:</td>
                                        <td><input type=\"text\" id=\"max\" name=\"max\"></td>
                                    </tr>


                                <table id=\"example\" class=\"table table-striped table-bordered\"  class=\"display\">

                                    <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>note</th>
                                        <th>date</th>



                                        <th>Supprimer</th>



                                        {% for Evaluation in Evaluations %}
                                    <tr>

                                        <td>{{ Evaluation.Id }}</td>
                                        <td>{{ Evaluation.Note }}</td>
                                        <td>{{ Evaluation.datee|date }}</td>


                                        <td><a href=\"{{ path('supprimer',{'id':Evaluation.id}) }}\" >  <button class=\"btn btn-danger btn-xs\"> <i class=\"fa fa-trash-o\"></i> Supprimer</button></a></td>
                                    </tr>

                                    {% endfor %}
                                    </tr>
                                    </thead>







                                    </tbody>
                                </table>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->
</body>

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src=\"../vendors/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- FastClick -->
<script src=\"../vendors/fastclick/lib/fastclick.js\"></script>
<!-- NProgress -->
<script src=\"../vendors/nprogress/nprogress.js\"></script>
<!-- iCheck -->
<script src=\"../vendors/iCheck/icheck.min.js\"></script>
<!-- Datatables -->
<script src=\"../vendors/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/buttons.flash.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/buttons.html5.min.js\"></script>
<script src=\"../vendors/datatables.net-buttons/js/buttons.print.min.js\"></script>
<script src=\"../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js\"></script>
<script src=\"../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js\"></script>
<script src=\"../vendors/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js\"></script>
<script src=\"../vendors/datatables.net-scroller/js/dataTables.scroller.min.js\"></script>
<script src=\"../vendors/jszip/dist/jszip.min.js\"></script>
<script src=\"../vendors/pdfmake/build/pdfmake.min.js\"></script>
<script src=\"../vendors/pdfmake/build/vfs_fonts.js\"></script>


<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/dataTables.jqueryui.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.jqueryui.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js\"></script>

<!-- Custom Theme Scripts -->
<script src=\"../build/js/custom.min.js\"></script>


<script>
    \$(document).ready(function() {
        var table = \$('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );

        table.buttons().container()
            .insertBefore( '#example_filter' );
    } );
    /* Custom filtering function which will search data in column four between two values */
    \$.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = parseInt( \$('#min').val(), 10 );
            var max = parseInt( \$('#max').val(), 10 );
            var id = parseFloat( data[3] ) || 0; // use data for the age column

            if ( ( isNaN( min ) && isNaN( max ) ) ||
                ( isNaN( min ) && id <= max ) ||
                ( min <= id   && isNaN( max ) ) ||
                ( min <= id   && id <= max ) )
            {
                return true;
            }
            return false;
        }
    );

    \$(document).ready(function() {
        var table = \$('#example').DataTable();

        // Event listener to the two range filtering inputs to redraw on input
        \$('#min, #max').keyup( function() {
            table.draw();
        } );
    } );

    \$.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            // Don't filter on anything other than \"myTable\"
            if ( settings.nTable.id !== 'myTable' ) {
                return true;
            }

            // Filtering for \"myTable\".
        }
    );
</script>

", "@Reclamation/Evaluation/affichage.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Evaluation\\affichage.html.twig");
    }
}
