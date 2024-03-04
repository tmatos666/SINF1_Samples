<?php

require_once 'Connection.php';

class Fleet {

    public function __construct() {
        $this->conn = Connection::getConn();
    }
    
    public function getAllFleet($n){
        $sql = ("SELECT * FROM fleet limit 3");
        if($n == 'all'){
           $sql = ("SELECT * FROM fleet"); 
        }
        
        #echo $sql;
        $stmt=$this->conn->query($sql);

        return $stmt;
    }

}
