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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_63067d70f9671cc28b103536432d2a44150f5d9e043660c62185faae1cdf32df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <div class=\"login_part_text_iner\">
    <div class=\"col-lg-6 col-md-6\">
        <div class=\"login_part_form\">
            <div class=\"login_part_form_iner\">
                <h3>LOG IN ! <br>
                   </h3>

                <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
                    <div class=\"col-md-12 form-group p_star\">
                        <div class=\"col-md-12 form-group p_star\">
   ";
        // line 22
        echo "    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\"class=\"form-control\"placeholder=\"Username\" />
                        </div>
                            <div class=\"col-md-12 form-group p_star\">
";
        // line 26
        echo "<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" class=\"form-control\"placeholder=\"Password\" />
                            </div>
                                <div class=\"col-md-12 form-group\">

<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"class=\"btn_3\" />
<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

<label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>

            </div>
        </div>
    </div>
</form>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  87 => 30,  81 => 26,  74 => 22,  62 => 11,  56 => 9,  54 => 8,  50 => 7,  47 => 6,  41 => 4,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    <div class=\"login_part_text_iner\">
    <div class=\"col-lg-6 col-md-6\">
        <div class=\"login_part_form\">
            <div class=\"login_part_form_iner\">
                <h3>LOG IN ! <br>
                   </h3>

                <form class=\"row contact_form\" action=\"#\" method=\"post\" novalidate=\"novalidate\">
                    <div class=\"col-md-12 form-group p_star\">
                        <div class=\"col-md-12 form-group p_star\">
   {# <label for=\"username\">{{ 'security.login.username'|trans }}</label> #}
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\"class=\"form-control\"placeholder=\"Username\" />
                        </div>
                            <div class=\"col-md-12 form-group p_star\">
{#<label for=\"password\">{{ 'security.login.password'|trans }}</label>#}
<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" class=\"form-control\"placeholder=\"Password\" />
                            </div>
                                <div class=\"col-md-12 form-group\">

<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"class=\"btn_3\" />
<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

<label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                    </div>

            </div>
        </div>
    </div>
</form>
</form>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\devitt2\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
