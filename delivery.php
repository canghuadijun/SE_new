<?php
    session_start();
    //session_destroy();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

       // var_dump($_SESSION['giohang']);
    }
   
    function showgiohang(){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                $tong=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
                    echo '<tr>
                            <td><img src='.$_SESSION['giohang'][$i][0].' alt=""></td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                            <td> '.$_SESSION['giohang'][$i][3].'</td>
                            <td>
                                <div>'.$tt.'</div>
                            </td>
                            <td>
                                <a href="cart.php?delid='.$i.'">Xóa</a>
                            </td>
                        </tr>';
                }
                echo '<tr>
                        <th colspan="5">Tổng đơn hàng</th>
                        <th>
                            <div>'.$tong.'<p>vnđ</p></div>
                        </th>
    
                    </tr>';
            }else{
                echo "Giỏ hàng rỗng!";
            }    
        }
        return $tong;
    }
    


?>
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
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm                  </th>
                            <th>Giá tiền</th>
                            <th>SL</th>
                            <th>Thành Tiền</th>
                            <th>Xóa</th>
                        </tr>
                        <?php showgiohang() ?>
                        <!-- <tr>
                            <td><img src="Material/sp1.jpg"> </td>
                            <td><p>Tài chính doanh nghiệp</p></td>
                            <td><p>2018</p></td>
                            <td><p>Ross Westerfield Jaffle</p></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><p>489.000<sup>đ</sup></p></td>
                            <td><span>X</span></td>
                        </tr>
                        <tr>
                            <td><img src="Material/sp1.jpg"> </td>
                            <td><p>Tài chính doanh nghiệp</p></td>
                            <td><p>2018</p></td>
                            <td><p>Ross Westerfield Jaffle</p></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><p>489.000<sup>đ</sup></p></td>
                            <td><span>X</span></td>
                        </tr> -->
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