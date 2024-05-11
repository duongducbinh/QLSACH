<?php
// User.php
class User {
  public $MaUser;
  public $TenUser;
  public $MatKhau;

  public function __construct($MaUser, $TenUser, $MatKhau) {
    $this->MaUser = $MaUser;
    $this->TenUser = $TenUser;
    $this->MatKhau = $MatKhau;
  }
}
?>