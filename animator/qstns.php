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
<li> <a href="todo.php">ToDoList</a></li>
            <li> <a href="speakers.php">Speakers</a></li>
            <li> <a href="addmemo.php">Add a Memo</a></li>

            <li> <a href="memo.php">Memo</a></li>
            <li> <a href="qstns.php">Questions</a></li>
            <li> <a href="sponsors.php">Sponsores</a></li>

</center>
            </ul>
				
        </div>		<div class="wrap-contact100">
				<span class="contact100-form-title">
                    Questions
				</span>
                <div ><!-- panel-body begin -->
                <div><!-- table-responsive begin -->
                    <table border="solid" width="100%"  ><!-- table table-striped table-bqsted table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> <center> name </center> </th>
                                <th> <center> speaker </center> </th>
                                <th> <center> Question </center> </th>
                                <th> <center> asked </center> </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_qsts = "select * from questions where statu='ok'";
                                
                                $run_qsts = mysqli_query($con,$get_qsts);
          
                                while($row_qst=mysqli_fetch_array($run_qsts)){
                                    
                                    $qst_id = $row_qst['id'];
                                    
                                    $name = $row_qst['name'];
                                    
                                    $speaker_id = $row_qst['speaker'];
                                    
                                    $qst = $row_qst['qst'];
                                    
                                    $statu = $row_qst['statu'];
                                 

                                    
                                    $get_speakers = "select * from speakers where id='$speaker_id'";
                                    
                                    $run_speakers = mysqli_query($con,$get_speakers);
                                    
                                    $row_speakers = mysqli_fetch_array($run_speakers);
                                    
                                    $speaker_name = $row_speakers['speaker'];

                                    
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td><center> <?php echo $name; ?> </center> </td>
                                <td><center> <?php echo $speaker_name; ?></center> </td>
                                <td><center> <?php echo $qst; ?></center></td>

                                <td> 
                                    <center> 
                                     <a style="color:red" href="asked.php?id=<?php echo $qst_id; ?>" >
                                     
                                        Confirm
                                    
                                     </a> 
                                    </center>
                                </td>                               

                              
                                </tr><!-- tr finish -->
                                                    
                                        <?php }  ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bqsted table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
				
		</div>
	</div>



</body>
</html>