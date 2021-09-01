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

/* //base1.html.twig */
class __TwigTemplate_3e92ba31a40af6f3d440c218781c587bbfbebebf64a3a29e851f1f024b4b217d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "//base1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "//base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/x-icon"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 165
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        ";
        // line 167
        $this->loadTemplate("::flash-messages.html.twig", "//base1.html.twig", 167)->display($context);
        // line 168
        echo "    </div>
</div>


";
        // line 172
        $this->displayBlock('body', $context, $blocks);
        // line 187
        echo "

";
        // line 189
        $this->displayBlock('footer', $context, $blocks);
        // line 262
        echo "
";
        // line 263
        $this->displayBlock('javascripts', $context, $blocks);
        // line 288
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <title>pillloMart</title>
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/rating.css"), "html", null, true);
        echo "\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 37
        echo "    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 43
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
                                        <a class=\"dropdown-item\" href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_new");
        echo "\">
                                            Reserver

                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_reservations");
        echo "\">Mes reservations</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Mes paiements</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelite_index");
        echo " \">Carte fidèlité</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 116
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
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo " \">
                                            passer une reclamation

                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read1");
        echo "\">consuler les reclamations</a>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Evaluation
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage1");
        echo "\"> liste des  Evaluations</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout");
        echo "\">donner votre evaluation</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moyNote");
        echo "\">consulter total des note</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre");
        echo "\">consulter votes sur les reclamation </a>
                                    </div>
                                </li>

                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messagesorti");
        echo "\">Deconnection</a>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 173
        echo "


    <div><p> heh chabeb kol wahed  f page te3ou bech yebda andou nafs header w footer hethom ww f wost yhot li yheb
            hetha li fhemtou

            hhh peace corona :) bye </p> </div>
    ";
        // line 180
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 181
            echo "        <h1> role admin </h1>
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 183
            echo "        <h1> role user </h1>
    ";
        }
        // line 185
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 190
        echo "    <!-- subscribe part here -->
    <section class=\"subscribe_part section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"subscribe_part_content\">
                        <h2>Dev-it !</h2>
                        <p>Toutes l'equipe de DEVIT ! yes we make it .</p>
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
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"#\"></a>
                            </div>
                            <div class=\"footer_menu_item\">
                                <a href=\"index.html\">Acueil</a>
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

    // line 263
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 264
        echo "    <!-- jquery plugins here-->
    <!-- <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>-->

    <!-- popper js -->
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap js -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- magnific popup js -->
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <!-- carousel js -->
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slick js -->
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <!-- custom js -->
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "//base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 286,  581 => 284,  577 => 283,  573 => 282,  569 => 281,  565 => 280,  561 => 279,  557 => 278,  553 => 277,  548 => 275,  544 => 274,  539 => 272,  534 => 270,  529 => 268,  523 => 265,  520 => 264,  511 => 263,  456 => 217,  427 => 190,  418 => 189,  407 => 185,  403 => 183,  399 => 181,  397 => 180,  388 => 173,  379 => 172,  351 => 147,  343 => 142,  339 => 141,  335 => 140,  331 => 139,  319 => 130,  312 => 126,  299 => 116,  295 => 115,  291 => 114,  287 => 113,  280 => 109,  211 => 43,  203 => 37,  194 => 36,  179 => 28,  175 => 27,  170 => 25,  165 => 23,  160 => 21,  156 => 20,  151 => 18,  146 => 16,  141 => 14,  136 => 12,  129 => 7,  120 => 6,  102 => 5,  90 => 288,  88 => 263,  85 => 262,  83 => 189,  79 => 187,  77 => 172,  71 => 168,  69 => 167,  65 => 165,  63 => 36,  54 => 33,  52 => 6,  48 => 5,  42 => 1,);
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
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Dev-It!{% endblock %}</title>
    {% block stylesheets %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <title>pillloMart</title>
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
                                        <a class=\"dropdown-item\" href=\"{{ path('read1') }}\">consuler les reclamations</a>
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

                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('messagesorti') }}\">Deconnection</a>
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
                        <p>Toutes l'equipe de DEVIT ! yes we make it .</p>
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
                                <a href=\"index.html\">Acueil</a>
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
", "//base1.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\base1.html.twig");
    }
}
