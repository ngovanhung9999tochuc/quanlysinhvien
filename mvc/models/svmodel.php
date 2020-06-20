<?php

    class svmodel extends db{
        public function Getsv()
        {
            return "Nguyen Van Teo";
        }

        public function Tong($n, $m)
        {
            return $n + $m;
        }

        public function sinhvien()
        {
            $qr = "select * from post";
            return mysqli_query($this->con, $qr);
        }
    }

?>