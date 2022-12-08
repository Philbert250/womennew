
<?php
 include 'navbar.php';
?>

<?php
 
 $seri_id=$_GET['updateagent'];
 if (isset($_POST['updatagent'])){
    
   
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $cell=$_POST['cell']; 
    $village=$_POST['village'];
    $role=$_POST['role']; 
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword']; 

    if ($password==$confirmpassword) {  $sql=mysqli_query($conn,"UPDATE adversor SET 
     firstname='$firstname',
     lastname='$lastname', 
     email='$email', 
     phone='$phone',
     location='$location', 
     cell='$cell',
     village='$village', 
     role='$role', 
     password='$password'
     WHERE id=$seri_id;");
   if ($sql) {
       $successmessage .=' update Successefully';	
   }
   else {
    $errormessage .= mysqli_error($conn);	      
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
                    <h4 class="card-title">Update</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="agentall.php" class=" float-right btn btn-primary mr-2">All Community Health works</a>
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
                                                if (isset($_GET['updateagent'])) {
                                                    $recp_id=$_GET['updateagent'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM adversor WHERE adversor.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                      <form method="post" action="" class="forms-sample">
                                                        <div class="row">
                                                            <div class=" col-md-6 col-xl-6 form-group">
                                                            <label for="exampleInputUsername1">First name</label>
                                                            <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control">
                                                            </div>
                                                            <div class=" col-md-6 col-xl-6 form-group">
                                                            <label for="exampleInputUsername1">Last name</label>
                                                            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" class="form-control">
                                                            </div>
                                                            <div class=" col-md-6 col-xl-6 form-group">
                                                            <label for="exampleInputUsername1">Email Address</label>
                                                            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                                                            </div>
                                                            <div class=" col-md-6 col-xl-6 form-group">
                                                            <label for="exampleInputUsername1">Phone number</label>
                                                            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
                                                            </div>
                                                            <div class=" col-md-6 col-xl-6 form-group">
                                                            <label for="exampleInputUsername1">Location Address</label>
                                                            <select name="location" class="form-control" id="">
                                                                <option value="<?php echo $row['location']; ?>"><?php echo $row['location']; ?></option>
                                                                <option value="Gishamvu">Gishamvu</option>
                                                                <option value="Karama">Karama</option>
                                                                <option value="Kinazi">Kinazi</option>
                                                                <option value="Kigoma">Kigoma</option>
                                                                <option value="Maraba">Maraba</option>
                                                                <option value="Mukura">Mukura</option>
                                                                <option value="Ngoma">Ngoma</option>
                                                                <option value="Ruhashya">Ruhashya</option>
                                                                <option value="Huye">Huye</option>
                                                                <option value="Rusatira">Rusatira</option>
                                                                <option value="Rwaniro">Rwaniro</option>
                                                                <option value="Simbi">Simbi</option>
                                                                <option value="Tumba">Tumba</option>
                                                                <option value="Mbazi">Mbazi</option>
                                                            </select>
                                                            </div>
                                                            
                                                            <div class=" col-md-6 col-xl-6 form-group">
                                                            <label for="exampleInputUsername1">Cell</label>
                                                            <input type="text" name="cell" value="<?php echo $row['cell']; ?>" class="form-control">
                                                            </div>
                                                            <div class=" col-md-4 col-xl-4 form-group">
                                                            <label for="exampleInputUsername1">Village</label>
                                                            <input type="text" name="village" value="<?php echo $row['village']; ?>" class="form-control">
                                                            </div>
                                                            <div class=" col-md-6 col-xl-6 form-group">
                                                            <label for="exampleInputUsername1">Role</label>
                                                            <select name="role" class="form-control" id="">
                                                                <option value="adversor">Adversor</option>
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
                                                        <button type="submit" name="updatagent" class="btn btn-primary mr-2">Update</button>
                                                        <button type="reset" class="btn btn-light">Cancel</button>
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