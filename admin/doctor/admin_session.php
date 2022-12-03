
<?php
 
 include '../connection.php';
   
 session_start();
   
 $doctor_id=$_SESSION['doctorid'];
 $doctor_name=$_SESSION['doctorname'];
 $doctor_gender=$_SESSION['doctorgender'];
 $doctor_phone=$_SESSION['doctorphone'];
 $doctor_email=$_SESSION['doctoremail'];
 $doctor_dob=$_SESSION['doctordob'];
 $doctor_healthcenter=$_SESSION['doctorhealthcenter'];
 $doctor_password=$_SESSION['doctorpassword'];

 $sel=$conn->query("SELECT * FROM doctor where email='$doctor_email' ");
 while($rows=mysqli_fetch_array($sel)){
   $us=$rows['email'];
 }

  if ($doctor_email=='') {
  echo "<script>window.location.replace('signout.php')</script>";
  }


 ?>