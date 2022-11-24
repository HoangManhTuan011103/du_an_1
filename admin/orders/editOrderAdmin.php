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
                                <form action="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>" method="POST">
                                    <input type="hidden" name="idProductOrder" value="<?= $value['id'] ?>">
                                    <input type="hidden" name="nameProductOrder" value="<?= $value['nameProduct'] ?>">
                                    <input type="hidden" name="imageProductOrder" value="<?= $value['avatar'] ?>">
                                    <input type="hidden" name="priceProductOrder" value="<?= $value['price'] - ($value['price'] * $value['discount'] / 100) ?>">
                                    <input type="hidden" name="quantityProductOrder" value="1">
                                    <button type="submit" name="btn__updateOrderAdmin"><i class="fa-solid fa-plus"></i>Thêm vào đơn</button>
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
                        <li><a href="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>&&page=<?= $fisrtPage ?>"><i class="fa-sharp fa-solid fa-angles-left"></i></a></li>
                    <?php } ?>

                    <?php if (isset($_GET['page']) && $_GET['page'] > 1) {
                        $prevPage = $_GET['page'] - 1; ?>
                        <li><a href="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>&&page=<?= $prevPage ?>"><i class="fa-solid fa-angle-left"></i></a></li>
                    <?php } ?>

                    <?php for ($i; $i <= $countPage; $i++) : ?>
                        <?php if (isset($_GET['page'])) : ?>
                            <?php if ($i + 1 != $_GET['page']) : ?>
                                <?php if ($i + 1 > $_GET['page'] - 2 && $i + 1 < $_GET['page'] + 2) : ?>
                                    <li><a href="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>&&page=<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
                                <?php endif; ?>
                            <?php else : ?>
                                <li><a style="background-color: #F39C12; color: #ffffff" href="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>&&page=<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
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
                            <?php if ($i <= $countPage) : ?>
                                <li><a <?= $backGround . $color . $word . $colorWord ?> href="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>&&page=<?= $i + 1 ?>"><?= $i + 1 ?></a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endfor ?>

                    <?php if (isset($_GET['page']) && $_GET['page'] < ceil($countPage)) {
                        $nextPage = $_GET['page'] + 1; ?>
                        <li><a href="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>&&page=<?= $nextPage ?>"><i class="fa-solid fa-angle-right"></i></a></li>
                    <?php } ?>

                    <?php if (isset($_GET['page']) && $_GET['page'] < ceil($countPage) - 1) {
                        $endPage = ceil($countPage); ?>
                        <li><a href="index.php?actAdmin=editOrderAdmin-WithUser&&id=<?= $id ?>&&page=<?= $endPage ?>"><i class="fa-sharp fa-solid fa-angles-right"></i></a></li>
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

                        <?php foreach ($listOrderedAdmin as $id => $value) : ?>
                            <?php
                                $avatar = isset($value['avatar']) ? $value['avatar'] : $value[2];
                                $imagePath = "../imageProduct/" .  $avatar;
                                $image = "<img src='" . $imagePath . "' alt='' width='100px' height='100px'>";
                            ?>
                            <tr class="detail__OrderAdmin--Product">
                                <td>SP00<?= isset($value['product_id']) ? $value['product_id'] : $value[0] ?></td>
                                <td><?= isset($value['name']) ? $value['name'] : $value[1] ?></td>
                                <td><?= $image ?></td>
                                <td class="quantityOrderAdmin">
                                   <div>
                                        <span>
                                            <a href="./index.php?actAdmin=update_quantity_products_CartAdmin&id=<?= $id ?>&type=decre">-</a>
                                        </span>
                                        <input class="sl__sp--092" type="text" value="<?= isset($value['quantity']) ? $value['quantity'] : $value[4] ?>" min="1" name="" id="" />
                                        <span>
                                            <a href="index.php?actAdmin=update_quantity_products_CartAdmin&id=<?= $id ?>&type=incre">+</a>
                                        </span>
                                   </div>
                                </td>
                                <td class="priceDefault">
                                    <span><?= number_format(isset($value['price_product']) ? $value['price_product'] : $value[3]) ?></span><span>đ</span>

                                </td>
                                <?php 
                                    if(isset($value[3]) && isset($value[4])){
                                        $result = $value[3] * $value[4];
                                    }else{
                                        $result = $value['price_product'] * $value['quantity'];
                                    }
                                    
                                    
                                ?>
                                <td class="priceOrderAdmin">
                                    <span><?= number_format($result) ?></span><span>đ</span>

                                </td>
                                <td class="btn-removeOrderAdmin">
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm <?= $value['name'] ?> không?')" href="index.php?actAdmin=addOrderAdmin&&idRemoveOrder=<?= $flag ?>" class="remove"><button><i class="fa-sharp fa-solid fa-trash"></i></button></a>
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
                            <input type="text" name="nameDirect" value="<?= $inforUserDirect['name'] ?? "" ?>">
                        </div>
                        <div class="emailDirect">
                            <p>Email:</p>
                            <input type="text" name="emailDirect" value="<?= $inforUserDirect['email'] ?? "" ?>">
                        </div>
                        <div class="phoneDirect">
                            <p>Số điện thoại:</p>
                            <input type="text" name="phoneDirect" value="<?= $inforUserDirect['phone'] ?? "" ?>">
                        </div>
                        <div class="addressDirect">
                            <p>Địa chỉ:</p>
                            <input type="text" name="addressDirect" value="<?= $inforUserDirect['address'] ?? "" ?>">
                        </div>
                        <div class="btn__action btn__action--addProduct">
                            <button type="submit" class="btn--addProduct" name="btn--addProduct">Cập nhật đơn hàng</button>
                        </div>
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