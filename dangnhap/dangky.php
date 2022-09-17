<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Dang ky</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <form action="" method="post">
            <table>
            <tr>
                    <th>Tên đăng nhập</th>
                    <td><input type="text" name="username" class="form-control"></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><input type="text" name="email" class="form-control"></td>
                </tr>


                <tr>
                    <th>Ngày sinh</th>
                    <td><input type="date" name="date" class="form-control"></td>
                </tr>

                <tr>
                    <th>Mật khẩu</th>
                    <td><input type="password" name="password" class="form-control"></td>
                </tr>
            </table>
            <button type="submit">Đăng ký</button>
            <a href='login.php' title='Đăng ký'>Đăng nhập</a>
            
        </form>

    </div>

    <?php
    include "connect.php";

        $username ="";
        $email ="";
        $ngaysinh ="";
        $matkhau="";
        

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["username"])){
            $username = $_POST['username'];
        }
        if(isset($_POST["email"])){
            $email = $_POST['email'];
        }

        if(isset($_POST["date"])){
            $ngaysinh = $_POST['date'];
        }

        if(isset($_POST["password"])){
            $matkhau = md5($_POST['password']);
        }

    
            $sql = "INSERT INTO thongtindangky (`username`,`email`,`ngaysinh`,`password`) 
            VALUES('$username','$email','$ngaysinh','$matkhau')";
        
        
        

        if ($conn->query($sql) === TRUE) {
            echo "Đăng ký thành công";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
        $conn->close();
    ?>
</body>
</html>