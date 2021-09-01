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

/* @Reclamation/Evaluation/ajout.html.twig */
class __TwigTemplate_86c94377daae46444e530cc658361829af73afe5faaf16bf4013d5611e8ad918 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Reclamation/Evaluation/ajout.html.twig"));

        $this->parent = $this->loadTemplate("//base1.html.twig", "@Reclamation/Evaluation/ajout.html.twig", 1);
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
        echo "    <!-- breadcrumb part start-->
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
                    <h4 class=\"card-title\">Evaluation</h4>
                    <p class=\"card-category\">Merci de nous donner votre evaluation</p>
                </div>
                <div class=\"card-body\">
                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">

                                <label class=\"bmd-label-floating\">Evaluation</label>
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reclamation_id", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">

                                <label class=\"bmd-label-floating\">note </label>
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group bmd-form-group\">
                                    <label class=\"bmd-label-floating\">date </label>
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datee", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>





                    <button type=\"submit\" class=\"genric-btn primary circle\">Ajouter</button>
                    <div class=\"clearfix\"></div>
                    ";
        // line 63
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

        </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Evaluation/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 63,  119 => 51,  108 => 43,  95 => 33,  84 => 25,  60 => 3,  51 => 2,  29 => 1,);
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
                    <h4 class=\"card-title\">Evaluation</h4>
                    <p class=\"card-category\">Merci de nous donner votre evaluation</p>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}


                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">

                                <label class=\"bmd-label-floating\">Evaluation</label>
                                {{ form_widget(form.reclamation_id,{ 'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group bmd-form-group\">

                                <label class=\"bmd-label-floating\">note </label>
                                {{ form_widget(form.note,{ 'attr': {'class': 'form-control'} }) }}
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group bmd-form-group\">
                                    <label class=\"bmd-label-floating\">date </label>
                                    {{ form_widget(form.datee,{ 'attr': {'class': 'form-control'} }) }}
                                </div>
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

        </div>


{% endblock %}
", "@Reclamation/Evaluation/ajout.html.twig", "C:\\wamp64\\www\\devitt2\\src\\ReclamationBundle\\Resources\\views\\Evaluation\\ajout.html.twig");
    }
}
