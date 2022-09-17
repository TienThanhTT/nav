<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" align="center">
        <h2>Đăng nhập</h2>
        <table align="center">
            <tr>
                <td>Tên đăng nhập: </td>
                <th><input type="text" name="username"></th>
            </tr>

            <tr>
                <td>Mật khẩu: </td>
                <th><input type="password" name="password"></th>
            </tr>
        </table>
        <button type="submit">Đăng nhập</button>
    </form>

    <?php
        $username = "root"; // Khai báo username
        $password = "";      // Khai báo password
        $host   = "localhost";   // Khai báo host
        $dbname   = "email";     //khai báo database

        // kết nối database email
        $conn = new mysqli($host, $username, $password, $dbname);

        // kiểm tra kết nối
        if($conn-> connect_error){
            die("không thể kết nối: " . $conn->connect_error);
            exit();
        }

        if($_GET['username'] == $_GET['Tên Tài Khoản']){
            session_start();
            echo 'đăng nhập thành công';
        }
    ?>
</body>
</html>

