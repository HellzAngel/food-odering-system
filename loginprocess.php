<?php
session_start();
    include('query.php');
    $ob=new query();
    $email = $_POST['email'];
    $password = $_POST['password'];
	$res=$ob->login($email,$password);
    if(mysqli_num_rows($res)>0)
      { 
        $r=mysqli_fetch_array($res);
		$_SESSION["lid"]=$r[0];
        if ($r[3]==1)
		 {
			 
        header("Location: adminhome.php ");
         } 
       else if ($r[3]==0)
	   {
        header("Location: userhome.php ");
	   }
	    else if ($r[3]==2)
	   {
        header("Location: resthome.php ");
	   }
      }
    echo "check email id or password";
	exit();
 ?>
