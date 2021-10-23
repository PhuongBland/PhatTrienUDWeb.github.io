/*
 Navicat Premium Data Transfer

 Source Server         : localhosttest
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : milf_milk

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 19/10/2021 00:15:59
*/

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

SET FOREIGN_KEY_CHECKS = 1;
