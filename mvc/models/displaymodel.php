<?php 
    class displaymodel extends db{
        public function display()
        {
            $qr = "select * form post";
            return mysqli_query($this->con, $qr);
        }
        public function sinhvien()
        {
            $qr = "select * from post";
            return mysqli_query($this->con, $qr);
        }
    }
?>