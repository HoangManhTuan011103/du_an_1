<div class="contentManager contentManager--product">
    <div class="contentManager--product__header">
        <div class="contentManager--product__header--title">
            <h2 style="color: #ffffff;">Danh sách người dùng</h2>
            <form action="index.php?actAdmin=SearchUsers" method="post" enctype="multipart/form-data">
                <input type="text" name="kyw" placeholder="Nhập từ khóa cần tìm kiếm">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="contentManager--product__header--control">
            <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-brands fa-product-hunt"></i>Quản lý người dùng</span>
        </div>
    </div>
    <div class="contentManager--product__footer">
        <div class="contentManager--product__footer--addProduct">
            <a href="index.php?actAdmin=addUser"><button><i class="fa-solid fa-plus"></i> Thêm người dùng mới</button></a>
        </div>
        <?php if (isset($notification)) : ?>
            <div class="alert alert-success">
                <?= $notification ?>
            </div>
        <?php endif ?>
        <?php if (isset($_GET['msg'])) : ?>
            <div class="alert alert-success">
                <?= $_GET['msg'] ?>
            </div>
        <?php endif ?>
        <div class="contentManager--product__footer--table">
            <table border="1">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Vai trò</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listUser as $key => $value) : ?>
                        <?php
                        $imagePath = "../imageProduct/" . $value['image'];
                        if (is_file($imagePath)) {
                            $image = "<img src='" . $imagePath . "' alt='' width='120px' height='150px'>";
                        } else {
                            $image = "<h4 style='color: #ffffff' >Không có hình ảnh</h4>";
                        }
                        ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><?= $key + 1 ?></td>
                            <td>KH00<?= $value['id'] ?></td>
                            <td class="name"><?= $value['name'] ?></td>
                            <td class="image">
                                <?= $image ?>
                            </td>
                            <td class="category">
                                <?= $value['email'] ?>
                            </td>
                            <td class="quantity">
                                <?= $value['phone'] ?>
                            </td>
                            <td class="dateCreate">
                                <?= $value['address'] ?>
                            </td>

                            <td class="status">
                                <?php
                                if ($value['status'] == 0) {
                                    echo "<button class='status-isset'>Active</button>";
                                } else {
                                    echo " <button class='status-empty'>Disable</button>";
                                }
                                ?>
                            </td>
                            <td class="status user">
                                <?php
                                if ($value['role'] == 0) {
                                    echo "<button class='status-isset'>Người dùng</button>";
                                } else {
                                    echo " <button class='status-empty'>Quản trị</button>";
                                }
                                ?>
                            </td>
                            <td class="dateCreate">
                                <?= $value['created_at'] ?>
                            </td>
                            <td class="btn-action">
                                <a href="index.php?actAdmin=editUser&id=<?= $value['id'] ?>">
                                    <button style="margin-right: 5px;"><i class="fa-solid fa-screwdriver"></i></button>
                                </a>
                                <a onclick="return confirm(`Bạn có chắc chắn muốn xóa  '<?= $value['name'] ?>' `)" href="index.php?actAdmin=deleteUser&&id=<?= $value['id'] ?>">
                                    <button><i class="fa-sharp fa-solid fa-trash"></i></button>
                                </a>
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