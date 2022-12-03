<?php
include 'navbar.php'; 
if (isset($_POST['registerwoman'])){   
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $location=$_POST['location'];
    $cell=$_POST['cell'];
    $village=$_POST['village'];
    $sql=mysqli_query($conn,"INSERT INTO parent(
        name,
        gender,
        dob,
        email,
        phone,
        location,
        cell,
        village,
        hospital
    ) VALUES (
        '$name',
        '$gender',
        '$dob',
        '$email',
        '$phone',
        '$location',
        '$cell',
        '$village',
        '$doctor_healthcenter'
    )");
    if ($sql) {


$subject = "Dear " . $name;
$detail = "Murakoze kugana ikogonderabuzamo, murakomeza gufata serives witabwehwo numujyana wubuzima kugeza ubyaye";
//Sending Phone Message
$msg = $subject .', '. $detail;                                               
$data = array(
"sender"=>"+250785300822",
"recipients"=>$phone,
"message"=>$msg,    
 );

$url = "https://www.intouchsms.co.rw/api/sendsms/.json";
    
$data = http_build_query ($data);

$username="philbert";
$password="champion1";
    
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

//execute post
$result = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//close connection
curl_close($ch);
 // echo "<script langauage='text/javascript'>alert('Message Sent')</script>";
//end of sending message




        $successmessage .='Register  Woman, Successfull';	
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
                    <h4 class="card-title">Register New woman</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="womanall.php" class=" float-right btn btn-primary mr-2">All Women</a>
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
                        <label for="exampleInputUsername1">Name</label>
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
                        <label for="exampleInputUsername1">Location/cell</label>
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
                        <label for="exampleInputUsername1">Cell</label>
                        <input type="text" name="cell" class="form-control">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Village</label>
                        <input type="text" name="village" class="form-control">
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