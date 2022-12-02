<div class="contentManager contentManager--product">
            <div class="contentManager--product__header">
                <div class="contentManager--product__header--title">
                    <?php foreach ($listCmt as $key => $value) {$countCmt=commented_count($value['product_id']);$sumCmt=$countCmt[0]['SL'];}?>
                    <h2 style="color: #ffffff;">Số lượng bình luận: <?=$sumCmt?></h2>
                    <form action="index.php?actAdmin=SearchProComment" method="post">
                        <input type="text" name="kyw" placeholder="Nhập từ khóa cần tìm kiếm">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-solid fa-comment"></i>Quản lý bình luận</span><span style="padding: 0 10px; font-size: 22px;">></span><span><i class="fa-solid fa-eye" ></i>Chi tiết bình luận</span>
                </div>
            </div>
            <div class="show--productComment">
                <?php foreach ($listCmt as $key => $value) {$nameUser = commented_toUser($value['user_id'],$value['product_id']);$ProName=$nameUser['ProName'];$Avt = $nameUser['Avt'];}?>
                <h2>Sản phẩm bình luận: </h2><span> <?=$ProName?></span>
                <br>
                <div class="show--productComment--Image">
                    <img width="80px" height="80px" src="../imageProduct/<?=$Avt?>" alt="">
                </div>
            </div>
           
            <div class="btn-backtoComment" style="margin:10px 0px;">
                <a href="index.php?actAdmin=comments"><button>Quay lại</button></a>
                <?php if(isset($_GET['msg'])): ?>
                    <div class="alert alert-success" style="padding: 15px 0 15px 25px;">
                        <?= $_GET['msg'] ?>
                    </div>
            <?php endif ?>
            </div>
            <div class="contentManager--product__footer " style="padding-top: 0;">
                    
                <div class="contentManager--product__footer--table" style="margin-top: 10px">
                    <table border="1">
                        <thead>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>STT</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Nội dung bình luận</th>
                                <th>Đánh giá</th>
                                <th>Ngày bình luận</th>
                                <th>Vai trò</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $stt =1;
                             foreach ($listCmt as $value) {
                                extract($value);
                                $nameUser = commented_toUser($value['user_id'],$value['product_id']);
                                $pathDele = 'index.php?actAdmin=detailCommentDele&cid='.$value['id'].'&uid='.$value['user_id'].'&pid='.$value['product_id'];
                                if($nameUser['RoleUser']==1){$Role = 'Admin';}else if($nameUser['RoleUser']==0){$Role = 'Khách';};
                                echo '
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$stt.'</td>
                                    <td class="name">'.$nameUser['NameUser'].'</td>
                                    <td class="email">'.$nameUser['EamilUser'].'</td>
                                    <td class="content">'.$value['content'].'</td>
                                    <td class="dateCreate">'.$value['created_at'].'</td>
                                    <td class="role">'.$Role.'</td>
                                    <td class="btn-action">
                                        <a onclick="return confirm(`Bạn có chắc chắn muốn xóa khônng ? `)" href="'.$pathDele.'"><button><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                                    </td>
                                </tr>';
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