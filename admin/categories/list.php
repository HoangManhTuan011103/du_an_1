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
            <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-brands fa-product-hunt"></i>Quản lý danh mục</span>
        </div>
    </div>
    <div class="contentManager--product__footer">
        <div class="contentManager--product__footer--addProduct">
            <a href="index.php?actAdmin=addCategory"><button><i class="fa-solid fa-plus"></i> Thêm danh mục mới</button></a>
        </div>
        <?php if (isset($notification)) : ?>
            <div class="alert alert-success">
                <?= $notification ?>
            </div>
        <?php endif ?>
        <div class="contentManager--product__footer--table">
            <table border="1">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>STT</th>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Ảnh danh mục</th>
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
                            <td class="name">
                                <img style="width: 100px;" src="../imageProduct/<?= $category['avatar'] ?>" alt="">
                            </td>

                            <td class="status">
                                <?php
                                    if( $category['status'] == 0 ){
                                        echo "<button class='status-isset'>Active</button>";
                                        
                                    }else{
                                        echo " <button class='status-empty'>Disable</button>";
                                    }
                                ?>
                            </td>
                            <td><?= $category['total_product'] ?></td>
                            <td class="dateCreate">
                                <?= $category['created_at'] ?>
                            </td>
                            <td class="btn-action">
                                <a href="index.php?actAdmin=editCategories&id=<?= $category['id'] ?>">
                                    <button style="margin-right: 5px;"><i class="fa-solid fa-screwdriver"></i></button></a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục <?= $category['name'] ?> không?')" href="index.php?actAdmin=deleteCategory&id=<?= $category['id'] ?>">
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
<script src="../src/js/animation.js"></script>
</body>

</html>