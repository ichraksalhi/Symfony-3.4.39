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

/* @Reclamation/Default/read.html.twig */
class __TwigTemplate_a688dde97a707c482f4403a49f50373a9caf415b4cc9fe4f2288a302b17f9f1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Default/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Default/read.html.twig"));

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


    <link href=\" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\" >
    <link href=\"https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css\" >
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
                            <li><a href=\"affichage\"><i class=\"fa fa-edit\"></i> espace evaluation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"form.html\">General Form</a></li>
                                    <li><a href=\"form_advanced.html\">Advanced Components</a></li>
                                    <li><a href=\"form_validation.html\">Form Validation</a></li>
                                    <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                                    <li><a href=\"form_upload.html\">Form Upload</a></li>
                                    <li><a href=\"form_buttons.html\">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a href=\"read\"><i class=\"fa fa-desktop\"></i> espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>
                                    <li><a href=\"icons.html\">Icons</a></li>
                                    <li><a href=\"glyphicons.html\">Glyphicons</a></li>
                                    <li><a href=\"widgets.html\">Widgets</a></li>
                                    <li><a href=\"invoice.html\">Invoice</a></li>
                                    <li><a href=\"inbox.html\">Inbox</a></li>
                                    <li><a href=\"calendar.html\">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"tables.html\">Tables</a></li>
                                    <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"chartjs.html\">Chart JS</a></li>
                                    <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                                    <li><a href=\"morisjs.html\">Moris JS</a></li>
                                    <li><a href=\"echarts.html\">ECharts</a></li>
                                    <li><a href=\"other_charts.html\">Other Charts</a></li>
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
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" href=\"/devitt2/web/app_dev.php/login\">
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
                                <img src=\"images/img.jpg\" alt=\"\">Salhi Ichrak
                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                <li><a href=\"javascript:;\"> Profile</a></li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <span class=\"badge bg-red pull-right\"></span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href=\"javascript:;\">Help</a></li>
                                <li><a href=\"/devitt2/web/app_dev.php/login\"><i class=\"fa fa-sign-out pull-right\"></i> déconnexion</a></li>
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
                        <h3>Salhi Ichrak <small>espace reclamation</small></h3>
                    </div>

                    <div class=\"title_right\"> ";
        // line 288
        echo "                        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                            <div class=\"input-group\">


                                <br>





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
                                <h2> <small>Users</small></h2>

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
                                    Les reclamations
                                </p>

                                <button class=\"btn btn-default\" onclick=\"window.print();\"><i class=\"fa fa-print\"></i> Print</button>
                                <button type=\"button\" class=\"btn btn-warning\"><a href=\"trier\">Trier selon le objet </a></button>

                                <div class=\"x_content\">

                                        <button  type=\"button\"  class=\"btn btn-primary\"> <a href=\"listNonapprouve\">reclamation non traité </a>  </button>
                                    <button type=\"button\" class=\"btn btn-info\"> <a href=\"listapprouve\"> reclamation traité </a> </button>



                                    <table  class=\"table table-striped table-bordered\"id=\"example\" class=\"display nowrap\">

                                    <thead>
                                    <tr>
                                        <th>Objet</th>
                                        <th>etat</th>
                                        <th>num reclamtion</th>
                                        <th>cin</th>
                                        <th>numtel</th>
                                        <th>description</th>
                                        <th>Supprimer</th>



                                        ";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TabReclamations"] ?? $this->getContext($context, "TabReclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["TabReclamation"]) {
            // line 368
            echo "                                    <tr>

                                        <td>";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "NomDemande", []), "html", null, true);
            echo "</td>
                                        ";
            // line 371
            if (($this->getAttribute($context["TabReclamation"], "PrenomDemande", []) == "Non Approuvée")) {
                // line 372
                echo "                                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approved", ["id" => $this->getAttribute($context["TabReclamation"], "idDemande", [])]), "html", null, true);
                echo "\" >  <button class=\"btn btn-success btn-xs\"> Approuvée</button></a></td>
                                        ";
            } else {
                // line 374
                echo "                                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approved", ["id" => $this->getAttribute($context["TabReclamation"], "idDemande", [])]), "html", null, true);
                echo "\" >  <button class=\"btn btn-danger btn-xs\"> non Approuvée</button></a></td>
                                        ";
            }
            // line 376
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "idDemande", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 377
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "CinDemande", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 378
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "NumTelDemande", []), "html", null, true);
            echo "</td>
                                        <td>";
            // line 379
            echo twig_escape_filter($this->env, $this->getAttribute($context["TabReclamation"], "PostDemande", []), "html", null, true);
            echo "</td>


                                       ";
            // line 382
            echo " <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", ["id" => $this->getAttribute($context["TabReclamation"], "idDemande", [])]), "html", null, true);
            echo "\" >  <button class=\"btn btn-danger btn-xs\"> <i class=\"fa fa-trash-o\"></i> Supprimer</button> </a></td>
                                    </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TabReclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
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
<!-- /page content -->


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
</body>

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

