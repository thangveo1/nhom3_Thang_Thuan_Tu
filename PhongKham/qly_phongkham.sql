-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2020 lúc 10:39 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qly_phongkham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhnhan`
--

CREATE TABLE `benhnhan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `cmnd` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` int(2) NOT NULL,
  `ngay_kham` date NOT NULL,
  `ngay_taikham` date NOT NULL,
  `ghi_chu` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `benhnhan`
--

INSERT INTO `benhnhan` (`id`, `name`, `phone`, `diachi`, `cmnd`, `ngay_sinh`, `gioi_tinh`, `ngay_kham`, `ngay_taikham`, `ghi_chu`) VALUES
(1, 'Tèo', '0123456789', '123 Lê Duẩn, BMT', '245255532', '0000-00-00', 0, '0000-00-00', '0000-00-00', ''),
(2, 'Tý', '0912378945', '235 Lê Duẩn, BMT', '254220230', '0000-00-00', 0, '0000-00-00', '0000-00-00', ''),
(3, 'Thắng', '012345678', 'BMT', '89456132845623', '2020-05-20', 0, '0000-00-00', '0000-00-00', ''),
(4, 'Nguyễn Hữu Thắng', '0123456789', 'BMT', '9874856', '2020-05-08', 0, '0000-00-00', '2020-05-24', ''),
(5, 'Nguyễn Hữu Thắng', '012565265', 'BMT', '9461345', '2020-05-20', 0, '0000-00-00', '2020-05-24', 'nhớ ăn uống'),
(6, 'hoof vieest hosng', '0359461686', 'EAHLEO', '241621821', '2020-05-07', 0, '2020-05-20', '2020-05-15', 'nhớ ăn uống đầy đủ'),
(7, '', '', '', '', '0000-00-00', 0, '0000-00-00', '0000-00-00', ''),
(8, 'Nguyễn Hưu Thắng', '0123456789', 'qwert56', '1515', '2020-05-13', 0, '0000-00-00', '2020-05-22', 'nhớ ăn uống đầy đủ'),
(9, 'Nguyễn Hưu Thắng', '0123456789', 'qwert56', '1515', '2020-05-13', 0, '0000-00-00', '2020-05-22', 'nhớ ăn uống đầy đủ'),
(10, 'Nguyễn Hưu Thắng', '0123456789', 'qwert56', '1515', '2020-05-13', 0, '0000-00-00', '2020-05-22', 'nhớ ăn uống đầy đủ'),
(11, 'Nguyễn Hưu Thắng', '0123456789', 'qwert56', '1515', '2020-05-13', 0, '2020-05-24', '2020-05-22', 'nhớ ăn uống đầy đủ'),
(12, 'tý', '541984', 'BMT', '685526523', '2020-05-04', 0, '2020-05-24', '2020-05-20', 'nhớ ăn uống đầy đủ'),
(13, 'Vinh', '0976123456', 'BMT', '8495623856', '2000-03-21', 0, '2020-05-24', '2020-05-31', 'nhớ ăn uống đầy đủ'),
(14, 'Nguyễn Hưu Thắng', '0123456789', 'hyuisd', '95623', '2001-12-02', 0, '2020-05-24', '2020-05-29', 'ưesrdfgh'),
(15, 'Nguyễn Hữu Thắng', '0123456789', 'ghv6', '94613', '2230-08-05', 0, '2020-05-24', '2020-05-27', 'sezxrdctfgh'),
(16, 'yèubnjsk', '67841563', 'ctrffvgh', '95862', '2000-02-05', 1, '2020-05-24', '2020-05-20', 'cfghbjnk'),
(17, 'xdcfgvhj', '98562', 'fvghjk856', '45678', '8456-09-07', 1, '2020-05-24', '2020-05-30', 'dxfghj'),
(18, 'xdcfgvhj', '98562', 'fvghjk856', '45678', '8456-09-07', 1, '2020-05-24', '2020-05-30', 'dxfghj');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id`, `name`) VALUES
(1, 'Khám bệnh'),
(2, 'Thủ thuật'),
(3, 'Thuốc'),
(4, 'kính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu_con`
--

CREATE TABLE `dichvu_con` (
  `id` int(11) NOT NULL,
  `id_dichvu` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` text COLLATE utf8_vietnamese_ci NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pass` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `name`, `phone`, `email`, `diachi`, `level`, `status`, `pass`) VALUES
(1, 'admin', '0912345678', 'admin@email.com', '567 Lê Duẩn, BMT', 1, 1, 'abc123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc`
--

CREATE TABLE `thuoc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngay_sx` date NOT NULL,
  `han_sd` date NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia_nhapkho` int(255) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `donvi_tinh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thuoc`
--

INSERT INTO `thuoc` (`id`, `name`, `ngay_sx`, `han_sd`, `soluong`, `gia_nhapkho`, `gia_ban`, `donvi_tinh`) VALUES
(1, 'Panadol Extra', '2020-05-01', '2021-11-19', 100, 100000, 120000, 'Hộp'),
(2, 'Paracetamol', '2020-05-02', '2022-02-24', 100, 90000, 150000, 'Hộp');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dichvu_con`
--
ALTER TABLE `dichvu_con`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dichvu_con`
--
ALTER TABLE `dichvu_con`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
