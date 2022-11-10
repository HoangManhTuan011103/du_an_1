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
              // long code  danh mục
        case 'addCategory':
            if (isset($_POST['btn--addProduct'])) {
                // status 
                // 0 là hiển thị 
                // 1 là ẩn 
                $name = $_POST['name'];
                $status = $_POST['status'];
                $avatar = $_FILES['avatar']['name'];
                move_uploaded_file($_FILES['avatar']['tmp_name'],"../imageProduct/".$avatar);
                category_insert($name, $avatar, $status);
            }
            $listdm = category_selectAll();
            require_once "./categories/add.php";
            break;

        case 'listdm':
            $listdm = category_selectAll();
            require_once "./categories/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                category_delete($id);
            }
            $listdm = category_selectAll();
            require_once "./categories/list.php";
            break;
        case 'suadm';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $detailDm = category_select($id);
            }
            require_once "./categories/edit.php";
            break;
        case 'updatedm';
            if (isset($_POST['btn-editProduct'])) {
                $name = $_POST['name'];
                $avatar_new = $_FILES['avatar_new'];
                $avatar = $avatar_new['name'];
                $status = $_POST['status'];
                $id = $_POST['id'];
                if($avatar_new['size'] > 0){

                    move_uploaded_file($avatar_new['tmp_name'],"../imageProduct/".$avatar );
                }
                else{
                    $avatar=$_POST['avatar_old'];
                }
                category_update($id, $name,$avatar, $status);
            }
            $listdm = category_selectAll();
            require_once "./categories/list.php";
            break;
            //xong  Danh mục 
            
            
        case 'deleteProduct':
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $id = $_GET['id'];
                productDeleteAllImage($id);
                productDelete($id);
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
                $hotProduct = (isset($_POST['hotProduct']) ? 1 : 0);
                foreach ($files['name'] as $key => $value) {
                    $tmp_name = $files['tmp_name'][$key];
                    move_uploaded_file($tmp_name, "../imageProduct/" . $value);
                }
                move_uploaded_file($file['tmp_name'], "../imageProduct/" . $file['name']);
                $idProduct = InsertProduct($name, $category, $name_image, $description, $quantity, $price, $discount, $hotProduct);
                // var_dump($idProduct);
                // die();
                foreach ($files['name'] as $value) {
                    pdo_execute("INSERT INTO `product_images`(`product_id`, `images`) VALUES ('$idProduct','$value')");
                }
            }
            $listCategories = getAllCategories();
            require_once "./products/add.php";
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
