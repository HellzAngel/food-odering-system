<?php
session_start();
 $rid=$_POST["rid"];
if(( $item = $_POST["item"])!=null)
{
    include('query.php');
    $ob=new query();
    $lid=$_SESSION["lid"];
	  $date = date("d/m/Y");
    $tid=$ob->addtrans($lid,$rid,$date);
   for($i=0;$i<count($item);$i++)
   {
    $res=$ob->addcart($tid,$item[$i]);
   }
   header("location:chooserest.php?f=1");
 }
 else
 {
header("location:buyitems.php?rid=$rid&f=1");
 }
 ?>
