<?php
class DaoToChuDay extends DB
{
    public function layDanhSachToChuDay()
    {
        $array = [];
        $sql = "SELECT TCD.matochuday,GV.tengv,M.tenmon,M.sotinchi,TCD.soluongsv,TCD.maphonghoc,TCD.ngaybatdau,TCD.ngayketthuc FROM tochuday AS TCD JOIN loptinchi AS LTC ON TCD.maltc=LTC.maltc JOIN giangvien AS GV ON LTC.magv=GV.magv JOIN mon AS M ON LTC.mamon=M.mamon";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function xoaToChuDay($matochuday)
    {
        $sql = "DELETE FROM tochuday WHERE matochuday='$matochuday'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layToChuDayTheoMa($matochuday)
    {
        $array = [];
        $sql = "SELECT * FROM tochuday WHERE matochuday='$matochuday'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaToChuDay($matochuday, $maltc, $soluongsv, $maphonghoc, $ngaybatdau,$ngayketthuc)
    {
        $sql = "UPDATE tochuday SET maltc='$maltc',soluongsv=$soluongsv,maphonghoc='$maphonghoc',ngaybatdau='$ngaybatdau',ngayketthuc='$ngayketthuc' WHERE matochuday='$matochuday'";
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

    public function themToChuDay($matochuday, $maltc, $soluongsv, $maphonghoc, $ngaybatdau,$ngayketthuc)
    {
        $sql = "INSERT INTO tochuday VALUES ('$matochuday', '$maltc', $soluongsv, '$maphonghoc', '$ngaybatdau', '$ngayketthuc', b'00')";
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
