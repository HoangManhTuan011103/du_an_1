<?php
// require_once "./pdo.php";
function InsertProduct($name, $category, $name_image, $description, $quantity, $price, $discount, $hotProduct, $status)
{
    $sql = "INSERT INTO `products`(`name`, `category_id`, `avatar`, `description`, `quantity`, `price`, `discount`, `hot_product`,`status`) VALUES ('$name','$category','$name_image','$description','$quantity','$price','$discount','$hotProduct','$status')";
    return pdo_execute_return_lastInsertId($sql);
}

function updateProduct($name, $category, $name_image, $description, $quantity, $price, $discount, $hotProduct, $id, $status)
{
    $sql = "UPDATE `products` SET `name`='$name', `category_id`='$category', `avatar`='$name_image', `description`='$description', `quantity`='$quantity', `price`='$price', `discount`='$discount', `hot_product`='$hotProduct', `status`='$status' WHERE id=$id";
    pdo_execute($sql);
}

// Delete product Admin
function productDelete($id)
{
    $sql = "delete from products where id=$id";
    pdo_execute($sql);
}
function productDeleteAllImage($id)
{
    $sql = "delete from product_images where product_id=$id";
    pdo_execute($sql);
}
function productDeletecomment($id)
{
    $sql = "delete from comments_product where product_id=$id";
    pdo_execute($sql);
}
function productDeleteDetailProduct($id)
{
    $sql = "delete from orders_detail where product_id=$id";
    pdo_execute($sql);
}
// Delete product Admin

function getProductFollowId($id)
{
    $sql = "select A.id, A.name as 'nameProduct', A.avatar, A.description, A.quantity, A.price, A.discount, A.status, A.hot_product, A.created_at,B.id as 'idCategory',B.name from products A INNER JOIN categories B ON A.category_id = B.id where A.id=$id";
    return pdo_query_one($sql);
}
function getProductAllImage($id)
{
    $sql = "select images from product_images where product_id=$id";
    return pdo_query($sql);
}
function getAvatarProduct($id)
{
    $sql = "select avatar from products where id=$id";
    return pdo_query_one($sql);
}

function deleteProductFlowCategory($id)
{
    $sql = "delete from products where category_id =$id ";
    pdo_execute($sql);
}
function selectAllImageProductFlowCategory($id_cagtegory)
{
    $sql = "select A.id from products A LEFT JOIN product_images B on A.id=B.product_id where A.category_id=$id_cagtegory ";
    return pdo_query($sql);
}

function deleteAllImageProductFlowCategory($id_cagtegory)
{

    $convert_int = (int)$id_cagtegory;
    $id =  selectAllImageProductFlowCategory($convert_int);
    foreach ($id as $value) {
        extract($value);
        $sql = "delete from product_images where product_id =$id ";
        pdo_execute($sql);
    }
}
// Update product total in category
function getIdCategoryUpdateCount($id)
{
    $sql = "SELECT B.`id` FROM products A INNER JOIN categories B ON A.category_id=B.id WHERE A.id=$id";
    return pdo_query_value($sql);
}
function countProductFollowCat($id)
{
    $sql = "UPDATE `categories` SET `total_product`=`total_product`+1 WHERE id=$id";
    pdo_execute($sql);
}
function reduceProductFollowCat($id)
{
    $sql = "UPDATE `categories` SET `total_product`=`total_product`-1 WHERE id=$id";
    pdo_execute($sql);
}
function getTotalProductCat($idCategory)
{
    $sql = "SELECT COUNT(B.id) as 'countProduct' FROM `categories` A INNER JOIN `products` B ON A.id=B.category_id WHERE A.id = $idCategory";
    return pdo_query_one($sql);
}
function getTotalProductCat2($idCategory)
{
    $sql = "SELECT total_product FROM `categories` WHERE id = $idCategory";
    return pdo_query_one($sql);
}

