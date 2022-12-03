<?php
include 'navbar.php'; 
if (isset($_POST['registnew'])){   
    $centername=$_POST['centername'];
    $location=$_POST['location'];
    $address=$_POST['address'];
    $sql=mysqli_query($conn,"INSERT INTO healthcenter(
        centername,
        location,
        address
    ) VALUES (
        '$centername',
        '$location',
        '$address'
    )");
    if ($sql) {
        $successmessage .='Register  Health Center, Successfull';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }
}
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              <h4 class="card-title">Health Center</h4>
              </div>
              <div class="col-md-6">
                  <a href="healthcenterall.php" class=" float-right btn btn-primary mr-2">All Health Center</a>
              </div>
            </div>
            <?php
          if ( isset($successmessage)) {
              echo '
              <div class="row">
                  <div class="col-md-12 col-xl-12">
                      <span style="color:white;  background:green; padding:8px;">'.$successmessage.'</span>
                  </div>
              </div>
              <br>
              ';
          }
          ?>
          <?php
          if ( isset($errormessage)) {
              echo '
              <div class="row">
                  <div class="col-md-12 col-xl-12">
                      <span style="color:white;  background:red; padding:8px;">'.$errormessage.'</span>
                  </div>
              </div>
              <br>
              ';
          }
          ?>
                  <form method="post" action="" class="forms-sample">
                    <div class="row">
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Health Center Name</label>
                        <input type="text" name="centername" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Location</label>
                        <select name="location" class="form-control" id="">
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
                            <input type="text" name="address" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="registnew" class="btn btn-primary mr-2">Regist New</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
include 'footer.php'; 
?>