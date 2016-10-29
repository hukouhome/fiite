<?php
namespace app\model;
use core\lib\model;
class guestbookModel extends model {
    public $table = 'guestbook';
    public function all() {
      return $this->select($this->table, '*');
    }

    public function addOne($data) {
      return $this->insert($this->table,$data);
    }

  public function delOne($id) {
    $ret =  $this->delete($this->table,array(
      'id' => $id
    ));
    if($ret !== false) {
      return true;
    } else {
      return false;
    }
  }

  public function showOne($id) {
    $ret = $this->select($this->table,'*', array(
      'id' => $id
    ));
    return $ret;
  }

}