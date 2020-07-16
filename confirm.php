<?php
  session_start();
	$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/safetyapp/css/bootstrap-css/custom.css" />
    <link rel="stylesheet" href="/safetyapp/css/bootstrap-css/bootstrap.css" />
    <title>Safety App</title>
  </head>
  <body>
    <header class="text-light">
    <nav class="navbar navbar-light container py-md-4">
        <a class="navbar-brand" href="index.php">
            <img src="img/SafetyLogo.png" width="50" height="40" alt="" loading="lazy">
        </a>
    </nav>
   <div class="container confirm text-center">
    <div class="emailimg mx-auto">
        <img src="/safetyapp/img/undraw_confirmed_81ex.svg" alt="newsletter">
    </div>
    <h3>
        Thank You!
    </h3>
    <p>Yay!! Your email <span class="font-weight-bolder"><?php echo $email ?></span> have been added to our waiting list.</p>
    <p>We'll notify you as soon as we launch.</p>
   </div>
     
    </header>
  
    <footer class="p-2">
        <div class="container text-muted py-4">
            &copy;2020 HSE-AID. All rights reserved
        </div>
    </footer>
    <script src="/safetyapp/js/app.js"></script>
    <script src="/safetyapp/js/bootstrap-js/jquery.js"></script>
    <script src="/safetyapp/js/bootstrap-js/popper.js"></script>
    <script src="/safetyapp/js/bootstrap-js/bootstrap.js"></script>
  </body>
</html>
