<?php

    class Register extends Controller{
        public function SayHi()
        {
            $teo = $this->model("displaymodel");
            $this->view("aodep", [
                "Page" => "register",
                "SV" => $teo->sinhvien()
            ]);
        }
    }

?>