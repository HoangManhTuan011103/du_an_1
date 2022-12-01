<!-- Conttroller Quản trị -->

<?php
session_start();
if (isset($_SESSION['user'])  && ($_SESSION['user']['role'] == 1)) {
    ob_start();
    require_once "../global.php";
    require_once "../model/pdo.php";
    require_once "../model/model-user.php";
    require_once "../model/model-product.php";
    require_once "../model/model-category.php";
    require_once "../model/model-order.php";

    // Đang nối file như này để nó hiện ra giao diện 
    // Phần này do tôi thiết kế giao diện admin không có footer nên để như này là chuẩn rồi nhé
    // Giờ chỉ việc chỉnh code vào thôi nhé
    // Có gì các chức năng khác làm sau
    // Làm cái gì thì cứ comment tên người làm lại ở đầu và cuối chức năng
    // Comment thêm tên chức năng nữa nhé
    // Các trang khác làm tương tự vì nó có file html ở đó rồi
    require_once "./header.php";
    if (isset($_GET['actAdmin'])) {
        $actAdmin = $_GET['actAdmin'];
        switch ($actAdmin) {

                // long code categories
            case 'addCategory':
                if (isset($_POST['btn--addProduct'])) {
                    // status 
                    // 0 là hiển thị 
                    // 1 là ẩn 
                    $name = $_POST['name'];
                    $status = $_POST['status'];
                    $avatar = uniqid()  . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], "../imageProduct/" . $avatar);
                    category_insert($name, $avatar, $status);
                    $notification = "Thêm danh mục thành công";
                }
                $listdm = getAllCategories();
                require_once "./categories/add.php";
                break;

            case 'listCategories':
                $listdm = getAllCategories();
                require_once "./categories/list.php";
                break;
            case 'deleteCategory':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deleteAllImageProductFlowCategory($id);
                    deleteProductFlowCategory($id);
                    category_delete($id);

                    $notification = "Xóa danh mục thành công";
                }
                $listdm = getAllCategories();
                require_once "./categories/list.php";
                break;
            case 'editCategories';
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $detailDm = category_select($id);
                }
                require_once "./categories/edit.php";
                break;
            case 'updateCategory';
                if (isset($_POST['btn-editProduct'])) {
                    $name = $_POST['name'];
                    $avatar_new = $_FILES['avatar_new'];
                    $avatar = uniqid()  . $avatar_new['name'];
                    $status = $_POST['status'];
                    $id = $_POST['id'];
                    if ($avatar_new['size'] > 0) {
                        move_uploaded_file($avatar_new['tmp_name'], "../imageProduct/" . $avatar);
                    } else {
                        $avatar = $_POST['avatar_old'];
                    }
                    category_update($id, $name, $avatar, $status);
                    $notification = "Bạn đã chỉnh sửa danh mục thành công";
                }
                $listdm = getAllCategories();
                require_once "./categories/list.php";
                break;
                // long code categories

                // products
            case 'deleteProduct':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    // Update total product
                    $getIdCategory = getIdCategoryUpdateCount($id);
                    // Update total product
                    productDeleteAllImage($id);
                    productDelete($id);
                    reduceProductFollowCat($getIdCategory);
                    // Update total product
                    $notification = "Xóa sản phẩm thành công";
                }
                $listProduct = getAllProduct();
                require_once "./products/list.php";
                break;
            case 'addProduct':
                if (isset($_POST['btn--addProduct'])) {
                    $name = $_POST['nameProduct'];
                    $file = $_FILES['image'];
                    $name_image = $file['name'];
                    $files = $_FILES['images'];
                    $description = $_POST['description'];
                    $category = $_POST['category'];
                    $price = $_POST['price'];
                    $discount = $_POST['discount'];
                    $quantity = $_POST['quantity'];
                    $status = $_POST['status'];
                    $hotProduct = (isset($_POST['hotProduct']) ? 1 : 0);
                    foreach ($files['name'] as $key => $value) {
                        $tmp_name = $files['tmp_name'][$key];
                        move_uploaded_file($tmp_name, "../imageProduct/" . $value);
                    }
                    move_uploaded_file($file['tmp_name'], "../imageProduct/" . $file['name']);
                    $idProduct = InsertProduct($name, $category, $name_image, $description, $quantity, $price, $discount, $hotProduct, $status);
                    // Update total product
                    countProductFollowCat($category);
                    // Update total product
                    foreach ($files['name'] as $value) {
                        pdo_execute("INSERT INTO `product_images`(`product_id`, `images`) VALUES ('$idProduct','$value')");
                    }
                    setcookie("notification", "Thêm sản phẩm thành công", time() + 1);
                    header("location: index.php?actAdmin=showProduct");
                }
                $listCategories = getAllCategories();
                require_once "./products/add.php";
                break;
            case 'editProduct':
                $id = isset($_GET['id']) ? $_GET['id'] : "";
                if ($id > 0 && is_numeric($id)) {
                    $detailProduct = getProductFollowId($id);
                    $listCategories = getAllCategories();
                    $listImagesProduct = getProductAllImage($id);
                }
                require_once "./products/edit.php";
                break;
            case 'updateProduct':
                if (isset($_POST['btn--updateProduct'])) {
                    $idProduct = $_POST['idProduct'];
                    $avatarProduct = getAvatarProduct($idProduct);
                    $file = $_FILES['image'];
                    $files = $_FILES['images'];
                    $avatar = $avatarProduct['avatar'];
                    if ($file['error'] == 0) {
                        if ($avatarProduct["avatar"] != "" && file_exists("../imageProduct/" . $avatarProduct["avatar"])) {
                            unlink("../imageProduct/" . $avatarProduct["avatar"]);
                        }
                        $dir_uploads = "../imageProduct/";
                        if (!file_exists($dir_uploads)) {
                            mkdir($dir_uploads);
                        }
                        $avatar = time() . "-" . $file['name'];
                        move_uploaded_file($file['tmp_name'], $dir_uploads . $avatar);
                    }

                    if (!empty($files['name'][0])) {
                        $result = getProductAllImage($idProduct);
                        for ($i = 0; $i < count($result); $i++) {
                            if ($result[$i]["images"] != "" && file_exists("../imageProduct/" . $result[$i]["images"])) {
                                unlink("../imageProduct/" . $result[$i]["images"]);
                            }
                        }
                        productDeleteAllImage($idProduct);
                    }
                    for ($i = 0; $i < count($files["name"]); $i++) {
                        if ($files["error"][$i] == 0) {
                            $files_insert = time() . '-' . $files["name"][$i];
                            $is_insert = pdo_execute("INSERT INTO `product_images`(`product_id`, `images`) VALUES ('$idProduct','$files_insert')");
                            $dir_uploads = '../imageProduct/';
                            if (!file_exists($dir_uploads)) {
                                mkdir($dir_uploads);
                            }
                            move_uploaded_file($files['tmp_name'][$i], $dir_uploads . $files_insert);
                        }
                    }
                    $name = $_POST['nameProduct'];
                    $description = $_POST['description'];
                    $category = $_POST['category'];
                    $price = $_POST['price'];
                    $discount = $_POST['discount'];
                    $quantity = $_POST['quantity'];
                    $status = $_POST['status'];
                    $hotProduct = (isset($_POST['hotProduct']) ? 1 : 0);

                    updateProduct($name, $category, $avatar, $description, $quantity, $price, $discount, $hotProduct, $idProduct, $status);
                    // Start fix error here (Completed)
                    $idCateNew = getIdCategoryUpdateCount($idProduct);
                    $idCateOld = $_POST['categoryCLone'];
                    $totalCurrent = getTotalProductCat($idCateNew);
                    $totalUpđate = getTotalProductCat2($idCateNew);
                    if ($totalCurrent != $totalUpđate) {
                        countProductFollowCat($idCateNew);
                        reduceProductFollowCat($idCateOld);
                    }
                    // End fix error here (Completed)
                    // $notification = "Bạn đã thay đổi sản phẩm thành công";
                    setcookie("notification", "Thay đổi sản phẩm thành công", time() + 1);
                    header("location: index.php?actAdmin=showProduct");
                }
                $listProduct = getAllProduct();
                $listCategories = getAllCategories();
                require_once "./products/list.php";
                break;
            case 'deleteProduct':
                $id = isset($_GET['id']) ? $_GET['id'] : "";
                if ($id > 0 && is_numeric($id)) {
                    productDeleteAllImage($id);
                    productDelete($id);
                    $notification = "Xóa sản phẩm thành công";
                    header("location: index.php?actAdmin=showProduct");
                    exit;
                }
                // $listProduct = getAllProduct();
                // require_once "./products/list.php";
                break;
            case 'showProduct':
                $listProduct = getAllProduct();
                require_once "./products/list.php";
                break;
            case 'showOrder':
                $listOrderUser = getAllOrderToAdmin();
                require_once "./orders/list.php";
                break;
            case 'deleteOrder':
                $id = isset($_GET['id']) ? $_GET['id'] : "";
                if ($id > 0 && is_numeric($id)) {
                    deleteOrderDetailToAdmin($id);
                    deleteOrderToAdmin($id);
                    $notification = "Xóa đơn hàng thành công";
                }
                $listOrderUser = getAllOrderToAdmin();
                require_once "./orders/list.php";
                break;
            case "detailOrder":
                $id = isset($_GET['id']) ? $_GET['id'] : "";
                if ($id > 0 && is_numeric($id)) {
                    $listOrderAdmin = getOrderAdmin($id);
                }
                require_once "./orders/detailOrder.php";
                break;
                // Đức - Quản lý người dùng
            case 'showUsers':
                $listUser = getAllUser();
                require_once "./users/list.php";
                break;
            case 'SearchUsers':
                $kyw = $_POST['kyw'];
                $listUser = SearchUser($kyw);
                require_once "./users/list.php";
                break;
            case 'addUser':
                if (isset($_POST['btn--addUser'])) {
                    $name = $_POST['name'];
                    $image = $_FILES['image'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $status = $_POST['status'];
                    $role = $_POST['role'];
                    $NameurlImage = $image['name'];
                    $pathImage = $image['tmp_name'];
                    $target_file = "UserAvt/" . $NameurlImage;
                    move_uploaded_file($pathImage, $target_file);

                    $check = true;
                    if ($name == "") {
                        $thongbao[0] = "Tên không được bỏ trống !!!";
                        $check = false;
                    } else if (is_numeric($name) || (strlen($name) < 2)) {
                        $thongbao[0] = "Tên không phải là số , tối thiểu 2 ký tự !";
                        $check = false;
                    }
                    if ($image['size'] <= 0) {
                        $thongbao[1] = "Vui lòng chọn hình ảnh cho người dùng !!!";
                        $check = false;
                    } else {
                        $NameurlImage = $image['name'];
                        $ext = pathinfo($NameurlImage, PATHINFO_EXTENSION);
                        if ($ext != 'gif' && $ext != 'jpeg' && $ext != 'png' && $ext != 'jpg') {
                            $thongbao[1] = "Sai định dạng ảnh(png,jpg,jpeg,gif)";
                            $check = false;
                        } else {
                            $pathImage = $image['tmp_name'];
                            $target_file = "UserAvt/" . $NameurlImage;
                            move_uploaded_file($pathImage, $target_file);
                        }
                    }
                    if ($email == "") {
                        $thongbao[2] = "Email không được bỏ trống !!!";
                        $check = false;
                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $thongbao[2] = "Email không đúng định dạng";
                        $check = false;
                    }
                    if ($password == "") {
                        $thongbao[3] = "Mật khẩu không được bỏ trống !!!";
                        $check = false;
                    } else if ((strlen($password) < 8)) {
                        $thongbao[3] = "Mật khẩu tối thiểu 8 ký tự !";
                        $check = false;
                    }
                    $password = md5($password);
                    if ($phone == '') {
                        $thongbao[4] = "Điện thoại không được bỏ trống !!!";
                        $check = false;
                    } else if (!is_numeric($phone)) {
                        $thongbao[4] = "Điện thoại phải là số !!!";
                        $check = false;
                    } else if (strlen($phone) != 10) {
                        $thongbao[4] = "Điện thoại phải đủ 10 số !!!";
                        $check = false;
                    }
                    if ($address == "") {
                        $thongbao[5] = "Địa chỉ không được bỏ trống !!!";
                        $check = false;
                    } else if (is_numeric($address) || (strlen($address) < 6)) {
                        $thongbao[5] = "Địa chỉ không phải là số , tối thiểu 6 ký tự !";
                        $check = false;
                    }
                    if ($status == "") {
                        $thongbao[6] = "Trạng thái không được bỏ trống !!!";
                        $check = false;
                    }
                    if ($role == "") {
                        $thongbao[7] = "Quyền không được bỏ trống !!!";
                        $check = false;
                    }
                    if ($check == true) {
                        InsertUser2($name, $email, $password, $phone, $address, $NameurlImage, $status, $role);
                        header('Location: index.php?actAdmin=showUsers&&msg=Thêm người thành công !');
                        ob_end_flush();
                    }
                }
                require_once "./users/add.php";
                break;
            case 'editUser':
                $id = $_GET['id'];
                $infoUser = getUserFollowId($id);
                if (isset($_POST['btn--editUser'])) {
                    if (is_array($infoUser)) {
                        extract($infoUser);
                    }
                    $id = $_GET['id'];
                    $name_update = $_POST['name'];
                    $email_update = $_POST['email'];
                    $password_update = $_POST['password'];
                    $phone_update = $_POST['phone'];
                    $address_update = $_POST['address'];
                    $image = $_FILES['image'];
                    $status_update = $_POST['status'];
                    $role_update = $_POST['role'];
                    if ($password_update != $password) {
                        $password_update = md5($password_update);
                    }
                    if($image['size'] <= 0){
                        $NameurlImage = $_POST['image_old'];
                    }else{
                        $NameurlImage = $image['name'];
                        $pathImage = $image['tmp_name'];
                        $target_file = "UserAvt/" . $NameurlImage;
                        move_uploaded_file($pathImage, $target_file);
                    }
                    UpdatetUser($name_update, $email_update, $password_update, $phone_update, $address_update, $NameurlImage, $status_update, $role_update, $id);
                    header('Location: index.php?actAdmin=showUsers&&msg=Cập nhật thành công !');
                    ob_end_flush();
                }
                require_once "./users/edit.php";
                break;
            case 'deleteUser':
                $id = $_GET['id'];
                if (isset($id) && $id != "") {
                    UserDelete($id);
                    $notification = "Xóa tài khoản thành công !";
                    $listUser = getAllUser();
                    require_once "./users/list.php";
                }
                break;
            case 'dangxuat':
                session_destroy();
                header("Location: ../index.php?act=dangnhap");
                break;
            default:
                require_once "";
                break;
        }
    } else {
        require_once "./home.php";
    }
} else {
    header('Location: ../index.php?act=dangnhap');
    ob_end_flush();
}
?>