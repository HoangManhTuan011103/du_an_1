<?php
    function insertToOrder($id,$delivery,$statusOrder,$totalPricePay,$note,$address,$dateToInt){
        $sql = "INSERT INTO `orders`(`user_id`, `payment`,`status`, `total_price`, `note`,`address`,`created_at`) VALUES ('$id','$delivery','$statusOrder','$totalPricePay','$note','$address','$dateToInt')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insertToOrderClient($id,$delivery,$totalPricePay,$note,$address,$dateToInt){
        $sql = "INSERT INTO `orders`(`user_id`, `payment`, `total_price`, `note`,`address`,`created_at`) VALUES ('$id','$delivery','$totalPricePay','$note','$address','$dateToInt')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insertToUserDirect($name,$email,$phone,$address,$role,$status){
        $sql = "INSERT INTO `users`(`name`, `email`, `phone`, `address`,`role`,`status`) VALUES ('$name','$email','$phone','$address','$role','$status')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insertToOrderDetail($order_id,$product_id,$quantity,$price_product){
        $sql = "INSERT INTO `orders_detail`(`order_id`, `product_id`, `quantity`, `price_product`) VALUES ('$order_id','$product_id','$quantity','$price_product')";
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
    function getInforOrderDirect($id){
        $sql = "SELECT B.`id`, B.`address`,B.`phone`,B.`name`,B.`email` FROM `orders` A LEFT JOIN `users` B ON A.user_id=B.id WHERE A.`id` = $id";
        return pdo_query_one($sql);
    }
    // Lấy đơn hàng bên phía Admin


?>