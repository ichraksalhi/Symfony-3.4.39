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

/* @Resto/Default/userHome.html.twig */
class __TwigTemplate_209359220bf0f3043666f407f28b42e83a43a54816eae0dfaacedb695a21dbab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Resto/Default/userHome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Resto/Default/userHome.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 3
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Admin ichrak | </title>

        <!-- Bootstrap -->
        <link href=\"../vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"../vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"../vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
        <!-- bootstrap-daterangepicker -->
        <link href=\"../vendors/bootstrap-daterangepicker/daterangepicker.css\" rel=\"stylesheet\">

        <!-- Custom Theme Style -->
        <link href=\"../build/css/custom.min.css\" rel=\"stylesheet\">
    </head>

    <body class=\"nav-md\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a href=\"index.html\" class=\"site_title\"> <span>WELDY</span></a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <!-- menu profile quick info -->
                    <div class=\"profile clearfix\">
                        <div class=\"profile_pic\">
                            <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("devit.png"), "html", null, true);
            echo "\" alt=\"...\" class=\"img-circle profile_img\">
                        </div>
                        <div class=\"profile_info\">
                            <span>Bienvenue dans ,</span>
                            <h2>Weldi !</h2>
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
                                        <li><a href=\"/devitt2/web/app_dev.php/read\">Reclamation</a></li>

                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-edit\"></i> espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"/devitt2/web/app_dev.php/read\">Reclamation</a></li>
                                        <li><a href=\"/devitt2/web/app_dev.php/read\">liste reclamations</a></li>
                                        <li><a href=\"/devitt2/web/app_dev.php/affichage\">liste evaluations</a></li>

                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-desktop\"></i> espace admin  <span class=\"fa fa-chevron-down\"></span></a>
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
                                <li><a><i class=\"fa fa-table\"></i> espace inscrit <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"tables.html\">Tables</a></li>
                                        <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-bar-chart-o\"></i> stats <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"chartjs.html\">Chart JS</a></li>
                                        <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                                        <li><a href=\"morisjs.html\">Moris JS</a></li>
                                        <li><a href=\"echarts.html\">ECharts</a></li>
                                        <li><a href=\"other_charts.html\">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-clone\"></i> plus d'info sur jardin <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                                        <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                                    </ul>
                                </li>
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
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ichrak.jpg"), "html", null, true);
            echo "\" alt=\"\"> Salhi ichrak
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
                            <h3>User : Ichrak</h3>
                        </div>

                        <div class=\"title_right\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" type=\"button\">Go!</button>
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
                                    <h2>User ichrak <small>Reclamation</small></h2>
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
                                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                                        <div class=\"profile_img\">
                                            <div id=\"crop-avatar\">
                                                <!-- Current avatar -->
                                                <img class=\"img-responsive avatar-view\" src=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ichrak.jpg"), "html", null, true);
            echo "\" alt=\"Avatar\" title=\"Change the avatar\">
                                            </div>
                                        </div>
                                        <h3>SALHI  ICHRAK</h3>

                                        <ul class=\"list-unstyled user_data\">
                                            <li><i class=\"fa fa-map-marker user-profile-icon\"></i> TABARKA
                                            </li>

                                            <li>
                                                <i class=\"fa fa-briefcase user-profile-icon\"></i> Software Engineer
                                            </li>

                                            <li class=\"m-top-xs\">
                                                <i class=\"fa fa-external-link user-profile-icon\"></i>
                                                <a href=\"http://www.kimlabs.com/profile/\" target=\"_blank\">www.kimlabs.com</a>
                                            </li>
                                        </ul>

                                        <a class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
                                        <br />

                                        <!-- start skills -->
                                        <h4>Skills</h4>
                                        <ul class=\"list-unstyled user_data\">
                                            <li>
                                                <p>Web Applications</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>Website Design</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"70\"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>Automation & Testing</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"30\"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>UI / UX</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- end of skills -->

                                    </div>
                                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                                        <div class=\"profile_title\">
                                            <div class=\"col-md-6\">
                                                <h2>User Ichrakt</h2>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                                                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                                    <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                                            <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                                                <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Reclamation</a>
                                                </li>
                                                <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Evaluation</a>
                                                </li>
                                                <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">all</a>
                                                </li>
                                            </ul>
                                            <div id=\"myTabContent\" class=\"tab-content\">
                                                <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                                                    <!-- start recent activity -->
                                                    <ul class=\"messages\">
                                                        <li>

                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-info\">25</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">A PROPOS ESPACE RECLAMATION</h4>
                                                                <blockquote class=\"message\">Dans cette espace on met a votre disposition les affichage des reclamations survenue lors de
                                                                    fonctionnement de cette jardin.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User salhi ichrak </a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>

                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-error\">26</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">A PROPOS ESPACE Evaluation</h4>
                                                                <blockquote class=\"message\">Dans cette espace on met a votre disposition les affichage des reclamations survenue lors de
                                                                    fonctionnement de cette application.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\" data-original-title=\"\">Users</a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>

                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-info\">24</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">A PROPOS </h4>
                                                                <blockquote class=\"message\">.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <img src=\"images/img.jpg\" class=\"avatar\" alt=\"Avatar\">
                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-error\">21</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">Brian Michaels</h4>
                                                                <blockquote class=\"message\">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\" data-original-title=\"\">Download</a>
                                                                </p>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                    <!-- end recent activity -->

                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

                                                    <!-- start user projects -->
                                                    <table class=\"data table table-striped no-margin\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Project Name</th>
                                                            <th>Client Company</th>
                                                            <th class=\"hidden-phone\">Hours Spent</th>
                                                            <th>Contribution</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>New Company Takeover Review</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">18</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"35\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>New Partner Contracts Consultanci</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">13</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-danger\" data-transitiongoal=\"15\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Partners and Inverstors report</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">30</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"45\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>New Company Takeover Review</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">28</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"75\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- end user projects -->

                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                                        photo booth letterpress, commodo enim craft beer mlkshk </p>
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

    <!-- jQuery -->
    <script src=\"../vendors/jquery/dist/jquery.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"../vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- FastClick -->
    <script src=\"../vendors/fastclick/lib/fastclick.js\"></script>
    <!-- NProgress -->
    <script src=\"../vendors/nprogress/nprogress.js\"></script>
    <!-- morris.js -->
    <script src=\"../vendors/raphael/raphael.min.js\"></script>
    <script src=\"../vendors/morris.js/morris.min.js\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"../vendors/moment/min/moment.min.js\"></script>
    <script src=\"../vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"../build/js/custom.min.js\"></script>

    </body>
    </html>
    <h1> rolllle admin </h1>

