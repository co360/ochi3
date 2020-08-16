<?php

/* default/template/blog/category.twig */
class __TwigTemplate_08d0888fa831a8934a0acf65fb7a312cb15fa0d529721781bad082f19f9e53d6 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " showcase-list\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t   ";
        // line 18
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 19
            echo "      <div class=\"row\">
        ";
            // line 20
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 21
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 23
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 24
                echo "        <div class=\"col-sm-10\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
\t\t";
            }
            // line 26
            echo "      </div>
      <hr>
\t  ";
        }
        // line 29
        echo "      ";
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 30
            echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <div class=\"btn-group\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 33
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 34
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-sm-1 col-sm-offset-2 text-right\">
          <label class=\"control-label\" for=\"input-sort\">";
            // line 38
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
        </div>
        <div class=\"col-sm-3 text-right\">
         <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 43
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 44
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 46
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                }
                // line 48
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </select>
        </div>
        <div class=\"col-sm-1 text-right\">
          <label class=\"control-label\" for=\"input-limit\">";
            // line 52
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
        </div>
        <div class=\"col-sm-2 text-right\">
          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 57
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 58
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 60
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                }
                // line 62
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </select>
        </div>
      </div>
      <br />
      <div class=\"row\">  
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo " 
        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 71
                echo $this->getAttribute($context["article"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["article"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["article"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["article"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 73
                echo $this->getAttribute($context["article"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["article"], "name", array());
                echo "</a></h4>
              <p class=\"description\">";
                // line 74
                echo $this->getAttribute($context["article"], "description", array(), "array");
                echo "</p>
              ";
                // line 75
                if ((isset($context["configblog_review_status"]) ? $context["configblog_review_status"] : null)) {
                    // line 76
                    echo "              ";
                    if ($this->getAttribute($context["article"], "rating", array())) {
                        // line 77
                        echo "                <div class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 78
                            echo "                  ";
                            if (($this->getAttribute($context["article"], "rating", array()) < $context["i"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            }
                            // line 79
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " </div>
                ";
                    }
                    // line 81
                    echo "\t\t\t  ";
                }
                // line 82
                echo "            </div>
            <div class=\"button-group\">
\t\t\t\t<button type=\"button\" onclick=\"location.href = ('";
                // line 84
                echo $this->getAttribute($context["article"], "href", array());
                echo "');\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_more"]) ? $context["button_more"] : null);
                echo "</span></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 85
                echo $this->getAttribute($context["article"], "date_added", array());
                echo "\" \"><i class=\"fa fa-clock-o\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 86
                echo (isset($context["text_views"]) ? $context["text_views"] : null);
                echo " ";
                echo $this->getAttribute($context["article"], "viewed", array());
                echo "\" \"><i class=\"fa fa-eye\"></i></button>
\t\t\t</div>
          </div>
        </div>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 93
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
      </div>
      ";
        } else {
            // line 96
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 98
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 101
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 102
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 104
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/blog/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 104,  326 => 102,  321 => 101,  313 => 98,  307 => 96,  301 => 93,  297 => 91,  284 => 86,  280 => 85,  274 => 84,  270 => 82,  267 => 81,  258 => 79,  251 => 78,  246 => 77,  243 => 76,  241 => 75,  237 => 74,  231 => 73,  220 => 71,  212 => 68,  205 => 63,  199 => 62,  191 => 60,  183 => 58,  180 => 57,  176 => 56,  169 => 52,  164 => 49,  158 => 48,  150 => 46,  142 => 44,  139 => 43,  135 => 42,  128 => 38,  121 => 34,  117 => 33,  112 => 30,  109 => 29,  104 => 26,  98 => 24,  95 => 23,  85 => 21,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} showcase-list">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/* 	   {% if thumb or description %}*/
/*       <div class="row">*/
/*         {% if thumb %}*/
/*         <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10">{{ description }}</div>*/
/* 		{% endif %}*/
/*       </div>*/
/*       <hr>*/
/* 	  {% endif %}*/
/*       {% if articles %}*/
/*       <div class="row">*/
/*         <div class="col-sm-3">*/
/*           <div class="btn-group">*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-sm-1 col-sm-offset-2 text-right">*/
/*           <label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/*         </div>*/
/*         <div class="col-sm-3 text-right">*/
/*          <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*         </div>*/
/*         <div class="col-sm-1 text-right">*/
/*           <label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/*         </div>*/
/*         <div class="col-sm-2 text-right">*/
/*           <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*         </div>*/
/*       </div>*/
/*       <br />*/
/*       <div class="row">  */
/*         {% for article in articles %} */
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb">*/
/*             <div class="image"><a href="{{ article.href }}"><img src="{{ article.thumb }}" alt="{{ article.name }}" title="{{ article.name }}" class="img-responsive" /></a></div>*/
/*             <div class="caption">*/
/*               <h4><a href="{{ article.href }}">{{ article.name }}</a></h4>*/
/*               <p class="description">{{ article['description'] }}</p>*/
/*               {% if configblog_review_status %}*/
/*               {% if article.rating %}*/
/*                 <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if article.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %} </div>*/
/*                 {% endif %}*/
/* 			  {% endif %}*/
/*             </div>*/
/*             <div class="button-group">*/
/* 				<button type="button" onclick="location.href = ('{{ article.href }}');"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_more }}</span></button>*/
/* 				<button type="button" data-toggle="tooltip" title="{{ article.date_added }}" "><i class="fa fa-clock-o"></i></button>*/
/* 				<button type="button" data-toggle="tooltip" title="{{ text_views }} {{ article.viewed }}" "><i class="fa fa-eye"></i></button>*/
/* 			</div>*/
/*           </div>*/
/*         </div>*/
/*        {% endfor %}*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
