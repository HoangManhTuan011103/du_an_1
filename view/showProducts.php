<div class="boxcenter">
        <div class="trangsp">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li>></li>
                <li><span> Tất cả sản phẩm</span></li>
            </ul>
            
        </div>
    <h1>Tất cả sản phẩm</h1>
    <div class="boxleft">
        <div class="rows">
            <h2>DANH MỤC SẢN PHẨM</h2>
            <div class="boxcontent">
                <p>Trang chủ</p>
                <p>Sản phẩm</p>
            <p>Giày thể thao</p>
            <p>Liên hệ</p>
            <p>Tin tức</p>
            </div>
            
        </div>
        <div class="rows">
            <h2>THƯƠNG HIỆU</h2>
            <div class="boxcontent">
            <p>
                <input type="checkbox">Adidas
            </p>
            <p>
                <input type="checkbox">Hapu
            </p>
            <p>
                <input type="checkbox">Hura
            </p>
            <p>
                <input type="checkbox">Korean
            </p>
            <p>
                <input type="checkbox">Mira
            </p>
            <p>
                <input type="checkbox">Thái Lan
            </p>
        </div>
        </div>
        <div class="rows">
            <h2>MỨC GIÁ</h2>
            <div class="boxcontent">
            <p>
                <input type="checkbox">Giá dưới 100.000đ
            </p>
            <p>
                <input type="checkbox">100.000đ - 200.000đ
            </p>
            <p>
                <input type="checkbox">200.000đ - 300.000đ
            </p>
            <p>
                <input type="checkbox">300.000đ - 500.000đ
            </p>
            <p>
                <input type="checkbox">500.000đ - 1.000.000đ
            </p>
            <p>
                <input type="checkbox">Giá trên 1.000.000đ
            </p>
        </div>
        </div>
        <div class="rows">
            <h2>LOẠI SẢN PHẨM</h2>
            <div class="boxcontent">
            <p>
                <input type="checkbox">Giày cổ cao
            </p>
            <p>
                <input type="checkbox">Giày cổ cao
            </p>
            <p>
                <input type="checkbox">Giày cổ cao
            </p>
            <p>
                <input type="checkbox">Giày cổ cao
            </p>
        </div>
        </div>
        <div class="rows">
            <h2>MÀU ƯA CHUỘNG</h2>
            <div class="colors">
   
                    <ul>
                        <li style="background-color: #F1C40F;"></li>
                        <li style="background-color: #9B59B6;"></li>
                        <li style="background-color: #E74C3C;"></li>
                        <li style="background-color: #2ECC71;"></li>
                        <li style="background-color: #FF00CC;"></li>
                        <li style="background-color: #E67E22;"></li>
                    </ul>
            
            </div>
        </div>
        <div class="rows">
            <h2>THEO KÍCH CỠ</h2>
            <div class="boxcontent">
            <ul>
                <li><input type="checkbox">38</li>
                <li><input type="checkbox">39</li>
                <li><input type="checkbox">40</li>
                <li><input type="checkbox">41</li>
                <li><input type="checkbox">42</li>
            </ul>
        </div>
        </div>
    </div>
    <div class="boxright">
        <div class="selectsp">
        
        <ul>
            <li><b>Sắp xếp:   </b></li>
            <li><span>  <input type="checkbox">Hàng mới về </span></li>
                <li><span>  <input type="checkbox">Hàng cũ nhất </span></li>
                <li><span>  <input type="checkbox">Giá tăng dần </span></li>
                <li><span> <input type="checkbox">Giá giảm dần </span></li>
        </ul>
        </div>
        <hr>
        <div class="sp">
            <?php
               foreach ($protop16  as $pro) {
                   extract($pro);
                   $hinh = $image_path.$avatar;
                   $giagiam = ($price * $discount)/100 ;
                   echo '<div class="spt">
                   <div class="sp__banner">
                       <div class="sp--hot__img">
                           <img src="'.$hinh.'" alt="" width="100px">
                       </div>
                       <div class="sp__banner__name">
                           <p>'.$name.'</p>
                       </div>
                   </div>
                   <div class="sp__banner__price">
                       <div>
                           <p class="sp__banner__price--cost">'.$giagiam.' <u>đ</u></p>
                           <p class="sp__banner__price--del"><del>'.$price.'</del><u>đ</u></p>
                           <p class="sp__banner__price--sale"></p>
                       </div>
                       <div class="sp__banner__btn--detail">
                           <button href="">chi tiết</button>
                       </div>
                   </div>
               </div>';
               }
            ?>
            <!-- <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div> -->

            <!-- <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>
            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            
            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>
            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div> -->

            
        </div>
        <div class="love">
            <div class="td-yeuthich">CÓ THỂ BẠN THÍCH</div>
            <?php
               foreach ($protop4  as $pro) {
                   extract($pro);
                   $hinh = $image_path.$avatar;
                   $giagiam = ($price * $discount)/100 ;
                   echo '<div class="spt">
                   <div class="sp__banner">
                       <div class="sp--hot__img">
                           <img src="'.$hinh.'" alt="" width="100px">
                       </div>
                       <div class="sp__banner__name">
                           <p>'.$name.'</p>
                       </div>
                   </div>
                   <div class="sp__banner__price">
                       <div>
                           <p class="sp__banner__price--cost">'.$giagiam.'<u>đ</u></p>
                           <p class="sp__banner__price--del"><del>'.$price.'</del><u>đ</u></p>
                           <p class="sp__banner__price--sale"></p>
                       </div>
                       <div class="sp__banner__btn--detail">
                           <button href="">chi tiết</button>
                       </div>
                   </div>
               </div>';
               }
            ?>
            <!-- <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div>

            <div class="spt">
                <div class="sp__banner">
                    <div class="sp--hot__img">
                        <img src="./src/css/image/iphone14.jpg" alt="" width="100px">
                    </div>
                    <div class="sp__banner__name">
                        <p>Bộ quần áo bóng đá nam AATR035-5</p>
                    </div>
                </div>
                <div class="sp__banner__price">
                    <div>
                        <p class="sp__banner__price--cost">1.200.000 <u>đ</u></p>
                        <p class="sp__banner__price--del"><del>1.500.000</del><u>đ</u></p>
                        <p class="sp__banner__price--sale"></p>
                    </div>
                    <div class="sp__banner__btn--detail">
                        <button href="">chi tiết</button>
                    </div>
                </div>
            </div> -->
            
        </div>
    </div>
</div>