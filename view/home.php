<!-- SECTION -->
<section class="section--banner1">
    <img src="./src/image/img_header_hoan/banner1_balck-skin.png" alt="">
</section>
<section class="grid wide section--product-1">
    <div class="row">
        <?php
        $i = 0;
        foreach ($load2dm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=showProducts&id=" . $id;
            $hinh = $image_path . $avatar;
            if (($i == 0)) {
                $a = "product-1-col-1 col l-8 m-12 c-12";
            } else {
                $a = "product-1-col-1 col l-4 m-0 c-0";
            }
            echo '<div class="product-1 ' . $a . '">
                            <div class="product_hover_change">
        
                                <img class="product-1__img" src="' . $hinh . '" alt="">
                                <a href="' . $linkdm . '" class="product-1__name">
                                    ' . $name . '
                                </a>
                                <p class="section--product-1__amount">
                                   ' . $total_product . ' sản phẩm
                                </p>
                            </div>
                          </div> ';
            $i += 1;
        }
        ?>
    </div>
    <div class="row">
        <?php

        foreach ($load3dm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=showProducts&id=" . $id;
            $hinh = $image_path . $avatar;
            echo '<div class=" product-1  product-1-col-1 col l-4 m-0 c-0">
                            <div class="product_hover_change">
        
                                <img class="product-1__img" src="' . $hinh . '" alt="">
                                <a href="' . $linkdm . '" class="product-1__name">
                                    ' . $name . '
                                </a>
                                <p class="section--product-1__amount">
                                   ' . $total_product . ' sản phẩm
                                </p>
                            </div>
                          </div> ';
            $i += 1;
        }
        ?>
    </div>


</section>
<section class="grid wide section__product--hot">
    <h2 class="title__menu--jj">SẢN PHẨM BÁN CHẠY</h2>
    <div class="section__product--hot__banner review__product--hot row">
        <?php
        foreach ($pronew as $pro) {
            extract($pro);
            $linkpro = "index.php?act=detail_product&id=" . $id;
            $hinh = $image_path . $avatar;
            $giagiam = $price * ($discount / 100);
            echo ' <div class="col l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">  <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">   <p>' . $name . '</p></a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">' . number_format($price - $giagiam) . ' <u>đ</u></p>
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
<section class="grid wide section__wrap--review--1">
    <div class="warp--review--1--row-1 ">
        <div class="review--1-row--1__img l-5 m-12 c-12">
            <img src="./src/image/img_header_hoan/banner_product_nangdong.webp" alt="">
        </div>
        <div class="warp--review--1--row-1__text">
            <h2>THỂ THAO NĂNG ĐỘNG</h2>
            <p>Sneaker đã trở thành một biểu tượng của xã hội, là một sản phẩm của thời đại với
                những thiết
                kế cổ điển và những điều đó đều nằm trong những đôi giày Sneaker Delta Shoes. Không
                lỗi thời
                với thời gian, mang dấu ấn cá tính khác biệt và tạo mọi sự lôi cuốn từ chính đôi
                giày Sneaker
                . Tự tạo cuộc chơi, tự tạo phong cách, đó là Delta Shoes</p>
            <div class="warp--review--1--row-1__text__see-more">
                <a href="">XEM THÊM <i class="fa-solid fa-angle-right"></i></a>
            </div>

        </div>
    </div>
    <div class="section__product--hot__banner warp--review--1--row-2 row">
        <?php
        foreach ($pronew as $pro) {
            extract($pro);
            $linkpro = "index.php?act=detail_product&id=" . $id;
            $hinh = $image_path . $avatar;
            $giagiam = $price * ($discount / 100);
            echo ' <div class="col l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">   <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">    <p>' . $name . '</p>  </a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                            <p class="product__banner__price--cost">' . number_format($price - $giagiam) . ' <u>đ</u></p>
                            <p class="product__banner__price--sale product_one_price_old">' . number_format($price) . '<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
        }
        ?>
        <!--Hiệp Hiện thị sản phẩm -->

    </div>
</section>
<section class="grid wide section__wrap--review--2">
    <div class="warp--review--2--row-1 ">
        <div class="warp--review--2--row-1__text">
            <h2>THỂ THAO NĂNG ĐỘNG</h2>
            <p>Sneaker đã trở thành một biểu tượng của xã hội, là một sản phẩm của thời đại với
                những thiết
                kế cổ điển và những điều đó đều nằm trong những đôi giày Sneaker Delta Shoes. Không
                lỗi thời
                với thời gian, mang dấu ấn cá tính khác biệt và tạo mọi sự lôi cuốn từ chính đôi
                giày Sneaker
                . Tự tạo cuộc chơi, tự tạo phong cách, đó là Delta Shoes</p>
            <div class="warp--review--1--row-1__text__see-more">
                <a href="">XEM THÊM <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
        <div class="review--2-row--1__img l-5 m-12 c-12">
            <img src="./src/image/img_header_hoan/banner_product_nangdong.webp" alt="">
        </div>
    </div>
    <div class="section__product--hot__banner warp--review--1--row-2 row">
        <?php
        foreach ($pronew as $pro) {
            extract($pro);
            $hinh = $image_path . $avatar;
            $linkpro = "index.php?act=detail_product&id=" . $id;
            $giagiam = $price * ($discount / 100);
            echo ' <div class="col l-2-4 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">  <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">    <p>' . $name . '</p>  </a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                            <p class="product__banner__price--cost">' . number_format($price - $giagiam) . ' <u>đ</u></p>
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
<section class="grid wide section__wrap--category--review">
    <div class="img--banner--category">
        <img src="./src/image/img_header_hoan/banner_product_noibat.webp" alt="">
    </div>
    
    <div class="category--review--flex row">
        <div class="grid wide category--col-1--name l-2-4 ">
            <h2>Danh mục sản phẩm</h2>
            <p class="p--category--product--menu">Trang chủ</p>
            <p class="p--category--product--menu">Sản phẩm</p>
            <div class="ul--sup--product--menu">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=showProducts&id=" . $id;
                        echo '<li><a href="' . $linkdm . '" >' . $name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>

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
        <div class="category--grid--review  l-9">
            <div class="row">
                <?php
                foreach ($protop8 as $pr) {
                    extract($pr);
                    $linkpro = "index.php?act=detail_product&id=" . $id;
                    $hinh = $image_path . $avatar;
                    $giagiam = ($price * $discount) / 100;
                    echo ' <div class="col l-3 m-6 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '">   <img src="' . $hinh . '" alt="">  </a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">  <p>' . $name . '</p></a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>


                                <p class="product__banner__price--cost">' . number_format($price - $giagiam) . '<u>đ</u></p>




                                <p class="product__banner__price--sale product_one_price_old">
                                ' . number_format($price) . '<u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <div class="grid wide review--category__p--more">
                <p>Xem tất cả<i class="fa-solid fa-angle-right"></i></p>
            </div>
        </div>


    </div>

</section>
</div>