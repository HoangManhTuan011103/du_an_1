<div class="contentManager contentManager--product">
            <div class="contentManager--product__header">
                <div class="contentManager--product__header--title">
                    <h2 style="color: #ffffff;">Danh sách đơn hàng</h2>
                    <form action="" method="post">
                        <input type="text" placeholder="Nhập từ khóa cần tìm kiếm">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-cart-flatbed-suitcase"></i>Quản lý đơn hàng</span>
                </div>
            </div>
            <div class="contentManager--product__footer">
                <?php if(isset($notification)): ?>
                    <div class="alert alert-success">
                        <?= $notification ?>
                    </div>
                <?php endif; ?>
                <div class="contentManager--product__footer--table">
                    <table border="1" class="orderAdminTable">
                        <thead>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Chi tiết đơn hàng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($listOrderUser as $key => $value): ?>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><?= $key+ 1 ?></td>
                                    <td>DH00<?= $value['id'] ?></td>
                                    <td class="name"><?= $value['name'] ?></td>
                                    <td class="price">
                                        <?= number_format($value['total_price'])."đ" ?>
                                    </td>
                                    <td class="status order-status">
                                        <?php if($value['status'] == 0): ?>
                                            <button class="status-isset">Đơn hàng mới</button>
                                        <?php elseif($value['status'] == 1): ?>
                                            <button class="status-isset" style="background-color: #24448f;">Đơn đã duyệt</button>
                                            
                                        <?php endif; ?>
                                        <?php if($value['status'] == 0): ?>
                                            <div class="tick--Order">
                                                <p style="color: #ffffff;">Duyệt đơn mới</p>
                                                <a href="index.php?actAdmin=updateOrderAdmin&&status=1&&id=<?= $value['id'] ?>">
                                                    <i class="fa-solid fa-check"></i>
                                                </a>
                                            </div>
                                        <?php elseif($value['status'] == 1): ?>
                                            <div class="tick--Order">
                                                <p style="color: #ffffff;">Hủy duyệt đơn</p>
                                                <a href="index.php?actAdmin=updateOrderAdmin&&status=0&&id=<?= $value['id'] ?>">
                                                    <i class="fa-solid fa-xmark" style="color: #24448f;"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        
                                    </td>
                                    <td class="dateCreate">
                                        <?= $value['created_at'] ?>
                                    </td>
                                    <td class="detailBill">
                                        <a href="index.php?actAdmin=detailOrder&&id=<?= $value['id'] ?>"><button class="detailBill--see"><i class="fa-solid fa-eye" style="padding-right: 5px;" ></i>Xem chi tiết</button></a>
                                    </td>
                                    <td class="btn-action">
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng DH00<?= $value['id'] ?> không')" href="index.php?actAdmin=deleteOrder&id=<?= $value['id'] ?>"><button><i class="fa-sharp fa-solid fa-trash"></i></button></a>
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