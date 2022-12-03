<?php
include 'navbar.php'; 
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <span style="color: blue"><?php echo $doctor_name?></span> </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="../images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Drink Jibu</h4>
                        <h6 class="font-weight-normal">Well Being</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <a href="../agentall.php" style="color: white; text-decoration: none;">
                    <div class="card-body">
                      <p class="mb-4">Total Adversor</p>
                      <p class="fs-30 mb-2"><?php
														$select=$conn->query("SELECT * FROM adversor");
														$count=mysqli_num_rows($select);
														echo $count;     
													?></p>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <a href="./productall.php" style="color: white; text-decoration: none;">
                    <div class="card-body">
                      <p class="mb-4">Our women</p>
                      <p class="fs-30 mb-2"><?php
														$select=$conn->query("SELECT * FROM parent");
														$count=mysqli_num_rows($select);
														echo $count;     
													?></p>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
          
        </div>

        <?php
include 'footer.php'; 
?>