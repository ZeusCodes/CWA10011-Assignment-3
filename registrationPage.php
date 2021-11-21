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
    <div class="registerBlank"></div>
    <div class="join-now">
      <i class="fas fa-hand-point-down fa-5x"></i>
      <h3>Join Us</h3>
      <p>
        Register with us to access our Database. <br />
        You need to be an associated with the Company to see our Database.
      </p>
      <button type="submit" name="register-btn" class="registerBtn btn-big">
        <a href="about.php">About Us</a>
      </button>
    </div>
    <div class="auth-content">
      <form id="registerManager" action="registration.php" method="post">
        <h2 class="form-title">Register Here</h2>

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
          <label for="Email">Email-id<span>*</span></label>
          <input
            type="email"
            name="Email-id"
            id="Email"
            placeholder="Email-id"
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
          <label for="ConPassword"
            >Password Confirmation<span>*</span
            ><span id="mismatchedPassword"></span
          ></label>
          <input
            type="password"
            name="passwordConf"
            id="ConPassword"
            placeholder="Confirm password"
            class="text-input"
            required
          />
        </div>
        <div>
          <button type="submit" name="register-btn" class="btn btn-big">
            Register
          </button>
        </div>
        <p>Or <a href="loginPage.php">Sign In</a></p>
      </form>
    </div>

    <?php
    include("footer.inc")
    ?>
    <script src="./scripts/authenticateManager.js"></script>
  </body>
</html>
