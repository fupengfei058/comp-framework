<?php

//TODO 数据库可配置化

class Stu {
    public $pdo=null;
    public $stmt;
    function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=192.168.235.130;dbname=test",'root','root');
            $this->pdo->query('set names utf8');
        } catch (PDOException $e) {
            die($e.getMessage());
        }
    }
    public function execute_dql($sql){
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute();
        $array = array();
        while ($arr = $this->stmt->fetchAll(PDO::FETCH_ASSOC)){
            $array[] = $arr;
        }
        return $array;
    }

    public static function test()
    {
        $pdoConn = new PdoConn();
        $sql = "select name from stu_info where id<10";
        $re = $pdoConn->execute_dql($sql);
        var_dump($re);
    }
}