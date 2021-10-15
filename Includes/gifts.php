<?php

	require_once('init.php');

	class Gift{
		private $id;
		private $name;
		private $description;
		private $stock;
		private $purchased;
		private $price;
		public static function get_price(){
			global $db;
			$error=null;
			$selectionID= $_POST['selectionID'];
			$sql="SELECT price FROM gifts WHERE ID='$selectionID'";
			$result=$db->query($sql);
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
			}
			if($row = $result->fetch_assoc()){
			
				$price=$row['price'];
				return $price;
			}
		}
		
		public static function find_highest_gift(){ 
			global $db;
			$error=null;
			$sql="SELECT `name` FROM `gifts` ORDER BY `purchased` DESC LIMIT 3";
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
				$error="לא נמצאו תשורות";	
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