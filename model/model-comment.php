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

function total_comment_id_product($id)
{
    $sql = "SELECT COUNT(product_id) as total_comment_id_product ,SUM(rating_products) total FROM `comments_product` WHERE product_id=$id";
    return pdo_query_one($sql);
}
