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

/* base.html.twig */
class __TwigTemplate_be044422835587d3b8482e21158bf75c2f7130db9232256d5e52750e2ed5810f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />

    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>
";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 120
        echo "

<!-- breadcrumb part start-->
<section class=\"breadcrumb_part\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"breadcrumb_iner\">

                    ";
        // line 129
        $this->displayBlock('title', $context, $blocks);
        // line 130
        echo "                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!--================login_part Area =================-->
<section class=\"login_part section_padding \">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"login_part_text text-center\">
                    <div class=\"login_part_text_iner\">
                        <h2>DEV IT !</h2>
                        <p> soyer le bienvenue chez nous application WELDI ! vous avez deja un compte ?</p>
                        <a href=\"/devitt2/web/app_dev.php/register/\" class=\"btn_3\">INSTRIPTION</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"login_part_form\">
                    ";
        // line 152
        $this->displayBlock('body', $context, $blocks);
        // line 155
        echo "                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->
";
        // line 161
        $this->displayBlock('footer', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 245
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- animate CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <!-- owl carousel CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <!-- font awesome CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.css"), "html", null, true);
        echo "\">
        <!-- flaticon CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
        <!-- font awesome CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
        <!-- swiper CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
        <!-- style CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"";
        // line 38
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
                                        product
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                        <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                        <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"login.html\">
                                            login

                                        </a>
                                        <a class=\"dropdown-item\" href=\"checkout.html\">product checkout</a>
                                        <a class=\"dropdown-item\" href=\"cart.html\">shopping cart</a>
                                        <a class=\"dropdown-item\" href=\"confirmation.html\">confirmation</a>
                                        <a class=\"dropdown-item\" href=\"elements.html\">elements</a>
                                    </div>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_2\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        blog
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"blog.html\"> blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
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

    // line 129
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <h2>Login </h2> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 153
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 161
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 162
        echo "    <!--::footer_part start::-->
    <footer class=\"footer_part\">
        <div class=\"footer_iner section_bg\">
            <div class=\"container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"footer_menu\">
                            <div class=\"footer_logo\">
                                <a href=\"index.html\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"alt=\"#\"></a>

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

    <!-- jquery plugins here-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 219
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.12.1.min.js"), "html", null, true);
        echo "></script>
    <!-- popper js -->
    <script src=";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "></script>
    <!-- bootstrap js -->
    <script src=";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <!-- easing js -->
    <script src=";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "></script>
    <!-- swiper js -->
    <script src=";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/swiper.min.js"), "html", null, true);
        echo "></script>
    <!-- swiper js -->
    <script src=";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "></script>
    <!-- particles js -->
    <script src=";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "></script>
    <!-- slick js -->
    <script src=";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "></script>
    <!-- custom js -->
    <script src=";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  495 => 243,  490 => 241,  486 => 240,  482 => 239,  478 => 238,  474 => 237,  470 => 236,  466 => 235,  462 => 234,  457 => 232,  453 => 231,  448 => 229,  443 => 227,  438 => 225,  433 => 223,  428 => 221,  422 => 219,  413 => 218,  356 => 170,  346 => 162,  337 => 161,  326 => 153,  317 => 152,  299 => 129,  207 => 38,  199 => 32,  190 => 31,  178 => 26,  173 => 24,  168 => 22,  163 => 20,  159 => 19,  154 => 17,  149 => 15,  144 => 13,  139 => 11,  133 => 7,  124 => 6,  112 => 245,  110 => 218,  107 => 217,  105 => 161,  97 => 155,  95 => 152,  71 => 130,  69 => 129,  58 => 120,  56 => 31,  51 => 28,  49 => 6,  42 => 1,);
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
    {% endblock %}
</head>

<body>
{% block header %}
    <!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"{{ asset('img/logo.png' ) }}\" alt=\"logo\"> </a>

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
                                        product
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                        <a class=\"dropdown-item\" href=\"product_list.html\"> product list</a>
                                        <a class=\"dropdown-item\" href=\"single-product.html\">product details</a>

                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_3\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"login.html\">
                                            login

                                        </a>
                                        <a class=\"dropdown-item\" href=\"checkout.html\">product checkout</a>
                                        <a class=\"dropdown-item\" href=\"cart.html\">shopping cart</a>
                                        <a class=\"dropdown-item\" href=\"confirmation.html\">confirmation</a>
                                        <a class=\"dropdown-item\" href=\"elements.html\">elements</a>
                                    </div>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_2\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        blog
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                        <a class=\"dropdown-item\" href=\"blog.html\"> blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
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


<!-- breadcrumb part start-->
<section class=\"breadcrumb_part\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"breadcrumb_iner\">

                    {% block title %} <h2>Login </h2> {% endblock %}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!--================login_part Area =================-->
<section class=\"login_part section_padding \">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"login_part_text text-center\">
                    <div class=\"login_part_text_iner\">
                        <h2>DEV IT !</h2>
                        <p> soyer le bienvenue chez nous application WELDI ! vous avez deja un compte ?</p>
                        <a href=\"/devitt2/web/app_dev.php/register/\" class=\"btn_3\">INSTRIPTION</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"login_part_form\">
                    {% block body %}

                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->
{% block footer %}
    <!--::footer_part start::-->
    <footer class=\"footer_part\">
        <div class=\"footer_iner section_bg\">
            <div class=\"container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"footer_menu\">
                            <div class=\"footer_logo\">
                                <a href=\"index.html\"><img src=\"{{ asset('img/logo.png' ) }}\"alt=\"#\"></a>

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

    <!-- jquery plugins here-->
{% endblock %}

{% block javascripts %}
    <script src={{ asset(\"js/jquery-1.12.1.min.js\") }}></script>
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
    <!-- custom js -->
    <script src={{ asset(\"js/custom.js\") }}></script>
{% endblock %}
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\views\\base.html.twig");
    }
}
