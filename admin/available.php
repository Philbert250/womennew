<?php
include './connection.php';
include 'admin_session.php'; 

if (isset($_GET['availproduct'])){
	$del_id=$_GET['availproduct'];
	$del_quer=mysqli_query($conn,"UPDATE product SET 
    status='available' WHERE product_id=$del_id;");	 
    if ($del_quer) {
        $ins=mysqli_query($conn,"INSERT INTO jibustock(
            product_id,
            quantity,
            admin_id
        ) VALUES (
            '$del_id',
            '0',
            '$admin_id'
        )");
        if ($ins) {
            echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
            header("location:productall.php");
        }
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:productall.php");
    }
}

if (isset($_GET['notavailproduct'])){
	$del_id=$_GET['notavailproduct'];
	$del_quer=mysqli_query($conn,"UPDATE product SET 
    status='not available' WHERE product_id=$del_id;");	 
    if ($del_quer) {
        $del_quer=mysqli_query($conn,"DELETE FROM jibustock WHERE product_id='$del_id' ");
        if ($del_quer) {
            echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
            header("location:productall.php");
        }
    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:productall.php");
    }
}

if (isset($_GET['makeapprove'])){
	$del_id=$_GET['makeapprove'];
	$del_quer=mysqli_query($conn,"UPDATE  ordertable SET 
    status='approved' WHERE order_id=$del_id;");	 
    if ($del_quer) {
    
            echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
            header("location:allorder.php");

    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:allorder.php");
    }
}
if (isset($_GET['noteapprove'])){
	$del_id=$_GET['noteapprove'];
	$del_quer=mysqli_query($conn,"UPDATE  ordertable SET 
    status='not approved' WHERE order_id=$del_id;");	 
    if ($del_quer) {
    
            echo "<script type='text/javascript'>alert(' Deleted! Successfully!')</script>";   
            header("location:allorder.php");

    }
    else {
        
		?>
        <script type="text/javascript">alert('Delete failed!')</script>
        <?php
        header("location:allorder.php");
    }
}
?>