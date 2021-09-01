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

/* @Reclamation/Evaluation/RatingNbreback.html.twig */
class __TwigTemplate_0a5e7b3141884ad0ea0998de7495f4f598829d37fe20eda410db93d194d927bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/RatingNbreback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/RatingNbreback.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
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
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_index");
        echo "\"><i class=\"fa fa-table\"></i> Espace restauration <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a  href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_index");
        echo "\">Les reservations resto </a></li>
                                    <li><a  href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_indexAdmin");
        echo "\">Les paiements resto</a></li>
                                    <li><a  href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelite_indexAdmin");
        echo "\">Les
                                            cartes fidelités</a></li>
                                    <li><a  href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plats_stat");
        echo "\">Statistique</a></li>


                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-edit\"></i> Espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read");
        echo "\">Reclamation</a></li>
                                    <li><a href=\"/devitt2/web/app_dev.php/read\">liste reclamations</a></li>
                                    <li><a href=\"/devitt2/web/app_dev.php/affichage\">liste evaluations</a></li>

                                </ul>
                            </li>

                            <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage");
        echo "\" ><i class=\"fa fa-bar-chart-o\"></i> Espace evaluation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage");
        echo "\">les ecaluations</a></li>
                                    <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre1");
        echo "\">Statistiques</a></li>

                                </ul>
                            </li>
                            <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre1");
        echo "\" ><i class=\"fa fa-bar-chart-o\"></i> Statistique<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">

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










