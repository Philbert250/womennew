
<?php
 include 'navbar.php';
?>

<?php
 
 $seri_id=$_GET['updatewomen'];
 if (isset($_POST['upwoman'])){
    
   
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone']; 
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $location=$_POST['location']; 
    $cell=$_POST['cell'];
    $village=$_POST['village']; 
    $sql=mysqli_query($conn,"UPDATE parent SET 
     name='$name',
     gender='$gender', 
     phone='$phone', 
     email='$email',
     dob='$dob', 
     location='$location',
     cell='$cell', 
     village='$village'  
     WHERE id=$seri_id;");
   if ($sql) {
       $successmessage .=' update  Successefully';	
   }
   else {
    $errormessage .= mysqli_error($conn);	      
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
                        <a href="womanall.php" class=" float-right btn btn-primary mr-2">All Parent</a>
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
                                                if (isset($_GET['updatewomen'])) {
                                                    $recp_id=$_GET['updatewomen'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM parent WHERE parent.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                      <form method="post" action="" class="forms-sample">
                                                        <div class="row">
                                                            <div class=" col-md-4 col-xl-4 form-group">
                                                            <label for="exampleInputUsername1">Name</label>
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
                                                            <label for="exampleInputUsername1">Location/cell</label>
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
                                                            <div class=" col-md-4 col-xl-4 form-group">
                                                            <label for="exampleInputUsername1">Cell</label>
                                                            <input type="text" name="cell" value="<?php echo $row['cell']; ?>" class="form-control">
                                                            </div>
                                                            <div class=" col-md-4 col-xl-4 form-group">
                                                            <label for="exampleInputUsername1">Village</label>
                                                            <input type="text" name="village" value="<?php echo $row['village']; ?>" class="form-control">
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="upwoman" class="btn btn-primary mr-2">Update</button>
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