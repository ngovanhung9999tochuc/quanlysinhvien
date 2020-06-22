<?php
class SinhVien extends Controller
{
    public function SayHi()
    {
        $daoKhoaHoc = $this->model("DaoKhoaHoc");
        $arrKhoaHoc = $daoKhoaHoc->layKhoaHoc();
        $this->view("LayoutQuanTri", ["page" => "XemKhoaHocSV", "css" => "XemKhoaHocSV", "arrKhoaHoc" => $arrKhoaHoc]);
    }

    public function LayKhoaSV($makhoahoc)
    {
        $daoKhoa = $this->model("DaoKhoa");
        $arrKhoa = $daoKhoa->layKhoa();
        $this->view("LayoutQuanTri", ["page" => "XemKhoaSV", "css" => "XemKhoaSV", "arrKhoa" => $arrKhoa, "makhoahoc" => $makhoahoc]);
    }

    public function LayLop($makhoahoc, $makhoa)
    {
        $daoLop = $this->model("DaoLop");
        $arrLop = $daoLop->layLopTheoKhoaVaKhoaHoc($makhoahoc, $makhoa);
        $this->view("LayoutQuanTri", ["page" => "XemLopSV", "css" => "XemLopSV", "arrLop" => $arrLop]);
    }
    
    public function LayDanhSachSinhVien($malop)
    {
        $daoSinhVien = $this->model("DaoSinhVien");
        $arrSinhVien = $daoSinhVien->layDanhSachSinhVienTheoLop($malop);
        $this->view("LayoutQuanTri", ["page" => "XemDanhSachSV", "css" => "XemDanhSachSV", "arrSinhVien" => $arrSinhVien]);
    }

    public function XoaSinhVien($masv, $malop)
    {
        $daoDiem = $this->model("DaoDiem");
        $daoDangNhapSinhVien = $this->model("DaoDangNhapSinhVien");
        $daoSinhVien = $this->model("DaoSinhVien");
        if ($daoDiem->xoaDiemSinhVien($masv)) {
            if ($daoDangNhapSinhVien->xoaUserSinhVien($masv)) {
                if ($daoSinhVien->xoaSinhVien($masv)) {
                    header("Location: " . $this->getLocalhost() . "SinhVien/LayDanhSachSinhVien/" . $malop . "");
                }
            }
        }
    }

    public function SuaSinhVien($masv)
    {
        $daoSinhVien = $this->model("DaoSinhVien");
        $res = "";
        if (isset($_POST['sua'])) {
            if (isset($_POST['masv']) && isset($_POST['tensv']) && isset($_POST['ngaysinh']) && isset($_POST['gioitinh']) && isset($_POST['quequan']) && isset($_POST['sdt']) && isset($_POST['malop'])) {
                if ($daoSinhVien->suaSinhVien($_POST['masv'], $_POST['tensv'], $_POST['ngaysinh'], $_POST['gioitinh'], $_POST['quequan'], $_POST['sdt'], $_POST['malop'])) {
                    header("Location: " . $this->getLocalhost() . "SinhVien/LayDanhSachSinhVien/" . $_POST['malop'] . "");
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã lớp";
                }
            }
        }
        $arrSinhVien = $daoSinhVien->laySinhVienTheoMaSV($masv);
        $this->view("LayoutQuanTri", ["page" => "XemSuaSV", "css" => "XemSuaSV", "arrSinhVien" => $arrSinhVien, "res" => $res]);
    }

    public function ThemSinhVien()
    {
        $daoSinhVien = $this->model("DaoSinhVien");
        $masv = "SV" . $this->randomString(8);
        $res = "";
        $arrPost=$_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['tensv']) && isset($_POST['ngaysinh']) && isset($_POST['gioitinh']) && isset($_POST['quequan']) && isset($_POST['sdt']) && isset($_POST['malop'])) {
                if ($daoSinhVien->themSinhVien($masv, $_POST['tensv'], $_POST['ngaysinh'], $_POST['gioitinh'], $_POST['quequan'], $_POST['sdt'], $_POST['malop'])) {
                    $res = "Thêm sinh viên thành công";
                    $arrPost=[];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã lớp";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "XemThemSV", "css" => "XemThemSV","res"=>$res,"arrPost"=>$arrPost]);
    }
    public function SuaThongTinSinhVien($masv)
    {
        $daoSinhVien = $this->model("DaoSinhVien");
        $res = "";
        if (isset($_POST['sua'])) {
            if (isset($_POST['masv']) && isset($_POST['tensv']) && isset($_POST['ngaysinh']) && isset($_POST['gioitinh']) && isset($_POST['quequan']) && isset($_POST['sdt']) && isset($_POST['malop'])) {
                if ($daoSinhVien->suaSinhVien($_POST['masv'], $_POST['tensv'], $_POST['ngaysinh'], $_POST['gioitinh'], $_POST['quequan'], $_POST['sdt'], $_POST['malop'])) {
                    header("Location: " . $this->getLocalhost() . "HeThongSinhVien/" . $_POST['masv'] . "");
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã lớp";
                }
            }
        }
        $arrSinhVien = $daoSinhVien->laySinhVienTheoMaSV($masv);
        $this->view("LayoutSinhVien", ["page" => "XemSuaSV", "css" => "XemSuaSV", "arrSinhVien" => $arrSinhVien, "res" => $res]);
    }
    
}
