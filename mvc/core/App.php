<?php
class App
{
   protected $controller = "Home";
   protected $action = "SayHi";
   protected $params = [];
   function __construct()
   {
      
      $arr = $this->UrlProcess();
      if(empty($arr)){
         $arr = array("Home","SayHi");
      }
      /*echo '<pre>';
      print_r($_POST);
      echo '</pre>';*/
      //xu ly controllers
      if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
         $this->controller = $arr[0];
      }
      require_once "./mvc/controllers/" . $this->controller  . ".php";
      $this->controller=new $this->controller;
      unset($arr[0]);
      //xu ly action
      if (isset($arr[1])) {
         if (method_exists($this->controller, $arr[1])) {
            $this->action = $arr[1];
         }
      }
      unset($arr[1]);
      //xu ly params
      if (isset($arr)) {
         $this->params = $arr;
      } else {
         $this->params = [];
      }
      call_user_func_array([$this->controller,$this->action],$this->params);
      
   }

   function UrlProcess()
   {
      if (isset($_GET['url'])) {
         return explode('/', filter_var(trim($_GET['url'], '/')));
      }
   }
}
