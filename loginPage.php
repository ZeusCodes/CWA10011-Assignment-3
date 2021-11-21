<?php
include("header3.inc")
?>

  <body>
  <?php
  include("menu.php")
  ?>
  <?php
  menu(6);
  ?>
    <div class="loginBlank"></div>
    <div class="login-now">
      <!-- <i class="fas fa-hand-point-down fa-5x"></i> -->
      <i class="fas fa-sign-in-alt fa-5x"></i>
      <h3>Login To Your Workplace</h3>
      <p>
        Get Started with today's chores by login in to your company account.
        <br />
        If you are new in our Company, get yourself a new account here.
      </p>
      
      <button type="submit" name="register-btn" class="registerBtn btn-big">
        <a href="registrationPage.php">Register Now</a>
      </button>
    </div>
    <div class="auth-content">
      <form action="manage.php" method="post">
        <h2 class="form-title">Login</h2>

        <div>
          <label for="FName">Username <span>*</span></label>
          <input
            type="text"
            name="userName"
            id="FName"
            pattern="[A-Za-z_-.]{1,20}"
            placeholder="First Name"
            size="25"
            class="text-input"
            required
          />
        </div>
        <div>
          <label for="Password">Password<span>*</span></label>
          <input
            type="password"
            name="password"
            id="Password"
            placeholder="Password"
            class="text-input"
            required
          />
        </div>
        <div>
          <button type="submit" name="login-btn" class="btn btn-big">
            Login
          </button>
        </div>
        <p>Or <a href="registrationPage.php">Sign Up</a></p>
      </form>
    </div>

    <?php
    include("footer.inc")
    ?>
  </body>
</html>
