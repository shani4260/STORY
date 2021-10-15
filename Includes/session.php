<?php
    require_once('init.php');
    
    class Session{
        private $signed_in;
        private $username;
        private $password;
		private $is_admin;
    
        public function __construct(){
            session_start();
            $this->check_login();
        }
    
         private function check_login(){
            if (isset($_SESSION['username'])){
                $this->username=$_SESSION['username'];
    			$this->password=$_SESSION['password'];
				$this->is_admin=$_SESSION['is_admin'];
                $this->signed_in=true;
            }
            else{
                unset($this->username);
    			unset($this->password);
                $this->signed_in=false;
            }
        }
    
        public function login($user){
            if($user){
                $this->username=$user->username;
    			$this->password=$user->password;
				$this->admin=$user->admin;
                $_SESSION['username']=$user->username;
    			$_SESSION['password']=$user->password;
				$_SESSION['is_admin']=$user->is_admin;
                $this->signed_in=true;
            }
        }
        
        public function logout(){
            echo 'logout';
            unset($_SESSION['username']);
            unset($this->username);
            $this->signed_in=false;
        }
    
        public function __get($property){
            if (property_exists($this,$property))
                return $this->$property;
        }
    }
    $session=new Session();
?>