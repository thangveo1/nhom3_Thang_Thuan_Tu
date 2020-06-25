-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2020 lúc 05:21 PM
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
(20, 'Nguyễn Hữu Thắng', '09123456789', 'BMT', '254323325', '2000-12-04', 0, '2020-06-25', '2020-07-10', 'nhớ ăn uống đầy đủ'),
(21, 'Nguyễn Quang Vinh', '0976312461', 'Đà Lạt', '236523541', '1999-05-01', 0, '2020-06-25', '2020-07-12', 'ngủ nghỉ đúng giờ giấc'),
(22, 'Trần Thị Thoa', '0876312200', 'Đắk Nông', '254263251', '1963-12-25', 1, '2020-06-25', '2020-08-12', 'ăn uống đầy đủ, nhớ ngủ đúng giờ, điều độ'),
(23, 'Đào Văn Công', '0123456789', 'Đắk Lắk', '258935789', '1995-03-15', 0, '2020-06-25', '2020-07-15', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `uu_dai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id`, `name`, `uu_dai`) VALUES
(1, 'Nội khoa', 10),
(2, 'Ngoại khoa', 20),
(3, 'Da liễu', 10),
(4, 'Răng hàm mặt', 20),
(5, 'Sản phụ khoa', 20),
(6, 'Tai mũi họng', 15),
(7, 'Bác sĩ gia đình', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu_con`
--

CREATE TABLE `dichvu_con` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `id_dichvu` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu_con`
--

INSERT INTO `dichvu_con` (`id`, `name`, `id_dichvu`, `gia`) VALUES
(1, 'Tim', 1, 150000),
(2, 'Phổi', 1, 100000),
(3, 'Thận', 1, 150000),
(4, 'Tuỵ', 1, 100000),
(5, 'Ruột già', 1, 130000),
(6, 'Gan', 1, 100000),
(7, 'Gãy chân', 2, 195000),
(8, 'Bỏng', 2, 325000),
(9, 'Mổ', 2, 120000),
(10, 'Bỏng', 2, 130000),
(11, 'Gãy tay', 2, 110000),
(12, 'Hắc lào', 3, 100000),
(13, 'Lang ben', 3, 115000),
(14, 'Chỉnh hàm', 4, 1000000),
(15, 'Tẩy vôi răng', 4, 200000),
(16, 'Siêu âm 3D', 5, 250000),
(17, 'Siêu âm 4D', 5, 300000),
(18, 'Xoang', 6, 350000),
(19, 'Viêm họng', 6, 230000),
(20, 'Xoang', 6, 500000),
(21, 'Viêm họng', 6, 350000),
(22, 'Khám bệnh tại nhà', 7, 1500000),
(23, 'Chăm sóc người già', 7, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc_chitiet`
--

CREATE TABLE `donthuoc_chitiet` (
  `id` int(11) NOT NULL,
  `id_donthuoc` int(11) NOT NULL,
  `id_thuoc` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donthuoc_chitiet`
--

INSERT INTO `donthuoc_chitiet` (`id`, `id_donthuoc`, `id_thuoc`, `soluong`, `gia`) VALUES
(132, 53, 1, 2, 50000),
(133, 53, 2, 5, 40000),
(134, 53, 3, 3, 70000),
(135, 53, 4, 4, 10000),
(136, 53, 1, 2, 50000),
(137, 54, 1, 8, 50000),
(138, 54, 3, 5, 70000),
(139, 54, 4, 3, 10000),
(140, 54, 2, 4, 40000),
(141, 55, 1, 2, 50000),
(142, 55, 2, 1, 40000),
(143, 55, 3, 3, 70000),
(144, 55, 4, 1, 10000),
(145, 55, 4, 1, 10000),
(146, 55, 4, 1, 10000),
(147, 55, 4, 1, 10000),
(148, 55, 3, 3, 70000),
(149, 55, 2, 1, 40000),
(150, 55, 1, 2, 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc_tong`
--

CREATE TABLE `donthuoc_tong` (
  `id` int(11) NOT NULL,
  `id_benhnhan` int(11) NOT NULL,
  `id_nhanvien` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ghichu` text COLLATE utf8_vietnamese_ci NOT NULL,
  `ngay_kham` datetime NOT NULL,
  `tai_kham` int(11) NOT NULL,
  `id_dichvu` int(11) NOT NULL,
  `tientruoc_uudai` int(11) NOT NULL,
  `tiensau_uudai` int(11) NOT NULL,
  `uudai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donthuoc_tong`
--

INSERT INTO `donthuoc_tong` (`id`, `id_benhnhan`, `id_nhanvien`, `name`, `ghichu`, `ngay_kham`, `tai_kham`, `id_dichvu`, `tientruoc_uudai`, `tiensau_uudai`, `uudai`) VALUES
(53, 20, 1, 'Cảm', 'nhớ ăn uống đầy đủ', '2020-06-25 21:59:29', 1, 7, 650000, 585000, 10),
(54, 21, 1, 'Sốt', 'ngủ nghỉ đúng giờ', '2020-06-25 22:10:23', 1, 6, 940000, 799000, 15),
(55, 22, 1, 'Đau bụng', '', '2020-06-25 22:20:16', 1, 1, 740000, 703000, 5);

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
  `soluong` int(11) NOT NULL,
  `donvitinh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `gianhap` int(11) NOT NULL,
  `giaban` int(11) NOT NULL,
  `tacdung` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thuoc`
--

INSERT INTO `thuoc` (`id`, `name`, `soluong`, `donvitinh`, `gianhap`, `giaban`, `tacdung`) VALUES
(1, 'Paracetamol', 10, 'Hộp', 40000, 50000, 'Hạ sốt'),
(2, 'Panadol Extra', 20, 'Hộp', 20000, 40000, 'Hạ sốt'),
(3, 'Eszopiclone', 30, 'Hộp', 50000, 70000, 'An thần'),
(4, 'Amlodipine', 60, 'Vỉ', 4000, 10000, 'Chẹn kênh canxi');

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
-- Chỉ mục cho bảng `donthuoc_chitiet`
--
ALTER TABLE `donthuoc_chitiet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donthuoc_tong`
--
ALTER TABLE `donthuoc_tong`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dichvu_con`
--
ALTER TABLE `dichvu_con`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `donthuoc_chitiet`
--
ALTER TABLE `donthuoc_chitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT cho bảng `donthuoc_tong`
--
ALTER TABLE `donthuoc_tong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
