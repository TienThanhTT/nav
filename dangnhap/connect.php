<?php
     $username = "root"; // Khai báo username
     $password = "";      // Khai báo password
     $host   = "localhost";   // Khai báo host
     $dbname = "navigation";
     
     // kết nối database email
     $conn = new mysqli($host, $username, $password,$dbname);
     
     // kiểm tra kết nối
     if($conn-> connect_error){
         die("không thể kết nối: " . $conn->connect_error);
         exit();
     }
?>