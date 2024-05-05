-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2023 lúc 10:46 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chair`
--

CREATE TABLE `chair` (
  `id` int(11) NOT NULL,
  `ma_ghe` varchar(20) NOT NULL,
  `ma_phong` int(11) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chair`
--

INSERT INTO `chair` (`id`, `ma_ghe`, `ma_phong`, `trang_thai`) VALUES
(1, 'A1', 9, 'trống'),
(2, 'A2', 9, 'trống'),
(3, 'A3', 9, 'trống'),
(4, 'A4', 9, 'trống'),
(5, 'A5', 9, 'trống'),
(6, 'A6', 9, 'trống'),
(7, 'A7', 9, 'trống'),
(8, 'A8', 9, 'trống'),
(9, 'B1', 9, 'trống'),
(10, 'B2', 9, 'trống'),
(11, 'B3', 9, 'đã đặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `tilte` varchar(100) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `max_old` int(11) NOT NULL,
  `show_time` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `new` varchar(10) NOT NULL,
  `trangthai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movie`
--

INSERT INTO `movie` (`id`, `name`, `image`, `trailer`, `tilte`, `bg`, `logo`, `description`, `year`, `max_old`, `show_time`, `category`, `new`, `trangthai`) VALUES
(1, 'Biệt Đội Marvels', 'avata_04.webp', 'trailer-04.mp4', 'bg-01', 'bg-04.webp', 'logo01.png', 'Nữ Oa là vị thần sinh ra loài người. Con cháu bà sống trong cõi thế gian bình yên vô sự thì bỗng một hôm Thủy Thần, Cung Công và Hỏa Thần, Chúc Dung gây sự đánh nhau rất dữ dội. ', 2015, 18, '14h 40min', 'Lãnh Mạn', 'new', 'sắp chiếu'),
(2, 'Người Vợ Cuối Cùng', 'avata_02.webp', 'trailer-02.mp4', 'bg-02', 'bg-02.webp', 'logo02.png', 'Hậu quả khiến cây cột chống Trời gẫy gập xuống, một góc trời bị sụt lở gây ra tai họa khủng khiếp cho loài người. Nữ Oa đau lòng khi thấy con cháu sống trong cảnh tối tăm khổ ải đã không quản khó khăn, vất vả, ngày đêm một mình hì hục khuôn đất, đội đá ở ', 2004, 11, '20h 10min', 'Kinh Dị', 'new', 'sắp chiếu'),
(3, 'Những Kỷ Nguyên Của Taylor Swift ', 'avata_03.webp', 'trailer-03.mp4', 'bg-03', 'bg-03.webp', 'logo03.png', 'Bà chọn đá ngũ sắc, chất lên thành núi, đốt lửa luyện đá thành keo rồi lần lượt vá hết các vết thủng trên vòm trời.', 2023, 15, '9h 30min', 'Viễn Tưởng', 'new', 'sắp chiếu'),
(4, 'Đất Rừng Phương Nam', 'avata_01.webp', 'trailer-01.mp4', 'bg-04', 'bg-01.jpg', 'logo04.png', 'Từ đó, con người sống dưới vòm trời trong xanh, điểm mây ngũ sắc, không còn lo trời sập, không sợ nước lũ và các loài ác thú, chăm lo làm ăn, bốn mùa no đủ, vui tươi.', 2011, 17, '12h 00min', 'Hài', 'new', 'sắp chiếu'),
(5, 'Quỷ Môn Quan: Gọi Hồn', 'avata-05.webp', 'trailer-05.mp4\r\n', 'bg-05', 'bg-05.webp', 'logo-05.jpg', 'hay', 2012, 15, '1h 20min', 'Hài Hước', 'no-new', 'đang chiếu'),
(6, 'Năm Đêm Kinh Hoàng', 'avata-06.webp', 'trailer-06.mp4', 'bg-06', 'bg-06.webp', 'logo-06.jpg', 'hay', 2021, 16, '54min', 'Kinh Dị', 'no-new', 'đang chiếu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `suc_chua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id`, `suc_chua`) VALUES
(9, 25),
(10, 30);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chair`
--
ALTER TABLE `chair`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chair_movie` (`ma_phong`);

--
-- Chỉ mục cho bảng `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chair`
--
ALTER TABLE `chair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chair`
--
ALTER TABLE `chair`
  ADD CONSTRAINT `fk_chair_movie` FOREIGN KEY (`ma_phong`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
