<?php

require_once 'Connection.php';

class Car {

    public function __construct() {
        $this->conn = Connection::getConn();
    }
    
    public function getCar($id){
        $validname = $this->conn->real_escape_string($id);
        $sql = "SELECT * FROM fleet WHERE id = $validname";
        
        #echo $sql;
        $stmt=$this->conn->query($sql);
        $this->conn->close();
        return $stmt;
    }
}
