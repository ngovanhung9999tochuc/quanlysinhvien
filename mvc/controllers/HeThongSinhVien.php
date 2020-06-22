<?php
class HeThongSinhVien extends Controller
{
    public function SayHi()
    {
        $masv = $_SESSION["masv"];
        $daoSinhVien = $this->model("DaoSinhVien");
        $arrSinhVien = $daoSinhVien->xemThongTinSinhVien($masv);
        $this->view("LayoutSinhVien", ["page" => "HTSVXemThongTin", "css" => "XemThongTinSV", "arrSinhVien" => $arrSinhVien]);
    }
}