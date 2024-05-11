<?php
// Sach.php
session_start();
require_once '../config/database.php';
// Kiểm tra đăng nhập
if (!isset($_SESSION['user'])) {
  // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
  header('Location: login.php');
  exit();
}

// Lấy dữ liệu sách từ CSDL (lấy 5 bản ghi đầu tiên)
$query = "SELECT * FROM Sach LIMIT 5";
$stmt = $db->prepare($query);
$stmt->execute();
$sachs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Danh sách sách</title>
  </head>
  <body>
    <h1>Danh sách sách</h1>
    <table>
      <tr>
        <th>Mã sách</th>
        <th>Tên sách</th>
        <th>Số lượng</th>
      </tr>
      <?php foreach ($sachs as $sach): ?>
      <tr>
        <td><?php echo $sach['MaSach']; ?></td>
        <td><?php echo $sach['TenSach']; ?></td>
        <td><?php echo $sach['SoLuong']; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>