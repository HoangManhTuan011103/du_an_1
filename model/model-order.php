<?php
    function insertToOrder($id,$delivery,$statusOrder,$totalPricePay,$note,$address,$dateToInt){
        $sql = "INSERT INTO `orders`(`user_id`, `payment`,`status`, `total_price`, `note`,`address`,`created_at`) VALUES ('$id','$delivery','$statusOrder','$totalPricePay','$note','$address','$dateToInt')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function UpdateToOrder($id,$payWhen,$statusOrder,$totalPricePay,$note,$address){
        $sql = "UPDATE `orders` SET `payment`='$payWhen',`status`='$statusOrder',`total_price`='$totalPricePay',`note`='$note',`address`='$address' WHERE id=$id";
        pdo_execute($sql);
    }
    function deleteUpdateOrderAdmin($id){
        $sql = "DELETE FROM `orders_detail` WHERE id=$id";
        pdo_execute($sql);
    }
    function deleteUpdateOrderAdmin2($id){
        $sql = "DELETE FROM `orders_detail` WHERE order_id=$id";
        pdo_execute($sql);
    }
    function selectIdOrderDetail($order_id){
        $sql = "SELECT `id` FROM `orders_detail` WHERE order_id=$order_id";
        return pdo_query_one($sql);
    }
    function insertToOrderClient($id,$delivery,$totalPricePay,$note,$address,$dateToInt){
        $sql = "INSERT INTO `orders`(`user_id`, `payment`, `total_price`, `note`,`address`,`created_at`) VALUES ('$id','$delivery','$totalPricePay','$note','$address','$dateToInt')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insertToUserDirect($name,$email,$phone,$address,$role,$status){
        $sql = "INSERT INTO `users`(`name`, `email`, `phone`, `address`,`role`,`status`) VALUES ('$name','$email','$phone','$address','$role','$status')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function UpdateToUserDirect($idUser,$name,$email,$phone,$address,$role,$status){
        $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address',`role`='$role',`status`='$status' WHERE id=$idUser";
        pdo_execute($sql);
    }
    function insertToOrderDetail($order_id,$product_id,$quantity,$price_product){
        $sql = "INSERT INTO `orders_detail`(`order_id`, `product_id`, `quantity`, `price_product`) VALUES ('$order_id','$product_id','$quantity','$price_product')";
        pdo_execute($sql);
    }
    function updateToOrderDetail($order_id,$product_id,$quantity,$price_product){
        $sql = "UPDATE `orders_detail` SET `product_id`='$product_id',`quantity`='$quantity',`price_product`='$price_product' WHERE order_id=$order_id";
        pdo_execute($sql);
    }
    function getYourOrder($id){
        $sql = "SELECT `id`, `user_id`, `payment`, `status`, `total_price`, `note`, `address`, `created_at` FROM `orders` WHERE user_id=$id order by id desc";
        return pdo_query($sql);
    }
    // Lấy đơn hàng bên phía Admin
    function getAllOrderToAdmin(){
        $sql = "SELECT A.`id`,B.`status` as `statusUser`,B.`name`, A.`status`, A.`total_price`, A.`address`, A.`created_at` FROM `orders` A INNER JOIN `users` B ON A.user_id=B.id where 1 order by id desc";
        return pdo_query($sql);
    }
    function deleteOrderToAdmin($id){
        $sql = "DELETE FROM `orders` WHERE id=$id";
        pdo_execute($sql);
    }
    function countOrderWithUser($id){
        $sql = "SELECT COUNT(*) as 'quantityOrder' FROM `orders` WHERE user_id = $id";
        return pdo_query_value($sql);
    }
    function deleteOrderDetailToAdmin($id){
        $sql = "DELETE FROM `orders_detail` WHERE order_id=$id";
        pdo_execute($sql);
    }
    function getDeltailPaySuccess($id){
        $sql = "SELECT B.id,B.avatar,A.quantity,A.price_product, B.name FROM `orders_detail` A INNER JOIN `products` B ON A.product_id=B.id where A.order_id=$id ";
        return pdo_query($sql);
    }
    // Get detail order unspecified
    function getDeltailPaySuccessUnspecified($id){
        $sql = "SELECT B.id_product,B.avatar,A.quantity,A.price_product, B.name_product FROM `unspecified_orders_detail` A INNER JOIN `unspecified_products` B ON A.product_id=B.id_product where A.order_id=$id ";
        return pdo_query($sql);
    }
    // Get detail order unspecified

    function getAllDetailOrderAdmin($id){
        $sql = "SELECT B.id,B.avatar,A.quantity,A.price_product, B.name FROM `orders_detail` A INNER JOIN `products` B ON A.product_id=B.id where A.order_id=$id ";
        return pdo_query($sql);
    }
    function getOrderAdmin($id){
        $sql = "SELECT A.`id`, A.`user_id`,`B`.`name`,  A.`payment`, A.`status`, A.`total_price`, A.`note`, A.`address`, A.`created_at` FROM `orders` A INNER JOIN `users` B ON A.user_id=B.id WHERE A.id=$id";
        return pdo_query_one($sql);
    }
    function tickOrderAdmin($id,$status){
        $sql = "UPDATE `orders` SET `status`='$status' WHERE `id`=$id";
        pdo_execute($sql);
    }
    function getOrderDirectU($id){
        $sql = "SELECT A.`product_id`, A.`quantity`, A.`price_product`, B.`avatar`, B.`name` FROM `orders_detail` A INNER JOIN `products` B ON A.product_id=B.id WHERE A.order_id=$id";
        return pdo_query($sql);
    }
    function getOneProductFlowIdUx($id)
    {
        $sql = "select id as `product_id`, avatar, name from products where id=$id";
        return pdo_query_one($sql);
    }
    function getInforOrderDirect($id){
        $sql = "SELECT B.`id`, B.`address`,B.`phone`,B.`name`,B.`email` FROM `orders` A LEFT JOIN `users` B ON A.user_id=B.id WHERE A.`id` = $id";
        return pdo_query_one($sql);
    }
    // Lấy đơn hàng bên phía Admin


?>