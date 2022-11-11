<?php
 function InsertUser($name,$email,$password,$phone,$address,$image,$role){
    $sql = "INSERT INTO `users`(`name`, `email`, `password`, `phone`, `address`, `image`, `role`) VALUES ('$name','$email','$password','$phone','$address','$image','$role')";
    return pdo_execute_return_lastInsertId($sql);
}
function CheckUser($email,$password){
    $sql = "SELECT * FROM users WHERE email='$email' AND `password`='$password';";
    $info =  pdo_query_one($sql);
    return $info;
}
function CheckEmail($email){
    $sql = "SELECT * FROM users WHERE email='$email'";
    $info =  pdo_query_one($sql);
    return $info;
}
