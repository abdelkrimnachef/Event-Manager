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
    

	<div class="container-contact100">
		<div class="wrap-contact100">
				
            <ul>
<center>
			<li> <a href="add_todolist.php">ADD ToDoList</a></li>
            <li> <a href="todo.php">ToDoList</a></li>
            <li> <a href="admin.php">Questions</a></li>

</center>
            </ul>
				
		</div>
	
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
ToDoList				</span>

				

			
				

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Text</span>
					<textarea class="input100" required name="qst" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button name="submit" class="contact100-form-btn">
							<span>
								Save
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        
     
        $qst = $_POST['qst'];
        $insert_qst = "insert into todo (txt) value ('$qst')";
            
        $run_qst = mysqli_query($con,$insert_qst);
        if($run_qst){
            echo " <script>alert(' your Memo has been succsefully inserted')</script> ";
            echo "<script>window.open('choice.php','_self')</script>";

        }
    }
   
?>