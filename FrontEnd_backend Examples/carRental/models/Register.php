<?php
    require_once 'Connection.php';

    class Register{
        private $name=null;
        private $username=null;
        private $password=null;
        private $conn=null;

        public function __construct($name, $username, $password) {
            
            $this->conn = Connection::getConn();
            $this->name = $this->conn->real_escape_string($name);
            $this->username = $this->conn->real_escape_string($username);
            $this->password = $this->conn->real_escape_string($password);
        }
        
        public function login() {
            
            $sql = ("SELECT 'foo' FROM users WHERE username = '$this->username' and password = '$this->password'");
            #echo $sql;
            $stmt=$this->conn->query($sql);
            
            if($stmt->num_rows == 1){
                return True;
            }
            return False;
        }
        
        
        public function getUsers(){
            
            $sql = "SELECT 'foo' FROM users WHERE username = '$this->username'";
            #echo $sql;
            $stmt=$this->conn->query($sql);
            
            if($stmt->num_rows > 0){
                return False;
            }
            return True;
        }
        
        public function registerUser(){
            
            $sql="INSERT INTO users(name, username, Password) VALUES ('$this->name', '$this->username', '$this->password')";
                        
            $stmt=$this->conn->query($sql);
            if($stmt == 1){
                return True;
            }else{
                return False;
            }
        }
      
    }