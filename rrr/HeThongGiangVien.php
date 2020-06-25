<?php
class HeThongGiangVien extends Controller
{
    public function SayHi()
    {
        $magv = $_SESSION["magv"];
        $daoGiangVien = $this->model("DaoGiangVien");
        $arrGiangVien = $daoGiangVien->xemThongTinGiangVien($magv);
        $this->view("LayoutGiangVien", ["page" => "HTGVXemThongTin", "css" => "XemThongTinSV", "arrGiangVien" => $arrGiangVien]);
    }
}