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
<li> <a href="msgs.php">Check messgess</a></li>
            <li> <a href="addmsg.php">Add a message</a></li>
          
</center>
            </ul>
				
        </div>
		<div class="wrap-contact100">
				<span class="contact100-form-title">
                My princess messages
				</span>
                <div ><!-- panel-body begin -->
                <div><!-- table-responsive begin -->
                    <table border="solid" width="100%"  ><!-- table table-striped table-bqsted table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> <center> Message </center> </th>
                              <th><center> Remove </center></th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_qsts = "select * from best_messages";
                                
                                $run_qsts = mysqli_query($con,$get_qsts);
          
                                while($row_qst=mysqli_fetch_array($run_qsts)){
                                    
                                    $id = $row_qst['id'];
                                    
                                    $txt = $row_qst['msg'];
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td><center> <?php echo $txt; ?> </center> </td>
                                <td> 
                                    <center> 
                                     <a style="color:red" href="remove_memo.php?id=<?php echo $id; ?>" >
                                     
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