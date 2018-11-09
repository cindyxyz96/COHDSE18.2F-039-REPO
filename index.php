<?php
if(isset($_POST['bttLogin'])){
	require 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($con, 'select * from account where username="'.$username.'" and password="'.$password.'"');
	if(mysqli_num_rows()==1){
		$_SESSION['username'] = $username;
		header('Location: welcome.php');
	}
	else
		echo "Account is invalid";
}
if(isset($_GET['logout'])){
	session_unregister('username');
}

?>

<form method = "post" action = "index.php?action = login">
	<table cellpadding="2" cellpadding="2" border="1">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="bttLogging" value="Login"></td>
		</tr>
	</table>
</form>		