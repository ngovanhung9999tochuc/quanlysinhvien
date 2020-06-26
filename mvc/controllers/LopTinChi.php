<?php
class LopTinChi extends Controller
{
    public function SayHi()
    {
        $DaoLopTinChi = $this->model("DaoLopTinChi");
        $arrLopTinChi = $DaoLopTinChi->layDanhSachLopTinChi();
        $this->view("LayoutQuanTri", ["page" => "LTCxem", "css" => "LTCxem", "arrLopTinChi" => $arrLopTinChi]);
    }


    public function XoaLopTinChi($maltc)
    {
        $DaoLopTinChi = $this->model("DaoLopTinChi");
        if ($DaoLopTinChi->xoaLopTinChi($maltc)) {
            header("Location: " . $this->getLocalhost() . "LopTinChi");
        }
    }

    public function SuaLopTinChi($maltc)
    {
        $DaoLopTinChi = $this->model("DaoLopTinChi");
        $res = "";
        if (isset($_POST['sua'])) {
            if (isset($_POST['maltc']) && isset($_POST['magv']) && isset($_POST['mamon'])) {
                if ($DaoLopTinChi->suaLopTinChi($_POST['maltc'],$_POST['magv'],$_POST['mamon'])) {
                    header("Location: " . $this->getLocalhost() . "LopTinChi");
                }else {
                    $res = "Lỗi ! bạn nên kiểm tra mã giảng viên và mã môn";
                }
            }
        }
        $arrLopTinChi = $DaoLopTinChi->layLopTinChiTheoMa($maltc);
        $this->view("LayoutQuanTri", ["page" => "LTCSua", "css" => "DiemSua", "arrLopTinChi" => $arrLopTinChi, "res" => $res]);
    }

    public function ThemLopTinChi()
    {
        $DaoLopTinChi = $this->model("DaoLopTinChi");
        $maltc = "LTC" . $this->randomString(8);
        $res = "";
        $arrPost=$_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['magv']) && isset($_POST['mamon'])) {
                if ($DaoLopTinChi->themLopTinChi($maltc,$_POST['magv'],$_POST['mamon'])) {
                    $res = "Thêm lớp tin chỉ thành công";
                    $arrPost=[];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã giảng viên và mã môn";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "LTCThem", "css" => "XemThemSV","res"=>$res,"arrPost"=>$arrPost]);
    }
}
