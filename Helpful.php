<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_connect_db.php';
    $hid=$_POST["hid"];
    $id=$_POST["id"];
   
    
            // Get the current value of the column
            $sql = "SELECT HelpFull FROM ratingofstudio WHERE rid = $hid";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $current_value = $row['HelpFull'];

                // Increment the value by one
                $new_value = $current_value + 1;

                // Update the value in the database
                $update_sql = "UPDATE ratingofstudio SET HelpFull = $new_value WHERE rid = $hid";

                if ($con->query($update_sql) === TRUE) {
                    echo "Value updated successfully";
                } else {
                    echo "Error updating value: " . $con->error;
                }
            } else {
                echo "No record found for ID $hid";
            }

            $con->close();
          
            header("Location: http://localhost/photostudio/singlephotostudio.php?id=". $id);
          
    }
?>