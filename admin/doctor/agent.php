<?php
include 'navbar.php'; 
if (isset($_POST['registeragent'])){   
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $role=$_POST['role'];
    $cell=$_POST['cell'];
    $village=$_POST['village'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    if ($password==$confirmpassword) {
        $sql=mysqli_query($conn,"INSERT INTO adversor(
            firstname,
            lastname,
            email,
            phone,
            location,
            role,
            cell,
            village,
            hospital,
            password,
            admin_id
        ) VALUES (
            '$firstname',
            '$lastname',
            '$email',
            '$phone',
            '$location',
            '$role',
            '$cell',
            '$village',
            '$doctor_healthcenter',
            '$password',
            '$admin_id'
        )");
        if ($sql) {
                $successmessage="Adversor Register Successfull!";
           
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
                    <h4 class="card-title">Register New Community Health works</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="agentall.php" class=" float-right btn btn-primary mr-2">All Community Health works </a>
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
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">First name</label>
                        <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">Last name</label>
                        <input type="text" name="lastname" class="form-control">
                        </div>
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">Email Address</label>
                        <input type="text" name="email" class="form-control">
                        </div>
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">Phone number</label>
                        <input type="text" name="phone" class="form-control">
                        </div>
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">Location Address</label>
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
                        
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">Cell</label>
                        <input type="text" name="cell" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Village</label>
                        <input type="text" name="village" class="form-control">
                        </div>
                        <div class=" col-md-6 col-xl-6 form-group">
                        <label for="exampleInputUsername1">Role</label>
                        <select name="role" class="form-control" id="">
                            <option value="adversor">Adversor</option>
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
                    <button type="submit" name="registeragent" class="btn btn-primary mr-2">New Adversor</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
include 'footer.php'; 
?>