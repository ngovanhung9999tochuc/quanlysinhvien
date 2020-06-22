<?php
class DaoLop extends DB
{
    public function layLopTheoKhoaVaKhoaHoc($makhoahoc,$makhoa)
    {
        $array = [];
        $sql = "SELECT * FROM lop WHERE makhoa= '".$makhoa."' AND makhoahoc='".$makhoahoc."'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function layLopTheoKhoa($makhoa)
    {
        $array = [];
        $sql = "SELECT * FROM lop WHERE makhoa= '".$makhoa."'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}