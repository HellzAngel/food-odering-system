<?php
include("query.php");
$ob=new query();
$tot=0;
$item=$_POST["item"];
$rid=$_POST["rid"];
$i=explode(",",$item);
for($e=0;$e<count($i);$e++)
{
$tot=$tot+$ob->getprice($i[$e],$rid);
}
echo "TOTAL : $tot";
?>