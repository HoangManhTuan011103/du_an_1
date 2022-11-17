<!-- Conttroller khách hàng -->
<?php
ob_start();
session_start();
require_once "./global.php";
require_once "./model/pdo.php";
require_once "./model/model-user.php";
require_once "./model/model-product.php";
require_once "./model/model-category.php";
$pronew = loadall_product_home();
// Ai làm bên này có giao diện người dùng thì tự động thêm vào
// Làm cái gì thì cứ comment tên người làm lại ở đầu và cuối chức năng
// Comment thêm tên chức năng nữa nhé
$protop8 =  loadtop8_product_home();
$protop16 = loadtop16_product_home();
$protop4 = loadtop4_product_home();
$dsdm = loadall_category();
$load2dm = load2_category();
$load3dm = load3_category();
require_once "view/header.php";
if (isset($_GET['act'])) {
    $actAdmin = $_GET['act'];
    switch ($actAdmin) {
            // Hiệp làm showProducts
        case 'showProducts':
            require_once "view/showProducts.php";
            break;
        case 'showCategoriess':
            require_once "";
            break;
            // Đức làm đăng ký đăng nhập quên mật khẩu
        case 'dangnhap':
            if (isset($_POST['dangnhap']) == true) {
                $email_login = $_POST['email_login'];
                $password = $_POST['password'];
                $check = true;
                if ($email_login == "") {
                    $thongbao[1] = "Email không được bỏ trống !";
                    $check = false;
                } else if (!filter_var($email_login, FILTER_VALIDATE_EMAIL)) {
                    $thongbao[1] = "Email sai định dạng VD: duc@abc.xyz !";
                    $check = false;
                }
                if ($password == "") {
                    $thongbao[2] = "Mật khẩu không được bỏ trống !";
                    $check = false;
                } else if (strlen($password) < 6) {
                    $thongbao[2] = "Mật khẩu tối thiểu 6 ký tự";
                    $check = false;
                }
                $password = md5($password);
                $checkuser_success = CheckUser($email_login, $password);
                if ($check == true) {
                    if (is_array($checkuser_success)) {
                        if (($checkuser_success['status'] == 1)) {
                            $thongbao[0] = "Tài khoản của bạn đã bị vô hiệu hóa liên hệ admin để được hỗ trợ !";
                        } else {
                            $_SESSION['user'] = $checkuser_success;
                            $thongbao[0] = "Đăng nhập thành công !";
                            header("Location: index.php");
                            ob_end_flush();
                        }
                    } else {
                        $thongbao[0] = "Sai email hoặc mật khẩu !";
                    }
                }
            }
            if (isset($_POST['quenmatkhau']) == true) {
                $email = $_POST['email'];
                if ($email == "") {
                    $thongbao[3] = "Vui lòng nhập email";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $thongbao[3] = "Email sai định dạng VD: duc@abc.xyz !";
                } else {
                    $check_email = CheckEmail($email);
                    if (is_array($check_email)) {
                        $thongbao[3] = 'Mật khẩu của bạn là: ' . $check_email['password'];
                    } else {
                        $thongbao[3] = 'Email ' . $email . ' không tồn tại';
                    }
                }
            }
            if (isset($_SESSION['user'])) {
                header("Location: index.php?");
            } else {
                require_once "./view/dangnhap.php";
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky'])) {
                $check = true;
                $checkemail_tontai = true;
                $ho = $_POST['ho'];
                $ten = $_POST['ten'];
                $name = $ho . ' ' . $ten;
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = '';
                $address = '';
                $image = '';
                $role = 0;
                // Vaidate form đăng ký
                if ($ho == "") {
                    $thongbao[1] = "Họ không được bỏ trống !!!";
                    $check = false;
                } else if (is_numeric($ho) || (strlen($ho) < 2)) {
                    $thongbao[1] = "Họ không phải là số , tối thiểu 2 ký tự !";
                    $_POST['ho'] = "";
                    $check = false;
                }
                if ($ten == "") {
                    $thongbao[2] = "Tên không được bỏ trống !!!";
                    $check = false;
                } else if (is_numeric($ten) || (strlen($ten) < 2)) {
                    $thongbao[2] = "Tên không phải là số , tối thiểu 2 ký tự !";
                    $_POST['ten'] = "";
                    $check = false;
                }
                if ($email == "") {
                    $thongbao[5] = "Email không được bỏ trống !!!";
                    $check = false;
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $thongbao[5] = "Email không đúng định dạng";
                    $_POST['ten'] = "";
                    $check = false;
                }
                if ($password == "") {
                    $thongbao[3] = "Mật khẩu không được bỏ trống !!!";
                    $check = false;
                } else if ((mb_strlen($password) < 6)) {
                    $thongbao[3] = "Mật khẩu tối thiểu 6 ký tự !";
                    $check = false;
                }
                $checkmail_dangky = CheckEmail($email);
                if (is_array($checkmail_dangky)) {
                    echo '<style> .form_validate_dangky{display: none !important;}</style>';
                    $_POST['ho'] = "";
                    $_POST['ten'] = "";
                    $_POST['email'] = "";
                    $thongbao[4] = "Email đã tồn tại đăng nhập để mua hàng !";
                    $checkemail_tontai = false;
                }
                if ($check == true && $checkemail_tontai == true) {
                    $thongbao[0] = "Đăng ký thành công !";
                    $_POST['ho'] = "";
                    $_POST['ten'] = "";
                    $_POST['email'] = "";
                    $email = convert_vi_to_en($email);
                    $email = strtolower($email);
                    $password = convert_vi_to_en($password);
                    $password = strtolower($password);
                    $password = preg_replace('/\s+/', '', $password);
                    $password = md5($password);
                    InsertUser($name, $email, $password, $phone, $address, $image, $role);
                    header("Location: index.php?act=dangnhap&msg=Tạo tài khoản thành công !!!");
                    ob_end_flush();
                }
            }
            if (isset($_SESSION['user'])) {
                header("Location: index.php?");
            } else {
                require_once "view/dangky.php";
            }
            break;
        case 'dangxuat':
            session_destroy();
            header("Location: index.php?&msg=Đã đăng xuất !!!");
            break;
        default:
            // require_once "";
            break;
    }
} else {
    require_once "view/home.php"; // Show giao diện người dùng ( Trang chủ  )
}
//  Show giao diện người dùng ( Footer )
require_once "view/footer.php";
?>