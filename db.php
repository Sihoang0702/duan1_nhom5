<?php
    try {
        $conn = new PDO(
            "mysql:host=localhost;
            dbname=duan1_team5;charset=utf8", "root", ""
        );
    } catch(\Throwable $th) {
        echo "lỗi kết nối";
    }
?>