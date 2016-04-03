<?php

/* themes/neato/templates/base/html.html.twig */
class __TwigTemplate_fd69afed5357616be540123d8579a857f40148c818187f9cdba50edeb5d49ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 51);
        $filters = array("raw" => 45, "safe_join" => 46);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw', 'safe_join'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 42
        echo "<!DOCTYPE html>
<html";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
<head>
  <head-placeholder token=\"";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
      <js-placeholder token=\"";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
</head>
<body";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 51
        if ((isset($context["page_top"]) ? $context["page_top"] : null)) {
            // line 52
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
            echo "
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if ((isset($context["page"]) ? $context["page"] : null)) {
            // line 56
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
            echo "
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        if ((isset($context["page_bottom"]) ? $context["page_bottom"] : null)) {
            // line 60
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
            echo "
  ";
        }
        // line 62
        echo "
  <js-bottom-placeholder token=\"";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/neato/templates/base/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 63,  102 => 62,  96 => 60,  94 => 59,  91 => 58,  85 => 56,  83 => 55,  80 => 54,  74 => 52,  72 => 51,  68 => 50,  63 => 48,  59 => 47,  55 => 46,  51 => 45,  46 => 43,  43 => 42,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display the basic html structure of a single*/
/*  * Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - css: An array of CSS files for the current page.*/
/*  * - language: (object) The language the site is being displayed in.*/
/*  *   language.language contains its textual representation.*/
/*  *   language.dir contains the language direction. It will either be 'ltr' or 'rtl'.*/
/*  * - grddl_profile: A GRDDL profile allowing agents to extract the RDF data.*/
/*  * - head_title: A modified version of the page title, for use in the TITLE*/
/*  *   tag.*/
/*  * - head_title_array: (array) An associative array containing the string parts*/
/*  *   that were used to generate the head_title variable, already prepared to be*/
/*  *   output as TITLE tag. The key/value pairs may contain one or more of the*/
/*  *   following, depending on conditions:*/
/*  *   - title: The title of the current page, if any.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site, if any, and if there is no title.*/
/*  * - head: Markup for the HEAD section (including meta tags, keyword tags, and*/
/*  *   so on).*/
/*  * - styles: Style tags necessary to import all CSS files for the page.*/
/*  * - scripts: Script tags necessary to load the JavaScript files and settings*/
/*  *   for the page.*/
/*  * - page_top: Initial markup from any modules that have altered the*/
/*  *   page. This variable should always be output first, before all other dynamic*/
/*  *   content.*/
/*  * - page: The rendered page content.*/
/*  * - page_bottom: Final closing markup from any modules that have altered the*/
/*  *   page. This variable should always be output last, after all other dynamic*/
/*  *   content.*/
/*  * - classes String of classes that can be used to style contextually through*/
/*  *   CSS.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_html()*/
/*  * @see template_process()*/
/*  *//* */
/* #}*/
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/* <head>*/
/*   <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*       <js-placeholder token="{{ placeholder_token|raw }}">*/
/* </head>*/
/* <body{{ attributes }}>*/
/*   {% if page_top %}*/
/*     {{ page_top }}*/
/*   {% endif %}*/
/* */
/*   {% if page %}*/
/*     {{ page }}*/
/*   {% endif %}*/
/* */
/*   {% if page_bottom %}*/
/*     {{ page_bottom }}*/
/*   {% endif %}*/
/* */
/*   <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/* </body>*/
/* </html>*/
