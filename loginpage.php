<?php
$show_al = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_connect_db.php';
    $userName = $_POST["username"];
    $pswrd = $_POST["pswrd"];
   
    // Retrieve the hashed password from the database based on the username
    $stmt_check = $con->prepare("SELECT pswrd FROM user_table WHERE username = ?");
    $stmt_check->bind_param("s", $userName);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        $row = $result_check->fetch_assoc();
        $stored_hashed_password = $row['pswrd'];

        // Verify the entered password
        
            // Password is correct
            session_start();
            $_SESSION['username'] = $userName;
            $_SESSION['loggedin'] = true;
            header("Location: http://localhost/photostudio/index.php");
            exit; // Make sure to exit after the header to prevent further script execution
        
    } else {
        // Username not found
        $show_al = true;
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

input[type=text], input[type=password],input[type=email]{
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

      <?php
     if( $show_al){
      echo ' <div class="alert alert-danger" role="alert">
                     <h4 class="alert-heading">Sign Up Failed!</h4>
                     <p>Check your credential</p>
                     <hr>
                     
     </div> <br><br>';
 
     }
     
    ?>
      
        <h1 class="tage_line" style="margine-top:30px">S<span class="stido" style="color:pink margine-top:30px">T</span>IDO</h1>
    
    <form action="/photostudio/loginpage.php" mt-4 md-4 method="post">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Log in</h3>
            <p>Log in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="username">User Email</label>
            <input type="text" placeholder="Enter email" name="username" required>

            <br><br>

            <!-- Password -->
            <label for="pswrd">Your password</label>
            <input type="password" placeholder="Enter Password" name="pswrd" required>

            <!-- sub container for the checkbox and forgot password link -->
            <div class="subcontainer">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
            <button type="submit">Login</button>

            <!-- Sign up link -->
            <p class="register">Not a member?  <a href="registration.php">Register here!</a></p>

        </div>

    </form>
   
</body>
</html>