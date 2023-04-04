<?php
include "../models/pdo.php";
include "../models/danhmuc.php";
include "../models/sanpham.php";

include "../models/taikhoan.php";
include "../models/binhluan.php";
include "views/elements/header.php";
include_once '../db.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "thêm thành công";
            }
            include "views/danhmuc/add.php";
            break;
        case 'lisdm':

            $listdanhmuc = loadall_danhmuc();
            include "views/danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $sql = "select * from danhmuc order by id desc";
            $listdanhmuc = pdo_query($sql);

            include "views/danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $dm = loadone_danhmuc($_GET['id']);
            }

            include "views/danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();

            include "views/danhmuc/list.php";
            break;

            /* controller sản phẩm*/

        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $tmp = $_FILES['hinh']['tmp_name'];




                move_uploaded_file($tmp, "../front/css/images/" . $img);


                // $tensp = $_POST['name'];
                // $img = $_FILES['img']['name'];
                // $tmp = $_FILES['img']['tmp_name'];
                // move_uploaded_file($tmp, "images/" . $img); 
                // $price = $_POST['price'];
                // $mota = $_POST['mota'];
                // $iddm = $_POST['iddm'];
                // $sql_insert = "insert into sanpham values(null,'$name','$img','$price','$mota','$iddm')";
                // $objInsert = $conn->prepare($sql_insert);
                // $objInsert->execute();

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "views/sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "views/sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }

            $listsanpham = loadall_sanpham("", 0);

            include "views/sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();

            include "views/sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                // $hinh=$_FILES['hinh']['name'];
                // $target_dir = "../upload/";
                // $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                // /* echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";*/
                // } else {
                // /* echo "Sorry, there was an error uploading your file.";*/
                // }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);

            include "views/sanpham/list.php";
            break;
        case 'dskh':

            $listtaikhoan = loadall_taikhoan();

            include "views/taikhoan/list.php";
            break;
        case 'dsbl':


            $listbinhluan = loadall_binhluan(0);

            include "views/binhluan/list.php";
            break;


        default:
            include "views/elements/home.php";
            break;
    }
} else {
    include "views/elements/home.php";
}



include "views/elements/footer.php";
