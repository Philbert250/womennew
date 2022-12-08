
<?php
 include 'navbar.php';
?>

<?php
 
 $seri_id=$_GET['updatedoctor'];
 if (isset($_POST['registerwoman'])){
    
   
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $healthcenter=$_POST['healthcenter'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
 
    if ($password==$confirmpassword) {  $sql=mysqli_query($conn,"UPDATE doctor SET name='$name', gender='$gender', phone='$phone', email='$email', dob='$dob', healthcenter='$healthcenter', password='$password' WHERE id=$seri_id;");
   if ($sql) {
       $successmessage .=' update doctor data Successefully';	
   }
   else {
       $errormessage .='update failed!';	    
   }    

}
else {
    $errormessage .='Two passwords not match!';
}    
}
    
?>
       
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                    <h4 class="card-title">Update Doctor</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="doctorall.php" class=" float-right btn btn-primary mr-2">All Doctor</a>
                    </div>
                  </div>      
                                                <?php
                                                            if ( isset($successmessage)) {
                                                                echo '
                                                                                
                                                                    <div class="card-body">
                                                                    <ul class="list-group">
                                                                    <li class="list-group-item list-group-item-success">'.$successmessage.'</li>
                                                                    </ul>
                                                                    </div>
                                                                ';
                                                            }
                                                            ?>
                                                            <?php
                                                            if ( isset($errormessage)) {
                                                            echo '
                                                            <div class="card-body">
                                                            <ul class="list-group">
                                                            <li class="list-group-item list-group-item-success">'.$errormessage.'</li>
                                                            </ul>
                                                            </div>
                                                            ';
                                                            }
                                                            ?>

                                                    
                                            <?php
                                                if (isset($_GET['updatedoctor'])) {
                                                    $recp_id=$_GET['updatedoctor'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM doctor WHERE doctor.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                        <form method="post" action="" class="forms-sample">
                                                          <div class="row">
                                                              <div class=" col-md-4 col-xl-4 form-group">
                                                              <label for="exampleInputUsername1">Doctor Name</label>
                                                              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
                                                              </div>
                                                              <div class=" col-md-4 col-xl-4 form-group">
                                                              <label for="exampleInputUsername1">Gender</label>
                                                              <select name="gender" class="form-control" id="">
                                                                  <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                                                  <option value="Male">Male</option>
                                                                  <option value="Female">Female</option>
                                                              </select>
                                                              </div>
                                                              <div class=" col-md-4 col-xl-4 form-group">
                                                              <label for="exampleInputUsername1">Phone</label>
                                                              <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
                                                              </div>
                                                              <div class=" col-md-4 col-xl-4 form-group">
                                                              <label for="exampleInputUsername1">Email</label>
                                                              <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                                                              </div>
                                                              <div class=" col-md-4 col-xl-4 form-group">
                                                              <label for="exampleInputUsername1">Date of birth</label>
                                                              <input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control">
                                                              </div>
                                                              <div class=" col-md-4 col-xl-4 form-group">
                                                              <label for="exampleInputUsername1">Health center</label>
                                                              <select name="healthcenter" class="form-control" >
                                                              <?php
                                                                  $idhe = $row['healthcenter'];
                                                                  $quer=mysqli_query($conn,"SELECT * FROM healthcenter WHERE id=$idhe");
                                                                  while ($row=mysqli_fetch_array($quer)){
                                                                  ?>  
                                                                      <option value="<?php echo $row['id'] ; ?>"><?php echo $row['centername'] ; ?></option>
                                                                  <?php
                                                              }
                                                                  ?>
                                                              <?php
                                                                  $quer=mysqli_query($conn,"SELECT * FROM healthcenter");
                                                                  while ($row=mysqli_fetch_array($quer)){
                                                                  ?>  
                                                                      <option value="<?php echo $row['id'] ; ?>"><?php echo $row['centername'] ; ?></option>
                                                                  <?php
                                                              }
                                                                  ?>
                                                              </select>
                                                              </div>
                                                              <div class=" col-md-6 col-xl-6 form-group">
                                                              <label for="exampleInputUsername1">Password</label>
                                                              <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control">
                                                              </div>
                                                              <div class=" col-md-6 col-xl-6 form-group">
                                                              <label for="exampleInputUsername1">Confirm Password</label>
                                                              <input type="password" name="confirmpassword" value="<?php echo $row['password']; ?>" class="form-control">
                                                              </div>
                                                          </div>
                                                          <button type="submit" name="registerwoman" class="btn btn-primary mr-2">Update</button>
                                                        </form>
                                                        <?php
                                                    } 
                                                }
                                                ?>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                
                                        <?php
                                include 'footer.php'; 
                                ?>