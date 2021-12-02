<?php

session_start();
header('location:index.php');

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

	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){
			echo"duplicate data";
				
			}	else{

				$q = "insert into signin(name, password) values ('$username', '$password')"  ;

				$result = mysqli_query($con,$q);

			}



?>


