<?php
class SinhVien extends Controller
{
    public function SayHi()
    {
        $daoKhoaHoc = $this->model("DaoKhoaHoc");
        $arrKhoaHoc = $daoKhoaHoc->layKhoaHoc();
        $this->view("LayoutQuanTri", ["page" => "XemKhoaHocSV", "css" => "XemKhoaHocSV", "arrKhoaHoc" => $arrKhoaHoc]);
    }

    public function LayKhoaSV($makhoahoc)
    {
        $daoKhoa = $this->model("DaoKhoa");
        $arrKhoa = $daoKhoa->layKhoa();
        $this->view("LayoutQuanTri", ["page" => "XemKhoaSV", "css" => "XemKhoaSV", "arrKhoa" => $arrKhoa, "makhoahoc" => $makhoahoc]);
    }

    public function LayLop($makhoahoc, $makhoa)
    {
        $daoLop = $this->model("DaoLop");
        $arrLop = $daoLop->layLopTheoKhoaVaKhoaHoc($makhoahoc, $makhoa);
        $this->view("LayoutQuanTri", ["page" => "XemLopSV", "css" => "XemLopSV", "arrLop" => $arrLop]);
    }
    public function LayDanhSachSinhVien($malop)
    {
        $daoSinhVien = $this->model("DaoSinhVien");
        $arrSinhVien=$daoSinhVien->layDanhSachSinhVienTheoLop($malop);
        $this->view("LayoutQuanTri", ["page" => "XemDanhSachSV", "css" => "XemDanhSachSV", "arrSinhVien" => $arrSinhVien]);
    }
}
