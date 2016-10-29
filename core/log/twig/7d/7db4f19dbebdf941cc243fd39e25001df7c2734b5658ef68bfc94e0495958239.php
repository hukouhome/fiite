<?php

/* add.html */
class __TwigTemplate_70d56630db004dd28e4d09010571735bb28962995892ea576e94952f48a55102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
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
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"/libraries/ueditor/ueditor.config.js\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"/libraries/ueditor/ueditor.all.min.js\"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"/libraries/ueditor/lang/zh-cn/zh-cn.js\"></script>

    <!--left-->
    <div class=\"left\" id=\"guestbook\">
        <div class=\"weizi\">
            <div class=\"wz_text\">当前位置：<a href=\"#\">首页</a>><h1>留言板</h1></div>
        </div>
        <div class=\"g_content\">
            <form action=\"/index/save\" method=\"post\" class=\"basic-grey\" enctype=\"multipart/form-data\">
                <h1>添加留言
                    <span>在这里输入你的留言.</span>
                </h1>
                <label>
                    <span>标题 :</span>
                    <input id=\"title\" type=\"text\" name=\"title\" placeholder=\"请输入标题..\" />
                </label>
                <!--<label>-->
                    <!--<span>留言内容 :</span>-->
                    <!--<textarea id=\"message\" name=\"message\" placeholder=\"请输入留言内容...\"></textarea>-->
                <!--</label>-->
                <script id=\"editor\" type=\"text/plain\" name=\"message\"></script>

                <label>
                    <span>Subject :</span><select name=\"selection\">
                    <option value=\"Job Inquiry\">Job Inquiry</option>
                    <option value=\"General Question\">General Question</option>
                </select>
                </label>
                <label>
                    <span>图片:</span>
                    <input type=\"file\" name=\"gb_img\" value=\"\" />
                </label>
                <label>
                    <span>&nbsp;</span>
                    <input type=\"submit\" class=\"button\" value=\"Send\" />
                </label>
            </form>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    ";
        // line 49
        echo twig_include($this->env, $context, "right.html");
        echo "
    <!--end  right-->
    <div class=\"clear\"></div>

    <script type=\"text/javascript\">

        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        var ue = UE.getEditor('editor');
    </script>

</div>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 49,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <div id="content">*/
/*     <script type="text/javascript" charset="utf-8" src="/libraries/ueditor/ueditor.config.js"></script>*/
/*     <script type="text/javascript" charset="utf-8" src="/libraries/ueditor/ueditor.all.min.js"> </script>*/
/*     <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->*/
/*     <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->*/
/*     <script type="text/javascript" charset="utf-8" src="/libraries/ueditor/lang/zh-cn/zh-cn.js"></script>*/
/* */
/*     <!--left-->*/
/*     <div class="left" id="guestbook">*/
/*         <div class="weizi">*/
/*             <div class="wz_text">当前位置：<a href="#">首页</a>><h1>留言板</h1></div>*/
/*         </div>*/
/*         <div class="g_content">*/
/*             <form action="/index/save" method="post" class="basic-grey" enctype="multipart/form-data">*/
/*                 <h1>添加留言*/
/*                     <span>在这里输入你的留言.</span>*/
/*                 </h1>*/
/*                 <label>*/
/*                     <span>标题 :</span>*/
/*                     <input id="title" type="text" name="title" placeholder="请输入标题.." />*/
/*                 </label>*/
/*                 <!--<label>-->*/
/*                     <!--<span>留言内容 :</span>-->*/
/*                     <!--<textarea id="message" name="message" placeholder="请输入留言内容..."></textarea>-->*/
/*                 <!--</label>-->*/
/*                 <script id="editor" type="text/plain" name="message"></script>*/
/* */
/*                 <label>*/
/*                     <span>Subject :</span><select name="selection">*/
/*                     <option value="Job Inquiry">Job Inquiry</option>*/
/*                     <option value="General Question">General Question</option>*/
/*                 </select>*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>图片:</span>*/
/*                     <input type="file" name="gb_img" value="" />*/
/*                 </label>*/
/*                 <label>*/
/*                     <span>&nbsp;</span>*/
/*                     <input type="submit" class="button" value="Send" />*/
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
/*     <script type="text/javascript">*/
/* */
/*         //实例化编辑器*/
/*         //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例*/
/*         var ue = UE.getEditor('editor');*/
/*     </script>*/
/* */
/* </div>*/
/* {% endblock %}*/
