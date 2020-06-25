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
        $sql = "SELECT M.mamon,M.tenmon,M.sotinchi,M.sotiet,D.matochuday,SV.masv,SV.tensv,D.diemchuyencan,D.diemgiuaky,D.diemcuoiky,D.diemtongket FROM diem AS D JOIN sinhvien AS SV ON D.masv=SV.masv JOIN tochuday TCD ON D.matochuday=TCD.matochuday JOIN loptinchi AS LTC ON LTC.maltc=TCD.maltc JOIN mon AS M ON M.mamon=LTC.mamon WHERE D.masv='$masv'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
    
    public function xoaDiem($matochuday,$masv){
        $sql = "DELETE FROM diem WHERE matochuday='$matochuday' AND masv='$masv'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layDiemTheoMaDiem($matochuday,$masv)
    {
        $array = [];
        $sql = "SELECT * FROM diem WHERE matochuday='$matochuday' AND masv='$masv'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaDiem($matochuday,$masv,$diemchuyencan,$diemgiuaky,$diemcuoiky,$diemtongket){
        $sql = "UPDATE diem SET diemchuyencan=$diemchuyencan,diemgiuaky=$diemgiuaky,diemcuoiky=$diemcuoiky,diemtongket=$diemtongket WHERE matochuday='$matochuday' AND masv='$masv'";
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

    public function themDiem($matochuday,$masv,$diemchuyencan,$diemgiuaky,$diemcuoiky,$diemtongket){
        $sql = "INSERT INTO diem(matochuday, masv, diemchuyencan, diemgiuaky, diemcuoiky, diemtongket) VALUES ('$matochuday','$masv',$diemchuyencan,$diemgiuaky,$diemcuoiky,$diemtongket)";
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
