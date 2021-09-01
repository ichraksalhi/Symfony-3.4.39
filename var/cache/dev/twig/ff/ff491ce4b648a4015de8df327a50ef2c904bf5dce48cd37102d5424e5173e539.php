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

/* @Reclamation/Evaluation/RatingsValue.html.twig */
class __TwigTemplate_42b8f35c3b96bbfe15334e24804f57e851941d35da58ce4246a665b81e6fa88c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/RatingsValue.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/RatingsValue.html.twig"));

        $this->parent = $this->loadTemplate("//base1.html.twig", "@Reclamation/Evaluation/RatingsValue.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
     <!-- breadcrumb part start-->
     <section class=\"breadcrumb_part\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"breadcrumb_iner\">
                         <h2>espace evaluation</h2>
                     </div>
                 </div>
             </div>
         </div>
     </section>

<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
<style type=\"text/css\">
    .stars-outer {
        display: inline-block;
        position: relative;
        font-family: FontAwesome;
        font-size: 100px;
    }
    .stars-outer::before {

        content: \"\\f006 \\f006 \\f006 \\f006 \\f006\";
        color: #b08ead;
    }
    .stars-inner {
        color: #ea76ff;
        position: absolute;
        top: 0;
        left: 0;
        white-space: nowrap;
        overflow: hidden;
        font-size: 100px;
        width: ";
        // line 38
        echo twig_escape_filter($this->env, ((($context["note"] ?? $this->getContext($context, "note")) * 100) / 5), "html", null, true);
        echo "%;

    }
    .stars-inner::before {
        content: \"\\f005 \\f005 \\f005 \\f005 \\f005\";
    }

</style>

     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center>Pour ganier votre confience en met a votre disposition la moyenne des votes </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>


     <h1> MOYENNE DES NOTES <i class=\"fa fa-angle-double-down\"></i>
    </a>
    </button></a><br><div class=\"stars-outer\" >
        <div class=\"stars-inner\"></div>
             <h1>  NOTES FINAL <i class=\"fa fa-angle-double-down\"></i>
         </div> <h1> <label>";
        // line 62
        echo twig_escape_filter($this->env, ($context["note"] ?? $this->getContext($context, "note")), "html", null, true);
        echo "/5</label> </h1> </h1>

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
     </div>

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

    public function getTemplateName()
    {
        return "@Reclamation/Evaluation/RatingsValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  97 => 38,  60 => 3,  51 => 2,  29 => 1,);
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
 {% block  body  %}

     <!-- breadcrumb part start-->
     <section class=\"breadcrumb_part\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"breadcrumb_iner\">
                         <h2>espace evaluation</h2>
                     </div>
                 </div>
             </div>
         </div>
     </section>

<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
<style type=\"text/css\">
    .stars-outer {
        display: inline-block;
        position: relative;
        font-family: FontAwesome;
        font-size: 100px;
    }
    .stars-outer::before {

        content: \"\\f006 \\f006 \\f006 \\f006 \\f006\";
        color: #b08ead;
    }
    .stars-inner {
        color: #ea76ff;
        position: absolute;
        top: 0;
        left: 0;
        white-space: nowrap;
        overflow: hidden;
        font-size: 100px;
        width: {{ note*100/5 }}%;

    }
    .stars-inner::before {
        content: \"\\f005 \\f005 \\f005 \\f005 \\f005\";
    }

</style>

     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center>Pour ganier votre confience en met a votre disposition la moyenne des votes </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>


     <h1> MOYENNE DES NOTES <i class=\"fa fa-angle-double-down\"></i>
    </a>
    </button></a><br><div class=\"stars-outer\" >
        <div class=\"stars-inner\"></div>
             <h1>  NOTES FINAL <i class=\"fa fa-angle-double-down\"></i>
         </div> <h1> <label>{{ note}}/5</label> </h1> </h1>

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
     </div>

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
 {% endblock  %}
", "@Reclamation/Evaluation/RatingsValue.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Evaluation\\RatingsValue.html.twig");
    }
}
