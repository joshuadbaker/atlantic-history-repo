<?php

/* themes/neato/templates/base/block.html.twig */
class __TwigTemplate_1db51f99b5fb96daa975fad8bfbd551e7b1d97e61ef2e43e7c0eb447a9e5469d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 37, "if" => 46, "block" => 50);
        $filters = array("clean_class" => 39);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 35
        echo "
";
        // line 37
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 39
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 40
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))));
        // line 43
        echo "
<div";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 46
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 47
            echo "    <h2 ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 49
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "</div>";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/neato/templates/base/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 51,  83 => 50,  79 => 53,  77 => 50,  72 => 49,  64 => 47,  62 => 46,  58 => 45,  54 => 44,  51 => 43,  49 => 40,  48 => 39,  47 => 37,  44 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - label: Block title.*/
/*  * - content: Block content.*/
/*  * - module: Module that generated the block.*/
/*  * - delta: An ID for the block, unique within each module.*/
/*  * - region: The block region embedding the current block.*/
/*  * - classes: String of classes that can be used to style contextually through*/
/*  *   CSS. It can be manipulated through the variable classes_array from*/
/*  *   preprocess functions. The default values can be one or more of the following:*/
/*  *   - block: The current template type, i.e., "theming hook".*/
/*  *   - block-[module]: The module generating the block. For example, the user module*/
/*  *     is responsible for handling the default user navigation block. In that case*/
/*  *     the class would be "block-user".*/
/*  * - title_prefix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed in front of the main title tag that*/
/*  *   appears in the template.*/
/*  * - title_suffix (array): An array containing additional output populated by*/
/*  *   modules, intended to be displayed after the main title tag that appears in*/
/*  *   the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  *//* */
/* #}*/
/* */
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*   ]*/
/* %}*/
/* */
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2 {{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/* </div>*/
