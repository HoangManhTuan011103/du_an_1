<?php
$check_user_bying_product = check_user_bying_product();

foreach ($check_user_bying_product as $check) {
    // add comment
    if (isset($_POST['send_add_comments'])) {

        if (isset($_SESSION['user'])) {
            $id = $_SESSION['user']['id'];
            $content_comment = $_POST['content_comment'];
            $id_product = $_POST['id_product'];
            $count_start = $_POST['count_start'];
            if ($check['user_id'] == $id && $check['product_id'] == $id_product) {
                comment_insert($id_product, $id, $content_comment, $count_start);
                header("location: " . $_SERVER['HTTP_REFERER']);
            } else {
                echo "<script>  
                 window.location.href = 'index.php?act=detail_product&id=$id_product';
                        alert('Bạn phải mua hàng mới được bình luận');
                        </script>";
            }
        } else {
            require_once "./view/dangnhap.php";
            exit;
        }
    }

    // delete comment
    if (isset($_POST['delete_comment'])) {
        if (isset($_SESSION['user'])) {

            $id = $_SESSION['user']['id'];
            $id_comment = $_POST['id_comment'];
            $id_product = $_POST['id_product'];


            if ($check['user_id'] == $id && $check['product_id'] == $id_product) {
                comment_delete($id_comment);
                header("location: " . $_SERVER['HTTP_REFERER']);
            } else {
                echo "<script>  
                 window.location.href = 'index.php?act=detail_product&id=$id_product';
                        alert('Bạn phải mua hàng mới được bình luận');
                        </script>";
            }
        } else {
            require_once "./view/dangnhap.php";
            exit;
        }
    }

    if (isset($_POST['update_comments'])) {
        if (isset($_SESSION['user'])) {

            $id = $_SESSION['user']['id'];
            $content_comment = $_POST['content_comment'];
            $id_product = $_POST['id_product'];
            $id_comment = $_POST['id_comment'];
            $rating_products = $_POST['count_start'];
            echo $id, $content_comment, $id_product, $id_comment, $rating_products;

            // die;
            if ($check['user_id'] == $id && $check['product_id'] == $id_product) {
                comment_update($id_comment, $id_product, $id, $content_comment, $rating_products);

                header("location: " . $_SERVER['HTTP_REFERER']);
            } else {
                echo "<script>  
                 window.location.href = 'index.php?act=detail_product&id=$id_product';
                        alert('Bạn phải mua hàng mới được bình luận');
                        </script>";
            }
        } else {
            require_once "./view/dangnhap.php";
            exit;
        }
    }
}
?>


