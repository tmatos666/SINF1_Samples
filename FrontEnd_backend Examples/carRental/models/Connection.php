<?php

class Connection {
    
    public static function getConn(){
        return new mysqli("localhost", 'root', 'root', 'carrental');
    }
    
}
