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
    //User Name Check
    if (isset($_POST["userName"])) {
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        $email = $_POST["Email-id"];
    } else {
        header("location: apply.php");
        exit();
    }

    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
        echo '
        <div class="FormSubmitted">
            <h2 class="form-title">Registration Failed Due to Connection Failure Please Try Again</h2>
            <div>
              <h2 class="form-title">     
                <a href="registrationPage.php" class="btn btn-big">Go Back</a>
              </h2>
            </div>
        </div>';
    } else {
        $sql_table = "managers";
        if ($result = mysqli_query($conn, "SHOW TABLES LIKE '" . $sql_table . "'")) {

            if ($result->num_rows == 1) {
            } else {
                // CREATING TABLE 
                $queryCreate = "CREATE TABLE $sql_table(
                ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                userName VARCHAR(50) NOT NULL,
                Email VARCHAR(50) NOT NULL,
                Password VARCHAR(50) NOT NULL,
                );";

                $result = mysqli_query($conn, $queryCreate);
            }
        }
        // echo "<p>values " . $refNum . " FName: ".$firstName . " LName: " . $lastName . " DOB: " . $DOB . " Gender: " . $Gender . " Street: " . $Street . " Town: ". $town . " State: " . $State . " Postcode: ". $Postcode . " Mailid: ". $email . " PhoneNumber: " .$phNum. " Skills: " .$skills." OtherSkills: ". $otherSkills . " Completed </p>";
        $query = "insert into $sql_table (userName, Email, Password) values ('$userName', '$email', '$password')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
            echo '
        <div class="FormSubmitted">
            <h2 class="form-title">Registration Failed Please Try Again</h2>
            <div>
              <h2 class="form-title">     
                <a href="registrationPage.php" class="btn btn-big">Go Back</a>
              </h2>
            </div>
        </div>';
        } else {
            echo '
        <div class="FormSubmitted">
            <h2 class="form-title">You Registration have been Successfully Registered</h2>
            <div>
              <a href="loginPage.php" class="btn btn-big">Login Now</a>
            </div>
        </div>';
            exit();
        }
        mysqli_close($conn);
    } ?>
    <?php
    include("footer.inc")
    ?>
</body>

</html>