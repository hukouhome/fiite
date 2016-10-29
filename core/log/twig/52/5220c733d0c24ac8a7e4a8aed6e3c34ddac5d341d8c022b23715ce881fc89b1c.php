<?php

/* layout.html */
class __TwigTemplate_e3d8d899e0fcb05b8acf8b148d804e640cd866c27f5d2334cbde516db132cfae extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"UTF-8\">
    <title>个人博客</title>
    <meta name=\"keywords\" content=\"个人博客\" />
    <meta name=\"description\" content=\"\" />
    <link rel=\"stylesheet\" href=\"/assets/css/index.css\"/>
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\"/>
    <script type=\"text/javascript\" src=\"/assets/js/jquery1.42.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/js/jquery.SuperSlide.2.1.1.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"/assets/js/html5.js\"></script>
    <![endif]-->
</head>

<body>
<!--header start-->
<div id=\"header\">
    <h1>个人博客</h1>
    <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
</div>

<!--header end-->
<!--nav-->
<div id=\"nav\">
    <ul>
        <li><a href=\"/\">首页</a></li>
        <li><a href=\"#\">关于我</a></li>
        <li><a href=\"/\">碎言碎语</a></li>
        <li><a href=\"#\">个人日记</a></li>
        ";
        // line 32
        if ((isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 33
            echo "            <li><a href=\"/index/add\">留言板</a></li>
            <li><a href=\"#\">欢迎";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "username", array()), "html", null, true);
            echo "--";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_data"]) ? $context["user_data"] : null), "id", array()), "html", null, true);
            echo "</a></li>
            <li><a href=\"/user/logout\">退出</a></li>
        ";
        } else {
            // line 37
            echo "            <li><a href=\"/user/register\">注册</a></li>
            <li><a href=\"/user/login\">登录</a></li>
        ";
        }
        // line 40
        echo "        <div class=\"clear\"></div>
    </ul>
</div>
<!--nav end-->
<!--content start-->

";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
<!--content end-->
<!--footer start-->
<div id=\"footer\">
    <p>Design by:<a href=\"http://hukouhome.com\" target=\"_blank\">少年</a> 2016-9-19</p>
</div>
<!--footer end-->
<script type=\"text/javascript\">jQuery(\".lanmubox\").slide({easing:\"easeOutBounce\",delayTime:400});</script>
<script  type=\"text/javascript\" src=\"/assets/js/nav.js\"></script>
</body>
</html>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  96 => 46,  81 => 49,  79 => 46,  71 => 40,  66 => 37,  58 => 34,  55 => 33,  53 => 32,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh-CN">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>个人博客</title>*/
/*     <meta name="keywords" content="个人博客" />*/
/*     <meta name="description" content="" />*/
/*     <link rel="stylesheet" href="/assets/css/index.css"/>*/
/*     <link rel="stylesheet" href="/assets/css/style.css"/>*/
/*     <script type="text/javascript" src="/assets/js/jquery1.42.min.js"></script>*/
/*     <script type="text/javascript" src="/assets/js/jquery.SuperSlide.2.1.1.js"></script>*/
/*     <!--[if lt IE 9]>*/
/*     <script src="/assets/js/html5.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* <!--header start-->*/
/* <div id="header">*/
/*     <h1>个人博客</h1>*/
/*     <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>*/
/* </div>*/
/* */
/* <!--header end-->*/
/* <!--nav-->*/
/* <div id="nav">*/
/*     <ul>*/
/*         <li><a href="/">首页</a></li>*/
/*         <li><a href="#">关于我</a></li>*/
/*         <li><a href="/">碎言碎语</a></li>*/
/*         <li><a href="#">个人日记</a></li>*/
/*         {% if is_logged_in %}*/
/*             <li><a href="/index/add">留言板</a></li>*/
/*             <li><a href="#">欢迎{{ user_data.username}}--{{ user_data.id}}</a></li>*/
/*             <li><a href="/user/logout">退出</a></li>*/
/*         {% else %}*/
/*             <li><a href="/user/register">注册</a></li>*/
/*             <li><a href="/user/login">登录</a></li>*/
/*         {% endif %}*/
/*         <div class="clear"></div>*/
/*     </ul>*/
/* </div>*/
/* <!--nav end-->*/
/* <!--content start-->*/
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* <!--content end-->*/
/* <!--footer start-->*/
/* <div id="footer">*/
/*     <p>Design by:<a href="http://hukouhome.com" target="_blank">少年</a> 2016-9-19</p>*/
/* </div>*/
/* <!--footer end-->*/
/* <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>*/
/* <script  type="text/javascript" src="/assets/js/nav.js"></script>*/
/* </body>*/
/* </html>*/
/* */
