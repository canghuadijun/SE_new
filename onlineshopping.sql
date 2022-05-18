-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th5 17, 2022 lúc 06:04 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `onlineshopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customerID` varchar(16) NOT NULL,
  `customerPassword` varchar(16) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `employeeID` varchar(16) NOT NULL,
  `employeePassword` varchar(16) NOT NULL,
  `employeeName` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderCode` varchar(8) NOT NULL,
  `productCode` varchar(8) NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  `priceEach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderCode` varchar(8) NOT NULL,
  `orderDate` datetime NOT NULL,
  `requiredDate` datetime NOT NULL,
  `shippedDate` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customerID` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productCode` varchar(8) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `quantityInStock` int(11) NOT NULL,
  `buyPrice` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productCode`, `productName`, `description`, `author`, `publisher`, `quantityInStock`, `buyPrice`, `type`, `image`) VALUES
('C0000000', 'Mắt Biếc', '“Mắt biếc” – một tâm hồn lãng mạn, một tình yêu nồng nàn nhưng lại có kết cục buồn. Cuốn sách “Mắt biếc” của Nguyễn Nhật Ánh thực sự đã chạm vào tâm hồn của những kẻ đang yêu, đã và đang dành cả thanh xuân, tuổi trẻ của mình để yêu đơn phương một người nào đó. Không còn xa lạ với những câu chuyện tình yêu đơn phương của Nguyễn Nhật Ánh nhưng đến với “Mắt biếc” việc xây dựng hình tượng và nội dung có phần khác. Vẫn với những ngôn từ giản đơn, gần gũi, cuốn sách sẽ gieo lại trong lòng độc giả một nỗi niềm nuối tiếc, chơi vơi, vừa yêu vừa giận.', 'Nguyễn Nhật Ánh', 'Nhà xuất bản trẻ', 80, 110000, 'Novel', 'productimg/matbiec.jpg'),
('C0000001', 'Tôi thấy hoa vàng trên cỏ xanh', 'Cuốn Tôi thấy hoa vàng trên cỏ xanh kể về tuổi thơ nghèo khó của hai anh em Thiều và Tường cùng cô bạn thân hàng xóm. Mạch truyện tự nhiên, dẫn dắt người đọc chứng kiến những rung động đầu đời của tụi nhỏ, xen vào đó là những nét đẹp của tình anh em và vài nốt trầm của sự đau đớn khi trưởng thành. Truyện Nguyễn Nhật Ánh thường không nói quá nhiều về trắng đen, thiện ác nhưng trong tác phẩm này, tác giả đã đưa vấn đề đạo đức vào sách và khiến người đọc suy ngẫm.', 'Nguyễn Nhật Ánh', 'Nhà xuất bản trẻ', 52, 100000, 'Novel', 'productimg/coxanh.jpg'),
('C0000002', 'Cho tôi xin một vé đi tuổi thơ', 'Cho tôi xin một vé đi tuổi thơ là truyện dài của nhà văn Nguyễn Nhật Ánh một trong những cuốn sách được xếp vào hàng “Best seller” bởi tính nhân văn cũng như tính hấp dẫn của nó. Nhà văn Nguyễn Nhật Ánh mời người đọc lên chuyến tàu quay ngược trở lại thăm tuổi thơ và tình bạn dễ thương của 4 bạn nhỏ với những trò nghịch ngợm của thằng cu Mùi, Hải cò, con Tủn và con Tí sún. Vẫn giọng văn trong vắt và dí dỏm, Nguyễn Nhật Ánh đã dẫn dắt độc giả đi theo dòng hồi tưởng của mình, trở về cái thời còn là cậu bé tám tuổi, mang đến cho người đọc một thế giới tuổi thơ hồn nhiên, đầy ắp tiếng cười. Nhưng lồng vào những ngày tháng hồn nhiên đó lại là những trăn trở của người lớn. Cái sân ga tám tuổi của nhân vật tôi - “thằng cu Mùi” - như là một điểm tựa ký ức để tác giả thả vào đó những triết lý, những suy ngẫm về cuộc đời.', 'Nguyễn Nhật Ánh', 'Nhà xuất bản trẻ', 22, 80000, 'Novel', 'productimg/tuoitho.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `support`
--

CREATE TABLE `support` (
  `supportCode` varchar(8) NOT NULL,
  `customerID` varchar(16) NOT NULL,
  `employeeID` varchar(16) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderCode`,`productCode`),
  ADD KEY `fk_orderdetail_products` (`productCode`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderCode`),
  ADD KEY `fk_orders_customers` (`customerID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productCode`);

--
-- Chỉ mục cho bảng `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`supportCode`,`customerID`,`employeeID`),
  ADD KEY `fk_support_customers` (`customerID`),
  ADD KEY `fk_support_employees` (`employeeID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_orderdetail_orders` FOREIGN KEY (`orderCode`) REFERENCES `orders` (`orderCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderdetail_products` FOREIGN KEY (`productCode`) REFERENCES `products` (`productCode`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `fk_support_customers` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_support_employees` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
