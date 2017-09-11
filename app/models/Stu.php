<?php

class Stu extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
    public static function test()
    {
//        try {
//            $pdo = new PDO("mysql:host=192.168.235.130;dbname=test",'root','root');
//            $pdo->query('set names utf8');
//        } catch (PDOException $e) {
//            die($e.getMessage());
//        }
//        $sql = "select * from stu where id<10";
//        $stmt = $pdo->prepare($sql);
//        $stmt->execute();
//        $array = array();
//        while ($arr = $stmt->fetchAll(PDO::FETCH_ASSOC)){
//            $array[] = $arr;
//        }
//        var_dump($array);
    }
}