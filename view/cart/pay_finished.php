<section class="grid wide your--order">
    <div class="link--yourOder">
        <ul>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">></a></li>
            <li><a href="" style="color: red;">Danh sách đơn hàng</a></li>
        </ul>
    </div>
    <div class="detail--yourOrder">
        <div class="title__detail--yourOrder">
            <h2>Danh sách đơn hàng</h2>
        </div>
        <div class="title__detail--yourOrder">
            <h3>Xin chào <span style="color: red; font-size:18px;"><?= $_SESSION['user']['name'] ?></span>, đây là đơn hàng của bạn:</h3>
        </div>
        <div class="table__detail--yourOrder">
            <table border="1">
                <tr>
                    <th>Đơn hàng</th>
                    <th>Ngày</th>
                    <th>Địa chỉ</th>
                    <th>Giá trị đơn hàng</th>
                    <th>PT thanh toán</th>
                    <th>Thao tác</th>
                </tr>
                <?php if(count($listYourOrder) > 0): ?>
                    <?php foreach($listYourOrder as $value): ?>
                        <tr>
                            <td>DH00<?= $value['id'] ?></td>
                            <td><?= $value['created_at'] ?></td>
                            <td><?= $value['address'] ?></td>
                            <td><?= number_format($value['total_price'])."đ" ?></td>
                            <td ><?= $value['payment']==0 ? "Thanh toán khi nhận hàng" : "" ?></td>
                            <td>
                                <a href=""><button class="btnSee__detail--yourOrder">Xem chi tiết</button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td style="padding: 20px 0;" colspan="6">Không có đơn hàng nào</td>
                    </tr>
                <?php endif; ?>

            </table>
        </div>
    </div>
</section>