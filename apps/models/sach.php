<?php
// Sach.php
class Sach {
  public $MaSach;
  public $TenSach;
  public $SoLuong;

  public function __construct($MaSach, $TenSach, $SoLuong) {
    $this->MaSach = $MaSach;
    $this->TenSach = $TenSach;
    $this->SoLuong = $SoLuong;
  }
}
?>