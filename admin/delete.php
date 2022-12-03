<?php
include './connection.php';

if (isset($_GET['delhealth'])){
	$del_id=$_GET['delhealth'];
	$del_quer=mysqli_query($conn,"DELETE FROM healthcenter WHERE id='$del_id' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:healthcenterall.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:healthcenterall.php");
    }
}
if (isset($_GET['deldoctor'])){
	$del_id=$_GET['deldoctor'];
	$del_quer=mysqli_query($conn,"DELETE FROM doctor WHERE id='$del_id' ");	 
    if ($del_quer) {
        
        echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
        header("location:doctorall.php");
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:doctorall.php");
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