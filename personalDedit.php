<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form has been submitted, process the data here

    // Fetch form data
    $id = $_POST["id"];
    $userName = $_POST["userName"];
    $UEmail = $_POST["UEmail"];
    $UNumber = $_POST["UNumber"];
    $pswrd = $_POST["pswrd"];
    $Uaddress = $_POST["Uaddress"];
    $userCity = $_POST["userCity"];
    $Ustate = $_POST["Ustate"];

    // Update the user's data in the database
    require 'partials/_connect_db.php';
    $sql = "UPDATE user_table SET username='$userName', UEmail='$UEmail', UNumber='$UNumber', pswrd='$pswrd', Uaddress='$Uaddress', Ucity='$userCity', Ustate='$Ustate' WHERE uid=$id";

    if (mysqli_query($con, $sql)) {
        header("Location: http://localhost/photostudio/menuc.php");
    } else {
        echo "Error updating data: " . mysqli_error($con);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login pasecss.css">
    <style>

body 
{
  font-family:sans-serif; 
  background: -webkit-linear-gradient(to right, #155799, #159957);  
  background: linear-gradient(to right, #155799, #159957); 
  color:whitesmoke;
}


h1{
    text-align: center;
}


form{
    width:35rem;
    margin: auto;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;
    margin-top:20px;
    margin-bottom:20px;
}

input[type=text], input[type=password],input[type=email],input[type=date],input[type=number]{
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
  }

button {
    background-color: #030804;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-size: 18px;
  }

button:hover {
    opacity: 0.6;
    cursor: pointer;
}

.headingsContainer{
    text-align: center;
}

.headingsContainer p{
    color: gray;
}
.mainContainer{
    padding: 16px;
}


.subcontainer{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.subcontainer a{
    font-size: 16px;
    margin-bottom: 12px;
}

span.forgotpsd a {
    float: right;
    color: whitesmoke;
    padding-top: 16px;
  }

.forgotpsd a{
    color: rgb(74, 146, 235);
  }
  
.forgotpsd a:link{
    text-decoration: none;
  }

  .register{
    color: white;
    text-align: center;
  }
  
  .register a{
    color: rgb(74, 146, 235);
  }
  
  .register a:link{
    text-decoration: none;
  }

  /* Media queries for the responsiveness of the page */
  @media screen and (max-width: 600px) {
    form{
      width: 25rem;
    }
  }
  
  @media screen and (max-width: 400px) {
    form{
      width: 20rem;
    }
  }


        </style>
    <title>Login page in HTML</title>
</head>
<body>
      <?php  require 'partials/_navbar.php'?>
            
      
    
         
           <h1 class="tage_line" style="margine-top:30px">S<span class="stido" style="color:pink margine-top:30px">T</span>IDO</h1>
       
       <form action="/photostudio/personalDedit.php" mt-4 md-4 method="post">
           <!-- Headings for the form -->
           <input type="hidden" name="id" value="<?php echo $id; ?>">
           <div class="headingsContainer">
               <h3>Edit Personal details</h3>
               
           </div>
   
           <!-- Main container for all inputs -->
           <div class="mainContainer">
               <!-- Username -->
               <?php  
                  
                  require 'partials/_connect_db.php';
              
                  $sql = "SELECT * FROM user_table WHERE username='" . $_SESSION['username'] . "'";

                  $result = mysqli_query($con, $sql);
              
                  if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
               ?>    
               <label for="userName">Your username</label>
               <input type="text" placeholder="Enter Username" name="userName" value="<?php echo $row['username']  ?>" required>
   
               <br><br>
                        <!-- Email -->
                        <label for="UEmail">Your email</label>
                        <input type="email" placeholder="Enter Email" name="UEmail" value="<?php echo $row['UEmail']  ?>" required>
                        <br><br>

                  
                        <!-- Number -->
                    <label for="Unumber">Mobile number</label>
                    <input type="number" placeholder="Enter Phone Number" name="UNumber" value="<?php echo $row['UNumber']?>" required>
                <!-- city -->

                <br><br>

                <!-- Password -->
                <label for="pswrd">Your password</label>
                <input type="password" placeholder="Enter Password" name="pswrd" value="<?php echo $row['pswrd']?>"required>
                <br><br>

                <label for="userAddress">Your Address</label>
               <input type="text" placeholder="Enter full address" name="Uaddress" value="<?php echo $row['Uaddress']?>" required>
                
                <br><br>
                <!-- city -->
                <label for="userCity">Your City</label>
                <input type="text" placeholder="Enter City" name="userCity" value="<?php echo $row['Ucity']  ?>" required>
                <br><br>
                <!-- city -->
                <label for="Ustate">State</label>
                <input type="text" placeholder="Enter state" name="Ustate" value="<?php echo $row['Ustate']?>" required>

                 <?php
                      }
                    }

                 ?>
   
                
               
   
               <!-- sub container for the checkbox and forgot password link -->
              
   
   
               <!-- Submit button -->
               <button type="submit">Register</button>
   
           </div>
   
       </form>
      
   </body>
   </html>