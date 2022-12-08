
<?php
 include 'navbar.php';
?>

<?php
 
 $seri_id=$_GET['updatevaccine'];
 if (isset($_POST['updatvaccine'])){
    
   
    $woman=$_POST['woman'];
    $vaccine=$_POST['vaccine'];
    $dose=$_POST['dose']; 
    $period=$_POST['period'];
    $nextperiod=$_POST['nextperiod'];
    $comment=$_POST['comment']; 
    $sql=mysqli_query($conn,"UPDATE vaccine SET 
     woman='$woman',
     vaccine='$vaccine', 
     dose='$dose', 
     period='$period',
     nextperiod='$nextperiod', 
     comment='$comment'
     WHERE id=$seri_id;");
   if ($sql) {
       $successmessage .=' update  Successefully';	
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
                        <a href="vaccineall.php" class=" float-right btn btn-primary mr-2">All Record</a>
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
                                                if (isset($_GET['updatevaccine'])) {
                                                    $recp_id=$_GET['updatevaccine'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM vaccine WHERE vaccine.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                       <form method="post" action="" class="forms-sample">
                                                            <div class="row">
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Woman</label>
                                                                <select name="woman" class="form-control" >
                                                                <?php
                                                                    $idher=$row['woman'];
                                                                    $querry=mysqli_query($conn,"SELECT * FROM parent WHERE id=$idher");
                                                                    while ($rowwy=mysqli_fetch_array($querry)){
                                                                    ?>  
                                                                        <option value="<?php echo $rowwy['id'] ; ?>"><?php echo $rowwy['name'] ; ?></option>
                                                                    <?php
                                                                }
                                                                    ?>
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
                                                                <label for="exampleInputUsername1">Name of vaccine</label>
                                                                <input type="text" name="vaccine" value="<?php echo $row['vaccine']; ?>" class="form-control" id="">
                                                                
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Dose</label>
                                                                <input type="number" name="dose" value="<?php echo $row['dose']; ?>" class="form-control" id="">
                                                                
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Date/period</label>
                                                                <input type="date" name="period" value="<?php echo $row['period']; ?>" class="form-control" id="">
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Next Date/period </label>
                                                                <input type="date" name="nextperiod" value="<?php echo $row['nextperiod']; ?>" class="form-control" id="">
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Comment</label>
                                                                <textarea name="comment" class="form-control"><?php echo $row['comment']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <button type="submit" name="updatvaccine" class="btn btn-primary mr-2">Update</button>
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