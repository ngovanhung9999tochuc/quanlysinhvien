<?php
class DaoGiangVien extends DB
{
    public function LayDanhSachGiangVienTheoMaKhoa($makhoa)
    {
        $array = [];
        $sql = "SELECT GV.magv,GV.tengv,GV.ngaysinh,GV.gioitinh,GV.quequan,GV.hocvi,GV.makhoa,K.tenkhoa FROM giangvien AS GV JOIN khoa AS K ON GV.makhoa=K.makhoa WHERE GV.makhoa='".$makhoa."'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
    public function xoaGiangVien($magv){
        $sql = "DELETE FROM giangvien WHERE magv='".$magv."'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layGiangVienTheoMaGV($magv)
    {
        $array = [];
        $sql = "SELECT * FROM giangvien WHERE magv='".$magv."'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaGiangVien($magv,$tengv,$ngaysinh,$gioitinh,$quequan,$hocvi,$makhoa){
        $sql = "UPDATE giangvien SET tengv='".$tengv."',gioitinh=".$gioitinh.",ngaysinh='".$ngaysinh."',quequan='".$quequan."',hocvi='".$hocvi."',makhoa='".$makhoa."' WHERE magv='".$magv."'";
        try {
            if (mysqli_query($this->conn, $sql)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function themGiangVien($magv,$tengv,$ngaysinh,$gioitinh,$quequan,$hocvi,$makhoa){
        $sql = "INSERT INTO giangvien VALUES ('$magv','$tengv',$gioitinh,'$ngaysinh','$quequan','$hocvi','$makhoa')";
        try {
            if (mysqli_query($this->conn, $sql)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}