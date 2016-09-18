<?php
namespace core\lib;

class route{
    public $ctrl;
    public $action;
    public function __construct() {
        //xxx.com/index/index
        //xxx.com/index.php/index/index
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3.返回对应控制器和方法
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            // /index/index
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/', trim($path, '/'));
            p($patharr);
        } else {
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}