// Update product total in category
// Hiệp hiện thị top 5 sản phẩm mới nhất
function loadall_product_home()
{
    $sql = "select * from products where status = 0 order by id desc limit 0,5 ";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// hiện thị top 8 sản phẩm mới nhất
function loadtop8_product_home()
{
    $sql = "select * from products where status = 0 order by id desc limit 0,8 ";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// hiện thị top 4 sản phẩm cu nhat
function loadtop4_product_home()
{
    $sql = "select * from products where status = 0 order by id asc limit 0,4";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// hiện thị top 16 sản phẩm mới nhất
//  load all sản phẩm theo danh mục
function loadall_product($kyw = "", $cagtegory_id = 0)
{
    $sql = "select * from products where status = 0";

    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($cagtegory_id > 0) {
        $sql .= " and category_id ='" . $cagtegory_id . "'";
    }
    $sql .= " order by id desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product_fromproducs()
{
    $sql = "select * from products where status = 0";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// load tên danh mục
function load_name_category($id)
{
    if ($id > 0) {
        $sql = "select * from categories where id=" . $id;
        $category = pdo_query_one($sql);
        extract($category);
        return $name;
    } else {
        return "";
    }
}

// hiện thị 1 sản phẩm
function loadone_detail_product_flow_categories($id)
{
    $sql = "SELECT A.*,b.name as name_category, b.id as id_category FROM products A JOIN categories b on A.category_id=b.id where A.id=$id";
    $pro = pdo_query_one($sql);
    return $pro;
}
function loadone_detail_product_flow_product_images($id)
{
    $sql = "SELECT c.images FROM products B JOIN product_images c on B.id=c.product_id where B.id=$id";
    $pro = pdo_query($sql);
    return $pro;
}


// lấy 1 sản phẩm theo id 
function getOneProductFlowId($id)
{
    $sql = "select id,name,quantity,avatar,price, discount from products  where id=$id";
    return pdo_query_one($sql);
}

// Panigation Product In PHP Admin
function get_Page_Product_admin($keyWord, $nameCaterory ,$rowsProductAdmin)
{
    $sql = "select A.id, A.name as 'nameProduct', A.avatar, A.description, A.quantity, A.price, A.discount, A.status, A.hot_product, A.created_at,B.name from products A INNER JOIN categories B ON A.category_id = B.id where 1 ";
    if ($keyWord != "") {
        $sql .= " and A.name like '%$keyWord%'";
    }
    if($nameCaterory != ""){
        $sql .= " and A.category_id like '%$nameCaterory%'";
    }
    $sql .= " order by A.id desc";
    $numberPage = pdo_query($sql);
    $countPage = sizeof($numberPage) / $rowsProductAdmin;
    return $countPage;
}
function getAllProduct($keyWord,$nameCaterory, $rowsProductAdmin)
{
    $countPage = get_Page_Product_admin($keyWord,$nameCaterory ,$rowsProductAdmin);
    if (isset($_GET['page']) &&  $_GET['page'] > 0 && $_GET['page'] <= $countPage + 1) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $from = ($page - 1) * $rowsProductAdmin;
    $sql = "select A.id, A.name as 'nameProduct', A.avatar, A.description, A.quantity, A.price, A.discount, A.status, A.hot_product, A.created_at,B.name from products A INNER JOIN categories B ON A.category_id = B.id where 1";
    if ($keyWord != "") {
        $sql .= " and A.name like '%$keyWord%'";
    }
    if($nameCaterory != ""){
        $sql .= " and A.category_id like '%$nameCaterory%'";
    }
    $sql .= " order by A.id desc limit $from,$rowsProductAdmin";
    return pdo_query($sql);
}

// Bên bảng Thêm mới đơn
// function getProductOrderAdmin(){
//     $sql = "SELECT `name`, `category_id`, `avatar`, `quantity`, `price`, `discount`, `status`, `hot_product`, `comment_total`, `rating_total`, `amount_views`, `created_at`, `updated_at` FROM `products` WHERE 1"
// }
function get_Page_Product_admin_order($keyWord,$rowsProductAdmin){
    $sql = "select A.id, A.name as 'nameProduct', A.avatar, A.description, A.quantity, A.price, A.discount, A.status, A.hot_product, A.created_at,B.name from products A INNER JOIN categories B ON A.category_id = B.id where A.status = 0 and A.quantity > 0 ";
    if($keyWord != ""){
        $sql .= " and A.name like '%$keyWord%'";
    }
    $sql .= " order by A.id desc";
    $numberPage = pdo_query($sql);
    $countPage = sizeof($numberPage) / $rowsProductAdmin;
    return $countPage;
}
function getAllProduct_order($keyWord,$rowsProductAdmin)
{
    $countPage = get_Page_Product_admin_order($keyWord,$rowsProductAdmin);
    if(isset($_GET['page']) &&  $_GET['page'] > 0 && $_GET['page'] <= $countPage+1 ){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    $from = ($page - 1) * $rowsProductAdmin;
    $sql = "select A.id, A.name as 'nameProduct', A.avatar, A.description, A.quantity, A.price, A.discount, A.status, A.hot_product, A.created_at,B.name from products A INNER JOIN categories B ON A.category_id = B.id where A.status = 0 and A.quantity > 0 ";
    if($keyWord != ""){
        $sql .= " and A.name like '%$keyWord%'";
    }
    $sql .= " order by A.id desc limit $from,$rowsProductAdmin";
    return pdo_query($sql);
}
// Bên bảng Thêm mới đơn

// Panigation In PHP Admin

function fillter_price_desc()
{
    $sql = " SELECT * FROM `products` ORDER BY price DESC";
    return pdo_query($sql);
}
function fillter_created_at_desc()
{
    $sql = " SELECT * FROM `products` ORDER BY created_at DESC";
    return pdo_query($sql);
}
function fillter_create_at_asc()
{
    $sql = " SELECT * FROM `products` ORDER BY created_at ";
    return pdo_query($sql);
}
function fillter_price_asc()
{
    $sql = " SELECT * FROM `products` ORDER BY price ";
    return pdo_query($sql);
}

// Insert Product to unspecified

function selectUnspecifiedOrderDetail($id){
    $sql = "SELECT * FROM `orders_detail` WHERE product_id=$id";
    return pdo_query($sql);
}
function selectUnspecifiedProduct($id){
    $sql = "SELECT * FROM `products` WHERE id=$id";
    return pdo_query($sql);
}
function insertUnspecifiedOrderDetail($order_id,$product_id,$quantity,$price_product){
    $sql = "INSERT INTO `unspecified_orders_detail`(`order_id`, `product_id`, `quantity`, `price_product`) VALUES ('$order_id','$product_id','$quantity','$price_product')";
    pdo_execute($sql);
}
function insertUnspecifiedProduct($id_product,$name_product,$avatar,$price_product,$id_category){
    $sql = "INSERT INTO `unspecified_products`(`id_product`, `name_product`, `avatar`, `price_product`, `id_category`) VALUES ('$id_product','$name_product','$avatar','$price_product','$id_category')";
    pdo_execute($sql);
}
// Insert Product to unspecified
