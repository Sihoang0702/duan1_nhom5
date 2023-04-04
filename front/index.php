<?php
// models
include "../models/pdo.php";
include "../models/sanpham.php";

// views
include "views/elements/header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // TODO
            break;

        default:
            // TODO
            break;
    }
} else {
    // mypage
    $listsanpham = loadall_sanpham();
    $listdanhmuc = loadall_sanpham();
    include "views/mypage/home.php";
}

include "views/elements/footer.php";
// end views
?>