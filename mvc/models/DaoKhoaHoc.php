<?php
class DaoKhoaHoc extends DB
{
    public function layKhoaHoc()
    {
        $array = [];
        $sql = "SELECT * FROM khoahoc";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}