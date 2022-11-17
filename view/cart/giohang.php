<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="../../src/css/dangky_dangnhap.css" />
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/sharp-solid.css" />
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
</head>

<body> -->

<?php
if (!isset($_SESSION['mycart']) || empty($_SESSION['mycart'])) {
  require_once "giohang__rong.php";
  exit;
} else {

  $cart = $_SESSION['mycart'];
}

$sum = 0;
?>
<section class="ctn__size--width login__acc">
  <div class="login__top--title">
    <div class="login__top--title-menu">
      <ul class="menu__children_header--bottom">
        <li>
          <a href="">Trang chủ</a> <i class="fa-solid fa-angle-right"></i>
        </li>
        <li>
          <a href="">Giỏ hàng</a>
        </li>
      </ul>
    </div>
    <div class="login__top--title-2">
      <p class="title_login--children">Giỏ hàng</p>
      <p class="title_login--children-2 giohang__title">
        Giỏ hàng của bạn <span class="titl__slsp">(<?=sizeof($cart)?> sản phẩm)</span>
      </p>
    </div>
  </div>
  <div class="content__giohang">
    <form action="index.php?act=payMoneyProducts" method="post" enctype="multipart/form-data">
      <table class="form__tinh--spd">
        <thead>
          <tr class="mone__8eu0-22">
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
          </tr>
        </thead>
        <tbody>
          <!-- hiển thị hàng hóa đặt -->
          <?php foreach ($cart as $id => $value) :
          ?>
            <tr class="ctn9993">
              <!-- <div class="dong_ke--982j7"></div> -->

              <td class="hinhanhs__99is">
                <div>
                  <!-- <img src="https://bizweb.dktcdn.net/thumb/compact/100/342/645/products/1aeccbab979c6d695c3221cda5219094f2db3b3c.png" alt="" /> -->
                  <img src="./imageProduct/<?= $value['avatar'] ?>" alt="" />
                </div>
                <div>
                  <p><?= $value['name'] ?></p>
                  <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm <?= $value['name'] ?> không')" href="index.php?act=delete_product_cart_byId&id=<?= $id ?>" class="cls__f_t_a color__text--red size__a--92">
                    <i class="fa-solid fa-trash-can"></i>
                    Xóa sản phẩm
                  </a>
                </div>
              </td>
              <td>
                <h5 class="fs---393 color__text--red"><?= $value['giagiam'] ?> ₫</h5>
              </td>
              <td>
                <div>
                  <span>
                    <a href="./index.php?act=update_quantity_products_Cart&id=<?= $id ?>&type=decre">-</a></span>
                  <input class="sl__sp--092" type="number" value="<?= $value['use_quantity_buy'] ?>" min="1" name="" id="" />
                  <span><a href="index.php?act=update_quantity_products_Cart&id=<?= $id ?>&type=incre">+</a></span>
                </div>
              </td>
              <td>
                <h5 class="fs---393 color__text--red">
                  <?php $result = $value['use_quantity_buy'] * $value['giagiam'];
                  echo $result;
                  $sum += $result; ?>₫
                </h5>
              </td>
            </tr>
          <?php endforeach; ?>

          <!-- <tr class="ctn9993">-->
          <!-- <div class="dong_ke--982j7"></div>  -->
          <!--   <td class="hinhanhs__99is">
                <div>
                  <img src="https://bizweb.dktcdn.net/thumb/compact/100/342/645/products/1aeccbab979c6d695c3221cda5219094f2db3b3c.png" alt="" />
                </div>
                <div>
                  <p>Giày thể thao Just Do It nam nữ loại đẹp</p>
                  <a href="" class="cls__f_t_a color__text--red size__a--92"><i class="fa-solid fa-trash-can"></i> Xóa
                    sản phẩm</a>
                </div>
              </td>
              <td>
                <h5 class="fs---393 color__text--red">980.000 ₫</h5>
              </td>
              <td>
                <div>
                  <span>-</span>
                  <input class="sl__sp--092" type="number" value="1" min="1" name="" id="" />
                  <span>+</span>
                </div>
              </td>
              <td>
                <h5 class="fs---393 color__text--red">3.600.000 ₫</h5>
              </td>
            </tr> -->
        </tbody>
      </table>
      <div class="bottom__thtt--ctn">
        <div>
          <a href="index.php?">Tiếp tục mua hàng</a>
        </div>
        <div>
          <div>
            <div>
              <p>Thành tiền:</p>
            </div>
            <div>
              <p><?= $sum ?> đ</p>
            </div>
          </div>
          <div>
          <input type="submit" value="Tiến hành thanh toán" />
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
</body>

</html>