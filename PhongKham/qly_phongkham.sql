-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2020 lúc 04:37 AM
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
(3, 'Tim', 1, 150000),
(4, 'Phổi', 1, 100000),
(5, 'Ruột già', 1, 130000),
(6, 'Gan', 1, 100000),
(7, 'Gãy chân', 2, 195000),
(8, 'Bỏng', 2, 325000),
(9, 'Gãy chân', 2, 120000),
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
(85, 38, 1, 5, 50000),
(86, 38, 2, 4, 40000),
(87, 38, 3, 1, 70000),
(88, 39, 1, 5, 50000),
(89, 39, 2, 4, 40000),
(90, 39, 3, 1, 70000),
(91, 40, 1, 5, 50000),
(92, 40, 2, 4, 40000),
(93, 40, 3, 1, 70000),
(94, 41, 1, 5, 50000),
(95, 41, 2, 4, 40000),
(96, 41, 3, 1, 70000),
(97, 42, 1, 5, 50000),
(98, 42, 2, 4, 40000),
(99, 42, 3, 1, 70000),
(100, 43, 1, 5, 50000),
(101, 43, 2, 4, 40000),
(102, 43, 3, 1, 70000),
(103, 44, 1, 5, 50000),
(104, 44, 2, 4, 40000),
(105, 44, 3, 1, 70000);

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
(38, 15, 1, 'Cảm', 'nhớ ăn uống', '2020-06-17 09:35:56', 1, 3, 480000, 422400, 12),
(39, 15, 1, 'Cảm', 'nhớ ăn uống', '2020-06-17 09:36:16', 1, 3, 480000, 422400, 12),
(40, 15, 1, 'Cảm', 'nhớ ăn uống', '2020-06-17 09:36:18', 1, 3, 480000, 422400, 12),
(41, 15, 1, 'Cảm', 'nhớ ăn uống', '2020-06-17 09:36:21', 1, 3, 480000, 422400, 12),
(42, 15, 1, 'Cảm', 'nhớ ăn uống', '2020-06-17 09:36:26', 1, 3, 480000, 422400, 12),
(43, 15, 1, 'Cảm', 'nhớ ăn uống', '2020-06-17 09:36:28', 1, 3, 480000, 422400, 12),
(44, 15, 1, 'Cảm', 'nhớ ăn uống', '2020-06-17 09:36:30', 1, 3, 480000, 422400, 12);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `donthuoc_tong`
--
ALTER TABLE `donthuoc_tong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
