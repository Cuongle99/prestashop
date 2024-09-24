<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/psshipping/views/templates/admin/index.html.twig */
class __TwigTemplate_b941411c52bce70bad54a64c2f8a7f50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psshipping/views/templates/admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psshipping/views/templates/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/psshipping/views/templates/admin/index.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, (isset($context["cloudsyncCdcUrl"]) || array_key_exists("cloudsyncCdcUrl", $context) ? $context["cloudsyncCdcUrl"] : (function () { throw new RuntimeError('Variable "cloudsyncCdcUrl" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" rel=preload as=script>
  <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["cloudsyncCdcUrl"]) || array_key_exists("cloudsyncCdcUrl", $context) ? $context["cloudsyncCdcUrl"] : (function () { throw new RuntimeError('Variable "cloudsyncCdcUrl" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\"></script>
  <div id=\"psshipping-app\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "<style>
  body {
    background-color: white!important;
  }
</style>
";
        // line 34
        if (((isset($context["hotReloadModeEnabled"]) || array_key_exists("hotReloadModeEnabled", $context) ? $context["hotReloadModeEnabled"] : (function () { throw new RuntimeError('Variable "hotReloadModeEnabled" does not exist.', 34, $this->source); })()) == false)) {
            // line 35
            echo "  <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["appCss"]) || array_key_exists("appCss", $context) ? $context["appCss"] : (function () { throw new RuntimeError('Variable "appCss" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\">
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        if ((isset($context["hotReloadModeEnabled"]) || array_key_exists("hotReloadModeEnabled", $context) ? $context["hotReloadModeEnabled"] : (function () { throw new RuntimeError('Variable "hotReloadModeEnabled" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "  <script type=\"module\" src=\"http://localhost:5173/@vite/client\"></script>
  <script type=\"module\" src=\"http://localhost:5173/src/main.ts\"></script>
";
        } else {
            // line 44
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["appLink"]) || array_key_exists("appLink", $context) ? $context["appLink"] : (function () { throw new RuntimeError('Variable "appLink" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\" type=\"module\"></script>
";
        }
        // line 46
        echo "<script>
  var defaultIsoCode = '";
        // line 47
        echo (isset($context["defaultIsoCode"]) || array_key_exists("defaultIsoCode", $context) ? $context["defaultIsoCode"] : (function () { throw new RuntimeError('Variable "defaultIsoCode" does not exist.', 47, $this->source); })());
        echo "'
  var psxShippingApiUrl = '";
        // line 48
        echo (isset($context["psxShippingApiUrl"]) || array_key_exists("psxShippingApiUrl", $context) ? $context["psxShippingApiUrl"] : (function () { throw new RuntimeError('Variable "psxShippingApiUrl" does not exist.', 48, $this->source); })());
        echo "'
  var isOnboardingDone = ";
        // line 49
        echo twig_escape_filter($this->env, json_encode((isset($context["isOnboardingDone"]) || array_key_exists("isOnboardingDone", $context) ? $context["isOnboardingDone"] : (function () { throw new RuntimeError('Variable "isOnboardingDone" does not exist.', 49, $this->source); })())), "html", null, true);
        echo "
  var contextPsEventbus = ";
        // line 50
        echo json_encode((isset($context["contextPsEventbus"]) || array_key_exists("contextPsEventbus", $context) ? $context["contextPsEventbus"] : (function () { throw new RuntimeError('Variable "contextPsEventbus" does not exist.', 50, $this->source); })()));
        echo "
  var contextPsAccounts = ";
        // line 51
        echo json_encode((isset($context["contextPsAccounts"]) || array_key_exists("contextPsAccounts", $context) ? $context["contextPsAccounts"] : (function () { throw new RuntimeError('Variable "contextPsAccounts" does not exist.', 51, $this->source); })()));
        echo "
  var tokenPsAccounts = '";
        // line 52
        echo (isset($context["tokenPsAccounts"]) || array_key_exists("tokenPsAccounts", $context) ? $context["tokenPsAccounts"] : (function () { throw new RuntimeError('Variable "tokenPsAccounts" does not exist.', 52, $this->source); })());
        echo "'
  var psBillingContext = ";
        // line 53
        echo json_encode((isset($context["psBillingContext"]) || array_key_exists("psBillingContext", $context) ? $context["psBillingContext"] : (function () { throw new RuntimeError('Variable "psBillingContext" does not exist.', 53, $this->source); })()));
        echo "
  var isMultiShopContext = ";
        // line 54
        echo twig_escape_filter($this->env, json_encode((isset($context["isMultiShopContext"]) || array_key_exists("isMultiShopContext", $context) ? $context["isMultiShopContext"] : (function () { throw new RuntimeError('Variable "isMultiShopContext" does not exist.', 54, $this->source); })())), "html", null, true);
        echo "
  var shops = ";
        // line 55
        echo json_encode((isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 55, $this->source); })()));
        echo "
  var routes = ";
        // line 56
        echo json_encode((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 56, $this->source); })()));
        echo "
  var phpVersion = '";
        // line 57
        echo (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 57, $this->source); })());
        echo "'
  var moduleVersion = '";
        // line 58
        echo (isset($context["moduleVersion"]) || array_key_exists("moduleVersion", $context) ? $context["moduleVersion"] : (function () { throw new RuntimeError('Variable "moduleVersion" does not exist.', 58, $this->source); })());
        echo "'
  var cdnUrl = '";
        // line 59
        echo (isset($context["cdnUrl"]) || array_key_exists("cdnUrl", $context) ? $context["cdnUrl"] : (function () { throw new RuntimeError('Variable "cdnUrl" does not exist.', 59, $this->source); })());
        echo "'
  var cloudsyncCdcUrl = '";
        // line 60
        echo (isset($context["cloudsyncCdcUrl"]) || array_key_exists("cloudsyncCdcUrl", $context) ? $context["cloudsyncCdcUrl"] : (function () { throw new RuntimeError('Variable "cloudsyncCdcUrl" does not exist.', 60, $this->source); })());
        echo "'
  var psVersion = '";
        // line 61
        echo (isset($context["psVersion"]) || array_key_exists("psVersion", $context) ? $context["psVersion"] : (function () { throw new RuntimeError('Variable "psVersion" does not exist.', 61, $this->source); })());
        echo "'
  var activeHooks = ";
        // line 62
        echo json_encode((isset($context["activeHooks"]) || array_key_exists("activeHooks", $context) ? $context["activeHooks"] : (function () { throw new RuntimeError('Variable "activeHooks" does not exist.', 62, $this->source); })()));
        echo "
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psshipping/views/templates/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 62,  203 => 61,  199 => 60,  195 => 59,  191 => 58,  187 => 57,  183 => 56,  179 => 55,  175 => 54,  171 => 53,  167 => 52,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  144 => 46,  138 => 44,  133 => 41,  131 => 40,  121 => 39,  107 => 35,  105 => 34,  98 => 29,  88 => 28,  75 => 24,  70 => 23,  60 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  <link href=\"{{ cloudsyncCdcUrl }}\" rel=preload as=script>
  <script src=\"{{ cloudsyncCdcUrl }}\"></script>
  <div id=\"psshipping-app\"></div>
{% endblock %}

{% block stylesheets %}
<style>
  body {
    background-color: white!important;
  }
</style>
{% if hotReloadModeEnabled == false %}
  <link rel=\"stylesheet\" href=\"{{ appCss }}\" type=\"text/css\" media=\"all\">
{% endif %}
{% endblock %}

{% block javascripts %}
{% if hotReloadModeEnabled %}
  <script type=\"module\" src=\"http://localhost:5173/@vite/client\"></script>
  <script type=\"module\" src=\"http://localhost:5173/src/main.ts\"></script>
{% else %}
  <script src=\"{{ appLink }}\" type=\"module\"></script>
{% endif %}
<script>
  var defaultIsoCode = '{{ defaultIsoCode|raw }}'
  var psxShippingApiUrl = '{{ psxShippingApiUrl|raw }}'
  var isOnboardingDone = {{ isOnboardingDone|json_encode }}
  var contextPsEventbus = {{ contextPsEventbus|json_encode|raw }}
  var contextPsAccounts = {{ contextPsAccounts|json_encode|raw }}
  var tokenPsAccounts = '{{ tokenPsAccounts|raw }}'
  var psBillingContext = {{ psBillingContext|json_encode|raw }}
  var isMultiShopContext = {{ isMultiShopContext|json_encode }}
  var shops = {{ shops|json_encode|raw }}
  var routes = {{ routes|json_encode|raw }}
  var phpVersion = '{{ phpVersion|raw }}'
  var moduleVersion = '{{ moduleVersion|raw }}'
  var cdnUrl = '{{ cdnUrl|raw }}'
  var cloudsyncCdcUrl = '{{ cloudsyncCdcUrl|raw }}'
  var psVersion = '{{ psVersion|raw }}'
  var activeHooks = {{ activeHooks|json_encode|raw }}
</script>
{% endblock %}
", "@Modules/psshipping/views/templates/admin/index.html.twig", "D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\psshipping\\views\\templates\\admin\\index.html.twig");
    }
}
