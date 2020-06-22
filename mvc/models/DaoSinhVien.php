<?php
class DaoSinhVien extends DB
{
    public function layDanhSachSinhVienTheoLop($malop)
    {
        $array = [];
        $sql = "SELECT * FROM sinhvien WHERE malop='".$malop."'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function xoaSinhVien($masv){
        $sql = "DELETE FROM sinhvien WHERE masv='".$masv."'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    public function laySinhVienTheoMaSV($masv)
    {
        $array = [];
        $sql = "SELECT * FROM sinhvien WHERE masv='".$masv."'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
    public function suaSinhVien($masv,$tensv,$ngaysinh,$gioitinh,$quequan,$sdt,$malop){
        $sql = "UPDATE sinhvien SET tensv='".$tensv."',ngaysinh='".$ngaysinh."',gioitinh=".$gioitinh.",quequan='".$quequan."',sdt='".$sdt."',malop='".$malop."' WHERE masv='".$masv."'";
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
    public function themSinhVien($masv,$tensv,$ngaysinh,$gioitinh,$quequan,$sdt,$malop){
        $sql = "INSERT INTO sinhvien VALUES ('$masv','$tensv','$ngaysinh',$gioitinh,'$quequan','$sdt','$malop')";
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
    public function xemThongTinSinhVien($masv)
    {
        $array = [];
        $sql = "SELECT SV.masv,SV.tensv,SV.ngaysinh,SV.gioitinh,SV.quequan,SV.sdt,L.tenlop,K.tenkhoa,N.tennganh,L.makhoahoc FROM 
        sinhvien AS SV JOIN lop AS L ON SV.malop=L.malop JOIN khoa AS K ON L.makhoa=K.makhoa JOIN nganh AS N ON L.manganh=N.manganh
        WHERE SV.masv='$masv'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}