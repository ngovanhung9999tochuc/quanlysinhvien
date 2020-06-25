-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2020 lúc 09:47 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlysinhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `matochuday` varchar(20) NOT NULL,
  `masv` varchar(20) NOT NULL,
  `xacnhanhoc` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `matochuday` varchar(20) NOT NULL,
  `masv` varchar(20) NOT NULL,
  `diemchuyencan` float DEFAULT NULL,
  `diemgiuaky` float DEFAULT NULL,
  `diemcuoiky` float DEFAULT NULL,
  `diemtongket` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` varchar(20) NOT NULL,
  `tengv` varchar(100) DEFAULT NULL,
  `gioitinh` bit(1) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `quequan` varchar(100) DEFAULT NULL,
  `hocvi` varchar(100) DEFAULT NULL,
  `makhoa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `tengv`, `gioitinh`, `ngaysinh`, `quequan`, `hocvi`, `makhoa`) VALUES
('2', 'phan an', b'0', '2020-06-02', 'quảng nam', 'tiến sĩ', 'mk001'),
('gv001', 'Trần Linh', b'0', '2017-11-03', 'Đà Nẵng', 'Đại Học', 'mk001'),
('gv002', 'Tràn Anh', b'1', '2017-06-02', 'Đà Nẵng', 'Tiến Sĩ', 'mk002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(20) NOT NULL,
  `tenkhoa` varchar(100) DEFAULT NULL,
  `namthanhlap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`, `namthanhlap`) VALUES
('mk001', 'khoa công nghệ thông tin', 2000),
('mk002', 'khoa công nghệ ô tô', 2001),
('mk003', 'khoa cơ khí', 2000),
('mk004', 'khoa tự động hóa', 2001),
('mk005', 'khoa du lịch', 2000),
('mk006', 'khoa may thời trang', 2001),
('mk007', 'khoa kinh tế', 2000),
('mk008', 'khoa ngoại ngữ', 2001);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `makhoahoc` varchar(20) NOT NULL,
  `tenkhoahoc` varchar(50) DEFAULT NULL,
  `nambatdau` int(11) DEFAULT NULL,
  `namketthuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`makhoahoc`, `tenkhoahoc`, `nambatdau`, `namketthuc`) VALUES
('2010', 'khóa 2010', 2010, 2013),
('2011', 'khóa 2011', 2011, 2014),
('2012', 'khóa 2012', 2012, 2015),
('2013', 'khóa 2013', 2013, 2016),
('2014', 'khóa 2014', 2014, 2017),
('2015', 'khóa 2015', 2015, 2018),
('2016', 'khóa 2016', 2016, 2019),
('2017', 'khóa 2017', 2017, 2020),
('2018', 'khóa 2018', 2018, 2021),
('2019', 'khóa 2019', 2019, 2022),
('2020', 'khóa 2020', 2020, 2023);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(20) NOT NULL,
  `tenlop` varchar(100) DEFAULT NULL,
  `makhoa` varchar(20) DEFAULT NULL,
  `manganh` varchar(20) NOT NULL,
  `makhoahoc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `makhoa`, `manganh`, `makhoahoc`) VALUES
('10CNTT1A', '10CNTT1A', 'mk001', 'mn002', '2010'),
('10CNTT1B', '10CNTT1B', 'mk001', 'mn002', '2010');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loptinchi`
--

CREATE TABLE `loptinchi` (
  `maltc` varchar(20) NOT NULL,
  `magv` varchar(20) DEFAULT NULL,
  `mamon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `mamon` varchar(20) NOT NULL,
  `tenmon` varchar(100) DEFAULT NULL,
  `sotinchi` int(11) DEFAULT NULL,
  `sotiet` int(11) DEFAULT NULL,
  `makhoa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`mamon`, `tenmon`, `sotinchi`, `sotiet`, `makhoa`) VALUES
('mm001', 'Quản Lý Web', 2, 60, 'mk001'),
('mm002', 'Lắp Ráp ô tô', 3, 90, 'mk002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `manganh` varchar(20) NOT NULL,
  `tennganh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`manganh`, `tennganh`) VALUES
