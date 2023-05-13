CREATE DATABASE btl_web;
USE btl_web;

CREATE TABLE `user` (
  `id` INT AUTO_INCREMENT,
  `email` VARCHAR(255) ,
  `img` VARCHAR(255) DEFAULT "public/uploads/user/client.jpg",
  `name` VARCHAR(255) DEFAULT NULL,
  `age` INT DEFAULT NULL,
  `location` VARCHAR(255) DEFAULT NULL,
  `phone` VARCHAR(10) DEFAULT NULL,
  `password` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE `admin` (
  `id` INT AUTO_INCREMENT,
  `username` VARCHAR(255),
  `password` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE `category` (
  `id` INT AUTO_INCREMENT,
  `name` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE `product` (
  `id` INT AUTO_INCREMENT,
  `price` INT DEFAULT NULL,
  `quantity` INT DEFAULT NULL,
  `name` VARCHAR(255)  DEFAULT NULL,
  `category_id` INT,
  `content` VARCHAR(10000) DEFAULT NULL,
  `img` VARCHAR(255) DEFAULT "public/uploads/product/product.png",
  PRIMARY KEY(id),
  FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `news` (
  `id` INT AUTO_INCREMENT,
  `block` BOOLEAN DEFAULT NULL,
  `title` VARCHAR(255)  DEFAULT NULL,
  `description` VARCHAR(1000) DEFAULT NULL,
  `content` VARCHAR(10000)  DEFAULT NULL,
  `date` DATETIME  DEFAULT NULL,
  PRIMARY KEY (id)
) ;


CREATE TABLE `comment` (
  `id` INT AUTO_INCREMENT,
  `date` DATETIME DEFAULT NULL,
  `block` BOOLEAN,
  `content` VARCHAR(10000),
  `news_id` INT DEFAULT NULL,
  `product_id` INT DEFAULT NULL,
  `user_id` INT,
  `parent_comment` INT DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (news_id) REFERENCES news(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (parent_comment) REFERENCES comment(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `company` (
  `id` INT AUTO_INCREMENT,
  `name` VARCHAR(255),
  `address` VARCHAR(1000) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE `cart` (
  `id` INT AUTO_INCREMENT,
  `product_id` INT DEFAULT NULL,
  `number` INT DEFAULT NULL,
  `user_id` INT,
  FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (id)
);

CREATE TABLE `payment` (
  `id` INT AUTO_INCREMENT,
  `date` DATETIME DEFAULT NULL,
  `money` INT,
  `user_id` INT,
  `name` VARCHAR(255),
  `phone` VARCHAR(255),
  `location` VARCHAR(255),
  `type` VARCHAR(1000) DEFAULT NULL,
  FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (id)
);


-- Example data 
INSERT INTO `admin` (username, password) VALUES ('admin', '123456');
INSERT INTO `admin` (username, password) VALUES ('username', '1234567');

INSERT INTO `user` (email, name, age, phone, password) VALUES ('user@hcmut.edu.vn', 'Nguyen Van A', 20, '0123456789', '1234567');
INSERT INTO `user` (email, name, age, phone, password) VALUES ('user1@hcmut.edu.vn', 'Nguyen Van B', 30, '0123456701', '0123456');
INSERT INTO `user` (email, name, age, phone, password) VALUES ('user2@hcmut.edu.vn', 'Nguyen Van C', 40, '0123456702', '01234567');

INSERT INTO `category` (name) VALUES ('Mobile Phone');
INSERT INTO `category` (name) VALUES ('Laptop');

INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (2000, 50, 'Iphone 11', 1, 'Sản phẩm đến từ nhà sản xuất Oppo');
INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (1000, 50, 'Samsung S21', 1, 'Sản phẩm đến từ nhà sản xuất Samsung');
INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (500, 50, 'Vivo', 1, 'Sản phẩm đến từ nhà sản xuất Vivo');
INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (1500, 50, 'Oppo', 1, 'Sản phẩm đến từ nhà sản xuất Oppo');
INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (2000, 50, 'Lenovo Thinkpad', 2, 'Sản phẩm đến từ nhà sản xuất Lenovo');
INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (1000, 50, 'Dell', 2, 'Sản phẩm đến từ nhà sản xuất Dell');
INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (500, 50, 'Asus Vivo book', 2, 'Sản phẩm đến từ nhà sản xuất Asus');
INSERT INTO `product` (price, quantity, name, category_id, content) VALUES (1500, 50, 'Acer gaming', 2, 'Sản phẩm đến từ nhà sản xuất Acer');

INSERT INTO `news` (block, date, title, content)
VALUES (0, '2022-05-30', '3 cách sử dụng ASUS VivoWatch 5 để theo dõi sức khỏe và có các bài tập luyện hữu ích','ASUS VivoWatch 5 được ra mắt cách đây không lâu và với mức giá khoảng 9 triệu đồng thì nó sẽ có rất nhiều tính năng hỗ trợ sức khỏe. 
Hôm nay với bài viết này hãy cùng mình xem các cách sử dụng ASUS VivoWatch 5 để có nhiều chế độ theo dõi sức khỏe và tập luyện hữu ích nha.Theo dõi nhịp tim trên chiếc ASUS VivoWatch 5 là một tính năng cực kì dễ sử dụng. 
Đặc biệt nó sẽ đo liên tục và bạn có thể theo dõi nó bằng thao tác vuốt. Hãy xem bài hướng dẫn chi tiết để biết các bước cụ thể nha. Để đo được nồng độ oxy trong máu, bạn cần phải đặt thêm 2 ngón tay vào vị trí cảm biến ở bên cạnh của đồng hồ mới có thể đo được. 
Bài viết bên dưới sẽ hướng dẫn cụ thể hơn cho bạn. Trên chiếc ASUS VivoWatch 5 có rất nhiều chế độ luyện tập và trong các chế độ luyện tập đó sẽ có thêm nhiều bài tập khác nhau để bạn có thể dễ dàng thực hiện và theo dõi hơn. 
Xem ngay bài viết hướng dẫn chi tiết bên dưới nhé. Nhận xét của bạn với những tính năng có sẵn trên ASUS VivoWatch 5 này là gì, nó có tiện lợi không và có ích cho bạn không? Hãy nói cho mình và mọi người biết cùng với các mẹo sử dụng khác bên dưới phần bình luận. Đừng quên chia sẻ bài viết nếu bạn thấy nó hữu ích nhé.');

INSERT INTO `news` (block, date, title, content) 
VALUES (0, '2022-05-30', '50% ca tử vong ở TP.HCM chưa tiêm vắc xin, thành phố đang "đánh chặn" số ca chuyển nặng',
'Không phải F0 nào cũng cách ly tại nhà
Theo thống kê, trong tổng số ca F0 hiện tại có khoảng 70% trường hợp có triệu chứng nhẹ, hoặc không có triệu chứng đang được cách ly chăm sóc tại nhà hoặc khu cách ly tập trung. Làm gì để giảm số ca mắc chuyển nặng? Hướng dẫn mới nhất từ TP.HCM được "chi tiết hóa" từ phân loại người F0 nào được cách ly ở nhà; chăm sóc ra sao; nên và không nên làm gì; dấu hiệu cần báo ngay cho y tế và kê đơn, cấp cứu F0 tại nhà...
Hướng dẫn lần này quy định rõ hơn về đối tượng được chăm sóc tại nhà khi đảm bảo đủ 2 điều kiện bao gồm không triệu chứng hoặc triệu chứng nhẹ (không có suy hô hấp SpO2 lớn hơn hoặc bằng 96% khi thở khí trời, nhịp thở bằng hoặc dưới 20 lần/phút). Chỉ những F0 có độ tuổi từ 1 - 50 tuổi, không có bệnh nền, không đang mang thai, không béo phì mới được cách ly ở nhà.
Ngoài ra quy định này chỉ cho phép một số trường hợp không thỏa các điều kiện nêu trên có thể xem xét cách ly ở nhà nếu có bệnh nền ổn định, bảo đảm tiêm đủ 2 mũi vắc xin hoặc sau 14 ngày kể từ ngày tiêm mũi đầu tiên.
TP Thủ Đức (TP.HCM) là một trong các địa phương được ghi nhận có số ca mắc tăng nhanh gần đây. Ông Nguyễn Văn Chức - giám đốc Trung tâm Y tế TP Thủ Đức - cho biết để "đánh chặn từ xa", ngoài 32 trạm y tế cố định, các trạm y tế lưu động, các phường triển khai tổ y tế lưu động đến từng khu phố (trước đây là phường) để kịp thời xử lý các ca F0 chuyển nặng. "Tổ lưu động của từng khu phố khá đông, bao gồm đủ các ban ngành từ y tế, đoàn thanh niên, dân quân, giáo dục, thành ra việc phản ứng và tiếp cận sẽ được gần người dân hơn" - ông Chức nói.');

INSERT INTO `comment` (date, block, content, product_id, user_id) 
VALUES ('2022-05-30', 0, 'Sản phẩm sài rất ổn', 1, 1);
INSERT INTO `comment` (date, block, content, product_id, user_id)
VALUES ('2022-05-30', 0, 'Sản phẩm sài tạm ổn', 2, 1);
INSERT INTO `comment` (date, block, content, product_id, user_id)
VALUES ('2022-05-30', 0, 'Good', 1, 2);
INSERT INTO `comment` (date, block, content, news_id, user_id)
VALUES ('2022-05-30', 0, 'Bài viết rất hay', 1, 1);
INSERT INTO `comment` (date, block, content, news_id, user_id)
VALUES ('2022-05-30', 0, 'Good news', 1, 2);
INSERT INTO `comment` (date, block, content, news_id, user_id, parent_comment)
VALUES ('2022-05-30', 0, 'Me too', 1, 3, 5);
INSERT INTO `comment` (date, block, content, news_id, user_id)
VALUES ('2022-05-30', 0, 'Nice', 1, 3);

INSERT INTO `company` (name, address) VALUES ('Bách Khoa University', '268 Lý Thường Kiệt, Phường 14, Quận 10, TPHCM');
INSERT INTO `company` (name, address) VALUES ('FTU', 'Thành phố Hồ Chí Minh');
