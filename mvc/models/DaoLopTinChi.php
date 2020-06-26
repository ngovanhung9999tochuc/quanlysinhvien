<?php
class DaoLopTinChi extends DB
{
    public function layDanhSachLopTinChi()
    {
        $array = [];
        $sql = "SELECT LTC.maltc,M.mamon,M.tenmon,M.sotinchi,M.sotiet,GV.magv,GV.tengv,K.tenkhoa FROM loptinchi AS LTC JOIN giangvien AS GV ON LTC.magv=GV.magv JOIN mon AS M ON M.mamon=LTC.mamon JOIN khoa AS K ON K.makhoa=M.makhoa";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function xoaLopTinChi($maltc)
    {
        $sql = "DELETE FROM loptinchi WHERE maltc='$maltc'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layLopTinChiTheoMa($maltc)
    {
        $array = [];
        $sql = "SELECT * FROM loptinchi WHERE maltc='$maltc'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaLopTinChi($maltc, $magv, $mamon)
    {
        $sql = "UPDATE loptinchi SET magv='$magv',mamon='$mamon' WHERE maltc='$maltc'";
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

    public function themLopTinChi($maltc, $magv, $mamon)
    {
        $sql = "INSERT INTO loptinchi(maltc, magv, mamon) VALUES ('$maltc','$magv','$mamon')";
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
