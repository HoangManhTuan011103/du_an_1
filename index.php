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
if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
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
        case 'detail_product':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $onepro_categories =  loadone_detail_product_flow_categories($id);
                $list_image_product = loadone_detail_product_flow_product_images($id);
                require_once "view/detail_product.php";
            } else {
                require_once "view/home.php";
            }

            break;
            // Đức làm đăng ký đăng nhập quên mật khẩu
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password = md5($password);
                $checkuser_success = CheckUser($email, $password);
                if (!is_array($checkuser_success)) {
                    $_SESSION['user'] = $checkuser_success;
                    $thongbao[0] = "Đăng nhập thất bại (kiểm tra lại email hoặc mật khẩu) !";
                } else {
                    $_SESSION['user'] = $checkuser_success;
                    $thongbao[0] = "Đăng nhập thành công !";
                    header("Location: index.php");
                    ob_end_flush();
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
                $image = 'https://raw.githubusercontent.com/ogdp/notepad/95bf9e262c8f72bd2184dfd51d650296b740b99b/profile_user_default.png';
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

            // long cart 


        case "cart":
            require_once "./view/cart/giohang.php";
            break;
        case "addToCart":
            $temp = -1;
            if (isset($_POST['btn-addCart'])) {
                $id = $_POST['id'];
                $giagiam = $_POST['giagiam'];
                $product_quantity_input = $_POST['product_quantity_input'];
                $product_value = getOneProductFlowId($id);
                $product_value['use_quantity_buy'] = $product_quantity_input;
                $product_value['giagiam'] = $giagiam;


                foreach ($_SESSION['mycart'] as $key => $item) {
                    if ($id == $item['id']) {
                        $temp = $key;
                        break;
                    }
                }
                if ($temp == -1) {

                    $_SESSION['mycart'][] = $product_value;
                } else {
                    // nếu id của sp đã có trong giỏ hàng rồi
                    // lấy ra số index của sản phẩm bị trùng
                    // cập nhật số lượng quantity ++
                    $_SESSION['mycart'][$temp]['use_quantity_buy'] += $product_quantity_input;
                }

                echo "<script>window.location.href='index.php?act=cart';</script>";
            }

            // $_SESSION['mycart'] = [];

            require_once "./view/cart/giohang.php";

            break;
            // delete product cart
        case "delete_product_cart_byId":

            $id = $_GET['id'];
            unset($_SESSION['mycart'][$id]);
            // echo "<script>
            // window.location.href = 'index.php?act=cart';
            // </script>";
            require_once "./view/cart/giohang.php";

            break;
            // update quantity use by product
        case "update_quantity_products_Cart":
            $id = $_GET['id'];
            $type = $_GET['type'];
            if ($type == 'decre') {
                if ($_SESSION['mycart'][$id]['use_quantity_buy'] > 1) {

                    $_SESSION['mycart'][$id]['use_quantity_buy']--;
                } else {
                    unset($_SESSION['mycart'][$id]);
                }
            } else {
                $_SESSION['mycart'][$id]['use_quantity_buy']++;
            }
           
            require_once "./view/cart/giohang.php";

            break;

            //pay money 
        case "payMoneyProducts":
            if (!isset($_SESSION['user'])) {
                require_once "./view/dangnhap.php";
                exit;
            }
            else{
                require_once "./view/cart/pay_detail.php";
            }
            break;

        // Tiếp tục cho tối nay
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