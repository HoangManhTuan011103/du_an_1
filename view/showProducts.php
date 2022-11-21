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
        <?= $namecategory ?>
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

            <!-- 
            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Thương hiệu
                </p>
                <div class="product_fillter_flow_content">
                    <ul>
                        <li>

                            <label for="">
                                <input type="checkbox">
                                Adidas</label>

                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Hapu</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Hura</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Korean</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Mira</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Nike</label>
                        </li>
                    </ul>
                </div>
            </div> -->



            <div class="fillter_product_flow_category">
                <p class="product_categories_name">
                    Mức giá
                </p>
                <div class="product_fillter_flow_content">
                    <ul class="fillter_list_flow_price">
                        <li>
                            <label for="">
                                <input value='1' name="price[]" type="checkbox">
                                Giá dưới 100.000đ</label>
                        </li>
                        <li>
                            <label for="">
                                <input value='2' name="price[]" type="checkbox">
                                100.000đ - 200.000đ</label>

                        </li>
                        <li>
                            <label for="">
                                <input value='3' name="price[]" type="checkbox">
                                200.000đ - 300.000đ</label>

                        </li>
                        <li>
                            <label for="">
                                <input value='4' name="price[]" type="checkbox">
                                300.000đ - 500.000đ</label>

                        </li>
                        <li>
                            <label for="">
                                <input value='5' name="price[]" type="checkbox">
                                500.000đ - 1.000.000đ</label>

                        </li>
                        <li>
                            <label for="">
                                <input type="chename=" price[]"ckbox" value="6">
                                Giá trên 1.000.000đ</label>

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
                                <input type="checkbox">
                                Giày cổ cao</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
                                Giày cổ thấp</label>
                        </li>
                        <li>
                            <label for="">
                                <input type="checkbox">
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
                        <input type="checkbox" name="" id="">Hàng mới về
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">Hàng cũ nhất
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">Giá tăng dần
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">Giá giảm dần
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
            <div class="row category--grid--review">

                <?php
                foreach ($protop4 as $pro) {
                    extract($pro);
                    $hinh = $image_path . $avatar;
                    $linkpro = "index.php?act=detail_product&id=" . $id;
                    $pricepricem = ($price * $discount) / 100;
                    // $pricesale = $price - $pricepricem;
                    echo '<div class=" col l-3 m-4 c-6">
                        <div class="product__banner">
                            <div class="product--hot__img">
                            <a href="' . $linkpro . '"> <img src="' . $hinh . '" alt=""></a>
                            </div>
                            <div class="product__banner__name">
                            <a href="' . $linkpro . '">   <p>' . $name . '</p></a>
                            </div>
                        </div>
                        <div class="product__banner__price">
                            <div>
                                <p class="product__banner__price--cost">' . number_format($price - $pricepricem) . '<u>đ</u></p>

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

        </div>
    </div>

</div>


<script>
    console.log(JSON.parse('<?php echo json_encode($prolist); ?>'));
    let array_product = JSON.parse('<?php echo json_encode($prolist); ?>');
    let category_grid_review = document.querySelector(".category--grid--review");
    let fillter_categories_list = document.querySelectorAll(".fillter_categories_list li")
    let fillter_list_flow_price = document.querySelectorAll(".fillter_list_flow_price input")
    let product_fillter_flow_desc = document.querySelectorAll(".product_fillter_flow_desc input")
    let fillter_product_color = document.querySelectorAll(".fillter_product_color button")
    let product_fillter_size = document.querySelectorAll(".product_fillter_size input")
    let fillter_products_time = document.querySelectorAll(".fillter_products_time input")




    function show_products(list_product = array_product, show_position = category_grid_review) {
        show_position.innerHTML = "";
        list_product.forEach(item => {

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
                               <p class="product__banner__price--cost"> ${Math.floor(item.price - ((item.price * item.discount) / 100))} <u>đ</u></p>

                               <p class="product__banner__price--sale   product_one_price_old">${Math.floor(item.price)}<u>đ</u></p>
                           </div>
                           <div class="product__banner__btn--detail">
                               <a href="index.php?act=detail_product&id=${item.id}">chi tiết</a>
                           </div>
                       </div>
                   </div>`
        })
    }
    // show_products();
    fillter_categories_list.forEach(item => {
        item.addEventListener("click", e => {
            console.log(e.target)
            let id_categor = e.target.getAttribute("data-id");

            let data_array = array_product.filter(item => {

                return id_categor == item.category_id
            })

            // show_products(data_array);
        })
    })

    function show_product123(arr_price = []) {
        console.log(arr_price)
        const arrlist = array_product.map((iteam, index) => {
                if (arr_price.length > 0) {
                    if (iteam.price < 1000 && arr_price.includes("1") == false) {
                        return console.log(arr_price)
                    }
                    if (iteam.price > 1000 && iteam.price < 1000000 && arr_price.includes("2") == false) {
                        // console.log();
                        return
                    }
                    if (iteam.price >= 10000000 && iteam.price < 15000000 && arr_price.includes("3") == false) {
                        return
                    }
                    if (iteam.price >= 15000000 && arr_price.includes("4") == false) {
                        return
                    }
                }

                console.log("check item ", index, iteam);
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
                               <p class="product__banner__price--cost"> ${Math.floor(iteam.price - ((iteam.price * iteam.discount) / 100))} <u>đ</u></p>

                               <p class="product__banner__price--sale   product_one_price_old">${Math.floor(iteam.price)}<u>đ</u></p>
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

    function thuonghieudt() {

        const thuonghieu_list = [];
        const arr_price = [];
        // for (let i = 0; i < thuonghieuchon.length; i++) {
        //     if (thuonghieuchon[i].checked == true) {
        //         thuonghieu_list.push(thuonghieuchon[i].value);
        //     }

        // }
        fillter_list_flow_price.forEach(item => {
            item.addEventListener("change", (e) => {
                if (e.target.checked) {
                    arr_price.push(e.target.value);
                    // console.log(arr_price);
                    show_product123(arr_price);
                }
            })
        })


    }
    // thuonghieudt();


    const searchProductsByPrice = (products, minPrice, maxPrice) => {
        let arr = products.map((product) => {
            if (product.price > minPrice && product.price < maxPrice) {
                console.log("check product price 1", product)


                return ` 
                <div class=" col l-3 m-4 c-6">
                       <div class="product__banner">
                           <div class="product--hot__img">
                           <a href="index.php?act=detail_product&id=${product.id}">    <img src="imageProduct/${product.avatar}" alt="">
                           </a> </div>
                           <div class="product__banner__name">
                           <a href="index.php?act=detail_product&id=${product.id}">    <p>${product.name}</p></a>
                           </div>
                       </div>
                       <div class="product__banner__price">
                           <div>
                               <p class="product__banner__price--cost"> ${Math.floor(product.price - ((product.price * product.discount) / 100))} <u>đ</u></p>

                               <p class="product__banner__price--sale   product_one_price_old">${Math.floor(product.price)}<u>đ</u></p>
                           </div>
                           <div class="product__banner__btn--detail">
                               <a href="index.php?act=detail_product&id=${product.id}">chi tiết</a>
                           </div>
                       </div>
                   </div>`
            }
            // return
        })

        category_grid_review.innerHTML = arr;
    }
    let price_checked = document.querySelectorAll('input[name="price[]"]:checked');
    price_checked.forEach(function(item,index){

        item.onchange = (e) => {
            if (index == 0 && e.target.value == 1 && e.target.checked) {
                searchProductsByPrice(array_product, 100, 400000)
    
            } else if (index == 1 && e.target.value == 2 && e.target.checked) {
                searchProductsByPrice(array_product, 1000, 800000)
            }
        }
    })
    fillter_list_flow_price.forEach((item, index) => {
        item.addEventListener("change", (e) => {
            if (e.target.checked == true) {
                console.log(index, e.target)
                if (index == 0 && e.target.value == 1 && e.target.checked) {
                    searchProductsByPrice(array_product, 100, 400000)

                } else if (index == 1 && e.target.value == 2 && e.target.checked) {
                    searchProductsByPrice(array_product, 1000, 800000)
                }
            }

        })
    })
</script>