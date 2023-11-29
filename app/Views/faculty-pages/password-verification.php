
<!DOCTYPE html>
<html>
  <head>
    <title>Website Name</title>
    <meta charset="utf-8"> 
    <base href="../">
    <!-- CSS -->
    <!-- favicon -->
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- components css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <!-- custom css stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- responsive css stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
   
  </head>
  <body>
    <div id="wrapper">
        <div class="login-wrapper">
          <!-- login -->
          <div class="login card">
            <div class="card-header">
              <h3>Password verfication</h3>
            </div>
            <div class="card-content">
              <h4>hello Umesh</h4>
              <p class="text-muted">An OTP has been sent to Your Registered Mobile Number, Please enter the OTP to reset your Password</p>
              <form>
                <div class="form-group">
                  <label for="password">Enter otp</label>
                  <input type="number" class="form-control" placeholder="Enter otp" name="otp">
                </div>
                <div class="login-options">
                  <label class="text-muted">Didnt recieved OTP</label>
                  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#forgotPassword">Resend otp</button>
                </div>
                <button type="button" class="btn btn-gradient" onclick="window.location.href='faculty-pages/reset-password.html'">Submit</button>
              </form>
            </div>
          </div>
        </div>
    </div>

    <!-- js includes -->
    <!-- jquery library -->
    <script src='js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>