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
sponsores				</span>
                <div ><!-- panel-body begin -->
                <div><!-- table-responsive begin -->
                    <table border="solid" width="100%"  ><!-- table table-striped table-bsponsoreed table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th width='25%'> <center> name </center> </th>
                                <th> <center> Description </center> </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_sponsores = "select * from sponsors";
                                
                                $run_sponsores = mysqli_query($con,$get_sponsores);
          
                                while($row_sponsore=mysqli_fetch_array($run_sponsores)){
                                    
                                    $id = $row_sponsore['id'];
                                    $name = $row_sponsore['name'];
                                    
                                    $txt = $row_sponsore['txt'];

                            ?>
                            
                            <tr><!-- tr begin -->
                                <td width='25%'><center> <?php echo $name; ?> </center> </td>
                                <td width='75%'><center> <?php echo $txt; ?> </center> </td>

                                                   

                              
                                </tr><!-- tr finish -->
                                                    
                                        <?php }  ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bsponsoreed table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
				
		</div>
	</div>



</body>
</html>