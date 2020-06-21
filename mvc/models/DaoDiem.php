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
}
