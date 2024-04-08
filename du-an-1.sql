-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2024 lúc 10:54 AM
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
  `mo_ta_bv` varchar(225) DEFAULT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_dang` date NOT NULL DEFAULT current_timestamp(),
  `ngay_sua` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_bai_viet`
--

INSERT INTO `tb_bai_viet` (`id`, `id_nd`, `tieu_de`, `mo_ta_bv`, `hinh_anh`, `noi_dung`, `ngay_dang`, `ngay_sua`) VALUES
(6, 1, 'Galaxy S24 Ultra sau gần 2 tháng sử dụng', 'Sự kết hợp và dung hòa giữa phần cứng mạnh mẽ và phần mềm thông minh, thiết thực', '6613a8a9a5ccc.png', 'Sự kết hợp và dung hòa giữa phần cứng mạnh mẽ và phần mềm thông minh, thiết thực với tác vụ hàng ngày của người dùng chính là thứ “vũ khí” tạo nên sự khác biệt của Galaxy S24 Ultra với phần còn lại.\r\n“Điện thoại thời nay chiếc nào cũng giống nhau!” Đó là nhận định của nhiều người mỗi khi một chiếc smartphone mới vừa được ra mắt. Thế nhưng phải sử dụng mới cảm thấy được sự khác biệt. Khi phần cứng đã dần định hình và khó tạo đột phá, phần mềm chính là thứ giúp người dùng nhận ra chiếc điện thoại trên tay tốt đến nhường nào.\r\nNhu cầu của người dùng đối với smartphone, đặc biệt là flagship không chỉ dừng lại ở việc camera chất lượng, hiệu năng cao hay những thông số khủng. Mà còn phải biết cách biến hóa, tối ưu những thông số đó để tạo nên trải nghiệm tốt nhất cho người dùng. Vừa là thiết bị liên lạc, giải trí và nếu có thể giúp đỡ hoàn thành công việc, tác vụ trong cuộc sống tốt hơn thì thật tuyệt vời.\r\n\r\nGần 2 tháng sử dụng Galaxy S24 Ultra quả thật mang đến cho mình một cái nhìn khác về flagship của Samsung. Bên cạnh những nhu cầu giải trí và liên lạc, chiếc máy này còn là thứ giúp tối ưu công việc, tiện lợi hơn trong cuộc sống và còn là công vụ để bản thân mình phát triển thêm kỹ năng mới.\r\nMục lục	\r\nHiệu suất mạnh mẽ cho trải nghiệm gaming đỉnh cao\r\nSáng tạo nội dung dễ dàng hơn nhờ S Pen\r\nThay đổi phong cách làm việc\r\nKết luận\r\nHiệu suất mạnh mẽ cho trải nghiệm gaming đỉnh cao\r\nDù là PC hay mobile, trải nghiệm gaming đỉnh cao là sự kết hợp giữa mức FPS cao, mượt mà trong mọi khoảnh khắc cùng với đồ họa đẹp mắt để cảm nhận sự chi tiết của những tựa game bom tấn. Được mệnh danh là “hung thần” của smartphone, gây khó khăn không hề nhẹ cho những Nhà Lữ Hành khi chơi trên di động nhưng với Galaxy S24 Ultra thì khác.\r\n\r\nLà một người yêu thích trải nghiệm cái đẹp của những tựa game nên từ khi mưới tập chơi Genshin Impact, mình đã thiết lập đồ họa cao nhất để hiệu ứng tung chiêu, cây cỏ, ánh sáng trở nên đẹp và chân thật nhất. Nhưng cũng không làm khó được chiếc flagship của nhà Samsung khi khám phá lục địa Teyvat.\r\nChơi game không chỉ đơn giản là căng sức cày cuốc, hãy thử một lần bật đồ họa cao nếu được để tận hưởng cảm giác giải trí thực thụ là như nào, bạn sẽ cảm nhận được sự khác biệt rõ rệt khi chơi tựa game bom tấn này.\r\n\r\nĐể làm được điều đó là nhờ vi xử lý Snapdragon 8 Gen 3 for Galaxy đầy mạnh mẽ cộng thêm với hệ thống tản nhiệt hiệu quả, được cải tiến gấp 1.9 lần so với thế hệ cũ để máy luôn có được độ ổn định cao giúp mình có thể chiến game nhiều giờ liền.\r\n\r\nBên cạnh đó, Galaxy S24 Ultra còn được biết đến với Galaxy AI, bởi vậy nên hiệu suất mạnh mẽ này còn giúp các tác vụ AI và trải nghiệm hàng ngày với mọi tác vụ đều mượt mà hơn hẳn.\r\nSáng tạo nội dung dễ dàng hơn nhờ S Pen\r\nGalaxy S24 Ultra còn nổi danh với hệ thống camera chất lượng cao, cho người dùng cảm hứng nhiếp ảnh và sáng tạo mạnh mẽ. Điều này còn đặc biệt hữu hiệu với các nhà sáng tạo nội dung, TikToker, Youtuber,... Hơn nữa, nó còn mang đến trải nghiệm liền mạch giữa việc sản xuất tư liệu và edit video trên cùng 1 thiết bị.\r\nNhờ có Galaxy S24 Ultra nên mình cũng bắt đầu tập tành nhiếp ảnh trên di dộng, quay những thước phim và edit để đăng lên TikTok và Youtube. Chụp ảnh hay sáng tạo nội dung cũng là một thứ rất hay để cải thiện và nâng cao thêm kỹ năng khác của bản thân và mở thêm nhiều cơ hội mới.\r\n\r\nTừng sử dụng ứng dụng chỉnh ảnh, video trên điện thoại nên mình biết giao diện edit video trên điện thoại nói chung sẽ hơi nhỏ nên dùng tay thao tác sẽ gặp khó khăn, đôi khi chạm nhầm hoặc phải mất nhiều thao tác kéo thả, zoom mất thời gian.\r\nNhưng sử dụng CapCut trên Galaxy S24 Ultra nó tạo nên sự khác biệt lớn. Nhờ S Pen mà edit video hay chỉnh ảnh trên màn hình điện thoại dễ dàng hơn rất nhiều, bạn có thể kéo thả hiệu ứng, chữ viết hay sticker vào chính xác vị trí mong muốn mà không cần phải chỉnh lại.\r\n\r\nChỉnh sửa video dùng S Pen còn tạo nên sự chuyên nghiệp và cảm hứng sáng tạo hơn, có thể tập trung vào việc edit, tạo ra những sản phẩm chất lượng với tốc độ nhanh chóng.\r\nBên cạnh đó, Galaxy S24 Ultra còn có màn hình có độ sáng siêu lớn lên tới 2600 nits nên dù khi ở trong nhà hay ra ngoài trời đều có thể thấy rõ các nội dung trên màn hình. Đặc biệt là một người sản xuất nội dung như mình hoặc các bạn creator hay đi ra ngoài làm việc thì điều này cực kỳ tiện lợi.\r\n\r\nMàn hình lớn, sắc nét và độ sáng cao giúp xem Google Maps, xem tin nhắn hay quay video, chụp ảnh ở ngoài trời đều trở nên dễ dàng hơn.\r\nThay đổi phong cách làm việc\r\nGalaxy S24 Ultra được trang bị các tính năng Galaxy AI, và tính năng mà mình thích nhất trong gần 2 tháng sử dụng đó là Phiên âm sang văn bản. Những buổi brainstorm cùng với team, trao đổi với đối tác cũng không cần phải ghi bằng giấy bút thông thường nữa, chỉ cần mở ghi âm lên và sau đó chuyển thành văn bản để xem lại và tóm tắt cực kỳ tiện lợi.\r\n\r\nThêm vào đó, dung lượng pin lớn lên tới 5,000mAh là điều tuyệt vời để mình mang Galaxy S24 Ultra theo cả ngày dài ở ngoài đường. Nhu cầu chụp ảnh, quay video và liên lạc nhiều lại hay đi ra ngoài đường nên mình cực kỳ thích cách Samsung tối ưu thời lượng sử dụng cho chiếc flagship này.\r\nKết luận\r\nCó thể nói, thời gian 2 tháng sử dụng là đủ để có đủ trải nghiệm và cảm nhận rõ nét về Galaxy S24 Ultra. Không chỉ là điện thoại cao cấp, Galaxy S24 Ultra còn mang đến nhiều thứ hơn thế và quan trọng hơn là tạo nên một cảm giác khác biệt cho người dùng.\r\n\r\nHiệu năng, phần cứng, camera tạo nên sự cao cấp, Galaxy AI, phần mềm cùng những tính năng khác giúp nâng tầm Galaxy S24 Ultra. Quả không hổ danh là flagship đứng đầu Android.', '2024-04-08', '2024-04-08'),
(7, 1, 'Watch 4 Pro Space Exploration', 'Huawei bất ngờ giới thiệu loạt smartwatch mới: Watch 4 Pro Space Exploration', '6613acbc403b7.jpg', 'Huawei mới đây đã giới thiệu 3 mẫu smartwatch mới trên tài khoản Weibo chính thức của họ, đó là Huawei Watch 4 Pro Space Exploration, Huawei Watch GT 4 màu Grass Green và Huawei Band 9.\r\nTrong đó, Huawei Watch 4 Pro Space Exploration gây được nhiều sự chú ý với thiết kế lấy cảm hứng từ hoạt động khám phá không gian. Một video giới thiệu về chiếc smartwatch này cũng đã được phát hành.\r\n\r\nĐồng hồ thông minh này gây ấn tượng với màn hình kính sapphire, lớp vỏ ngoài cứng cáp bằng “titan siêu cứng giống kim cương” và viền gốm vi tinh thể nano mang lại độ bền, cảm giác cao cấp. Nó cũng bao gồm một phần mềm kiểm tra sức khỏe vi mô.\r\n\r\nHuawei Watch GT 4 cũng có tùy chọn màu Grass Green mới. Đồng hồ thông minh này ra mắt vào tháng 9 năm ngoái với thời lượng pin dài (lên đến 14 ngày), theo dõi hoạt động thể dục đa dạng (hơn 100 môn thể thao) và theo dõi sức khỏe nâng cao (giấc ngủ, nhịp tim, SpO2). Nó có màn hình AMOLED đẹp mắt với mặt đồng hồ có thể tùy chỉnh, GPS chính xác và gọi Bluetooth. Thiết bị tương thích với cả Android và iOS, GT 4 chạy trên HarmonyOS 4.0.\r\nCuối cùng, Huawei Band 9 gia nhập dòng sản phẩm vòng đeo tay thông minh tập trung vào sức khỏe. Smartband này đã được công bố trên toàn cầu vào tháng trước và sự xuất hiện của nó sẽ mở rộng các dịch vụ thiết bị đeo của Huawei.', '2024-04-08', '2024-04-08'),
(8, 1, 'Redmi Turbo 3', 'Redmi Turbo 3 lộ ảnh render và thực tế với cụm camera độc, lạ', '6613ae4521b03.webp', 'Xiaomi gần đây đã giới thiệu dòng Redmi Turbo mới của mình, với Redmi Turbo 3 là model đầu tiên trong dòng sản phẩm này. Mặc dù công ty chưa chia sẻ nhiều thông tin chính thức về điện thoại nhưng danh sách Geekbench đã tiết lộ chi tiết về bộ xử lý của nó.\r\nGiờ đây, cả hình ảnh render và thực tế của Redmi Turbo 3 đã được chia sẻ trên các trang mạng. Nhờ đó mà chúng ta có được những thông tin thú vị về thiết kế sản phẩm.\r\n\r\nNhư bạn có thể thấy, mẫu điện thoại sắp tới của Xiaomi có thiết kế ấn tượng, hoàn toàn khác biệt so với các smartphone trước đây của họ. Máy có hệ thống camera kép với các ống kính được sắp xếp theo chiều dọc, đi kèm đèn flash LED và logo Redmi được bao quanh bởi vòng tròn, được thiết kế đối xứng bắt mắt. Một trong số đó được cho là camera chính 200MP có tính năng chống rung quang học (OIS).\r\n\r\nMặt sau cũng có thiết kế hai tông màu và các cạnh được bo cong để cải thiện độ bám khi cầm điện thoại thông minh. Danh sách Geekbench của Redmi Turbo 3 trước đây đã tiết lộ điện thoại sẽ được trang bị bộ vi xử lý Snapdragon 8s Gen 3 với RAM lên tới 16GB. Còn theo chứng nhận FCC thì máy sẽ hỗ trợ sạc nhanh 90W.\r\nĐiện thoại dự kiến ​​sẽ đi kèm viên pin 5,500mAh. Các thông số kỹ thuật được đồn đại khác của Turbo 3 bao gồm màn hình OLED 6.67 inch 120Hz và chạy trên giao diện người dùng HyperOS dựa trên hệ điều hành Android 14.', '2024-04-08', '2024-04-08'),
(9, 1, 'Xiaomi Redmi Pad Pro', 'Xiaomi Redmi Pad Pro lộ tất tần tật thông tin thiết kế, cấu hình và ngày ra mắt', '6613aec016645.jpeg', 'Theo các báo cáo xuất hiện thời gian qua, Xiaomi đang phát triển một chiếc máy tính bảng mới để giới thiệu với người dùng trong thời gian tới, có tên gọi là Redmi Pad Pro.\r\nHôm nay, một nguồn tin vừa tiết lộ cho chúng ta hình ảnh, thông số kỹ thuật cũng như ngày ra mắt của chiếc máy tính bảng này.\r\n\r\nNhư bạn có thể thấy ở hình ảnh trên, Redmi Pad Pro sẽ hỗ trợ các phụ kiện như bàn phím và bút cảm ứng. Mặt sau của thiết bị có hai vòng camera, trong khi các cạnh của nó dường như có bốn loa, cổng USB-C và giắc âm thanh 3.5 mm. Tablet này sẽ có các màu đen, trắng và tím nhạt.\r\nVề cấu hình, leaker nổi tiếng Digital Chat Station cho biết Redmi Pad Pro có màn hình LCD 12.1 inch cung cấp độ phân giải 2.5K và tốc độ làm mới cao. Máy tính bảng này có pin 10,000 mAh, chạy trên hệ điều hành Android 14 với giao diện người dùng HyperOS. Nguồn tin cũng tiết lộ rằng Redmi Pad Pro có chipset 4nm với số điểm AnTuTu khoảng 650,000.\r\nĐược biết, hầu hết các thiết bị POCO đã ra mắt trước đây đều là phiên bản được đổi thương hiệu hoặc tinh chỉnh của thiết bị Redmi. Các báo cáo cho thấy POCO sẽ đổi tên thương hiệu Redmi Turbo 3 thành Poco F6 trên thị trường toàn cầu. Có vẻ như Redmi Pad Pro có thể ra mắt với tư cách là máy tính bảng đầu tiên của Poco trên thị trường toàn cầu. Cùng chờ xem nhé!', '2024-04-08', '2024-04-08');

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
(16, 'Xiaomi', '', '660e429daa7a8.png'),
(17, 'Oppo', '', '660e46d5142e0.png'),
(18, 'Realme', '', '6613b035207ad.png');

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
  `ma_km` varchar(50) NOT NULL,
  `tong_tien` float NOT NULL,
  `ghi_chu` text NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(10) NOT NULL,
  `dia_chi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(51, 19, '660e470cb0901.webp'),
(52, 20, '6613af47df2d5.webp'),
(53, 20, '6613af47dfb39.webp'),
(54, 20, '6613af47e0236.webp'),
(55, 21, '6613af97b3d92.webp'),
(56, 21, '6613af97b4437.webp'),
(57, 21, '6613af97b4d98.webp'),
(58, 22, '6613aff2d9c70.webp'),
(59, 22, '6613aff2da8fb.webp'),
(60, 23, '6613b0777744f.webp'),
(61, 23, '6613b07777b5b.webp'),
(62, 23, '6613b0777827b.webp');

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
  `ngay_gui` datetime NOT NULL DEFAULT current_timestamp()
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
(10, 'client@gmail.com', '12345678', 'Client', 'default.png', 2, 'male', 'Hải Phòng', '2024-03-05', '0339735555'),
(11, 'dinhtv7@fpt.edu.vn', '12345678', 'Nguyễn Xuân Lâm', 'default.png', 2, 'male', 'Hà Nội', '2024-04-06', '0339735022');

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
(2, 'Thanh toán qua VNpay'),
(3, 'Thanh toán qua momo');

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
(13, 'iPhone XS Max 64GB Cũ đẹp', 7800000, 5000000, 5, 'Kích thước màn hình\r\n\r\n6.5 inches\r\nCông nghệ màn hình\r\n\r\nSuper Retina OLED\r\nCamera sau\r\n\r\n12 MP\r\nCamera trước\r\n\r\n7 MP\r\nChipset\r\n\r\nApple A12 Bionic 6 nhân\r\nBộ nhớ trong\r\n\r\n64 GB\r\nPin\r\n\r\nLi-ion\r\nThẻ SIM\r\n\r\nNano-SIM\r\nHệ điều hành\r\n\r\n12\r\nĐộ phân giải màn hình\r\n\r\n1242 x 2688 pixel', '2024-04-01', 9, 1),
(14, 'Samsung Galaxy Z Fold5 12GB 256GB', 38000000, 29900000, 6, 'Kích thước màn hình\r\n\r\n7.6 inches\r\nCông nghệ màn hình\r\n\r\nDynamic AMOLED 2X\r\nCamera sau\r\n\r\nCamera siêu rộng: 12MP F2.2, 123°, 1.12μm\r\nCamera góc rộng: 50MP, F1.8, Dual Pixel AF, OIS, 2.0μm\r\nCamera Tele: 10 MP, F2.4, PDAF, OIS, 1.0μm, zoom 3X, zoom kỹ thuật số 30X\r\nCamera trước\r\n\r\nCamera bên ngoài:10 MP, f/2.2\r\nCamera bên trong: 4 MP, F1.8\r\nChipset\r\n\r\nSnapdragon 8 Gen 2 for Galaxy (4nm) 8 nhân\r\nDung lượng RAM\r\n\r\n12 GB\r\nBộ nhớ trong\r\n\r\n256 GB\r\nPin\r\n\r\n4.400 mAh\r\nThẻ SIM\r\n\r\n2 SIM (nano‑SIM và eSIM)\r\nHệ điều hành\r\n\r\nAndroid 13, One UI 5.1\r\nĐộ phân giải màn hình\r\n\r\n2176 x 1812 pixels (QXGA+)\r\nTính năng màn hình\r\n\r\nMàn hình chính rộng: 7,6 inch, 21.6:18, Dynamic AMOLED 2X, 1-120Hz, Hỗ trợ S Pen\r\nMàn hình ngoài rộng: 6,2 inch, HD+ (2316 x 904), Dynamic AMOLED 2X, 23.1:9, 48-120Hz\r\nĐộ sáng tối đa: 1750 nits Mặt kính cảm ứng Chính: Ultra Thin Glass & Phụ: Corning', '2024-04-01', 10, 1),
(15, 'Xiaomi 14 (12GB 256GB)', 25000000, 20900000, 16, 'Mạnh mẽ cân mọi tác vụ, đa nhiệm cực đỉnh - Chip Snapdragon 8 Gen 3 (4nm) mượt mà đi kèm RAM 12GB\r\nTrải nghiệm hình ảnh sống động - Màn hình 6.36” vừa vặn, công nghệ LTPO OLED, tần số quét 120Hz\r\nTuyệt tác camera, chụp ảnh sắc nét - Bộ 3 camera 50MP ống kính Leica cùng chống rung OIS\r\nNăng lượng tràn đầy, thoả sức sức tạo - Dung lượng pin lớn 4610mAh, sạc nhanh 90W', '2024-04-02', 10, 1),
(16, 'Xiaomi Redmi Note 13 6GB 128GB', 4890000, 4690000, 16, 'Redmi Note 13 sở hữu những nâng cấp đáng chú ý với con chip Snapdragon 685, GPU Mali-G57 cùng 6GB RAM để có thể cải thiện tới 25% hiệu năng và 35% khả năng hiển thị đồ hoạ. Điện thoại cũng sẽ được trang bị màn hình AMOLED 120Hz để có được khả năng hiển thị cùng với đó là viên pin 5000 mAh với công suất sạc 33W.', '2024-04-04', 10, 1),
(17, 'iPhone 15 Pro Max 256GB', 34990000, 31990000, 5, 'iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc. Khả năng chụp ảnh đỉnh cao của iPhone 15 bản Pro Max đến từ camera chính 48MP, camera UltraWide 12MP và camera telephoto có khả năng zoom quang học đến 5x. Bên cạnh đó, iPhone 15 ProMax sử dụng chip A17 Pro mới mạnh mẽ. Xem thêm chi tiết những điểm nổi bật của sản phẩm qua thông tin sau!', '2024-04-04', 10, 1),
(18, 'iPhone 14 Pro Max 128GB', 32000000, 26000000, 5, 'iPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6GB đa nhiệm vượt trội. Cùng phân tích chi tiết thông số siêu phẩm này ngay sau đây.', '2024-04-04', 10, 1),
(19, 'OPPO Reno11 F 5G 8GB 256GB', 9000000, 0, 17, 'OPPO Reno11 F 5G cung cấp trải nghiệm hiển thị, xử lý siêu mượt mà với màn hình AMOLED 6.7 inch hiện đại cùng chipset MediaTek Dimensity 7050 mạnh mẽ. Hệ thống quay chụp trên thế hệ Reno11 F 5G này được cải thiện hơn thông qua cụm 3 camera với độ phân giải lần lượt là 64MP, 8MP và 2MP. Ngoài ra, cung cấp năng lượng cho thế hệ OPPO smartphone này là viên pin 5000mAh cùng sạc nhanh 67W, mang tới trải nghiệm liền mạch suốt ngày dài.', '2024-04-04', 10, 1),
(20, 'Samsung S24 Ultra ', 34000000, 0, 6, 'Samsung S24 Ultra là siêu phẩm smartphone đỉnh cao mở đầu năm 2024 đến từ nhà Samsung với chip Snapdragon 8 Gen 3 For Galaxy mạnh mẽ, công nghệ tương lai Galaxy AI cùng khung viền Titan đẳng cấp hứa hẹn sẽ mang tới nhiều sự thay đổi lớn về mặt thiết kế và cấu hình. SS Galaxy S24 bản Ultra sở hữu màn hình 6.8 inch Dynamic AMOLED 2X tần số quét 120Hz. Máy cũng sở hữu camera chính 200MP, camera zoom quang học 50MP, camera tele 10MP và camera góc siêu rộng 12MP.', '2024-04-08', 10, 1),
(21, 'Xiaomi Redmi Note 13 Pro Plus 5G 8GB 256GB', 8900000, 0, 16, 'Xiaomi Redmi Note 13 Pro được trang bị chip MediaTek Helio G99-Ultra được sản xuất theo tiến trình 6nm, dung lượng RAM 8GB, bộ nhớ trong 128GB. Điện thoại sở hữu thời gian sử dụng lâu dài nhờ viên pin 5000mAh cùng khả năng sạc nhanh 67W. Ngoài ra, máy còn được trang bị màn hình AMOLED 6.67 inch, độ phân giải 2400x1080 pixels cùng tần số quét 120Hz.', '2024-04-08', 7, 1),
(22, 'Xiaomi 13T Pro 5G (12GB - 512GB)', 11999000, 0, 16, 'Xiaomi 13T Pro là flagship mới nhất nhà Xiaomi, mạnh mẽ ấn tượng với chip MediaTek Dimensity 9200+, cùng với đó là RAM 12GB và bộ nhớ trong lên tới 512GB. Đặc biệt, khả năng chụp ảnh đỉnh cao nhờ cụm camera siêu chất, viên pin lớn 5000mAh cùng sạc nhanh 120W. Tất cả sẽ mang tới một siêu phẩm đình đám giúp bạn có được trải nghiệm độc đáo và khẳng định được cá tính của mình.', '2024-04-08', 7, 1),
(23, 'Realme 11 Pro (8GB - 256GB)', 9899000, 0, 18, 'realme 11 Pro là sản phẩm điện thoại được thiết kế màn hình OLED cùng tần số quét cao 120Hz. Ống kính cảm biến chính lên đến 100MP thu lại hình ảnh ghi lại rõ nét từng chi tiết nhỏ. Dung lượng bộ nhớ khủng 128GB giúp tăng lưu trữ hình ảnh, tài liệu, ứng dụng dễ dàng. ', '2024-04-08', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_thong_ke`
--

CREATE TABLE `tb_thong_ke` (
  `id` int(11) NOT NULL,
  `don_hang` varchar(50) NOT NULL,
  `doanh_thu` int(50) NOT NULL,
  `so_luong_ban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, 'Chờ xác nhận', 'warning'),
(4, 'Đang xử lý', 'warning'),
(5, 'Đang vận chuyển', 'warning'),
(6, 'Đã hoàn thành', 'success'),
(7, 'Hủy bỏ', 'danger');

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
-- Chỉ mục cho bảng `tb_thong_ke`
--
ALTER TABLE `tb_thong_ke`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_chi_tiet_dh`
--
ALTER TABLE `tb_chi_tiet_dh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tb_hinh_anh_sp`
--
ALTER TABLE `tb_hinh_anh_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tb_phuong_thuc_thanh_toan`
--
ALTER TABLE `tb_phuong_thuc_thanh_toan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tb_thong_ke`
--
ALTER TABLE `tb_thong_ke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