<body>




     <style type=\"text/css\">

         html, body {
             background-color: #222;
             font-family: 'Helvetica Neue', Helvetica, sans-serif;
             color: rgba(255,255,255,0.75);
         }

         h1 {
             margin: 6px auto 0;
             width: 500px;
             text-align: center;
             font-size: 36px;
         }

         .base {
             position: absolute;
             bottom: 0;
             left: -35px;
             width: 825px;
             height: 20px;
             background-color: rgba(255,255,255,0.05);
             -moz-transform: skew(45deg);
             -o-transform: skew(45deg);
             -webkit-transform: skew(45deg);
         }

         .chart-container {
             position: relative;
             z-index: 0;
             margin: 100px auto 0;
             width: 700px;
             height: 400px;
             /*border: solid 1px #bbb;*/
             background-color: rgba(0,0,0,0.0);
             /*  -webkit-box-shadow: 0 8px 6px -6px #444;
             */}

         .chart-container:after {
             content:\"\";
             position: absolute;
             top: -15px;
             left: -8px;
             height: 15px;
             width: 700px;
             background-color: rgba(255,255,255,0.055);
             -moz-transform: skew(45deg);
             -o-transform: skew(45deg);
             -webkit-transform: skew(45deg);
             transform: skew(45deg);
         }

         .chart-container > table {
             position: absolute;
             top: 0;
             left: 0;
             z-index: -999;
             width: 100%;
             height: 100%;
         }

         .chart-container table  tr  td {
             width: 100px;
             height: 1px;
             border: solid 1px  rgba(255,255,255,0.05);

         }

         .meter {
             position: relative;
             top: 0px;
             left: -30px;
             height: 400px;
             width: 13px;
             background-color: rgba(20,113,163,0.5);
             border-left: solid 1px rgba(255,255,255,0.5);

         }

         .meter:before {
             content: \"\";
             position: absolute;
             top: -7px;
             left: -15px;
             width: 15px;
             height: 400px;
             background-color: rgba(14,81,117,0.9);
             -moz-transform: skewY(45deg);
             -o-transform: skewY(45deg);
             -webkit-transform: skewY(45deg);
             transform: skewY(45deg);
         }

         .meter:after {
             content: \"\";
             position: absolute;
             top: -15px;
             left: -8px;
             width: 3px;
             height: 15px;
             background-color: rgba(13,171,217,0.45);
             -moz-transform: skewX(45deg);
             -o-transform: skewX(45deg);
             -webkit-transform: skewX(45deg);
             transform: skewX(45deg);
         }

         .meter li {
             position: relative;
             list-style-type: none;
             height: 99px;
             border-bottom: solid 1px #0DABD9;
         }

         .meter li:before {
             content: \"\";
             position: absolute;
             top: -15px;
             left: -30px;
             width: 30px;
             height: 100%;
             border-bottom: solid 1px #0DABD9;
             -moz-transform: skewY(45deg);
             -o-transform: skewY(45deg);
             -webkit-transform: skewY(45deg);
             transform: skewY(45deg);
         }

         .meter li:last-child {
             border-bottom: none;
         }

         .meter li:last-child:before {
             border: 0;
         }

         .meter li div {
             position: absolute;
             left: -115px;
             top: 0;
             padding: 55px 0 0;
             width: 80px;
             color: #4ed7c7;
             text-align: right;
             font-weight: 300;
             font-size: 14px;
             line-height: 18px;
             text-transform: uppercase;
         }


         /* ---------------------
           Vertical Bars
         ----------------------*/

         .bar {
             float: left;
             position: absolute;
             bottom: 0;
             z-index: 99;
             width: ";
        // line 455
        echo twig_escape_filter($this->env, ((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")) * 100), "html", null, true);
        echo "%;

             width: 40px;
             margin: 0 40px;
             background-color: rgba(107,255,49,0.35);
         }

         .bar:before {
             content: \"\";
             position: absolute;
             left: -15px;
             bottom: 7px;
             height: 100%;
             width: 15px;
             background-color: rgba(107,255,49,0.25);
             -webkit-transform: skewY(45deg);
         }

         .bar:after {
             content: \"\";
             position: absolute;
             top: -15px;
             left: -8px;
             width: 40px;
             height: 15px;
             background-color: rgba(107,255,49,0.45);
             -moz-transform: skewX(45deg);
             -o-transform: skewX(45deg);
             -webkit-transform: skewX(45deg);
             transform: skewX(45deg);
         }




     </style>




     <h1>Moyenne de l'evaluation </h1>
     <div class=\"chart-container\">
         <div class=\"base\"></div>
         <!-- Left Side Meter-->
         <ul class=\"meter\">

             <li><div>10</div></li>
             <li><div>5</div></li>
             <li><div>0</div></li>
         </ul>
         <!-- Background-Grid -->
         <table>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>

         </table>
         <!-- End Background Grid -->

         <div class=\"bar one\"> ";
        // line 541
        echo twig_escape_filter($this->env, (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "html", null, true);
        echo "/5 </div>


     </div>



             <h1>  NOTES FINAL <i class=\"fa fa-angle-double-down\"></i>
    </div> <h1> <label>";
        // line 549
        echo twig_escape_filter($this->env, (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "html", null, true);
        echo "/5</label> </h1> </h1> </div>



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

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Evaluation/RatingNbreback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 549,  611 => 541,  522 => 455,  200 => 136,  193 => 132,  189 => 131,  184 => 129,  174 => 122,  163 => 114,  158 => 112,  154 => 111,  150 => 110,  145 => 108,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
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










<body>




     <style type=\"text/css\">

         html, body {
             background-color: #222;
             font-family: 'Helvetica Neue', Helvetica, sans-serif;
             color: rgba(255,255,255,0.75);
         }

         h1 {
             margin: 6px auto 0;
             width: 500px;
             text-align: center;
             font-size: 36px;
         }

         .base {
             position: absolute;
             bottom: 0;
             left: -35px;
             width: 825px;
             height: 20px;
             background-color: rgba(255,255,255,0.05);
             -moz-transform: skew(45deg);
             -o-transform: skew(45deg);
             -webkit-transform: skew(45deg);
         }

         .chart-container {
             position: relative;
             z-index: 0;
             margin: 100px auto 0;
             width: 700px;
             height: 400px;
             /*border: solid 1px #bbb;*/
             background-color: rgba(0,0,0,0.0);
             /*  -webkit-box-shadow: 0 8px 6px -6px #444;
             */}

         .chart-container:after {
             content:\"\";
             position: absolute;
             top: -15px;
             left: -8px;
             height: 15px;
             width: 700px;
             background-color: rgba(255,255,255,0.055);
             -moz-transform: skew(45deg);
             -o-transform: skew(45deg);
             -webkit-transform: skew(45deg);
             transform: skew(45deg);
         }

         .chart-container > table {
             position: absolute;
             top: 0;
             left: 0;
             z-index: -999;
             width: 100%;
             height: 100%;
         }

         .chart-container table  tr  td {
             width: 100px;
             height: 1px;
             border: solid 1px  rgba(255,255,255,0.05);

         }

         .meter {
             position: relative;
             top: 0px;
             left: -30px;
             height: 400px;
             width: 13px;
             background-color: rgba(20,113,163,0.5);
             border-left: solid 1px rgba(255,255,255,0.5);

         }

         .meter:before {
             content: \"\";
             position: absolute;
             top: -7px;
             left: -15px;
             width: 15px;
             height: 400px;
             background-color: rgba(14,81,117,0.9);
             -moz-transform: skewY(45deg);
             -o-transform: skewY(45deg);
             -webkit-transform: skewY(45deg);
             transform: skewY(45deg);
         }

         .meter:after {
             content: \"\";
             position: absolute;
             top: -15px;
             left: -8px;
             width: 3px;
             height: 15px;
             background-color: rgba(13,171,217,0.45);
             -moz-transform: skewX(45deg);
             -o-transform: skewX(45deg);
             -webkit-transform: skewX(45deg);
             transform: skewX(45deg);
         }

         .meter li {
             position: relative;
             list-style-type: none;
             height: 99px;
             border-bottom: solid 1px #0DABD9;
         }

         .meter li:before {
             content: \"\";
             position: absolute;
             top: -15px;
             left: -30px;
             width: 30px;
             height: 100%;
             border-bottom: solid 1px #0DABD9;
             -moz-transform: skewY(45deg);
             -o-transform: skewY(45deg);
             -webkit-transform: skewY(45deg);
             transform: skewY(45deg);
         }

         .meter li:last-child {
             border-bottom: none;
         }

         .meter li:last-child:before {
             border: 0;
         }

         .meter li div {
             position: absolute;
             left: -115px;
             top: 0;
             padding: 55px 0 0;
             width: 80px;
             color: #4ed7c7;
             text-align: right;
             font-weight: 300;
             font-size: 14px;
             line-height: 18px;
             text-transform: uppercase;
         }


         /* ---------------------
           Vertical Bars
         ----------------------*/

         .bar {
             float: left;
             position: absolute;
             bottom: 0;
             z-index: 99;
             width: {{ note*100 }}%;

             width: 40px;
             margin: 0 40px;
             background-color: rgba(107,255,49,0.35);
         }

         .bar:before {
             content: \"\";
             position: absolute;
             left: -15px;
             bottom: 7px;
             height: 100%;
             width: 15px;
             background-color: rgba(107,255,49,0.25);
             -webkit-transform: skewY(45deg);
         }

         .bar:after {
             content: \"\";
             position: absolute;
             top: -15px;
             left: -8px;
             width: 40px;
             height: 15px;
             background-color: rgba(107,255,49,0.45);
             -moz-transform: skewX(45deg);
             -o-transform: skewX(45deg);
             -webkit-transform: skewX(45deg);
             transform: skewX(45deg);
         }




     </style>




     <h1>Moyenne de l'evaluation </h1>
     <div class=\"chart-container\">
         <div class=\"base\"></div>
         <!-- Left Side Meter-->
         <ul class=\"meter\">

             <li><div>10</div></li>
             <li><div>5</div></li>
             <li><div>0</div></li>
         </ul>
         <!-- Background-Grid -->
         <table>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>

         </table>
         <!-- End Background Grid -->

         <div class=\"bar one\"> {{ note}}/5 </div>


     </div>



             <h1>  NOTES FINAL <i class=\"fa fa-angle-double-down\"></i>
    </div> <h1> <label>{{ note}}/5</label> </h1> </h1> </div>



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

", "@Reclamation/Evaluation/RatingNbreback.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Evaluation\\RatingNbreback.html.twig");
    }
}
