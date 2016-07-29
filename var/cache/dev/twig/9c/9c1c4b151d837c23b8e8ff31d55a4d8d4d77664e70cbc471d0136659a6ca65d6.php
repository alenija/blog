<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_9513796a9be54a9e2436e2e125b654e650dccdff0563a98f78e83e2d67f3e9bf extends Twig_Template
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
        $__internal_76de84d80df5c2a5eee4de1902eb6e1e90410e2ba4f7b90ec62a588da64202d1 = $this->env->getExtension("native_profiler");
        $__internal_76de84d80df5c2a5eee4de1902eb6e1e90410e2ba4f7b90ec62a588da64202d1->enter($__internal_76de84d80df5c2a5eee4de1902eb6e1e90410e2ba4f7b90ec62a588da64202d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        
        $__internal_76de84d80df5c2a5eee4de1902eb6e1e90410e2ba4f7b90ec62a588da64202d1->leave($__internal_76de84d80df5c2a5eee4de1902eb6e1e90410e2ba4f7b90ec62a588da64202d1_prof);

    }

    // line 1
    public function getrender_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e2bf80a0b0cede1f2e73156402d2454617ba874135a846125149ab7310ae1134 = $this->env->getExtension("native_profiler");
            $__internal_e2bf80a0b0cede1f2e73156402d2454617ba874135a846125149ab7310ae1134->enter($__internal_e2bf80a0b0cede1f2e73156402d2454617ba874135a846125149ab7310ae1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups", array(), "any", false, true), $context["code"], array(), "array", true, true)) {
                    // line 5
                    echo "        ";
                    $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()), $context["code"], array(), "array");
                    // line 6
                    echo "
        <div class=\"";
                    // line 7
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
                    echo "\">
            <div class=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "box_class", array()), "html", null, true);
                    echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain", array())), "method"), "html", null, true);
                    echo "
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                    // line 16
                    if ($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array())) {
                        // line 17
                        echo "                            <p>";
                        echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array());
                        echo "</p>
                        ";
                    }
                    // line 19
                    echo "
                        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                            // line 21
                            echo "                            ";
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                            echo "
                        ";
                            $context['_iterated'] = true;
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 23
                        echo "                            <em>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                        echo "</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                    </div>
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";
            
            $__internal_e2bf80a0b0cede1f2e73156402d2454617ba874135a846125149ab7310ae1134->leave($__internal_e2bf80a0b0cede1f2e73156402d2454617ba874135a846125149ab7310ae1134_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  113 => 25,  104 => 23,  95 => 21,  89 => 20,  86 => 19,  80 => 17,  78 => 16,  70 => 11,  64 => 8,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  45 => 2,  27 => 1,);
    }
}
/* {% macro render_groups(admin, form, groups, has_tab) %}*/
/*     <div class="row">*/
/* */
/*     {% for code in groups if admin.formgroups[code] is defined %}*/
/*         {% set form_group = admin.formgroups[code] %}*/
/* */
/*         <div class="{{ form_group.class|default('col-md-12') }}">*/
/*             <div class="{{ form_group.box_class }}">*/
/*                 <div class="box-header">*/
/*                     <h4 class="box-title">*/
/*                         {{ admin.trans(form_group.name, {}, form_group.translation_domain) }}*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <div class="sonata-ba-collapsed-fields">*/
/*                         {% if form_group.description %}*/
/*                             <p>{{ form_group.description|raw }}</p>*/
/*                         {% endif %}*/
/* */
/*                         {% for field_name in form_group.fields if admin.formfielddescriptions[field_name] is defined %}*/
/*                             {{ form_row(form[field_name])}}*/
/*                         {% else %}*/
/*                             <em>{{ 'message_form_group_empty'|trans({}, 'SonataAdminBundle') }}</em>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
