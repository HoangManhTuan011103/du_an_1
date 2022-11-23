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
        <?php
        //  $namecategory 
        ?>
    </h2>
    <div class="row">
        <div class="col l-3">
            <!-- danh mục sản phảm -->
            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Danh mục sản phẩm
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="fillter_categories_list">
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);

                            echo "<li data-id=$id> $name </li>";
                        }
                        ?>

                    </ul>
                </div>
            </div>



            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Mức giá
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="fillter_list_flow_price">
                        <li>
                            <label for="">
                                <input value='1' type="checkbox">
                                Giá dưới 100.000đ</label>
                        </li>
                        <li>
                            <label for="">
                                <input value='2' type="checkbox">
                                100.000đ - 200.000đ</label>

                        </li>
                        <li>
                            <label for="">
                                <input value='3' type="checkbox">
                                200.000đ - 300.000đ</label>

                        </li>
                        <li>
                            <label for="">
                                <input value='4' type="checkbox">
                                300.000đ - 500.000đ</label>

                        </li>
                        <li>
                            <label for="">
                                <input value='5' type="checkbox">
                                500.000đ - 1.000.000đ</label>

                        </li>

                    </ul>
                </div>
            </div>


            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Loại sản phẩm
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="product_fillter_flow_desc">
                        <li>
                            <label for="">
                                <input value='Giày cổ cao' type="checkbox">
                                Giày cổ cao</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Giày cổ thấp</label>
                        </li>
                        <li>
                            <label for="">
                                <input value='Giày đá bóng' type="checkbox">
                                Giày đá bóng</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Giày tăng chiều cao</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Giày vải</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Slip-on</label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Màu ưa chuộng
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="fillter_product_color">
                        <li><button></button></li>
                        <li><button></button></li>
                        <li><button></button></li>
                        <li><button></button></li>
                        <li><button></button></li>
                        <li><button></button></li>
                        <li><button></button></li>
                        <li><button></button></li>

                    </ul>
                </div>
            </div>

            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Theo kích cỡ
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="product_fillter_size">
                        <li> <label for="">
                                <input type="checkbox">
                                S</label>
                        </li>
                        <li> <label for="">
                                <input type="checkbox">
                                M</label>
                        </li>
                        <li> <label for="">
                                <input type="checkbox">
                                L</label>
                        </li>
                        <li> <label for="">
                                <input type="checkbox">
                                XL</label>
                        </li>
                        <li> <label for="">
                                <input type="checkbox">
                                2XL</label>
                        </li>

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
                        <input type="radio" name="check_flow_time" value="new" id="">Hàng mới về
                    </li>
                    <li>
                        <input type="radio" name="check_flow_time" value="old" id="">Hàng cũ nhất
                    </li>
                    <li>
                        <input type="radio" name="check_flow_time" value="price_desc" id="">Giá tăng dần
                    </li>
                    <li>
                        <input type="radio" name="check_flow_time" value="price_asc" id="">Giá giảm dần
                    </li>

                </ul>
            </div>


            <!-- sản phẩm -->

            <div class="row category--grid--review">

                <?php
                // foreach ($prolist  as $pro) {

                //     // var_dump($pro);
                //     extract($pro);

                //     $hinh = $image_path . $avatar;
                //     $linkpro = "index.php?act=detail_product&id=" . $id;
                //     $pricepricem = ($price * $discount) / 100;

                //     echo '<div class="grid wide col l-3 m-4 c-6">
                //         <div class="product__banner">
                //             <div class="product--hot__img">
                //             <a href="' . $linkpro . '">    <img src="' . $hinh . '" alt="">
                //             </a> </div>
                //             <div class="product__banner__name">
                //             <a href="' . $linkpro . '">    <p>' . $name . '</p></a>
                //             </div>
                //         </div>
                //         <div class="product__banner__price">
                //             <div>
                //                 <p class="product__banner__price--cost">' . number_format($price - $pricepricem) . '<u>đ</u></p>

                //                 <p class="product__banner__price--sale   product_one_price_old">' . number_format($price) . '<u>đ</u></p>
                //             </div>
                //             <div class="product__banner__btn--detail">
                //                 <a href="' . $linkpro . '">chi tiết</a>
                //             </div>
                //         </div>
                //     </div>';
                // }
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
            <div class="row category--grid--review helo">

                <?php
                // foreach ($protop4 as $pro) {
                //     extract($pro);
                //     $hinh = $image_path . $avatar;
                //     $linkpro = "index.php?act=detail_product&id=" . $id;
                //     $pricepricem = ($price * $discount) / 100;
                //     // $pricesale = $price - $pricepricem;
                //     echo '<div class=" col l-3 m-4 c-6">
                //         <div class="product__banner">
                //             <div class="product--hot__img">
                //             <a href="' . $linkpro . '"> <img src="' . $hinh . '" alt=""></a>
                //             </div>
                //             <div class="product__banner__name">
                //             <a href="' . $linkpro . '">   <p>' . $name . '</p></a>
                //             </div>
                //         </div>
                //         <div class="product__banner__price">
                //             <div>
                //                 <p class="product__banner__price--cost">' . number_format($price - $pricepricem) . '<u>đ</u></p>

                //                 <p class="product__banner__price--sale product_one_price_old">' . number_format($price) . '<u>đ</u></p>
                //             </div>
                //             <div class="product__banner__btn--detail">
                //                 <a href="' . $linkpro . '">chi tiết</a>
                //             </div>
                //         </div>
                //     </div>';
                // }
                ?>


            </div>

        </div>
    </div>