('mn001', 'quản trị mạng máy tính'),
('mn002', 'công nghệ thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phonghoc`
--

CREATE TABLE `phonghoc` (
  `maphonghoc` varchar(20) NOT NULL,
  `tenphonghoc` varchar(50) DEFAULT NULL,
  `makhoa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(20) NOT NULL,
  `tensv` varchar(100) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` bit(1) DEFAULT NULL,
  `quequan` varchar(100) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `malop` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `tensv`, `ngaysinh`, `gioitinh`, `quequan`, `sdt`, `malop`) VALUES
('SV001', 'nguyễn văn an', '1990-01-11', b'1', 'quảng nam', '0987876787', '10CNTT1A'),
('SV002', 'nguyễn văn thành', '2000-02-21', b'0', 'quảng nam', '0987898787', '10CNTT1A'),
('SV39871025', 'ngô văn hùng', '2020-06-02', b'1', 'đà nẵng', '0987878890', '10CNTT1B'),
('SV45793180', 'ngô văn hùng', '2020-06-04', b'1', 'đà nẵng', '0987878897', '10CNTT1A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tochuday`
--

CREATE TABLE `tochuday` (
  `matochuday` varchar(20) NOT NULL,
  `maltc` varchar(20) DEFAULT NULL,
  `soluongsv` int(11) NOT NULL,
  `maphonghoc` varchar(20) DEFAULT NULL,
  `ngaybatdau` date DEFAULT NULL,
  `ngayketthuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usergiangvien`
--

CREATE TABLE `usergiangvien` (
  `tentaikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `magv` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `usergiangvien`
--

INSERT INTO `usergiangvien` (`tentaikhoan`, `matkhau`, `magv`) VALUES
('2', '2', '2'),
('trananh', '1234', 'gv002'),
('tranlinh', '1234', 'gv001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userquanly`
--

CREATE TABLE `userquanly` (
  `tentaikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `magv` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `userquanly`
--

INSERT INTO `userquanly` (`tentaikhoan`, `matkhau`, `magv`) VALUES
('2', '2', '2'),
('trananhql', '1234', 'gv002'),
('tranlinhql', '1234', 'gv001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usersinhvien`
--

CREATE TABLE `usersinhvien` (
  `tentaikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `masv` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `usersinhvien`
--

INSERT INTO `usersinhvien` (`tentaikhoan`, `matkhau`, `masv`) VALUES
('vanan', '123', 'SV001'),
('vanthanh', '123', 'SV002');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`matochuday`,`masv`),
  ADD KEY `FK_masv_dangky` (`masv`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`matochuday`,`masv`),
  ADD KEY `FK_masv_diem` (`masv`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`),
  ADD KEY `FK_makhoa_giangvien` (`makhoa`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`makhoahoc`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `FK_makhoa_lop` (`makhoa`),
  ADD KEY `FK_manganh_lop` (`manganh`),
  ADD KEY `FK_makhoahoc_lop` (`makhoahoc`);

--
-- Chỉ mục cho bảng `loptinchi`
--
ALTER TABLE `loptinchi`
  ADD PRIMARY KEY (`maltc`),
  ADD KEY `FK_magv_loptinchi` (`magv`),
  ADD KEY `FK_mamon_loptinchi` (`mamon`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`mamon`),
  ADD KEY `FK_makhoa_mon` (`makhoa`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`manganh`);

--
-- Chỉ mục cho bảng `phonghoc`
--
ALTER TABLE `phonghoc`
  ADD PRIMARY KEY (`maphonghoc`),
  ADD KEY `FK_makhoa_phonghoc` (`makhoa`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `FK_malop_sinhvien` (`malop`);

--
-- Chỉ mục cho bảng `tochuday`
--
ALTER TABLE `tochuday`
  ADD PRIMARY KEY (`matochuday`),
  ADD KEY `FK_maltc_tochuday` (`maltc`),
  ADD KEY `FK_maphonghoc_tochuday` (`maphonghoc`);

--
-- Chỉ mục cho bảng `usergiangvien`
--
ALTER TABLE `usergiangvien`
  ADD PRIMARY KEY (`tentaikhoan`),
  ADD KEY `FK_magv_usergiangvien` (`magv`);

--
-- Chỉ mục cho bảng `userquanly`
--
ALTER TABLE `userquanly`
  ADD PRIMARY KEY (`tentaikhoan`),
  ADD KEY `FK_magv_userquanly` (`magv`);

--
-- Chỉ mục cho bảng `usersinhvien`
--
ALTER TABLE `usersinhvien`
  ADD PRIMARY KEY (`tentaikhoan`),
  ADD KEY `FK_masv_usersinhvien` (`masv`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD CONSTRAINT `FK_masv_dangky` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`),
  ADD CONSTRAINT `FK_matochuday_dangky` FOREIGN KEY (`matochuday`) REFERENCES `tochuday` (`matochuday`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `FK_masv_diem` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`),
  ADD CONSTRAINT `FK_matochuday_diem` FOREIGN KEY (`matochuday`) REFERENCES `tochuday` (`matochuday`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `FK_makhoa_giangvien` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_makhoa_lop` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`),
  ADD CONSTRAINT `FK_makhoahoc_lop` FOREIGN KEY (`makhoahoc`) REFERENCES `khoahoc` (`makhoahoc`),
  ADD CONSTRAINT `FK_manganh_lop` FOREIGN KEY (`manganh`) REFERENCES `nganh` (`manganh`);

--
-- Các ràng buộc cho bảng `loptinchi`
--
ALTER TABLE `loptinchi`
  ADD CONSTRAINT `FK_magv_loptinchi` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`),
  ADD CONSTRAINT `FK_mamon_loptinchi` FOREIGN KEY (`mamon`) REFERENCES `mon` (`mamon`);

--
-- Các ràng buộc cho bảng `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `FK_makhoa_mon` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `phonghoc`
--
ALTER TABLE `phonghoc`
  ADD CONSTRAINT `FK_makhoa_phonghoc` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `FK_malop_sinhvien` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`);

--
-- Các ràng buộc cho bảng `tochuday`
--
ALTER TABLE `tochuday`
  ADD CONSTRAINT `FK_maltc_tochuday` FOREIGN KEY (`maltc`) REFERENCES `loptinchi` (`maltc`),
  ADD CONSTRAINT `FK_maphonghoc_tochuday` FOREIGN KEY (`maphonghoc`) REFERENCES `phonghoc` (`maphonghoc`);

--
-- Các ràng buộc cho bảng `usergiangvien`
--
ALTER TABLE `usergiangvien`
  ADD CONSTRAINT `FK_magv_usergiangvien` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`);

--
-- Các ràng buộc cho bảng `userquanly`
--
ALTER TABLE `userquanly`
  ADD CONSTRAINT `FK_magv_userquanly` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`);

--
-- Các ràng buộc cho bảng `usersinhvien`
--
ALTER TABLE `usersinhvien`
  ADD CONSTRAINT `FK_masv_usersinhvien` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
