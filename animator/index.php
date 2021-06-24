<?php
$con=mysqli_connect("localhost","root","","itc_2")
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>ITC 2 Talks</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
<body>
    <center>
        
<div class="container-contact100">
		
    <div class="container"><!--container begin -->
        <form action="" class="form-login" method="post"><!--form-login begin -->
            <h2 class="form-login-heading"> <i class="fa fa-user"></i> animator Log-In</h2>
            <br>
            <input type="password" class="form-control" placeholder="user_name" name="user_name" required>
            <br>
            <br>
            <input type="password"  class="form-control" placeholder="pass" name="pass" required>
            <br>

            <br>
            <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!--btn btn-lg btn-primaty btn block begin -->
                Login
            </button><!--btn btn-lg btn-primaty btn block finnish -->
        </form><!--form-login finnish -->
    </div><!--container finnish -->
</body>
</html>
<?php
if(isset($_POST['admin_login'])){
    $admin_email = mysqli_real_escape_string($con,$_POST['user_name']);
    $admin_pass = mysqli_real_escape_string($con,$_POST['pass']);
    $get_admin = "select * from animator where user_name='$admin_email' AND pass='$admin_pass'";
    $run_admin = mysqli_query($con,$get_admin);
    $count = mysqli_num_rows($run_admin);
    if($count==1){

        
        $_SESSION['admin_email']=$admin_email;
        echo "<script>alert('Logged In, Welcome Back')</script>";
        echo "<script>window.open('choice.php','_self')</script>";
    }else{
        echo "<script>alert('Email or PassWord Is Wrong')</script>";
    }
        
    }
?>
</center>