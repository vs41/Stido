<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stdino</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="container-fluid">
   <?php  require 'partials/_navbar.php'?>

   <div class="row pt-5 mainbodydiv d-flex justify-content-center alert alert-success pd-5" style="height:500px;">
   
       
            <div class=" justify-content-center ">
                <div class="text-center ">
                <h1><i class="fa fa-check m-2" aria-hidden="true"></i>Registration Successful</h1>
                    <br>
                    <p>Your registration was completed successfully.</p>
                    <p>Please check your email for a confirmation message. Click the link provided in the email to verify your account.</p>
                    <p>If you don't receive an email within a few minutes, please check your spam folder.</p>
                    <p>If you encounter any issues, feel free to <a href="contact.html">contact us</a>.</p>
                </div>
            </div>
        
    
</div>
  <?php  require 'partials/_footer.php'?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>