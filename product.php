<!DOCTYPE html>
<?php
    include("dbconnection.php");
    $query = "select * from products where products.productCode = '$_GET[id]' limit 1";
    $result = mysqli_query($conn ,$query);
    $s = mysqli_fetch_array($result);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/42117e27a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PRODUCT</title>
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
    <!--product-->
    <section class="product">
        <div class="container">
            <div class="product-top row">
                <p>Trang chủ</p> <span>&#10230;</span> <p>Chính trị - pháp luật</p> <span>&#10230;</span> <p>Sách mới về</p><span>&#10230;</span> <p>Sách chính trị cực căng</p>
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="<?php echo $s["image"] ?>" alt="">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="<?php echo $s["image"] ?>" alt="">
                        <img src="<?php echo $s["image"] ?>" alt="">
                        <img src="<?php echo $s["image"] ?>" alt="">
                        <img src="<?php echo $s["image"] ?>" alt="">
                    </div>
                </div>
                <div class="product-content-right ">
                    <div class="product-content-right-product-name">
                        <h1><?php echo $s['productName']?></h1>
                        <p>Mã sản phẩm: <?php echo $s['productCode']?></p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?php echo $s['buyPrice']?><sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product-color">
                        <p><span style="font-weight: bold;">Màu sắc</span>:Xanh tím<span style="color:blue;"></span></p>
                        <div class="product-content-right-product-color-img">
                            <img src="Material/sp1.1.jpg" alt="">
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng:</p>
                        <!-- <input type="number" min="0" value="1">  -->
                        
                    </div>
                    <div class="product-content-right-product-button">
                        <form action="cart.php" method="post">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <input type="submit" name="addcart" value="Đặt hàng">
                            <input type="hidden" name="tensp" value="<?php echo $s['productName']?>">
                            <input type="hidden" name="gia" value="<?php echo $s['buyPrice']?>">
                            <input type="hidden" name="hinh" value="<?php echo $s['image']?>">
                        </form>
                        <button><p>TÌM TẠI CỬA HÀNG</p></button>
                    </div>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-Item">
                            <i class="fa-solid fa-phone"></i> <p>Hotline</p>
                        </div>
                        <div class="product-content-right-product-icon-Item">
                            <i class="fa-solid fa-comments"></i> <p>Chat</p>
                        </div>
                        <div class="product-content-right-product-icon-Item">
                            <i class="fa-solid fa-envelope"></i> <p>Mail</p>
                        </div>
                    </div>
                    <div class="product-content-right-product-QR">
                        <img src="Material/qrcode2.png" alt="">
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-Item gioithieu">
                                    <p>Giới thiệu</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-Item chitiet">
                                    <p>Chi tiết</p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-gioithieu">
                                    Tác giả: <?php echo $s['author']?> <br>
                                    Nhà xuất bản: <?php echo $s['publisher']?>
                                </div>
                                <div class="product-content-right-bottom-content-chitiet">
                                    <?php echo $s['description']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="scripts/script.js"></script>
    </section>
    <!--"product-related"-->
    <section class="product-related container">
        <div class="product-related-title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>
        <div class="row product-content">
            <div class="product-related-Item">
                <img src="productimg/qua1.jpg" alt="">
                <h1>Móng vuốt quạ đen (I)</h1>
                <p>100.000<sup>đ</sup></p>
            </div>
            <div class="product-related-Item">
                <img src="productimg/qua2.jpg" alt="">
                <h1>Móng vuốt quạ đen (II)</h1>
                <p>100.000<sup>đ</sup></p>
            </div>
            <div class="product-related-Item">
                <img src="productimg/qua3.jpg" alt="">
                <h1>Móng vuốt quạ đen (III)</h1>
                <p>100.000<sup>đ</sup></p>
            </div>
            <div class="product-related-Item">
                <img src="productimg/qua4.jpg" alt="">
                <h1>Móng vuốt quạ đen (IV)</h1>
                <p>100.000<sup>đ</sup></p>
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