<?php
    // require_once "./pdo.php";
    function InsertProduct($name,$category,$name_image,$description,$quantity,$price,$discount,$hotProduct,$status){
        $sql = "INSERT INTO `products`(`name`, `category_id`, `avatar`, `description`, `quantity`, `price`, `discount`, `hot_product`,`status`) VALUES ('$name','$category','$name_image','$description','$quantity','$price','$discount','$hotProduct','$status')";
        return pdo_execute_return_lastInsertId($sql);
    }
<<<<<<< HEAD
    function updateProduct($name,$category,$name_image,$description,$quantity,$price,$discount,$hotProduct,$id,$status){
        $sql = "UPDATE `products` SET `name`='$name', `category_id`='$category', `avatar`='$name_image', `description`='$description', `quantity`='$quantity', `price`='$price', `discount`='$discount', `hot_product`='$hotProduct', `status`='$status' WHERE id=$id";
        pdo_execute($sql);
    }
=======
>>>>>>> 99efdee83abd8543deae965f26977ad2cfa6fa41
    function getAllProduct(){
        $sql = "select A.id, A.name as 'nameProduct', A.avatar, A.description, A.quantity, A.price, A.discount, A.status, A.hot_product, A.created_at,B.name from products A INNER JOIN categories B ON A.category_id = B.id";
        return pdo_query($sql);
    }
    function productDelete($id){
        $sql="delete from products where id=$id";
        pdo_execute($sql,$id);
        
    }
    function productDeleteAllImage($id){
        $sql="delete from product_images where product_id=$id";
        pdo_execute($sql,$id);
    }
?>