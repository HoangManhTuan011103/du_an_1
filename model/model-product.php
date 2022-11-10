<?php
    // require_once "./pdo.php";
    function InsertProduct($name,$category,$name_image,$description,$quantity,$price,$discount,$hotProduct){
        $sql = "INSERT INTO `products`(`name`, `category_id`, `avatar`, `description`, `quantity`, `price`, `discount`, `hot_product`) VALUES ('$name','$category','$name_image','$description','$quantity','$price','$discount','$hotProduct')";
        return pdo_execute_return_lastInsertId($sql);
    }
?>