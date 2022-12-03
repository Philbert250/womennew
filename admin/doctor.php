<?php
include 'navbar.php'; 
if (isset($_POST['registerwoman'])){   
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $healthcenter=$_POST['healthcenter'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    if ($password==$confirmpassword) {
    $sql=mysqli_query($conn,"INSERT INTO doctor(
        name,
        gender,
        phone,
        email,
        dob,
        healthcenter,
        password
    ) VALUES (
        '$name',
        '$gender',
        '$phone',
        '$email',
        '$dob',
        '$healthcenter',
        '$password'
    )");
        if ($sql) {
           
                $successmessage="Register Doctor  Successfull !";
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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                    <h4 class="card-title">Register New Doctor</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="doctorall.php" class=" float-right btn btn-primary mr-2">All Doctor</a>
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
                        <label for="exampleInputUsername1">Doctor Name</label>
                        <input type="text" name="name" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Gender</label>
                        <select name="gender" class="form-control" id="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Phone</label>
                        <input type="text" name="phone" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="text" name="email" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Date of birth</label>
                        <input type="date" name="dob" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Health center</label>
                        <select name="healthcenter" class="form-control" >
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
                        <input type="password" name="password" class="form-control">
                        </div>
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="registerwoman" class="btn btn-primary mr-2">New Doctor</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
include 'footer.php'; 
?>