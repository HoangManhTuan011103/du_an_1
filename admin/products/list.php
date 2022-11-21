<div class="contentManager contentManager--product">
    <div class="contentManager--product__header">
        <div class="contentManager--product__header--title">
            <h2 style="color: #ffffff;">Danh sách sản phẩm</h2>
            <form action="" method="post">
                <input type="text" placeholder="Nhập từ khóa cần tìm kiếm" name="keyWord" value="<?= $keyWord ?? "" ?>" >
                <button type="submit" name="btn-search--Product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="contentManager--product__header--control">
            <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-brands fa-product-hunt"></i>Quản lý sản phẩm</span>
        </div>
    </div>
    <div class="contentManager--product__footer">
        <div class="contentManager--product__footer--addProduct">
            <a href="index.php?actAdmin=addProduct"><button><i class="fa-solid fa-plus"></i> Thêm sản phẩm mới</button></a>
        </div>
        
        <?php if(isset($_COOKIE['notification'])): ?>
            <div class="alert alert-success">
                <?= $_COOKIE['notification'] ?>
            </div>
        <?php endif ?>
        <?php if(isset($notification)): ?>
            <div class="alert alert-success">
                <?= $notification ?>
            </div>
        <?php endif ?>
      
        <div id="getData" class="contentManager--product__footer--table" >
        <table border="1">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>STT</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Tên danh mục</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listProduct as $key => $value) : ?>
                        <?php
                            $imagePath = "../imageProduct/" . $value['avatar'];
                            if (is_file($imagePath)) {
                                $image = "<img src='" . $imagePath . "' alt='' width='120px' height='150px'>";
                            } else {
                                $image = "<h4 style='color: #ffffff' >Không có hình ảnh</h4>";
                            }
                        ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><?= $key + 1 ?></td>
                            <td>SP00<?= $value['id'] ?></td>
                            <td class="name"><?= $value['nameProduct'] ?></td>
                            <td class="image">
                                <?= $image ?>
                            </td>
                            <td class="category">
                                <?= $value['name'] ?>
                            </td>
                            <td class="price">
                                <?= number_format($value['price'])."đ" ?>
                            </td>
                            <td class="quantity">
                                <?= $value['quantity'] ?>
                            </td>
                            <td class="status">
                                <?php
                                    if( $value['status'] == 0 ){
                                        echo "<button class='status-isset'>Active</button>";
                                        
                                    }else{
                                        echo " <button class='status-empty'>Disable</button>";
                                    }
                                ?>
                            </td>
                            <td class="dateCreate">
                                <?= $value['created_at'] ?>
                            </td>
                            <td class="btn-action">
                                <a href="index.php?actAdmin=editProduct&&id=<?= $value['id'] ?>" class="update"><button style="margin-right: 5px;"><i class="fa-solid fa-screwdriver"></i></button></a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm <?= $value['nameProduct'] ?> không?')" href="index.php?actAdmin=deleteProduct&&id=<?= $value['id'] ?>" class="remove"><button><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <ul>
                <!-- Start Pagination -->
                <?php if(ceil($countPage) <= 1){ 
                    $i = ""; 
                ?>
                <?php }else{
                    $i = 0; 
                ?>
                        <?php if(isset($_GET['page']) && $_GET['page'] > 2){ $fisrtPage = 1; ?>
                            <li><a href="index.php?actAdmin=showProduct&page=<?= $fisrtPage ?>"><i class="fa-sharp fa-solid fa-angles-left"></i></a></li>
                        <?php } ?>

                        <?php if(isset($_GET['page']) && $_GET['page'] > 1){ $prevPage = $_GET['page'] - 1; ?>
                            <li><a href="index.php?actAdmin=showProduct&page=<?= $prevPage ?>"><i class="fa-solid fa-angle-left"></i></a></li>
                        <?php } ?>

                        <?php for($i; $i <= $countPage; $i++): ?>
                                <?php if(isset($_GET['page'])): ?>
                                    <?php if($i+1 != $_GET['page']): ?>
                                        <?php if($i+1 > $_GET['page']-2 && $i+1 < $_GET['page']+2): ?>
                                            <li><a href="index.php?actAdmin=showProduct&page=<?= $i+1 ?>"><?= $i+1 ?></a></li>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <li><a style="background-color: #F39C12; color: #ffffff" href="index.php?actAdmin=showProduct&page=<?= $i+1 ?>"><?= $i+1 ?></a></li>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php   
                                        if($i+1 == 1){
                                            $backGround = "style=background-color:";
                                            $color = "#F39C12;";
                                            $word = "color:";
                                            $colorWord = "#ffffff";
                                        }else{
                                            $backGround = "";
                                            $color = "";
                                            $word = "";
                                            $colorWord = "";
                                        } 
                                    ?>
                                    <?php if($i <= $countPage): ?>
                                        <li><a <?= $backGround.$color.$word.$colorWord ?> href="index.php?actAdmin=showProduct&page=<?= $i+1 ?>"><?= $i+1 ?></a></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                        <?php endfor ?>

                        <?php if(isset($_GET['page']) && $_GET['page'] < ceil($countPage)){ $nextPage = $_GET['page'] + 1; ?>
                            <li><a href="index.php?actAdmin=showProduct&page=<?= $nextPage ?>"><i class="fa-solid fa-angle-right"></i></a></li>
                        <?php } ?>

                        <?php if(isset($_GET['page']) && $_GET['page'] < ceil($countPage)-1){ $endPage = ceil($countPage); ?>
                            <li><a href="index.php?actAdmin=showProduct&page=<?= $endPage ?>"><i class="fa-sharp fa-solid fa-angles-right"></i></a></li>
                        <?php } ?>

                    <?php } ?>
                    <!-- End Pagination -->
            </ul>
            
        </div>
    </div>
</div>
</div>
<script src="../src/js/animation.js"></script>
<!-- <script src="../src/js/jquery.js"></script> -->
<!-- <script type="text/javascript">
    $(document).ready(function() {
        function loadTable(page){
            $.ajax({
                url: "./products/navigation.php",
                method: "POST",
                data: {
                    page: page
                },
                success: function(data) {
                    $("#getData").html(data);
                }
            });
        }
        loadTable();
        //Pagination Code
        $(document).on("click","#pagination li a",function(e) {
            e.preventDefault();
            const page_id = $(this).attr("id");
            loadTable(page_id);
        });
    });
</script> -->
</body>

</html>