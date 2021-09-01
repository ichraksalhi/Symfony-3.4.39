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

/* //takwa.html.twig */
class __TwigTemplate_220480787a200bcaddcf6f126448c0cfec79c7c7c01b83e33a1966a59ecc76af extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'barre' => [$this, 'block_barre'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "//takwa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "//takwa.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"zxx\">

<head>

    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Dev-it</title>
    <link rel=\"icon\" href=\"img/favicon.png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.css"), "html", null, true);
        echo "\">
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <!-- swiper CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

</head>

<body>
<!--::header part start::-->
<header class=\"main_menu home_menu\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
            <div class=\"col-lg-12\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"  alt=\"logo\"> </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                    </button>

                    <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav\">
                            ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 48
            echo "
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"index.html\">Home</a>
                            </li>
                                ";
            // line 57
            echo "                            <li class=\"nav-item dropdown\">
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
                                        <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                        <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

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
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_new");
            echo "\">
                                        Reserver

                                    </a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_reservations");
            echo "\">Mes reservations</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
            echo "\">Mes paiements</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelite_index");
            echo " \">Carte fidèlité</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 119
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
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
            echo " \">
                                            passer une reclamation

                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read1");
            echo "\">consuler les reclamationss</a>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Evaluation
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage1");
            echo "\"> liste des  Evaluations</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout");
            echo "\">donner votre evaluation</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moyNote");
            echo "\">consulter total des note</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre");
            echo "\">consulter votes sur les reclamation </a>
                                    </div>
                                </li>

                                ";
            // line 153
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_2\"
                                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Login
                                </a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> Login</a>
                                    <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                </div>
                            </li>
                            ";
        } else {
            // line 164
            echo "
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 166
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                            </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 169
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
                                </li>
                            ";
        }
        // line 172
        echo "                        </ul>
                    </div>
                    <div class=\"hearer_icon d-flex align-items-center\">
                        <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <a href=\"cart.html\">
                            <i class=\"flaticon-shopping-cart-black-shape\"></i>
                        </a>
                        <!-- <div class=\"dropdown cart\">
                            <a class=\"dropdown-toggle\" href=\"cart\" id=\"navbarDropdown3\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"flaticon-shopping-cart-black-shape\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <div class=\"single_product\">

                                </div>
                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class=\"search_input\" id=\"search_input_box\">
        <div class=\"container \">
            <form class=\"d-flex justify-content-between search-inner\">
                <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Search Here\">
                <button type=\"submit\" class=\"btn\"></button>
                <span class=\"ti-close\" id=\"close_search\" title=\"Close Search\"></span>
            </form>
        </div>
    </div>
</header>
<!-- Header part end-->

<!-- breadcrumb part start-->
";
        // line 208
        $this->displayBlock('barre', $context, $blocks);
        // line 222
        echo "
<!-- breadcrumb part end-->

";
        // line 225
        $this->displayBlock('body', $context, $blocks);
        // line 229
        echo "
<!--::footer_part start::-->
<footer class=\"footer_part\">
    <div class=\"footer_iner section_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"footer_menu\">
                        <div class=\"footer_logo\">
                            <a href=\"index.html\"><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"#\" ></a>
                        </div>
                        <div class=\"footer_menu_item\">
                            <a href=\"index.html\">Accueil</a>
                            <a href=\"product_list.html\">Inscription</a>
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

<!-- jquery plugins here-->
";
        // line 282
        $this->displayBlock('javascripts', $context, $blocks);
        // line 312
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 208
    public function block_barre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "barre"));

        // line 209
        echo "
<section class=\"breadcrumb_part\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"breadcrumb_iner\">
                    <h2>";
        // line 215
        $this->displayBlock('title', $context, $blocks);
        echo "</h2>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

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

    // line 225
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 226
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 282
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 283
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.rateyo.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper js -->
    <script src=";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "></script>
    <!-- bootstrap js -->
    <script src=";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <!-- easing js -->
    <script src=";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "></script>
    <!-- swiper js -->
    <script src=";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/swiper.min.js"), "html", null, true);
        echo "></script>
    <!-- swiper js -->
    <script src=";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "></script>
    <!-- particles js -->
    <script src=";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "></script>
    <!-- slick js -->
    <script src=";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "></script>
    <script src=\"https://js.stripe.com/v3/\"></script>


    <!-- custom js -->
    <script src=";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "//takwa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 310,  554 => 305,  550 => 304,  546 => 303,  542 => 302,  538 => 301,  534 => 300,  530 => 299,  526 => 298,  521 => 296,  517 => 295,  512 => 293,  507 => 291,  502 => 289,  497 => 287,  492 => 285,  486 => 283,  477 => 282,  465 => 226,  456 => 225,  422 => 215,  414 => 209,  405 => 208,  393 => 312,  391 => 282,  344 => 238,  333 => 229,  331 => 225,  326 => 222,  324 => 208,  286 => 172,  280 => 169,  274 => 166,  270 => 164,  262 => 159,  254 => 153,  247 => 146,  243 => 145,  239 => 144,  235 => 143,  223 => 134,  216 => 130,  202 => 119,  198 => 118,  194 => 117,  190 => 116,  183 => 112,  126 => 57,  120 => 48,  118 => 47,  106 => 38,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  73 => 20,  68 => 18,  63 => 16,  58 => 14,  53 => 12,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"zxx\">

