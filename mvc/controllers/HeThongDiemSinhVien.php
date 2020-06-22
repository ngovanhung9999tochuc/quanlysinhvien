<?php
class HeThongDiemSinhVien extends Controller
{
public function SayHi()
    {
        $masv = $_SESSION["masv"];
        $daoDiemSinhVien = $this->model("DaoDiem");
        $arrDiem = $daoDiemSinhVien->layDiemTheoMaSV($masv);
        $this->view("LayoutSinhVien", ["page"=> "HTSVXemDiem" , "css" => "XemDanhSachSV" , "arrDiem" => $arrDiem]);
    }
}
