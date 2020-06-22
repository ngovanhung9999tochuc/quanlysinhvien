<?php
class HeThongGiangVien extends Controller
{
    public function SayHi()
    {
        $this->view("LayoutGiangVien", ["page" => "GiangVien","css"=>""]);
    }
}