<head>

    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Dev-it</title>
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

</head>

<body>
<!--::header part start::-->
<header class=\"main_menu home_menu\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
            <div class=\"col-lg-12\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"{{asset('img/logo.png')}}\"  alt=\"logo\"> </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                    </button>

                    <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav\">
                            {% if is_granted('ROLE_USER') %}

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"index.html\">Home</a>
                            </li>
                                {#
//////////////////////////////////////////////////// lbloc yabda houni : men houni taamlou copier lel les base.html.twig mte3kom w bensba l jme3a eli khdmou b nfs lbase ybdlou directement
                                //////////////////////fel base eli kima esmhom
                                !-->
                                #}
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
                                        <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                        <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

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
                                        <a class=\"dropdown-item\" href=\"{{ path('read1') }}\">consuler les reclamationss</a>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Evaluation
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"{{ path('affichage1') }}\"> liste des  Evaluations</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('ajout') }}\">donner votre evaluation</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('moyNote') }}\">consulter total des note</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('RatingsNbre') }}\">consulter votes sur les reclamation </a>
                                    </div>
                                </li>

                                {#
///////////////////////////////////////////////////////////////////////////////////////// l bloc youfa houni
#}
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_2\"
                                   role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Login
                                </a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                    <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_login') }}\"> Login</a>
                                    <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                </div>
                            </li>
                            {% else %}

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Login</a>
                            </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                    <div class=\"hearer_icon d-flex align-items-center\">
                        <a id=\"search_1\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <a href=\"cart.html\">
                            <i class=\"flaticon-shopping-cart-black-shape\"></i>
                        </a>
                        <!-- <div class=\"dropdown cart\">
                            <a class=\"dropdown-toggle\" href=\"cart\" id=\"navbarDropdown3\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"flaticon-shopping-cart-black-shape\"></i>
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <div class=\"single_product\">

                                </div>
                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class=\"search_input\" id=\"search_input_box\">
        <div class=\"container \">
            <form class=\"d-flex justify-content-between search-inner\">
                <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Search Here\">
                <button type=\"submit\" class=\"btn\"></button>
                <span class=\"ti-close\" id=\"close_search\" title=\"Close Search\"></span>
            </form>
        </div>
    </div>
</header>
<!-- Header part end-->

<!-- breadcrumb part start-->
{% block barre %}

<section class=\"breadcrumb_part\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"breadcrumb_iner\">
                    <h2>{% block title %}Dev-It!{% endblock %}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}

<!-- breadcrumb part end-->

{% block body %}


{% endblock %}

<!--::footer_part start::-->
<footer class=\"footer_part\">
    <div class=\"footer_iner section_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"footer_menu\">
                        <div class=\"footer_logo\">
                            <a href=\"index.html\"><img src=\"{{asset('img/logo.png')}}\" alt=\"#\" ></a>
                        </div>
                        <div class=\"footer_menu_item\">
                            <a href=\"index.html\">Accueil</a>
                            <a href=\"product_list.html\">Inscription</a>
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

<!-- jquery plugins here-->
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.rateyo.min.js') }}\"></script>
    <!-- popper js -->
    <script src={{ asset(\"js/popper.min.js\") }}></script>
    <!-- bootstrap js -->
    <script src={{ asset(\"js/bootstrap.min.js\") }}></script>
    <!-- easing js -->
    <script src={{ asset(\"js/jquery.magnific-popup.js\") }}></script>
    <!-- swiper js -->
    <script src={{ asset(\"js/swiper.min.js\") }}></script>
    <!-- swiper js -->
    <script src={{ asset(\"js/mixitup.min.js\") }}></script>
    <!-- particles js -->
    <script src={{ asset(\"js/owl.carousel.min.js\") }}></script>
    <script src={{ asset(\"js/jquery.nice-select.min.js\") }}></script>
    <!-- slick js -->
    <script src={{ asset(\"js/slick.min.js\") }}></script>
    <script src={{ asset(\"js/jquery.counterup.min.js\") }}></script>
    <script src={{ asset(\"js/waypoints.min.js\") }}></script>
    <script src={{ asset(\"js/contact.js\") }}></script>
    <script src={{ asset(\"js/jquery.ajaxchimp.min.js\") }}></script>
    <script src={{ asset(\"js/jquery.form.js\") }}></script>
    <script src={{ asset(\"js/jquery.validate.min.js\") }}></script>
    <script src={{ asset(\"js/mail-script.js\") }}></script>
    <script src=\"https://js.stripe.com/v3/\"></script>


    <!-- custom js -->
    <script src={{ asset(\"js/custom.js\") }}></script>
{% endblock %}
</body>

</html>", "//takwa.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\takwa.html.twig");
    }
}
