-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 06:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `id` int(11) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `tieu_de` varchar(100) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_dang` datetime NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` datetime NOT NULL DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `thoi_gian` datetime NOT NULL DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_chi_tiet_dh`
--

INSERT INTO `tb_chi_tiet_dh` (`id`, `id_dh`, `id_sp`, `so_luong`, `gia`) VALUES
(11, 8, 10, 1, 13000000),
(12, 9, 10, 1, 13000000),
(13, 10, 14, 1, 29900000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id` int(11) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL
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
  `id` int(11) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_sao` int(11) NOT NULL,
  `danh_gia` text DEFAULT NULL,
  `ngay_dg` datetime NOT NULL DEFAULT current_timestamp()
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
  `id` int(11) NOT NULL,
  `ten_dm` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `hinh_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_danh_muc_sp`
--

INSERT INTO `tb_danh_muc_sp` (`id`, `ten_dm`, `mo_ta`, `hinh_anh`) VALUES
(5, 'iPhone', '', '660b7a44ec022.png'),
(6, 'Samsung', '', '660b7a3bce5b9.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_don_hang`
--

CREATE TABLE `tb_don_hang` (
  `id` int(11) NOT NULL,
  `ma_dh` varchar(50) NOT NULL,
  `ngay_dat` datetime NOT NULL DEFAULT current_timestamp(),
  `id_nd` int(11) NOT NULL,
  `id_pttt` int(11) NOT NULL,
  `id_tt` int(11) NOT NULL,
  `id_km` int(11) NOT NULL,
  `tong_tien` float NOT NULL,
  `ghi_chu` text NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(10) NOT NULL,
  `dia_chi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_don_hang`
--

INSERT INTO `tb_don_hang` (`id`, `ma_dh`, `ngay_dat`, `id_nd`, `id_pttt`, `id_tt`, `id_km`, `tong_tien`, `ghi_chu`, `ho_ten`, `email`, `so_dien_thoai`, `dia_chi`) VALUES
(8, 'DH1712199127', '2024-04-04 09:52:07', 1, 1, 3, 0, 13000000, '', 'Admin', 'admin@gmail.com', '0339735022', 'Hà Nội'),
(9, 'DH1712199360', '2024-04-04 09:56:00', 10, 1, 3, 0, 13000000, '', 'Client', 'client@gmail.com', '0339735555', 'Hải Phòng'),
(10, 'DH1712204478', '2024-04-04 11:21:18', 10, 1, 9, 0, 23920000, '', 'Client', 'client@gmail.com', '0339735555', 'Hải Phòng');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hinh_anh_sp`
--

CREATE TABLE `tb_hinh_anh_sp` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL
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
(34, 14, '660e278011f62.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_khuyen_mai`
--

CREATE TABLE `tb_khuyen_mai` (
  `id` int(11) NOT NULL,
  `ten_km` varchar(50) NOT NULL,
  `ma_km` varchar(50) NOT NULL,
  `mo_ta` text NOT NULL,
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
  `id` int(11) NOT NULL,
  `tieu_de` text NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `dia_chi` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `noi_dung` text NOT NULL,
  `id_tt` int(11) NOT NULL DEFAULT 3,
  `ngay_gui` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nguoi_dung`
--

CREATE TABLE `tb_nguoi_dung` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `id_cv` int(11) NOT NULL,
  `gioi_tinh` varchar(50) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nguoi_dung`
--

INSERT INTO `tb_nguoi_dung` (`id`, `email`, `mat_khau`, `ho_ten`, `avatar`, `id_cv`, `gioi_tinh`, `dia_chi`, `ngay_sinh`, `so_dien_thoai`) VALUES
(1, 'admin@gmail.com', '12345678', 'Admin', 'default.png', 1, 'male', 'Hà Nội', '2024-03-24', '0339735022'),
(10, 'client@gmail.com', '12345678', 'Client', 'default.png', 2, 'male', 'Hải Phòng', '2024-03-05', '0339735555');

-- --------------------------------------------------------

--
-- Table structure for table `tb_phuong_thuc_thanh_toan`
--

CREATE TABLE `tb_phuong_thuc_thanh_toan` (
  `id` int(11) NOT NULL,
  `ten_pttt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_phuong_thuc_thanh_toan`
--

INSERT INTO `tb_phuong_thuc_thanh_toan` (`id`, `ten_pttt`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán qua VNpay');

-- --------------------------------------------------------

--
-- Table structure for table `tb_san_pham`
--

CREATE TABLE `tb_san_pham` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `gia_sp` float NOT NULL,
  `gia_km` float NOT NULL,
  `id_dm` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `ngay_nhap` date NOT NULL,
  `so_luong` int(11) NOT NULL,
  `id_tt` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_san_pham`
--

INSERT INTO `tb_san_pham` (`id`, `ten_sp`, `gia_sp`, `gia_km`, `id_dm`, `mo_ta`, `ngay_nhap`, `so_luong`, `id_tt`) VALUES
(12, 'iPhone 11 Pro Max 64GB Cũ Trầy xước', 10000000, 9900000, 5, 'Kích thước màn hình\r\n\r\n6.5 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina XDR\r\nCamera sau\r\n\r\n3 Camera 12MP:\r\n- Camera tele: ƒ/2.0 aperture\r\n- Camera góc rộng: ƒ/1.8 aperture\r\n- Camera siêu rộng: ƒ/2.4 aperture\r\nCamera trước\r\n\r\n12 MP ƒ/2.2 aperture\r\nChipset\r\n\r\nA13 Bionic\r\nDung lượng RAM\r\n\r\n4 GB\r\nBộ nhớ trong\r\n\r\n64 GB\r\nPin\r\n\r\n3969 mAh\r\nThẻ SIM\r\n\r\nNano-SIM + eSIM\r\nHệ điều hành\r\n\r\niOS 13 hoặc cao hơn (Tùy vào phiên bản phát hành)\r\nĐộ phân giải màn hình\r\n\r\n2688 x 1242 pixels\r\nCảm biến\r\n\r\nFaceID, Con quay hồi chuyển, Gia tốc kế, Cảm biến tiệm cận, Cảm biến ánh sáng xung quanh', '2024-04-03', 10, 1),
(13, 'iPhone XS Max 64GB Cũ đẹp', 7800000, 5000000, 5, 'Kích thước màn hình\r\n\r\n6.5 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina OLED\r\nCamera sau\r\n\r\n12 MP\r\nCamera trước\r\n\r\n7 MP\r\nChipset\r\n\r\nApple A12 Bionic 6 nhân\r\nBộ nhớ trong\r\n\r\n64 GB\r\nPin\r\n\r\nLi-ion\r\nThẻ SIM\r\n\r\nNano-SIM\r\nHệ điều hành\r\n\r\n12\r\nĐộ phân giải màn hình\r\n\r\n1242 x 2688 pixel', '2024-04-01', 10, 1),
(14, 'Samsung Galaxy Z Fold5 12GB 256GB', 32000000, 29900000, 6, 'Kích thước màn hình\r\n\r\n7.6 inches\r\nCông nghệ màn hình\r\n\r\nDynamic AMOLED 2X\r\nCamera sau\r\n\r\nCamera siêu rộng: 12MP F2.2, 123°, 1.12μm\r\nCamera góc rộng: 50MP, F1.8, Dual Pixel AF, OIS, 2.0μm\r\nCamera Tele: 10 MP, F2.4, PDAF, OIS, 1.0μm, zoom 3X, zoom kỹ thuật số 30X\r\nCamera trước\r\n\r\nCamera bên ngoài:10 MP, f/2.2\r\nCamera bên trong: 4 MP, F1.8\r\nChipset\r\n\r\nSnapdragon 8 Gen 2 for Galaxy (4nm) 8 nhân\r\nDung lượng RAM\r\n\r\n12 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n4.400 mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\nAndroid 13, One UI 5.1\r\nĐộ phân giải màn hình\r\n\r\n2176 x 1812 pixels (QXGA+)\r\nTính năng màn hình\r\n\r\nMàn hình chính rộng: 7,6 inch, 21.6:18, Dynamic AMOLED 2X, 1-120Hz, Hỗ trợ S Pen\r\nMàn hình ngoài rộng: 6,2 inch, HD+ (2316 x 904), Dynamic AMOLED 2X, 23.1:9, 48-120Hz\r\nĐộ sáng tối đa: 1750 nits Mặt kính cảm ứng Chính: Ultra Thin Glass & Phụ: Corning', '2024-04-01', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_trang_thai`
--

CREATE TABLE `tb_trang_thai` (
  `id` int(11) NOT NULL,
  `ten_tt` varchar(50) NOT NULL,
  `badge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_trang_thai`
--

INSERT INTO `tb_trang_thai` (`id`, `ten_tt`, `badge`) VALUES
(1, 'Hiện', 'success'),
(2, 'Ẩn', 'danger'),
(3, 'Chờ xử lý', 'warning'),
(4, 'Đã xử lý', 'warning'),
(5, 'Đang vận chuyển', 'warning'),
(6, 'Đã giao hàng', 'success'),
(7, 'Hoàn trả', 'warning'),
(8, 'Hủy bỏ', 'danger'),
(9, 'Đã hoàn thành', 'success');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_chi_tiet_dh`
--
ALTER TABLE `tb_chi_tiet_dh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_danh_gia`
--
ALTER TABLE `tb_danh_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_don_hang`
--
ALTER TABLE `tb_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_hinh_anh_sp`
--
ALTER TABLE `tb_hinh_anh_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_phuong_thuc_thanh_toan`
--
ALTER TABLE `tb_phuong_thuc_thanh_toan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
