-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2024 lúc 08:52 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du-an-1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_bai_viet`
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
-- Đang đổ dữ liệu cho bảng `tb_bai_viet`
--

INSERT INTO `tb_bai_viet` (`id`, `id_nd`, `tieu_de`, `hinh_anh`, `noi_dung`, `ngay_dang`, `ngay_sua`) VALUES
(1, 4, 'zxcv', '66015eb108e27.jpg', 'qưer', '2024-03-25 12:19:31', '2024-03-26 09:21:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binh_luan`
--

CREATE TABLE `tb_binh_luan` (
  `id` int(11) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `thoi_gian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_binh_luan`
--

INSERT INTO `tb_binh_luan` (`id`, `id_nd`, `id_sp`, `noi_dung`, `thoi_gian`) VALUES
(1, 1, 11, 'test', '2024-04-02 09:20:43'),
(2, 1, 11, 'test 2\r\n', '2024-04-02 09:20:57'),
(3, 1, 12, 'Ngon bổ rẻ', '2024-04-04 11:01:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chi_tiet_dh`
--

CREATE TABLE `tb_chi_tiet_dh` (
  `id` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chi_tiet_dh`
--

INSERT INTO `tb_chi_tiet_dh` (`id`, `id_dh`, `id_sp`, `so_luong`, `gia`) VALUES
(11, 8, 10, 1, 13000000),
(12, 9, 10, 1, 13000000),
(13, 10, 14, 1, 29900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id` int(11) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chuc_vu`
--

INSERT INTO `tb_chuc_vu` (`id`, `chuc_vu`) VALUES
(1, 'Quản trị viên'),
(2, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danh_gia`
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
-- Đang đổ dữ liệu cho bảng `tb_danh_gia`
--

INSERT INTO `tb_danh_gia` (`id`, `id_nd`, `id_sp`, `so_sao`, `danh_gia`, `ngay_dg`) VALUES
(1, 1, 11, 5, '10 điểm k có nhưng', '2024-04-02 09:21:40'),
(2, 1, 11, 1, '1 sao', '2024-04-02 09:21:50'),
(3, 10, 14, 5, 'Xịn xò', '2024-04-04 11:25:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danh_muc_sp`
--

CREATE TABLE `tb_danh_muc_sp` (
  `id` int(11) NOT NULL,
  `ten_dm` varchar(50) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `hinh_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danh_muc_sp`
--

INSERT INTO `tb_danh_muc_sp` (`id`, `ten_dm`, `mo_ta`, `hinh_anh`) VALUES
(5, 'iPhone', '', '660b7a44ec022.png'),
(6, 'Samsung', '', '660b7a3bce5b9.png'),
(16, 'Xiaomi', '', '660e48e77819d.png'),
(17, 'Realme', '', '660e49ff19bc3.png'),
(18, 'TECNO', '', '660e4d12dbe17.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_don_hang`
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
-- Đang đổ dữ liệu cho bảng `tb_don_hang`
--

INSERT INTO `tb_don_hang` (`id`, `ma_dh`, `ngay_dat`, `id_nd`, `id_pttt`, `id_tt`, `id_km`, `tong_tien`, `ghi_chu`, `ho_ten`, `email`, `so_dien_thoai`, `dia_chi`) VALUES
(8, 'DH1712199127', '2024-04-04 09:52:07', 1, 1, 3, 0, 13000000, '', 'Admin', 'admin@gmail.com', '0339735022', 'Hà Nội'),
(9, 'DH1712199360', '2024-04-04 09:56:00', 10, 1, 3, 0, 13000000, '', 'Client', 'client@gmail.com', '0339735555', 'Hải Phòng'),
(10, 'DH1712204478', '2024-04-04 11:21:18', 10, 1, 9, 0, 23920000, '', 'Client', 'client@gmail.com', '0339735555', 'Hải Phòng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hinh_anh_sp`
--

CREATE TABLE `tb_hinh_anh_sp` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hinh_anh_sp`
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
(35, 15, '660e493a902c7.webp'),
(36, 15, '660e493a907ee.webp'),
(37, 15, '660e493a90c47.webp'),
(38, 16, '660e4a76774c6.webp'),
(39, 16, '660e4a7677b88.webp'),
(40, 16, '660e4a7678253.webp'),
(47, 17, '660e4b1e74c43.webp'),
(48, 17, '660e4b1e7599b.webp'),
(49, 18, '660e4b7b7f220.webp'),
(50, 18, '660e4b7b7f7c9.webp'),
(51, 18, '660e4b7b7fde9.webp'),
(52, 19, '660e4bd670166.webp'),
(53, 19, '660e4bd670a39.webp'),
(54, 19, '660e4bd67128b.webp'),
(55, 19, '660e4bd671b0f.webp'),
(56, 20, '660e4c41d510f.webp'),
(57, 20, '660e4c41d5744.webp'),
(58, 20, '660e4c41d5f5c.webp'),
(59, 21, '660e4ca05d19c.webp'),
(60, 21, '660e4ca05d921.webp'),
(61, 21, '660e4ca05de01.webp'),
(62, 22, '660e4d5abdc2f.webp'),
(63, 22, '660e4d5abe36e.webp'),
(64, 23, '660e4d9f8c55a.webp'),
(65, 23, '660e4d9f8ccd3.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_khuyen_mai`
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
-- Đang đổ dữ liệu cho bảng `tb_khuyen_mai`
--

INSERT INTO `tb_khuyen_mai` (`id`, `ten_km`, `ma_km`, `mo_ta`, `ngay_bat_dau`, `ngay_ket_thuc`, `giam_gia`) VALUES
(1, 'Giảm 10%', 'MGL9UYJO', '', '2024-04-04', '2024-04-05', 10),
(2, 'Giảm 20%', 'IK86OVCT', '', '2024-03-27', '2024-08-28', 20),
(3, 'Giảm 5%', '96F1ATVP', 'Đã hết hạn', '2024-03-25', '2024-03-26', 5),
(4, 'Giảm 1% ', 'G6T0IZJE', '', '2024-03-29', '2024-03-30', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lien_he`
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
-- Cấu trúc bảng cho bảng `tb_nguoi_dung`
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
-- Đang đổ dữ liệu cho bảng `tb_nguoi_dung`
--

INSERT INTO `tb_nguoi_dung` (`id`, `email`, `mat_khau`, `ho_ten`, `avatar`, `id_cv`, `gioi_tinh`, `dia_chi`, `ngay_sinh`, `so_dien_thoai`) VALUES
(1, 'admin@gmail.com', '12345678', 'Admin', 'default.png', 1, 'male', 'Hà Nội', '2024-03-24', '0339735022'),
(10, 'client@gmail.com', '12345678', 'Client', 'default.png', 2, 'male', 'Hải Phòng', '2024-03-05', '0339735555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_phuong_thuc_thanh_toan`
--

CREATE TABLE `tb_phuong_thuc_thanh_toan` (
  `id` int(11) NOT NULL,
  `ten_pttt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_phuong_thuc_thanh_toan`
--

INSERT INTO `tb_phuong_thuc_thanh_toan` (`id`, `ten_pttt`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán qua VNpay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_san_pham`
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
-- Đang đổ dữ liệu cho bảng `tb_san_pham`
--

INSERT INTO `tb_san_pham` (`id`, `ten_sp`, `gia_sp`, `gia_km`, `id_dm`, `mo_ta`, `ngay_nhap`, `so_luong`, `id_tt`) VALUES
(12, 'iPhone 11 Pro Max 64GB Cũ Trầy xước', 10000000, 9900000, 5, 'Kích thước màn hình\r\n\r\n6.5 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina XDR\r\nCamera sau\r\n\r\n3 Camera 12MP:\r\n- Camera tele: ƒ/2.0 aperture\r\n- Camera góc rộng: ƒ/1.8 aperture\r\n- Camera siêu rộng: ƒ/2.4 aperture\r\nCamera trước\r\n\r\n12 MP ƒ/2.2 aperture\r\nChipset\r\n\r\nA13 Bionic\r\nDung lượng RAM\r\n\r\n4 GB\r\nBộ nhớ trong\r\n\r\n64 GB\r\nPin\r\n\r\n3969 mAh\r\nThẻ SIM\r\n\r\nNano-SIM + eSIM\r\nHệ điều hành\r\n\r\niOS 13 hoặc cao hơn (Tùy vào phiên bản phát hành)\r\nĐộ phân giải màn hình\r\n\r\n2688 x 1242 pixels\r\nCảm biến\r\n\r\nFaceID, Con quay hồi chuyển, Gia tốc kế, Cảm biến tiệm cận, Cảm biến ánh sáng xung quanh', '2024-04-03', 10, 1),
(13, 'iPhone XS Max 64GB Cũ đẹp', 7800000, 5000000, 5, 'Kích thước màn hình\r\n\r\n6.5 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina OLED\r\nCamera sau\r\n\r\n12 MP\r\nCamera trước\r\n\r\n7 MP\r\nChipset\r\n\r\nApple A12 Bionic 6 nhân\r\nBộ nhớ trong\r\n\r\n64 GB\r\nPin\r\n\r\nLi-ion\r\nThẻ SIM\r\n\r\nNano-SIM\r\nHệ điều hành\r\n\r\n12\r\nĐộ phân giải màn hình\r\n\r\n1242 x 2688 pixel', '2024-04-01', 10, 1),
(14, 'Samsung Galaxy Z Fold5 12GB 256GB', 32000000, 29900000, 6, 'Kích thước màn hình\r\n\r\n7.6 inches\r\nCông nghệ màn hình\r\n\r\nDynamic AMOLED 2X\r\nCamera sau\r\n\r\nCamera siêu rộng: 12MP F2.2, 123°, 1.12μm\r\nCamera góc rộng: 50MP, F1.8, Dual Pixel AF, OIS, 2.0μm\r\nCamera Tele: 10 MP, F2.4, PDAF, OIS, 1.0μm, zoom 3X, zoom kỹ thuật số 30X\r\nCamera trước\r\n\r\nCamera bên ngoài:10 MP, f/2.2\r\nCamera bên trong: 4 MP, F1.8\r\nChipset\r\n\r\nSnapdragon 8 Gen 2 for Galaxy (4nm) 8 nhân\r\nDung lượng RAM\r\n\r\n12 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n4.400 mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\nAndroid 13, One UI 5.1\r\nĐộ phân giải màn hình\r\n\r\n2176 x 1812 pixels (QXGA+)\r\nTính năng màn hình\r\n\r\nMàn hình chính rộng: 7,6 inch, 21.6:18, Dynamic AMOLED 2X, 1-120Hz, Hỗ trợ S Pen\r\nMàn hình ngoài rộng: 6,2 inch, HD+ (2316 x 904), Dynamic AMOLED 2X, 23.1:9, 48-120Hz\r\nĐộ sáng tối đa: 1750 nits Mặt kính cảm ứng Chính: Ultra Thin Glass & Phụ: Corning', '2024-04-01', 100, 1),
(15, 'Samsung Galaxy S24 Ultra 12GB 256GB', 26999000, 0, 6, 'Kích thước màn hình\r\n\r\n6.8 inches\r\nCông nghệ màn hình\r\n\r\nDynamic AMOLED 2X\r\nĐộ phân giải màn hình\r\n\r\n1440 x 3120 pixels\r\nTính năng màn hình\r\n\r\nĐộ sáng cao nhất 2,600 nits, 120Hz, Corning® Gorilla® Armor®, 16 triệu màu\r\nTần số quét\r\n\r\n120Hz\r\nKiểu màn hình\r\n\r\nĐục lỗ (Nốt ruồi)', '2024-04-04', 10, 1),
(16, 'Xiaomi Redmi Note 13 Pro Plus 5G 8GB 256GB', 10599000, 0, 16, 'Kích thước màn hình\r\n\r\n6.67 inches\r\nCông nghệ màn hình\r\n\r\nAMOLED\r\nCamera sau\r\n\r\nChính 200 MP & Phụ 8 MP, 2 MP\r\nCamera trước\r\n\r\n16 MP\r\nChipset\r\n\r\nMediatek Dimensity 7200 Ultra (4 nm)\r\nDung lượng RAM\r\n\r\n8 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n5000 mAh\r\nThẻ SIM\r\n\r\n2 SIM (Nano-SIM)\r\nHệ điều hành\r\n\r\nAndroid 13\r\nĐộ phân giải màn hình\r\n\r\n1220 x 2712 pixels\r\nTính năng màn hình\r\n\r\nTần số quét 120Hz', '2024-04-04', 25, 1),
(17, 'Xiaomi 13T Pro 5G (12GB - 512GB)', 14790000, 0, 16, 'Kích thước màn hình\r\n\r\n6.67 inches\r\nCông nghệ màn hình\r\n\r\nAMOLED\r\nCamera sau\r\n\r\nCamera chính góc rộng: 50 MP, 1/1.22\"\r\nCamera góc siêu rộng: 12 MP\r\nCamera Tele: 50 MP\r\nCamera trước\r\n\r\n20 MP, f/2,2\r\nChipset\r\n\r\nMediaTek Dimensity 9200+\r\nDung lượng RAM\r\n\r\n12 GB\r\nBộ nhớ trong\r\n\r\n512 GB\r\nPin\r\n\r\n5.000 mAh\r\nThẻ SIM\r\n\r\n2 Nano SIM hoặc 1 Nano + 1 eSIM\r\nHệ điều hành\r\n\r\nAndroid 13\r\nĐộ phân giải màn hình\r\n\r\n1220 x 2712 pixels\r\nTính năng màn hình\r\n\r\nTần số quét 144 Hz, 446 ppi, 1200 nit, 68 tỷ màu\r\nMàn hình TrueColor\r\nCorning®️ Gorilla®️ Glass 5', '2024-04-04', 20, 1),
(18, 'Samsung Galaxy S24 8GB 512GB', 21490000, 0, 6, 'Kích thước màn hình\r\n\r\n6.2 inches\r\nCông nghệ màn hình\r\n\r\nDynamic AMOLED 2X\r\nCamera sau\r\n\r\nCamera chính 50 MP, f/1.8\r\nCamera tele: 10 MP, f/2.4, PDAF, OIS, zoom quang học 3x\r\nCamera góc siêu rộng: 12 MP, f/2.2, 120˚\r\nCamera trước\r\n\r\n12 MP, f/2.2\r\nChipset\r\n\r\nExynos 2400\r\nDung lượng RAM\r\n\r\n8 GB\r\nBộ nhớ trong\r\n\r\n512 GB\r\nPin\r\n\r\n4.000 mAh\r\nThẻ SIM\r\n\r\nSIM 1 + SIM 2 / SIM 1 + eSIM / 2 eSIM\r\nHệ điều hành\r\n\r\nAndroid 14, One UI 6.1\r\nĐộ phân giải màn hình\r\n\r\n1080 x 2340 pixels (FullHD+)\r\nTính năng màn hình\r\n\r\n120Hz, Độ sáng tối đa 2600 nits, Corning® Gorilla® Glass Victus® 2, 16 triệu màu\r\nTương thích\r\n\r\nIP68', '2024-04-04', 20, 1),
(19, 'iPhone 15 128GB', 19500000, 0, 5, 'Kích thước màn hình\r\n\r\n6.1 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina XDR OLED\r\nCamera sau\r\n\r\nChính 48 MP & Phụ 12 MP\r\nCamera trước\r\n\r\n12MP, ƒ/1.9\r\nChipset\r\n\r\nApple A16 Bionic 6 nhân\r\nDung lượng RAM\r\n\r\n6 GB\r\nBộ nhớ trong\r\n\r\n128 GB\r\nPin\r\n\r\n3349 mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\niOS 17\r\nĐộ phân giải màn hình\r\n\r\n2556 x 1179 pixels\r\nTính năng màn hình\r\n\r\nDynamic Island\r\nHDR display\r\nTrue Tone\r\nWide color (P3)\r\nHaptic Touch\r\nLớp phủ oleophobia chống dấu vân tay\r\nĐộ sáng tối đa: 2000 nits\r\nMặt kính cảm ứng: Kính cường lực Ceramic Shield\r\nTần số quét 60 Hz', '2024-04-04', 10, 1),
(20, 'realme 10 8GB 256GB', 4999000, 0, 17, 'Kích thước màn hình\r\n\r\n6.4 inches\r\nCông nghệ màn hình\r\n\r\nSuper AMOLED\r\nCamera sau\r\n\r\nCamera chính AI: 50MP, f/1.8\r\nCamera chân dung: 2MP, f/2.4\r\nCamera trước\r\n\r\n16 MP, f/2.5\r\nChipset\r\n\r\nHelio G99 (6nm)\r\nDung lượng RAM\r\n\r\n8 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n5.000 mAh\r\nThẻ SIM\r\n\r\n2 SIM (Nano-SIM)\r\nHệ điều hành\r\n\r\nAndroid 12, Realme UI 3.0\r\nĐộ phân giải màn hình\r\n\r\n1080 x 2400 pixels (FullHD+)\r\nTính năng màn hình\r\n\r\nTần số quét 90 Hz, 16,7 triệu màu, Độ tương phản: 4,000,000:1, kính cường lực: Corning Gorilla Glass 5', '2024-04-04', 10, 1),
(21, 'realme 11 Pro (8GB - 256GB)', 9999000, 0, 17, 'Kích thước màn hình\r\n\r\n6.7 inches\r\nCông nghệ màn hình\r\n\r\nAMOLED\r\nCamera sau\r\n\r\nCamera góc rộng: 100 MP, f/1.75, 26mm, PDAF, OIS\r\nCamera chiều sâu: 2 MP, f/2.4, 22mm\r\nCamera trước\r\n\r\nCamera góc rộng: 16 MP, f/2.45, 25mm\r\nChipset\r\n\r\nMediatek Dimensity 7050 5G\r\nDung lượng RAM\r\n\r\n8 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n5.000 mAh\r\nThẻ SIM\r\n\r\n2 SIM (Nano-SIM)\r\nHệ điều hành\r\n\r\nAndroid 13\r\nĐộ phân giải màn hình\r\n\r\n1080 x 2412 pixels\r\nTính năng màn hình\r\n\r\n1.07 tỷ màu, HDR10+, tần số quét 120Hz, 100% DCI-P3', '2024-04-04', 12, 1),
(22, 'TECNO POVA 5 8GB 128GB', 4100000, 0, 18, 'Kích thước màn hình\r\n\r\n6.78 inches\r\nCông nghệ màn hình\r\n\r\nLCD\r\nCamera sau\r\n\r\nCamera góc rộng: 50 MP, f/1.66, PDAF\r\nCamera chiều sâu: f/2.0\r\nCamera trước\r\n\r\n8 MP, f/2.0\r\nChipset\r\n\r\nMediatek MT8781 Helio G99 (6nm)\r\nDung lượng RAM\r\n\r\n8 GB\r\nBộ nhớ trong\r\n\r\n128 GB\r\nPin\r\n\r\n6000mAh\r\nThẻ SIM\r\n\r\n2 SIM (Nano-SIM)\r\nHệ điều hành\r\n\r\nAndroid 13\r\nĐộ phân giải màn hình\r\n\r\n1080x2460 pixels\r\nTính năng màn hình\r\n\r\nTần số quét 120Hz, tần số cảm ứng 240Hz, 580 nits', '2024-04-04', 13, 1),
(23, 'TECNO Camon 20 Pro', 4850000, 0, 18, 'Kích thước màn hình\r\n\r\n6.67 inches\r\nCông nghệ màn hình\r\n\r\nAMOLED\r\nCamera sau\r\n\r\n64 MP, f/1.7 + 2 MP, f/2.4\r\nCamera trước\r\n\r\n32 MP, f/2.5\r\nChipset\r\n\r\nHelio G99 (6nm)\r\nDung lượng RAM\r\n\r\n8GB + Mở rộng 8GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n5000 mAh\r\nThẻ SIM\r\n\r\n2 SIM (Nano-SIM)\r\nHệ điều hành\r\n\r\nAndroid 13\r\nĐộ phân giải màn hình\r\n\r\n1080 x 2400 pixels (FullHD+)\r\nTính năng màn hình\r\n\r\nTần số quét 120Hz\r\nMàn chắn nắng HBM', '2024-04-04', 7, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_trang_thai`
--

CREATE TABLE `tb_trang_thai` (
  `id` int(11) NOT NULL,
  `ten_tt` varchar(50) NOT NULL,
  `badge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_trang_thai`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_chi_tiet_dh`
--
ALTER TABLE `tb_chi_tiet_dh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_danh_gia`
--
ALTER TABLE `tb_danh_gia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_don_hang`
--
ALTER TABLE `tb_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_hinh_anh_sp`
--
ALTER TABLE `tb_hinh_anh_sp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_phuong_thuc_thanh_toan`
--
ALTER TABLE `tb_phuong_thuc_thanh_toan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_chi_tiet_dh`
--
ALTER TABLE `tb_chi_tiet_dh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tb_danh_gia`
--
ALTER TABLE `tb_danh_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tb_don_hang`
--
ALTER TABLE `tb_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tb_hinh_anh_sp`
--
ALTER TABLE `tb_hinh_anh_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tb_phuong_thuc_thanh_toan`
--
ALTER TABLE `tb_phuong_thuc_thanh_toan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
