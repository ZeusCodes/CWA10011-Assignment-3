<?php
include("header2.inc")
?>

<body>
  <?php
  include("menu.php")
  ?>
  <?php
  menu(5);
  ?>

  <!-- Background -->
  <div id="Clouds-enhancement" class="back">
    <div class="Cloud Foreground back"></div>
    <div class="Cloud Background back"></div>
    <div class="Cloud Foreground back"></div>
    <div class="Cloud Background back"></div>
    <div class="Cloud Foreground back"></div>
    <div class="Cloud Background back"></div>
    <div class="Cloud Background back"></div>
    <div class="Cloud Foreground back"></div>
    <div class="Cloud Background back"></div>
    <div class="Cloud Background back"></div>
  </div>
  <!-- End of Background -->
  <div>
    <section id="Enhancements">
      <div class="jobs-header bounce-in">
        <h2>Enhancements Used</h2>
        <p>
          Efforts have been made to going beyond the classwork and <br />
          learn something beyond our scope of knowledge. The used enhancements
          <br />
          have been listed below and link to the pertaining enhancements has
          been given.
        </p>
      </div>
      <div class="jobs-img">
        <img class="header-img" src="./images/phpEnhancements.gif" alt="Enhancements image" />
      </div>

      <hr />

      <div id="bootstrap" class="bounce-in">
        <h1 class="enhancements-used">
          Arranging table Based on Different Columns
        </h1>
        <img class="enhancements-used-img" src="./images/orderingGif.gif" alt="Bootstrap_logo" />
        <p>
          The Manager can arrange the EOI table according to his wish. He can
          arrange the EOITable according to his wish. Depending the field, or
          the order which pleases him. This has been done using the phpMyAdmin
          dashboard and some other queries.
        </p>
        <ul>
          <li>
            The <a href="./manage.php#orderBy">"Arrange Applications"</a> has to
            be ticked in order to implement arrange application
          </li>
          <li>
            The <a href="./manage.php#field">"Arrange By Field"</a> has to be
            filled depending on which column you want to arrange. Please
            select from the options available below.
          </li>
          <li>
            The <a href="./manage.php#ASC">"Arrange In"</a> field has to be
            filled based on the criteria in which the column needs to be
            arranged. You can search using different criteria and arrange the results simultaneously.
          </li>
        </ul>
      </div>

      <div id="animation" class="bounce-in">
        <h1 class="enhancements-used">Implemented Manager Login and Timeout</h1>
        <img class="enhancements-used-img" src="./images/managerLoginGif.gif" alt="Animation_logo" />
        <p>
          Manager login has been implemented to ensure the security of the
          site. Only registered managers can login, or you can register via
          the registration page. The page is disable if you give 3 incorrect
          attempts.
        </p>
        <ul>
          <li>
            You can <a href="./loginPage.php">Login through this page</a> if
            you have a registered username and password.
          </li>
          <li>
            Or You can <a href="./registrationPage.php">Register yourself</a>
            as a valid user first if you don't have a registered username and
            password.
          </li>
          <li>
            You can <a href="./manage.php">Logout yourself</a>
            from the page and if you want to sign in again, you will need to enter your credentials again.
          </li>
          <li>
            If you give <a href="./loginPage.php">3 incorrect password attempts
            </a>
            your login will be disabled for 45 seconds. This bas been done to
            increase security and reliability. Make sure to close browser and
            try again as you will remain signed-in if you had signed in
            previously for the current browser session. The help of
            <a href="https://phppot.com/php/user-login-session-timeout-logout-in-php/">
              this page</a> was taken for implementing this,
          </li>
        </ul>
      </div>
    </section>
  </div>
  <?php
  include("footer.inc")
  ?>

</body>

</html>