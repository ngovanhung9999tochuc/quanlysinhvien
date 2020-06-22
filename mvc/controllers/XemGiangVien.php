<?php
class XemGiangVien extends Controller
{
    public function SayHi()
    {
        $daoKhoa = $this->model("DaoKhoa");
        $arrKhoa = $daoKhoa->layKhoa();
        $this->view("LayoutGiangVien", ["page" => "XemGVTheoKhoaOnly", "css" => "GVXemKhoa", "arrKhoa" => $arrKhoa]);
    }
    public function LayDanhSachGiangVien($makhoa)
    {
        $daoGiangVien = $this->model("DaoGiangVien");
        $arrGiangVien = $daoGiangVien->LayDanhSachGiangVienTheoMaKhoa($makhoa);
        $this->view("LayoutGiangVien", ["page" => "XemDanhSachGVOnly", "css" => "GVXemDanhSach", "arrGiangVien" => $arrGiangVien]);
    }
}