<!-- Conttroller Quản trị -->

<?php
    session_start();
    require_once "../global.php";
    require_once "../model/pdo.php";
    // Đang nối file như này để nó hiện ra giao diện 
    // Phần này do tôi thiết kế giao diện admin không có footer nên để như này là chuẩn rồi nhé
    // Giờ chỉ việc chỉnh code vào thôi nhé
    // Có gì các chức năng khác làm sau
    // Làm cái gì thì cứ comment tên người làm lại ở đầu và cuối chức năng
    // Comment thêm tên chức năng nữa nhé
    // Các trang khác làm tương tự vì nó có file html ở đó rồi
    require_once "./header.php";
    if(isset($_GET['actAdmin'])){
        $actAdmin = $_GET['actAdmin'];
        switch($actAdmin){
            case 'addCategory':
                require_once "";
                break;
            case 'addProduct':
                require_once "";
                break;
            default:
                require_once "";
                break;
        }
    }else{
        require_once "./home.php";
    }
    
?>