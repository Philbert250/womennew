
<?php
 
 include './connection.php';
   
 session_start();
   
 $admin_id=$_SESSION['adminid'];
 $admin_username=$_SESSION['adminusername'];
 $admin_email=$_SESSION['adminemail'];
 $admin_phone=$_SESSION['adminphone'];
 $admin_password=$_SESSION['adminpassword'];
 $admin_role=$_SESSION['adminrole'];

 $sel=$conn->query("SELECT * FROM admin where email='$admin_email' and role='admin' ");
 while($rows=mysqli_fetch_array($sel)){
   $us=$rows['email']; $role=$rows['role'];
 }

  if ($admin_email=='' or $role !='admin') {
  echo "<script>window.location.replace('signout.php')</script>";
  }


 ?>