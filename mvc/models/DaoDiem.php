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
        $sql = "SELECT D.madiem,D.masv,D.mamon,M.tenmon,M.sotinchi,M.sotiet,D.diemchuyencan,D.diemgiuaky,D.diemcuoiky,D.diemtongket FROM diem AS D JOIN mon AS M ON D.mamon=M.mamon WHERE D.masv='$masv'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
    
    public function xoaDiem($madiem){
        $sql = "DELETE FROM diem WHERE madiem='".$madiem."'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layDiemTheoMaDiem($madiem)
    {
        $array = [];
        $sql = "SELECT * FROM diem WHERE madiem='".$madiem."'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaDiem($madiem,$diemchuyencan,$diemgiuaky,$diemcuoiky,$diemtongket){
        $sql = "UPDATE diem SET diemchuyencan=$diemchuyencan,diemgiuaky=$diemgiuaky,diemcuoiky=$diemcuoiky,diemtongket=$diemtongket WHERE madiem='$madiem'";
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

    public function themDiem($madiem,$mamon,$masv,$diemchuyencan,$diemgiuaky,$diemcuoiky,$diemtongket){
        $sql = "INSERT INTO diem(madiem, mamon, masv, diemchuyencan, diemgiuaky, diemcuoiky, diemtongket) VALUES ('$madiem','$mamon','$masv',$diemchuyencan,$diemgiuaky,$diemcuoiky,$diemtongket)";
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
