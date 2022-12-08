
<?php
 include 'navbar.php';
?>

<?php
 
 $seri_id=$_GET['updatehealth'];
 if (isset($_POST['updatehealths'])){
    
   
    $centername=$_POST['centername'];
    $location=$_POST['location'];
    $address=$_POST['address']; 
    $sql=mysqli_query($conn,"UPDATE healthcenter SET 
     centername='$centername',
     location='$location', 
     address='$address' 
     WHERE id=$seri_id;");
   if ($sql) {
       $successmessage .=' update Health center Successefully';	
   }
   else {
       $errormessage .='update failed!';	    
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
                        <a href="healthcenterall.php" class=" float-right btn btn-primary mr-2">All Health center</a>
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
                                                if (isset($_GET['updatehealth'])) {
                                                    $recp_id=$_GET['updatehealth'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM healthcenter WHERE healthcenter.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                      <form method="post" action="" class="forms-sample">
                                                            <div class="row">
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Health Center Name</label>
                                                                <input type="text" name="centername" value="<?php echo $row['centername']; ?>" class="form-control">
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Location</label>
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
                                                                    <label for="exampleInputUsername1">Health Center Address</label>
                                                                    <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control">
                                                                </div>
                                                            </div>
                                                            <button type="submit" name="updatehealths" class="btn btn-primary mr-2">Update</button>
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