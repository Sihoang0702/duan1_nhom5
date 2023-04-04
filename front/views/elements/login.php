<?php
session_start();
include_once "../../../db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    $sql = "SELECT * From taikhoan where user = '$user', pass ='$pass' and role ='$role'";
    $objAcc = $conn->query($sql);
    if ($objAcc->rowCount() == 1) {
        $_SESSION['user'] = $user;
        if ($role == 1) {
            header("Location:../../../admin");
        } else {
            echo "Bạn không phải admin!";
        }
    } else {
        echo "ko đăng nhập được";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="" method="POST">
                        <h1>Đăng nhập</h1>
                        <div>
                            <input type="text" class="form-control" name="user" placeholder="Username" />
                            <!-- <span style="color: red"><?php echo (isset($thongbao['email']) ? ($thongbao['email']) : '') ?></span> -->
                        </div>
                        <div>
                            <input type="password" class="form-control" name="pass" placeholder="Password" />
                        </div>
                        <div>
                            <input type="submit" value="Login" name="submitLogin" class="btn btn-default submit">
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form action="" method="POST">
                        <h1>Create Account</h1>
                        <h3 style="color: red;">
                            <?php echo isset($_GET['mess']) ? $_GET['mess'] : ''; ?>
                        </h3>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name="name" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" name="email" />
                        </div>
                        <!-- <div>
                            <input class="form-control" type="file" placeholder="chọn ảnh" id="formFile" name="file">
                        </div> -->
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="pass" />
                        </div>
                        <div>
                            <input type="submit" value="Register" name="submitRegister" class="btn btn-default submit">
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>