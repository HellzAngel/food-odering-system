<?php
$rid=$_GET["rid"];
include("query.php");
$ob=new query();
$rs=$ob->deleterest($rid);
header("location:viewrest.php");
?>