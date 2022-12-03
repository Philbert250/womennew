<?php

include './connection.php';

if (isset($_POST['login'])) {
   
    session_start();

	$email=$_POST['email'];
	$password=$_POST['password'];
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysqli_real_escape_string($conn,$email);
	$password=mysqli_real_escape_string($conn,$password);
    
	if (empty($email) || empty($password)) {
		header("location:signinagent.php?empty=Email and Password are requied");
	}
	else {
		$select=mysqli_query($conn,"SELECT * FROM doctor WHERE email='$email' AND password='$password' ") or die(mysqli_error($conn)) ;
		
        if (mysqli_num_rows($select)>0) {

	        session_regenerate_id();
	        $verfied=mysqli_fetch_assoc($select); 

	        $_SESSION['doctorid']=$verfied['id'] ;
	        $_SESSION['doctorname']=$verfied['name'] ;
	        $_SESSION['doctorgender']=$verfied['gender'] ;
	        $_SESSION['doctorphone']=$verfied['phone'] ;
	        $_SESSION['doctoremail']=$verfied['email'] ;
	        $_SESSION['doctordob']=$verfied['dob'] ;
	        $_SESSION['doctorhealthcenter']=$verfied['healthcenter'] ;
	        $_SESSION['doctorpassword']=$verfied['password'] ;
	        session_write_close();
            
            header("location:doctor/index.php");
            

		}
		else {
      $errormessage .= mysqli_error($conn);			
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Jibu</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h2>Women Pregnancy Monitoring</h2>
              </div>
              <h4>Hello, Doctor!</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="" method="post">
              <?php       
							if ( isset($errormessage)) {
							echo '
									<div class="bg-red-400 p-4">
										<div class="breadcrumb-header">
											<span>'.$errormessage.'</span>
										</div>
									</div>
							';
							}
						?> 
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.html">SIGN IN</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Forgot password? <a href="#" class="text-primary">reset</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  <a href="../index.php" class="text-primary">Go Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
