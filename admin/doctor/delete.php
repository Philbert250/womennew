<?php
include '../connection.php';

if (isset($_GET['delwoman'])){
	$del_id=$_GET['delwoman'];
	$del_quer=mysqli_query($conn,"DELETE FROM parent WHERE id='$del_id' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:womanall.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:womanall.php");
    }
}
if (isset($_GET['delvacci'])){
	$del_id=$_GET['delvacci'];
	$del_quer=mysqli_query($conn,"DELETE FROM vaccine WHERE id='$del_id' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:vaccineall.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:vaccineall.php");
    }
}
if (isset($_GET['delagent'])){
	$del_id=$_GET['delagent'];
	$del_quer=mysqli_query($conn,"DELETE FROM adversor WHERE id='$del_id' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:agentall.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:agentall.php");
    }
}
if (isset($_GET['deltransfer'])){
	$del_id=$_GET['deltransfer'];
	$del_quer=mysqli_query($conn,"DELETE FROM  tranfer WHERE id='$del_id' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:tranferall.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:tranferall.php");
    }
}
?>