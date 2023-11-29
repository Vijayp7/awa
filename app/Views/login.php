<!DOCTYPE html>
<html>

<head>
  <title>AWA | <?= $title; ?></title>
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
<style>
  .error {
    color: red !important;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  }
</style>

<body>
  <div id="wrapper">
    <div class="login-wrapper">
      <!-- login -->
      <div class="login">
        <div class="login-logo">
          <img src="<?= base_url() ?>public/assets/images/logo.png" alt="">
        </div>
        <form id="loginFrom" method="post">
          <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
          <span id="error" class="error"></span>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password" id="password" autocomplete="off">
          </div>
          <div class="checkbox login-options">
            <label><input type="checkbox"> Remember Me</label>
            <a class="btn btn-link" data-toggle='modal' data-target='#forgotPassword'>Forgot Username/Password?</a>
          </div>
          <button type="submit" class="btn btn-gradient" value="submit">Login</button>
        </form>
      </div>
    </div>

  </div>
  <!-- Modal -->
  <div id="forgotPassword" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot Password?</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="forgotForm">
            <div class="form-group">
              <label for="email" class="text-muted">Enter your Email address to reset your password.</label>
              <input type="email" class="form-control" placeholder="Enter email" name="email" id="femail">
              <span id="ferror" class="error"></span>

              <button type="submit" class="btn btn-primary btn-gradient mail">Send Reset Link</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- js includes -->
  <!-- jquery library -->
  <script src='<?= base_url() ?>public/assets/js/jquery-3.3.1.min.js'></script>

  <!-- Latest bootstrap compiled JavaScript -->
  <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
</body>

</html>
<script>
  $(document).ready(function() {
    $("#loginFrom").validate({

      rules: {
        email: {
          required: true,
          email: true
        },
        password: "required"
      },
      messages: {
        email: "Please enter a valid email",
        password: "Please enter a password"
      },

      submitHandler: function(form) {
        var formData = $('#loginFrom').serialize();
        $.ajax({
          url: '<?php echo base_url("auth") ?>',
          method: "POST",
          dataType: "json",
          async: true,
          data: formData,
          success: function(response) {
            console.log(response);
            if (response.status === true) {
              window.location.href = "<?php echo base_url('admin/course') ?>";
            } else {
              $('#error').show().text(response.message);
            }
          }
        });
        return false;

        // $(form).submit();
      }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#forgotForm').submit(function(e) {
      e.preventDefault();
      var email = $('#femail').val();
      $.ajax({
        method: "post",
        dataType: "json",
        url: '<?php echo base_url("sendResetLink") ?>',
        data: {
          'email': email
        },
        success: function(response) {
          console.log(response);

          if (response.status === false) {
            $('#ferror').show().text(response.message);

          } else {
            $('#ferror').show().text('');

          }
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
          $('#ferror').show().text("Email Not Found..");
        }
      });
    });
  });
</script>