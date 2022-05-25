<?php

abstract class Driver{
    private static $bd;

    private static function getBd(){
        if(self::$bd == null){
            try {
                self::$bd = new PDO('mysql:host=localhost; dbname=auto','root','');
                self::$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$bd;
    }

    protected function getRequest($sql, $param = null){
        $result = self::getBd()->prepare($sql);
        $result->execute($param);
        return $result;
    }
}