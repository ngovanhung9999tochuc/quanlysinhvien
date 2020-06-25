<?php
class DangNhap extends Controller
{
   public function SayHi()
   {
      $this->view("LayoutHome", ["page" => "Home"]);
   }
   public function QuanTri()
   {
      $user = $pass = "";
      $result = "";
      $resError=array("errorUser"=>"","errorPass"=>"");
      $daoDangNhap=$this->model("DaoDangNhapQuanLy");
        if (isset($_POST['dangnhap'])) {
            if(isset($_POST['user'])&&isset($_POST['pass'])){
               $neo1=$neo2=false;
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                if($user==""){
                   $resError["errorUser"]="bạn chưa nhập tên tài khoản";
                }else{
                   $neo1=true;
                }
                if($pass==""){
                  $resError["errorPass"]="bạn chưa nhập mật khẩu";
                }else{
                  $neo2=true;
                }
               if($neo1&&$neo2){
                  $result=$daoDangNhap->dangNhap($user, $pass);
               }
              
            }
        }
      $this->view("LayoutDangNhap", ["page" => "DangNhap","res"=>$result,"reserror"=>$resError,"user"=>$user]);
   }
   public function GiangVien()
   {
      $user = $pass = "";
      $result = "";
      $resError=array("errorUser"=>"","errorPass"=>"");
      $daoDangNhap=$this->model("DaoDangNhapGiangVien");
        if (isset($_POST['dangnhap'])) {
            if(isset($_POST['user'])&&isset($_POST['pass'])){
               $neo1=$neo2=false;
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                if($user==""){
                   $resError["errorUser"]="bạn chưa nhập tên tài khoản";
                }else{
                   $neo1=true;
                }
                if($pass==""){
                  $resError["errorPass"]="bạn chưa nhập mật khẩu";
                }else{
                  $neo2=true;
                }
               if($neo1&&$neo2){
                  $result=$daoDangNhap->dangNhap($user, $pass);
               }
              
            }
        }
      $this->view("LayoutDangNhap", ["page" => "DangNhap","res"=>$result,"reserror"=>$resError,"user"=>$user]);
   }
   public function SinhVien()
   {
      $user = $pass = "";
      $result = "";
      $resError=array("errorUser"=>"","errorPass"=>"");
      $daoDangNhap=$this->model("DaoDangNhapSinhVien");
        if (isset($_POST['dangnhap'])) {
            if(isset($_POST['user'])&&isset($_POST['pass'])){
               $neo1=$neo2=false;
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                if($user==""){
                   $resError["errorUser"]="bạn chưa nhập tên tài khoản";
                }else{
                   $neo1=true;
                }
                if($pass==""){
                  $resError["errorPass"]="bạn chưa nhập mật khẩu";
                }else{
                  $neo2=true;
                }
               if($neo1&&$neo2){
                  $result=$daoDangNhap->dangNhap($user, $pass);
               }
              
            }
        }
      $this->view("LayoutDangNhap", ["page" => "DangNhap","res"=>$result,"reserror"=>$resError,"user"=>$user]);
   }

   public function Thoat(){
      unset( $_SESSION['user']);
      header("Location: ".$this->getLocalhost()."");
   }
}
