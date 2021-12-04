<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="css.sweetalert.css" rel="stylesheet">
<script src="js.sweetalert.min.js" ></script>
</head>
<body>

</body>
</html>
<?php

session_start();


$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}else{
		echo" no conection ";
	}

	mysqli_select_db($con,'session');


	$username = $_POST['user'];
	$password = $_POST['pass'];
	$_GET['user'];
	$_GET['pass'];

	// echo $username;
	// echo $password;

	$check = "select * from signin where name='$username' && password='$password' "; 
	$resultcheck = mysqli_query($con,$check);	

	header('location:home.php');


	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){

			$_SESSION['name'] = $username;
			
			header('location:home.php');
			
			}	else{
				swal("acceso denegado");

				header('location:index.php');

			}

