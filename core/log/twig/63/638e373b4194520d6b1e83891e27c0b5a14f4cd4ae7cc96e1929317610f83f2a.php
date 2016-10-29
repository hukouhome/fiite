<?php

/* detail.html */
class __TwigTemplate_e71d1c401e727f00fd8857c8fdde3bdc2575cfa7c4c37419a387c26afe7240e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "detail.html", 1);
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
            <h2>文章<span>推荐</span></h2>
        </div>
        <div class=\"content_text\">
            <!--wz-->
            <div class=\"wz\">
                <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), "html", null, true);
        echo "</h3>
                <span class=\"left sj\">时间:";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "createtime", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                <img src=\"/upload/images/";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "gb_img", array()), "html", null, true);
        echo "\"  alt=\"\">
                ";
        // line 15
        echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array());
        echo "
                <div class=\"clear\"></div>

            </div>
            <!--wz end-->

        </div>
    </div>

    <!--left end-->
    <!--right-->
    ";
        // line 26
        echo twig_include($this->env, $context, "right.html");
        echo "
    <!--right end-->
    <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <div id="content">*/
/*     <!--left-->*/
/*     <div class="left" id="c_left">*/
/*         <div class="s_tuijian">*/
/*             <h2>文章<span>推荐</span></h2>*/
/*         </div>*/
/*         <div class="content_text">*/
/*             <!--wz-->*/
/*             <div class="wz">*/
/*                 <h3>{{ data.title }}</h3>*/
/*                 <span class="left sj">时间:{{ data.createtime|date("Y-m-d") }}</span>*/
/*                 <img src="/upload/images/{{ data.gb_img }}"  alt="">*/
/*                 {{ data.content|raw }}*/
/*                 <div class="clear"></div>*/
/* */
/*             </div>*/
/*             <!--wz end-->*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <!--left end-->*/
/*     <!--right-->*/
/*     {{ include('right.html') }}*/
/*     <!--right end-->*/
/*     <div class="clear"></div>*/
/* </div>*/
/* {% endblock %}*/
