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

/* AcceuilAdmin.html.twig */
class __TwigTemplate_9c265083426892c350b45f8d9ec24cc564c4443ddee44e100714f0bf527048bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AcceuilAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AcceuilAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagess/1.jfif"), "html", null, true);
        echo "\" type=\"image/jfif\" />

    <title> WELDY </title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
</head>
<body>
";
        // line 37
        $this->displayBlock('nav', $context, $blocks);
        // line 1019
        echo "
";
        // line 1020
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "

        <!-- Bootstrap -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- iCheck -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- bootstrap-progressbar -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- JQVMap -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- bootstrap-daterangepicker -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom Theme Style -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 38
        echo "<body class=\"nav-md\">
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
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagess/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
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
                            <li><a><i class=\"fa fa-table\"></i> Espace restauration <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a  href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_index");
        echo "\">Les reservations resto </a></li>
                                    <li><a  href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_indexAdmin");
        echo "\">Les paiements resto</a></li>
                                    <li><a  href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelite_indexAdmin");
        echo "\">Les
                                            cartes fidelités</a></li>
                                    <li><a  href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plats_stat");
        echo "\">Statistique</a></li>


                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-edit\"></i> Espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read");
        echo "\">Reclamation</a></li>
                                   
                                    <li><a href=\"/devitt2/web/app_dev.php/affichage\">liste evaluations</a></li>

                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-bar-chart-o\"></i> Espace evaluation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage");
        echo "\">les ecaluations</a></li>
                                    <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre1");
        echo "\">Statistiques</a></li>

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
                            <li><a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
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
                                <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagess/img.jpg"), "html", null, true);
        echo "\" alt=\"\">John Doe
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
                                        <span class=\"image\"><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagess/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
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
                                        <span class=\"image\"><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagess/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
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
                                        <span class=\"image\"><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagess/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
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
                                        <span class=\"image\"><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagess/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
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
            <!-- top tiles -->
            <div class=\"row tile_count\">
                ";
        // line 311
        $this->displayBlock('body', $context, $blocks);
        // line 999
        echo "            </div>
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


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 311
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 312
        echo "                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
                    <div class=\"count\">2500</div>
                    <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
                    <div class=\"count\">123.50</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
                    <div class=\"count green\">2,500</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
                    <div class=\"count\">4,567</div>
                    <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
                    <div class=\"count\">2,315</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
                    <div class=\"count\">7,325</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                </div>
            </div>
            <!-- /top tiles -->

            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"dashboard_graph\">

                        <div class=\"row x_title\">
                            <div class=\"col-md-6\">
                                <h3>Network Activities <small>Graph title sub-title</small></h3>
                            </div>
                            <div class=\"col-md-6\">
                                <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                            <div id=\"chart_plot_01\" class=\"demo-placeholder\"></div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 bg-white\">
                            <div class=\"x_title\">
                                <h2>Top Campaign Performance</h2>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"col-md-12 col-sm-12 col-xs-6\">
                                <div>
                                    <p>Facebook Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Twitter Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"60\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-6\">
                                <div>
                                    <p>Conventional Media</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"40\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Bill boards</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                </div>

            </div>
            <br />

            <div class=\"row\">


                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel tile fixed_height_320\">
                        <div class=\"x_title\">
                            <h2>App Versions</h2>
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
                            <h4>App Usage across versions</h4>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.2</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 66%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>123k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.3</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>53k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.4</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 25%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>23k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.5</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 5%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>3k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.6</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>1k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel tile fixed_height_320 overflow_hidden\">
                        <div class=\"x_title\">
                            <h2>Device Usage</h2>
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
                            <table class=\"\" style=\"width:100%\">
                                <tr>
                                    <th style=\"width:37%;\">
                                        <p>Top 5</p>
                                    </th>
                                    <th>
                                        <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                                            <p class=\"\">Device</p>
                                        </div>
                                        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                                            <p class=\"\">Progress</p>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <canvas class=\"canvasDoughnut\" height=\"140\" width=\"140\" style=\"margin: 15px 10px 10px 0\"></canvas>
                                    </td>
                                    <td>
                                        <table class=\"tile_info\">
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square blue\"></i>IOS </p>
                                                </td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square green\"></i>Android </p>
                                                </td>
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square purple\"></i>Blackberry </p>
                                                </td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square aero\"></i>Symbian </p>
                                                </td>
                                                <td>15%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square red\"></i>Others </p>
                                                </td>
                                                <td>30%</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel tile fixed_height_320\">
                        <div class=\"x_title\">
                            <h2>Quick Settings</h2>
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
                            <div class=\"dashboard-widget-content\">
                                <ul class=\"quick-list\">
                                    <li><i class=\"fa fa-calendar-o\"></i><a href=\"#\">Settings</a>
                                    </li>
                                    <li><i class=\"fa fa-bars\"></i><a href=\"#\">Subscription</a>
                                    </li>
                                    <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                                    <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                                    </li>
                                    <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                                    <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                                    </li>
                                    <li><i class=\"fa fa-area-chart\"></i><a href=\"#\">Logout</a>
                                    </li>
                                </ul>

                                <div class=\"sidebar-widget\">
                                    <h4>Profile Completion</h4>
                                    <canvas width=\"150\" height=\"80\" id=\"chart_gauge_01\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                                    <div class=\"goal-wrapper\">
                                        <span id=\"gauge-text\" class=\"gauge-value pull-left\">0</span>
                                        <span class=\"gauge-value pull-left\">%</span>
                                        <span id=\"goal-text\" class=\"goal-value pull-right\">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Recent Activities <small>Sessions</small></h2>
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
                            <div class=\"dashboard-widget-content\">

                                <ul class=\"list-unstyled timeline widget\">
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-8 col-sm-8 col-xs-12\">



                    <div class=\"row\">

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>Visitors location <small>geo-presentation</small></h2>
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
                                    <div class=\"dashboard-widget-content\">
                                        <div class=\"col-md-4 hidden-small\">
                                            <h2 class=\"line_30\">125.7k Views from 60 countries</h2>

                                            <table class=\"countries_list\">
                                                <tbody>
                                                <tr>
                                                    <td>United States</td>
                                                    <td class=\"fs15 fw700 text-right\">33%</td>
                                                </tr>
                                                <tr>
                                                    <td>France</td>
                                                    <td class=\"fs15 fw700 text-right\">27%</td>
                                                </tr>
                                                <tr>
                                                    <td>Germany</td>
                                                    <td class=\"fs15 fw700 text-right\">16%</td>
                                                </tr>
                                                <tr>
                                                    <td>Spain</td>
                                                    <td class=\"fs15 fw700 text-right\">11%</td>
                                                </tr>
                                                <tr>
                                                    <td>Britain</td>
                                                    <td class=\"fs15 fw700 text-right\">10%</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id=\"world-map-gdp\" class=\"col-md-8 col-sm-12 col-xs-12\" style=\"height:230px;\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">


                        <!-- Start to do list -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>To Do List <small>Sample tasks</small></h2>
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

                                    <div class=\"\">
                                        <ul class=\"to_do\">
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Schedule meeting with new client </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End to do list -->

                        <!-- start of weather widget -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>Daily active users <small>Sessions</small></h2>
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
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"temperature\"><b>Monday</b>, 07:30 AM
                                                <span>F</span>
                                                <span><b>C</b></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <div class=\"weather-icon\">
                                                <canvas height=\"84\" width=\"84\" id=\"partly-cloudy-day\"></canvas>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-8\">
                                            <div class=\"weather-text\">
                                                <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12\">
                                        <div class=\"weather-text pull-right\">
                                            <h3 class=\"degrees\">23</h3>
                                        </div>
                                    </div>

                                    <div class=\"clearfix\"></div>

                                    <div class=\"row weather-days\">
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Mon</h2>
                                                <h3 class=\"degrees\">25</h3>
                                                <canvas id=\"clear-day\" width=\"32\" height=\"32\"></canvas>
                                                <h5>15 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Tue</h2>
                                                <h3 class=\"degrees\">25</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"rain\"></canvas>
                                                <h5>12 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Wed</h2>
                                                <h3 class=\"degrees\">27</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"snow\"></canvas>
                                                <h5>14 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Thu</h2>
                                                <h3 class=\"degrees\">28</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"sleet\"></canvas>
                                                <h5>15 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Fri</h2>
                                                <h3 class=\"degrees\">28</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"wind\"></canvas>
                                                <h5>11 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Sat</h2>
                                                <h3 class=\"degrees\">26</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"cloudy\"></canvas>
                                                <h5>10 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end of weather widget -->
                    </div>
                </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1020
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1021
        echo "<!-- jQuery -->
