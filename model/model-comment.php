<?php

require_once 'pdo.php';

function comment_insert($product_id, $user_id, $content, $rating_products)
{
    $sql = "INSERT INTO `comments_product`( `product_id`, `user_id`, `content`, `rating_products`) 
    values('$product_id', '$user_id', '$content', '$rating_products') ";
    pdo_execute($sql);
}
function comment_update($id, $product_id, $user_id, $content, $rating_products)
{
    $sql = "UPDATE `comments_product` SET `product_id`='$product_id',`user_id`='$user_id',`content`='$content',`rating_products`='$rating_products', WHERE id=$id";
    pdo_execute($sql);
}
function comment_delete($id)
{
    $sql = "delete from comments_product where id=$id";
    pdo_execute($sql);
}
function comment_select_all()
{
    $sql = "select * from comments_product cm 
    order by created_at DESC
     ";
    return pdo_query($sql);
}
function comment_select_by_id($id)
{
    $sql = "select * from comments_product where id=$id";
    return pdo_query_one($sql);
}
function comment_exist($id)
{
    $sql = "select count(*) from comments_product where id=$id";
    return pdo_query_value($sql) > 0;
}
function comment_select_by_product($product_id)
{
    $sql = "select b.*,h.name from comments_product b join products h on h.id=b.product_id
    where b.product_id='$product_id' ORDER BY created_at";
    return pdo_query($sql);
}
function comment_select_by_users($product_id)
{
    $sql = "select comments_product.*,users.name as name_person_comment,users.image from comments_product join users  on comments_product.user_id=users.id  WHERE product_id ='$product_id' ORDER BY created_at";
    return pdo_query($sql);
}


function check_user_bying_product()
{
    $sql = "SELECT orders.user_id,dt.product_id,orders.created_at FROM `orders` JOIN orders_detail dt on orders.id=dt.order_id WHERE orders.status=1 ;";
    return pdo_query($sql);
}
function commented_getAllDetail($Pid){
    $sql = "SELECT * FROM comments_product WHERE product_id='$Pid' ORDER BY created_at DESC";
    return pdo_query($sql);
}
function commented_getAll(){
    $sql = "SELECT * FROM comments_product GROUP BY product_id ";
    return pdo_query($sql);
}
function commented_toUser($Uid,$Pid){
    $sql = "SELECT users.name AS NameUser,users.email AS EamilUser,comments_product.content AS ContentCmt,comments_product.created_at AS DateCmt,users.role AS RoleUser,comments_product.rating_products AS Evaluate, products.id AS Pid, products.name AS ProName, products.avatar AS Avt ,categories.name AS CatName FROM comments_product JOIN users ON '$Uid'=users.id JOIN products ON '$Pid'=products.id JOIN categories ON products.category_id=categories.id ";
    return pdo_query_one($sql);
}
function commented_sumRat($Pid){
    $sql = "SELECT SUM(rating_products) AS `sum` FROM comments_product WHERE product_id='$Pid'";
    return pdo_query_one($sql);
}
function commented_count($Pid){
    $sql = "SELECT COUNT(*) AS SL FROM comments_product WHERE product_id='$Pid'";
    return pdo_query($sql);
}
function total_comment_id_product($id)
{
    $sql = "SELECT COUNT(product_id) as total_comment_id_product ,SUM(rating_products) total FROM `comments_product` WHERE product_id=$id";
    return pdo_query_one($sql);
}
function check_count_comment_follow_user($id_product){
    $sql="SELECT COUNT(product_id) as total_comment_id_product,user_id ,SUM(rating_products) total FROM `comments_product` WHERE product_id=$id_product GROUP BY user_id";
    return pdo_query_one($sql);

}