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

/* @Reclamation/Default/create.html.twig */
class __TwigTemplate_b83681e6dce6aaf7346ef89e81cfdf79cbd902d2679aa4fef229543e5e4104ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Default/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Default/create.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "    <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/x-icon"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 180
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        ";
        // line 182
        $this->loadTemplate("::flash-messages.html.twig", "@Reclamation/Default/create.html.twig", 182)->display($context);
        // line 183
        echo "    </div>
</div>



";
        // line 188
        $this->displayBlock('body', $context, $blocks);
        // line 309
        echo "
";
        // line 310
        $this->displayBlock('footer', $context, $blocks);
        // line 365
        echo "

";
        // line 367
        $this->displayBlock('javascripts', $context, $blocks);
        // line 395
        echo "</body>
</html>





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
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

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <title>pillloMart</title>
        <link rel=\"icon\" href=\"img/favicon.png\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/rating.css"), "html", null, true);
        echo "\" />
        <link href=\"css/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- animate CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <!-- owl carousel CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <!-- font awesome CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.css"), "html", null, true);
        echo "\">
        <!-- flaticon CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
        <!-- font awesome CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
        <!-- swiper CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
        <!-- style CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/rating.css"), "html", null, true);
        echo "\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 48
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
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonneresto_new");
        echo "\">
                                            Reserver

                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_reservations");
        echo "\">Mes reservations</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paiement_index");
        echo "\">Mes paiements</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelite_index");
        echo " \">Carte fidèlité</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 122
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
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo " \">
                                            passer une reclamation

                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 137
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
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichage1");
        echo "\"> liste des  Evaluations</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout");
        echo "\">donner votre evaluation</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moyNote");
        echo "\">consulter total des note</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RatingsNbre");
        echo "\">consulter votes sur les reclamation </a>
                                    </div>
                                </li>

                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 188
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 189
        echo "
    <!-- breadcrumb part start-->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />

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
    <!-- breadcrumb part end-->

    <div class=\"container\" style=\"margin-top:100px;\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header card-header-primary\">
                    <h4 class=\"card-title\">Reclamation</h4>
                    <p class=\"card-category\">Ajouter une reclamation</p>
                </div>
                <div class=\"card-body\">
                    ";
        // line 215
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">

                                <label class=\"bmd-label-floating\">Nom </label>
                                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomDemande", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"widget_title\">prenom </label>
                                ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomDemande", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"bmd-label-floating\">cin</label>
                                ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numTelDemande", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"bmd-label-floating\">description</label>
                                ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postDemande", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"bmd-label-floating\">post</label>
                                ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinDemande", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                    </div>









                    <button type=\"submit\" class=\"genric-btn primary circle\">Ajouter</button>
                    <div class=\"clearfix\"></div>
                    ";
        // line 264
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"blog_details\">
        <a class=\"d-inline-block\" href=\"single-blog.html\">
            <h2>si vous voulez pas passez une reclamations</h2>
            <h2> vous pouvez laisser une commentaire sur notre page</h2>

        </a>

    </div>
    <!-- Post Thumb -->
    <div class=\"blog-post-thumb mb-30\">
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2\"></script>

        <div id=\"fb-root\"></div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2\"></script>

        <div id=\"fb-root\"></div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2\"></script>


        <!-- Post Title -->
        <!-- Post Meta -->
        <div class=\"post-meta d-flex justify-content-between\">

            <!-- Comments -->

        </div>
        <!-- bg gradients -->
        <div class=\"bg-gradients mb-30 w-25\"></div>
        <div class=\"fb-comments\" data-
             href=\"http://www.amaranthe.info/2017/03/07ins%C3%A9rer-des-commentaire-facebook-sur-votre-site/\" data-width=\"768\" data-numposts=\"99\"></div>
        <a href=\"#\" class=\"read-more-btn\">Read more</a>
    </div>


    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 310
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 311
        echo "    <!--::footer_part start::-->
    <footer class=\"footer_part\">
        <div class=\"footer_iner\">
            <div class=\"container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"footer_menu\">
                            <div class=\"footer_logo\">
                                <a href=\"index.html\"><img src=\"";
        // line 319
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

    // line 367
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 368
        echo "    <!-- jquery plugins here-->
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- popper js -->
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap js -->
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- magnific popup js -->
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <!-- carousel js -->
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slick js -->
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <!-- custom js -->
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Default/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 391,  715 => 390,  711 => 389,  706 => 387,  702 => 386,  698 => 385,  694 => 384,  690 => 383,  686 => 382,  682 => 381,  678 => 380,  673 => 378,  669 => 377,  664 => 375,  659 => 373,  654 => 371,  649 => 369,  646 => 368,  637 => 367,  581 => 319,  571 => 311,  562 => 310,  507 => 264,  489 => 249,  478 => 241,  467 => 233,  458 => 227,  449 => 221,  440 => 215,  414 => 192,  409 => 189,  400 => 188,  359 => 149,  355 => 148,  351 => 147,  347 => 146,  335 => 137,  328 => 133,  314 => 122,  310 => 121,  306 => 120,  302 => 119,  295 => 115,  225 => 48,  217 => 42,  208 => 41,  193 => 33,  189 => 32,  184 => 30,  179 => 28,  174 => 26,  170 => 25,  165 => 23,  160 => 21,  155 => 19,  150 => 17,  143 => 13,  136 => 8,  127 => 7,  109 => 6,  92 => 395,  90 => 367,  86 => 365,  84 => 310,  81 => 309,  79 => 188,  72 => 183,  70 => 182,  66 => 180,  64 => 41,  55 => 38,  53 => 7,  49 => 6,  42 => 1,);
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
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Dev-It!{% endblock %}</title>
    {% block stylesheets %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <title>pillloMart</title>
        <link rel=\"icon\" href=\"img/favicon.png\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/rating.css') }}\" />
        <link href=\"css/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">

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
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
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
{% endblock %}
<div class=\"row\">
    <div class=\"col-sm-12\">
        {% include ('::flash-messages.html.twig') %}
    </div>
</div>



{% block  body  %}

    <!-- breadcrumb part start-->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />

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
    <!-- breadcrumb part end-->

    <div class=\"container\" style=\"margin-top:100px;\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header card-header-primary\">
                    <h4 class=\"card-title\">Reclamation</h4>
                    <p class=\"card-category\">Ajouter une reclamation</p>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">

                                <label class=\"bmd-label-floating\">Nom </label>
                                {{ form_widget(form.nomDemande,{ 'attr': {'class': 'form-control'} }) }}
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"widget_title\">prenom </label>
                                {{ form_widget(form.prenomDemande,{ 'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"bmd-label-floating\">cin</label>
                                {{ form_widget(form.numTelDemande,{ 'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"bmd-label-floating\">description</label>
                                {{ form_widget(form.postDemande,{ 'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">
                                <label class=\"bmd-label-floating\">post</label>
                                {{ form_widget(form.cinDemande,{ 'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    </div>









                    <button type=\"submit\" class=\"genric-btn primary circle\">Ajouter</button>
                    <div class=\"clearfix\"></div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"blog_details\">
        <a class=\"d-inline-block\" href=\"single-blog.html\">
            <h2>si vous voulez pas passez une reclamations</h2>
            <h2> vous pouvez laisser une commentaire sur notre page</h2>

        </a>

    </div>
    <!-- Post Thumb -->
    <div class=\"blog-post-thumb mb-30\">
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2\"></script>

        <div id=\"fb-root\"></div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2\"></script>

        <div id=\"fb-root\"></div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2\"></script>


        <!-- Post Title -->
        <!-- Post Meta -->
        <div class=\"post-meta d-flex justify-content-between\">

            <!-- Comments -->

        </div>
        <!-- bg gradients -->
        <div class=\"bg-gradients mb-30 w-25\"></div>
        <div class=\"fb-comments\" data-
             href=\"http://www.amaranthe.info/2017/03/07ins%C3%A9rer-des-commentaire-facebook-sur-votre-site/\" data-width=\"768\" data-numposts=\"99\"></div>
        <a href=\"#\" class=\"read-more-btn\">Read more</a>
    </div>


    </div>



{% endblock %}

{% block footer %}
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
    <script src=\"{{asset('js/jquery-1.12.1.min.js')}}\"></script>
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
    <script src=\"{{ asset('js/jquery-min.js') }}\"></script>
    <script src=\"{{ asset('js/rating.js') }}\"></script>


{% endblock %}
</body>
</html>





", "@Reclamation/Default/create.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Default\\create.html.twig");
    }
}
