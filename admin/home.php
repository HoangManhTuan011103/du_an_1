<div class="contentManager">
            <div class="contentManager--header">
                <div class="smallStatistics">
                    <h2 class="numberStatistics">
                        <?php
                            $totalOrder = 0;
                            foreach($listBuyOnDay as $value){
                                $totalOrder += $value['kh_mua'];
                            }
                        ?>
                        <?= $totalOrder ?>
                    </h2>
                    <p class="nameStatistics">
                        Đơn hàng giao dịch trong ngày
                    </p>
                    <div class="viewDetailStatistics">
                      <a href="index.php?actAdmin=statisticals" style="color: #ffffff;"> Xem chi tiết<i class="fa-sharp fa-solid fa-gear"></i></a>
                    </div>
                </div>
                <div class="smallStatistics smallStatisticsGreen">
                    <h2 class="numberStatistics">
                        10
                    </h2>
                    <p class="nameStatistics">
                        Số lượng sản phẩm hiện có
                    </p>
                    <div class="viewDetailStatistics">
                        Xem chi tiết<i class="fa-sharp fa-solid fa-gear"></i>
                    </div>
                </div>
                <div class="smallStatistics smallStatisticsOrange">
                    <h2 class="numberStatistics">
                        5
                    </h2>
                    <p class="nameStatistics">
                        Số lượng tài khoản khách hàng
                    </p>
                    <div class="viewDetailStatistics">
                        Xem chi tiết<i class="fa-sharp fa-solid fa-gear"></i>
                    </div>
                </div>
                <div class="smallStatistics smallStatisticsRed">
                    <h2 class="numberStatistics">
                        7
                    </h2>
                    <p class="nameStatistics">
                        Lượt truy cập hàng ngày
                    </p>
                    <div class="viewDetailStatistics">
                        Xem chi tiết<i class="fa-sharp fa-solid fa-gear"></i>
                    </div>
                </div>
            </div>
            <div class="contentManager--footer">
                <div class="contentManager--footer__left">
                    <div class="title">
                        <h2 style="color: #ffffff; padding-bottom: 20px; text-align: center; font-size: 28px;">Biểu đồ thống kê tổng quan</h2>
                    </div>
                    <canvas id="canvas5"></canvas>
                </div>
                <div class="contentManager--footer__right ">
                    <div class="title ">
                        <h2>Sản phẩm bán chạy nhất: SP00<?= $bestSale['id'] ?></h2>
                        <h2 style="padding-top: 10px;">Số lượng bán được: <?= $bestSale['quantity'] ?></h2>
                    </div>
                    <div class="tableProduct ">
                        <?php
                            $imagePath = "../imageProduct/" . $bestSale['avatar'];
                            $image = "<img src='" . $imagePath . "' alt='' width='200px' >";
                        ?>
                        <div class="image">
                            <?= $image  ?>
                        </div>
                        <div class="infor">
                            <div class="title--inforProduct">
                                <h2 style="color: #ffffff;"><?= $bestSale['name'] ?></h2>
                            </div>
                            <div class="price--inforProduct">
                                <div class="price--inforProduct__discount">
                                    <p style="color: #ffffff;"><?= number_format($bestSale['price'])."đ"  ?></p>
                                </div>
                                <div class="price--inforProduct__root">
                                  
                                    <p style="color: #ffffff;"><?= number_format($bestSale['price'] - ($bestSale['price'] * $bestSale['discount'])/100 )."đ" ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn--seeProduct ">
                        <a href=" "><button>Xem chi tiết sản phẩm</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.min.js"></script>
    <script type="module" src="../src/js/script.js"></script>
    <script src="../src/js/animation.js"></script>
</body>

</html>