<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/42117e27a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>HOME PAGE</title>
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

    <section id="Slider">
        <div class="aspect-ratio-169">
            <img src="Material/Sli1.png" alt="">
            <img src="Material/Sli2.png" alt="">
            <img src="Material/Sli3.png" alt="">
            <!-- <img src="Material/Slider4.jpg" alt="">
            <img src="Material/Slider5.jpg" alt=""> -->
        </div>
        <script src="scripts/script.js"></script>
    </section>

    <section class="app-container">
        <p>Download app now!</p>
        <div class="app-google">
            <img src="Material/appstore.png" alt="">
            <img src="Material/googleplay.png" alt=""> 
        </div>
        <p>Nhận thông báo khi có sách mới!</p>
        <input type="text" placeholder="Nhập email của bạn tại đây!"> 
    </section>

    <!---------------FOOTER---------------->
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