<!-- Conttroller Quản trị -->

<?php
session_start();
require_once "../global.php";
require_once "../model/pdo.php";
require_once "../model/model-product.php";
require_once "../model/model-category.php";
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
                $avatar =uniqid()  . $_FILES['avatar']['name'];
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
                $avatar =uniqid()  . $avatar_new['name'];
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
                $notification = "Thêm sản phẩm thành công";
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
                        // $product_images_model->product_id = $id; // Chỗ này
                        $files_insert = time() . '-' . $files["name"][$i];
                        // $product_images_model->avatar = $avatars_insert; // Chỗ này
                        $is_insert = pdo_execute("INSERT INTO `product_images`(`product_id`, `images`) VALUES ('$idProduct','$files_insert')");; // Chỗ này

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
                $notification = "Bạn đã thay đổi sản phẩm thành công";
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
            }
            $listProduct = getAllProduct();
            require_once "./products/list.php";
            break;
        case 'showProduct':
            $listProduct = getAllProduct();
            require_once "./products/list.php";
            break;
        default:
            require_once "";
            break;
    }
} else {
    require_once "./home.php";
}

?>