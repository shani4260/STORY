<?php

	require_once('db.php');

	class Store{
		private $bn_number;
		private $name;
		private $city;
		private $phone_number;
		private $field;
		private $bank_account;
		private $branch_number;
		private $bank_number;
		
		private function has_attribute($attribute){
		
			$object_properties=get_object_vars($this);
			return array_key_exists($attribute,$object_properties);
		}
		
		private function  instantation($project_array){
			foreach ($project_array as $attribute=>$value){
				if ($result=$this->has_attribute($attribute))
					$this->$attribute=$value;
		   }
		}
		 
		 
		public static function find_resturants_in_telaviv(){
			global $db;
			$error=null;
			$city = "תל אביב";
			$sql="SELECT `name` FROM `stores` WHERE `city`='$city'";
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
				$error="לא נמצאו מסעדות באיזור תל אביב";	
				echo $error;
				return;
			 }
			 
		}
		
		public static function find_resturants_in_center(){
			global $db;
			$error=null;
			$area="מרכז";
			$interest="מסעדות";
			$sql="SELECT COUNT(`name`) FROM `stores` WHERE `area`='$area' AND `interest`='$interest'";
			$result=$db->query($sql);
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
				return;
			}
			elseif ($result->num_rows>0){
				
				$row = $result->fetch_assoc();
				return $row["COUNT(`name`)"];
				
			}
			 else{
				$error="לא נמצאו מסעדות באיזור מרכז";	
				echo $error;
				return;
			 }
			 
		}
		
		public static function find_resturants_in_north(){
			global $db;
			$error=null;
			$area="צפון";
			$interest="מסעדות";
			$sql="SELECT COUNT(`name`) FROM `stores` WHERE `area`='$area' AND `interest`='$interest'";
			$result=$db->query($sql);
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
				return;
			}
			elseif ($result->num_rows>0){
				
				$row = $result->fetch_assoc();
				return $row["COUNT(`name`)"];
			}
			 else{
				$error="לא נמצאו מסעדות באיזור צפון";	
				echo $error;
				return;
			 }
			 
		}
		
		public static function find_resturants_in_south(){
			global $db;
			$error=null;
			$area="דרום";
			$interest="מסעדות";
			$sql="SELECT COUNT(`name`) FROM `stores` WHERE `area`='$area' AND `interest`='$interest'";
			$result=$db->query($sql);
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
				return;
			}
			elseif ($result->num_rows>0){
				
				$row = $result->fetch_assoc();
				return $row["COUNT(`name`)"];
			}
			 else{
				$error="לא נמצאו מסעדות באיזור דרום";	
				echo $error;
				return;
			 }
			 
		}
		
		public static function count_resturants(){
			global $db;
			$error=null;
			$interest="מסעדות";
			$sql="SELECT COUNT(`name`) FROM `stores` WHERE `interest`='$interest'";
			$result=$db->query($sql);
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
				return;
			}
			elseif ($result->num_rows>0){
				
				$row = $result->fetch_assoc();
				return $row["COUNT(`name`)"];
				
			}
			 else{
				$error="לא נמצאו מסעדות";	
				echo $error;
				return;
			 }
			 
		}
	}

?>