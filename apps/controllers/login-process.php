<?php
// login-process.php
session_start();
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kiểm tra thông tin đăng nhập trong CSDL
  $query = "SELECT * FROM User WHERE TenUser = :username AND MatKhau = :password";
  $stmt = $db->prepare($query);
  $stmt->bindValue(':username', $username);
  $stmt->bindValue(':password', $password);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user) {
    // Đăng nhập thành công, thiết lập session
    $_SESSION['user'] = $user;

    // Chuyển hướng đến trang Sach.php
    header('Location: Sach.php');
    exit();
  } else {
    // Đăng nhập thất bại, chuyển hướng đến trang đăng nhập lại
    header('Location: login.php');
    exit();
  }
}