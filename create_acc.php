<?php 
include_once("connection.php");
		
if(isset($_POST['submit'])){
		if($_POST['pwrd']==$_POST['re_pwrd']){
			$r = $_POST['reg_no'];
            $name= $_POST['name'];
            $e = $_POST['email'];
			$add= $_POST['address'];
			$area = $_POST['area'];
			$pwrd = $_POST['pwrd'];
			
			$hp= sha1($pwrd);

			$query1="INSERT INTO reacc_details(registration_no , names , email , addressdb , areas , passworddb)
					VALUES('$r', '$name', '$e', '$add', '$area', '$pwrd')";
            $result=mysqli_query($con,$query1);
            header('location:log_in.php');
			if($result){
				//echo "query success";
			}
			else {
				echo "query failed";
			}
		}
		else{
			echo "Password doesn't matched";
		}
}
		function a(){
			header('location:log_in.php');
		}

?>


<html>
<head>
</head>
<body>
    <div class="form">
    <form action="" method="POST">
        <input type="text" name="reg_no" placeholder="enter baby reg no" required> <br><br>
        <input type="text" name="name" placeholder="baby name" required> <br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="text" name="address" placeholder="your adress" required><br><br>
        <input type="text" name="area" placeholder="your area" required><br><br>
        <input type="text" name="pwrd" placeholder="password" required><br><br>
        <input type="text" name="re_pwrd" placeholder="re-enter password" required><br><br>
        </div> <!-- form -->
    <div class="submit">
        <input type="submit" name="submit">
        <input type="reset" name="reset">
        </div> <!-- submit -->
    </form>
</body>
</html>