</div>


<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {


        let arr_prodcut1 = <?php echo json_encode($prolist); ?>;
        let arr_prodcut3 = <?php echo json_encode($prolist1); ?>;
        let array_product_2 = <?php echo json_encode($protop4); ?>;
        let fillter_price_asc = <?php echo json_encode($fillter_price_asc); ?>;
        console.log(arr_prodcut1, arr_prodcut3);
        let fillter_create_at_asc = <?php echo json_encode($fillter_create_at_asc); ?>;
        let fillter_created_at_desc = <?php echo json_encode($fillter_created_at_desc); ?>;
        let fillter_price_desc = <?php echo json_encode($fillter_price_desc); ?>;


        let category_grid_review = document.querySelector(".category--grid--review");
        let category_grid_review_ = document.querySelector(".category--grid--review.helo");
        let fillter_categories_list = document.querySelectorAll(".fillter_categories_list li")
        let li_first_one = document.querySelector(".fillter_categories_list>li")
        li_first_one.classList.add('active')
        let fillter_list_flow_price = document.querySelectorAll(".fillter_list_flow_price input")
        let product_fillter_flow_desc = document.querySelectorAll(".product_fillter_flow_desc input")
        let fillter_product_color = document.querySelectorAll(".fillter_product_color input")
        let product_fillter_size = document.querySelectorAll(".product_fillter_size input")
        let fillter_products_time = document.querySelectorAll(".fillter_products_time input")
        let show_title_cate = document.querySelector(".products_all red_word");
        let format_number_price = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND'
        })
        const params = new URL(location.href).searchParams;
        let id_cate_url = params.get('id');

        show_products(array_product_2, category_grid_review_);

        function show_products(list_product = arr_prodcut1, show_position = category_grid_review) {
            show_position.innerHTML = "";
            list_product.forEach(item => {
                // console.log("arra item ", item)
                show_position.innerHTML += `
                    <div class=" col l-3 m-4 c-6">
                       <div class="product__banner">
                           <div class="product--hot__img">
                           <a href="index.php?act=detail_product&id=${item.id}">    <img src="imageProduct/${item.avatar}" alt="">
                           </a> </div>
                           <div class="product__banner__name">
                           <a href="index.php?act=detail_product&id=${item.id}">    <p>${item.name}</p></a>
                           </div>
                       </div>
                       <div class="product__banner__price">
                           <div>
                               <p class="product__banner__price--cost"> ${format_number_price.format(Math.floor(item.price - ((item.price * item.discount) / 100)))} </p>

                               <p class="product__banner__price--sale   product_one_price_old">${format_number_price.format(Math.floor(item.price))}</p>
                           </div>
                           <div class="product__banner__btn--detail">
                               <a href="index.php?act=detail_product&id=${item.id}">chi tiết</a>
                           </div>
                       </div>
                   </div>`
            })
        }
        show_products();
        fillter_categories_list.forEach(elemt => {
            elemt.style.cursor = "pointer"
            let id_categor1 = document.querySelectorAll(".fillter_categories_list li");
            const array = [];

            // id_categor1.forEach((item, index) => {
            if (id_cate_url > 0) {
                if (elemt.getAttribute("data-id") == id_cate_url) {
                    document.querySelector(".fillter_categories_list>li.active").classList.remove("active");
                    elemt.classList.add('active');

                }
                elemt.addEventListener("click", (e) => {
                    document.querySelector("li.active").classList.remove("active");
                    e.target.classList.add("active");
                    let id_categor = e.target.getAttribute("data-id");

                    arr_prodcut1.forEach(iteam => {
                        if (iteam.category_id == id_categor) {
                            array.push(iteam)
                        }
                        // return id_categor == iteam.category_id
                    })

                    show_product123(listArrayPrice, listArrayDesc, array)
                })
            }


            elemt.addEventListener("click", (e) => {
                document.querySelector("li.active").classList.remove("active");
                e.target.classList.add("active");
                let id_categor = e.target.getAttribute("data-id");

                arr_prodcut3.forEach(iteam => {
                    if (iteam.category_id == id_categor) {
                        array.push(iteam)
                    }
                    // return id_categor == iteam.category_id
                })

                show_product123(listArrayPrice, listArrayDesc, array)
            })
            // }

        })



        function show_product123(arr_price = [], arrDesc = [], list_arr = arr_prodcut1) {

            const arrlist = list_arr.map((iteam, index) => {

                    let prices_price = Number(iteam.price);

                    if (arr_price.length > 0) {


                        if (prices_price < 100000 && arr_price.includes("1") == false) {
                            return
                        }
                        if (prices_price >= 100000 && prices_price < 200000 && arr_price.includes("2") == false) {
                            return
                        }
                        if (prices_price >= 200000 && prices_price < 300000 && arr_price.includes("3") == false) {
                            return
                        }
                        if (prices_price >= 300000 && prices_price < 500000 && arr_price.includes("4") == false) {
                            return
                        }
                        if (prices_price >= 500000 && prices_price < 1000000 && arr_price.includes("5") == false) {
                            return
                        }
                    }
                    if (arrDesc.length > 0) {
                        if (arrDesc.includes(iteam.name) == false) {
                            return
                        }
                    }


                    return ` 
                <div class=" col l-3 m-4 c-6">
                       <div class="product__banner">
                           <div class="product--hot__img">
                           <a href="index.php?act=detail_product&id=${iteam.id}">    <img src="imageProduct/${iteam.avatar}" alt="">
                           </a> </div>
                           <div class="product__banner__name">
                           <a href="index.php?act=detail_product&id=${iteam.id}">    <p>${iteam.name}</p></a>
                           </div>
                       </div>
                       <div class="product__banner__price">
                           <div>
                               <p class="product__banner__price--cost"> ${format_number_price.format(Math.floor(iteam.price - ((iteam.price * iteam.discount) / 100)))} </p>

                               <p class="product__banner__price--sale   product_one_price_old">${format_number_price.format(Math.floor(iteam.price))}</p>
                           </div>
                           <div class="product__banner__btn--detail">
                               <a href="index.php?act=detail_product&id=${iteam.id}">chi tiết</a>
                           </div>
                       </div>
                   </div>`
                })
                .join("");
            category_grid_review.innerHTML = arrlist;

        }
        let listArrayPrice = [];
        let listArrayDesc = [];

        function loop_list() {
            fillter_list_flow_price.forEach((product_item, inden) => {
                product_item.addEventListener("click", function() {
                    if (this.checked) {
                        listArrayPrice.push(this.value);
                    } else {
                        listArrayPrice = listArrayPrice.filter(e => e !== this.value);
                    }
                    show_product123(listArrayPrice, listArrayDesc)
                })
            })

            product_fillter_flow_desc.forEach((product_item, inden) => {
                product_item.addEventListener("click", function(e) {
                    if (this.checked) {
                        listArrayDesc.push(this.value);
                    } else {
                        listArrayDesc = listArrayDesc.filter(e => e !== this.value);
                        console.log("check array curent", listArrayDesc)
                    }
                    show_product123(listArrayPrice, listArrayDesc)
                })
            })

        }
        fillter_products_time.forEach((product_item, inden) => {
            product_item.addEventListener("click", function(e) {

                if (this.checked) {
                    if (this.value == "price_desc") {
                        show_product123(listArrayPrice, listArrayDesc, fillter_price_asc)
                    }
                    if (this.value == "price_asc") {
                        show_product123(listArrayPrice, listArrayDesc, fillter_price_desc)
                    }
                    if (this.value == "old") {
                        show_product123(listArrayPrice, listArrayDesc, fillter_create_at_asc)
                    }
                    if (this.value == "new") {
                        show_product123(listArrayPrice, listArrayDesc, fillter_created_at_desc)
                    }
                }
            })
        })
        loop_list();
    })
</script>