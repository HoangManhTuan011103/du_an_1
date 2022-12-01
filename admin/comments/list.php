<div class="contentManager contentManager--product">
            <div class="contentManager--product__header">
                <div class="contentManager--product__header--title">
                    <h2 style="color: #ffffff;">Danh sách sản phẩm có bình luận</h2>
                    <form action="" method="post">
                        <input type="text" placeholder="Nhập từ khóa cần tìm kiếm">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-comment"></i>Quản lý bình luận</span>
                </div>
            </div>
            <div class="contentManager--product__footer">
                <div class="contentManager--product__footer--table">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sản phẩm</th>
                                <th>Sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Danh mục</th>
                                <th>Đánh giá</th>
                                <th>Số lượng bình luận</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt = 1;
                                foreach ($listCmt as $key => $value) {
                                    $countCmt=commented_count($value['product_id']);
                                    $nameUser = commented_toUser($value['user_id'],$value['product_id']);
                                    $cuontRat=commented_sumRat($value['product_id']);
                                    $path = 'index.php?actAdmin=detailComment&uid='.$value['user_id'].'&pid='.$value['product_id'];
                                    switch (ceil(($cuontRat['sum']/$countCmt[0]['SL']))) {
                                        case '1':
                                            $star = '<i class="fa-regular fa-star orange"></i>';
                                            break;
                                        case '2':
                                            $star = '<i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i>';
                                            break;
                                        case '3':
                                            $star = '<i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i>';
                                            break;
                                        case '4':
                                            $star = '<i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i>';
                                            break;
                                        case '5':
                                            $star = '<i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i><i class="fa-regular fa-star orange"></i>';
                                            break;
                                        default:
                                            $star = '<i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i>';
                                            break;
                                    }
                                    echo '
                                        <tr>
                                            <td>'.$stt.'</td>
                                            <td>SP0'.$nameUser['Pid'].'</td>
                                            <td class="name">'.$nameUser['ProName'].'</td>
                                            <td class="image">
                                                <img width="100px" height="100px" src="../imageProduct/'.$nameUser['Avt'].'" alt="">
                                            </td>
                                            <td class="category">
                                            '.$nameUser['CatName'].'
                                            </td>
                                            <td class="dateCreate">
                                            <div>
                                            '.$star.'
                                        </div>
                                            </td>
                                            <td class="dateCreate">
                                               '.$countCmt[0]['SL'].'
                                            </td>
                                            <td class="detailBill">
                                                <a href="'.$path.'"><button class="detailBill--see"><i class="fa-solid fa-eye" style="padding-right: 5px;" ></i>Xem chi tiết</button></a>
                                            </td>
                                        </tr>
                                    ';
                                    $stt++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <ul>
                        <li>
                            <a href=""><i class="fa-sharp fa-solid fa-angles-left"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-angle-left"></i></a>
                        </li>
                        <li><a href="" style="background-color: #F39C12; color: #ffffff;">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li>
                            <a href=""><i class="fa-solid fa-angle-right"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-sharp fa-solid fa-angles-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="../src/js/animation.js"></script>
</body>

</html>














<!-- <div class="contentManager contentManager--product">
            <div class="contentManager--product__header">
                <div class="contentManager--product__header--title">
                    <h2 style="color: #ffffff;">Danh sách sản phẩm có bình luận</h2>
                    <form action="" method="post">
                        <input type="text" placeholder="Nhập từ khóa cần tìm kiếm">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-comment"></i>Quản lý bình luận</span>
                </div>
            </div>
            <div class="contentManager--product__footer">
                <div class="contentManager--product__footer--table">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sản phẩm</th>
                                <th>Sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Danh mục</th>
                                <th>Số lượng bình luận</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>SP001</td>
                                <td class="name">Iphone 14</td>
                                <td class="image">
                                    <img width="120px" src="src/image/iphone14.jpg" alt="">
                                </td>
                                <td class="category">
                                    Điện thoại
                                </td>
                                <td class="dateCreate">
                                    4
                                </td>
                                <td class="detailBill">
                                    <a href="index.php?actAdmin=detailComment"><button class="detailBill--see"><i class="fa-solid fa-eye" style="padding-right: 5px;" ></i>Xem chi tiết</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul>
                        <li>
                            <a href=""><i class="fa-sharp fa-solid fa-angles-left"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-angle-left"></i></a>
                        </li>
                        <li><a href="" style="background-color: #F39C12; color: #ffffff;">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li>
                            <a href=""><i class="fa-solid fa-angle-right"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-sharp fa-solid fa-angles-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="../src/js/animation.js"></script>
</body>

</html> -->