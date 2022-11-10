<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/css/productAdmin.css">
    <link rel="stylesheet" href="../../src/css/categoryAdmin.css">
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
                    <h2 style="color: #ffffff;">Danh sách danh mục</h2>
                    <form action="" method="post">
                        <input type="text" placeholder="Nhập từ khóa cần tìm kiếm">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-book-atlas"></i>Quản lý danh mục</span>
                </div>
            </div>
            <div class="contentManager--product__footer">
                <div class="contentManager--product__footer--addProduct">
                    <a href="index.php?actAdmin=addCategory"><button><i class="fa-solid fa-plus"></i> Thêm danh mục mới</button></a>
                </div>
                <div class="contentManager--product__footer--table">
                    <table border="1">
                        <thead>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>STT</th>
                                <th>Mã danh mục</th>
                                <th>Tên danh mục</th>
                                <th>Trạng thái</th>
                                <th>Số lượng sản phẩm</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($listdm as $key => $category) :

                            ?>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><?= $key + 1 ?></td>
                                    <td>DM00<?= $category['id'] ?></td>
                                    <td class="name"><?= $category['name'] ?></td>
                                    <td class="status">
                                        <button class="status-isset"><?= ($category['status'] ==0) ?'Hiển thị':'Ẩn đi' ?></button>
                                    </td>
                                    <td><?= $category['total_product'] ?></td>
                                    <td class="dateCreate">
                                        <?= $category['created_at'] ?>
                                    </td>
                                    <td class="btn-action">
                                        <a href="index.php?actAdmin=suadm&id=<?= $category['id'] ?>">
                                            <button style="margin-right: 5px;"><i class="fa-solid fa-screwdriver"></i></button></a>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục <?= $category['name'] ?> không?')" href="index.php?actAdmin=xoadm&id=<?= $category['id'] ?>">
                                            <button><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <ul>
                        <li>
                            <a href=""><i class="fa-sharp fa-solid fa-angles-left"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-angle-left"></i></a>
                        </li>
                        <li><a href="" style="background-color: #F39C12; color: #ffffff;">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li>
                            <a href=""><i class="fa-solid fa-angle-right"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-sharp fa-solid fa-angles-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="../../src/js/animation.js"></script>
</body>

</html>
