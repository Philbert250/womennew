
<?php
 
 include '../connection.php';
   
 session_start();
   
 $agent_id=$_SESSION['agentid'];
 $agent_firstname=$_SESSION['agentfirstname'];
 $agent_lastname=$_SESSION['agentlastname'];
 $agent_email=$_SESSION['agentemail'];
 $agent_phone=$_SESSION['agentphone'];
 $agent_locaction=$_SESSION['agentlocaction'];
 $agent_role=$_SESSION['agentrole'];
 $agent_password=$_SESSION['agentpassword'];

 $sel=$conn->query("SELECT * FROM adversor where email='$agent_email' and role='adversor' ");
 while($rows=mysqli_fetch_array($sel)){
   $us=$rows['email']; $role=$rows['role'];
 }

  if ($agent_email=='' or $role !='adversor') {
  echo "<script>window.location.replace('signout.php')</script>";
  }


 ?>