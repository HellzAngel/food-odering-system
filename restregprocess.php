<?php
    include('query.php');
    $ob=new query();
    $email = $_POST['email'];
	$name = $_POST['name'];
    $contact = $_POST['contact'];
	$address = $_POST['address'];
	$password=$_POST['password'];
	$role=2;
	 $res=$ob->restregister($email,$name,$contact,$address,$password,$role);
    if($res>0)
      { 
      header("location:home.php");
	  }
 ?>
