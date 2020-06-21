<?php
class SinhVien extends Controller
{
    public function SayHi()
    {
        $this->view("LayoutQuanTri", ["page" => "XemKhoaSV","css"=>"XemKhoaSV"]);
    }
}
