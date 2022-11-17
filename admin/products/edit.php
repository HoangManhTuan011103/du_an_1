<div class="contentManager contentManager--product">
            <div class="contentManager--product__header">
                <div class="contentManager--product__header--title">
                    <h2 style="color: #ffffff;">Thêm sản phẩm mới</h2>
                </div>
                <div class="contentManager--product__header--control">
                    <span><i class="fa-solid fa-house"></i>Trang chủ</span> <span style="padding: 0 10px; font-size: 22px;">></span> <span><i class="fa-brands fa-product-hunt"></i>Quản lý sản phẩm</span><span style="padding: 0 10px; font-size: 22px;">></span>                    <span>Thêm sản phẩm mới</span>
                </div>
            </div>
            <div class="contentManager--product__footer contentManager--product__footer--addProduct">
                <form action="index.php?actAdmin=updateProduct" method="post" enctype="multipart/form-data">
                    <div class="form--left">
                        <input type="hidden" name="idProduct" value="<?= $detailProduct['id'] ?>">
                        <div class="name">
                            <p>Tên sản phẩm:</p>
                            <input class="name" value="<?= $detailProduct['nameProduct'] ?>" name="nameProduct" style=" background-color: #000000;" type="text" placeholder="Nhập tên sản phẩm...">
                        </div>
                        <div class="image">
                            <?php
                                $imagePath = "../imageProduct/" . $detailProduct['avatar'];
                                if (is_file($imagePath)) {
                                    $image = "<img src='" . $imagePath . "' alt='' width='120px' height='150px' style='margin-top: 5px;' >";
                                } else {
                                    $image = "<h4 style='color: #ffffff; margin-top: 5px;' >Không có hình ảnh</h4>";
                                }
                            ?>
                            <p>Ảnh sản phẩm:</p>

                            <input type="file" name="image" style="background-color: #0F172A;">
                            <?= $image ?>

                            
                        </div>
                        <div class="imgaes">
                           
                            <p>Ảnh mô tả sản phẩm:</p>
                            <input type="file" name="images[]" multiple="multiple" style="background-color: #0F172A;">
                            <?php foreach($listImagesProduct as $key => $value): ?>
                                    <?php $imagePath = "../imageProduct/" . $value['images']; ?>
                                    <?php if(is_file($imagePath)): ?>
                                        <?php $image = "<img src='" . $imagePath . "' alt='' width='120px' height='150px' style='margin-right: 5px; margin-top: 5px;' >" ?>
                                        <?= $image ?>
                                    <?php else:  ?>
                                        <?php $image = "<h4 style='color: #ffffff; margin-top: 5px;' >Không có hình ảnh</h4>";  ?>
                                    <?php endif; ?>

                                    
                            <?php endforeach; ?>
                        </div>
                        <div class="description">
                            <p>Mô tả sản phẩm:</p>
                            <textarea name="description" id="" cols="30" rows="10"><?= $detailProduct['description'] ?></textarea>
                        </div>
                    </div>
                    <div class="form--right">
                        <div class="category">
                            <p>Danh mục sản phẩm:</p>
                            
                            <select name="category" id="">
                                <option value="" hidden>-- Chọn danh mục sản phẩm --</option>
                                <?php foreach($listCategories as $value): ?>
                                    <option value="<?= $value['id'] ?>" <?= $value['id'] == $detailProduct['idCategory'] ? "selected" : "" ?> ><?= $value['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            
                        </div>
                        <div class="status">
                            <p>Trạng thái hoạt động:</p>
                            <select name="status" id="">
                                <option value="" hidden>-- Chọn trạng thái --</option>
                                <option value="0" <?= $detailProduct['status'] == 0 ?"selected" : ""  ?>  >Active</option>
                                <option value="1" <?= $detailProduct['status'] == 1 ?"selected" : ""  ?> >Disable</option>
                            </select>
                            
                        </div>
                        <div class="pice">
                            <p>Giá sản phẩm:</p>
                            <input type="number" name="price" value="<?= $detailProduct['price'] ?>">
                        </div>
                        <div class="discount">
                            <p>% Khuyến mại:</p>
                            <input min="0" type="number" name="discount" value="<?= $detailProduct['discount'] ?>">
                        </div>
                        <div class="quantity">
                            <p>Số lượng:</p>
                            <input min="0" type="number" name="quantity" value="<?= $detailProduct['quantity'] ?>" >
                        </div>
                        <div class="special">
                            <input type="checkbox" id="special" name="hotProduct" <?= isset($detailProduct['hot_product']) && $detailProduct['hot_product']==1  ? "checked" : "" ?>>
                            <label for="special" style="font-size: 15px;">Sản phẩm đặc biệt</label>
                        </div>
                        <div class="btn__action btn__action--addProduct btn__action--updateProduct">
                            <button type="submit" class="btn--addProduct" name="btn--updateProduct">Thay đổi sản phẩm</button>
                            <a href="index.php?actAdmin=showProduct"><button>Quay lại</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script src="../src/js/animation.js"></script>
</body>

</html>