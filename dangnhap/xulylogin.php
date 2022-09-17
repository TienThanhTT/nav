<?php
//Khai báo sử dụng session
session_start();


//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
include('connect.php');


$username = addslashes($_POST['username']);
$password = md5(addslashes(($_POST['password'])));




if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. ";
exit;
}
  
/* md5($password); */

  

$query = "SELECT `username`, `password` FROM thongtindangky WHERE username='$username'";

$result = mysqli_query($conn, $query) or die( mysqli_error($conn));

if (!$result) {
    echo "Tên đăng nhập hoặc mật khẩu không đúng!";
}

$row = mysqli_fetch_array($result);



if ($password != $row['password']) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. ";
    exit;
}


//Lưu tên đăng nhập
$_SESSION['username'] = $username;
    echo "Xin chào <b>" .$username . "</br>. Bạn đã đăng nhập thành công. <a href='../index.php'>Đến trang chủ</a>";
    die();
    
     include 'session.php';
    $conn->close();
}
?>