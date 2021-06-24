
<?php 
session_start();
$con=mysqli_connect("localhost","root","","itc_2");

?>
<?php 
    if(isset($_GET['id'])){
        
        $delete_id = $_GET['id'];
        $delete_c = "delete from questions where id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_c);
        
        if($run_delete){
            
            echo "<script>alert('One of your Question has been Deleted')</script>";
            
            echo "<script>window.open('admin.php','_self')</script>";
            
        }
        
    }

?>

