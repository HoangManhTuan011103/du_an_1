<div class="contentManager contentManager--product">
    <div class="contentManager--product__header">
        <div class="contentManager--product__header--title">
            <h2 style="color: #ffffff;">Thống kê hệ thống</h2>

        </div>
        <div class="contentManager--product__header--control">
            <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-database"></i>Thống kê báo cáo</span>
        </div>
    </div>
    <h2 style="color: #ffffff; margin-top: 45px; margin-bottom: 10px;">Tổng doanh thu tháng <?= $sumMoneyMonthCurrently['total_flow_month']  ?>/<?= $sumMoneyMonthCurrently['total_flow_year'] ?> là: <?= number_format($sumMoneyMonthCurrently['sum(total_price)']) . "đ" ?> </h2>
    <div class="contentManager--product__footer contentManager--product__footer--addProduct">
        <div class="statistical--first">
            <div class="statistical--topProduct">
                <div class="title">
                    <?php
                    $totalOrder = 0;
                    foreach ($listBuyOnDay as $value) {
                        $totalOrder += $value['kh_mua'];
                    }
                    ?>

                    <h2>Đơn hàng giao dịch trong ngày: <?= $totalOrder ?></h2>
                </div>
                <div class="tableProduct">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mã khách hàng</th>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Số lượng đơn</th>
                                <th>Tổng tiền</th>
                                <th>Ngày mua</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listBuyOnDay as $value) : ?>
                                <tr>
                                    <td>KH00<?= $value['id_kh'] ?></td>
                                    <td>DH00<?= $value['id_don_hang'] ?></td>
                                    <td><?= $value['name'] == "" ? "Khách hàng trực tiếp" : $value['name'] ?></td>
                                    <td><?= $value['kh_mua'] ?></td>
                                    <td><?= number_format($value['total_price']) . "đ" ?></td>
                                    <td><?= $value['created_at'] ?></td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="statistical--chart statistical--topProduct ">
                <div class="title">
                    <h2>Thống kê sản phẩm theo danh mục</h2>
                </div>
                <div class="chart--doughnut">
                    <canvas id="chart__first"></canvas>
                </div>
            </div>
        </div>
        <div class="statistical--second">
            <div class="statistical--orderRecent">
                <div class="title">
                    <?php
                    $sumWeek = 0;
                    foreach ($totalOrderWeek as $value) {
                        $sumWeek += $value['kh_mua'];
                    }
                    ?>
                    <h2>Số lượng đơn hàng giao dịch trong tuần: <?= $sumWeek ?></h2>
                </div>
                <div class="tableProduct">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mã khách hàng</th>
                                <th>Mã đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Số lượng đơn</th>
                                <th>Tổng tiền</th>
                                <th>Ngày mua</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($totalOrderWeek as $value) : ?>
                                <tr>
                                    <td>KH00<?= $value['id_kh'] ?></td>
                                    <td>DH00<?= $value['id_don_hang'] ?></td>
                                    <td><?= $value['name'] == "" ? "Khách hàng trực tiếp" : $value['name'] ?></td>
                                    <td><?= $value['kh_mua'] ?></td>
                                    <td><?= number_format($value['total_price']) . "đ" ?></td>
                                    <td><?= $value['created_at'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="statistical--chart statistical--orderRecent chart ">
                <div class="title">
                    <h2>Thống kê sản phẩm được mua các danh mục</h2>
                </div>
                <div class="chart--doughnut">
                    <canvas id="chart__first2"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.min.js"></script>
<script>
    const data3 = {  
        labels: [
            <?php 
                $total = count($getToTalProductChart);
                $i = 1;
                foreach($getToTalProductChart as $value){
                    extract($value);
                    if($i == $total){
                        $sign = "";
                    }else{
                        $sign = ",";
                    }
                    echo "'".$value['name']."'".$sign;
                    $i++;
                }
            ?>
        ],
        datasets: [{
            label: 'Số lượng',
            data: <?php 
                $total = count($getToTalProductChart);
                $i = 1;
                $flag = 1;
                foreach($getToTalProductChart as $value){
                    if($i == $total){
                        $sign = "]";
                    }else{
                        $sign = "";
                    }
                    if($flag == $total){
                        $signSecond = "";
                    }else{
                        $signSecond = "[";
                    }
                    echo $signSecond.$value['total_product'].",".$sign;
                    $flag++;
                    $i++;
                }
            ?>,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)'
            ],
            hoverOffset: 4
        }]
    };

    const config3 = {
        type: 'doughnut',
        data: data3,
    };
    const canvas3 = document.getElementById('chart__first');
    const chart3 = new Chart(canvas3, config3);
</script>
<script src="../src/js/statisticalSecond.js"></script>
<script src="../src/js/animation.js"></script>
</body>

</html>