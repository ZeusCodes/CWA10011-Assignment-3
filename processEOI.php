<?php
include("header3.inc")
?>

<body>
    <div class="registerBlank"></div>
    <?php

    $err_msg = "";

    function sanitise_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function postcodeCheck($postcode, $state)
    {
        global $err_msg;
        $postcode = floor($postcode / 1000);
        if ((($postcode == 3) || ($postcode == 8)) && ($state == "VIC")) {
            return true;
        } else if ((($postcode == 1) || ($postcode == 2)) && ($state == "NSW")) {
            return true;
        } else if ((($postcode == 4) || ($postcode == 9)) && ($state == "QLD")) {
            return true;
        } else if (($postcode == 0) && ($state == "NT")) {
            return true;
        } else if (($postcode == 6) && ($state == "WA")) {
            return true;
        } else if (($postcode == 5) && ($state == "SA")) {
            return true;
        } else if (($postcode == 7) && ($state == "TAS")) {
            return true;
        } else if (($postcode == 0) && ($state == "ACT")) {
            return true;
        } else {
            $err_msg = $err_msg . "<p>Your Postcode doesn't Match you State</p>";
        }
    }

    $otherSkills;
    function otherSkillsCheck()
    {
        global $err_msg, $otherSkills;
        if (isset($_POST["oth"])) {
            $otherSkills = sanitise_input($_POST["otherSkills"]);
            if ($otherSkills == "") {
                $err_msg = $err_msg . "<p>You cannot have OtherSkills ticked and not mention them</p>";
            }
        }
    }

    function ageCheck()
    {
        global $err_msg;
        $DOB = $_POST["DOB"];
        $parts = explode('-', $DOB);
        $currentYear = date("Y");
        $year = $parts[0];
        $age  = $currentYear - $year;
        if (($age < 15) || ($age > 80)) {
            $err_msg = $err_msg . "<p>You must be over 15 and below 80 years of age to apply for the post.</p>";
        }
    }

    //Job Reference Number
    if (isset($_POST["Job-Reference-Number"])) {
        $refNum = sanitise_input($_POST["Job-Reference-Number"]);
        if ($refNum == "") {
            $err_msg = $err_msg . "<p>You Must Enter The Job Reference Number</p>";
        } else if (!preg_match("/^[a-zA-z0-9]{5}$/", $refNum)) {
            $err_msg = $err_msg . "<p>Only 5 alpha characters are allowed in The Job Reference Number.</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    //First Name Check
    if (isset($_POST["First-Name"])) {
        $firstName = sanitise_input($_POST["First-Name"]);
        if ($firstName == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your First Name</p>";
        } else if (!preg_match("/^[a-zA-Z]{1,20}$/", $firstName)) {
            $err_msg = $err_msg . "<p>Only 20 alpha characters are allowed in First Name.</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    //Last Name Check
    if (isset($_POST["Last-Name"])) {
        $lastName = sanitise_input($_POST["Last-Name"]);
        if ($lastName == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your Last Name</p>";
        } else if (!preg_match("/^[a-zA-Z]{1,20}$/", $lastName)) {
            $err_msg = $err_msg . "<p>Only 20 alpha characters are allowed in Last Name.</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    //Email-id Check
    if (isset($_POST["Email-id"])) {
        $email = sanitise_input($_POST["Email-id"]);
        if ($email == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your Email-id</p>";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_msg = $err_msg . "<p>Please Enter a valid Email-id.</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    //Phone Number Check
    if (isset($_POST["PhNum"])) {
        $phNum = sanitise_input($_POST["PhNum"]);
        if ($phNum == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your Phone Number</p>";
        } else if (!preg_match("/[0-9 ]{8,12}/", $phNum)) {
            $err_msg = $err_msg . "<p>Please Enter a valid Phone Number.</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    // Date of Birth Check
    if (isset($_POST["DOB"])) {
        $DOB = $_POST["DOB"];
        $date = explode('-', $DOB, 3);
        if ($DOB == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your Date of Birth</p>";
        } else if (!checkdate($date[1], $date[2], $date[0])) {
            $err_msg = $err_msg . "<p>Please Enter a valid Date of Birth</p>";
        } else {
            ageCheck();
        }
    } else {
        header("location: apply.php");
        exit();
    }

    //Gender Check
    if (isset($_POST["Gender"])) {
        $Gender = sanitise_input($_POST["Gender"]);
    } else {
        $err_msg = $err_msg . "<p>You Must Enter Your Gender.</p>";
    }

    //Street Check
    if (isset($_POST["Street-Address"])) {
        $Street = sanitise_input($_POST["Street-Address"]);
        if ($Street == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your Street-Address</p>";
        } else if (!preg_match("/^.{3,40}$/", $Street)) {
            $err_msg = $err_msg . "<p>Upto 40 characters are allowed in Street Address.</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    //Town Check
    if (isset($_POST["Town"])) {
        $town = sanitise_input($_POST["Town"]);
        if ($town == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your Town</p>";
        } else if (!preg_match("/^.{3,40}$/", $town)) {
            $err_msg = $err_msg . "<p>Upto 40 alpha characters are allowed in Town.</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    // State Check
    if (isset($_POST["State"])) {
        $State = sanitise_input($_POST["State"]);
        if ($State == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your State</p>";
        }
    } else {
        header("location: apply.php");
        exit();
    }

    //Postcode Check  
    if (isset($_POST["Postcode"])) {
        $Postcode = sanitise_input($_POST["Postcode"]);
        if ($Postcode == "") {
            $err_msg = $err_msg . "<p>You Must Enter Your Postcode</p>";
        } else if (!preg_match("/[0-9]{4}/", $Postcode)) {
            $err_msg = $err_msg . "<p>Only 4 numbers are allowed in Postcode.</p>";
        } else {
            postcodeCheck($Postcode, $State);
        }
    } else {
        header("location: apply.php");
        exit();
    }

    // Skills
    $skillSet = $_POST["Skills"];
    $skills = "";
    foreach ($skillSet as $skillName) {
        $skills = $skills . $skillName . ",";
    };

    //Other Skills Check
    otherSkillsCheck();

    if ($err_msg != "") {
        echo '
                <div class="FormSubmitted">
                    <h2 class="form-title">Application Submission Failed Due to Incorrect Inputs Please Try Again</h2>
              
                    <div>
                      <p>' . $err_msg . '</p>
                    </div>
                    <div>
                      <h2 class="form-title">     
                        <a href="apply.php" class="btn btn-big">Go Back</a>
                      </h2>
                    </div>
                </div>';
    } else {
        // -------------------------------------Connecting to DataBase---------------------------------- //
        require_once("settings.php");
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

        if (!$conn) {
            echo '
                <div class="FormSubmitted">
                    <h2 class="form-title">Application Submission Failed Due to Connection Failure Please Try Again</h2>
                    <div>
                      <h2 class="form-title">     
                        <a href="apply.php" class="btn btn-big">Go Back</a>
                      </h2>
                    </div>
                </div>';
        } else {
            $sql_table = "eoi";
            if ($result = mysqli_query($conn, "SHOW TABLES LIKE '" . $sql_table . "'")) {

                if ($result->num_rows == 1) {
                } else {
                    // CREATING TABLE 
                    $queryCreate = "CREATE TABLE eoi(
                        EOInumber INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        JobRefNum CHAR(5) NOT NULL,
                        FirstName VARCHAR(20) NOT NULL,
                        LastName VARCHAR(20) NOT NULL,
                        DOB DATE NOT NULL,
                        Gender VARCHAR(25) NOT NULL,
                        Address VARCHAR(40) NOT NULL,
                        Town VARCHAR(40) NOT NULL,
                        State VARCHAR(20) NOT NULL,
                        Postcode INT NOT NULL,
                        Email VARCHAR(50) NOT NULL,
                        PhNum INT NOT NULL,
                        Skills TEXT,
                        OtherSkills TEXT,
                        Status CHAR
                        );";

                    $result = mysqli_query($conn, $queryCreate);
                }
            }
            // echo "<p>values " . $refNum . " FName: ".$firstName . " LName: " . $lastName . " DOB: " . $DOB . " Gender: " . $Gender . " Street: " . $Street . " Town: ". $town . " State: " . $State . " Postcode: ". $Postcode . " Mailid: ". $email . " PhoneNumber: " .$phNum. " Skills: " .$skills." OtherSkills: ". $otherSkills . " Completed </p>";
            $query = "insert into $sql_table (JobRefNum, FirstName, LastName, DOB, Gender, Address, Town, State, Postcode, Email, PhNum, Skills, OtherSkills, Status) values ('$refNum', '$firstName', '$lastName', '$DOB','$Gender','$Street','$town','$State','$Postcode','$email','$phNum','$skills','$otherSkills','New')";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
                echo '
                <div class="FormSubmitted">
                    <h2 class="form-title">Application Submission Failed Please Try Again</h2>
                    <div>
                      <h2 class="form-title">     
                        <a href="apply.php" class="btn btn-big">Go Back</a>
                      </h2>
                    </div>
                </div>';
            } else {
                $query = "select EOInumber FROM eoi WHERE JobRefNum LIKE '%$refNum%' AND FirstName LIKE '%$firstName%' AND LastName LIKE '%$lastName%' AND DOB LIKE '%$DOB%' AND Address LIKE '%$Street%'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $EOInumber = $row["EOInumber"];
                echo '
                <div class="FormSubmitted">
                    <h2 class="form-title">Your Form has been Successfully Submitted</h2>
              
                    <div>
                      <label for="FName">Your Application or EOI Number is: ' . $EOInumber . '</label>
                      <p>Please Store This Number for Future Reference</p>
                    </div>
                    <div>
                      <a href="apply.php" class="btn btn-big">Go Back</a>
                    </div>
                </div>';
            }
            mysqli_close($conn);
        }
    }
    ?>
    <?php
    include("footer.inc")
    ?>
</body>

</html>