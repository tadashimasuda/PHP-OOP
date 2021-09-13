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

    public function insert($title,$body){
        $check = new FormCheck();
        $result = $check->check($title,$body);
        if ($result){
            return $result;
        }else{
            $sql = "INSERT INTO tasks(title,body) VALUES(:title,:body)";
            $stm = $this->conn->prepare($sql);
            $stm->bindValue(':title',$title,PDO::PARAM_STR);
            $stm->bindValue(':body',$body,PDO::PARAM_STR);
            if ($stm->execute()){
                return 'success';
            }else{
                return 'error';
            }
        }
    }
}



