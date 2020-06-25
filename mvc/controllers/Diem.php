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
        $arrDiem = $daoDiem->layDiemTheoMaSV($masv);
        $this->view("LayoutQuanTri", ["page" => "DiemXemDanhSachDiem", "css" => "XemDanhSachSV", "arrDiem" => $arrDiem]);
    }

    public function XoaDiem($matochuday, $masv)
    {
        $daoDiem = $this->model("DaoDiem");
        if ($daoDiem->xoaDiem($matochuday, $masv)) {
            header("Location: " . $this->getLocalhost() . "Diem/XemDiem/" . $masv . "");
        }
    }

    public function SuaDiem($matochuday, $masv)
    {
        $daoDiem = $this->model("DaoDiem");
        $res = "";
        if (isset($_POST['sua'])) {
            if (isset($_POST['matochuday']) && isset($_POST['masv']) && isset($_POST['diemchuyencan']) && isset($_POST['diemgiuaky']) && isset($_POST['diemcuoiky']) && isset($_POST['diemtongket'])) {
                if ($daoDiem->suaDiem($_POST['matochuday'],$_POST['masv'], $_POST['diemchuyencan'], $_POST['diemgiuaky'], $_POST['diemcuoiky'], $_POST['diemtongket'])) {
                    header("Location: " . $this->getLocalhost() . "Diem/XemDiem/" . $masv . "");
                }
            }
        }
        $arrDiem = $daoDiem->layDiemTheoMaDiem($matochuday, $masv);
        $this->view("LayoutQuanTri", ["page" => "DiemSua", "css" => "DiemSua", "arrDiem" => $arrDiem, "res" => $res]);
    }

    public function ThemDiem()
    {
        $daoDiem = $this->model("DaoDiem");
        $res = "";
        $arrPost = $_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['matochuday']) && isset($_POST['masv']) && isset($_POST['diemchuyencan']) && isset($_POST['diemgiuaky']) && isset($_POST['diemcuoiky']) && isset($_POST['diemtongket'])) {
                if ($daoDiem->themDiem($_POST['matochuday'], $_POST['masv'], $_POST['diemchuyencan'], $_POST['diemgiuaky'], $_POST['diemcuoiky'], $_POST['diemtongket'])) {
                    $res = "Thêm điểm thành công";
                    $arrPost = [];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã sinh viên và mã tổ chức dạy";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "DiemThem", "css" => "DiemThem", "res" => $res, "arrPost" => $arrPost]);
    }
}
