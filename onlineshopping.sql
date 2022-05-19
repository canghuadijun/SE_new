-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th5 19, 2022 lúc 12:56 PM
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
('C0000002', 'Cho tôi xin một vé đi tuổi thơ', 'Cho tôi xin một vé đi tuổi thơ là truyện dài của nhà văn Nguyễn Nhật Ánh một trong những cuốn sách được xếp vào hàng “Best seller” bởi tính nhân văn cũng như tính hấp dẫn của nó. Nhà văn Nguyễn Nhật Ánh mời người đọc lên chuyến tàu quay ngược trở lại thăm tuổi thơ và tình bạn dễ thương của 4 bạn nhỏ với những trò nghịch ngợm của thằng cu Mùi, Hải cò, con Tủn và con Tí sún. Vẫn giọng văn trong vắt và dí dỏm, Nguyễn Nhật Ánh đã dẫn dắt độc giả đi theo dòng hồi tưởng của mình, trở về cái thời còn là cậu bé tám tuổi, mang đến cho người đọc một thế giới tuổi thơ hồn nhiên, đầy ắp tiếng cười. Nhưng lồng vào những ngày tháng hồn nhiên đó lại là những trăn trở của người lớn. Cái sân ga tám tuổi của nhân vật tôi - “thằng cu Mùi” - như là một điểm tựa ký ức để tác giả thả vào đó những triết lý, những suy ngẫm về cuộc đời.', 'Nguyễn Nhật Ánh', 'Nhà xuất bản trẻ', 22, 80000, 'Novel', 'productimg/tuoitho.jpg'),
('C0000003', '999 lá thư gửi cho chính mình', 'Có rất nhiều bạn trẻ hiện nay cảm thấy thất vọng với con người hiện tại của chính mình. Điều đáng sợ chính là, đám đông ấy không hề bé tẹo nào. Họ giắt trên mình đôi ba điều đẹp đẽ ngủ im trong quá khứ, để rồi chấp nhận cuộc sống tù túng, nhợt nhạt, vô vị, thậm chí hoang đường đến mức không tưởng tượng được. Thuở bé ai cũng nghĩ mình sẽ thực hiện nghĩ việc lớn lao, vĩ đại nhưng càng lớn lên chúng ta càng thu bé khả năng, tự thôi miên ngủ yên trong lớp vỏ bọc lớn xác, vô dụng. Chúng ta không biết rằng mình sẽ trở thành một người vô cùng tuyệt vời nếu chấp nhận thay đổi. Thưởng thức 999 Lá thư gửi cho chính mình của nhà văn học mạng Miêu Công Tử chính là cách để ta vạch ra lộ trình trở thành phiên bản tốt đẹp nhất của bản thân ngay từ hôm nay.', 'Miêu Công Tử', 'Nhà xuất bản Thanh Niên', 12, 100000, 'Story', 'productimg/9991.jpg'),
('C0000004', 'Tuổi trẻ đáng giá bao nhiêu', 'Cuốn sách của sự trải nghiệm\r\nNếu thực sự bạn đang vướng vào những năm tháng khó khăn, bế tắc, chưa thấy đâu là niềm tin và động lực, có lẽ đây là cuốn sách xứng đáng để bạn nên có. Với chính những tích lũy, Rosie Nguyễn đã chia sẻ kinh nghiệm của bản thân vào từng trang, từng chương để hoàn thành cuốn sách này. Từ một sinh viên Ngoại Thương, đánh giá bản thân sai lầm khi xem học ở trường là tất cả của sự nghiệp học hành mà quên mất việc tự học, chủ động trau dồi kiến thức, tiếc tiền mua sách. Cuối cùng chị chọn bước chân trên hành trình khám phá thế giới của riêng mình khi làm một người du lịch bụi và có thêm câu chuyện “Ta ba lô trên đất Á”.', 'Rosie Nguyễn', 'Nhà xuất bản hội nhà văn', 15, 80000, 'Story', 'productimg/tuoitre.jpg'),
('C0000005', 'Không gia đình', 'Xuất hiện trên văn đàn từ thế kỉ 19, tuyệt phẩm ” Không gia đình” là quyển sách về đề tài giáo dục, xã hội hấp dẫn người đọc. Hành trình của cậu bé Remi mồ côi cha mẹ rong ruổi khắp các ngã đường nước Pháp làm nghề hát rong, bên cạnh việc lao động để đảm bảo miếng ăn hằng ngày, em còn học được nhiều bài học về tình bạn, tình yêu thương gia đình, lòng trung hậu. Cuối cùng điều tuyệt vời cũng đến với Remi khi em tìm thấy gia đình sau nhiều năm lưu lạc. Những tháng ngày rong ruổi vất vả để tôi luyện nên một Remi kiên cường mạnh mẽ nhưng cũng vô cùng nhân hậu, lạc quan trong cuộc sống, luôn nghĩ đến những người đã cưu mang mình thưở cơ hàn.\r\n\r\n', 'Hector Malot', 'Nhà xuất bản văn học', 19, 150000, 'Novel', 'productimg/khonggiadinh.jpg'),
('C0000006', 'Cây cam ngọt của tôi', 'Cây Cam Ngọt Của Tôi là một cuốn tự truyện đầy cảm động, tuy đớn đau nhưng vẫn ngập tràn tình yêu thương. Đọc cuốn sách để biết rằng mỗi người chúng ta đều là một món quà. “Ai đã ở trên đời, thì người đó xứng đáng được sinh ra, con ạ”. Cuộc đời này vẫn thật đáng sống, và ai trên đời cũng xứng đáng được yêu thương.', 'José Mauro de Vasconcelos', 'Nhà xuất bản văn học', 19, 100000, 'Novel', 'productimg/caycam.jpg'),
('C0000007', 'Hoa vẫn nở mỗi ngày', 'Nền văn học hiện đại Pháp không chỉ nổi tiếng với những tác phẩm lãng mạn, mà những tác phẩm gai góc, khác thường, khi khai thác được những mặt trái vẫn có sức hấp dẫn riêng với bạn đọc. Với độc giả Việt Nam, sau Trong khi chờ Bojangles, Chuyện Sarah, mới đây, Hoa vẫn nở mỗi ngày của Valérie Perrin đã được giới thiệu như một đại diện mới nhất cho nền văn chương đầy tinh tế này.\r\n\r\nCuốn sách là câu chuyện xoay quanh nhân vật Violette Toussaint - người phụ nữ trung tuần sống mà như đã chết. Mọi chuyện khởi đầu không hề suôn sẻ với những bi kịch tuổi thơ, để rồi người phụ nữ ấy lớn lên, tìm được tiếng nói riêng và đi theo tiếng gọi của con tim mình.', 'Valérie Perrin', 'Nhà xuất bản Hà Nội', 15, 200000, 'novel', 'productimg/hoano.jpg');

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
  ADD PRIMARY KEY (`orderCode`) USING BTREE,
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
