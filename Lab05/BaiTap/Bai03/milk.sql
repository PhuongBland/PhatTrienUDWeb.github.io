
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `customercode` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customername` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gender` tinyint NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` int NULL DEFAULT NULL,
  PRIMARY KEY (`customercode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('kh001', 'Võ Thúy Phương', 0, '26/7 Bình Định', 987500);
INSERT INTO `customer` VALUES ('kh002', 'Lâm Thị Thùy', 1, '375 Lê Hồng Phong Q.1', 8351056);
INSERT INTO `customer` VALUES ('kh003', 'Hoàng Thị Nhung', 0, '58 Đào Duy Từ quận 1', 9745698);
INSERT INTO `customer` VALUES ('kh004', 'Nguyễn Văn An', 1, '12bis Đường 3-2 quận 5', 8769128);
INSERT INTO `customer` VALUES ('kh005', 'Trần Thị Vinh', 1, '75 Nguyễn Kiệm quận Gò Vấp', 5792564);
INSERT INTO `customer` VALUES ('kh006', 'Nguyễn BíchThi', 0, '357 Lê Hồng Phong', 9874125);
INSERT INTO `customer` VALUES ('kh008', 'Nguyễn Anh', 1, '1/2bis Nơ Trang Long Q.BT TP.HCM', 8753159);
INSERT INTO `customer` VALUES ('kh009', 'Trần Minh Hiệp', 0, '20 Hà Huy Tập quận 7', 8989898);

-- ----------------------------
-- Table structure for milkcompany
-- ----------------------------
DROP TABLE IF EXISTS `milkcompany`;
CREATE TABLE `milkcompany`  (
  `CompanyCode` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CompanyName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Phone` int NULL DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`CompanyCode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of milkcompany
-- ----------------------------
INSERT INTO `milkcompany` VALUES ('AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', 8741258, 'abbott@ab.com');
INSERT INTO `milkcompany` VALUES ('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa - Đồng Nai', 7826451, 'dutchlady@dl.com');
INSERT INTO `milkcompany` VALUES ('DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', 6258943, 'dumex@dm.com');
INSERT INTO `milkcompany` VALUES ('DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', 5789321, 'daisy@ds.com');
INSERT INTO `milkcompany` VALUES ('MJ', 'Mead Johnson', 'Công ty nhập khẩu Việt Nam', 8741258, 'meadjohn@mj.com');
INSERT INTO `milkcompany` VALUES ('NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', 7895632, 'nutifoo@ntf.com');
INSERT INTO `milkcompany` VALUES ('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', 8794561, 'vinamilk@vnm.com');



CREATE TABLE `thongtinsua` (
  `MaSua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `STT` int(11) NOT NULL,
  `Ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrongLuong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonGia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThanhPhan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoiIch` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinsua`
--

INSERT INTO `thongtinsua` (`MaSua`, `STT`, `Ten`, `Hang`, `Loai`, `TrongLuong`, `DonGia`, `ThanhPhan`, `LoiIch`, `HinhAnh`) VALUES
('VNM400', 5, 'Dielac Sure', 'Vinamilk', 'Sữa bột', '400 gram', '90.000 VNĐ', 'Vitamine, B2', 'Bổ sung chất dinh dưỡng', ''),
('DL180', 1, 'Fristi', 'Dutch Lady', 'Sữa tươi', '180 gram', '3.600 VNĐ', 'Các vitamin', 'Bổ sung các chất dinh dưỡng', ''),
('DL100', 3, 'Sữa chua Cô Gái Hà Lan', 'Dutch Lady', 'Sữa chua', '100 gram', '3.000 VNĐ', 'Vitamine, B2', 'Tốt cho tiêu hóa', ''),
('VNM120', 2, 'Sữa chua Plus', 'Vinamilk', 'Sữa chua', '120 gram', '4.000 VNĐ', 'Vitamine, B2', 'Tốt cho tiêu hóa', ''),
('DL110', 4, 'Sữa chua uống Cô Gái Hà Lan', 'Dutch Lady', 'Sữa chua', '110 gram', '2.500 VNĐ', 'Vitamine, B2', 'Tốt cho tiêu hóa', '');

ALTER TABLE `milkcompany`
  ADD PRIMARY KEY (`companyName`);

ALTER TABLE `thongtinsua`
  ADD PRIMARY KEY (`Ten`),
  ADD UNIQUE KEY `STT` (`STT`),
  ADD KEY `thongtinsua_hangfk_1` (`Hang`);

ALTER TABLE `thongtinsua`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `thongtinsua`
  ADD CONSTRAINT `thongtinsua_hangfk_1` FOREIGN KEY (`Hang`) REFERENCES `milkcompany` (`companyName`);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
