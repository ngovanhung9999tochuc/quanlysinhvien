<?php
class Diem extends Controller
{
    public function SayHi()
    {
        $daoKhoa = $this->model("DaoKhoa");
        $arrKhoa = $daoKhoa->layKhoa();
        $this->view("LayoutQuanTri", ["page" => "DiemXemKhoa", "css" => "GVXemKhoa", "arrKhoa" => $arrKhoa]);
    }

    public function LayLop($makhoa)
    {
        $daoLop = $this->model("DaoLop");
        $arrLop = $daoLop->layLopTheoKhoa($makhoa);
        $this->view("LayoutQuanTri", ["page" => "DiemXemLop", "css" => "XemLopSV", "arrLop" => $arrLop]);
    }

    public function LayDanhSachSinhVien($malop)
    {
        $daoSinhVien = $this->model("DaoSinhVien");
        $arrSinhVien = $daoSinhVien->layDanhSachSinhVienTheoLop($malop);
        $this->view("LayoutQuanTri", ["page" => "DiemDanhSachSinhVien", "css" => "XemDanhSachSV", "arrSinhVien" => $arrSinhVien]);
    }
    public function XemDiem($masv)
    {
        $daoDiem = $this->model("DaoDiem");
        $arrDiem= $daoDiem->layDiemTheoMaSV($masv);
        $this->view("LayoutQuanTri", ["page" => "DiemXemDanhSachDiem", "css" => "XemDanhSachSV", "arrDiem" => $arrDiem]);
    }

    public function XoaDiem($madiem,$masv)
    {
        $daoDiem = $this->model("DaoDiem");
        if ($daoDiem->xoaDiem($madiem)) {
            header("Location: " . $this->getLocalhost() . "Diem/XemDiem/" . $masv . "");
        }
    }
}