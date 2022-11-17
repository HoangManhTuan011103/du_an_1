<div class="grid wide products_alllllll">
    <div class="row product_title_path">
        <p>Trang chủ</p>
        <span>></span>
        <p>
            <span class="red_word">
                Tất cả sản phẩm
            </span>
        </p>
    </div>


    <h2 class="products_all red_word">
        <?= isset($namecategory) ? $namecategory : $namecategory = ''; ?>
    </h2>
    <div class="row">
        <div class="col l-3">
            <!-- danh mục sản phảm -->
            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Danh mục sản phẩm
                </p>
                <div class="product_fillter_flow_content">
                    <ul>
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=showProducts&id=" . $id;
                            echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                        }
                        ?>
                        <!-- <li><a href="">Trang chủ </a></li>
                        <li><a href="">Sản phẩm </a></li>
                        <li><a href="">Giày thể thao</a></li>
                        <li><a href="">Giới thiệu </a></li>
                        <li><a href="">Liên hệ</a></li>
                        <li><a href="">Tin tức</a></li> -->
                    </ul>
                </div>
            </div>


            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Thương hiệu
                </p>
                <div class="product_fillter_flow_content">
                    <ul>
                        <li>
                            <a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Adidas</label>
                            </a>
                        </li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Hapu</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Hura</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Korean</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Mira</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Nike</label>
                            </a></li>
                    </ul>
                </div>
            </div>



            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Mức giá
                </p>
                <div class="product_fillter_flow_content">
                    <ul>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Giá dưới 100.000đ</label> </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    100.000đ - 200.000đ</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    200.000đ - 300.000đ</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    300.000đ - 500.000đ</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    500.000đ - 1.000.000đ</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Giá trên 1.000.000đ</label>
                            </a></li>
                    </ul>
                </div>
            </div>


            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Loại sản phẩm
                </p>
                <div class="product_fillter_flow_content">
                    <ul>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Giày cổ cao</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Giày cổ thấp</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Giày đá bóng</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Giày tăng chiều cao</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Giày vải</label>
                            </a></li>
                        <li><a href="">
                                <label for="">
                                    <input type="checkbox">
                                    Slip-on</label>
                            </a></li>
                    </ul>
                </div>
            </div>

            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Màu ưa chuộng
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="fillter_product_color">
                        <li><a href="">

                            </a></li>
                        <li><a href="">

                            </a></li>
                        <li><a href="">

                            </a></li>
                        <li><a href="">

                            </a></li>
                        <li><a href="">

                            </a></li>
                        <li><a href="">

                            </a></li>
                        <li><a href="">

                            </a></li>
                        <li><a href="">

                            </a></li>

                    </ul>
                </div>
            </div>

            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Theo kích cỡ
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="product_fillter_size">
                        <li><a href=""> <label for="">
                                    <input type="checkbox">
                                    S</label> </a></li>
                        <li><a href=""> <label for="">
                                    <input type="checkbox">
                                    M</label> </a></li>
                        <li><a href=""> <label for="">
                                    <input type="checkbox">
                                    L</label></a></li>
                        <li><a href=""> <label for="">
                                    <input type="checkbox">
                                    XL</label> </a></li>
                        <li><a href=""> <label for="">
                                    <input type="checkbox">
                                    2XL</label></a></li>

                    </ul>
                </div>
            </div>


        </div>
        <div class="col l-9">
            <div class=" row fillter_news">
                <h3 class="fillter_sap_xep">
                    Sắp xếp
                </h3>
                <ul class="fillter_products_time">
                    <li>
                        <a href="">
                            <input type="checkbox" name="" id="">Hàng mới về
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <input type="checkbox" name="" id="">Hàng cũ nhất
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <input type="checkbox" name="" id="">Giá tăng dần
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <input type="checkbox" name="" id="">Giá giảm dần
                        </a>
                    </li>

                </ul>
            </div>


            <!-- sản phẩm -->

            <div class="row category--grid--review">

                <?php
                foreach ($prolist  as $pro) {
                    extract($pro);
                    $hinh = $image_path . $avatar;
                    $linkpro = "index.php?act=detail_product&id=" . $id;
                    $giagiam = ($price * $discount) / 100;
                    $pricesale = $price - $giagiam;
                    echo '<div class="grid wide col l-3 m-4 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="' . $hinh . '" alt="">
                            </div>
                            <div class="product__banner__name">
                                <p>' . $name . '</p>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">' . $pricesale . '<u>đ</u></p>
                                <p class="product__banner__price--sale"><del>' . $price . '</del><u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>


            </div>

            <!-- phân trang -->
            <!-- <div class="row product_fillter_page">

                <ul class="">

                    <li class="product_page-item ">
                        <a class="page-link" href="#">«</a>
                    </li>
                    <li class="active product_page-item "><a class="page-link" href="">1</a></li>

                    <li class="product_page-item"><a class="page-link" onclick="doSearch(2)"
                            href="">2</a></li>


                    <li class="product_page-item hidden-xs"><a class="page-link"
                            onclick="doSearch(2)" href=""><i class="fa fa-angle-double-right"
                                aria-hidden="true"></i>
                        </a></li>

                </ul>

            </div> -->
            <!-- bạn thích -->
            <h2 class="products_all">Có thể bạn thích</h2>
            <div class="row category--grid--review">

                <?php
                foreach ($protop4 as $pro) {
                    extract($pro);
                    $hinh = $image_path . $avatar;
                    $linkpro = "index.php?act=detail_product&id=" . $id;
                    $giagiam = ($price * $discount) / 100;
                    $pricesale = $price - $giagiam;
                    echo '<div class="grid wide col l-3 m-4 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                                <img src="' . $hinh . '" alt="">
                            </div>
                            <div class="product__banner__name">
                                <p>' . $name . '</p>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">' . $pricesale . '<u>đ</u></p>
                                <p class="product__banner__price--sale"><del>' . $price . '</del><u>đ</u></p>
                            </div>
                            <div class="product__banner__btn--detail">
                                <a href="' . $linkpro . '">chi tiết</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                <!-- <div class="grid wide col l-3 m-4 c-6">
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
                            <a href="">chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="grid wide col l-3 m-4 c-6">
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
                            <a href="">chi tiết</a>
                        </div>
                    </div>
                </div>


                <div class="grid wide col l-3 m-4 c-6">
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
                            <a href="">chi tiết</a>
                        </div>
                    </div>
                </div> -->

            </div>

        </div>
    </div>

</div>