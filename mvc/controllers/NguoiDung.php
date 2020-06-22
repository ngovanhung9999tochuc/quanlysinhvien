<?php
class NguoiDung extends Controller
{
    public function SayHi()
    {
        $daoDangNhapQuanLy=$this->model("DaoDangNhapQuanLy");
        $arrUserQuanTri = $daoDangNhapQuanLy->layDanhSachUserQuanTriVaTenNguoiDung();
        $this->view("LayoutQuanTri", ["page" => "NDQTXem", "css" => "NDQTXem", "arrUserQuanTri" => $arrUserQuanTri]);
    }

    public function XoaUserQuanTri($tentaikhoan)
    {
        $daoDangNhapQuanLy=$this->model("DaoDangNhapQuanLy");
        if($daoDangNhapQuanLy->xoaUserQuanLyTheoTenTaiKhoa($tentaikhoan)){
            header("Location: " . $this->getLocalhost() . "NguoiDung");
        }
    }
    public function SuaUserQuanTri($tentaikhoan)
    {
        $daoDangNhapQuanLy=$this->model("DaoDangNhapQuanLy");
        if (isset($_POST['sua'])) {
            if (isset($_POST['tentaikhoan']) && isset($_POST['matkhau'])) {
                if ($daoDangNhapQuanLy->suaUserQuanTriTheoTenTaiKhoan($_POST['tentaikhoan'],$_POST['matkhau'])) {
                    header("Location: " . $this->getLocalhost() . "NguoiDung");
                }
            }
        }
        $arrUserQuanTri = $daoDangNhapQuanLy->LayUserQuanTriTheoTenTaiKhoan($tentaikhoan);
        $this->view("LayoutQuanTri", ["page" => "NDQTSuaSua", "css" => "NDQTSuaSua", "arrUserQuanTri" => $arrUserQuanTri]);
    }

    public function ThemUserQuanTri()
    {
        $daoDangNhapQuanLy=$this->model("DaoDangNhapQuanLy");
        $res = "";
        $arrPost=$_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['tentaikhoan']) && isset($_POST['matkhau']) && isset($_POST['magv'])) {
                if ($daoDangNhapQuanLy->themUserQuanTri($_POST['tentaikhoan'],$_POST['matkhau'],$_POST['magv'])) {
                    $res = "Thêm Tài Khoản Quản Trị thành công";
                    $arrPost=[];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra tên tài khoản và mã giảng viên";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "NDQTThemThem", "css" => "NDQTThemThem","res"=>$res,"arrPost"=>$arrPost]);
    }

    public function XemUserGiangVien()
    {
        $daoDangNhapGiangVien=$this->model("DaoDangNhapGiangVien");
        $arrUserGiangVien = $daoDangNhapGiangVien->layDanhSachUserGiangVienVaTenNguoiDung();
        $this->view("LayoutQuanTri", ["page" => "NDGVXem", "css" => "NDQTXem", "arrUserGiangVien" => $arrUserGiangVien]);
    }

    public function XoaUserGiangVien($tentaikhoan)
    {
        $daoDangNhapGiangVien=$this->model("DaoDangNhapGiangVien");
        if($daoDangNhapGiangVien->xoaUserGiangVienTheoTenTaiKhoa($tentaikhoan)){
            header("Location: " . $this->getLocalhost() . "NguoiDung/XemUserGiangVien");
        }
    }

    public function SuaUserGiangVien($tentaikhoan)
    {
        $daoDangNhapGiangVien=$this->model("DaoDangNhapGiangVien");
        if (isset($_POST['sua'])) {
            if (isset($_POST['tentaikhoan']) && isset($_POST['matkhau'])) {
                if ($daoDangNhapGiangVien->suaUserGiangVienTheoTenTaiKhoan($_POST['tentaikhoan'],$_POST['matkhau'])) {
                    header("Location: " . $this->getLocalhost() . "NguoiDung/XemUserGiangVien");
                }
            }
        }
        $arrUserGiangVien = $daoDangNhapGiangVien-> LayUserGiangVienTheoTenTaiKhoan($tentaikhoan);
        $this->view("LayoutQuanTri", ["page" => "NDGVSuaSua", "css" => "NDQTSuaSua", "arrUserGiangVien" => $arrUserGiangVien]);
    }

    public function ThemUserGiangVien()
    {
        $daoDangNhapGiangVien=$this->model("DaoDangNhapGiangVien");
        $res = "";
        $arrPost=$_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['tentaikhoan']) && isset($_POST['matkhau']) && isset($_POST['magv'])) {
                if ($daoDangNhapGiangVien->themUserGiangVien($_POST['tentaikhoan'],$_POST['matkhau'],$_POST['magv'])) {
                    $res = "Thêm Tài Khoản Giảng Viên thành công";
                    $arrPost=[];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra tên tài khoản và mã giảng viên";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "NDGVThemThem", "css" => "NDQTThemThem","res"=>$res,"arrPost"=>$arrPost]);
    }

    public function XemUserSinhVien()
    {
        $daoDangNhapSinhVien=$this->model("DaoDangNhapSinhVien");
        $arrUserSinhVien = $daoDangNhapSinhVien->layDanhSachUserSinhVienVaTenNguoiDung();
        $this->view("LayoutQuanTri", ["page" => "NDSVXem", "css" => "NDQTXem", "arrUserSinhVien" => $arrUserSinhVien]);
    }

    public function XoaUserSinhVien($tentaikhoan)
    {
        $daoDangNhapSinhVien=$this->model("DaoDangNhapSinhVien");
        if($daoDangNhapSinhVien-> xoaUserSinhVienTheoTenTaiKhoa($tentaikhoan)){
            header("Location: " . $this->getLocalhost() . "NguoiDung/XemUserSinhVien");
        }
    }

    public function SuaUserSinhVien($tentaikhoan)
    {
        $daoDangNhapSinhVien=$this->model("DaoDangNhapSinhVien");
        if (isset($_POST['sua'])) {
            if (isset($_POST['tentaikhoan']) && isset($_POST['matkhau'])) {
                if ($daoDangNhapSinhVien->suaUserSinhVienTheoTenTaiKhoan($_POST['tentaikhoan'],$_POST['matkhau'])) {
                    header("Location: " . $this->getLocalhost() . "NguoiDung/XemUserSinhVien");
                }
            }
        }
        $arrUserSinhVien = $daoDangNhapSinhVien-> LayUserSinhVienTheoTenTaiKhoan($tentaikhoan);
        $this->view("LayoutQuanTri", ["page" => "NDSVSuaSua", "css" => "NDQTSuaSua", "arrUserSinhVien" => $arrUserSinhVien]);
    }

    public function ThemUserSinhVien()
    {
        $daoDangNhapSinhVien=$this->model("DaoDangNhapSinhVien");
        $res = "";
        $arrPost=$_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['tentaikhoan']) && isset($_POST['matkhau']) && isset($_POST['masv'])) {
                if ($daoDangNhapSinhVien->themUserSinhVien($_POST['tentaikhoan'],$_POST['matkhau'],$_POST['masv'])) {
                    $res = "Thêm Tài Khoản Sinh Viên Thành Công";
                    $arrPost=[];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra tên tài khoản và mã sinh viên";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "NDSVThemThem", "css" => "NDQTThemThem","res"=>$res,"arrPost"=>$arrPost]);
    }


}
