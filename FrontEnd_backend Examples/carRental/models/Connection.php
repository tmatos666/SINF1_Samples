<?php

class Connection {
    
    public static function getConn(){
        return new mysqli("localhost", 'sinf1', '1234', 'rentalcar');
    }
    
}
