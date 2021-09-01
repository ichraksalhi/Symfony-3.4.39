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

/* @Reclamation/Evaluation/RatingsNbre.html.twig */
class __TwigTemplate_db396b1f96600f864aff317a0a4a1cd504561a8b786841a4e352bd9ce87081a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/RatingsNbre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/RatingsNbre.html.twig"));

        $this->parent = $this->loadTemplate("//base1.html.twig", "@Reclamation/Evaluation/RatingsNbre.html.twig", 1);
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
        echo "     <!-- breadcrumb part start-->
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

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>




    .heading {
        font-size: 25px;
        margin-right: 25px;
    }

    .fa {
        font-size: 30px;
    }

    .checked {
        color: orange;
    }

    /* Three column layout */
    .side {
        float: left;
        width: 15%;
        margin-top:10px;
    }

    .middle {
        margin-top:10px;
        float: left;
        width: 70%;
    }

    /* Place text to the right */
    .right {
        text-align: right;
    }

    /* Clear floats after the columns */
    .row:after {
        content: \"\";
        display: table;
        clear: both;
    }

    /* The bar container */
    .bar-container {
        width: 100%;
        background-color: #f1f1f1;
        text-align: center;
        color: white;
    }


    /* Individual bars */
    .bar-5 {width: ";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 0, [], "array"), "nbr", []) * 100) / 5), "html", null, true);
        echo "%; height: 18px; background-color: #4CAF50;}
    .bar-4 {width: ";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 1, [], "array"), "nbr", []) * 100) / 5), "html", null, true);
        echo "%; height: 18px; background-color: #2196F3;}
    .bar-3 {width: ";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 2, [], "array"), "nbr", []) * 100) / 5), "html", null, true);
        echo "%; height: 18px; background-color: #00bcd4;}
    .bar-2 {width: ";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 3, [], "array"), "nbr", []) * 100) / 5), "html", null, true);
        echo "%; height: 18px; background-color: #ff9800;}

    /* Responsive layout - make the columns stack on top of each other instead of next to each other */
    @media (max-width: 400px) {
        .side, .middle {
            width: 100%;
        }
        .right {
            display: none;
        }
    }
</style>

     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center>Pour ganier votre confience en met a votre disposition les votes de certaines personnes </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>

     <div class=\"row\">
    <div class=\"side\">
    </div>
    <br>



    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-4\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 1, [], "array"), "nbr", []), "html", null, true);
        echo " avis sur reclamation 1</div>
        </div>
    </div>


    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-3\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 2, [], "array"), "nbr", []), "html", null, true);
        echo " avis sur reclamation 2</div>
        </div>
    </div>


    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-2\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 3, [], "array"), "nbr", []), "html", null, true);
        echo " avis sur reclamation 3</div>
        </div>
    </div>
    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-5\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")), 0, [], "array"), "nbr", []), "html", null, true);
        echo " avis sur reclamation 4</div>
        </div>
    </div>





</div>
</div>
<br>
<br>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Evaluation/RatingsNbre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 123,  195 => 118,  185 => 111,  175 => 104,  141 => 73,  137 => 72,  133 => 71,  129 => 70,  60 => 3,  51 => 2,  29 => 1,);
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

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>




    .heading {
        font-size: 25px;
        margin-right: 25px;
    }

    .fa {
        font-size: 30px;
    }

    .checked {
        color: orange;
    }

    /* Three column layout */
    .side {
        float: left;
        width: 15%;
        margin-top:10px;
    }

    .middle {
        margin-top:10px;
        float: left;
        width: 70%;
    }

    /* Place text to the right */
    .right {
        text-align: right;
    }

    /* Clear floats after the columns */
    .row:after {
        content: \"\";
        display: table;
        clear: both;
    }

    /* The bar container */
    .bar-container {
        width: 100%;
        background-color: #f1f1f1;
        text-align: center;
        color: white;
    }


    /* Individual bars */
    .bar-5 {width: {{ notes[0].nbr*100/5 }}%; height: 18px; background-color: #4CAF50;}
    .bar-4 {width: {{ notes[1].nbr *100/5 }}%; height: 18px; background-color: #2196F3;}
    .bar-3 {width: {{ notes[2].nbr *100/5 }}%; height: 18px; background-color: #00bcd4;}
    .bar-2 {width: {{ notes[3].nbr *100/5  }}%; height: 18px; background-color: #ff9800;}

    /* Responsive layout - make the columns stack on top of each other instead of next to each other */
    @media (max-width: 400px) {
        .side, .middle {
            width: 100%;
        }
        .right {
            display: none;
        }
    }
</style>

     <div class=\"section-top-border\">
         <h4 class=\"mb-30\"> <center>Pour ganier votre confience en met a votre disposition les votes de certaines personnes </center></h4>
         <div class=\"row\">
             <div class=\"col-lg-12\">

             </div>
         </div>
     </div>

     <div class=\"row\">
    <div class=\"side\">
    </div>
    <br>



    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-4\">{{ notes[1].nbr }} avis sur reclamation 1</div>
        </div>
    </div>


    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-3\">{{ notes[2].nbr }} avis sur reclamation 2</div>
        </div>
    </div>


    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-2\">{{ notes[3].nbr }} avis sur reclamation 3</div>
        </div>
    </div>
    <div class=\"middle\">
        <div class=\"bar-container\">
            <div class=\"bar-5\">{{ notes[0].nbr }} avis sur reclamation 4</div>
        </div>
    </div>





</div>
</div>
<br>
<br>
 {% endblock  %}", "@Reclamation/Evaluation/RatingsNbre.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Evaluation\\RatingsNbre.html.twig");
    }
}
