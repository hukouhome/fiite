<?php

/* register.html */
class __TwigTemplate_6db806d24b77d46efa513e9e500130d340ba2660d12c4128aff2b7eb6d5e0a27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "register.html", 1);
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
    <div class=\"left\" id=\"register\">
        <div class=\"weizi\">
            <div class=\"wz_text\">当前位置：<a href=\"#\">首页</a>><h1>注册</h1></div>
        </div>
        <div class=\"g_content\">
            <form action=\"/user/doRegister\" method=\"post\" class=\"basic-grey\" enctype=\"multipart/form-data\">
                <h1>用户注册
                    <span>填写注册信息，完成注册.</span>
                </h1>
                <label>
                    <span>用户名 :</span>
                    <input id=\"username\" type=\"text\" name=\"username\" placeholder=\"请输入用户名\" />
                </label>
                <label>
                    <span>密码 :</span>
                    <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"请输入密码\" />
                </label>
                <label>
                    <span>邮箱 :</span>
                    <input id=\"email\" type=\"email\" name=\"email\" placeholder=\"邮箱地址\" />
                </label>
                <label>
                    <span>头像 :</span>
                    <input type=\"file\" name=\"avatar_img\" value=\"\" />
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input type=\"submit\" class=\"button\" value=\"注册\" />
                </label>
            </form>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    ";
        // line 39
        echo twig_include($this->env, $context, "right.html");
        echo "
    <!--end  right-->
    <div class=\"clear\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 39,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <div id="content">*/
/*     <!--left-->*/
/*     <div class="left" id="register">*/
/*         <div class="weizi">*/
/*             <div class="wz_text">当前位置：<a href="#">首页</a>><h1>注册</h1></div>*/
/*         </div>*/
/*         <div class="g_content">*/
/*             <form action="/user/doRegister" method="post" class="basic-grey" enctype="multipart/form-data">*/
/*                 <h1>用户注册*/
/*                     <span>填写注册信息，完成注册.</span>*/
/*                 </h1>*/
/*                 <label>*/
/*                     <span>用户名 :</span>*/
/*                     <input id="username" type="text" name="username" placeholder="请输入用户名" />*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>密码 :</span>*/
/*                     <input id="password" type="password" name="password" placeholder="请输入密码" />*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>邮箱 :</span>*/
/*                     <input id="email" type="email" name="email" placeholder="邮箱地址" />*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>头像 :</span>*/
/*                     <input type="file" name="avatar_img" value="" />*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>&nbsp;</span>*/
/*                     <input type="submit" class="button" value="注册" />*/
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
