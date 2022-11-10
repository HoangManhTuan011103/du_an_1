<?php 
    function getAllCategories(){
        $sql = "select * from categories";
        return pdo_query($sql);
    }
    function category_soluong()
    {
        $sql = "select * from categories";
        return pdo_query($sql);
    }
    function category_selectAll()
    {
        $sql = "select * from categories order by id desc";
        return pdo_query($sql);
    }
    // Insert data
    function category_insert($ten_loai, $status)
    {
        $sql = "insert into categories(name,status) values(?,?)";
        pdo_execute($sql, $ten_loai, $status);
    }
    // Delete data
    function category_delete($ma_loai)
    {
        $sql = "delete from categories where id=?";
        pdo_execute($sql, $ma_loai);
    }
    // Select a data
    function category_select($ma_loai)
    {
        $sql = "select * from categories where id=?";
        return pdo_query_one($sql, $ma_loai);
    }
    //Update data
    function category_update($id, $name, $status)
    {
        $sql = "update categories set name='$name',status='$status' where id=$id";

        pdo_execute($sql);
    }
  ?>
