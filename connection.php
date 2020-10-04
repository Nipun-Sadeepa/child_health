<?php 	
	$server="localhost";
	$user="root";
	$password="";
	$database="mini_project";

	$con=mysqli_connect( $server, $user ,$password ,$database);
		if(!$con){
			die("database error");
		}
  ?>