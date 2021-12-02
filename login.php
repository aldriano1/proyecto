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

				header('location:home.php');

			}

