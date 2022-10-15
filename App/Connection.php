<?php

namespace App;

use PDO;
use PDOException;

class Connection {
    public static function getDb() {
        try {
           $conn = new PDO(
                "mysql:localhost;dbname=twitter_clone;charset=utf8",
                "root", 
                ""
           );

           return $conn;
        } catch (PDOException $e) {
            //tratar esse erro de alguma forma// 
        }
    }
}

?>