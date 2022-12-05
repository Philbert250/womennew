<?php

include './connection.php'; 
require_once __DIR__ . './vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$getid=$_GET['id'];

$html='
<span>'.$todaydate.'</span>
<h2>Women Pregnancy Monitoring</h2>
<br>
<br>
<h5>Our doctors</h5>
<table  border="1">
<tr>

<th>Names</th>
<th>Gender</th>
<th>Phone</th>
<th>Email</th>
<th>dob</th>
<th>health center </th>
</tr>
  ';
  $quer=mysqli_query($conn,"SELECT * FROM doctor");
  while ($row=mysqli_fetch_array($quer)){
      $id=$row['id'];
      $name=$row['name'];
      $gender=$row['gender'];
      $phone=$row['phone'];
      $email=$row['email'];
      $dob=$row['dob'];
      $password=$row['password'];
      $registtime=$row['registtime'];
      $productid=$row['healthcenter'];
      $quertwo=mysqli_query($conn,"SELECT * FROM healthcenter WHERE id=$productid");
      $rowtwo=mysqli_fetch_array($quertwo);
      $healthcenter=$rowtwo['centername'] ;
    $html .='
  ';
  }
  $html .='
  <tr>
      <td>'.$name.'</td>
      <td>'.$gender.'</td>
      <td>'.$phone.'</td>
      <td>'.$email.'</td>
      <td>'.$dob.'</td>
      <td>'.$healthcenter.'</td>
  </tr>
  
</table>

<br>
<h5>All Health Center</h5>
<table border="1" >
<tr>

<th>center name</th>
<th>Location</th>
<th>Address</th>
</tr>
  ';
  $quer=mysqli_query($conn,"SELECT * FROM healthcenter");
  while ($row=mysqli_fetch_array($quer)){
      $name=$row['centername'];
      $gender=$row['location'];
      $phone=$row['address'];
      $email=$row['registdate'];
    $html .='
  ';
  }
  $html .='
  <tr>
      <td>'.$name.'</td>
      <td>'.$gender.'</td>
      <td>'.$phone.'</td>
  </tr>
  
</table>

  
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>