<script src=\"";
        // line 1022
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 1024
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 1026
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- NProgress -->
<script src=\"";
        // line 1028
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
<!-- Chart.js -->
<script src=\"";
        // line 1030
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- gauge.js -->
<script src=\"";
        // line 1032
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-progressbar -->
<script src=\"";
        // line 1034
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 1036
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<!-- Skycons -->
<script src=\"";
        // line 1038
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
<!-- Flot -->
<script src=\"";
        // line 1040
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1041
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1042
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1043
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1044
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<!-- Flot plugins -->
<script src=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1047
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1048
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
<!-- DateJS -->
<script src=\"";
        // line 1050
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1053
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1054
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-daterangepicker -->
<script src=\"";
        // line 1056
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1057
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme Scripts -->
<script src=\"";
        // line 1060
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AcceuilAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1322 => 1060,  1316 => 1057,  1312 => 1056,  1307 => 1054,  1303 => 1053,  1299 => 1052,  1294 => 1050,  1289 => 1048,  1285 => 1047,  1281 => 1046,  1276 => 1044,  1272 => 1043,  1268 => 1042,  1264 => 1041,  1260 => 1040,  1255 => 1038,  1250 => 1036,  1245 => 1034,  1240 => 1032,  1235 => 1030,  1230 => 1028,  1225 => 1026,  1220 => 1024,  1215 => 1022,  1212 => 1021,  1203 => 1020,  507 => 312,  498 => 311,  469 => 999,  467 => 311,  432 => 279,  417 => 267,  402 => 255,  387 => 243,  360 => 219,  322 => 184,  268 => 133,  264 => 132,  252 => 123,  241 => 115,  236 => 113,  232 => 112,  228 => 111,  166 => 52,  150 => 38,  141 => 37,  128 => 31,  123 => 29,  118 => 27,  113 => 25,  107 => 22,  102 => 20,  97 => 18,  92 => 16,  87 => 13,  78 => 12,  68 => 1020,  65 => 1019,  63 => 37,  58 => 34,  56 => 12,  50 => 9,  40 => 1,);
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
    <link rel=\"icon\" href=\"{{ asset('imagess/1.jfif') }}\" type=\"image/jfif\" />

    <title> WELDY </title>
    {% block stylesheets %}


        <!-- Bootstrap -->
        <link href=\"{{asset('../vendors/bootstrap/dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"{{asset('../vendors/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"{{ asset('../vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
        <!-- iCheck -->
        <link href=\"{{ asset('../vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\">

        <!-- bootstrap-progressbar -->
        <link href=\"{{ asset('../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\">
        <!-- JQVMap -->
        <link href=\"{{ asset('../vendors/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\"/>
        <!-- bootstrap-daterangepicker -->
        <link href=\"{{ asset('../vendors/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">
        <!-- Custom Theme Style -->
        <link href=\"{{ asset('build/css/custom.min.css') }}\" rel=\"stylesheet\">

    {% endblock %}

</head>
<body>
{% block nav%}
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
                        <img src=\"{{ asset('imagess/img.jpg') }}\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
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
                            <li><a><i class=\"fa fa-table\"></i> Espace restauration <span class=\"fa fa-chevron-down\"></span></a>
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
                                   
                                    <li><a href=\"/devitt2/web/app_dev.php/affichage\">liste evaluations</a></li>

                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-bar-chart-o\"></i> Espace evaluation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('affichage') }}\">les ecaluations</a></li>
                                    <li><a href=\"{{ path('RatingsNbre1') }}\">Statistiques</a></li>

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
                            <li><a href=\"{{ asset('javascript:void(0)') }}\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
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
                                <img src=\"{{ asset('imagess/img.jpg') }}\" alt=\"\">John Doe
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
                                        <span class=\"image\"><img src=\"{{ asset('imagess/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
                                        <span class=\"image\"><img src=\"{{ asset('imagess/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
                                        <span class=\"image\"><img src=\"{{ asset('imagess/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
                                        <span class=\"image\"><img src=\"{{ asset('imagess/img.jpg') }}\" alt=\"Profile Image\" /></span>
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
            <!-- top tiles -->
            <div class=\"row tile_count\">
                {% block body %}
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
                    <div class=\"count\">2500</div>
                    <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
                    <div class=\"count\">123.50</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
                    <div class=\"count green\">2,500</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
                    <div class=\"count\">4,567</div>
                    <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
                    <div class=\"count\">2,315</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                </div>
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
                    <div class=\"count\">7,325</div>
                    <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
                </div>
            </div>
            <!-- /top tiles -->

            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"dashboard_graph\">

                        <div class=\"row x_title\">
                            <div class=\"col-md-6\">
                                <h3>Network Activities <small>Graph title sub-title</small></h3>
                            </div>
                            <div class=\"col-md-6\">
                                <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-9 col-sm-9 col-xs-12\">
                            <div id=\"chart_plot_01\" class=\"demo-placeholder\"></div>
                        </div>
                        <div class=\"col-md-3 col-sm-3 col-xs-12 bg-white\">
                            <div class=\"x_title\">
                                <h2>Top Campaign Performance</h2>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"col-md-12 col-sm-12 col-xs-6\">
                                <div>
                                    <p>Facebook Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Twitter Campaign</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"60\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-6\">
                                <div>
                                    <p>Conventional Media</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"40\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Bill boards</p>
                                    <div class=\"\">
                                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                                            <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"clearfix\"></div>
                    </div>
                </div>

            </div>
            <br />

            <div class=\"row\">


                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel tile fixed_height_320\">
                        <div class=\"x_title\">
                            <h2>App Versions</h2>
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
                            <h4>App Usage across versions</h4>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.2</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 66%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>123k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.3</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>53k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.4</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 25%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>23k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.5</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 5%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>3k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"widget_summary\">
                                <div class=\"w_left w_25\">
                                    <span>0.1.5.6</span>
                                </div>
                                <div class=\"w_center w_55\">
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
                                            <span class=\"sr-only\">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"w_right w_20\">
                                    <span>1k</span>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel tile fixed_height_320 overflow_hidden\">
                        <div class=\"x_title\">
                            <h2>Device Usage</h2>
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
                            <table class=\"\" style=\"width:100%\">
                                <tr>
                                    <th style=\"width:37%;\">
                                        <p>Top 5</p>
                                    </th>
                                    <th>
                                        <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                                            <p class=\"\">Device</p>
                                        </div>
                                        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                                            <p class=\"\">Progress</p>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <canvas class=\"canvasDoughnut\" height=\"140\" width=\"140\" style=\"margin: 15px 10px 10px 0\"></canvas>
                                    </td>
                                    <td>
                                        <table class=\"tile_info\">
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square blue\"></i>IOS </p>
                                                </td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square green\"></i>Android </p>
                                                </td>
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square purple\"></i>Blackberry </p>
                                                </td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square aero\"></i>Symbian </p>
                                                </td>
                                                <td>15%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class=\"fa fa-square red\"></i>Others </p>
                                                </td>
                                                <td>30%</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel tile fixed_height_320\">
                        <div class=\"x_title\">
                            <h2>Quick Settings</h2>
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
                            <div class=\"dashboard-widget-content\">
                                <ul class=\"quick-list\">
                                    <li><i class=\"fa fa-calendar-o\"></i><a href=\"#\">Settings</a>
                                    </li>
                                    <li><i class=\"fa fa-bars\"></i><a href=\"#\">Subscription</a>
                                    </li>
                                    <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                                    <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                                    </li>
                                    <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                                    <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                                    </li>
                                    <li><i class=\"fa fa-area-chart\"></i><a href=\"#\">Logout</a>
                                    </li>
                                </ul>

                                <div class=\"sidebar-widget\">
                                    <h4>Profile Completion</h4>
                                    <canvas width=\"150\" height=\"80\" id=\"chart_gauge_01\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                                    <div class=\"goal-wrapper\">
                                        <span id=\"gauge-text\" class=\"gauge-value pull-left\">0</span>
                                        <span class=\"gauge-value pull-left\">%</span>
                                        <span id=\"goal-text\" class=\"goal-value pull-right\">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Recent Activities <small>Sessions</small></h2>
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
                            <div class=\"dashboard-widget-content\">

                                <ul class=\"list-unstyled timeline widget\">
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"block\">
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                                    <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                </h2>
                                                <div class=\"byline\">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-8 col-sm-8 col-xs-12\">



                    <div class=\"row\">

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>Visitors location <small>geo-presentation</small></h2>
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
                                    <div class=\"dashboard-widget-content\">
                                        <div class=\"col-md-4 hidden-small\">
                                            <h2 class=\"line_30\">125.7k Views from 60 countries</h2>

                                            <table class=\"countries_list\">
                                                <tbody>
                                                <tr>
                                                    <td>United States</td>
                                                    <td class=\"fs15 fw700 text-right\">33%</td>
                                                </tr>
                                                <tr>
                                                    <td>France</td>
                                                    <td class=\"fs15 fw700 text-right\">27%</td>
                                                </tr>
                                                <tr>
                                                    <td>Germany</td>
                                                    <td class=\"fs15 fw700 text-right\">16%</td>
                                                </tr>
                                                <tr>
                                                    <td>Spain</td>
                                                    <td class=\"fs15 fw700 text-right\">11%</td>
                                                </tr>
                                                <tr>
                                                    <td>Britain</td>
                                                    <td class=\"fs15 fw700 text-right\">10%</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id=\"world-map-gdp\" class=\"col-md-8 col-sm-12 col-xs-12\" style=\"height:230px;\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">


                        <!-- Start to do list -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>To Do List <small>Sample tasks</small></h2>
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

                                    <div class=\"\">
                                        <ul class=\"to_do\">
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Schedule meeting with new client </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End to do list -->

                        <!-- start of weather widget -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>Daily active users <small>Sessions</small></h2>
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
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"temperature\"><b>Monday</b>, 07:30 AM
                                                <span>F</span>
                                                <span><b>C</b></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <div class=\"weather-icon\">
                                                <canvas height=\"84\" width=\"84\" id=\"partly-cloudy-day\"></canvas>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-8\">
                                            <div class=\"weather-text\">
                                                <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12\">
                                        <div class=\"weather-text pull-right\">
                                            <h3 class=\"degrees\">23</h3>
                                        </div>
                                    </div>

                                    <div class=\"clearfix\"></div>

                                    <div class=\"row weather-days\">
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Mon</h2>
                                                <h3 class=\"degrees\">25</h3>
                                                <canvas id=\"clear-day\" width=\"32\" height=\"32\"></canvas>
                                                <h5>15 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Tue</h2>
                                                <h3 class=\"degrees\">25</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"rain\"></canvas>
                                                <h5>12 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Wed</h2>
                                                <h3 class=\"degrees\">27</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"snow\"></canvas>
                                                <h5>14 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Thu</h2>
                                                <h3 class=\"degrees\">28</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"sleet\"></canvas>
                                                <h5>15 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Fri</h2>
                                                <h3 class=\"degrees\">28</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"wind\"></canvas>
                                                <h5>11 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-2\">
                                            <div class=\"daily-weather\">
                                                <h2 class=\"day\">Sat</h2>
                                                <h3 class=\"degrees\">26</h3>
                                                <canvas height=\"32\" width=\"32\" id=\"cloudy\"></canvas>
                                                <h5>10 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end of weather widget -->
                    </div>
                </div>
                {% endblock %}
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


{% endblock %}

{% block javascripts %}
<!-- jQuery -->
<script src=\"{{ asset('../vendors/jquery/dist/jquery.min.js') }}\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset('../vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<!-- FastClick -->
<script src=\"{{ asset('../vendors/fastclick/lib/fastclick.js') }}\"></script>
<!-- NProgress -->
<script src=\"{{ asset('../vendors/nprogress/nprogress.js') }}\"></script>
<!-- Chart.js -->
<script src=\"{{ asset('../vendors/Chart.js/dist/Chart.min.js') }}\"></script>
<!-- gauge.js -->
<script src=\"{{ asset('../vendors/gauge.js/dist/gauge.min.js') }}\"></script>
<!-- bootstrap-progressbar -->
<script src=\"{{ asset('../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
<!-- iCheck -->
<script src=\"{{ asset('../vendors/iCheck/icheck.min.js') }}\"></script>
<!-- Skycons -->
<script src=\"{{ asset('../vendors/skycons/skycons.js') }}\"></script>
<!-- Flot -->
<script src=\"{{ asset('../vendors/Flot/jquery.flot.js') }}\"></script>
<script src=\"{{ asset('../vendors/Flot/jquery.flot.pie.js') }}\"></script>
<script src=\"{{ asset('../vendors/Flot/jquery.flot.time.js')}}\"></script>
<script src=\"{{ asset('../vendors/Flot/jquery.flot.stack.js') }}\"></script>
<script src=\"{{ asset('../vendors/Flot/jquery.flot.resize.js') }}\"></script>
<!-- Flot plugins -->
<script src=\"{{ asset('../vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
<script src=\"{{ asset('../vendors/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
<script src=\"{{ asset('../vendors/flot.curvedlines/curvedLines.js') }}\"></script>
<!-- DateJS -->
<script src=\"{{ asset('../vendors/DateJS/build/date.js') }}\"></script>
<!-- JQVMap -->
<script src=\"{{ asset('../vendors/jqvmap/dist/jquery.vmap.js') }}\"></script>
<script src=\"{{ asset('../vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}\"></script>
<script src=\"{{ asset('../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}\"></script>
<!-- bootstrap-daterangepicker -->
<script src=\"{{ asset('../vendors/moment/min/moment.min.js') }}\"></script>
<script src=\"{{ asset('../vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

<!-- Custom Theme Scripts -->
<script src=\"{{ asset('build/js/custom.min.js') }}\"></script>


{% endblock %}", "AcceuilAdmin.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\AcceuilAdmin.html.twig");
    }
}
