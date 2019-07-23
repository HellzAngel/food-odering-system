<?php
session_start();
    include('query.php');
    $ob=new query();
    $lid=$_SESSION["lid"];
    $item = $_POST['item'];
	$price = $_POST['price'];
	 $res=$ob->additemprice($item,$lid,$price);
    if($res>0)
      { 
     header("location:restitems.php");
	  }
 ?>