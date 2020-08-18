-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 17, 2020 lúc 06:31 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ci_ktx`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieude` int(11) DEFAULT NULL,
  `noidung` int(11) DEFAULT NULL,
  `anhbaiviet` int(11) DEFAULT NULL,
  `id_canbo` int(11) DEFAULT NULL,
  `nguoitao` varchar(255) DEFAULT NULL,
  `luotxem` int(11) DEFAULT NULL,
  `ngaytaobaiviet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gioitinh` int(11) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `noisinh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dantoc` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tongiao` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `chungminhthu` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dienthoai` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ngaycapcmt` date DEFAULT NULL,
  `noicap` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `quoctich` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `chucvu` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phanquyen` int(11) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`id`, `hoten`, `email`, `matkhau`, `gioitinh`, `ngaysinh`, `noisinh`, `dantoc`, `tongiao`, `chungminhthu`, `dienthoai`, `ngaycapcmt`, `noicap`, `quoctich`, `anh`, `chucvu`, `phanquyen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'S', 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `mahoadon` varchar(20) DEFAULT NULL,
  `id_khuphong` int(11) DEFAULT NULL,
  `id_sinhvien` int(11) DEFAULT NULL,
  `id_sotien` int(11) DEFAULT NULL,
  `sotiendong` int(20) DEFAULT NULL,
  `ngaytaohoadon` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuphong`
--

CREATE TABLE `khuphong` (
  `id` int(11) NOT NULL,
  `toanha` varchar(50) DEFAULT NULL,
  `tang` int(11) DEFAULT NULL,
  `phong` varchar(50) DEFAULT NULL,
  `ngaytaokhuphong` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `id` int(11) NOT NULL,
  `id_khuphong` int(11) DEFAULT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `masinhvien` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `truong` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `khoa` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gioitinh` int(11) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `dantoc` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tongiao` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sochungminhthu` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `anhchungminhthu` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dienthoai` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `quoctich` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL COMMENT '1.đang ở; 2.đang xin ; 3. đã rời',
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ngaytaosinhvien` timestamp NULL DEFAULT NULL,
  `ngayduyetsinhvien` timestamp NULL DEFAULT NULL,
  `id_canbo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sotien`
--

CREATE TABLE `sotien` (
  `id` int(11) NOT NULL,
  `loaitien` varchar(250) DEFAULT NULL,
  `tien` int(20) DEFAULT NULL,
  `idcanbo` int(11) DEFAULT NULL,
  `ngaytaosotien` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthaiphong`
--

CREATE TABLE `trangthaiphong` (
  `id` int(11) NOT NULL,
  `id_khuphong` int(11) DEFAULT NULL,
  `thietbi` varchar(250) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `trangthai` varchar(255) DEFAULT NULL,
  `ngaytaotrangthaiphong` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trangthaiphong`
--

INSERT INTO `trangthaiphong` (`id`, `id_khuphong`, `thietbi`, `soluong`, `trangthai`, `ngaytaotrangthaiphong`) VALUES
(1, NULL, 'giuong', 6, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_canbo` (`id_canbo`);

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `canbo_email_unique` (`email`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khuphong` (`id_khuphong`),
  ADD KEY `id_sotien` (`id_sotien`),
  ADD KEY `id_sinhvien` (`id_sinhvien`);

--
-- Chỉ mục cho bảng `khuphong`
--
ALTER TABLE `khuphong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sochungminhthu` (`sochungminhthu`),
  ADD UNIQUE KEY `sinhvien_masinhvien_unique` (`masinhvien`),
  ADD KEY `id_khuphong` (`id_khuphong`),
  ADD KEY `id_canbo` (`id_canbo`);

--
-- Chỉ mục cho bảng `sotien`
--
ALTER TABLE `sotien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthaiphong`
--
ALTER TABLE `trangthaiphong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khuphong` (`id_khuphong`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `canbo`
--
ALTER TABLE `canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuphong`
--
ALTER TABLE `khuphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sotien`
--
ALTER TABLE `sotien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trangthaiphong`
--
ALTER TABLE `trangthaiphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`id_canbo`) REFERENCES `canbo` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_khuphong`) REFERENCES `khuphong` (`id`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`id_sotien`) REFERENCES `sotien` (`id`),
  ADD CONSTRAINT `hoadon_ibfk_3` FOREIGN KEY (`id_sinhvien`) REFERENCES `sinhvien` (`id`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`id_khuphong`) REFERENCES `khuphong` (`id`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`id_canbo`) REFERENCES `canbo` (`id`);

--
-- Các ràng buộc cho bảng `trangthaiphong`
--
ALTER TABLE `trangthaiphong`
  ADD CONSTRAINT `trangthaiphong_ibfk_1` FOREIGN KEY (`id_khuphong`) REFERENCES `khuphong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
