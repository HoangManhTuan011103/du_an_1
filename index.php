<!-- Conttroller khách hàng -->

<?php
    session_start();
    require_once "./global.php";
    require_once "./model/pdo.php";
    // Ai làm bên này có giao diện người dùng thì tự động thêm vào
    // Làm cái gì thì cứ comment tên người làm lại ở đầu và cuối chức năng
    // Comment thêm tên chức năng nữa nhé
    require_once "./header.php";
    if(isset($_GET['act'])){
        $actAdmin = $_GET['act'];
        switch($actAdmin){
            case 'showProducts':
                require_once "";
                break;
            case 'showCategoriess':
                require_once "";
                break;
            default:
                require_once "";
                break;
        }
    }else{
        require_once ""; // Show giao diện người dùng ( Trang chủ  )
    }
    //  Show giao diện người dùng ( Footer )
    require_once "";
?>
