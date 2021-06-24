<?php 
session_start();
$con=mysqli_connect("localhost","root","","itc_2");
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
				<span class="contact100-form-title">
                View Questions				</span>
                    <table border="solid" width="100%"  ><!-- table table-striped table-bqsted table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                            <th> No: </th>
                                <th> name: </th>
                                <th> speaker: </th>
                                <th> Question: </th>
                                <th> confirm: </th>
                                <th>Statu</th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_qsts = "select * from questions";
                                
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

                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $name; ?> </td>
                                <td> <?php echo $speaker_name; ?> </td>
                                <td> <?php echo $qst; ?></td>
                                <td> <?php echo $statu; ?> </td>
                                <td> 
                                     
                                     <a href="confirm.php?id=<?php echo $qst_id; ?>" >
                                     
                                        Confirm
                                    
                                     </a> 
                                     
                                </td>                                <td> 
                                     
                                     <a href="delete_qst.php?id=<?php echo $qst_id; ?>" >
                                     
                                        Delete
                                    
                                     </a> 
                                     
                                </td>

                              
                                </tr><!-- tr finish -->
                                                    
                                        <?php }  ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bqsted table-hover finish -->
                </div><!-- table-responsive finish -->
            
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

       



</body>
</html>