<?php
    include('query.php');
    $ob=new query();
    $name = $_POST['name'];
	$type = $_POST['type'];
	 $res=$ob->additem($name,$type);
    if($res>0)
      { 
      header("location:items.php");
	  }
 ?>