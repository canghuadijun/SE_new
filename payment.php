<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/42117e27a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>CART</title>
</head>
<body>
    
    <header>
        <div class="logo">
            <img src="Material/LOGO.png" alt="logo">
        </div>

        <div class="content">
            <li><a>Home page</a></li>
            <li><a>Trending</a></li>
            <li><a>Reviews</a></li>
            <li><a>Tác giả</a></li>
            <li><a href="cartegory.php">Thể loại</a>
                <ul class="sub-menu">
                    <li><a>Chính trị - Pháp luật</a></li>
                    <li><a>Khoa học công nghệ - Kinh tế</a></li>
                    <li><a>Văn học nghệ thuật</a></li>
                    <li><a>Văn hóa xã hội - Lịch sử</a></li>
                    <li><a>Giáo trình</a></li>
                    <li><a>Truyện, tiểu thuyết</a></li>
                    <li><a>Tâm lý, tâm linh, tôn giáo</a></li>
                    <li><a>Thiếu nhi</a></li>
                </ul>
            </li>

        </div>

        <div class="user">
            <li><input placeholder="Tìm kiếm" type="text"><i class="fa-solid fa-magnifying-glass"></i></li>
            <li><a>Đăng nhập</a></li>
            <li><button onclick="location.href='cart.php'"><i class="fa-solid fa-cart-shopping cart-icon"></button></i></li>
        </div>
    </header>

    <!------------------Payment---------------------->
    <section>
        <form action="xulythanhtoan.php" method="POST">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-payment payment-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="payment-top-map payment-top-item">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div class="payment-top-payment payment-top-item">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content left">
                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-delivery">
                            <input name="method-payment" type="radio">
                            <label>Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <p style="font-style: italic" class="description">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault0" value="tienmat">
                        <label class="form-check-label" for="flexRadioDefault0">
                        Thanh toán khi nhận hàng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" value="thequocte">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Thẻ tín dụng quốc tế (Visa, MasterCard)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2" value="thenoidia">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Thẻ tín dụng nội địa (Napas)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault3" value = "momo">
                        <label class="form-check-label" for="flexRadioDefault3">
                        MOMO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault4" value="vnpay">
                        <label class="form-check-label" for="flexRadioDefault4">
                        VNPAY
                        </label>
                    </div>
                    </div>
                </div>
                <div class="payment-content-right">
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá/Quà tặng">
                        <button><i class="fa-solid fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã cộng tác viên">
                        <button><i class="fa-solid fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-mnv">
                        <select name="" id="">
                            <option value="">Chọn mã nhân viên thân thiết</option>
                            <option value="">D345</option>
                            <option value="">A345</option>
                            <option value="">E365</option>
                            <option value="">I345</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <input type="submit" value="Thanh toán ngay" name="redirect" id="redirect" class="payment-content-right-payment">
        </div>
    </form>
    </section>

    <!-- footer-->
    <div class="footer-top">
        <li><a>Liên hệ</a></li>
        <li><a>Tuyển dụng</a></li>
        <li><a>Giới thiệu</a></li>
        <li>
            <a><i class="fa-brands fa-facebook"></i></a>
            <a><i class="fa-brands fa-twitter"></i></a>
            <a><i class="fa-brands fa-instagram"></i></a>
            <a><i class="fa-brands fa-youtube"></i></a>
        </li>
    </div>
    <div class="footer-mid">
        <p>
            Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650<br>
            Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam<br>
            Số điện thoại: 0243 205 2222
        </p>
    </div>

    <div class="footer-bottom">
        <a>©IVYmoda All rights reserved</a>
    </div>
</body>
</html>