<div class="grid wide">
    <!-- điều hương -->
    <div class="row product_title_path">
        <p>Trang chủ</p>
        <span>></span>
        <p>Giày nam</p>
        <span>></span>
        <p>
            <span class="red_word">
                Chi tiết sản phẩm
            </span>
        </p>
    </div>
    <?php
    extract($onepro_categories)

    ?>
    <p class="product_title_name"><?= $name ?></p>
    <div class="row all_detail_products">
        <div class="col l-9">
            <div class="row">
                <!-- ảnh -->

                <div class="col l-6 image_hover_detail_scole">

                    <a href="./imageProduct/<?= $avatar ?>" class="MagicZoom" id="product_change_images" data-options="cssClass: thumbnails-style-shaded;">
                        <img src="./imageProduct/<?= $avatar ?>" />
                    </a>
                </div>
                <div class="col l-6">
                    <!-- list ảnh -->
                    <div class="row product_list_img">
                        <?php foreach ($list_image_product as $value) {
                            extract($value);

                        ?>

                            <div class="col l-3 product__list_img-onec">
                                <a data-zoom-id="product_change_images" href="./imageProduct/<?= $images ?>" data-image="./imageProduct/<?= $images ?>">
                                    <img src="./imageProduct/<?= $images ?>" />
                                </a>
                            </div>
                        <?php } ?>
                        <?php
                        $giagiam = $price * ($discount / 100);
                        ?>
                    </div>

                    <!-- titile production -->
                    <h3 class="one_product_title_name_" style="text-align: left;"><?= $name ?></h3>
                    <!-- thương hiệu -->
                    <div class="product_name_brand_quantity">
                        <p class="product_brand">
                            Danh mục:
                            <span class="red_word">
                                <?= $name_category ?> </span>
                        </p>
                        <p class="product_brand">
                            Kho :
                            <span class="red_word">Còn hàng</span>
                        </p>

                    </div>
                    <!-- hướng dẫn chọn size -->
                    <p class="note_choose_size">
                        <a href="">Hướng dẫn chọn size</a>
                    </p>

                    <!-- giá -->
                    <div class="one_product_price_detail">

                        <p class="product_one_price">
                            <?= number_format($price - $giagiam) ?> <span class="product_currency">đ</span>
                        <p class="product_one_price_old">
                            <?= number_format($price) ?>

                            <span class="product_currency">đ</span>
                        </p>
                        </p>
                    </div>
                    <!-- số lượng -->
                    <div class="product__one_quantity">

                        <form action="index.php?act=addToCart" id="form_quantity" method="post" enctype="multipart/form-data">
                            <div class="form_product_submit_quatity">
                                <p class="product_quantity_name">
                                    Số lượng :
                                </p>
                                <div class="quantity_change_number">
                                    <div class="btn_decre">-</div>
                                    <input type="text" id="btn_product_quantity_input" min="1" name="product_quantity_input" value="1">
                                    <div class="btn_incre">+</div>
                                </div>
                            </div>
                            <!-- form id price sp -->
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="price" value="<?= $price ?>">
                            <input type="hidden" name="giagiam" value="<?= $price - $giagiam ?>">
                            <!--  -->
                            <div class="one_product_btn_buy">

                                <button type="submit" name="btn-addCart" class="btn_buy_products">Mua
                                    ngay</button>
                                <div class="contact_information">
                                    <p>Mua số lượng lớn
                                        <br>
                                        Gọi ngay 19006750
                                    </p>
                                    <span class="prodcut_icon_phone_number">
                                        <i class="fa-solid fa-phone fa-2x"></i>

                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <!-- tab chọn bình luận -->
            <div class="row mt_chung">
                <ul class="product_change_tab">
                    <li class='tab-item active'>Mô tả sản phẩm</li>
                    <li class="tab-item">Tab tùy chỉnh</li>
                    <li class="tab-item">Đánh giá</li>
                </ul>
            </div>
            <div class="row product_desc_detail">
                <!-- mô tả sản phẩm  -->
                <div class="tab-pane active">
                    <p>
                        <?= $description ?>

                    </p>
                </div>
                <!-- tab tùy chỉnh -->
                <div class="tab-pane">
                    <div class="row">
                        <div class="form-comment">
                            <ul class='show-comments_user'>
                                <?php foreach ($data as $value) : extract($value) ?>
                                    <li>
                                        <form ation="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form_edit_delete">
                                            <input type="hidden" name="id_comment" value="<?= $id ?>">
                                            <input type="hidden" name="id_product" value="<?= $_GET['id'] ?>">
                                            <input type="hidden" name="content_comment" value="<?= $content ?>">

                                            <div class="form-comment--one">
                                                <div class="form-comment__avatar">
                                                    <img src="./imageProduct/<?= $image ?>" alt="">
                                                </div>
                                                <div class="form-comment__content">
                                                    <div class="form__toggle_clickedit">
                                                        <div class="form-comment__content--text">

                                                            <p class="id_comment"> <?= $name_person_comment ?> </p>
                                                            <p class="content_comment"><?= $content ?></p>
                                                            <p class="review_comment">
                                                                <input type="hidden" value="<?= $rating_products ?>" name="rating_products">
                                                                <?php for ($i = 0; $i < $rating_products; $i++) { ?>
                                                                    <i class="fa-solid fa-star orange"></i>

                                                                <?php } ?>
                                                            </p>
                                                        </div>
                                                        <span class="form-comment__content--button">
                                                            <!-- <span style="cursor: pointer;" href="" id="" class="a click_like ">Like</span> -->

                                                            <!-- <button name="edit_comment" class="a click_change">Edit</button> -->

                                                            <button name="delete_comment" class="a click_change" onclick="return 
                                                        confirm('Bạn có chắc chắn muốn xóa comments <?= $content ?> không?')">
                                                                Delete
                                                            </button>

                                                            <span><?= $created_at ?></span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>

                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="form_to_seen_cmt ">
                            <h3>Be the first to review “Sản phẩm”</h3>
                            <form ation="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                                <input type="hidden" id="count_start" name="count_start" value="">
                                <input type="hidden" name="id_product" value="<?= $_GET['id'] ?>">
                                <label for="">Your rating *</label>
                                <ul class="stars">
                                    <li class="star">&#10029;</li>
                                    <li class="star">&#10029;</li>
                                    <li class="star">&#10029;</li>
                                    <li class="star">&#10029;</li>
                                    <li class="star">&#10029;</li>
                                </ul>
                                <input type="text" placeholder="Viết bình luận" name="content_comment" class="write_comment">
                                <input type="submit" class="write_comment_send" value="Send" name="send_add_comments">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- tab tùy chỉnh -->
                <div class="tab-pane">
                    <p>
                        đổi nội dung
                    </p>
                </div>
            </div>
            <!-- sản phẩm cùng loại -->
            <div class="row"></div>
        </div>
        <div class="col l-3">
            <div class=" product_info_shipper ">
                <!-- vận chuyển -->
                <div class="product_info_shipper-item">
                    <div class="product_info_shipper-item-img">
                        <img src="./src/image/img_header_hoan/srv_1.webp" alt="">

                    </div>
                    <div class="product_info_shipper-title">
                        <p class="product_info_shipper-title--name">
                            Miễn phí vận chuyển
                        </p>
                        <p class="product_info_shipper-desc-title">
                            Miễn phí vận chuyển nội thành
                        </p>
                    </div>
                </div>
                <!-- đổi trả hàng -->
                <div class="product_info_shipper-item">
                    <div class="product_info_shipper-item-img">
                        <img src="./src/image/img_header_hoan/srv_2.webp" alt="">

                    </div>
                    <div class="product_info_shipper-title">
                        <p class="product_info_shipper-title--name">
                            Đổi trả hàng
                        </p>
                        <p class="product_info_shipper-desc-title">
                            Đổi trả lên tới 30 ngày
                        </p>
                    </div>
                </div>
                <!-- thời gian -->
                <div class="product_info_shipper-item">
                    <div class="product_info_shipper-item-img">
                        <img src="./src/image/img_header_hoan/srv_3.webp" alt="">

                    </div>
                    <div class="product_info_shipper-title">
                        <p class="product_info_shipper-title--name">
                            Tiết kiệm thời gian
                        </p>
                        <p class="product_info_shipper-desc-title">
                            Mua sắm dễ hơn khi online
                        </p>
                    </div>
                </div>
                <!-- tư vấn -->
                <div class="product_info_shipper-item">
                    <div class="product_info_shipper-item-img">
                        <img src="./src/image/img_header_hoan/srv_4.webp" alt="">

                    </div>
                    <div class="product_info_shipper-title">
                        <p class="product_info_shipper-title--name">
                            Tư vấn trực tiếp
                        </p>
                        <p class="product_info_shipper-desc-title">
                            Đội ngũ tư vấn nhiệt tình
                        </p>
                    </div>
                </div>

            </div>
            <!-- bộ sưu tập -->
            <h3 class="collection_product_list">Bộ sưu tập hot</h3>
            <div class=" collection_product_list--item ">
                <?php
                foreach ($protop4 as $value) {
                    extract($value);
                    $pricesale = $price * ($discount / 100);

                    $img =  $image_path . $avatar;
                    $linkpro = "index.php?act=detail_product&id=" . $id;
                    echo '<div class="one_collection_product_list--item-detail">
                      <div class="one_product_list--item-detail-img">
                          <a href="' . $linkpro . '"> <img src="' . $img . '" alt=""></a>
            </div>
            <div class="one_product_list--item-detail-nameproduct">
                <p>
                    <a href="">
                        ' . $name . '
                    </a>
                </p>
                <p class="red_word">' . number_format($price - $pricesale) . '<span class="product_currency">đ</span>
                </p>
                <span class="product_one_price_old">' . number_format($price) . '<span class="product_currency">đ</span>
                </span>
            </div>
        </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- hàng cùng loại -->
    <div class="row">
        <section class="grid wide section__product--hot">
            <h2 class="product_list_with_categories_title">SẢN PHẨM cùng loại</h2>
            <div class="section__product--hot__banner review__product--hot row">

                <?php
                foreach ($protop4 as $value) {
                    extract($value);
                    $pricesale = $price * ($discount / 100);
                    $img =  $image_path . $avatar;
                    $linkpro = "index.php?act=detail_product&id=" . $id;
                    echo '<div class="col l-2-4 m-6 c-6">
                      <div class="product__banner">
                          <div class="product--hot__img">
                          <a href="' . $linkpro . '"> <img src="' . $img . '"
                                  alt="">  </a>
                          </div>
                          <div class="product__banner__name">
                          <a href="' . $linkpro . '">   <p>' . $name . '</p>  </a>
                          </div>
                      </div>
                      <div class="product__banner__price">
                          <div>
                              <p class="product__banner__price--cost">' . number_format($price - $pricesale) . '<u>đ</u></p>
                              <p class="product__banner__price--sale product_one_price_old">' . number_format($price) . '<u>đ</u></p>
                          </div>
                          <div class="product__banner__btn--detail">
                              <a href="' . $linkpro . '">chi tiết</a>
                          </div>
                      </div>
                      </div>';
                }
                ?>
            </div>
        </section>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    let btn_decre = document.querySelector(".btn_decre");
    let btn_incre = document.querySelector(".btn_incre");

    let btn_product_quantity_input = document.querySelector("#btn_product_quantity_input")

    btn_incre.addEventListener("click", () => {

        btn_product_quantity_input.value++;
    });
    btn_decre.addEventListener("click", () => {
        if (btn_product_quantity_input.value == 1) {

            btn_decre.style.cursor = 'no-drop';
        } else {
            btn_decre.style.cursor = 'pointer';
            console.log(btn_product_quantity_input.value);
            --btn_product_quantity_input.value;
        }
    });
    // chuyển tab
    let tab_iteam = document.querySelectorAll('.tab-item');
    let tab_pane = document.querySelectorAll('.tab-pane');


    tab_iteam.forEach((tab, index) => {
        tab.onclick = function() {
            const panes = tab_pane[index];

            document.querySelector(".tab-item.active").classList.remove("active");

            document.querySelector(".tab-pane.active").classList.remove("active");
            this.classList.add("active");
            panes.classList.add("active");
        }
    });


    const array_comments = <?php echo json_encode($data); ?>;


    const starUl = document.querySelector(".stars");
    const stars = document.querySelectorAll(".star");
    const count_start = document.querySelector("#count_start");
    stars.forEach((star, index) => {
        star.starValue = (index + 1);

        star.addEventListener("click", starRate);

    })


    function starRate(e) {
        count_start.value = e.target.starValue;
        stars.forEach((star, index) => {
            if (index < e.target.starValue) {
                star.classList.add("orange")
            } else {
                star.classList.remove("orange")
            }
        })
    }

  
</script>