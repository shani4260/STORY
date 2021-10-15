<?php
    require_once('config.php');
    class Database{
        private $connection;
        function __construct(){
            $this->open_db_connection();
            
        }
        private function open_db_connection(){
            $this->connection=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if ($this->connection->connect_error){
                $this->connection=null;
            }
        }
        public function get_connection(){
            return $this->connection;
        }
        public function query($sql){
            $result=$this->connection->query($sql);
            if (!$result){
                return null;
            }
            else{
                return $result;
            }
        }  
    }
    $db=new Database();
?>	