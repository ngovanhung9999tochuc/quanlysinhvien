<?php
class XemSinhVien extends Controller
{
    public function SayHi()
    {
        $daoKhoaHoc = $this->model("DaoKhoaHoc");
        $arrKhoaHoc = $daoKhoaHoc->layKhoaHoc();
        $this->view("LayoutGiangVien", ["page" => "XemKhoaHocSVOnly", "css" => "XemKhoaHocSV", "arrKhoaHoc" => $arrKhoaHoc]);
    }

    public function LayKhoaSV($makhoahoc)
    {
        $daoKhoa = $this->model("DaoKhoa");
        $arrKhoa = $daoKhoa->layKhoa();
        $this->view("LayoutGiangVien", ["page" => "XemKhoaSVOnly", "css" => "XemKhoaSV", "arrKhoa" => $arrKhoa, "makhoahoc" => $makhoahoc]);
    }
    public function LayLop($makhoahoc, $makhoa)
    {
        $daoLop = $this->model("DaoLop");
        $arrLop = $daoLop->layLopTheoKhoaVaKhoaHoc($makhoahoc, $makhoa);
        $this->view("LayoutGiangVien", ["page" => "XemLopSVOnly", "css" => "XemLopSV", "arrLop" => $arrLop]);
    }
    
    public function LayDanhSachSinhVien($malop)
    {
        $daoSinhVien = $this->model("DaoSinhVien");
        $arrSinhVien = $daoSinhVien->layDanhSachSinhVienTheoLop($malop);
        $this->view("LayoutGiangVien", ["page" => "XemDanhSachSVOnly", "css" => "XemDanhSachSV", "arrSinhVien" => $arrSinhVien]);
    }
}