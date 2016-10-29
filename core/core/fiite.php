<?php

namespace core;

use core\lib\message;

class fiite{
    public static $classMap = array();
  public $assign;

    static public function run() {
      \core\lib\log::init();
      //\core\lib\log::log($_SERVER, 'server');
        $route = new \core\lib\route();
      $ctrlClass = $route->ctrl;
      $action = $route->action;
      $ctrlfile = APP . '/ctrl/' . $ctrlClass . 'Ctrl.php';
      $cltrlClass = '\\' . MODULE . '\ctrl\\' . $ctrlClass . 'Ctrl';
      if(is_file($ctrlfile)) {
        include $ctrlfile;
        $ctrl = new $cltrlClass();
        $ctrl->$action();
        //\core\lib\log::log('ctrl:'.$ctrlClass.'     '.'action:'.$action);
      } else {
        throw new \Exception('找不到控制器' . $ctrlClass);
      }
    }

    static public function load($class) {
        //自动加载类库
        // new \core\route();
        //$class = '\core\route';
        //FIITE . '/core/route.php';
        if(isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = FIITE . '/' . $class .'.php';
            if(is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

  public function assign($name,$value) {
    $this->assign[$name] = $value;
  }

  public function display($file) {
    //$file = APP . '/views/' . $file;
    //if(is_file($file)) {
    //  extract($this->assign);
    //  include $file;
    //}

    $twig_file = APP . '/views/' . $file;
      if(is_file($twig_file)) {
          \Twig_Autoloader::register();
          $loader = new \Twig_Loader_Filesystem(APP . '/views');
          $twig = new \Twig_Environment($loader, array(
              'cache' => FIITE . '/log/twig',
          ));
          $template = $twig->loadTemplate($file);
        $message = message::display();
        $tmp_is_logged_in = isset($_SESSION['is_logged_in'])?$_SESSION['is_logged_in']:false;
        $tmp_user_data = isset($_SESSION['user_data'])?$_SESSION['user_data']:array();
        $tmp_message = $message == NULL?'':$message;
        $this->assign('message',$tmp_message);
        $this->assign('is_logged_in', $tmp_is_logged_in);
        $this->assign('user_data', $tmp_user_data);
          $template->display($this->assign?$this->assign: array(
            'is_logged_in' => $tmp_is_logged_in,
            'user_data' => $tmp_user_data,
            'message' => $tmp_message
          ));
      }

  }
}