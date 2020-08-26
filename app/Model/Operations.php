<?php
Class Operations {
    public $table;
    public $sql;
    public $id;
    public $value;
    function getAllRecords($table){
        $this->table = $table;
        $sql = "SELECT * FROM $this->table";   
    }
    function getRecord($id, $table){
        $this->id = $id;
        $this->table = $table;
        $sql = "SELECT * FROM $this->table FROM $this->id";
    }
    function insertRecord($value, $table){
        $this->value = $value;
        $this->table = $table;
        $sql = "INSERT INTO $this->table (record1) VALUES $this->value";
    }
    function DoOperation($sql){
        $this->sql = $sql;
        $conObj = new DBConfig();
    }
   



}