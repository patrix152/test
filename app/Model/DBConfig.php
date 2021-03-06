<?php
require 'C:\xampp\htdocs\test\test\app\Interfaces\IDBConfig.php';
Class DBConfig implements IDBConfig  {
    private $host = IDBConfig::host;
    private $dbname = IDBConfig::dbname;
    private $user = IDBConfig::user;
    private $pass = IDBConfig::pass; 
    public $pdo;   
    function __construct(){
    try {
        $this->pdo = new PDO ("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);       
      }
      catch (PDOException $w){
          print $w->getMessage();
      }
   }
}
?>