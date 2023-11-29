<!DOCTYPE html>
<html>

<head>
  <title>Website Name</title>
  <meta charset="utf-8">
  <base href="../">
  <!-- CSS -->
  <!-- favicon -->
  <link rel="icon" href="<?= base_url() ?>public/assets/images/logo.png" type="image/x-icon">
  <!-- components css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/assets/bootstrap/css/bootstrap.css">
  <!-- custom css stylesheet -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/assets/css/styles.css">
  <!-- responsive css stylesheet -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/assets/css/responsive.css">

</head>

<body>
  <div id="wrapper">
    <div class="login-wrapper">
      <!-- login -->
      <div class="login card">
        <div class="card-header">
          <h3>Password Reset</h3>
        </div>
        <div class="card-content">
          <form method="post" id="forgotPass">
            <div class="form-group">
              <label for="password">Enter Password</label>
              <input type="text" class="form-control" placeholder="Enter otp" name="password" id="password">
            </div>
            <div class="form-group">
              <label for="cpassword">Enter Confirm Password</label>
              <input type="text" class="form-control" placeholder="Enter otp" name="cpassword" id="cpassword">
            </div>
            <span id="error" class="error"></span>
            <!-- <div class="login-options">
                  <label class="text-muted">Didnt recieved OTP</label>
                  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#forgotPassword">Resend otp</button>
                </div> -->
            <button type="button" class="btn btn-gradient">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- js includes -->
  <!-- jquery library -->
  <script src='<?= base_url() ?>public/assets/js/jquery-3.3.1.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>

  <!-- Latest bootstrap compiled JavaScript -->
  <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>


  <script>
    $('#forgotPass').validate({
      rules: {
        password: {
          required: true,
          minlength: 5,
        },
        cpassword: "required",
        equalTo: "#password",
        minlength: 5,
      },
      submitHandler: function(form) {
        var formData = $('#forgotPass').serialize();
        $.ajax({
          url: '<?php echo base_url("updatePassword") ?>',
          method: "POST",
          dataType: "json",
          async: true,
          data: formData,
          success: function(response) {
            console.log(response);
            if (response.status === true) {
              window.location.href = "<?php echo base_url('/') ?>";
            } else {
              $('#error').show().text(response.message);
            }
          }
        });
        return false;

      }
    })
  </script>


</body>

</html>