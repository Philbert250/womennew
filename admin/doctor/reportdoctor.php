<?php

include './../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$getid=$_GET['id'];

$html='
<span>'.$todaydate.'</span>
<h2>Women Pregnancy Monitoring</h2>
<br>
<br>
<h5>Our Parent</h5>
<table  border="1">
<tr>

<th>Names</th>
<th>Gender</th>
<th>Phone</th>
<th>Email</th>
<th>dob</th>
<th>health center </th>
<th>cell</th>
<th>village</th>
</tr>
  ';
  $quer=mysqli_query($conn,"SELECT * FROM parent");
  while ($row=mysqli_fetch_array($quer)){
      $id=$row['id'];
      $name=$row['name'];
      $gender=$row['gender'];
      $phone=$row['phone'];
      $email=$row['email'];
      $dob=$row['dob'];
      $registtime=$row['registtime'];
      $productid=$row['hospital'];
      $quertwo=mysqli_query($conn,"SELECT * FROM healthcenter WHERE id=$productid");
      $rowtwo=mysqli_fetch_array($quertwo);
      $healthcenter=$rowtwo['centername'] ;
      $cell=$row['cell'];
      $village=$row['village'];
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
      <td>'.$cell.'</td>
      <td>'.$village.'</td>
  </tr>
  
</table>

<br>
<h5>All Children</h5>
<table border="1" >
<tr>

<th>mother</th>
<th>first name</th>
<th>last name</th>
<th>dob</th>
<th>status</th>
<th>Address</th>
</tr>
  ';
  $quer=mysqli_query($conn,"SELECT * FROM childborn");
  while ($row=mysqli_fetch_array($quer)){
      $firstname=$row['firstname'];
      $lastname=$row['lastname'];
      $gender=$row['gender'];
      $productid=$row['parentid'];
      $quertwo=mysqli_query($conn,"SELECT * FROM parent WHERE id=$productid");
      $rowtwo=mysqli_fetch_array($quertwo);
      $mother=$rowtwo['name'] ;
      $dob=$row['dob'];
      $status=$row['status'];
    $html .='
  ';
  }
  $html .='
  <tr>
  <td>'.$mother.'</td>
      <td>'.$firstname.'</td>
      <td>'.$lastname.'</td>
      <td>'.$gender.'</td>
      <td>'.$dob.'</td>
      <td>'.$status.'</td>
  </tr>
  
</table>

<br>
<h5>Community Health works</h5>
<table border="1" >
<tr>
<th>first name</th>
<th>last name</th>
<th>email</th>
<th>phone</th>
<th>location</th>
<th>cell</th>
<th>village</th>
<th>hospital</th>
</tr>
  ';
  $quer=mysqli_query($conn,"SELECT * FROM adversor");
  while ($row=mysqli_fetch_array($quer)){
      $firstname=$row['firstname'];
      $lastname=$row['lastname'];
      $email=$row['email'];
      $phone=$row['phone'];
      $location=$row['location'];
      $email=$row['email'];
      $hospital=$row['hospital'];
      $quertwo=mysqli_query($conn,"SELECT * FROM healthcenter WHERE id=$hospital");
      $rowtwo=mysqli_fetch_array($quertwo);
      $hospital1=$rowtwo['centername'] ;
      $dob=$row['dob'];
      $cell=$row['cell'];
      $village=$row['village'];
    $html .='
  ';
  }
  $html .='
  <tr>
      <td>'.$firstname.'</td>
      <td>'.$lastname.'</td>
      <td>'.$email.'</td>
      <td>'.$gender.'</td>
      <td>'.$location.'</td>
      <td>'.$cell.'</td>
      <td>'.$village.'</td>
      <td>'.$hospital1.'</td>
  </tr>
  
</table>

  
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>