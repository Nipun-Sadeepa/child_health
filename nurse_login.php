<?php  
	session_start();   
	require_once("connection.php");
	                   
	if(isset($_POST['submit'])){
		$reg=$_POST['reg_no'];
	  	$pw=$_POST['input_pwrd'];
	  	$hpw=sha1($pw);

		$query_nurse = "SELECT * FROM nurse_details WHERE id='{$reg}' AND passwords='{$pw}' ";
        $result=mysqli_query($con,$query_nurse);

        $x=mysqli_num_rows($result);
		if($x==1){
			echo "You Are A User";
			header('location:nurse_logged.php');
		}
		else{
			echo "Your entered details doesn't match with the system database";
		}

        $record=mysqli_fetch_assoc($result);
        $_SESSION['$online_nurse_name']=$record['name'];
        $_SESSION['$online_nurse_reg_no']=$record['id'];
        $_SESSION['$online_nurse_email']=$record['email'];
        $_SESSION['$online_nurse_address']=$record['address'];
        //echo "{$_SESSION['$online_user']}" ;
        //print_r($record);
		// YOU CAN PRINT ARRAY INDEX ONLY BY USING PRINT_R FUNCTION... CANT BY ECHO KEYWORD. BECAUSE IT WAS A ARRAY.
		
	}
 ?>

<html>
<head> 
<style type="text/css">
.login{
	width:100%;
	height:700px;
	background: url("../img/8.jpg") no-repeat center center fixed;
	-webkit-background-size:cover;
	-moz-background-size: cover;
	-o-background-size:cover;
	background-size:cover;
}
.details input{
	width:25%;
	height:50px;
	margin-left:100px;
	margin-bottom:30px;
	margin-top:200px;
	border:2px solid blue;
	border-radius:25px;
	padding-left:50px;


}
.submission input,button{
	width:15%;
	height:50px;
	margin-left:120px;
	border:2px solid blue;
	border-radius:15px;

}
	</style>
	<title>Log in</title>
</head>
<body style="margin:0px;">
	<div class="login">
	<div class="details">
		<form action="" method="post">
			<input type="text" name="reg_no" placeholder="Enter Your Registration Number" required>
			<input type="password" name="input_pwrd" placeholder="Enter Your Password" required>
			<!-- <input type="text" name="lecture" placeholder="Enter the lecture code"> -->
		</div><!-- details -->
		<div class="submission">  
			<input type="submit" name="submit" value="Confirm">
			<input type="reset" value="Reset">
		</form>
	</div><!-- submission -->
	</div><!-- login -->
</body>
</html>



 
 