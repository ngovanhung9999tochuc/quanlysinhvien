<?php
class LopTinChi extends Controller
{
    public function SayHi()
    {
        $DaoLopTinChi = $this->model("DaoLopTinChi");
        $arrLopTinChi = $DaoLopTinChi->layDanhSachLopTinChi();
        $this->view("LayoutQuanTri", ["page" => "LTCxem", "css" => "LTCxem", "arrLopTinChi" => $arrLopTinChi]);
    }


    public function XoaDiem($maltc)
    {
        $DaoLopTinChi = $this->model("DaoLopTinChi");
        if ($DaoLopTinChi->xoaLopTinChi($maltc)) {
            header("Location: " . $this->getLocalhost() . "LopTinChi");
        }
    }
}
