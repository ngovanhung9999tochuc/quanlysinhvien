<?php
class Controller
{
    public function model($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        return new $model;
    }

    public function view($view, $data = [])
    {
        require_once "./mvc/views/" . $view . ".php";
    }
    function randomString($lenght = 5)
    {
        $arrCharacter = array_merge(range('a', 'z'), range(0, 9));
        $arrCharacter = implode("", $arrCharacter);
        $arrCharacter = str_shuffle($arrCharacter);
        $result = substr($arrCharacter, 0, $lenght);
        return $result;
    }
    public function getLocalhost()
    {
       return "http://localhost/quanlysinhvien/";
    }
}
