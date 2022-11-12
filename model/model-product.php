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

function getAllProduct()
{
    $sql = "select A.id, A.name as 'nameProduct', A.avatar, A.description, A.quantity, A.price, A.discount, A.status, A.hot_product, A.created_at,B.name from products A INNER JOIN categories B ON A.category_id = B.id";
    return pdo_query($sql);
}
function productDelete($id)
{
    $sql = "delete from products where id=$id";
    pdo_execute($sql, $id);
}
function productDeleteAllImage($id)
{
    $sql = "delete from product_images where product_id=$id";
    pdo_execute($sql, $id);
}
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

    $convert_int= (int)$id_cagtegory;
    $id =  selectAllImageProductFlowCategory($convert_int);
    foreach ($id as $value) {
    extract($value);
    // echo($convert_int);
    var_dump($value);
    var_dump($id);
    // die;
    $sql = "delete from product_images where product_id =$id ";
    pdo_execute($sql);

    }
}
  // Hiệp hiện thị top 5 sản phẩm mới nhất
  function loadall_product_home(){
    $sql = "select * from products where 1 order by id desc limit 0,5";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// hiện thị top 8 sản phẩm mới nhất
function loadtop8_product_home(){
    $sql = "select * from products where 1 order by id desc limit 0,8";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
// hiện thị top 4 sản phẩm cu nhat
function loadtop4_product_home(){
    $sql = "select * from products where 1 order by id asc limit 0,4";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
 // hiện thị top 16 sản phẩm mới nhất
 function loadtop16_product_home(){
    $sql = "select * from products where 1 order by id desc limit 0,16";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
?>