<?php
    include('query.php');
    $ob=new query();
    $email = $_POST['email'];
	$name = $_POST['name'];
    $password = $_POST['password'];
	$phone = $_POST['phone'];
	$role=0;
	$res=$ob->userregister($email,$name,$password,$phone,$role);
    if($res>0)
      { 
      header("location:login.php");
	  }
 ?>
