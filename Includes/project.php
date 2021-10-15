<?php		
	require_once('db.php');

	class Project{
		private $id;
		private $views;
		private $description;
		private $start_date;
		private $end_date;
		private $target;
		private $collected;
		private $status;
		
		public function __construct($id){
			$this->id=$id;
		}
		
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
		 
		public function percent_collected($id){
			global $db;
			$error=null;
			$precent=null;
			$sql="SELECT * FROM `projects` WHERE `id`='$id'";
			$result=$db->query($sql);
			if (!$result){
				$error='Error is:'.$db->get_connection()->error;
				echo $error;
			}
			elseif ($result->num_rows>0){
				$percent_collected=$result->fetch_assoc();
				$this->instantation($percent_collected);
				$precent=(($this->collected)/($this->target))*100;
			}
			 else{
				$error="לא נמצאו פרויקטים";	
				echo $error;
			 }
			return $precent;
		}	
		
		public static function find_closed_projects(){
			global $db;
			$error=null;
			$sql="SELECT `name`,`end_date`,`collected` FROM `projects` WHERE `target`=`collected`";
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
				$error="לא נמצאו פרויקטים שהגיעו ליעדם";	
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