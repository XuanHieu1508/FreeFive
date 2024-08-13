<?php   
include "model/pdo.php";
include "view/header.php";
include "global.php";
if ((isset($_GET['act']) && ($_GET['act']) != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if (isset($_POST['register'])) {
                
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_user($email, $user, $pass);
                $thongbao = "Đã đăng kí thành công vui lòng đăng nhập để sử dụng hệ thống";
            }
            include "user/dangki.php";
            break;
        case 'dangnhap':
            if (isset($_POST['login'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    header('Location: home.php');
                    // $thongbao = "Đã đăng nhập thành công";
                } else {
                    $thongbao = "Thông tin đăng nhập tài khoản hoặc mật khẩu không chính xác";
                }
            }
                include "user/dangnhap.php";
                break;
        }
    }else {
        include "view/home.php";
    }
    include "view/footer.php";

?>