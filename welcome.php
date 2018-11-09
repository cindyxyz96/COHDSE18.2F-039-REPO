<?php 
session_start();
if(isset($_SESSION["username"])){
	if((time()-$_SESSION['last_time'])>10){
		header("location:logout.php");
	}
	else
	{
		$_SESSION['last_time']=time();
		echo"<h1 align='center'>Home".$_SESSION["username"]."</h1>";
		echo "<h3 align='center'>Redirect after 10 seconds to Logging</h3>";
		echo "<p align = 'center'><a href='logout.php'>Logout</a></p>";
	}
}
else{
	header('location:index.php');
}
