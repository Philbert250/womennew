
<?php
 include 'navbar.php';
?>

<?php
 
 $seri_id=$_GET['updatetransfer'];
 if (isset($_POST['updatetransfers'])){
    
   
    $woman=$_POST['woman'];
    $sponsor=$_POST['sponsor'];
    $hospital=$_POST['hospital']; 
    $deseases=$_POST['deseases'];
    $comment=$_POST['comment'];
    $sql=mysqli_query($conn,"UPDATE tranfer SET 
     woman='$woman',
     sponsor='$sponsor', 
     hospital='$hospital', 
     deseases='$deseases',
     Comments='$comment'
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
                        <a href="tranferall.php" class=" float-right btn btn-primary mr-2">All Record</a>
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
                                                if (isset($_GET['updatetransfer'])) {
                                                    $recp_id=$_GET['updatetransfer'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM tranfer WHERE tranfer.id=$recp_id");
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
                                                                    while ($rowx=mysqli_fetch_array($querr)){
                                                                    ?>  
                                                                        <option value="<?php echo $rowx['id'] ; ?>"><?php echo $rowx['name'] ; ?></option>
                                                                    <?php
                                                                }
                                                                    ?>
                                                                </select>
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Woman Sponsor</label>
                                                                <input type="text" name="sponsor" value="<?php echo $row['sponsor'] ; ?>" class="form-control" id="">
                                                                
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Transfered to (hospital name)</label>
                                                                <input type="text" name="hospital" value="<?php echo $row['hospital'] ; ?>" class="form-control" id="">
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Deseases</label>
                                                                <textarea name="deseases" class="form-control"> <?php echo $row['deseases'] ; ?></textarea>
                                                                </div>
                                                                <div class=" col-md-4 col-xl-4 form-group">
                                                                <label for="exampleInputUsername1">Comment</label>
                                                                <textarea name="comment" class="form-control"><?php echo $row['Comments'] ; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <button type="submit" name="updatetransfers" class="btn btn-primary mr-2">Update</button>
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