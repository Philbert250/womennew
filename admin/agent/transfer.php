<?php
include 'navbar.php'; 
if (isset($_POST['transfer'])){   
    $woman=$_POST['woman'];
    $hospital=$_POST['hospital'];
    $deseases=$_POST['deseases'];
    $comment=$_POST['comment'];
    $sql=mysqli_query($conn,"INSERT INTO transferhealth(
        woman,
        hospital,
        problem,
        Comments,
        admin_id 
    ) VALUES (
        '$woman',
        '$hospital',
        '$deseases',
        '$comment',
        '$admin_id'
    )");
    if ($sql) {
        $successmessage .='Make transfer, Successfull';	
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
                    <h4 class="card-title">Make A Transfer for woman</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="tranferall.php" class=" float-right btn btn-primary mr-2">All Transfer</a>
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
                        <label for="exampleInputUsername1">Transfered to Health Center</label>
                        <select name="hospital" class="form-control" id="">
                            <option value="Hospital">Health Center</option>
                        </select>
                        </select>
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Report Problem</label>
                        <textarea name="deseases" class="form-control"></textarea>
                        </div>
                        <div class=" col-md-4 col-xl-4 form-group">
                        <label for="exampleInputUsername1">Comment</label>
                        <textarea name="comment" class="form-control"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="transfer" class="btn btn-primary mr-2">Make Transfer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
include 'footer.php'; 
?>