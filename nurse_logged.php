<?php
session_start();   
require_once("connection.php");

if(isset($_POST['submit'])){
    $r = $_POST['baby_reg_no'];
    $n = $_POST['baby_name'];
    $w= $_POST['weight'];
    $h = $_POST['height'];
    $a= $_POST['age'];
    $o = $_POST['others'];
    $nd_name = $_SESSION['$online_nurse_name'];
    $nd_id = $_SESSION['$online_nurse_reg_no'];
    
    $query_valid_baby_checking="SELECT * FROM reacc_details WHERE registration_no='{$r}' AND names='{$n}' ";
    $result=mysqli_query($con,$query_valid_baby_checking);
    if(mysqli_num_rows($result)==1)
    {
       // echo "ok";
        $query_baby_weight="INSERT INTO baby_weight_details (baby_registration_no , baby_names , weights , heights , ages , others, nurser_name, nurse_id)
        VALUES('$r', '$n', '$w', '$h', '$a', '$o', '$nd_name', '$nd_id')";
        $result=mysqli_query($con,$query_baby_weight);

        if(empty($result)){
            echo "query failed";
           
        }
        else {
            header('location:nurse_logged.php');
            //echo "query failed";
        }
    }else { echo "please check again baby's reg no and name";}
  
 }


?>

<html>  
<head>  
</head>
<body>
    <h2>welcome <?php echo "{$_SESSION['$online_nurse_name']}" ; ?> </h2>

    <form action="" method="post">
        <input type="text" name="baby_reg_no" placeholder="reg_no"><br>
        <input type="text" name="baby_name" placeholder="name"><br>
        <input type="text" name="weight" placeholder="weight"><br>
        <input type="text" name="height" placeholder="height"><br>
        <input type="text" name="age" placeholder="age"><br>
        <input type="text" name="others" placeholder="others"><br>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
        
    </form>
</body>
</html>