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
                        <li>
                            <label for="">
                                <input value='6' type="checkbox">
                                Giá trên 1.000.000đ</label>

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



            </div>

            <!-- phân trang -->
            <div class="row product_fillter_page">

                <ul class="" id="pagination"> </ul>

            </div>
            <!-- bạn thích -->
            <h2 class="products_all">Có thể bạn thích</h2>
            <div class="row category--grid--review helo">

            </div>

        </div>
    </div>

</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.category--grid--review.helo').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            prevArrow: '<span class="prevArrow" id="prevArrowLimited"><i class="fa-solid fa-chevron-left"></i></span>',
            nextArrow: '<span class="nextArrow" id="nextArrowLimited"><i class="fa-solid fa-chevron-right"></i></span',
            slidesToScroll: 1
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script type="text/javascript">

    let kyw = <?php echo json_encode($kyw); ?>;
    let arr_prodcut1 = <?php echo json_encode($prolist); ?>;
   

    let arr_prodcut3 = <?php echo json_encode($prolist1); ?>;
    let array_product_2 = <?php echo json_encode($protop4); ?>;


    let fillter_create_at_asc = <?php echo json_encode($fillter_create_at_asc); ?>;
    let fillter_created_at_desc = <?php echo json_encode($fillter_created_at_desc); ?>;

    let category_grid_review = document.querySelector(".category--grid--review");
    let category_grid_review_ = document.querySelector(".category--grid--review.helo");
    let fillter_categories_list = document.querySelectorAll(".fillter_categories_list li")


    let fillter_list_flow_price = document.querySelectorAll(".fillter_list_flow_price input")
    let product_fillter_flow_desc = document.querySelectorAll(".product_fillter_flow_desc input")

    let fillter_products_time = document.querySelectorAll(".fillter_products_time input")

    let format_number_price = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND'
    })

    let listArrayPrice = [];
    let listArrayDesc = [];
    let id_category = 0;
    let users = [];
    let currentPage = 1;
    let perPage = 8;
    let totalPage = 0;
    let perProduct = [];
    let count_page = arr_prodcut3;
    const params = new URL(location.href).searchParams;


    

    // phân trang


    function data_render_page() {
        if (params.get('id') || kyw) {
            users = arr_prodcut1;

        } else {
            users = arr_prodcut3;

        }
        perProduct = users.slice(
            (currentPage - 1) * perPage,
            (currentPage - 1) * perPage + perPage,

        )
        renderPageNumber(users.length)
        show_product123(listArrayPrice, listArrayDesc, perProduct)
    }

    function handlePageNumber(numberPage) {
        currentPage = numberPage;
        perProduct = users.slice(
            (currentPage - 1) * perPage,
            (currentPage - 1) * perPage + perPage,

        )
        show_product123(listArrayPrice, listArrayDesc, perProduct)

    }


    function renderPageNumber(count) {
        totalPage = Math.ceil((count / perPage));
        console.log("total páge :", totalPage);
        if (totalPage == 1) {
            document.querySelector("#pagination").innerHTML = " "

        } else {

            for (let i = 1; i <= totalPage; i++) {
                document.querySelector("#pagination").innerHTML += `<li class="product_page-item" onclick="handlePageNumber(${i})">${i}</li>`
            }
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        let li_active = document.querySelectorAll("li.product_page-item");
        if (li_active[0]) {

            li_active[0].classList.add('activ');
        }
        li_active.forEach(item => {
            item.addEventListener('click', e => {
                document.querySelector(".product_page-item.activ").classList.remove("activ");
                e.target.classList.add('activ');
            })
        })
    })

    function show_products(list_product = arr_prodcut1, show_position = category_grid_review) {
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
    show_products(array_product_2, category_grid_review_);

    show_products();
    data_render_page();



    function show_product123(arr_price = listArrayPrice, arrDesc = listArrayDesc, list_arr = users) {
        if (id_category !== 0) {
            list_arr = list_arr.filter(function(item) {
                return item.category_id == id_category;
            });
        }
        const arrlist = list_arr.filter((iteam, index) => {

            let prices_price = Math.floor(iteam.price - ((iteam.price * iteam.discount) / 100));

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
                if (prices_price >= 1000000 && arr_price.includes("6") == false) {
                    return
                }
            }
            if (arrDesc.length > 0) {
                if (arrDesc.includes(iteam.name) == false) {
                    return
                }
            }


            return [{
                id: iteam.id,
                price: iteam.price,
                discount: iteam.discount,
                avatar: iteam.avatar
            }]


        })
        console.log(arrlist)
        // data_render_page();

        show_products(arrlist, category_grid_review)

    }

    function loop_list() {
        fillter_list_flow_price.forEach((product_item, inden) => {
            product_item.addEventListener("click", function() {
                if (this.checked) {
                    listArrayPrice.push(this.value);
                } else {
                    listArrayPrice = listArrayPrice.filter(e => e !== this.value);
                }
                show_product123(listArrayPrice, listArrayDesc, perProduct)
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
                    let data_price = perProduct.sort((a, b) => (
                        Math.floor(a.price - ((a.price * a.discount) / 100)) -
                        Math.floor(b.price - ((b.price * b.discount) / 100))
                    ))


                    show_product123(listArrayPrice, listArrayDesc, data_price)
                }
                if (this.value == "price_asc") {
                    let data_price = perProduct.sort((a, b) =>
                        (
                            Math.floor(b.price - ((b.price * b.discount) / 100)) -
                            Math.floor(a.price - ((a.price * a.discount) / 100))
                        ))


                    show_product123(listArrayPrice, listArrayDesc, data_price)
                }
                if (this.value == "old") {

                    let data_price = perProduct.sort((a, b) =>
                        (
                            parseInt(moment(new Date(a.created_at)).format('YYYYMMDDHHmmss')) -
                            parseInt(moment(new Date(b.created_at)).format('YYYYMMDDHHmmss'))
                        ))
                    console.log(data_price)
                    show_product123(listArrayPrice, listArrayDesc, data_price)
                }
                if (this.value == "new") {
                    let data_price = perProduct.sort((a, b) =>
                        (
                            parseInt(moment(new Date(b.created_at)).format('YYYYMMDDHHmmss')) -
                            parseInt(moment(new Date(a.created_at)).format('YYYYMMDDHHmmss'))
                        ))
                    console.log(data_price)

                    show_product123(listArrayPrice, listArrayDesc, data_price)
                }
            }
        })
    })

    function filter_array_cate_by_click(id) {

        let arr_list_cate = arr_prodcut3.filter(iteam => {
            return iteam.category_id == id
        })

        show_product123(listArrayPrice, listArrayDesc, arr_list_cate);

    }
    if (params.get('id')) {
        id_category = params.get('id');
        filter_array_cate_by_click(id_category)
        fillter_categories_list.forEach(value => {
            if (params.get("id") == value.getAttribute("data-id")) {
                value.classList.add('active');
            }
            value.addEventListener("click", function() {

                let li_active = document.querySelector("li.active");
                if (li_active) {
                    li_active.classList.remove('active');
                    this.classList.add('active');
                }
                id_category = this.getAttribute("data-id")
                filter_array_cate_by_click(id_category);
            })
        })

    } else {
        fillter_categories_list.forEach(value => {
            value.addEventListener("click", function() {
                let li_active = document.querySelector("li.active");
                if (li_active) {
                    li_active.classList.remove('active');
                    this.classList.add('active');
                }
                id_category = this.getAttribute("data-id")
                filter_array_cate_by_click(id_category);
                this.classList.add("active");
            })
        })
    }

    loop_list();
    // })

    // phân trang


    function data_render_page(arr = arr_prodcut3) {
        if (params.get('id')||kyw) {
            users = arr_prodcut1;

        } else {
            users = arr;

        }
        perProduct = users.slice(
            (currentPage - 1) * perPage,
            (currentPage - 1) * perPage + perPage,

        )
        renderPageNumber(users.length)
        show_product123(listArrayPrice, listArrayDesc, perProduct)
    }

    function handlePageNumber(numberPage) {
        currentPage = numberPage;
        perProduct = users.slice(
            (currentPage - 1) * perPage,
            (currentPage - 1) * perPage + perPage,

        )
        show_product123(listArrayPrice, listArrayDesc, perProduct)

    }


    function renderPageNumber(count) {
        totalPage = Math.ceil((count / perPage));
        console.log("total páge :", totalPage);
        if (totalPage == 1) {
            document.querySelector("#pagination").innerHTML = " "

        } else {

            for (let i = 1; i <= totalPage; i++) {
                document.querySelector("#pagination").innerHTML += `<li class="product_page-item" onclick="handlePageNumber(${i})">${i}</li>`
            }
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        let li_active = document.querySelectorAll("li.product_page-item");
        if (li_active[0]) {

            li_active[0].classList.add('activ');
        }
        li_active.forEach(item => {
            item.addEventListener('click', e => {
                document.querySelector(".product_page-item.activ").classList.remove("activ");
                e.target.classList.add('activ');
            })
        })
    })
</script>