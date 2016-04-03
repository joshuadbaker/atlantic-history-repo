<?php

/* themes/neato/templates/base/page.html.twig */
class __TwigTemplate_2fe39d17ecd0168ede649b198364eaa96b87d340257be475587556bfee185dcd extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 1
        echo "<div role=\"document\" class=\"page\">
  ";
        // line 2
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 3
            echo "    <header id=\"site-header\">
      <div class=\"outer-wrapper\">
        ";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      </div>
    </header>
  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 11
            echo "    <section id=\"featured\">
      <div class=\"columns\">
        ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 19
            echo "    <section id=\"messages\">
      <div class=\"outer-wrapper\">
        ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 27
            echo "    <section id=\"breadcrumb\">
      <div class=\"outer-wrapper\">
        ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 33
        echo "
  <main role=\"main\" class=\"outer-wrapper\">
    ";
        // line 35
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 36
            echo "      <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar\">
        ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 40
        echo "
    <section id=\"content\">
      ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </section>

    ";
        // line 45
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 46
            echo "      <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar\">
        ";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 50
        echo "  </main>

  ";
        // line 52
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()))) {
            // line 53
            echo "    <footer id=\"site-footer\" role=\"contentinfo\">
      ";
            // line 54
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
                // line 55
                echo "        <section class=\"footer-top\">
          ";
                // line 56
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
                echo "
        </section>
      ";
            }
            // line 59
            echo "
      ";
            // line 60
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
                // line 61
                echo "        <section class=\"footer-bottom\">
          ";
                // line 62
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
                echo "
        </section>
      ";
            }
            // line 65
            echo "    </footer>
  ";
        }
        // line 67
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/neato/templates/base/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  177 => 65,  171 => 62,  168 => 61,  166 => 60,  163 => 59,  157 => 56,  154 => 55,  152 => 54,  149 => 53,  147 => 52,  143 => 50,  137 => 47,  134 => 46,  132 => 45,  126 => 42,  122 => 40,  116 => 37,  113 => 36,  111 => 35,  107 => 33,  100 => 29,  96 => 27,  94 => 26,  91 => 25,  84 => 21,  80 => 19,  78 => 18,  75 => 17,  68 => 13,  64 => 11,  62 => 10,  59 => 9,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div role="document" class="page">*/
/*   {%  if page.header %}*/
/*     <header id="site-header">*/
/*       <div class="outer-wrapper">*/
/*         {{ page.header }}*/
/*       </div>*/
/*     </header>*/
/*   {% endif %}*/
/* */
/*   {%  if page.featured %}*/
/*     <section id="featured">*/
/*       <div class="columns">*/
/*         {{ page.featured }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if messages %}*/
/*     <section id="messages">*/
/*       <div class="outer-wrapper">*/
/*         {{ messages }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if breadcrumb %}*/
/*     <section id="breadcrumb">*/
/*       <div class="outer-wrapper">*/
/*         {{ breadcrumb }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   <main role="main" class="outer-wrapper">*/
/*     {% if page.sidebar_first %}*/
/*       <aside id="sidebar-first" role="complementary" class="sidebar">*/
/*         {{ page.sidebar_first }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*     <section id="content">*/
/*       {{ page.content }}*/
/*     </section>*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside id="sidebar-second" role="complementary" class="sidebar">*/
/*         {{ page.sidebar_second }}*/
/*       </aside>*/
/*     {% endif %}*/
/*   </main>*/
/* */
/*   {% if page.footer_top or page.footer_bottom %}*/
/*     <footer id="site-footer" role="contentinfo">*/
/*       {% if page.footer_top %}*/
/*         <section class="footer-top">*/
/*           {{ page.footer_top }}*/
/*         </section>*/
/*       {% endif %}*/
/* */
/*       {% if page.footer_bottom %}*/
/*         <section class="footer-bottom">*/
/*           {{ page.footer_bottom }}*/
/*         </section>*/
/*       {% endif %}*/
/*     </footer>*/
/*   {% endif %}*/
/* </div>*/
