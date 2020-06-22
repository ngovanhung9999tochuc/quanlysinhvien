<?php
class DaoKhoa extends DB
{
    public function layKhoa()
    {
        $array = [];
        $sql = "SELECT * FROM khoa";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}