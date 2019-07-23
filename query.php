<?php
include ("connection.php");
class query
{
	function login($email,$password)
	{
	 $obj=new connection();
	 $qry="SELECT * FROM login WHERE email= '$email' && password = '$password'";
	 $res=$obj->execute($qry);
	 return $res;
	}
	function showusers()
	{
	$obj=new connection();
	 $qry="SELECT name,contact FROM users order by name";
	 $res=$obj->execute($qry);
	 return $res;
	}
	function userregister($email,$name,$password,$phone,$role)
	{
	 $obj=new connection();
	 $qry="insert into login (email,password,role) values ('$email','$password','$role')";
	 $res=$obj->execute($qry);
	 $lid=mysqli_insert_id($obj->con);
	 $qry="insert into users (name,contact,lid) values ('$name','$phone','$lid')";
	 $res=$obj->execute($qry);
	 return $res;
	}
	function restregister($email,$name,$contact,$address,$password,$role)
	{
	 $obj=new connection();
	  $qry="insert into login (email,password,role) values ('$email','$password','$role')";
	 $res=$obj->execute($qry);
	 $lid=mysqli_insert_id($obj->con);
	 $qry="insert into restaurant (name,address,contact,rating,lid) values ('$name','$address','$contact','4','$lid')";
	 $res=$obj->execute($qry);
	 return $res;
	}
	function additem($name,$type)
		{
	 $obj=new connection();
	 $qry="insert into item (name,type) values ('$name','$type')";
	 $res=$obj->execute($qry);
	 return $res;
	}
	
	function additemprice($item,$lid,$price)
		{
	 $obj=new connection();
	$qry="insert into products (iid,lid,price) values ('$item','$lid','$price')";
	 $res=$obj->execute($qry);
	 return $res;
	}
	function itemdet($lid)
		{
	 $obj=new connection();
	 $qry="select name,type,price,item.iid from item join products on item.iid=products.iid where lid='$lid'";
	 $res=$obj->execute($qry);
	 return $res;
	}
	function deleterest($rid)
		{
	 $obj=new connection();
	 $qry="delete from restaurant where rid='$rid'";
	 $res=$obj->execute($qry);
	 return $res;
	}
		function showitem()
		{
	 $obj=new connection();
	 $qry="select * from item order by type";
	 $res=$obj->execute($qry);
	 return $res;
	}
		function showrest()
		{
	 $obj=new connection();
	 $qry="select * from restaurant order by name";
	 $res=$obj->execute($qry);
	 return $res;
	}
	function addtrans($lid,$rid,$date)
	{
	 $obj=new connection();
	 $qry="insert into transaction(lid,rid,date)values('$lid','$rid','$date')";
	 $res=$obj->execute($qry);
	 $tid=mysqli_insert_id($obj->con);
	 return $tid;
	}
		function getprice($iid,$rid)
	{
	 $obj=new connection();
	 $qry="select price from products where iid='$iid' and lid='$rid'";
	 $res=$obj->execute($qry);
	 $p=mysqli_fetch_array($res);
	 return $p[0];
	}
	function addcart($tid,$iid)
	{
	 $obj=new connection();
	 $qry="insert into cart(tid,iid)values('$tid','$iid')";
	 $res=$obj->execute($qry);
	 return $res;
	}
}

?>