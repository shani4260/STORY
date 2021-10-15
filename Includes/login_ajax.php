<?php
    require_once('init.php');
    global $session;
    $info='';
    if ($_POST['user'] == null){
            $info='נדרש למלא שם משתמש';
    }
    else if($_POST['password'] == null){
            $info='נדרש למלא סיסמא';
    }
    else{
            $name=$_POST['user'];
            $password=$_POST['password'];

            $user=new User($name,$password);
            $error=$user->find_user($name,$password);
            if (!$error){
			    $info = 0;
                $session->login($user);
            }
            else{
                $info='שם משתמש או סיסמה לא נכונים. אנא נסו שנית';
            }
    }
    echo $info;
?>
