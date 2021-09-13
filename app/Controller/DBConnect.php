<?php
require_once ('./form_check.php');

class DBConnect{
    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function connect(){
        try{
            $db = new PDO ('mysql:dbname=php_oop;host=localhost;charset=utf8','root','root');
        }catch (Exception $e){
            print ($e->getMessage());
        }
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }

    public function select($sql){
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $items = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }

    public function insert_sql($table,$items){

        $bind_params=[];
        foreach ($items as $key => $value){
            $bind_params[$key] = ":{$key}";
        }

        $keys = implode(',',array_keys($items));
        $values = implode(',',array_values($bind_params));

        $sql = "INSERT INTO {$table} ({$keys}) VALUES({$values})";
        return $sql;
    }

    public function insert($table,$items){
        $sql = $this->insert_sql($table,$items);
        $stm = $this->conn->prepare($sql);
        foreach ($items as $key => $item){
            $param = ":{$key}";
            $stm->bindValue($param,$item,PDO::PARAM_STR);
        }
        if ($stm->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function update($table,$items){

    }
}



