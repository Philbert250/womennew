<?php
include '../connection.php';

if (isset($_GET['deltreat'])){
	$del_id=$_GET['deltreat'];
	$del_quer=mysqli_query($conn,"DELETE FROM event WHERE id='$del_id' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:treatall.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:treatall.php");
    }
}
?>