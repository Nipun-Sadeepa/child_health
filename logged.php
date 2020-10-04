<?php
session_start();
require_once("connection.php");
//echo "{$_SESSION['$online_user']}" ;

?>

<html>
<head>
</head>
<body>
    <h3>welcome <?php echo "{$_SESSION['$online_user_name']}" ; ?></h3>
    <h3>welcome <?php echo "{$_SESSION['$online_user_reg_no']}" ; ?></h3>
    <h3>welcome <?php echo "{$_SESSION['$online_user_email']}" ; ?></h3>
    <h3>welcome <?php echo "{$_SESSION['$online_user_address']}" ; ?></h3>\
    <h1>Instructions according to this era</h1>
    <p>jhdjkhvjkfhjfhbkljklvhklfdkffklhfvkjf;jfkl</p>
    <h1>Weight chart</h1>
    
</body>
</html>


