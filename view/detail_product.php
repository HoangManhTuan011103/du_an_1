<div class="grid wide">
    <!-- điều hương -->
    <div class="row product_title_path">
        <p>Trang chủ</p>
        <span>></span>
        <p>Giày nam</p>
        <span>></span>
        <p>
            <span class="red_word">

                Giày đá bóng sân cỏ nhân tạo
            </span>
        </p>
    </div>
    <?php 
                        extract($onepro_categories)
                        // $imagePath = "../imageProduct/" .$onepro_categories['avatar'];
                        // if(is_file($imagePath)){
                        //     $image = "<img src='" . $imagePath . "' alt=''>";
                        // }else{
                        //     $image = "<h4 style='color: #ffffff' > không có hình ảnh</h4>";
                        // } ?>
    <p class="product_title_name"><?=$name?></p>
    <div class="row">
        <div class="col l-9">
            <div class="row">
                <!-- ảnh -->

                <div class="col l-6">
                    <img src="./imageProduct/<?=$avatar?>" alt="">

                </div>
                <div class="col l-6">
                    <!-- list ảnh -->
                    <div class="row product_list_img">
                        <?php foreach($list_image_product as $value){
                            extract($value);
                            $giagiam = ($price * $discount)/100 ;
                         ?>
                        <div class="col l-3 product__list_img-onec">
                            <img src="./imageProduct/<?=$images?>" alt="">
                        </div>
                        <!-- <div class="col l-3 product__list_img-onec">
                            <img src="./src/image/a3.webp" alt="">
                        </div>
                        <div class="col l-3 product__list_img-onec">
                            <img src="./src/image/a4.webp" alt="">
                        </div>
                        <div class="col l-3 product__list_img-onec">
                            <img src="./src/image/a5.webp" alt="">
                        </div> -->
                        <?php } ?>
                    </div>

                    <!-- titile production -->
                    <h3 class="one_product_title_name_"><?=$name?></h3>
                    <!-- thương hiệu -->
                    <div class="product_name_brand_quantity">
                        <p class="product_brand">
                            Danh mục:
                            <span class="red_word">
                                <?=$name_category?> </span>
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
                            <?=$giagiam?> <span class="product_currency">đ</span>
                        <p class="product_one_price_old">
                            <?=$price?>
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
                                    <input type="text" id="btn_product_quantity_input" min="1"
                                        name="product_quantity_input" value="1">
                                    <div class="btn_incre">+</div>
                                </div>
                            </div>
                            <!-- form id price sp -->
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="hidden" name="price" value="<?=$price?>">
                            <input type="hidden" name="giagiam" value="<?=$giagiam?>">
                            <!--  -->
                            <div class="one_product_btn_buy">

                                <button type="submit" name="btn-addCart"
                                    class="btn_buy_products">Mua
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
            <div class="row">
                <ul class="product_change_tab">
                    <li>Mô tả sản phẩm</li>
                    <li>Tab tùy chỉnh</li>
                    <li>Đánh giá</li>
                </ul>
            </div>
            <div class="row">
                <div class="product_desc_detail">
                    <p>
                        <?=$description?>
                        <!-- Giày Đá Bóng Sân Cỏ cho độ bám sàn tốt cũng như có độ bền cùng độ dẻo
                        dai
                        cao, là chọn lựa lý
                        tưởng của những bạn nam yêu thích thể thao. Thân giày đá bóng cỏ tự
                        nhiên
                        được làm từ da PU
                        cao cấp

                        Giày Đá Bóng Sân Cỏ cho độ bám sàn tốt cũng như có độ bền cùng độ
                        dẻo dai
                        cao, là chọn lựa
                        lý tưởng của những bạn nam yêu thích thể thao.

                        Thân giày đá bóng cỏ tự nhiên được làm từ da PU cao cấp, bề mặt bóng
                        chống
                        bám bẩn, chống
                        thấm nước. Bên cạnh đó, lớp da của phần upper được tráng một lớp
                        firm mỏng
                        giúp bảo vệ phần
                        da giày tốt hơn.

                        Đế giày được may toàn bộ quanh mũi giày và gót nên rất chắc chắn,
                        thích ứng
                        với sân cỏ nhân
                        tạo. Giày thiết kế dành riêng cho bề mặt sân cỏ tự nhiên với các
                        khối đinh
                        lớn hình tam giác
                        có độ cao vừa phải, tránh trơn trượt ngay cả khi bạn chạy trên sân
                        cỏ tự
                        nhiên; đồng thời hỗ
                        trợ tuyệt vời cho những pha xử lý bóng bằng gầm giày, những cú ngoặt
                        bóng
                        siêu nhanh.

                        Phần lõi trong đôi giày đá banh tự nhiên là lớp vải mềm giúp thấm
                        hút mồ hôi
                        và tạo sự thông
                        thoáng cho đôi chân, không gây mùi khó chịu khi sử dụng.

                        Chất liệu cao su thiên nhiên tạo sự đàn hồi nhất định cho đôi giày,
                        mang đến
                        cảm giác êm ái,
                        thoải mái khi sử dụng sản phẩm.

                        Form giày đá bóng chuẩn ôm sát chân tạo cảm giác bóng tốt, làm tăng
                        khả năng
                        xử lý bóng,
                        đồng thời giúp cho việc kiểm soát bóng của bạn trở nên dễ dàng hơn -->
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
                      $pricesale = ($price * $discount)/100 ;
                      $img =  $image_path.$avatar;
                      $linkpro = "index.php?act=detail_product&id=".$id;
                      echo '<div class="one_collection_product_list--item-detail">
                      <div class="one_product_list--item-detail-img">
                          <a href="'.$linkpro.'"> <img src="'.$img.'" alt=""></a>
            </div>
            <div class="one_product_list--item-detail-nameproduct">
                <p>
                    <a href="">
                        '.$name.'
                    </a>
                </p>
                <p class="red_word">'.$pricesale.'<span class="product_currency">đ</span>
                </p>
                <span class="product_one_price_old">'.$price.'<span class="product_currency">đ</span>
                </span>
            </div>
        </div>';
        }
        ?>


                <!-- 
                <div class="one_collection_product_list--item-detail">
                    <div class="one_product_list--item-detail-img">
                        <a href=""> <img src="./src/image/a3.webp" alt=""></a>
                    </div>
                    <div class="one_product_list--item-detail-nameproduct">
                        <p>
                            <a href=""> Giày thể thao nữ cổ thấp mẫu mới nhất</a>
                        </p>
                        <p class="red_word">268.000 <span class="product_currency">đ</span>
                        </p>
                        <span class="product_one_price_old">268.000 <span
                                class="product_currency">đ</span>
                        </span>
                    </div>
                </div>


                <div class="one_collection_product_list--item-detail">
                    <div class="one_product_list--item-detail-img">
                        <a href=""> <img src="./src/image/a3.webp" alt=""></a>
                    </div>
                    <div class="one_product_list--item-detail-nameproduct">
                        <p>
                            <a href=""> Giày thể thao nữ cổ thấp mẫu mới nhất</a>
                        </p>
                        <p class="red_word">268.000 <span class="product_currency">đ</span>
                        </p>
                        <span class="product_one_price_old">268.000 <span
                                class="product_currency">đ</span>
                        </span>
                    </div>
                </div>


                <div class="one_collection_product_list--item-detail">
                    <div class="one_product_list--item-detail-img">
                        <a href=""> <img src="./src/image/a3.webp" alt=""></a>
                    </div>
                    <div class="one_product_list--item-detail-nameproduct">
                        <p>
                            <a href=""> Giày thể thao nữ cổ thấp mẫu mới nhất</a>
                        </p>
                        <p class="red_word">268.000 <span class="product_currency">đ</span>
                        </p>
                        <span class="product_one_price_old">268.000 <span
                                class="product_currency">đ</span>
                        </span>
                    </div>
                </div> -->



            </div>
        </div>
    </div>

    <!-- hàng cùng loại -->
    <div class="row">
        <section class="grid wide section__product--hot">
            <h2 class="product_list_with_categories_title">SẢN PHẨM cùng loại</h2>
            <div class="section__product--hot__banner review__product--hot">
                <?php
                    foreach ($protop4 as $value) {
                      extract($value);
                      $pricesale = ($price * $discount)/100 ;
                      $img =  $image_path.$avatar;
                      $linkpro = "index.php?act=detail_product&id=".$id;
                      echo '<div class="grid wide l-2-4 m-6 c-6">
                      <div class="product__banner">
                          <div class="product--hot__img">
                              <img src="'.$img.'"
                                  alt="">
                          </div>
                          <div class="product__banner__name">
                              <p>'.$name.'</p>
                          </div>
                      </div>
                      <div class="product__banner__price">
                          <div>
                              <p class="product__banner__price--cost">'.$pricesale.'<u>đ</u></p>
                              <p class="product__banner__price--sale">'.$price.'</p>
                          </div>
                          <div class="product__banner__btn--detail">
                              <a href="'.$linkpro.'">chi tiết</a>
                          </div>
                      </div>
                      </div>';
                    }
                ?>
                <!-- <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-2 copy.webp"
                                alt="">
                        </div>
                        <div class="product__banner__name">
                            <p>Bộ quần áo bóng đá nam AATR035-5</p>
                        </div>
                    </div>
                    <div class="product__banner__price">
                        <div>
                            <p class="product__banner__price--cost">677.455 <u>đ</u></p>
                            <p class="product__banner__price--sale"></p>
                        </div>
                        <div class="product__banner__btn--detail">
                            <button href="">chi tiết</button>
                        </div>
                    </div>
                </div>
                <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-2 copy.webp"
                                alt="">
                        </div>
                        <div class="product__banner__name">
                            <p>Bộ quần áo bóng đá nam AATR035-5</p>
                        </div>
                    </div>
                    <div class="product__banner__price">
                        <div>
                            <p class="product__banner__price--cost">677.455 <u>đ</u></p>
                            <p class="product__banner__price--sale"></p>
                        </div>
                        <div class="product__banner__btn--detail">
                            <button href="">chi tiết</button>
                        </div>
                    </div>
                </div>
                <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-2 copy.webp"
                                alt="">
                        </div>
                        <div class="product__banner__name">
                            <p>Bộ quần áo bóng đá nam AATR035-5</p>
                        </div>
                    </div>
                    <div class="product__banner__price">
                        <div>
                            <p class="product__banner__price--cost">677.455 <u>đ</u></p>
                            <p class="product__banner__price--sale"></p>
                        </div>
                        <div class="product__banner__btn--detail">
                            <button href="">chi tiết</button>
                        </div>
                    </div>
                </div>
                <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-2 copy.webp"
                                alt="">
                        </div>
                        <div class="product__banner__name">
                            <p>Bộ quần áo bóng đá nam AATR035-5</p>
                        </div>
                    </div>
                    <div class="product__banner__price">
                        <div>
                            <p class="product__banner__price--cost">677.455 <u>đ</u></p>
                            <p class="product__banner__price--sale"></p>
                        </div>
                        <div class="product__banner__btn--detail">
                            <button href="">chi tiết</button>
                        </div>
                    </div>
                </div>
                <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-2 copy.webp"
                                alt="">
                        </div>
                        <div class="product__banner__name">
                            <p>Bộ quần áo bóng đá nam AATR035-5</p>
                        </div>
                    </div>
                    <div class="product__banner__price">
                        <div>
                            <p class="product__banner__price--cost">677.455 <u>đ</u></p>
                            <p class="product__banner__price--sale"></p>
                        </div>
                        <div class="product__banner__btn--detail">
                            <button href="">chi tiết</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
    </div>
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
    </script>