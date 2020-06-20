<?php
class DB
{
    protected $conn;
    protected $serverName = "localhost";
    protected $userName = "root";
    protected $password = "";
    protected $dbName = "quanlycuahangdientu";

    function __construct()
    {
        $this->conn=mysqli_connect($this->serverName,$this->userName,$this->password);
        mysqli_select_db($this->conn,$this->dbName);
        mysqli_query($this->conn,"SET NAME 'utf8'");
     }
}
