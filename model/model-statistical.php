<?php
    // Số lượng đơn mua theo ngày
    function buyProductWithDay(){
        $sql = "SELECT ors.*, COUNT(ors.id_kh) as kh_mua FROM (SELECT  kh.id id_kh , od.id id_don_hang, kh.name ,od.created_at, od.total_price
        FROM orders od JOIN users kh on od.user_id=kh.id
        WHERE  DATE_FORMAT(od.created_at, '%d/%m/%Y') LIKE (SELECT DATE_FORMAT(CURRENT_TIMESTAMP, '%d/%m/%Y')) ) ors
        GROUP BY id_kh
        ORDER  BY kh_mua DESC
        ";
        return pdo_query($sql);
    };
    function totalMonneyWithYearMonth(){
        $sql = "select year(created_at),month(created_at),sum(total_price) from orders group by year(created_at),month(created_at) order by year(created_at),month(created_at)
        ";
        return pdo_query_one($sql);
    };
    // Sản phẩm bán chạy nhất
    function bestProductSales(){
        $sql = "select COUNT(B.product_id) as 'quantity', A.id, A.name, A.discount, A.price, A.avatar 
        FROM `products` A INNER JOIN `orders_detail` B ON A.id = B.product_id 
        GROUP BY B.product_id 
        ORDER BY COUNT(B.product_id) DESC LIMIT 0,1";
        return pdo_query_one($sql);
    }
    // Số lượng đơn theo tuần
    function totalOrderWithWeek(){
        $sql = "SELECT ors.*, COUNT(ors.id_kh) as kh_mua FROM (SELECT kh.id id_kh , od.id id_don_hang, kh.name ,od.created_at, od.total_price FROM orders od JOIN users kh on od.user_id=kh.id WHERE od.created_at >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)) ors GROUP BY id_kh ORDER BY kh_mua DESC;";
        return pdo_query($sql);
    }
    // Tổng doanh thu theo năm tháng hiện tại
    function sumMoneyMonthCurrently(){
        $sql = "select year(CURRENT_TIMESTAMP) total_flow_year,month(CURRENT_TIMESTAMP) total_flow_month,sum(total_price) from orders group by year(created_at),month(created_at) order by year(created_at),month(created_at);";
        return pdo_query_one($sql);
    }
    function getToTalProductChartJs(){
        $sql = "select name, total_product FROM categories";
        return pdo_query($sql);
    }

?>