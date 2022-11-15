
        <div class="grid wide content">
            <div class="row">
                <!-- layout 2 chia   8-4-->
                <div class="col l-8 pay_detai_left">
                    <!-- tiêu đề -->
                    <h4 class="name_shop">
                        <a href="">
                            Delta Shoes
                        </a>
                    </h4>
                    <div class="row">
                        <!-- info -->
                        <div class="col l-6">
                            <!--tiêu đề thông tin đặt hàng -->
                            <div class="title_info_pay">

                                <p class="title_pay">Thông tin nhận hàng</p>

                                <a href="" class="info_pay_sign_in">
                                    <span>
                                        <i class="fa fa-thin fa-circle-user fa-1x"></i>
                                    </span>
                                    Đăng nhập

                                </a>
                            </div>


                            <!-- form info nhận hàng -->
                            <form action="" class="info_order_product">
                                <input type="email" class="" placeholder="Email" name="email">

                                <input type="text" name="name" class="" placeholder="Họ và tên">

                                <input type="number" name="phone_number" class=""
                                    placeholder="Số điện thoại (tùy chọn )">

                                <input type="text" name="address" class="" placeholder="Địa chỉ">

                                <select name="city" id="" placeholder="Tỉnh thành">
                                    <option value="">Hà Nội </option>
                                    <option value="">Thanh Hóa </option>
                                    <option value="">TP Hồ Chí Minh</option>
                                    <option value="">Hà Nam</option>
                                </select>
                                <select name="District" id="" placeholder="Tỉnh thành">
                                    <option value="">Hà Nội </option>
                                    <option value="">Thanh Hóa </option>
                                    <option value="">TP Hồ Chí Minh</option>
                                    <option value="">Hà Nam</option>
                                </select>

                                <textarea name="note" id="" placeholder="Ghi  chú" cols="20" rows="5"></textarea>

                            </form>
                        </div>
                        <!-- vận chuyển  -->
                        <div class="col l-6">
                            <!--tiêu đề vận chuyển -->
                            <div class="title_info_pay">

                                <p class="title_pay">Vận chuyển</p>
                            </div>

                            <!--  -->
                            <div class="border_form">
                                <p>
                                    <input type="radio" checked="checked" name="">
                                    Giao hàng tận nơi
                                </p>
                                <p class="price_shipping">
                                    40.000
                                    <span class="icon_d_posiotion_">đ</span>
                                </p>
                            </div>
                            <!--  -->
                            <p class="method_pay">
                                Thanh toán
                            </p>
                            <div class="border_form">
                                <p>
                                    <input type="radio">
                                    Thanh toán khi giao hàng (COD)
                                </p>
                                <span class="ion_payment">
                                    <i class="fa-regular fa-money-bill-1"></i>
                                </span>
                            </div>
                        </div>


                        <!-- form info nhận hàng -->

                    </div>
                </div>
                <div class="col l-4 pay_detai_right">
                    <h2 class="order_pay_title">Đơn hàng (2 sản phẩm )</h2>
                    <!-- <div class="padding_left-28"> -->


                    <!-- thông tin sản phẩm đặt -->
                    <div class="product_order_info">

                        <table style="text-align:center" class="product_order_info_detail">
                            <tr>
                                <th>Ảnh </th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                            </tr>
                            <tr>
                                <td class="product_order_info_detail-img">
                                    <img src="./src/image/a1.jpg" alt="">
                                </td>
                                <td class="product_order_info_detail-name">
                                    Hàng chất lượng cao giá tốt
                                </td>
                                <td>
                                    4
                                </td>
                                <td class="product_order_info_detail-price">
                                    <p class="price_shipping"> 12000 <span class="icon_d_posiotion_">đ</span></p>
                                </td>
                            </tr>


                        </table>
                    </div>

                    <!-- phí  -->
                    <div class="table_total_pay">
                        <div class="price_total_pay">
                            <p>Tạm tính</p>
                            <p class="price_shipping">2.400.000 <span class="icon_d_posiotion_">đ</span></p>
                        </div>
                        <div class="price_total_pay">
                            <p>Phí vận chuyển</p>
                            <p class="price_shipping">40.000 <span class="icon_d_posiotion_">đ</span></p>
                        </div>
                        <div class="price_total_all_pay">
                            <p>Tổng cộng</p>
                            <p class="price_shipping price_total_all_pay-color">2.440.000 <span
                                    class="icon_d_posiotion_">đ</span></p>
                        </div>
                    </div>

                    <!-- button đặt hàng hay quay về -->
                    <div class="order_payment_btn">


                        <a href="" class="return_cart_detail"><i class="fa-solid fa-chevron-left"></i>Quay về giỏ
                            hàng</a>

                        <button class="order_total_pay_all-button">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
</body>

</html>
