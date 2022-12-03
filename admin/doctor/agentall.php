<?php
include 'navbar.php'; 
if (isset($_POST['registeragent'])){   
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $role=$_POST['role'];
    $password=md5($_POST['password']);
    $confirmpassword=md5($_POST['confirmpassword']);
    if ($password==$confirmpassword) {
        $sql=mysqli_query($conn,"INSERT INTO agent(
            firstname,
            lastname,
            email,
            phone,
            locaction,
            role,
            password,
            admin_id
        ) VALUES (
            '$firstname',
            '$lastname',
            '$email',
            '$phone',
            '$location',
            '$role',
            '$password',
            '$admin_id'
        )");
        if ($sql) {
            $successmessage .='Register Agent, Successefully';	
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
                    <h4 class="card-title">All Health Adversor</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="agent.php" class=" float-right btn btn-primary mr-2">Add Health Adversor</a>
                    </div>
                  </div>
                  <div class=" table-border-style">
                        <div class="table-responsive">
                            
                  <br>
                  <br>
                        <table id="zero_config" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Location Address</th>
                                        <th>Cell</th>
                                        <th>Village</th>
                                        <th>Health Center</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $quer=mysqli_query($conn,"SELECT * FROM adversor");
                                    while ($row=mysqli_fetch_array($quer)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ; ?></td>
                                        <td><?php echo $row['firstname'] ; ?></td>
                                        <td><?php echo $row['lastname'] ; ?></td>
                                        <td><?php echo $row['email'] ; ?></td>
                                        <td><?php echo $row['phone'] ; ?></td>
                                        <td><?php echo $row['location'] ; ?></td>
                                        <td><?php echo $row['cell'] ; ?></td>
                                        <td><?php echo $row['village'] ; ?></td>
                                        <td><?php echo $row['hospital'] ; ?></td>
                                        <td><?php echo $row['role'] ; ?></td>
                                        <td>
                                            <a class="btn btn-danger"  href="delete.php?delagent=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this Adversor.')" id="red">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                        </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
include 'footer.php'; 
?>