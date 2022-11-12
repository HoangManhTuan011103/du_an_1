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
    $dsdm= loadall_category();
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
            if (isset($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                CheckUser($email, $password);
                $checkuser_success = CheckUser($email, $password);
                if (!is_array($checkuser_success)) {
                    $thongbao[0] = "Đăng nhập thất bại (kiểm tra lại email hoặc mật khẩu) !";
                } else {
                    $thongbao[0] = "Đăng nhập thành công !";
                    header("Location: index.php");
                    ob_end_flush();
                    //echo "<script>window.location.href='target.php';</script>";
                }
            }
            if (isset($_POST['quenmatkhau'])) {
                $email = $_POST['email'];
                if ($email == "") {
                    $thongbao[1] = "Vui lòng nhập email";
                } else {
                    $check_email = CheckEmail($email);
                    if (is_array($check_email)) {
                        $thongbao[1] = 'Mật khẩu của bạn là: ' . $check_email['password'];
                    } else {
                        $thongbao[1] = 'Email ' . $email . ' không tồn tại';
                    }
                }
            }
            require_once "./view/dangnhap.php";
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
                $image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/512px-User_font_awesome.svg.png?20160212005950';
                $role = 0;
                // Vaidate form đăng ký
                if (is_numeric($ho) || (strlen($ho) < 2)) {
                    $thongbao[1] = "Họ không phải là số , tối thiểu 2 ký tự !";
                    $_POST['ho'] = "";
                    $check = false;
                }
                if (is_numeric($ten) || (strlen($ten) < 2)) {
                    $thongbao[2] = "Tên không phải là số , tối thiểu 2 ký tự !";
                    $_POST['ten'] = "";
                    $check = false;
                }
                if ((strlen($password) < 6)) {
                    $thongbao[3] = "Mật khẩu tối thiểu 6 ký tự !";
                    $check = false;
                }
                $checkmail_dangky = CheckEmail($email);
                if (is_array($checkmail_dangky)) {
                    echo '
                    <style>
                        .form_validate_dangky{
                            display: none !important;
                        }
                    </style>
                    ';
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
                    InsertUser($name, $email, $password, $phone, $address, $image, $role);
                }
            }
            require_once "view/dangky.php";
            break;
        default:
            require_once "";
            break;
    }
} else {
    require_once "view/home.php"; // Show giao diện người dùng ( Trang chủ  )
}
//  Show giao diện người dùng ( Footer )
require_once "view/footer.php";
?>