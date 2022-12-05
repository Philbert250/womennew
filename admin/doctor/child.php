<?php
include 'navbar.php'; 
if (isset($_POST['registerwoman'])){   
    $woman=$_POST['woman'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $status=$_POST['status'];
    $sql=mysqli_query($conn,"INSERT INTO childborn(
        parentid,
        firstname,
        lastname,
        gender,
        dob,
        status
    ) VALUES (
        '$woman',
        '$firstname',
        '$lastname',
        '$gender',
        '$dob',
        '$status'
    )");
    if ($sql) {
        $successmessage .='Register new born, Successfull';	
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
                    <h4 class="card-title">Register New Child</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="childall.php" class=" float-right btn btn-primary mr-2">All Children</a>
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
                        <label for="exampleInputUsername1">Parent</label>
                        <select name="woman" class="form-control" >
                        <?php
                            $quer=mysqli_query($conn,"SELECT * FROM parent");
                            while ($row=mysqli_fetch_array($quer)){
                            ?>  
                                <option value="<?php echo $row['id'] ; ?>"><?php echo $row['name'] ; ?></option>
                            <?php
                        }
                            ?>
                        </select>
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Child First Name</label>
                        <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Last Name</label>
                        <input type="text" name="lastname" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Gender</label>
                        <select name="gender" class="form-control" id="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Date of birth</label>
                        <input type="date" name="dob" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Status</label>
                        <select name="status" class="form-control" id="">
                            <option value="Child Born">Child Born</option>
                            <option value="Child Died">Child Died</option>
                            <option value="Mother Died">Mother Died</option>
                            <option value="All Died">ALl Died</option>
                        </select>
                        </div>
                    </div>
                    <button type="submit" name="registerwoman" class="btn btn-primary mr-2">New Woman</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
include 'footer.php'; 
?>