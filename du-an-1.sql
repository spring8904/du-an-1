-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2024 at 09:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du-an-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bai_viet`
--

CREATE TABLE `tb_bai_viet` (
  `id` int NOT NULL,
  `id_nd` int NOT NULL,
  `tieu_de` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_dang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_sua` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bai_viet`
--

INSERT INTO `tb_bai_viet` (`id`, `id_nd`, `tieu_de`, `hinh_anh`, `noi_dung`, `ngay_dang`, `ngay_sua`) VALUES
(1, 4, 'zxcv', '66015eb108e27.jpg', 'qưer', '2024-03-25 12:19:31', '2024-03-26 09:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_binh_luan`
--

CREATE TABLE `tb_binh_luan` (
  `id` int NOT NULL,
  `id_nd` int NOT NULL,
  `id_sp` int NOT NULL,
  `noi_dung` text COLLATE utf8mb4_general_ci NOT NULL,
  `thoi_gian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_binh_luan`
--

INSERT INTO `tb_binh_luan` (`id`, `id_nd`, `id_sp`, `noi_dung`, `thoi_gian`) VALUES
(1, 1, 11, 'test', '2024-04-02 09:20:43'),
(2, 1, 11, 'test 2\r\n', '2024-04-02 09:20:57'),
(3, 1, 12, 'Ngon bổ rẻ', '2024-04-04 11:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chi_tiet_dh`
--

CREATE TABLE `tb_chi_tiet_dh` (
  `id` int NOT NULL,
  `id_dh` int NOT NULL,
  `id_sp` int NOT NULL,
  `so_luong` int NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id` int NOT NULL,
  `chuc_vu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_chuc_vu`
--

INSERT INTO `tb_chuc_vu` (`id`, `chuc_vu`) VALUES
(1, 'Quản trị viên'),
(2, 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `tb_danh_gia`
--

CREATE TABLE `tb_danh_gia` (
  `id` int NOT NULL,
  `id_nd` int NOT NULL,
  `id_sp` int NOT NULL,
  `so_sao` int NOT NULL,
  `danh_gia` text COLLATE utf8mb4_general_ci,
  `ngay_dg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_danh_gia`
--

INSERT INTO `tb_danh_gia` (`id`, `id_nd`, `id_sp`, `so_sao`, `danh_gia`, `ngay_dg`) VALUES
(1, 1, 11, 5, '10 điểm k có nhưng', '2024-04-02 09:21:40'),
(2, 1, 11, 1, '1 sao', '2024-04-02 09:21:50'),
(3, 10, 14, 5, 'Xịn xò', '2024-04-04 11:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_danh_muc_sp`
--

CREATE TABLE `tb_danh_muc_sp` (
  `id` int NOT NULL,
  `ten_dm` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_general_ci,
  `hinh_anh` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_danh_muc_sp`
--

INSERT INTO `tb_danh_muc_sp` (`id`, `ten_dm`, `mo_ta`, `hinh_anh`) VALUES
(5, 'iPhone', '', '660b7a44ec022.png'),
(6, 'Samsung', '', '660b7a3bce5b9.png'),
(16, 'Xiaomi', '', '660e429daa7a8.png'),
(17, 'Oppo', '', '660e46d5142e0.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_don_hang`
--

CREATE TABLE `tb_don_hang` (
  `id` int NOT NULL,
  `ma_dh` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_dat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_nd` int NOT NULL,
  `id_pttt` int NOT NULL,
  `id_tt` int NOT NULL,
  `ma_km` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tong_tien` float NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_general_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `so_dien_thoai` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hinh_anh_sp`
--

CREATE TABLE `tb_hinh_anh_sp` (
  `id` int NOT NULL,
  `id_sp` int NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_hinh_anh_sp`
--

INSERT INTO `tb_hinh_anh_sp` (`id`, `id_sp`, `hinh_anh`) VALUES
(26, 12, '660e260107ce3.webp'),
(27, 12, '660e2601080f5.webp'),
(28, 12, '660e260108441.webp'),
(29, 12, '660e2601087bf.webp'),
(30, 13, '660e26a1a4b6c.webp'),
(31, 13, '660e26a1a4f0c.webp'),
(32, 13, '660e26a1a5352.webp'),
(33, 14, '660e278011b04.webp'),
(34, 14, '660e278011f62.webp'),
(35, 15, '660e42f5543d1.webp'),
(36, 15, '660e42f5548a0.webp'),
(37, 15, '660e42f554cde.webp'),
(38, 16, '660e434e329d4.webp'),
(39, 16, '660e434e32f1c.webp'),
(40, 16, '660e434e332f3.webp'),
(41, 16, '660e434e33711.webp'),
(42, 16, '660e434e33ca3.webp'),
(43, 17, '660e43da9953e.webp'),
(44, 17, '660e43da998f8.webp'),
(45, 17, '660e43da99cbf.webp'),
(46, 18, '660e461fa37f4.webp'),
(47, 18, '660e461fa3c16.webp'),
(48, 18, '660e461fa3feb.webp'),
(49, 18, '660e461fa435e.webp'),
(50, 19, '660e470cb0315.webp'),
(51, 19, '660e470cb0901.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_khuyen_mai`
--

CREATE TABLE `tb_khuyen_mai` (
  `id` int NOT NULL,
  `ten_km` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ma_km` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `giam_gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_khuyen_mai`
--

INSERT INTO `tb_khuyen_mai` (`id`, `ten_km`, `ma_km`, `mo_ta`, `ngay_bat_dau`, `ngay_ket_thuc`, `giam_gia`) VALUES
(1, 'Giảm 10%', 'MGL9UYJO', '', '2024-04-04', '2024-04-05', 10),
(2, 'Giảm 20%', 'IK86OVCT', '', '2024-03-27', '2024-08-28', 20),
(3, 'Giảm 5%', '96F1ATVP', 'Đã hết hạn', '2024-03-25', '2024-03-26', 5),
(4, 'Giảm 1% ', 'G6T0IZJE', '', '2024-03-29', '2024-03-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lien_he`
--

CREATE TABLE `tb_lien_he` (
  `id` int NOT NULL,
  `tieu_de` text COLLATE utf8mb4_general_ci NOT NULL,
  `ten_kh` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_tt` int NOT NULL DEFAULT '3',
  `ngay_gui` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nguoi_dung`
--

CREATE TABLE `tb_nguoi_dung` (
  `id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_cv` int NOT NULL,
  `gioi_tinh` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nguoi_dung`
--

INSERT INTO `tb_nguoi_dung` (`id`, `email`, `mat_khau`, `ho_ten`, `avatar`, `id_cv`, `gioi_tinh`, `dia_chi`, `ngay_sinh`, `so_dien_thoai`) VALUES
(1, 'admin@gmail.com', '12345678', 'Admin', 'default.png', 1, 'male', 'Hà Nội', '2024-03-24', '0339735022'),
(10, 'client@gmail.com', '12345678', 'Client', 'default.png', 2, 'male', 'Hải Phòng', '2024-03-05', '0339735555'),
(11, 'dinhtv7@fpt.edu.vn', '12345678', 'Nguyễn Xuân Lâm', 'default.png', 2, 'male', 'Hà Nội', '2024-04-06', '0339735022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_phuong_thuc_thanh_toan`
--

CREATE TABLE `tb_phuong_thuc_thanh_toan` (
  `id` int NOT NULL,
  `ten_pttt` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_phuong_thuc_thanh_toan`
--

INSERT INTO `tb_phuong_thuc_thanh_toan` (`id`, `ten_pttt`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán qua VNpay'),
(3, 'Thanh toán qua momo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_san_pham`
--

CREATE TABLE `tb_san_pham` (
  `id` int NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gia_sp` float NOT NULL,
  `gia_km` float NOT NULL,
  `id_dm` int NOT NULL,
  `mo_ta` text COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_nhap` date NOT NULL,
  `so_luong` int NOT NULL,
  `id_tt` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_san_pham`
--

INSERT INTO `tb_san_pham` (`id`, `ten_sp`, `gia_sp`, `gia_km`, `id_dm`, `mo_ta`, `ngay_nhap`, `so_luong`, `id_tt`) VALUES
(12, 'iPhone 11 Pro Max 64GB Cũ Trầy xước', 10000000, 9900000, 5, 'Kích thước màn hình\r\n\r\n6.5 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina XDR\r\nCamera sau\r\n\r\n3 Camera 12MP:\r\n- Camera tele: ƒ/2.0 aperture\r\n- Camera góc rộng: ƒ/1.8 aperture\r\n- Camera siêu rộng: ƒ/2.4 aperture\r\nCamera trước\r\n\r\n12 MP ƒ/2.2 aperture\r\nChipset\r\n\r\nA13 Bionic\r\nDung lượng RAM\r\n\r\n4 GB\r\nBộ nhớ trong\r\n\r\n64 GB\r\nPin\r\n\r\n3969 mAh\r\nThẻ SIM\r\n\r\nNano-SIM + eSIM\r\nHệ điều hành\r\n\r\niOS 13 hoặc cao hơn (Tùy vào phiên bản phát hành)\r\nĐộ phân giải màn hình\r\n\r\n2688 x 1242 pixels\r\nCảm biến\r\n\r\nFaceID, Con quay hồi chuyển, Gia tốc kế, Cảm biến tiệm cận, Cảm biến ánh sáng xung quanh', '2024-04-03', 10, 1),
(13, 'iPhone XS Max 64GB Cũ đẹp', 7800000, 5000000, 5, 'Kích thước màn hình\r\n\r\n6.5 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina OLED\r\nCamera sau\r\n\r\n12 MP\r\nCamera trước\r\n\r\n7 MP\r\nChipset\r\n\r\nApple A12 Bionic 6 nhân\r\nBộ nhớ trong\r\n\r\n64 GB\r\nPin\r\n\r\nLi-ion\r\nThẻ SIM\r\n\r\nNano-SIM\r\nHệ điều hành\r\n\r\n12\r\nĐộ phân giải màn hình\r\n\r\n1242 x 2688 pixel', '2024-04-01', 9, 1),
(14, 'Samsung Galaxy Z Fold5 12GB 256GB', 38000000, 29900000, 6, 'Kích thước màn hình\r\n\r\n7.6 inches\r\nCông nghệ màn hình\r\n\r\nDynamic AMOLED 2X\r\nCamera sau\r\n\r\nCamera siêu rộng: 12MP F2.2, 123°, 1.12μm\r\nCamera góc rộng: 50MP, F1.8, Dual Pixel AF, OIS, 2.0μm\r\nCamera Tele: 10 MP, F2.4, PDAF, OIS, 1.0μm, zoom 3X, zoom kỹ thuật số 30X\r\nCamera trước\r\n\r\nCamera bên ngoài:10 MP, f/2.2\r\nCamera bên trong: 4 MP, F1.8\r\nChipset\r\n\r\nSnapdragon 8 Gen 2 for Galaxy (4nm) 8 nhân\r\nDung lượng RAM\r\n\r\n12 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n4.400 mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\nAndroid 13, One UI 5.1\r\nĐộ phân giải màn hình\r\n\r\n2176 x 1812 pixels (QXGA+)\r\nTính năng màn hình\r\n\r\nMàn hình chính rộng: 7,6 inch, 21.6:18, Dynamic AMOLED 2X, 1-120Hz, Hỗ trợ S Pen\r\nMàn hình ngoài rộng: 6,2 inch, HD+ (2316 x 904), Dynamic AMOLED 2X, 23.1:9, 48-120Hz\r\nĐộ sáng tối đa: 1750 nits Mặt kính cảm ứng Chính: Ultra Thin Glass & Phụ: Corning', '2024-04-01', 10, 1),
(15, 'Xiaomi 14 (12GB 256GB)', 25000000, 20900000, 16, 'Mạnh mẽ cân mọi tác vụ, đa nhiệm cực đỉnh - Chip Snapdragon 8 Gen 3 (4nm) mượt mà đi kèm RAM 12GB\r\nTrải nghiệm hình ảnh sống động - Màn hình 6.36” vừa vặn, công nghệ LTPO OLED, tần số quét 120Hz\r\nTuyệt tác camera, chụp ảnh sắc nét - Bộ 3 camera 50MP ống kính Leica cùng chống rung OIS\r\nNăng lượng tràn đầy, thoả sức sức tạo - Dung lượng pin lớn 4610mAh, sạc nhanh 90W', '2024-04-02', 10, 1),
(16, 'Xiaomi Redmi Note 13 6GB 128GB', 4890000, 4690000, 16, 'Redmi Note 13 sở hữu những nâng cấp đáng chú ý với con chip Snapdragon 685, GPU Mali-G57 cùng 6GB RAM để có thể cải thiện tới 25% hiệu năng và 35% khả năng hiển thị đồ hoạ. Điện thoại cũng sẽ được trang bị màn hình AMOLED 120Hz để có được khả năng hiển thị cùng với đó là viên pin 5000 mAh với công suất sạc 33W.', '2024-04-04', 10, 1),
(17, 'iPhone 15 Pro Max 256GB', 34990000, 31990000, 5, 'iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc. Khả năng chụp ảnh đỉnh cao của iPhone 15 bản Pro Max đến từ camera chính 48MP, camera UltraWide 12MP và camera telephoto có khả năng zoom quang học đến 5x. Bên cạnh đó, iPhone 15 ProMax sử dụng chip A17 Pro mới mạnh mẽ. Xem thêm chi tiết những điểm nổi bật của sản phẩm qua thông tin sau!', '2024-04-04', 10, 1),
(18, 'iPhone 14 Pro Max 128GB', 32000000, 26000000, 5, 'iPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6GB đa nhiệm vượt trội. Cùng phân tích chi tiết thông số siêu phẩm này ngay sau đây.', '2024-04-04', 10, 1),
(19, 'OPPO Reno11 F 5G 8GB 256GB', 9000000, 0, 17, 'OPPO Reno11 F 5G cung cấp trải nghiệm hiển thị, xử lý siêu mượt mà với màn hình AMOLED 6.7 inch hiện đại cùng chipset MediaTek Dimensity 7050 mạnh mẽ. Hệ thống quay chụp trên thế hệ Reno11 F 5G này được cải thiện hơn thông qua cụm 3 camera với độ phân giải lần lượt là 64MP, 8MP và 2MP. Ngoài ra, cung cấp năng lượng cho thế hệ OPPO smartphone này là viên pin 5000mAh cùng sạc nhanh 67W, mang tới trải nghiệm liền mạch suốt ngày dài.', '2024-04-04', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_trang_thai`
--

CREATE TABLE `tb_trang_thai` (
  `id` int NOT NULL,
  `ten_tt` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `badge` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_trang_thai`
--

INSERT INTO `tb_trang_thai` (`id`, `ten_tt`, `badge`) VALUES
(1, 'Hiện', 'success'),
(2, 'Ẩn', 'danger'),
(3, 'Chờ xác nhận', 'warning'),
(4, 'Đang xử lý', 'warning'),
(5, 'Đang vận chuyển', 'warning'),
(6, 'Đã hoàn thành', 'success'),
(7, 'Hủy bỏ', 'danger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_chi_tiet_dh`
--
ALTER TABLE `tb_chi_tiet_dh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_danh_gia`
--
ALTER TABLE `tb_danh_gia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_don_hang`
--
ALTER TABLE `tb_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hinh_anh_sp`
--
ALTER TABLE `tb_hinh_anh_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_phuong_thuc_thanh_toan`
--
ALTER TABLE `tb_phuong_thuc_thanh_toan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_chi_tiet_dh`
--
ALTER TABLE `tb_chi_tiet_dh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_danh_gia`
--
ALTER TABLE `tb_danh_gia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_don_hang`
--
ALTER TABLE `tb_don_hang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_hinh_anh_sp`
--
ALTER TABLE `tb_hinh_anh_sp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_phuong_thuc_thanh_toan`
--
ALTER TABLE `tb_phuong_thuc_thanh_toan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
