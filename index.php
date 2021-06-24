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
			<form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					Say Something!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" required placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Choose the speaker ?</span>
					<div>
					<select name="speaker"  class="form-control" required><!--form-control begin-->
                                 <option disabled selected> Select A speaker </option>
                                 <?php 
                                 $get_speakers = "select * from speakers";
                                 $run_speakers = mysqli_query($con,$get_speakers);
                                 while ($row_speakers=mysqli_fetch_array($run_speakers)){
                                     $speaker = $row_speakers['speaker'];
									 $id = $row_speakers['id'];

									 
                                     echo "
                                     <option value='$id'>
                                     
                                     $speaker 
                                      </option>
                                     ";
                                   
                                 }
                                 ?>
                             </select><!--form-control finish-->
					</div>
					<span class="focus-input100"></span>
				</div>

				

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Question</span>
					<textarea class="input100" required name="qst" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button name="submit" class="contact100-form-btn">
							<span>
								Submit
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
        
        $name = $_POST['name'];
        $speaker_id = $_POST['speaker'];
        $qst = $_POST['qst'];
        $insert_qst = "insert into questions (name,speaker,qst)value ('$name','$speaker_id','$qst')";
            
        $run_qst = mysqli_query($con,$insert_qst);
        if($run_qst){
            echo " <script>alert(' your Question has been succsefully inserted')</script> ";
        }
    }
   
?>