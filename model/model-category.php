<?php 
    function getAllCategories(){
        $sql = "select * from categories";
        return pdo_query($sql);
    }
?>