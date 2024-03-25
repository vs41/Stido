<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_connect_db.php';
    $id=$_POST["id"];
    $username = $_POST["userName"];
    $Ucity = $_POST["userCity"];
    $Uaddress = $_POST["userAddress"];
    $StudioName=$_POST['StudioName'];
    $StudioRating=$_POST['StudioRating'];
    $Review =$_POST['Review'];
   echo  $username;

   
    
        
            
            
            // Insert the user into the database
            $sql = "INSERT INTO ratingofstudio (userName,userCity,userAddress,StudioName,studioRating,Review) 
                    VALUES ('$username','$Ucity','$Uaddress','$StudioName',' $StudioRating','$Review')";
            $result = mysqli_query($con, $sql);
            
            if ($result) {
                 header("Location: http://localhost/photostudio/singlephotostudio.php?id=". $id);
            }
    }
?>