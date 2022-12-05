<?php
include 'navbar.php'; 
if (isset($_POST['transfer'])){   
    $woman=$_POST['woman'];
    $phone=$_POST['phone'];
    $vaccine=$_POST['vaccine'];
    $dose=$_POST['dose'];
    $period=$_POST['period'];
    $nextperiod=$_POST['nextperiod'];
    $comment=$_POST['comment'];
    $sql=mysqli_query($conn,"INSERT INTO vaccine(
        woman,
        vaccine,
        dose,
        period,
        nextperiod,
        comment,
        admin_id 
    ) VALUES (
        '$woman',
        '$vaccine',
        '$dose',
        '$period',
        '$nextperiod',
        '$comment',
        '$admin_id'
    )");
    if ($sql) {
        
$subject = "Muraho neza " . $name;
$detail = "Murakoze kugana Gufata Urukingo kukigondebuzima, murakomeza gufata serives witabwehwo numujyana wubuzima kugeza ubyaye";
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



        $successmessage .='Take Vaccine, Successfull';	
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
                    <h4 class="card-title">Service of Vaccine</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="vaccineall.php" class=" float-right btn btn-primary mr-2">All Vaccine</a>
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
                        <label for="exampleInputUsername1">Woman</label>
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
                        <label for="exampleInputUsername1">Phone number</label>
                        <input type="text" name="phone" class="form-control" id="">
                        
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Name of vaccine</label>
                        <input type="text" name="vaccine" class="form-control" id="">
                        
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Dose</label>
                        <input type="number" name="dose" class="form-control" id="">
                        
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Date/period</label>
                        <input type="date" name="period" class="form-control" id="">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Next Date/period </label>
                        <input type="date" name="nextperiod" class="form-control" id="">
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Comment</label>
                        <textarea name="comment" class="form-control"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="transfer" class="btn btn-primary mr-2">Take Vaccine</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
include 'footer.php'; 
?>