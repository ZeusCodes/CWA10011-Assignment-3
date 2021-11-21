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
  <?php
  
  function isDisabled()
  {
    $disable_duration = 45;
    if (isset($_SESSION['disabled_time'])) {
      if (((time() - $_SESSION['disabled_time']) < $disable_duration)) {
        return true;
      }
    }
    return false;
  }

  function exitPage(){
    if($_SESSION["incorrectPassword"]>2){
      $_SESSION['disabled_time'] = time();  
    } else{
      $_SESSION["incorrectPassword"] = $_SESSION["incorrectPassword"] + 1;
    }
    exit();
  }
  session_start();
  $timesRun = 0;

  // $_SESSION["isLoggedIn"] = false;
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logout-btn'])) {
      $_SESSION["isLoggedIn"] = false;
      header("location: loginPage.php");
      exit();
    }
  }

  if(isDisabled() === true){
    $_SESSION["incorrectPassword"] = 0;
    echo '
    <div class="FormSubmitted">
              <h2 class="form-title">You Cannot Enter Page Due to 3 Incorrect Attempts. Try Again 45 seconds later.</h2>
              <div>
                <h2 class="form-title">     
                  <a href="loginPage.php" class="btn btn-big">Go Back</a>
                </h2>
              </div>
      </div>';
    exit();
  }
  if (!isset($_SESSION["isLoggedIn"])) {
    $_SESSION["isLoggedIn"] = false;
  }
  if (!isset($_SESSION["incorrectPassword"])) {
    $_SESSION["incorrectPassword"] = 0;
  }

  //Login Check
  if ($_SESSION["isLoggedIn"] === true) {
    $timesRun = 1;
  } elseif (isset($_POST["userName"])) {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
      echo '
          <div class="FormSubmitted">
              <h2 class="form-title">Application Submission Failed Due to Connection Failure Please Try Again</h2>
              <div>
                <h2 class="form-title">     
                  <a href="loginPage.php" class="btn btn-big">Go Back</a>
                </h2>
              </div>
          </div>';
      exitPage();
    } else {
      $query = "Select * from managers WHERE userName LIKE '%$userName%' ";
      // AND model LIKE '%$model%' AND price LIKE '%$price%' AND yom LIKE '%$yom%'
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        $timesRun = 1;
        if ($password == $row["Password"]) {
          if ($_SESSION["isLoggedIn"] === false) {
            $_SESSION["isLoggedIn"] = true;
            $_SESSION["incorrectPassword"] = 0;
          }
        } else {
          echo '
          <div class="FormSubmitted">
              <h2 class="form-title">Invalid Login Try Again or Register First</h2>
              <div>
                <h2 class="form-title">     
                  <a href="loginPage.php" class="btn btn-big">Go Back</a>
                </h2>
              </div>
          </div>';
          exitPage();
        }
      }
      if ($timesRun === 0) {
        echo '
          <div class="FormSubmitted">
              <h2 class="form-title">Invalid Login Try Again or Register First</h2>
              <div>
                <h2 class="form-title">     
                  <a href="loginPage.php" class="btn btn-big">Go Back</a>
                </h2>
              </div>
          </div>';
        exitPage();
      }
    }
  } else {
    header("location: loginPage.php");
    exitPage();
  }
  ?>
  <form action="manage.php" method="POST" class="logoutBtn">
    <input type="submit" id="logoutBtn" name="logout-btn" class="btn btn-big" value="Manager Logout 🔐">
    </input>
  </form>
  <div class="searchDashboard">
    <form action="results.php" method="post">
      <h2 class="form-title">Search Applications</h2>

      <div>
        <input type="checkbox" value="allEOI" id="allEOI" name="allEOI" />Show All Applications <br />
        <input type="checkbox" value="orderBy" id="orderBy" name="orderBy" />Arrange Applications <br />
      </div>
      <div>
        <label for="JobRef">Job Reference: </label>
        <input type="text" name="JobRef" id="JobRef" class="text-input" />
      </div>
      <div>
        <label for="firstName">Applicant's First Name: </label>
        <input type="text" name="firstName" id="firstName" class="text-input" />
      </div>
      <div>
        <label for="lastName">Applicant's Last Name: </label>
        <input type="text" name="lastName" id="lastName" class="text-input" /></p>
      </div>
      <div>
        <label for="DelJobRef">Delete Applications For Reference Number: </label>
        <input type="text" name="DelJobRef" id="DelJobRef" class="text-input" />
      </div>
      <div>
        <label for="Status">Update Status For EOI Number: </label>
        <input type="text" name="Status" id="Status" class="text-input" />
        <label for="StatusTo">Update Status To: </label>
        <input type="text" name="StatusTo" id="StatusTo" class="text-input" />
      </div>
      <div>
        <label for="field">Arrange By Field: </label>
        <input type="text" name="field" id="field" class="text-input">
        <p for="field">Options: EOInumber  ,   FirstName  ,   LastName  ,   DOB  ,   Postcode  ,   Status</p>
        
        <label for="field">Arrange In: </label><br>
        <input type="checkbox" value="ASC" id="ASC" name="ASC" />ASCENDING ORDER<br />
        <input type="checkbox" value="DESC" id="DESC" name="DESC" />DESCENDING ORDER <br />

      </div>
      <div>
        <button type="submit" name="login-btn" class="btn btn-big">
          Run Search
        </button>
      </div>
    </form>
  </div>
  <div class="dashboardBlank"></div>
  <?php
  include("footer.inc")
  ?>
</body>

</html>