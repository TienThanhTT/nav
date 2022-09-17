<?php
    session_start();
    echo "Xin chào <b>" . $_SESSION['username'];

    echo $_SESSION['thongbao'];
?>