<!-- Custom Theme Scripts -->
<script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../build/js/custom.min.js"), "html", null, true);
        echo "\"></script>





    <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js\"></script>




    <script>
        \$(document).ready(function() {
            \$('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );


    </script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Default/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 463,  540 => 460,  531 => 454,  461 => 386,  450 => 382,  444 => 379,  440 => 378,  436 => 377,  431 => 376,  425 => 374,  419 => 372,  417 => 371,  413 => 370,  409 => 368,  405 => 367,  324 => 288,  36 => 1,);
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


    <link href=\" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\" >
    <link href=\"https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css\" >
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
                            <li><a href=\"affichage\"><i class=\"fa fa-edit\"></i> espace evaluation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"form.html\">General Form</a></li>
                                    <li><a href=\"form_advanced.html\">Advanced Components</a></li>
                                    <li><a href=\"form_validation.html\">Form Validation</a></li>
                                    <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                                    <li><a href=\"form_upload.html\">Form Upload</a></li>
                                    <li><a href=\"form_buttons.html\">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a href=\"read\"><i class=\"fa fa-desktop\"></i> espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"general_elements.html\">General Elements</a></li>
                                    <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                                    <li><a href=\"typography.html\">Typography</a></li>
                                    <li><a href=\"icons.html\">Icons</a></li>
                                    <li><a href=\"glyphicons.html\">Glyphicons</a></li>
                                    <li><a href=\"widgets.html\">Widgets</a></li>
                                    <li><a href=\"invoice.html\">Invoice</a></li>
                                    <li><a href=\"inbox.html\">Inbox</a></li>
                                    <li><a href=\"calendar.html\">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"tables.html\">Tables</a></li>
                                    <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"chartjs.html\">Chart JS</a></li>
                                    <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                                    <li><a href=\"morisjs.html\">Moris JS</a></li>
                                    <li><a href=\"echarts.html\">ECharts</a></li>
                                    <li><a href=\"other_charts.html\">Other Charts</a></li>
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
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" href=\"/devitt2/web/app_dev.php/login\">
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
                                <img src=\"images/img.jpg\" alt=\"\">Salhi Ichrak
                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                <li><a href=\"javascript:;\"> Profile</a></li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <span class=\"badge bg-red pull-right\"></span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href=\"javascript:;\">Help</a></li>
                                <li><a href=\"/devitt2/web/app_dev.php/login\"><i class=\"fa fa-sign-out pull-right\"></i> déconnexion</a></li>
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
                        <h3>Salhi Ichrak <small>espace reclamation</small></h3>
                    </div>

                    <div class=\"title_right\"> {#hetha bih feyda hh#}
                        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                            <div class=\"input-group\">


                                <br>





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
                                <h2> <small>Users</small></h2>

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
                                    Les reclamations
                                </p>

                                <button class=\"btn btn-default\" onclick=\"window.print();\"><i class=\"fa fa-print\"></i> Print</button>
                                <button type=\"button\" class=\"btn btn-warning\"><a href=\"trier\">Trier selon le objet </a></button>

                                <div class=\"x_content\">

                                        <button  type=\"button\"  class=\"btn btn-primary\"> <a href=\"listNonapprouve\">reclamation non traité </a>  </button>
                                    <button type=\"button\" class=\"btn btn-info\"> <a href=\"listapprouve\"> reclamation traité </a> </button>



                                    <table  class=\"table table-striped table-bordered\"id=\"example\" class=\"display nowrap\">

                                    <thead>
                                    <tr>
                                        <th>Objet</th>
                                        <th>etat</th>
                                        <th>num reclamtion</th>
                                        <th>cin</th>
                                        <th>numtel</th>
                                        <th>description</th>
                                        <th>Supprimer</th>



                                        {% for TabReclamation in TabReclamations %}
                                    <tr>

                                        <td>{{ TabReclamation.NomDemande }}</td>
                                        {% if(TabReclamation.PrenomDemande==\"Non Approuvée\") %}
                                        <td><a href=\"{{ path('approved',{'id':TabReclamation.idDemande}) }}\" >  <button class=\"btn btn-success btn-xs\"> Approuvée</button></a></td>
                                        {% else %}
                                        <td><a href=\"{{ path('approved',{'id':TabReclamation.idDemande}) }}\" >  <button class=\"btn btn-danger btn-xs\"> non Approuvée</button></a></td>
                                        {% endif %}
                                        <td>{{ TabReclamation.idDemande }}</td>
                                        <td>{{ TabReclamation.CinDemande }}</td>
                                        <td>{{ TabReclamation.NumTelDemande }}</td>
                                        <td>{{ TabReclamation.PostDemande }}</td>


                                       {##} <td><a href=\"{{ path('delete',{'id':TabReclamation.idDemande}) }}\" >  <button class=\"btn btn-danger btn-xs\"> <i class=\"fa fa-trash-o\"></i> Supprimer</button> </a></td>
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
<!-- /page content -->


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
</body>

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

<!-- Custom Theme Scripts -->
<script src=\"{{ asset('../build/js/custom.min.js') }}\"></script>





    <script src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>


    <script src=\"{{ asset('jquery-min.js') }}\"></script>


    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js\"></script>
    <script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js\"></script>




    <script>
        \$(document).ready(function() {
            \$('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );


    </script>
", "@Reclamation/Default/read.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Default\\read.html.twig");
    }
}
