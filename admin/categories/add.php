<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProduct Page</title>
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/css/productAdmin.css">
    <link rel="stylesheet" href="../../src/css/categoryAdmin.css">
    <link rel="stylesheet" href="../../src/css/comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Start navigation left -->
        <nav class="navigationRow">
            <div class="featuresRow">
                <div class="titlePageAdmin">
                    <div class="logoBrand">
                        <!-- <a href=""><img src="src/image/FSport.png" alt=""></a> -->
                        <a href=""><img src="../../src/image/FSport1.png" alt=""></a>
                        <a href="" class="hiddenImage"><img src="../../src/image/FSport2.png" alt=""></a>
                    </div>
                </div>
                <div class="spaceLogoBrand">
                    <div class="menuShowIcon">
                        <div class="Iconlabel">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                    <div class="accountAdmin row">
                        <div class="avatarAdmin row">
                            <img src="../../src/image/avatar.jpg" alt="">
                        </div>
                        <div class="nameAdmin row">
                            Hoàng Mạnh Tuấn
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navigationColumn">
            <!-- Navigation First -->
            <div class="listMainFirst">
                <div class="accountAdmin accountAdmin--canHidden">
                    <div class="avatarAdmin">
                        <img src="../../src/image/avatar.jpg" alt="">
                    </div>
                    <div class="nameAdmin nameAdmin--navLeft">
                        Hoàng Mạnh Tuấn
                        <div class="statusAdmin">
                            <div></div>
                            <p>Online</p>
                        </div>
                    </div>
                </div>
                <div class="titleList">
                    <h2>Danh sách chức năng</h2>
                </div>
                <nav class="navigationListFisrt">
                    <ul>
                        <li>
                            <a href="index.html"><i class="fa-solid fa-house"></i></a>
                            <a href="index.html" class="canHidden">Trang chủ</a>
                        </li>
                        <li>
                            <a href="product.html"><i class="fa-brands fa-product-hunt"></i></a>
                            <a href="product.html" class="canHidden">Quản lý sản phẩm</a>
                        </li>
                        <li>
                            <a href="list.php"><i class="fa-solid fa-book-atlas"></i></a>
                            <a href="list.php" class="canHidden">Quản lý danh mục</a>
                        </li>
                        <li>
                            <a href="bill.html"><i class="fa-solid fa-cart-flatbed-suitcase"></i></a>
                            <a href="bill.html" class="canHidden">Quản lý đơn hàng</a>
                        </li>
                        <li>
                            <a href="user.html"><i class="fa-solid fa-user"></i></a>
                            <a href="user.html" class="canHidden">Quản lý người dùng</a>
                        </li>
                        <li>
                            <a href="comment.html"><i class="fa-solid fa-comment"></i></a>
                            <a href="comment.html" class="canHidden">Quản lý bình luận</a>
                        </li>
                        <li>
                            <a href="statistical.html"><i class="fa-solid fa-database"></i></a>
                            <a href="statistical.html" class="canHidden">Thống kê báo cáo</a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            <a href="" class="canHidden">Đăng xuất</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Navigation First -->
        </nav>
        <!-- End navigation left -->
        <div class="contentManager contentManager--product">
            <div class="contentManager--product__header">
                <div class="contentManager--product__header--title">
                    <h2 style="color: #ffffff;">Thêm danh mục mới</h2>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-book-atlas"></i>Quản lý danh mục</span><span style="padding: 0 10px; font-size: 22px;">></span> <span>Thêm danh mục mới</span>
                </div>
            </div>
            <div class="contentManager--product__footer contentManager--product__footer--addProduct">
                <form action="../index.php?actAdmin=addCategory" method="post" enctype="multipart/form-data">
                    <div class="form--left form--category">
                        <div class="name">
                            <p>Tên danh mục:</p>
                            <input class="name" style=" background-color: #000000;" type="text" name="name" placeholder="Nhập tên sản phẩm...">
                        </div>
                        <div class="status">
                            <p>Trạng thái</p>
                            <select name="status" id="">
                                <option value="" hidden>-- Trạng thái hiển thị --</option>
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn đi</option>
                            </select>
                        </div>
                        <div class="btn__action btn__action--addProduct">
                            <button type="submit" class="btn--addProduct" name="btn--addProduct">Thêm danh mục</button>
                            <a href=""><button>Quay lại</button></a>
                        </div>
                    </div>
                    <?php
                    if (isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <script src="../../src/js/animation.js"></script>
</body>

</html>