";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 542
            echo "    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
            // line 546
            $this->displayBlock('title', $context, $blocks);
            echo "</title>
        ";
            // line 547
            $this->displayBlock('stylesheets', $context, $blocks);
            // line 574
            echo "        <link rel=\"icon\" type=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/x-icon"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
            echo "\" />
    </head>
    <body>
    ";
            // line 577
            $this->displayBlock('header', $context, $blocks);
            // line 792
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
            // line 794
            $this->loadTemplate("::flash-messages.html.twig", "@Resto/Default/userHome.html.twig", 794)->display($context);
            // line 795
            echo "        </div>
    </div>


    ";
            // line 799
            $this->displayBlock('body', $context, $blocks);
            // line 814
            echo "

    ";
            // line 816
            $this->displayBlock('footer', $context, $blocks);
            // line 890
            echo "
    ";
            // line 891
            $this->displayBlock('javascripts', $context, $blocks);
            // line 916
            echo "    </body>
    </html>

    <h1> role user </h1>
";
        }
        // line 921
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 546
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dev-It!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 547
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 548
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

            <title>WELDY !</title>
            <link rel=\"icon\" href=\"img/favicon.png\">
            <!-- Bootstrap CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!-- animate CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
            <!-- owl carousel CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
            <!-- font awesome CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.css"), "html", null, true);
        echo "\">
            <!-- flaticon CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
            <!-- font awesome CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
            <!-- swiper CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
            <!-- style CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/rating.css"), "html", null, true);
        echo "\" />
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 577
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 578
        echo "        <!--::header part start::-->
        <header class=\"main_menu home_menu\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-center\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg navbar-light\">
                            <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"> </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                                    aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                            </button>

                            <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"index.html\">Home</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"about.html\">about</a>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Inscription
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                            <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Ines
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"";
        // line 616
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutTab_demande");
        echo "\"> demande admission</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 617
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutTab_demande");
        echo "\">Quiz</a>

                                        </div>
                                    </li>

                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Clubs
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                            <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Produits
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                            <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                        </div>
                                    </li>




                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Restaurant
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                            <a class=\"dropdown-item\" href=\"";
        // line 654
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_new");
        echo "\">
                                                Reserver

                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 658
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_reservations");
        echo "\">Mes reservations</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 659
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Mes paiements</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 660
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelite_index");
        echo " \">Carte fidèlité</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 661
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plats_index");
        echo " \"> Plats</a>

                                        </div>
                                    </li>

                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Reclamation
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                            <a class=\"dropdown-item\" href=\"";
        // line 672
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo " \">
                                                passer une reclamation

                                            </a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 676
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read1");
        echo " \">consuler les reclamations</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Evaluation
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                            <a class=\"dropdown-item\" href=\"";
        // line 685
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage1");
        echo " \"> liste des  Evaluations</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 686
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout");
        echo "\">donner votre evaluation</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 687
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moyNote");
        echo "\">consulter total des note</a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 688
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre");
        echo "\">consulter votes sur les reclamation </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"hearer_icon d-flex align-items-center\">
                                <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                                <a href=\"cart.html\">
                                    <i class=\"flaticon-shopping-cart-black-shape\"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </header>
        <!-- Header part end-->
        <!-- banner part start-->
        <section class=\"banner_part\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-5\">
                        <div class=\"banner_text\">
                            <div class=\"banner_text_iner\">
                                <h1> Bienvenue pour notre Site OUELDY!
                                </h1>
                                <p>    soyer
                                    les bienvenue</p>
                                <a href=\"product_list.html\" class=\"btn_1\"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"banner_img\">

                <iframe width=\"1000\" height=\"560\" src=\"https://www.youtube.com/embed/DetiRNzFFKo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

            </div>
        </section>
        <!-- banner part start-->
        <!-- product list start-->
        <section class=\"single_product_list\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"single_product_iner\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"single_product_img\">
                                        <a href=\"index.html\"><img src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/tof1.jpg"), "html", null, true);
        echo "\" alt=\"#\" ></a>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-sm-6\">
                                    <div class=\"single_product_content\">
                                        <h5>Les salles</h5>
                                        <h2> <a href=\"single-product.html\">
                                                Par dérogation à l'article L. 131-2 du code de l'éducation.</a> </h2>
                                        <a href=\"index.html\"><img src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/tof1.png"), "html", null, true);
        echo "\" alt=\"#\" ></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_product_iner\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"single_product_img\">
                                        <a href=\"index.html\"><img src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/tof2.jpg"), "html", null, true);
        echo "\" alt=\"#\" ></a>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-sm-6\">
                                    <div class=\"single_product_content\">
                                        <h5>Les clubs</h5>
                                        <h2> <a href=\"single-product.html\">Les personnes responsables d'un enfant soumis à l'obligation d'instruction prévue à l'article</a> </h2>
                                        <a href=\"product_list.html\" class=\"btn_3\">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_product_iner\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"single_product_img\">
                                        <a href=\"index.html\"><img src=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/tof1.jpg"), "html", null, true);
        echo "\" alt=\"#\" ></a>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-sm-6\">
                                    <div class=\"single_product_content\">
                                        <h5>Les evenements</h5>
                                        <h2> <a href=\"single-product.html\">Les personnes responsables d'un enfant soumis à l'obligation d'instruction prévue à l'article</a> </h2>
                                        <a href=\"product_list.html\" class=\"btn_3\">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product list end-->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 799
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 800
        echo "


        <div><p> heh chabeb kol wahed  f page te3ou bech yebda andou nafs header w footer hethom ww f wost yhot li yheb
                hetha li fhemtou

                hhh peace corona :) bye </p> </div>
        ";
        // line 807
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 808
            echo "            <h1> role admin </h1>
        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 810
            echo "            <h1> role user </h1>
        ";
        }
        // line 812
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 816
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 817
        echo "        <!-- subscribe part here -->
        <section class=\"subscribe_part section_padding\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"subscribe_part_content\">
                            <h2>Dev-it !</h2>
                            <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                            <div class=\"subscribe_form\">
                                <input type=\"email\" placeholder=\"Enter your mail\">
                                <a href=\"#\" class=\"btn_1\">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe part end -->

        <!--::footer_part start::-->
        <footer class=\"footer_part\">
            <div class=\"footer_iner\">
                <div class=\"container\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-lg-8\">
                            <div class=\"footer_menu\">
                                <div class=\"footer_logo\">
                                    <a href=\"index.html\"><img src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"#\"></a>
                                </div>
                                <div class=\"footer_menu_item\">
                                    <a href=\"index.html\">Home</a>
                                    <a href=\"about.html\">About</a>
                                    <a href=\"product_list.html\">Products</a>
                                    <a href=\"#\">Pages</a>
                                    <a href=\"blog.html\">Blog</a>
                                    <a href=\"contact.html\">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"social_icon\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"copyright_part\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"col-lg-12\">
                            <div class=\"copyright_text\">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                                <div class=\"copyright_link\">
                                    <a href=\"#\">Turms & Conditions</a>
                                    <a href=\"#\">FAQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 891
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 892
        echo "        <!-- jquery plugins here-->
        <!-- <script src=\"";
        // line 893
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>-->

        <!-- popper js -->
        <script src=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap js -->
        <script src=\"";
        // line 898
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- magnific popup js -->
        <script src=\"";
        // line 900
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
        <!-- carousel js -->
        <script src=\"";
        // line 902
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <!-- slick js -->
        <script src=\"";
        // line 905
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 906
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 907
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 908
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 909
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
        <!-- custom js -->
        <script src=\"";
        // line 914
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Resto/Default/userHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1249 => 914,  1244 => 912,  1240 => 911,  1236 => 910,  1232 => 909,  1228 => 908,  1224 => 907,  1220 => 906,  1216 => 905,  1211 => 903,  1207 => 902,  1202 => 900,  1197 => 898,  1192 => 896,  1186 => 893,  1183 => 892,  1174 => 891,  1118 => 844,  1089 => 817,  1080 => 816,  1069 => 812,  1065 => 810,  1061 => 808,  1059 => 807,  1050 => 800,  1041 => 799,  1012 => 773,  993 => 757,  980 => 747,  969 => 739,  915 => 688,  911 => 687,  907 => 686,  903 => 685,  891 => 676,  884 => 672,  870 => 661,  866 => 660,  862 => 659,  858 => 658,  851 => 654,  811 => 617,  807 => 616,  772 => 584,  764 => 578,  755 => 577,  740 => 569,  736 => 568,  731 => 566,  726 => 564,  721 => 562,  717 => 561,  712 => 559,  707 => 557,  702 => 555,  697 => 553,  690 => 548,  681 => 547,  663 => 546,  652 => 921,  645 => 916,  643 => 891,  640 => 890,  638 => 816,  634 => 814,  632 => 799,  626 => 795,  624 => 794,  620 => 792,  618 => 577,  609 => 574,  607 => 547,  603 => 546,  597 => 542,  328 => 276,  190 => 141,  87 => 41,  47 => 3,  45 => 2,  42 => 1,);
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
{% if is_granted ('ROLE_ADMIN')%}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Admin ichrak | </title>

        <!-- Bootstrap -->
        <link href=\"../vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"../vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"../vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
        <!-- bootstrap-daterangepicker -->
        <link href=\"../vendors/bootstrap-daterangepicker/daterangepicker.css\" rel=\"stylesheet\">

        <!-- Custom Theme Style -->
        <link href=\"../build/css/custom.min.css\" rel=\"stylesheet\">
    </head>

    <body class=\"nav-md\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
                        <a href=\"index.html\" class=\"site_title\"> <span>WELDY</span></a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <!-- menu profile quick info -->
                    <div class=\"profile clearfix\">
                        <div class=\"profile_pic\">
                            <img src=\"{{ asset('devit.png') }}\" alt=\"...\" class=\"img-circle profile_img\">
                        </div>
                        <div class=\"profile_info\">
                            <span>Bienvenue dans ,</span>
                            <h2>Weldi !</h2>
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
                                        <li><a href=\"/devitt2/web/app_dev.php/read\">Reclamation</a></li>

                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-edit\"></i> espace reclamation <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"/devitt2/web/app_dev.php/read\">Reclamation</a></li>
                                        <li><a href=\"/devitt2/web/app_dev.php/read\">liste reclamations</a></li>
                                        <li><a href=\"/devitt2/web/app_dev.php/affichage\">liste evaluations</a></li>

                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-desktop\"></i> espace admin  <span class=\"fa fa-chevron-down\"></span></a>
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
                                <li><a><i class=\"fa fa-table\"></i> espace inscrit <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"tables.html\">Tables</a></li>
                                        <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-bar-chart-o\"></i> stats <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"chartjs.html\">Chart JS</a></li>
                                        <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                                        <li><a href=\"morisjs.html\">Moris JS</a></li>
                                        <li><a href=\"echarts.html\">ECharts</a></li>
                                        <li><a href=\"other_charts.html\">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li><a><i class=\"fa fa-clone\"></i> plus d'info sur jardin <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"nav child_menu\">
                                        <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                                        <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                                    </ul>
                                </li>
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
                                    <img src=\"{{ asset('ichrak.jpg') }}\" alt=\"\"> Salhi ichrak
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
                            <h3>User : Ichrak</h3>
                        </div>

                        <div class=\"title_right\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" type=\"button\">Go!</button>
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
                                    <h2>User ichrak <small>Reclamation</small></h2>
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
                                    <div class=\"col-md-3 col-sm-3 col-xs-12 profile_left\">
                                        <div class=\"profile_img\">
                                            <div id=\"crop-avatar\">
                                                <!-- Current avatar -->
                                                <img class=\"img-responsive avatar-view\" src=\"{{ asset('ichrak.jpg') }}\" alt=\"Avatar\" title=\"Change the avatar\">
                                            </div>
                                        </div>
                                        <h3>SALHI  ICHRAK</h3>

                                        <ul class=\"list-unstyled user_data\">
                                            <li><i class=\"fa fa-map-marker user-profile-icon\"></i> TABARKA
                                            </li>

                                            <li>
                                                <i class=\"fa fa-briefcase user-profile-icon\"></i> Software Engineer
                                            </li>

                                            <li class=\"m-top-xs\">
                                                <i class=\"fa fa-external-link user-profile-icon\"></i>
                                                <a href=\"http://www.kimlabs.com/profile/\" target=\"_blank\">www.kimlabs.com</a>
                                            </li>
                                        </ul>

                                        <a class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Edit Profile</a>
                                        <br />

                                        <!-- start skills -->
                                        <h4>Skills</h4>
                                        <ul class=\"list-unstyled user_data\">
                                            <li>
                                                <p>Web Applications</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>Website Design</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"70\"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>Automation & Testing</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"30\"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <p>UI / UX</p>
                                                <div class=\"progress progress_sm\">
                                                    <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- end of skills -->

                                    </div>
                                    <div class=\"col-md-9 col-sm-9 col-xs-12\">

                                        <div class=\"profile_title\">
                                            <div class=\"col-md-6\">
                                                <h2>User Ichrakt</h2>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div id=\"reportrange\" class=\"pull-right\" style=\"margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED\">
                                                    <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                                    <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                                            <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                                                <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Reclamation</a>
                                                </li>
                                                <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Evaluation</a>
                                                </li>
                                                <li role=\"presentation\" class=\"\"><a href=\"#tab_content3\" role=\"tab\" id=\"profile-tab2\" data-toggle=\"tab\" aria-expanded=\"false\">all</a>
                                                </li>
                                            </ul>
                                            <div id=\"myTabContent\" class=\"tab-content\">
                                                <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">

                                                    <!-- start recent activity -->
                                                    <ul class=\"messages\">
                                                        <li>

                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-info\">25</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">A PROPOS ESPACE RECLAMATION</h4>
                                                                <blockquote class=\"message\">Dans cette espace on met a votre disposition les affichage des reclamations survenue lors de
                                                                    fonctionnement de cette jardin.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User salhi ichrak </a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>

                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-error\">26</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">A PROPOS ESPACE Evaluation</h4>
                                                                <blockquote class=\"message\">Dans cette espace on met a votre disposition les affichage des reclamations survenue lors de
                                                                    fonctionnement de cette application.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\" data-original-title=\"\">Users</a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>

                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-info\">24</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">A PROPOS </h4>
                                                                <blockquote class=\"message\">.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1 text-info\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\"><i class=\"fa fa-paperclip\"></i> User Acceptance Test.doc </a>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <img src=\"images/img.jpg\" class=\"avatar\" alt=\"Avatar\">
                                                            <div class=\"message_date\">
                                                                <h3 class=\"date text-error\">21</h3>
                                                                <p class=\"month\">May</p>
                                                            </div>
                                                            <div class=\"message_wrapper\">
                                                                <h4 class=\"heading\">Brian Michaels</h4>
                                                                <blockquote class=\"message\">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                                <br />
                                                                <p class=\"url\">
                                                                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                                                                    <a href=\"#\" data-original-title=\"\">Download</a>
                                                                </p>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                    <!-- end recent activity -->

                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">

                                                    <!-- start user projects -->
                                                    <table class=\"data table table-striped no-margin\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Project Name</th>
                                                            <th>Client Company</th>
                                                            <th class=\"hidden-phone\">Hours Spent</th>
                                                            <th>Contribution</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>New Company Takeover Review</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">18</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"35\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>New Partner Contracts Consultanci</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">13</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-danger\" data-transitiongoal=\"15\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Partners and Inverstors report</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">30</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"45\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>New Company Takeover Review</td>
                                                            <td>Deveint Inc</td>
                                                            <td class=\"hidden-phone\">28</td>
                                                            <td class=\"vertical-align-mid\">
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar progress-bar-success\" data-transitiongoal=\"75\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- end user projects -->

                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                                        photo booth letterpress, commodo enim craft beer mlkshk </p>
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

    <!-- jQuery -->
    <script src=\"../vendors/jquery/dist/jquery.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"../vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- FastClick -->
    <script src=\"../vendors/fastclick/lib/fastclick.js\"></script>
    <!-- NProgress -->
    <script src=\"../vendors/nprogress/nprogress.js\"></script>
    <!-- morris.js -->
    <script src=\"../vendors/raphael/raphael.min.js\"></script>
    <script src=\"../vendors/morris.js/morris.min.js\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"../vendors/moment/min/moment.min.js\"></script>
    <script src=\"../vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"../build/js/custom.min.js\"></script>

    </body>
    </html>
    <h1> rolllle admin </h1>

