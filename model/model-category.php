
<?php
function getAllCategories()
{
    $sql = "select * from categories";
    return pdo_query($sql);
}
function category_selectAllDesc()
{
    $sql = "select products.quantity  as quantity_prodcut , categories.* from categories join products on products.category_id = categories.id order by id desc";
    
    return pdo_query($sql);
}

// Insert data
function category_insert($ten_loai, $avatar, $status)
{
    $sql = "insert into categories(name,avatar,status) values(?,?,?)";
    pdo_execute($sql, $ten_loai, $avatar, $status);
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
function category_update($id, $name, $avatar, $status)
{
    $sql = "update categories set name='$name',avatar='$avatar',status='$status' where id=$id";

    pdo_execute($sql);
}
//Hiệp load all danh mục
function loadall_category()
{
    $sql = "select * from categories order by id desc  ";
    $listcategory = pdo_query($sql);
    return $listcategory;
}
function load2_category()
{
    $sql = "select * from categories order by id desc  limit 0,2";
    $listcategory = pdo_query($sql);
    return $listcategory;
}
function load3_category()
{
    $sql = "select * from categories order by id asc  limit 0,3";
    $listcategory = pdo_query($sql);
    return $listcategory;
}
?>
