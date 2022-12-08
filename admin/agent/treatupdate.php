
<?php
 include 'navbar.php';
?>

<?php
 
 $seri_id=$_GET['updatetreat'];
 if (isset($_POST['updateTreat'])){
    
   
    $woman=$_POST['woman'];
    $treat=$_POST['treat'];
    $dose=$_POST['dose'];
    $advice=$_POST['advice'];
    $period=$_POST['period'];
    $nextperiod=$_POST['nextperiod']; 
    $comment=$_POST['comment'];

    $sql=mysqli_query($conn,"UPDATE event SET 
     woman='$woman',
     treat='$treat',
     dose='$dose',
     advice='$advice',
     period='$period',
     nextperiod='$nextperiod',
     comment='$comment'
     WHERE id=$seri_id;");
   if ($sql) {
       $successmessage .='Update Successefully';	
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
                        <a href="treatall.php" class=" float-right btn btn-primary mr-2">All records</a>
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
                                                if (isset($_GET['updatetreat'])) {
                                                    $recp_id=$_GET['updatetreat'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM event WHERE event.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                      <form method="post" action="" class="forms-sample">
                                                            <div class="row">
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Woman</label>
                                                                <select name="woman" class="form-control" >
                                                                <?php
                                                                    $querr=mysqli_query($conn,"SELECT * FROM parent");
                                                                    while ($roww=mysqli_fetch_array($querr)){
                                                                    ?>  
                                                                        <option value="<?php echo $roww['id'] ; ?>"><?php echo $roww['name'] ; ?></option>
                                                                    <?php
                                                                }
                                                                    ?>
                                                                </select>
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Name of Event</label>
                                                                <input type="text" name="treat" value="<?php echo $row['treat']; ?>" class="form-control" id="">
                                                                
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                    <label for="exampleInputUsername1">Dose</label>
                                                                    <input type="number" name="dose" value="<?php echo $row['dose']; ?>" class="form-control" id="">
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Advice sent</label>
                                                                <textarea name="advice"  class="form-control"><?php echo $row['advice']; ?></textarea>
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Period</label>
                                                                <input type="date" name="period" value="<?php echo $row['period']; ?>" class="form-control" id="">
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Next Period</label>
                                                                <input type="date" name="nextperiod" value="<?php echo $row['nextperiod']; ?>" class="form-control" id="">
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Comment</label>
                                                                <textarea name="comment" class="form-control"><?php echo $row['comment']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <button type="submit" name="updateTreat" class="btn btn-primary mr-2">Update</button>
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