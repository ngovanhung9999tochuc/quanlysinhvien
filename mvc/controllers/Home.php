<?php
class Home extends Controller
{
    public function SayHi()
    {
        $this->view("LayoutHome", ["page" => "Home"]);
    }
}
