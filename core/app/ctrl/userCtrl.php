<?php
namespace app\ctrl;
use app\model\userModel;
use core\lib\message;

class userCtrl extends \core\fiite {

  public function index() {
    p('user index');
  }
  public function register() {
    $this->display('register.html');
  }

  public function login() {
    $this->display('login.html');
  }

  public function logout() {
    unset($_SESSION['is_logged_in']);
    unset($_SESSION['user_data']);
    session_destroy();
    jump("/");
  }

  public function doRegister() {
    $sava_data['username'] = post('username');
    $sava_data['password'] = md5(post('password'));
    $sava_data['email']  = post('email');
    $sava_data['createtime'] = time();

    //dump($data);
    //处理文件上传
    $storage = new \Upload\Storage\FileSystem(UPLOAD . '/images/avatar');
    $file = new \Upload\File('avatar_img', $storage);

    // Optionally you can rename the file on upload
    $new_filename = uniqid();
    $file->setName($new_filename);

    // Validate file upload
    // MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
    $file->addValidations(array(
      // Ensure file is of type "image/png"
      new \Upload\Validation\Mimetype(array('image/jpg', 'image/jpeg', 'image/gif', 'image/png')),

      //You can also add multi mimetype validation
      //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))

      // Ensure file is no larger than 5M (use "B", "K", M", or "G")
      new \Upload\Validation\Size('5M')
    ));

    // Access data about the file that has been uploaded
    $data = array(
      'name'       => $file->getNameWithExtension(),
      'extension'  => $file->getExtension(),
      'mime'       => $file->getMimetype(),
      'size'       => $file->getSize(),
      'md5'        => $file->getMd5(),
      'dimensions' => $file->getDimensions()
    );

    // Try to upload file
    try {
      // Success!
      $ret_upload = $file->upload();
      if($ret_upload) {
        $sava_data['avatar'] = $file->getName() . '.' .$file->getExtension();
      }
    } catch (\Exception $e) {
      // Fail!
      $errors = $file->getErrors();
      p($errors);
    }
    //文件操作流程完成

    $model = new userModel();
    $ret = $model->addUser($sava_data);
    if($ret) {
      jump("/");
    } else {
      p('error');
    }
  }

  public function doLogin() {
    $username = post('username');
    $password = md5(post('password'));
    //判断密码是否正确
    $model = new userModel();
    $ret = $model->fetchUser($username,$password);
    //dump($ret);
    if($ret['password'] == $password) {
      $_SESSION['is_logged_in'] = true;
      $_SESSION['user_data'] = array(
        'id' => $ret['id'],
        'username' => $ret['username']
      );
      jump("/");
    } else {
      message::setMsg('登录失败','error');
      jump("/user/login");
    }
  }

}