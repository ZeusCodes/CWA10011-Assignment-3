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

    <h3>
    <a href="manage.php"> <--Back</a>
    </h3>

    
    <?php
    $query = "select * FROM eoi ";
    $set = false;
    $refNum ="";
    $firstName="";
    $lastName="";
    function sanitise_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //Job Reference Number
    if (isset($_POST["JobRef"])) {
        $refNum = sanitise_input($_POST["JobRef"]);
        $set = true;
    }

    //First Name Check
    if (isset($_POST["firstName"])) {
        $firstName = sanitise_input($_POST["firstName"]);
        $set = true;
    }

    //Last Name Check
    if (isset($_POST["lastName"])) {
        $lastName = sanitise_input($_POST["lastName"]);
        $set = true;
    }

    $query = "select * FROM eoi WHERE JobRefNum LIKE '%$refNum%' AND FirstName LIKE '%$firstName%' AND LastName LIKE '%$lastName%'";

    //Delete Job with Reference Number
    if (isset($_POST["DelJobRef"])) {
        $delRefNum = sanitise_input($_POST["DelJobRef"]);
        if ($delRefNum != "") {
            $query = "DELETE FROM eoi WHERE JobRefNum LIKE '%$delRefNum%'";
        }
    }

    // Update Record
    if (isset($_POST["Status"])) {
        $updateStatusOf = sanitise_input($_POST["Status"]);
        $updateStatusTo = sanitise_input($_POST["StatusTo"]);
        if ($updateStatusOf != "") {
            $query = "UPDATE eoi SET Status='$updateStatusTo' WHERE EOInumber='$updateStatusOf'";
            // $query = "UPDATE cars SET make='$updateStatusTo' WHERE model='X3'";
        }
    }

    // Check If all Application Selected
    if (isset($_POST["allEOI"])) {
        $query = "select * FROM eoi ";
    }
// SELECT * FROM `cars` ORDER BY `cars`.`price` DESC
    
    if (isset($_POST["orderBy"])) {
        $field = $_POST["field"];
        $order = "ASC";
        if ($field != "") {
            if (isset($_POST["ASC"])) {
                $order = "ASC";
            }elseif (isset($_POST["DESC"])) {
                $order = "DESC";
            }
            $query = $query . "ORDER BY $field $order";
        }
    }

    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
        echo "<p> Database connection failure </p>";
    } else {
        //upon successful connection
        //execute the query and store result into the result pointer
        if($set == false){
            header("location: manager.php");
        }
        $result = @mysqli_query($conn, $query);

        //checks if the execution was successful
        if (!$result) {
            echo "<p> Someting is wrong with ", $query, "<p>";
        } else {

            if ($delRefNum != "") {
                if (!$result) {
                    echo "<p class='failedProcess'>Something is wrong with ", $query, "</p>";
                } else {
                    echo "<p class='doneSuccessfully'> Successfully Deleted Record </p>";
                    $query = "select * FROM eoi ";
                }
            } elseif ($updateStatusOf != "") {
                if (!$result) {
                    echo "<p class='failedProcess'>Something is wrong with ", $query, "</p>";
                } else {
                    echo "<p class='doneSuccessfully'> Successfully Updated Record </p>";
                    $query = "select * FROM eoi ";
                }
            }

            $result = @mysqli_query($conn, $query);

            echo "<table class=\"dashboardTable\">\n";
            echo "<tr>\n"
                . "<th scope=\"col\"> EOI Number </th>\n"
                . "<th scope=\"col\"> Reference Number </th>\n"
                . "<th scopes\"col\"> Name </th>\n"
                . "<th scope=\"col\"> DOB </th>\n"
                // . "<th scope=\"col\"> Gender </th>\n"
                . "<th scope=\"col\"> Address </th>\n"
                . "<th scope=\"col\"> Town </th>\n"
                . "<th scope=\"col\"> State </th>\n"
                . "<th scope=\"col\"> Email </th>\n"
                . "<th scope=\"col\"> Phone </th>\n"
                . "<th scope=\"col\"> Skills </th>\n"
                . "<th scope=\"col\"> OtherSkills </th>\n"
                . "<th scope=\"col\"> Status </th>\n"
                . "</tr>\n";


            //retrieve current record pointed by the result pointer
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>\n";
                echo "<td>", $row["EOInumber"], "</td>\n";
                echo "<td>", $row["JobRefNum"], "</td>\n";
                echo "<td>", $row["FirstName"], " " ,$row["LastName"], "</td>\n";
                echo "<td>", $row["DOB"], "</td>\n";
                // echo "<td>", $row["Gender"], "</td>\n";
                echo "<td>", $row["Address"], "</td>\n";
                echo "<td>", $row["Town"], "</td>\n";
                echo "<td>", $row["State"], "- " ,$row["Postcode"], "</td>\n";
                echo "<td>", $row["Email"], "</td>\n";
                echo "<td>", $row["PhNum"], "</td>\n";
                echo "<td>", $row["Skills"], "</td>\n";
                echo "<td>", $row["OtherSkills"], "</td>\n";
                echo "<td>", $row["Status"], "</td>\n";

                echo "</tr>\n";
            }
            echo "</table>\n";

            mysqli_free_result($result);
        }
        //close the database connection
        mysqli_close($conn);
    } ?>
    <?php
    include("footer.inc")
    ?>
</body>

</html>