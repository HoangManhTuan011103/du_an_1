<div class="contentManager contentManager--product">
    <div class="contentManager--product__header">
        <div class="contentManager--product__header--title">
            <h2 style="color: #ffffff;">Thêm đơn hàng mới</h2>
            <form action="" method="post">
                <input type="text" placeholder="Nhập từ khóa cần tìm kiếm" name="keyWord" value="<?= $keyWord ?? "" ?>">
                <button type="submit" name="btn-search--Product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="contentManager--product__header--control">
            <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-cart-flatbed-suitcase"></i>Quản lý đơn hàng</span><span style="padding: 0 10px; font-size: 22px;">></span><span>Thêm đơn hàng mới</span>
        </div>
    </div>
    <div class="contentManager--product__footer ">

       
        <?php if (isset($notification)) : ?>
            <div class="alert alert-success">
                <?= $notification ?>
            </div>
        <?php endif ?>
        <div class="rule__shop_addProduct">
            <i class="fa-regular fa-circle-question" style="color: #ffffff; font-size: 22px; cursor: pointer; text-align: right;" >
                <div class="text_rule">
                    <section>
                        <h3>Quy định đổi trả tại Shop</h3>
                        <ol>
                            <li>Bạn có thể đổi sản phẩm trong vòng 03-07 ngày kể từ ngày mua sản phẩm. 
                            </li>
                            <li>Chính sách chỉ áp dụng đổi sản phẩm nguyên giá và chỉ được đổi 01 lần duy nhất.</li>
                            <li> Chính sách chỉ áp dụng khi sản phẩm còn hóa đơn mua hàng, còn nguyên nhãn mác, thẻ bài đính kèm sản phẩm và sản phẩm không bị dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua sản phẩm.
                            </li>
                            <li>
                            Chính sách không áp dụng đối với sản phẩm giảm giá hoặc đổi từ sản phẩm nguyên giá sang sản phẩm giảm giá, hoặc sản phẩm đang trong chương trình ưu đãi khác.
                            </li>
                            <li>
                            Sản phẩm nguyên giá mua tại cửa hàng chỉ được đổi trả tại cửa hàng cửa hàng đã mua.
                            </li>
                        </ol>
                    </section>
                </div>
            </i>
        </div>

        <div id="getData" class="contentManager--product__footer--table">
            <table border="1" class="addOrder--Admin">
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Tên danh mục</th>
                        <th>Giá</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listProduct as $key => $value) : ?>
                        <?php
                        $imagePath = "../imageProduct/" . $value['avatar'];
                        if (is_file($imagePath)) {
                            $image = "<img src='" . $imagePath . "' alt='' width='120px' height='150px'>";
                        } else {
                            $image = "<h4 style='color: #ffffff' >Không có hình ảnh</h4>";
                        }
                        ?>
                        <tr>
                            <td>SP00<?= $value['id'] ?></td>
                            <td class="name"><?= $value['nameProduct'] ?></td>
                            <td class="image">
                                <?= $image ?>
                            </td>
                            <td class="category">
                                <?= $value['name'] ?>
                            </td>
                            <td class="price">
                                <?= number_format($value['price'] - ($value['price'] * $value['discount'] / 100)) . "đ" ?>
                            </td>
                            <td class="addOrderNew">
                                <form action="index.php?actAdmin=addOrderAdmin" method="POST">
                                    <input type="hidden" name="idProductOrder" value="<?= $value['id'] ?>">
                                    <input type="hidden" name="nameProductOrder" value="<?= $value['nameProduct'] ?>">
                                    <input type="hidden" name="imageProductOrder" value="<?= $value['avatar'] ?>">
                                    <input type="hidden" name="priceProductOrder" value="<?= $value['price'] - ($value['price'] * $value['discount'] / 100) ?>">
                                    <input type="hidden" name="quantityProductOrder" value="1">
                                    <button type="submit" name="btn__addOrderAdmin"><i class="fa-solid fa-plus"></i>Thêm vào đơn</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <ul>
                <!-- Start Pagination -->
                <?php if (ceil($countPage) <= 1) {
                    $i = "";
                ?>
                <?php } else {
                    $i = 0;
                ?>
                    <?php if (isset($_GET['page']) && $_GET['page'] > 2) {
                        $fisrtPage = 1; ?>
                        <li><a href="index.php?actAdmin=addOrderAdmin&page=<?= $fisrtPage ?><?= isset($_REQUEST['keyWord']) ? "&keyWord=".$_REQUEST['keyWord'] : "" ?>"><i class="fa-sharp fa-solid fa-angles-left"></i></a></li>
                    <?php } ?>

                    <?php if (isset($_GET['page']) && $_GET['page'] > 1) {
                        $prevPage = $_GET['page'] - 1; ?>
                        <li><a href="index.php?actAdmin=addOrderAdmin&page=<?= $prevPage ?><?= isset($_REQUEST['keyWord']) ? "&keyWord=".$_REQUEST['keyWord'] : "" ?>"><i class="fa-solid fa-angle-left"></i></a></li>
                    <?php } ?>

                    <?php for ($i; $i < $countPage; $i++) : ?>
                        <?php if (isset($_GET['page'])) : ?>
                            <?php if ($i + 1 != $_GET['page']) : ?>
                                <?php if ($i + 1 > $_GET['page'] - 2 && $i + 1 < $_GET['page'] + 2) : ?>
                                    <li><a href="index.php?actAdmin=addOrderAdmin&page=<?= $i + 1 ?><?= isset($_REQUEST['keyWord']) ? "&keyWord=".$_REQUEST['keyWord'] : "" ?>"><?= $i + 1 ?></a></li>
                                <?php endif; ?>
                            <?php else : ?>
                                <li><a style="background-color: #F39C12; color: #ffffff" href="index.php?actAdmin=addOrderAdmin&page=<?= $i + 1 ?><?= isset($_REQUEST['keyWord']) ? "&keyWord=".$_REQUEST['keyWord'] : "" ?>"><?= $i + 1 ?></a></li>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php
                            if ($i + 1 == 1) {
                                $backGround = "style=background-color:";
                                $color = "#F39C12;";
                                $word = "color:";
                                $colorWord = "#ffffff";
                            } else {
                                $backGround = "";
                                $color = "";
                                $word = "";
                                $colorWord = "";
                            }
                            ?>
                            <?php if ($i < 4) : ?>
                                <li><a <?= $backGround . $color . $word . $colorWord ?> href="index.php?actAdmin=addOrderAdmin&page=<?= $i + 1 ?><?= isset($_REQUEST['keyWord']) ? "&keyWord=".$_REQUEST['keyWord'] : "" ?>"><?= $i + 1 ?></a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endfor ?>

                    <?php if (isset($_GET['page']) && $_GET['page'] < ceil($countPage)) {
                        $nextPage = $_GET['page'] + 1; ?>
                        <li><a href="index.php?actAdmin=addOrderAdmin&page=<?= $nextPage ?><?= isset($_REQUEST['keyWord']) ? "&keyWord=".$_REQUEST['keyWord'] : "" ?>"><i class="fa-solid fa-angle-right"></i></a></li>
                    <?php } ?>

                    <?php if (isset($_GET['page']) && $_GET['page'] < ceil($countPage) - 1) {
                        $endPage = ceil($countPage); ?>
                        <li><a href="index.php?actAdmin=addOrderAdmin&page=<?= $endPage ?><?= isset($_REQUEST['keyWord']) ? "&keyWord=".$_REQUEST['keyWord'] : "" ?>"><i class="fa-sharp fa-solid fa-angles-right"></i></a></li>
                    <?php } ?>

                <?php } ?>
                <!-- End Pagination -->
            </ul>
            <div class="form--Order-direct">
                <?php
                $flag = 0;
                $sum = 0;
                ?>
                <div class="form--left--OrderProduct">
                    <table border="1">
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th style="width: 150px !important;" >Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng</th>
                            <th>Thao tác</th>
                        </tr>

                        <?php foreach ($_SESSION['orderAdmin'] as $id => $value) : ?>
                            <?php
                                $imagePath = "../imageProduct/" . $value[2];
                                $image = "<img src='" . $imagePath . "' alt='' width='100px' height='100px'>";
                            ?>
                            <tr class="detail__OrderAdmin--Product">
                                <td>SP00<?= $value[0] ?></td>
                                <td><?= $value[1] ?></td>
                                <td><?= $image ?></td>
                                <td class="quantityOrderAdmin">
                                   <div>
                                        <span>
                                            <a href="./index.php?actAdmin=update_quantity_products_CartAdmin&id=<?= $id ?>&type=decre">-</a>
                                        </span>
                                        <input class="sl__sp--092" type="text" value="<?= $value[4] ?>" min="1" name="" id="" />
                                        <span>
                                            <a href="index.php?actAdmin=update_quantity_products_CartAdmin&id=<?= $id ?>&type=incre">+</a>
                                        </span>
                                   </div>
                                </td>
                                <td class="priceDefault">
                                    <span><?= number_format($value[3]) ?></span><span>đ</span>

                                </td>
                                <?php 
                                    $result = $value[3] * $value[4];
                                    
                                ?>
                                <td class="priceOrderAdmin">
                                    <span><?= number_format($result) ?></span><span>đ</span>

                                </td>
                                <td class="btn-removeOrderAdmin">
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm <?= $value[1] ?> không?')" href="index.php?actAdmin=addOrderAdmin&&idRemoveOrder=<?= $flag ?>" class="remove"><button><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                                </td>
                            </tr>
                            <?php
                                $flag++;
                                $sum += $result;
                            ?>
                        <?php endforeach; ?>
                    </table>
                    <?php if ($sum != 0) : ?>
                        <h2 style="color: #ffffff; padding: 15px 0; font-size: 18px;">Tổng tiền phải thanh toán: <span class="totalMoneyOrder" style="color: #ffffff;"><?= number_format($sum) ?></span><span style="color: #ffffff;">đ</span> </h2>
                    <?php endif; ?>
                </div>
                <form action="index.php?actAdmin=AddOrderUserDirect" method="post" enctype="multipart/form-data">
                    <div class="form--right--inforUser">
                        <input type="hidden" name="totalPricePay" value="<?= $sum ?>" >
                        <div class="nameDirect">
                            <p>Tên khách hàng:</p>
                            <input type="text" name="nameDirect">
                        </div>
                        <div class="emailDirect">
                            <p>Email:</p>
                            <input type="text" name="emailDirect">
                        </div>
                        <div class="phoneDirect">
                            <p>Số điện thoại:</p>
                            <input type="text" name="phoneDirect">
                        </div>
                        <div class="addressDirect">
                            <p>Địa chỉ:</p>
                            <input type="text" name="addressDirect">
                        </div>
                        <?php if(!empty($_SESSION['orderAdmin'])): ?>
                            <div class="btn__action btn__action--addProduct">
                                <button type="submit" class="btn--addProduct" name="btn--addProduct">Thêm đơn hàng</button>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="../src/js/animation.js"></script>

</body>

</html>