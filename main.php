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
        

        $name = "";
        $date="";
        $Username="";
        $Password="";
        $rePassword="";

        // lấy giá trị post từ form

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST["name"])){
                $name = $_POST['name'];
            }

            if(isset($_POST["date"])){
                $date = $_POST['date'];
            }

            if(isset($_POST["username"])){
                $Username = $_POST['username'];
            }

            if(isset($_POST["password"])){
                $Password = $_POST['password'];
            }

            if(isset($_POST["repassword"])){
                $rePassword = $_POST['repassword'];
            }

            $sql = "INSERT INTO Customer (`Họ tên`, `Năm sinh`, `Tên tài khoản`, `Mật khẩu`, `Nhập lại mật khẩu`)
            VALUES ('$name', '$date', '$Username', '$Password', '$rePassword')";

            if ($conn->query($sql) === TRUE) {
                echo "Thêm dữ liệu thành công";
            } else {
                echo "Error: " . $sql . "<br>" . $connect->error;
            }
        }
        $conn->close();

    ?>