<!DOCTYPE html>
<?php   
    include("dbconnection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/42117e27a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>CARTEGORY</title>
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
            <li><button><i class="fa-solid fa-cart-shopping cart-icon"></button></i></li>
        </div>
    </header>
    <!-- cartegory -->
    <section class="cartegory">
        <div class="container">
            <div class="cartegory-top row">
                <p>Trang chủ</p><span>&#10230;</span><p>Tất cả sách mới về</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cartegory-left">
                    <ul>
                        <li class="cartegory-left-li"><a href="#">Chính trị - pháp luật</a>
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                        </li>
                        <li class="cartegory-left-li"><a href="#">Khoa học công nghệ - Kinh tế</a>
                            
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            
                        </li>
                        <li class="cartegory-left-li"><a href="#">Văn học nghệ thuật</a>
                            
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            
                        </li>
                        <li class="cartegory-left-li"><a href="#">Văn hóa xã hội - Lịch sử</a>
                            
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            
                        </li>
                        <li class="cartegory-left-li"><a href="#">Sách giáo trình</a>
                            
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            
                        </li>
                        <li class="cartegory-left-li"><a href="#">Truyện, tiểu thuyết</a>
                            
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            
                        </li>
                        <li class="cartegory-left-li"><a href="#">Tâm lý, tâm linh, tôn giáo</a>
                            
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            
                        </li>
                        <li class="cartegory-left-li"><a href="#">Sách thiếu nhi</a>
                            
                                <ul>
                                    <li><a href="">Sách mới về</a></li>
                                    <li><a href="">Sách bán chạy</a></li>
                                    <li><a href="">Sale off</a></li>
                                </ul>
                            
                        </li>
                    </ul>
                </div>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-Item">
                        <p>SÁCH MỚI VỀ</p>
                    </div>
                    <div class="cartegory-right-top-Item">
                        <button><span>Bộ lọc</span> <i class="fas fa-sort-down"></i></button>
                    </div>
                    <div class="cartegory-right-top-Item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                    </div>
                    <div class="cartegory-right-content row">
                        <?php
                            $query = mysqli_query($conn, "select image, productName, buyPrice, productCode from products"); 
                            while ($s = mysqli_fetch_array($query)) {
                        ?>
                        <div class="cartegory-right-content-Item" >
                            <button onclick="location.href='product.php?id=<?php echo $s['productCode']?>'" style="background-color: transparent; border-color: transparent">
                                <img src="<?php echo $s["image"] ?>" alt="">
                                <h1><?php echo $s["productName"]?></h1>
                                <p><?php echo $s["buyPrice"]?><sup>đ</sup></p>
                            </button>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="cartegory-right-bottom row">
                        <div class="cartegory-right-bottom-Items">
                            <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                        </div>
                        <div class="cartegory-right-bottom-Items">
                            <p><span>&#171;<span>1 2 3 4 5</span>&#187;</span>Trang cuối</p>
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
        <script src="scripts/script.js"></script>
    </section>
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