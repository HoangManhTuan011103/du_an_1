<section class="ctn__size--width login__acc">
    <div class="login__top--title">
      <div class="login__top--title-menu">
        <ul class="menu__children_header--bottom">
          <li>
            <a href="">Trang chủ</a> <i class="fa-solid fa-angle-right"></i>
          </li>
          <li>
            <a href="">Tin tức</a>
          </li>
        </ul>
      </div>
      <div class="login__top--title-2">
        <p class="title_login--children">Tin tức</p>
      </div>
    </div>
    <div class="login__bottom-form tintuc__ctn">
      <div class="tintuc__left--menu">
        <div class="tintuc__left--menu-top">
          <div>
            <h4 class="title__menu--jj">DANH MỤC TIN TỨC</h4>
          </div>
          <div>
            <ul class="menu__left--children">
              <li class="nav_li">
                <a href="index.php">Trang chủ</a>
              </li>
              <li class="nav_li">
                <a href="index.php?act=showProducts">Sản phẩm</a>
                <i class="fa-solid fa-angle-down show__nav" onclick="chan(this)"></i>
                <ul class="sub__menu--children">
                  <li>
                    <a href="">Giày nam</a>
                  </li>
                  <li>
                    <a href="">Giày nữ</a>
                  </li>
                  <li>
                    <a href="">Giày bé trai</a>
                  </li>
                  <li>
                    <a href="">Giày bé gái</a>
                  </li>
                </ul>
              </li>
              <li class="nav_li">
                <a href="index.php?act=lienhe">Liên hệ</a>
              </li>
              <li class="nav_li">
                <a href="index.php?act=gioithieu">Giới thiệu</a>
              </li>
              <li class="nav_li">
                <a href="index.php?act=tintuc">Tin tức</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="tintuc__left--menu-bottom">
          <div>
            <h4 class="title__menu--jj">
              <a class="cls__f_t_a" href="">SIÊU BÃO VỀ GIÁ</a>
            </h4>
          </div>
          <div class="content__sbvg--ctn">
          <?php
            foreach ($listLowPrice as $value) {
              $priceFM = number_format($value['price'] - ($value['price'] / 100)*$value['discount'], 0, '', ',');
              echo '
                  <div class="rows_sbvg">
                    <div class="sbvg__image">
                      <img
                        src="imageProduct/'.$value['avatar'].'"
                        alt="" srcset="" />
                    </div>
                    <div class="sbvg__content">
                      <p>
                        <a href="index.php?act=detail_product&id='.$value['id'].'" class="cls__f_t_a">'.$value['name'].'</a>
                      </p>
                      <p class="price__sbvg">'.$priceFM.' đ</p>
                      <p class="price__sbvg-old">'.number_format($value['price'], 0, '', ',').' đ</p>
                    </div>
                  </div>
              ';
            }

          ?>
            <!-- <div class="rows_sbvg">
              <div class="sbvg__image">
                <img
                  src="https://bizweb.dktcdn.net/thumb/medium/100/342/645/products/men-s-original-canvas-casual-skate-shoes.png?v=1545564063607"
                  alt="" srcset="" />
              </div>
              <div class="sbvg__content">
                <p>
                  <a href="" class="cls__f_t_a">Giày thể thao nữ cổ thấp mẫu mới nhất</a>
                </p>
                <p class="price__sbvg">269.000 đ</p>
                <p class="price__sbvg-old">200.000 đ</p>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="tintuc__right--content">
        <div class="tintuc__noibat">
          <div class="anh__ttnb">
            <a href=""><img
                src="https://file.hstatic.net/1000355922/file/converse_chuck_taylor_all_stars_c138c55f4b79487abde30f5e4c591dfd_grande.jpg"
                alt="" class="daupage" /></a>
          </div>
          <div class="noidung__ttnb">
            <h4>
              <a href="" class="cls__f_t_a">TOP 12 mẫu giày thể thao nữ đẹp nhất năm 2022</a>
            </h4>
            <p>
            1. Converse Chuck Taylor All Stars Đứng đầu là mẫu giày Converse Chuck Taylor All Stars phổ biến được nhiều bạn nam và nữ biết đến nhiều nhất trên thế giới Tên giày được đặt theo tên của một vận động viên bóng rổ Indiana Chuck Taylor và đến nay nó vẫn là mẫu giày đẹp và tốt nhất mọi thời đại. Với rất nhiều màu sắc, bạn có thể lựa chọn cho mình những kiểu phù hợp nhất nhé
            2. Gucci Sneakers
            Năm 1984 đôi giày Sneakers đầu tiên được Gucci gới thiệu cho đến nay với nhiều thiết kế thay đổi lớn so với kiểu dáng ban đầu. Đã tạo nên cơn sốt cho người dùng khi có thể sở hữu cho mình một đôi giày thể thao hàng hiệu nổi tiếng nhưng giá thành lại phù hợp túi tiền.
            </p>
          </div>
        </div>
        <h3 class="bvk__op0">BÀI VIẾT KHÁC</h3>
        <div>
          <div class="list__tintuc-card">
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/xu_huong_chunky_sneaker_1737f6f5e9824feebd9d6f668e41dfdb_grande.png"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">Top 10 mẫu giày thể thao yêu thích nhất hiện nay</a>
                </h4>
                <p class="contentt__child33">
                Ngoài kiểu dáng kích thước nổi bật thì chất liệu tạo nên giày là một trong những yếu tố hàng đầu giúp cho sản phẩm nâng tầm cho người sử dụng.
                Trước đây đa phần giày sẽ sử dụng chất liệu vải, da nhưng trong những năm gần đây xu hướng sử dụng chất liệu sợi dệt công nghệ cao đang được sử dụng rộng rãi giúp người dùng sủ dụng cảm giác thoải mái nhất
                Giày thiết kế Chunky Sneaker ra đời năm 2018 đã tạo nên cơn sốt trong giới trẻ. Là loại giày có kiểu dáng kích thước to, đế giày to dày cùng với những chi tiết khỏe, trẻ trung.
                Sản phẩm ra đời đã nhanh chóng chiếm được tình cảm của rất nhiều người là tín đồ của Sneaker và luôn là sự lựa chọn hàng đầu của giới trẻ
                </p>
              </div>
            </div>
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/coman_shop_f5518fe7970843659b79aa51e1f7dd24_grande.jpg"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">4 Đôi giày thể thao mới ra mắt đầu tháng 6</a>
                </h4>
                <p class="contentt__child33">
                Hàng được sản xuất tại Việt Nam, chất lượng luôn được đảm bảo ở hàng Fake cao nhất. Bạn sẽ nhận nhiều ưu đãi hấp dẫn mỗi khi ghé Shop để mua sắm.Vậy nên, bạn hãy đến với Coman Shop để có những đôi giày đẹp và thời trang nhất nhé!
                </p>
              </div>
            </div>
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/adidas_stan_smith_trainers_18260fe3568849b698d91b010d0be2be_grande.jpg"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">Adidas Stan Smith Trainers</a>
                </h4>
                <p class="contentt__child33">
                Mẫu giày phù hợp với nhiều lứa tuổi, dù bạn 20 hay 30 tuổi, Adidas Stan Smith vẫn luôn là một lựa chọn thích hợp. Nó đã thành công lớn kể từ khi được ra mắt vào đầu những năm bảy mươi.Kể từ ngày ra mắt năm 1973 đến nay có hơn 32 triệu đôi giày bán ra trên thị trường hiện nay bạn có thể mua giày tại rất nhiều địa điểm trên toàn quốc
                </p>
              </div>
            </div>
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/shop-giay-cao-co-giay-la_fd608ca76c094442a13ef9e55b46eeb5_grande.jpg"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">NMD Triple White</a>
                </h4>
                <p class="contentt__child33">
                Có mặt tại thị trường giày thể thao nữ vào tháng 12 năm 2015 đến nay Adidas NMD Triple White vẫn khẳng định được chổ đứng trong lòng người tiêu dùng. Mặc dù không được nổi bật như những dòng giày điểm qua phía trên.
                </p>
              </div>
            </div>
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/nmd_triple_white_29f4b2a557564b9db01cd5eda727a2a6_grande.jpg"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">4 Đôi giày thể thao mới ra mắt đầu tháng 6</a>
                </h4>
                <p class="contentt__child33">
                Mẫu Adidas này mang đến sự thoải mái linh hoạt cho cả ngày dài vận động. Đồng thời mang lại cho bạn một phong cách trẻ trung, ấn tượng.Ngoài ra, nhiều review của người dùng còn đề cao sự nhẹ nhàng và sự khéo léo cao cấp của nó, kết hợp hoàn hảo giữa tính năng dành cho vận động và phong cách trong một đôi giày thời trang.Với những đặc tính nổi bật trên không khó để EQT White Turbo lọt vào top những đôi giày thể thao nữ đẹp nhất mời thời đại
                </p>
              </div>
            </div>
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/adidas_yeezy_boost_350_trainers_81a2d2cd5b4e43ef8d4d305f12abd7a5_grande.jpg"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">Adidas Yeezy Boost 350 Trainers</a>
                </h4>
                <p class="contentt__child33">
                Đây là một trong các loại giày thể thao nữ được yêu thích và mua nhiều bởi cả nam và nữ.Chắc chắn rằng Yeezy Boost 350 sẽ luôn chiếm Top 1 trong  bảng xếp hạng những mẫu giày nữ hot nhất hiện nay mà nàng nên có
                </p>
              </div>
            </div>
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/nike_cortez_sneakers_f5f752b305644de9b0986a66f4ea6b10_grande.jpg"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">Nike Cortez Sneakers</a>
                </h4>
                <p class="contentt__child33">
                Với thiết kế kiểu dáng thời trang và đầy thể thao Nike Cortez Sneakers được Nike giới thiệu những mẫu lần đầu vào năm 1972 và luôn nằm trong top những mẫu giày thể thao nữ được yêu thích nhất.
                </p>
              </div>
            </div>
            <div class="l__tt_c_children">
              <div class="anh__ttnb size__df">
                <a href=""><img
                    src="https://file.hstatic.net/1000355922/file/prophere_all_black_ea5dabd1005c47639ef0d561cfbc5912_grande.jpg"
                    alt="" srcset="" /></a>
              </div>
              <div class="noidung__ttnb">
                <h4>
                  <a href="" class="cls__f_t_a">Prophere All Black</a>
                </h4>
                <p class="contentt__child33">
                Điểm thu hút của đôi giày này nằm ở phần đế giày, với việc áp dụng công nghệ Midsole PU chunky vào sản xuất đã tạo nên những mẫu giày mang rất nhẹ và êm chân giúp người dùng di chuyển linh hoạt và thoải mái.Được thiết kế từ các vật liệu chất lượng cao và thoải mái, đôi giày này không chỉ mang đến cho nàng một phong cách thời trang cá tính, mà còn nổi bật với ưu điểm bền bỉ và hỗ trợ hoàn hảo cho trang phục thông thường.
                </p>
              </div>
            </div>
          </div>
          <div>
            <ul class="chuyentiep__tintuc">
              <li class="next active"><a href="" class="cls__f_t_a">1</a></li>
              <li class="next"><a href="" class="cls__f_t_a">2</a></li>
              <li class="next"><a href="" class="cls__f_t_a">>></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>