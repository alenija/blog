<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_a759d703f82a2d241f3f8496246f739f8e3cbba40bac14b36a0cef06992ce7ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "SonataBlockBundle:Profiler:block.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d47b6e204f900e1ded59783f6ed36ad64c48cb8af84df0687ab71754a69a8f3a = $this->env->getExtension("native_profiler");
        $__internal_d47b6e204f900e1ded59783f6ed36ad64c48cb8af84df0687ab71754a69a8f3a->enter($__internal_d47b6e204f900e1ded59783f6ed36ad64c48cb8af84df0687ab71754a69a8f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Profiler:block.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47b6e204f900e1ded59783f6ed36ad64c48cb8af84df0687ab71754a69a8f3a->leave($__internal_d47b6e204f900e1ded59783f6ed36ad64c48cb8af84df0687ab71754a69a8f3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3b171a7930d650ec10f4a5f625aa8cdb25ed135ff40a53bccc1eda63bb45db5 = $this->env->getExtension("native_profiler");
        $__internal_e3b171a7930d650ec10f4a5f625aa8cdb25ed135ff40a53bccc1eda63bb45db5->enter($__internal_e3b171a7930d650ec10f4a5f625aa8cdb25ed135ff40a53bccc1eda63bb45db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    <div class=\"sf-toolbar-block\">
        ";
        // line 7
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 8
            echo "            <div class=\"sf-toolbar-icon\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                    <span class=\"sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span> blocks
                </a>
            </div>
        ";
        } else {
            // line 15
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">
                <div class=\"sf-toolbar-icon\">
                    ";
            // line 17
            echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
            echo "
                    <span class=\"sf-toolbar-value\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span>
                </div>
            </a>
        ";
        }
        // line 22
        echo "
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "realBlocks", array())), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "containers", array())), "html", null, true);
        echo "</span>
            </div>
            ";
        // line 32
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 33
            echo "                ";
            // line 35
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Total Blocks</b>
                    <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece\">
                ";
        // line 41
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            echo "<hr />";
        }
        // line 42
        echo "                <b>Events</b>
                <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array())), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
        
        $__internal_e3b171a7930d650ec10f4a5f625aa8cdb25ed135ff40a53bccc1eda63bb45db5->leave($__internal_e3b171a7930d650ec10f4a5f625aa8cdb25ed135ff40a53bccc1eda63bb45db5_prof);

    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b189b83cd76af1d31e3aec5d5e93622504636a62d5c63aa17352ec5ad34f26ab = $this->env->getExtension("native_profiler");
        $__internal_b189b83cd76af1d31e3aec5d5e93622504636a62d5c63aa17352ec5ad34f26ab->enter($__internal_b189b83cd76af1d31e3aec5d5e93622504636a62d5c63aa17352ec5ad34f26ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 50
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 52
        echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
        echo "
        </span>
        <strong>Blocks";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array())) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_b189b83cd76af1d31e3aec5d5e93622504636a62d5c63aa17352ec5ad34f26ab->leave($__internal_b189b83cd76af1d31e3aec5d5e93622504636a62d5c63aa17352ec5ad34f26ab_prof);

    }

    // line 61
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85971c60ac4b578e1b660f83c0b7b789c77cc93caee5c017a8cc67a18b1b7d4c = $this->env->getExtension("native_profiler");
        $__internal_85971c60ac4b578e1b660f83c0b7b789c77cc93caee5c017a8cc67a18b1b7d4c->enter($__internal_85971c60ac4b578e1b660f83c0b7b789c77cc93caee5c017a8cc67a18b1b7d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 62
        echo "    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 72
            echo "            <tr>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "template_code", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "event_name", array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "blocks", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 77
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], 1, array()), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], 0, array()), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 79
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                </td>
                <td>
                    ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "listeners", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 84
                echo "                        ";
                echo twig_escape_filter($this->env, $context["listener"], "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 86
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 94
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "realBlocks", array());
        // line 95
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 98
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "containers", array());
        // line 99
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    ";
        // line 101
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_85971c60ac4b578e1b660f83c0b7b789c77cc93caee5c017a8cc67a18b1b7d4c->leave($__internal_85971c60ac4b578e1b660f83c0b7b789c77cc93caee5c017a8cc67a18b1b7d4c_prof);

    }

    // line 104
    public function block_table($context, array $blocks = array())
    {
        $__internal_a8624e1e8a10a7c361e0290d692bb1cfa01002575b12f7dc363296125e0d6485 = $this->env->getExtension("native_profiler");
        $__internal_a8624e1e8a10a7c361e0290d692bb1cfa01002575b12f7dc363296125e0d6485->enter($__internal_a8624e1e8a10a7c361e0290d692bb1cfa01002575b12f7dc363296125e0d6485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 105
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 115
            echo "
            ";
            // line 116
            $context["rowspan"] = 1;
            // line 117
            echo "            ";
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array())) {
                // line 118
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : $this->getContext($context, "rowspan")) + 1);
                // line 119
                echo "            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())) > 0))) {
                // line 122
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : $this->getContext($context, "rowspan")) + 1);
                // line 123
                echo "            ";
            }
            // line 124
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["rowspan"]) ? $context["rowspan"] : $this->getContext($context, "rowspan")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["block"], "memory_end", array()) - $this->getAttribute($context["block"], "memory_start", array())) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["block"], "memory_peak", array()) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["block"], "duration", array()), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 133
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array())) {
                // line 134
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 136
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "keys", array())), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 137
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "contextual_keys", array())), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "ttl", array()), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "lifetime", array()), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array()), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 143
                if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "from_cache", array())) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 147
            echo "
            ";
            // line 148
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())) > 0))) {
                // line 149
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 151
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 152
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 156
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "    </table>
";
        
        $__internal_a8624e1e8a10a7c361e0290d692bb1cfa01002575b12f7dc363296125e0d6485->leave($__internal_a8624e1e8a10a7c361e0290d692bb1cfa01002575b12f7dc363296125e0d6485_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 158,  427 => 156,  420 => 152,  416 => 151,  412 => 149,  410 => 148,  407 => 147,  396 => 143,  392 => 142,  388 => 141,  384 => 140,  378 => 137,  374 => 136,  370 => 134,  368 => 133,  362 => 130,  358 => 129,  354 => 128,  350 => 127,  346 => 126,  340 => 125,  337 => 124,  334 => 123,  331 => 122,  329 => 121,  326 => 120,  323 => 119,  320 => 118,  317 => 117,  315 => 116,  312 => 115,  308 => 114,  297 => 105,  291 => 104,  282 => 101,  276 => 99,  274 => 98,  267 => 95,  265 => 94,  260 => 91,  252 => 88,  245 => 86,  237 => 84,  232 => 83,  228 => 81,  221 => 79,  211 => 77,  206 => 76,  201 => 74,  197 => 73,  194 => 72,  190 => 71,  179 => 62,  173 => 61,  162 => 56,  155 => 54,  150 => 52,  146 => 50,  140 => 49,  128 => 43,  125 => 42,  121 => 41,  118 => 40,  112 => 37,  108 => 35,  106 => 33,  104 => 32,  99 => 30,  92 => 26,  86 => 22,  79 => 18,  75 => 17,  69 => 15,  62 => 11,  59 => 10,  55 => 9,  52 => 8,  50 => 7,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         {% if profiler_markup_version == 1 %}*/
/*             <div class="sf-toolbar-icon">*/
/*                 <a href="{{ path('_profiler', { 'token': token, 'panel': name }) }}">*/
/*                     {# fake image span #}<span style="width:0px; height: 28px; vertical-align: middle;"></span>*/
/*                     <span class="sf-toolbar-status">{{ collector.getTotalBlock() }}</span> blocks*/
/*                 </a>*/
/*             </div>*/
/*         {% else %}*/
/*             <a href="{{ path('_profiler', { 'token': token, 'panel': name }) }}">*/
/*                 <div class="sf-toolbar-icon">*/
/*                     {{ include('@SonataBlock/Profiler/icon.svg') }}*/
/*                     <span class="sf-toolbar-value">{{ collector.getTotalBlock() }}</span>*/
/*                 </div>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         <div class="sf-toolbar-info">*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Real Blocks</b>*/
/*                 <span>{{ collector.realBlocks|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Containers</b>*/
/*                 <span>{{ collector.containers|length }}</span>*/
/*             </div>*/
/*             {% if profiler_markup_version == 1 %}*/
/*                 {# don't show the total number of blocks in the info in the new design,*/
/*                 it's already shown in the toolbar #}*/
/*                 <div class="sf-toolbar-info-piece">*/
/*                     <b>Total Blocks</b>*/
/*                     <span>{{ collector.getTotalBlock() }}</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 {% if profiler_markup_version == 1 %}<hr />{% endif %}*/
/*                 <b>Events</b>*/
/*                 <span>{{ collector.events|length }}</span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">*/
/*             {{ include('@SonataBlock/Profiler/icon.svg') }}*/
/*         </span>*/
/*         <strong>Blocks{% if collector.events|length > 0 %}<strong>*</strong>{% endif %}</strong>*/
/*         <span class="count">*/
/*             <span>{{ collector.getTotalBlock() }}</span>*/
/*         </span>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Events Blocks</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>code name</th>*/
/*             <th>listener tag</th>*/
/*             <th>Block types</th>*/
/*             <th>Listeners</th>*/
/*         </tr>*/
/* */
/*         {% for event in collector.events %}*/
/*             <tr>*/
/*                 <td>{{ event['template_code'] }}</td>*/
/*                 <td>{{ event['event_name'] }}</td>*/
/*                 <td>*/
/*                     {% for type in event['blocks'] %}*/
/*                         {{ type.1 }} (id:{{ type.0 }})*/
/*                     {% else %}*/
/*                         no block returned*/
/*                     {% endfor %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% for listener in event['listeners'] %}*/
/*                         {{ listener }}*/
/*                     {% else %}*/
/*                         no listener registered*/
/*                     {% endfor %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     <h2>Real Blocks</h2>*/
/*     {% set blocks = collector.realBlocks %}*/
/*     {{ block('table') }}*/
/* */
/*     <h2>Containers Blocks</h2>*/
/*     {% set blocks = collector.containers %}*/
/*     {{ block('table') }}*/
/* */
/*     {{ block('javascript') }}*/
/* {% endblock %}*/
/* */
/* {% block table %}*/
/*     <table>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Name</th>*/
/*             <th>Type</th>*/
/*             <th>Mem. (diff)</th>*/
/*             <th>Mem. (peak)</th>*/
/*             <th>Duration</th>*/
/*         </tr>*/
/*         {% for id, block in blocks %}*/
/* */
/*             {% set rowspan = 1 %}*/
/*             {% if block.cache.handler %}*/
/*                 {% set rowspan = rowspan + 1 %}*/
/*             {% endif %}*/
/* */
/*             {% if block.assets.js|length > 0 or block.assets.css|length > 0 %}*/
/*                 {% set rowspan = rowspan + 1 %}*/
/*             {% endif %}*/
/*             <tr>*/
/*                 <th style="vertical-align: top" rowspan="{{ rowspan }}">{{ id }}</th>*/
/*                 <td>{{ block.name }}</td>*/
/*                 <td>{{ block.type }}</td>*/
/*                 <td>{{ ((block.memory_end-block.memory_start)/1000)|number_format(0) }} Kb</td>*/
/*                 <td>{{ (block.memory_peak/1000)|number_format(0) }} Kb</td>*/
/*                 <td>{{ block.duration|number_format(2) }} ms</td>*/
/*             </tr>*/
/* */
/*             {% if block.cache.handler %}*/
/*                 <tr style="vertical-align: top">*/
/*                     <td colspan="3">*/
/*                         Cache Keys: <pre>{{ block.cache.keys|json_encode() }}</pre> <br />*/
/*                         Contextual Keys: <pre>{{ block.cache.contextual_keys|json_encode() }}</pre>*/
/*                     </td>*/
/*                     <td colspan="2">*/
/*                         TTL: {{ block.cache.ttl }}s. <br />*/
/*                         Lifetime: {{ block.cache.lifetime }}s. <br />*/
/*                         Backend: {{ block.cache.handler }} <br />*/
/*                         Loading from cache: {% if block.cache.from_cache %}YES{% else %}NO{% endif %} <br />*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endif %}*/
/* */
/*             {% if block.assets.js|length > 0 or block.assets.css|length > 0  %}*/
/*                 <tr>*/
/*                     <td colspan="5">*/
/*                         Javascripts: <pre>{{ block.assets.js|json_encode() }}</pre><br />*/
/*                         Stylesheets: <pre>{{ block.assets.css|json_encode() }}</pre>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
/* */
