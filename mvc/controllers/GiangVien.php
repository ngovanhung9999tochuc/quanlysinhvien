<?php
class GiangVien extends Controller
{
    public function SayHi()
    {
        $daoKhoa = $this->model("DaoKhoa");
        $arrKhoa = $daoKhoa->layKhoa();
        $this->view("LayoutQuanTri", ["page" => "GVXemKhoa", "css" => "GVXemKhoa", "arrKhoa" => $arrKhoa]);
    }
    public function LayDanhSachGiangVien($makhoa)
    {
        $daoGiangVien = $this->model("DaoGiangVien");
        $arrGiangVien = $daoGiangVien->LayDanhSachGiangVienTheoMaKhoa($makhoa);
        $this->view("LayoutQuanTri", ["page" => "GVXemDanhSach", "css" => "GVXemDanhSach", "arrGiangVien" => $arrGiangVien]);
    }
    public function XoaGiangVien($magv, $makhoa)
    {
        $daoDangNhapQuanLy = $this->model("DaoDangNhapQuanLy");
        $daoDangNhapGiangVien = $this->model("DaoDangNhapGiangVien");
        $daoGiangVien = $this->model("DaoGiangVien");
        if ($daoDangNhapQuanLy->xoaUserQuanLy($magv)) {
            if ($daoDangNhapGiangVien->xoaUserGiangVien($magv)) {
                if ($daoGiangVien->xoaGiangVien($magv)) {
                    header("Location: " . $this->getLocalhost() . "GiangVien/LayDanhSachGiangVien/" . $makhoa . "");
                }
            }
        }
    }
    public function SuaGiangVien($magv)
    {
        $daoGiangVien = $this->model("DaoGiangVien");
        $res = "";
        if (isset($_POST['sua'])) {
            if (isset($_POST['magv']) && isset($_POST['tengv']) && isset($_POST['ngaysinh']) && isset($_POST['gioitinh']) && isset($_POST['quequan']) && isset($_POST['hocvi']) && isset($_POST['makhoa'])) {
                if ($daoGiangVien->suaGiangVien($_POST['magv'], $_POST['tengv'], $_POST['ngaysinh'], $_POST['gioitinh'], $_POST['quequan'], $_POST['hocvi'], $_POST['makhoa'])) {
                    header("Location: " . $this->getLocalhost() . "GiangVien/LayDanhSachGiangVien/" . $_POST['makhoa'] . "");
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã khoa";
                }
            }
        }
        $arrGiangVien = $daoGiangVien->layGiangVienTheoMaGV($magv);
        $this->view("LayoutQuanTri", ["page" => "GVSua", "css" => "GVSua", "arrGiangVien" => $arrGiangVien, "res" => $res]);
    }

    public function ThemGiangVien()
    {
        $daoGiangVien = $this->model("DaoGiangVien");
        $magv = "GV" . $this->randomString(8);
        $res = "";
        $arrPost=$_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['tengv']) && isset($_POST['ngaysinh']) && isset($_POST['gioitinh']) && isset($_POST['quequan']) && isset($_POST['hocvi']) && isset($_POST['makhoa'])) {
                if ($daoGiangVien->themGiangVien($magv, $_POST['tengv'], $_POST['ngaysinh'], $_POST['gioitinh'], $_POST['quequan'], $_POST['hocvi'], $_POST['makhoa'])) {
                    $res = "Thêm giảng viên thành công";
                    $arrPost=[];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã khoa";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "GVThem", "css" => "GVThem", "arrPost" => $arrPost, "res" => $res]);
    }
}
