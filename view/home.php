<!-- File này là giao diện trang chủ nha --><!-- File này là giao diện trang chủ nha -->

        <!-- SECTION -->
        <section class="section--banner1">
            <img src="./src/image/img_header_hoan/banner1_balck-skin.png" alt="">
        </section>
        <section class="grid wide section--product-1">
                <div class="product-1-row-1">
                      <?php
                        $i=0;
                        foreach ($load2dm as $dm) {
                            extract($dm);
                            $hinh = $image_path.$avatar;
                            if(($i == 0)){
                                $a = "product-1-col-1 l-8 m-12 c-12";
                            }else{
                                $a="product-1-col-2 l-4 m-0 c-0";
                            }
                            echo '<div class="grid wide product-1 '.$a.'">
                            <div class="product_hover_change">
        
                                <img class="product-1__img" src="./src/image/img_header_hoan/1.png" alt="">
                                <p class="product-1__name">
                                    '.$name.'
                                </p>
                                <p class="section--product-1__amount">
                                   '.$total_product.'
                                </p>
                            </div>
                          </div> ';
                          $i += 1;
                        } 
                      ?>
                </div>
                <div class="product-1-row-2">
                <?php
                        
                        foreach ($load3dm as $dm) {
                            extract($dm);
                            $hinh = $image_path.$avatar;
                            echo '<div class="grid wide product-1  product-1-col-1 l-4 m-0 c-0">
                            <div class="product_hover_change">
        
                                <img class="product-1__img" src="./src/image/img_header_hoan/aaps037-7__1__40f1ec058366467c8abf519485986b0c_large.webp" alt="">
                                <p class="product-1__name">
                                    '.$name.'
                                </p>
                                <p class="section--product-1__amount">
                                   '.$total_product.'
                                </p>
                            </div>
                          </div> ';
                          $i += 1;
                        } 
                      ?>
                </div> 

            
            <!-- <div class="product-1-row-1">
                <div class="grid wide product-1 product-1-col-1 l-8 m-12 c-12">
                    <div class="product_hover_change">

                        <img class="product-1__img" src="./src/image/img_header_hoan/1.png" alt="">
                        <p class="product-1__name">
                            BÓNG ĐÁ NAM
                        </p>
                        <p class="section--product-1__amount">
                            8 sản phẩm
                        </p>
                    </div>
                </div>
                <div class="grid wide product-1 product-1-col-2 l-4 m-0 c-0">
                    <div class="product_hover_change">
                        <img class="product-1__img"
                        src="./src/image/img_header_hoan/aaps037-7__1__40f1ec058366467c8abf519485986b0c_large.webp" alt="">
                        <p class="product-1__name">
                            BÓNG ĐÁ NAM
                        </p>
                        <p class="section--product-1__amount">
                            8 sản phẩm
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="product-1-row-2">
                <div class="grid wide product-1 product-1-col-1 l-4 m-0 c-0">
                    <div class="product_hover_change">
                        <img class="product-1__img"
                        src="./src/image/img_header_hoan/aaps037-7__1__40f1ec058366467c8abf519485986b0c_large.webp" alt="">
                        <p class="product-1__name">
                            BÓNG ĐÁ NAM
                        </p>
                        <p class="section--product-1__amount">
                            8 sản phẩm
                        </p>
                    </div>
                </div>
                <div class="grid wide product-1 product-1-col-1 l-4 m-0 c-0">
                    <div class="product_hover_change">
                        <img class="product-1__img"
                        src="./src/image/img_header_hoan/aaps037-7__1__40f1ec058366467c8abf519485986b0c_large.webp" alt="">
                        <p class="product-1__name">
                            BÓNG ĐÁ NAM
                        </p>
                        <p class="section--product-1__amount">
                            8 sản phẩm
                        </p>
                    </div>
                </div>
                <div class="grid wide product-1 product-1-col-1 l-4 m-0 c-0">
                    <div class="product_hover_change">
                        <img class="product-1__img"
                        src="./src/image/img_header_hoan/aaps037-7__1__40f1ec058366467c8abf519485986b0c_large.webp" alt="">
                        <p class="product-1__name">
                            BÓNG ĐÁ NAM
                        </p>
                        <p class="section--product-1__amount">
                            8 sản phẩm
                        </p>
                    </div>
                </div>
            </div> -->
        </section>
        <section class="grid wide section__product--hot">
            <h2>SẢN PHẨM BÁN CHẠY</h2>
            <div class="section__product--hot__banner review__product--hot">
                <?php 
                    foreach ($pronew as $pro) {
                        extract($pro);
                        $hinh = $image_path.$avatar;
                        $giagiam = $price * $discount;
                        echo ' <div class="grid wide l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="'.$hinh.'" alt="">
                            </div>
                            <div class="product__banner__name">
                                <p>'.$name.'</p>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">'.$price.' <u>đ</u></p>
                                <p class="product__banner__price--sale">'.$giagiam.'<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <button href="">chi tiết</button>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
                <!-- <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                <!-- <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
        <section class="grid wide section__wrap--review--1">
            <div class="warp--review--1--row-1 ">
                <div class="review--1-row--1__img l-5 m-12 c-12">
                    <img src="./src/image/img_header_hoan/banner_product_nangdong.webp" alt="">
                </div>
                <div class="warp--review--1--row-1__text">
                    <h2>THỂ THAO NĂNG ĐỘNG</h2>
                    <p>Sneaker đã trở thành một biểu tượng của xã hội, là một sản phẩm của thời đại với những thiết
                        kế cổ điển và những điều đó đều nằm trong những đôi giày Sneaker Delta Shoes. Không lỗi thời
                        với thời gian, mang dấu ấn cá tính khác biệt và tạo mọi sự lôi cuốn từ chính đôi giày Sneaker
                        . Tự tạo cuộc chơi, tự tạo phong cách, đó là Delta Shoes</p>
                    <div class="warp--review--1--row-1__text__see-more">
                        <a href="">XEM THÊM <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                    
                </div>
            </div>
            <div class="section__product--hot__banner warp--review--1--row-2">
                <?php 
                    foreach ($pronew as $pro) {
                        extract($pro);
                        $hinh = $image_path.$avatar;
                        $giagiam = $price * ($discount/100);
                        echo ' <div class="grid wide l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="'.$hinh.'" alt="">
                            </div>
                            <div class="product__banner__name">
                                <p>'.$name.'</p>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">'.$giagiam.' <u>đ</u></p>
                                <p class="product__banner__price--sale">'.$price.'<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <button href="">chi tiết</button>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
                <!--Hiệp Hiện thị sản phẩm -->
                <!-- <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
        <section class="grid wide section__wrap--review--2">
            <div class="warp--review--2--row-1 ">
                <div class="warp--review--2--row-1__text">
                    <h2>THỂ THAO NĂNG ĐỘNG</h2>
                    <p>Sneaker đã trở thành một biểu tượng của xã hội, là một sản phẩm của thời đại với những thiết
                        kế cổ điển và những điều đó đều nằm trong những đôi giày Sneaker Delta Shoes. Không lỗi thời
                        với thời gian, mang dấu ấn cá tính khác biệt và tạo mọi sự lôi cuốn từ chính đôi giày Sneaker
                        . Tự tạo cuộc chơi, tự tạo phong cách, đó là Delta Shoes</p>
                        <div class="warp--review--1--row-1__text__see-more">
                            <a href="">XEM THÊM <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                </div>
                <div class="review--2-row--1__img l-5 m-12 c-12">
                    <img src="./src/image/img_header_hoan/banner_product_nangdong.webp" alt="">
                </div>
            </div>
            <div class="section__product--hot__banner warp--review--1--row-2">
                 <?php 
                    foreach ($pronew as $pro) {
                        extract($pro);
                        $hinh = $image_path.$avatar;
                        $giagiam = $price * ($discount/100) ;
                        echo ' <div class="grid wide l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="'.$hinh.'" alt="">
                            </div>
                            <div class="product__banner__name">
                                <p>'.$name.'</p>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">'.$giagiam.' <u>đ</u></p>
                                <p class="product__banner__price--sale">'.$price.'<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <button href="">chi tiết</button>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
                <!-- <div class="grid wide l-2-4 m-6 c-6">
                    <div class="product__banner">
                        <div class="product--hot__img">
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                            <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
        <section class="grid wide section__wrap--category--review">
            <div class="img--banner--category">
                <img src="./src/image/img_header_hoan/banner_product_noibat.webp" alt="">
            </div>
            <div class="category--review--flex"></div>
            <div class="category--review--flex">
                <div class="grid wide category--col-1--name l-2-4 ">
                    <h2>Danh mục sản phẩm</h2>
                    <p class="p--category--product--menu">Trang chủ</p>
                    <p class="p--category--product--menu">Sản phẩm</p>
                     <?php
                         foreach ($dsdm as $dm) {
                             extract($dm);
                             $linkdm = "index.php?act=sanpham&iddm=".$id;
                             echo ' <p href="'.$linkdm.'" class="p--sup--product--menu">'.$name.'</p> ';
                         }
                     ?>
                    <!-- <p class="p--sup--product--menu">Quần áo nam</p>
                    <p class="p--sup--product--menu">Quần áo nữ</p>
                    <p class="p--sup--product--menu">Quần áo trẻ con</p>
                    <p class="p--sup--product--menu">Quần áo đội</p> -->
                    <p class="p--category--product--menu">Hãng sản xuất</p>
                    <p class="p--sup--product--menu">Adidas</p>
                    <p class="p--sup--product--menu">Nike</p>
                    <p class="p--sup--product--menu">Puma</p>
                    <p class="p--sup--product--menu">Anta</p>
                    <p class="p--sup--product--menu">Erke</p>
                    <p class="p--category--product--menu">Liên hệ</p>
                    <p class="p--category--product--menu">Giới thiệu</p>
                    <p class="p--category--product--menu">Tin tức</p>

                </div>
                <div class="category--grid--review grid wide l-9">
                    <?php 
                    foreach ($protop8 as $pr) {
                        extract($pr);
                        $hinh = $image_path.$avatar;
                        $giagiam = ($price * $discount)/100 ;
                        echo ' <div class="grid wide l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="'.$hinh.'" alt="">
                            </div>
                            <div class="product__banner__name">
                                <p>'.$name.'</p>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">'.$giagiam.' <u>đ</u></p>
                                <p class="product__banner__price--sale">'.$price.'<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <button href="">chi tiết</button>
                            </div>
                        </div>
                    </div>';
                    }
                   ?> 
                    <!-- <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="./src/image/img_header_hoan/san-phan-ban-chay-1.webp" alt="">
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
                    <div class="grid wide review--category__p--more">
                        <p>Xem tất cả<i class="fa-solid fa-angle-right"></i></p>
                    </div>
                </div>


            </div>

        </section>
    </div>