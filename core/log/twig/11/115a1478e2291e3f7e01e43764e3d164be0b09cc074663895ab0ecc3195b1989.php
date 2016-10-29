<?php

/* login.html */
class __TwigTemplate_883a0bfec4c7aca0a039cc7637947fd97fa70ff9c7ce2e973e61298d15f449f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
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
    <div class=\"left\" id=\"login\">
        <div class=\"weizi\">
            <div class=\"wz_text\">当前位置：<a href=\"#\">首页</a>><h1>登录</h1>
                <div id=\"message\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>
            </div>
        </div>
        <div class=\"g_content\">
            <form action=\"/user/doLogin\" method=\"post\" class=\"basic-grey\" enctype=\"multipart/form-data\">
                <h1>用户登录</h1>
                <label>
                    <span>用户名 :</span>
                    <input id=\"username\" type=\"text\" name=\"username\" placeholder=\"请输入用户名\" />
                </label>
                <label>
                    <span>密码 :</span>
                    <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"请输入密码\" />
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input type=\"submit\" class=\"button\" value=\"登录\" />
                </label>
            </form>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    ";
        // line 31
        echo twig_include($this->env, $context, "right.html");
        echo "
    <!--end  right-->
    <div class=\"clear\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 31,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <div id="content">*/
/*     <!--left-->*/
/*     <div class="left" id="login">*/
/*         <div class="weizi">*/
/*             <div class="wz_text">当前位置：<a href="#">首页</a>><h1>登录</h1>*/
/*                 <div id="message">{{ message }}</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="g_content">*/
/*             <form action="/user/doLogin" method="post" class="basic-grey" enctype="multipart/form-data">*/
/*                 <h1>用户登录</h1>*/
/*                 <label>*/
/*                     <span>用户名 :</span>*/
/*                     <input id="username" type="text" name="username" placeholder="请输入用户名" />*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>密码 :</span>*/
/*                     <input id="password" type="password" name="password" placeholder="请输入密码" />*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>&nbsp;</span>*/
/*                     <input type="submit" class="button" value="登录" />*/
/*                 </label>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*     <!--end left -->*/
/*     <!--right-->*/
/*     {{ include('right.html') }}*/
/*     <!--end  right-->*/
/*     <div class="clear"></div>*/
/* */
/* </div>*/
/* {% endblock %}*/