{%elseif is_granted ('ROLE_USER')%}
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Dev-It!{% endblock %}</title>
        {% block stylesheets %}
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

            <title>WELDY !</title>
            <link rel=\"icon\" href=\"img/favicon.png\">
            <!-- Bootstrap CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\">
            <!-- animate CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
            <!-- owl carousel CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
            <!-- font awesome CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/all.css')}}\">
            <!-- flaticon CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
            <link rel=\"stylesheet\" href=\"{{asset('css/themify-icons.css')}}\">
            <!-- font awesome CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">
            <!-- swiper CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/slick.css')}}\">
            <!-- style CSS -->
            <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/rating.css') }}\" />
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


        {% endblock %}
        <link rel=\"icon\" type=\"{{asset('image/x-icon')}}\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block header %}
        <!--::header part start::-->
        <header class=\"main_menu home_menu\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-center\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg navbar-light\">
                            <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"{{asset('img/logo.png')}}\" alt=\"logo\"> </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                                    aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                            </button>

                            <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"index.html\">Home</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"about.html\">about</a>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Inscription
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                            <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Ines
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"{{ path('ajoutTab_demande') }}\"> demande admission</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('ajoutTab_demande') }}\">Quiz</a>

                                        </div>
                                    </li>

                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Clubs
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                            <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Produits
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                            <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                            <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                        </div>
                                    </li>




                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Restaurant
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                            <a class=\"dropdown-item\" href=\"{{ path('abonneresto_new') }}\">
                                                Reserver

                                            </a>
                                            <a class=\"dropdown-item\" href=\"{{ path('show_reservations') }}\">Mes reservations</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('paiement_index') }}\">Mes paiements</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('cartefidelite_index') }} \">Carte fidèlité</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('plats_index') }} \"> Plats</a>

                                        </div>
                                    </li>

                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Reclamation
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                            <a class=\"dropdown-item\" href=\"{{ path('create') }} \">
                                                passer une reclamation

                                            </a>
                                            <a class=\"dropdown-item\" href=\"{{ path('read1') }} \">consuler les reclamations</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                           role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Evaluation
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                            <a class=\"dropdown-item\" href=\"{{ path('affichage1') }} \"> liste des  Evaluations</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('ajout') }}\">donner votre evaluation</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('moyNote') }}\">consulter total des note</a>
                                            <a class=\"dropdown-item\" href=\"{{ path('RatingsNbre') }}\">consulter votes sur les reclamation </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"hearer_icon d-flex align-items-center\">
                                <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                                <a href=\"cart.html\">
                                    <i class=\"flaticon-shopping-cart-black-shape\"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </header>
        <!-- Header part end-->
        <!-- banner part start-->
        <section class=\"banner_part\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-5\">
                        <div class=\"banner_text\">
                            <div class=\"banner_text_iner\">
                                <h1> Bienvenue pour notre Site OUELDY!
                                </h1>
                                <p>    soyer
                                    les bienvenue</p>
                                <a href=\"product_list.html\" class=\"btn_1\"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"banner_img\">

                <iframe width=\"1000\" height=\"560\" src=\"https://www.youtube.com/embed/DetiRNzFFKo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

            </div>
        </section>
        <!-- banner part start-->
        <!-- product list start-->
        <section class=\"single_product_list\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"single_product_iner\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"single_product_img\">
                                        <a href=\"index.html\"><img src=\"{{asset('img/tof1.jpg')}}\" alt=\"#\" ></a>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-sm-6\">
                                    <div class=\"single_product_content\">
                                        <h5>Les salles</h5>
                                        <h2> <a href=\"single-product.html\">
                                                Par dérogation à l'article L. 131-2 du code de l'éducation.</a> </h2>
                                        <a href=\"index.html\"><img src=\"{{asset('img/tof1.png')}}\" alt=\"#\" ></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_product_iner\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"single_product_img\">
                                        <a href=\"index.html\"><img src=\"{{asset('img/tof2.jpg')}}\" alt=\"#\" ></a>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-sm-6\">
                                    <div class=\"single_product_content\">
                                        <h5>Les clubs</h5>
                                        <h2> <a href=\"single-product.html\">Les personnes responsables d'un enfant soumis à l'obligation d'instruction prévue à l'article</a> </h2>
                                        <a href=\"product_list.html\" class=\"btn_3\">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"single_product_iner\">
                            <div class=\"row align-items-center justify-content-between\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"single_product_img\">
                                        <a href=\"index.html\"><img src=\"{{asset('img/tof1.jpg')}}\" alt=\"#\" ></a>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-sm-6\">
                                    <div class=\"single_product_content\">
                                        <h5>Les evenements</h5>
                                        <h2> <a href=\"single-product.html\">Les personnes responsables d'un enfant soumis à l'obligation d'instruction prévue à l'article</a> </h2>
                                        <a href=\"product_list.html\" class=\"btn_3\">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product list end-->

    {% endblock %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {% include ('::flash-messages.html.twig') %}
        </div>
    </div>


    {% block body %}



        <div><p> heh chabeb kol wahed  f page te3ou bech yebda andou nafs header w footer hethom ww f wost yhot li yheb
                hetha li fhemtou

                hhh peace corona :) bye </p> </div>
        {% if is_granted ('ROLE_ADMIN')%}
            <h1> role admin </h1>
        {%elseif is_granted ('ROLE_USER')%}
            <h1> role user </h1>
        {%endif%}

    {% endblock %}


    {% block footer %}
        <!-- subscribe part here -->
        <section class=\"subscribe_part section_padding\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"subscribe_part_content\">
                            <h2>Dev-it !</h2>
                            <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                            <div class=\"subscribe_form\">
                                <input type=\"email\" placeholder=\"Enter your mail\">
                                <a href=\"#\" class=\"btn_1\">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe part end -->

        <!--::footer_part start::-->
        <footer class=\"footer_part\">
            <div class=\"footer_iner\">
                <div class=\"container\">
                    <div class=\"row justify-content-between align-items-center\">
                        <div class=\"col-lg-8\">
                            <div class=\"footer_menu\">
                                <div class=\"footer_logo\">
                                    <a href=\"index.html\"><img src=\"{{asset('img/logo.png')}}\" alt=\"#\"></a>
                                </div>
                                <div class=\"footer_menu_item\">
                                    <a href=\"index.html\">Home</a>
                                    <a href=\"about.html\">About</a>
                                    <a href=\"product_list.html\">Products</a>
                                    <a href=\"#\">Pages</a>
                                    <a href=\"blog.html\">Blog</a>
                                    <a href=\"contact.html\">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"social_icon\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"copyright_part\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"col-lg-12\">
                            <div class=\"copyright_text\">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                                <div class=\"copyright_link\">
                                    <a href=\"#\">Turms & Conditions</a>
                                    <a href=\"#\">FAQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->


    {% endblock %}

    {% block javascripts %}
        <!-- jquery plugins here-->
        <!-- <script src=\"{{asset('js/jquery-1.12.1.min.js')}}\"></script>-->

        <!-- popper js -->
        <script src=\"{{asset('js/popper.min.js')}}\"></script>
        <!-- bootstrap js -->
        <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <!-- magnific popup js -->
        <script src=\"{{asset('js/jquery.magnific-popup.js')}}\"></script>
        <!-- carousel js -->
        <script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{asset('js/jquery.nice-select.min.js')}}\"></script>
        <!-- slick js -->
        <script src=\"{{asset('js/slick.min.js')}}\"></script>
        <script src=\"{{asset('js/jquery.counterup.min.js')}}\"></script>
        <script src=\"{{asset('js/waypoints.min.js')}}\"></script>
        <script src=\"{{asset('js/contact.js')}}\"></script>
        <script src=\"{{asset('js/jquery.ajaxchimp.min.js')}}\"></script>
        <script src=\"{{asset('js/jquery.form.js')}}\"></script>
        <script src=\"{{asset('js/jquery.validate.min.js')}}\"></script>
        <script src=\"{{asset('js/mail-script.js')}}\"></script>
        <!-- custom js -->
        <script src=\"{{asset('js/custom.js')}}\"></script>
    {% endblock %}
    </body>
    </html>

    <h1> role user </h1>
{%endif%}

", "@Resto/Default/userHome.html.twig", "C:\\wamp64\\www\\devitt2\\src\\RestoBundle\\Resources\\views\\Default\\userHome.html.twig");
    }
}
