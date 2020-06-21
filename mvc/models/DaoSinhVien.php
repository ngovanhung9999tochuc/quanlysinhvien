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
}