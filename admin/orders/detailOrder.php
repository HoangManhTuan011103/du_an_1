<div class="contentManager contentManager--product">
            <div class="contentManager--product__header">
                <div class="contentManager--product__header--title">
                    <h2 style="color: #ffffff;">Chi tiết đơn hàng mã: DH00<?= $listOrderAdmin['id'] ?></h2>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-cart-flatbed-suitcase"></i>Quản lý đơn hàng</span><span style="padding: 0 10px; font-size: 22px;">></span><span>Chi tiết đơn hàng </span>
                </div>
            </div>
            <div class="contentManager--product__footer contentManager--product__footer--addProduct">
                <div class="show--detailOrderAdmin">
                    <div class="title__show--detailOrderAdmin">
                        <h3>Mã khách hàng: <span>KH00<?= $listOrderAdmin['user_id'] ?></span></h3>
                        <h3>Tên khách hàng: <span><?= $listOrderAdmin['name'] ?></span></h3>
                        <h3>Tổng đơn: <span><?= number_format($listOrderAdmin['total_price'])."đ"?></span></h3>
                        <h3>Ghi chú: <span><?= $listOrderAdmin['note'] ?></span></h3>
                        <h3>Địa chỉ: <span><?= $listOrderAdmin['address'] ?></span></h3>
                        <h3>Ngày đặt hàng: <span><?= $listOrderAdmin['created_at'] ?></span></h3>
                        <h3>PT thanh toán: <span><?= $listOrderAdmin['payment'] == 0 ? "Thanh toán khi nhận hàng" : "" ?></span></h3>
                        <h3>Trạng thái đơn: <span><?= $listOrderAdmin['status'] == 0 ? "Đơn hàng mới" : "" ?></span></h3>
                        <a href="index.php?actAdmin=showOrder"><button>Quay Lại</button></a>
                    </div>
                    <div class="table__detailOrdered">
                        <?php
                            $detailPayS = getDeltailPaySuccess($listOrderAdmin['id']);
                        ?>
                        <table border="1">
                            <tr>
                                <th>TT</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng</th>
                            </tr>
                            <?php foreach($detailPayS as $key => $valueDetail): ?>
                                <?php
                                    $imagePath = "../imageProduct/" . $valueDetail['avatar'];
                                    $image = "<img width='120px' height='120px' src='" . $imagePath . "' alt=''>";
                                ?>
                                <tr>
                                    <td><?= $key+1 ?></td>
                                    <td>SP00<?= $valueDetail['id'] ?></td>
                                    <td><?= $valueDetail['name'] ?></td>
                                    <td class="image"><?= $image ?></td>
                                    <td><?= $valueDetail['quantity'] ?></td>
                                    <td><?= number_format($valueDetail['price_product'])."đ" ?></td>
                                    <td><?= number_format($valueDetail['quantity']*$valueDetail['price_product'])."đ" ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../src/js/animation.js"></script>
</body>

</html>