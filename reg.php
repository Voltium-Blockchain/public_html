<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Block Trader | Signup</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <?php
                  
                  if (isset($_POST['submit'])) {
                    # code...
                    // Change this to your connection info.
                    $DATABASE_HOST = 'localhost';
                    $DATABASE_USER = 'volthwzf_presale';
                    $DATABASE_PASS = 'C}Y?bEITtXuY';
                    $DATABASE_NAME = 'volthwzf_presale';
                    // Try and connect using the info above.
                    $con           = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                    if (mysqli_connect_errno()) {
                     // If there is an error with the connection, stop the script and display the error.
                      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                    }

                    $username  = $_POST['username'];
                    $email     = $_POST['email'];
                    $password  = $_POST['password'];
  
                    $user_sql = 'INSERT INTO users(`date`, `username`, `email`, `password`, `uniqueid`, `balance`, `referral`, `tdeposit`, `twithdraw`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
  
                    if (isset($username, $email, $password)) {
                      # code...
                      if (!empty($username) || !empty($email) || !empty($password)) {
                        # code...
                        if ($stmt = $con->prepare($user_sql)) {
                          # code...
                          $uniqueid = md5($username);
                          $balance = 0;
                          $referral = 0;
                          $tdeposit = 0;
                          $twithdwaw = 0;
                          $todayx = getdate(date('U'));
                          $date = '$todayx[month] $todayx[mday], $todayx[year]';
  
                          $stmt->bind_param('sssssiiii', $date, $username, $email, $password, $uniqueid, $balance, $referral, $tdeposit, $twithdraw);
                          $stmt->execute();
                            # code...
                            echo '<p style="color: green;">Registration Successful</p><br>';
                        } else {
                          # code...
                          echo $stmt->error;
                        }
                      } else {
                        # code...
                        echo '<p style="color: red;">Form fields Should not be empty</p><br>';
                      }
  
                    } else {
                      echo '<p style="color: red;">Form Error!</p><br>';
                    }
                  } else {
                    echo 'submit button is not set';
                  }

                ?>
                <form method="POST" action="reg.php">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="" class="form-control p_input" required>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="login.php"> Sign In</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>