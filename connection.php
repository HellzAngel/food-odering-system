<?php
class connection
{
	var $con,$res;
	function getcon()
	{
		$this->con=mysqli_connect("localhost","root","","food_db");
	}
	function execute($q)
		{
		$this->getcon();
		$this->res=mysqli_query($this->con,$q);
		return $this->res;
	}
}
