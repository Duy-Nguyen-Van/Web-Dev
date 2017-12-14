--Create database
CREATE DATABASE mastore;

--Create table Procduct
CREATE TABLE products
(
    id INT NOT NULL AUTO_INCREMENT,
    product_name VARCHAR(200),
    price DOUBLE,
    category VARCHAR(50),
    image_url VARCHAR(200),
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	updated_at timestamp NOT NULL DEFAULT, '0000-00-00 00:00:00'
    PRIMARY KEY (ID)
);
CREATE TABLE bills 
(
	id INT NOT NULL AUTO_INCREMENT,
	id_customer int(11) DEFAULT NULL,
	date_order date DEFAULT NULL,
	total float DEFAULT NULL COMMENT 'tổng tiền',
	payment varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
	note varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
	created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	updated_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (ID)
);
CREATE TABLE bill_detail 
(
	id INT NOT NULL AUTO_INCREMENT,
	id_bill int(10) NOT NULL,
	id_product int(10) NOT NULL,
	quantity int(11) NOT NULL COMMENT 'số lượng',
	unit_price double NOT NULL,
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	updated_at timestamp NOT NULL DEFAULT, '0000-00-00 00:00:00'
	PRIMARY KEY (ID)
);
CREATE TABLE customers 
(
	id INT NOT NULL AUTO_INCREMENT,
	name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	gender varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	email varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	address varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	phone_number varchar(20) COLLATE utf8_unicode_ci NOT NULL,
	note varchar(200) COLLATE utf8_unicode_ci NOT NULL,
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (ID)
);



INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN TAY DÀI CÁ KOI D167-4 (ĐÔ)',199000,'Áo thun','http://juky.vn/upload/products/tb29lgkis3pl1jjszfxxxcbbvxa2923754463_1512550649.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN TAY DÀI MẶT HỀ D168 (ĐỎ - ĐEN)',199000,'Áo thun','http://juky.vn/upload/products/photo20171207172917_1512642659.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN ICON SMILE BỰ CO041-3 (XÁM)',99000,'Áo thun','http://juky.vn/upload/products/co0413_1512109091.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CHỮ NHẬT IN TAY CO252-1 (TRẮNG)',99000,'Áo thun','http://juky.vn/upload/products/231307621937046493285456213738115829552594n_1509615831.png');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN CON THỎ CO239-2 (XANH ĐEN)',99000,'Áo thun','http://juky.vn/upload/products/2281531719340992669135127661521139221450905n_1509176601.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN RAPLAN TRƠN CO237-4 (XANH ĐEN)',99000,'Áo thun','http://juky.vn/upload/products/2273007119334487703118958236213838661309461n_1509161449.png');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN BROOKLYA CO236-4 (ĐỎ)',99000,'Áo thun','http://juky.vn/upload/products/2273027319330031270231266943515377350168389n_1509010716.png');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN EISTU CO233-1 (TRẮNG)',99000,'Áo thun','http://juky.vn/upload/products/6d8c03a4d81b34456d0a_1511767717.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN MÚA VÕ CO232-2 (NÂU)',99000,'Áo thun','http://juky.vn/upload/products/2273049019329581636942899038846225144991199n_1509001237.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN 2 CON MÈO CO231',99000,'Áo thun','http://juky.vn/upload/products/2172841419109743758926685656344337995442536n_1508999158.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN ĐẦU CON MÈO CO229-2 (HỒNG)',99000,'Áo thun','http://juky.vn/upload/products/2272867619325237504043971682254327165324428n_1508989734.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN AW3P CO228-3 (VÀNG)',99000,'Áo thun','http://juky.vn/upload/products/2273013219325400904027637132884706718327387n_1508987946.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN TAY LỞ PHỐI VẠT TRẮNG CO221-2 (XÁM)',99000,'Áo thun','http://juky.vn/upload/products/2268766519318416938059361779844560434802291n_1508827240.png');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN HYUKOH CO219-2 (ĐEN)',99000,'Áo thun','http://juky.vn/upload/products/2268846119313533938547664896693717137916306n_1508745962.png');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ÁO THUN CỔ TRÒN COCACOLA CO215-3 (NÂU)',99000,'Áo thun','http://juky.vn/upload/products/tb2t6o5ocxjpufjsszexxaemvxa1593558082_1508578405.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('IZRO NAME TEE - YELLOW',200000,'Áo thun','http://izro.co.kr/web/product/big/201710/117_shop1_614091.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('IZRO LOGO TEE - BLACK',250000,'Áo thun','http://izro.co.kr/web/product/big/201701/103_shop1_238662.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('IZRO PENCIL TEE - WHITE',250000,'Áo thun','http://izro.co.kr/web/product/big/201701/82_shop1_637740.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('IZRO PENCIL TEE - BLACK',250000,'Áo thun','http://izro.co.kr/web/product/big/201701/81_shop1_727892.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('Apologize T-shirt',280000,'Áo thun','https://dosi-in.com/wp-content/uploads/2017/07/APOLOGIZE-T-SHIRT1.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('To Live T-shirt',300000,'Áo thun','https://dosi-in.com/wp-content/uploads/2017/07/DIRTYCOINS-TO-LIVE-T-SHIRT1.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('Futurism A Ship – White',380000,'Áo thun','https://dosi-in.com/wp-content/uploads/2017/11/Tee-AShip-2-1.png');
INSERT INTO product(product_name,price,category,image_url) VALUES ('Futurism A Ship – Black',380000,'Áo thun','https://dosi-in.com/wp-content/uploads/2017/11/Tee-AShip-1-1.png');
INSERT INTO product(product_name,price,category,image_url) VALUES ('CITY HEAVY TEE – GREY',500000,'Áo thun','https://dosi-in.com/wp-content/uploads/2017/11/header-6.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('Dreams Tee',500000,'Áo thun','https://dosi-in.com/wp-content/uploads/2017/10/FullSizeRender-41.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('Black Flannel Shirt',500000,'Sơ mi','https://dosi-in.com/wp-content/uploads/2017/10/Black-Flannel-Shirt-1.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('UM$ Valencia Shirt',1350000,'Sơ mi','https://dosi-in.com/wp-content/uploads/2017/10/UM-VALENCIA-SHIRT-2.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('Plannel Shirt',400000,'Sơ mi','https://dosi-in.com/wp-content/uploads/2017/07/Saigonexotic-plannel-shirt-02SGEX0200120003-1.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('Split Shirt',850000,'Sơ mi','https://dosi-in.com/wp-content/uploads/2017/07/02AOKE020008001606-01.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('CHECK BASEBALL SHIRT',1350000,'Sơ mi','https://dosi-in.com/wp-content/uploads/2017/11/t17ash10or_03-copy.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('LOOSE FIT CHECK SHIRT – BLUE',790000,'Sơ mi','https://dosi-in.com/wp-content/uploads/2017/11/t17ash02bl_031.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('80S DENIM SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-80s-denim-shirt-1_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('BAE STRIPED SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-bea-striped-shirt-blue_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('BODE DENIM SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-bode-denim-shirt-2_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('BOX SHIRT',460000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-box-shirt-beige-0_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('BOX SHIRT VER. 2',460000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-box-shirt-ver2-brown_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('COLLAR DENIM SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-collar-denim-shirt-blue-1_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('DETA SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-deta-shirt-0_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('DUI SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-dui-shirt-2_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('ONO SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-ono-shirt-black_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('SOCA SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-soca-shirt_master.jpg');
INSERT INTO product(product_name,price,category,image_url) VALUES ('WORK SHIRT',450000,'Sơ mi','http://product.hstatic.net/1000161656/product/ssstutter-product-work-shirt-blue_master.jpg');

