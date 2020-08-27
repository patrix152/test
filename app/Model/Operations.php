<?php
require 'DBConfig.php';
Class Operations {
    public $table;
    public $sql;
    public $id;
    public $value;
    function getAllRecords($table){
        $this->table = $table;
        $sql = "SELECT * FROM $this->table";  
        return $this->DoOperation($sql); 
    }
    function getRecord($id, $table){
        $this->id = $id;
        $this->table = $table;
        $sql = "SELECT * FROM $this->table FROM $this->id";
        return $this->DoOperation($sql);
    }
    function insertRecord($value, $table){
        $this->value = $value;
        $this->table = $table;
        $sql = "INSERT INTO $this->table (record1) VALUES $this->value";
        return $this->DoOperation($sql);
    }
    function DoOperation($sql){
        $this->sql = $sql;
        $conObj = new DBConfig();
        $conObj->pdo->prepare($this->sql);
    }

}

