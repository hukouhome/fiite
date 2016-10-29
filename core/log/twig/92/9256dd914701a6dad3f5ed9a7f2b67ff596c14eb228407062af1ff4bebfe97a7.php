<?php

/* index.html */
class __TwigTemplate_a7cb9ca6869d0656cd8103ee86efae64a7955309027068873f951e1bf41a123d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"content\">
    <!--left-->
    <div class=\"left\" id=\"c_left\">
        <div class=\"s_tuijian\">
            <h2>文章<span>推荐</span>
                <div id=\"message\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>
            </h2>
        </div>
        <div class=\"content_text\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 13
            echo "            <!--wz-->
            <div class=\"wz\">
                <h3><a href=\"/index/detail/id/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</a></h3>
                <dl>
                    <dt><img src=\"/upload/images/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "gb_img", array()), "html", null, true);
            echo "\" width=\"200\"  height=\"123\" alt=\"\"></dt>
                    <dd>
                        <p class=\"dd_text_1\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</p>
                        <p class=\"dd_text_2\">
                            <span class=\"left author\">Town</span><span class=\"left sj\">时间:";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                            <span class=\"left fl\">分类:<a href=\"#\" title=\"学无止境\">学无止境</a></span><span class=\"left yd\">
                            <a href=\"/index/del/id/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\" title=\"删除留言\">删除留言</a>
               </span>
                        <div class=\"clear\"></div>
                        </p>
                    </dd>
                    <div class=\"clear\"></div>
                </dl>
            </div>
            <!--wz end-->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

        </div>
    </div>
    <!--left end-->
    <!--right-->
    ";
        // line 39
        echo twig_include($this->env, $context, "right.html");
        echo "
    <!--right end-->
    <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  93 => 33,  77 => 23,  72 => 21,  67 => 19,  62 => 17,  53 => 15,  49 => 13,  45 => 12,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <div id="content">*/
/*     <!--left-->*/
/*     <div class="left" id="c_left">*/
/*         <div class="s_tuijian">*/
/*             <h2>文章<span>推荐</span>*/
/*                 <div id="message">{{ message }}</div>*/
/*             </h2>*/
/*         </div>*/
/*         <div class="content_text">*/
/*             {% for val in data %}*/
/*             <!--wz-->*/
/*             <div class="wz">*/
/*                 <h3><a href="/index/detail/id/{{ val.id }}" title="{{ val.title }}">{{ val.title }}</a></h3>*/
/*                 <dl>*/
/*                     <dt><img src="/upload/images/{{ val.gb_img }}" width="200"  height="123" alt=""></dt>*/
/*                     <dd>*/
/*                         <p class="dd_text_1">{{ val.content }}</p>*/
/*                         <p class="dd_text_2">*/
/*                             <span class="left author">Town</span><span class="left sj">时间:{{ val.createtime|date("Y-m-d") }}</span>*/
/*                             <span class="left fl">分类:<a href="#" title="学无止境">学无止境</a></span><span class="left yd">*/
/*                             <a href="/index/del/id/{{ val.id }}" title="删除留言">删除留言</a>*/
/*                </span>*/
/*                         <div class="clear"></div>*/
/*                         </p>*/
/*                     </dd>*/
/*                     <div class="clear"></div>*/
/*                 </dl>*/
/*             </div>*/
/*             <!--wz end-->*/
/*             {% endfor %}*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/*     <!--left end-->*/
/*     <!--right-->*/
/*     {{ include('right.html') }}*/
/*     <!--right end-->*/
/*     <div class="clear"></div>*/
/* </div>*/
/* {% endblock %}*/
