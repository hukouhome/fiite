<?php
namespace app\model;
use core\lib\model;

class userModel extends model {
  public $table = 'user';

  public function addUser($data) {
    return $this->insert($this->table,$data);
  }

  public function delUser($id) {

  }

  public function getUser($id) {
    return $this->select($this->table, '*', array(
      'id' => $id
    ));
  }

  public function fetchUser($username) {
    $ret = $this->get($this->table, '*', array(
      'username' => $username
    ));
    return $ret;
  }

}