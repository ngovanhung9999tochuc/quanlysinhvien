<?php
class DaoDiem extends DB
{
    public function xoaDiemSinhVien($masv){
        $sql = "DELETE FROM diem WHERE masv='".$masv."'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layDiemTheoMaSV($masv)
    {
        $array = [];
        $sql = "SELECT D.masv,D.mamon,M.tenmon,M.sotinchi,M.sotiet,D.diemchuyencan,D.diemgiuaky,D.diemcuoiky,D.diemtongket FROM diem AS D JOIN mon AS M ON D.mamon=M.mamon WHERE D.masv='$masv'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}
