<?php
class ToChuDay extends Controller
{
    public function SayHi()
    {
        $daoToChuDay = $this->model("DaoToChuDay");
        $arrToChuDay = $daoToChuDay->layDanhSachToChuDay();
        $this->view("LayoutQuanTri", ["page" => "TCDXem", "css" => "LTCxem", "arrToChuDay" => $arrToChuDay]);
    }

    public function XoaToChuDay($matochuday)
    {
        $daoToChuDay = $this->model("DaoToChuDay");
        if ($daoToChuDay-> xoaToChuDay($matochuday)) {
            header("Location: " . $this->getLocalhost() . "ToChuDay");
        }
    }

    public function SuaToChuDay($matochuday)
    {
        $daoToChuDay = $this->model("DaoToChuDay");
        $res = "";
        if (isset($_POST['sua'])) {
            if (isset($_POST['matochuday']) && isset($_POST['maltc']) && isset($_POST['soluongsv'])&&isset($_POST['maphonghoc']) && isset($_POST['ngaybatdau']) && isset($_POST['ngayketthuc'])) {
                if ($daoToChuDay->suaToChuDay($_POST['matochuday'], $_POST['maltc'], $_POST['soluongsv'], $_POST['maphonghoc'], $_POST['ngaybatdau'],$_POST['ngayketthuc'])) {
                    header("Location: " . $this->getLocalhost() . "ToChuDay");
                }else {
                    $res = "Lỗi ! bạn nên kiểm tra mã lớp tín chỉ";
                }
            }
        }
        $arrToChuDay = $daoToChuDay-> layToChuDayTheoMa($matochuday);
        $this->view("LayoutQuanTri", ["page" => "TCDSua", "css" => "DiemSua", "arrToChuDay" => $arrToChuDay, "res" => $res]);
    }

    public function ThemToChuDay()
    {
        $daoToChuDay = $this->model("DaoToChuDay");
        $matochuday = "TCD" . $this->randomString(8);
        $res = "";
        $arrPost=$_POST;
        if (isset($_POST['them'])) {
            if (isset($_POST['maltc']) && isset($_POST['soluongsv'])&&isset($_POST['maphonghoc']) && isset($_POST['ngaybatdau']) && isset($_POST['ngayketthuc'])) {
                if ($daoToChuDay->themToChuDay($matochuday, $_POST['maltc'], $_POST['soluongsv'], $_POST['maphonghoc'], $_POST['ngaybatdau'],$_POST['ngayketthuc'])) {
                    $res = "Thêm lớp lịch dạy thành công";
                    $arrPost=[];
                } else {
                    $res = "Lỗi ! bạn nên kiểm tra mã lớp tín chỉ,mã phòng học";
                }
            }
        }
        $this->view("LayoutQuanTri", ["page" => "TCDThem", "css" => "TCDThem","res"=>$res,"arrPost"=>$arrPost]);
    }
}
