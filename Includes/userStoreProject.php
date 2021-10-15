<?php

	require_once('db.php');

	class UserStoreProject{
		
		public static function finding_user_preferences($area,$interest){
			global $db;
			$error=null;
			$sql="SELECT stores.name,stores.city,stores.interest, projects.link FROM `projects` INNER JOIN `stores` ON projects.name=stores.name INNER JOIN `users` ON users.interest=stores.interest WHERE users.interest='$interest' AND users.area='$area' ORDER BY projects.views DESC LIMIT 1";
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
				$error="לא נמצאו פרויקטים המתאימים למאפיינך";	
				echo $error;
				return;
			 }
			 
		}
	}
?>