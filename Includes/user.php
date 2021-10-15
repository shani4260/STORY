<?php
  
	require_once('db.php');

	class User{
		private $username;
		private $password;
		private $email;
		private $firstName;
		private $lastName;
		private $city;
		private $gender;
		private $interest;
		
		public function __construct($username,$password){
			$this->username=$username;
			$this->password=$password;
		}
		
		public static function fetch_users(){
			global $db;
			$result=$db->query("select * from users");
			$users=null;
			if ($result){
				$i=0;
				if ($result->num_rows>0){ 
					while($row=$result->fetch_assoc()){ 
						$user=new User();
						$user->instantation($row);
						$users[$i]=$user;
						$i+=1;
					}
				}
			}
			return $users;
		}
		
		private function has_attribute($attribute){
			$object_properties=get_object_vars($this);
			return array_key_exists($attribute,$object_properties);
		}
		
		 private function  instantation($user_array){
			foreach ($user_array as $attribute=>$value){
				if ($result=$this->has_attribute($attribute))
					$this->$attribute=$value;
		   }
		 }

		public function find_user($username1, $password1){
			global $db;
			$error=null;
			$result=null;
			$username=$username1;
			$password = md5($password1);
			$result=$db->query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
			
			if (!$result)
				$error='Error is:'.$db->get_connection()->error;
			elseif ($result->num_rows>0){
				$found_user=$result->fetch_assoc();
				$this->instantation($found_user);
			}
			 else
				$error="לא נמצא משתמש";	
			return $error;
		}
		
		public static function find_username($username1){
			global $db;
			$error=null;
			$result=null;
			$username=$username1;
			$result=$db->query("SELECT * FROM `users` WHERE `username`='$username'");
			
			if (!$result)
				$error='Error is:'.$db->get_connection()->error;
			elseif ($result->num_rows>0){
				return 1;
			}

			return $error;
			
		}
		
		public function attributes($username1){
			global $db;
			$error=null;
			$result=null;
			$username=$username1;
			$result=$db->query("SELECT * FROM `users` WHERE `username`='$username'");
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
				return;
			}
			elseif ($result->num_rows>0){
				$user_attribute=$result->fetch_assoc();
				$this->instantation($user_attribute);
			}
			 else{
				$error="לא נמצא משתמש";	
				echo $error;
				return;
			 }
			
			return $user_attribute;
			
		}

		public static function add_user($username,$password1,$email,$firstName,$lastName,$area,$gender,$interest){
			global $db;
			$error=null;
			$password = md5($password1);
			$sql="INSERT INTO `users` (`username`, `password`, `email`,`first_name`,`last_name`,`area`,`gender`,`interest`) VALUES ( '$username', '$password', '$email','$firstName','$lastName','$area','$gender','$interest')";
			$result=$db->query($sql);
			if (!$result)
				$error='Can not add user.  Error is:'.$db->get_connection()->error;
			return $error;
		}	
		
		public static function find_common_interest(){
			 
			global $db;
			$error=null;
			$sql="SELECT `interest` FROM `users` GROUP BY `interest` ORDER BY COUNT(`interest`) DESC LIMIT 1";
			$result=$db->query($sql);
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
				return;
			}
			elseif ($result->num_rows>0){
				
				return $result;
			}
			 else{
				$error="לא נמצא תחום עניין";	
				echo $error;
				return;
			 }
		 }

		public function __get($property){
			if (property_exists($this,$property))
				return $this->$property;
		}
	}

?>
