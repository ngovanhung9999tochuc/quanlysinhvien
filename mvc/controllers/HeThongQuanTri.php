<?php
class HeThongQuanTri extends Controller
{
    public function SayHi()
    {
        $this->view("LayoutQuanTri", ["page" => "QuanTri","css"=>""]);
    }
}
