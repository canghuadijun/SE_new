
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/42117e27a2.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      <!--
        function validateForm() {
            let x = document.forms["myForm"]["fname"].value;
            if (x == "") {
               alert("Name must be filled out");
        return false;
        }
    }
      //-->
    </script>
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
            <li><a>Thể loại</a>
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

    <!----------------Delivery--------------->
    <section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap">
                <div class="delivery-top">
                    <div class="delivery-top-delivery delivery-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="delivery-top-map delivery-top-item">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div class="delivery-top-payment delivery-top-item">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
        <form>
        <div class="container">
            <div class="delivery-content row">
                <div class="delivery-content-left">
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="delivery-content-left-dangnhap row">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>Đăng nhập (Nếu bạn đã có tài khoản của BookScouter)</p>
                    </div>
                    <div class="delivery-content-left-khachle row">
                        <input checked name="loaikhach" type="radio">
                        <p> <span style="font-weight: bold;">Khách lẻ</span> (Nếu bạn không muốn lưu lại thông tin)</p>
                    </div>
                    <div class="delivery-content-left-dangky row">
                        <input  name="loaikhach" type="radio">
                        <p> <span style="font-weight: bold;">Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)</p>
                    </div>
                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-Item">
                            <label for="">Họ tên <span style="color:red;">*</span></label>
                            <form action="delivery.php">
                            <input type="text" pattern="[a-z]{1,15}">
                            </form>
                        </div>
                        <div class="delivery-content-left-input-top-Item">
                            <label for="">Điện thoại <span style="color:red;">*</span></label>
                            <input type="text" pattern="[a-z]{1,15}">
                        </div>
                        <div class="delivery-content-left-input-top-Item">
                            <label for="">Tỉnh/Tp <span style="color:red;">*</span></label>
                            <input type="text" pattern="[a-z]{1,15}">
                        </div>
                        <div class="delivery-content-left-input-top-Item">
                            <label for="">Quận/Huyện <span style="color:red;">*</span></label>
                            <input type="text" pattern="[a-z]{1,15}">
                        </div>
                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Địa chỉ <span style="color:red;">*</span></label>
                        <input type="text" pattern="[a-z]{1,15}">
                    </div>
                    <div class="delivery-content-left-button row">
                        <a href="cart.php"><span>&#171;</span><p> Quay lại giỏ hàng</p></a>
                        <button onclick="location.href='payment.php'"><p style="font-weight: bold;"> THANH TOÁN VÀ GIAO HÀNG </p></button>
                    </div>
                </div>
                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td>Sách chính trị cực căng</td>
                            <td>-30%</td>
                            <td>1</td>
                            <td><p>560.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td>Mắt biếc</td>
                            <td>-20%</td>
                            <td>1</td>
                            <td><p>600.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng</td>
                            <td style="font-weight: bold;"><p>1.160.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                            <td style="font-weight: bold;"><p>160.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight: bold;"><p>1.320.000 <sup>đ</sup></p></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
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