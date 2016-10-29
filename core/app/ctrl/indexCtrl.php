<?php
namespace app\ctrl;
use app\model\guestbookModel;
use core\lib\message;

class indexCtrl extends \core\fiite {
  //所有留言
  public function index() {
    $model = new guestbookModel();
    $data = $model->all();
    $this->assign('data', $data);
    $this->display('index.html');
  }

  //添加留言
  public function add() {
    if(!isset($_SESSION['is_logged_in'])) {
      jump('/user/login');
    } else {
      $this->display('add.html');
    }

  }

  //保存留言
  public function save() {
    $sava_data['title'] = post('title');
    $sava_data['content'] = $_POST['message'];
    $sava_data['createtime'] = time();
    $gb_img = post('gb_img');

    //dump($data);
    //处理文件上传
    $storage = new \Upload\Storage\FileSystem(UPLOAD . '/images');
    $file = new \Upload\File('gb_img', $storage);

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
        $sava_data['gb_img'] = $file->getName() . '.' .$file->getExtension();
      }
    } catch (\Exception $e) {
      // Fail!
      $errors = $file->getErrors();
      p($errors);
    }
    //文件操作流程完成

    $model = new guestbookModel();
    $ret = $model->addOne($sava_data);
    if($ret) {
      jump("/");
    } else {
      p('error');
    }
  }

  //删除留言
  public function del() {
    $id = get('id', 0, 'int');
    if($id) {
      $model = new guestbookModel();
      $ret = $model->delOne($id);
      if($ret) {
        jump('/');
      } else {
        exit('删除失败');
      }
    } else {
      exit('参数错误');
    }

  }

  //详情页面
  public function detail() {
    $id = get('id', 0, 'int');
    if($id) {
      $model = new guestbookModel();
      $data = $model->showOne($id);
      $this->assign('data', $data[0]);
      $this->display('detail.html');
    }
  }

}