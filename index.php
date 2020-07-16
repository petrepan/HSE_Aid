<?php
    require('config.php');

    $msg = '';
    $msgClass = '';

    //check for a submit
    if(isset($_POST['submit'])){
        // get form data
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO emails(email) VALUES('$email')";

        if(mysqli_query($conn, $sql)){
           
            $msg = 'Yay!! Thank you for Suscribing. You have been added to our notification list.';
            $msgClass = 'alert-success';
            // header('Location: newsletter.php');
             
        }else{
            $msg = 'An error occurred during submission. Try again.';
            $msgClass = 'alert-danger';
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
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
        <a class="navbar-brand" href="index.html">
            <img src="img/SafetyLogo.png" width="50" height="40" alt="" loading="lazy">
        </a>
    </nav>
    <div class="safety">
        <img src="/safetyapp/img/safetyimg.png" alt="safety">
    </div>
    <div class="header-text container py-5">
        <div class="py-3">
            <h2 class="text-uppercase">
                hse_aid
            </h2>
            <p class="lead text-capitalize">We are launching soon</p>
            <p>With Safety_Aid, at the comfort of your office you can monitor your working environment for unsafe acts and unsafe
                conditions, and make appropriate report.</p>
        </div> 
    </div>
   
    <?php if($msg != ''): ?>
         <div style="width: 400px; height: 100px; position:absolute; top:0; right:0;" class="alert <?php echo $msgClass; ?> alert-dismissible fade show ">
             <div><?php echo $msg; ?></div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>
           
    	<?php endif; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="container" id="form">
        <div class="position-relative">
            <input type="email" name="email" id="email" required>
            <input type="submit" name="submit" class="btn btn-success" value="Notify me">
        </div>
    </form>
    
    <div class="phone-graphic">
        <img src="/safetyapp/img/phone1img.png" alt="phone-graphic">
    </div>
    <div class="wave-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L48,69.3C96,107,192,181,288,224C384,267,480,277,576,266.7C672,256,768,224,864,192C960,160,1056,128,1152,117.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
    
    </header>
    <section class="py-5 features">
        <div class="d-flex featurescontainer flex-column container py-5 justify-content-around flex-md-row">
            <div class="phone-track pt-lg-3">
                <img src="/safetyapp/img/Phone2img.png" alt="phone-graphic2">
            </div>
            <div class="features-text pt-lg-3">
                <h4 class="text-uppercase font-weight-bold pb-4">features</h4>
                <ul>
                    <li>Light/Dark mode</li>
                    <li>General HSE tracker</li>
                    <li>Safety report writing</li>
                    <li>Tool box topics</li>
                    <li> Job hazard analysis</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="position-relative text-center">
        <img class="w-100" src="/safetyapp/img/wave2.svg" alt="wave">
    </div>
    <div class="text-center mb-4 p-5">
        <h3 class="text-uppercase">
            key benefits
        </h3>
        <div class="d-flex p-4 align-items-center justify-content-center flex-column flex-md-row">
            <div class="d-flex mr-3 align-items-center">
                <img src="/safetyapp/img/mark.png" alt="mark">
                <p>Work made easier</p>
            </div>
            <div class="d-flex mr-3 align-items-center">
                <img src="/safetyapp/img/mark.png" alt="mark">
                <p>Saves time and energy</p>
            </div>
            <div class="d-flex mr-3 align-items-center">
                <img src="/safetyapp/img/mark.png" alt="mark">
                <p>Accurate KPI keeping</p>
            </div>
        </div>
    </div>
    <div class="countdownsection d-flex justify-content-around flex-md-row flex-column mt-5 py-5">
        <div class="greatworkimg">
            <img src="/safetyapp/img/greatwork.png" alt="greatwork">
        </div>
        <div class="text-center font-weight-bold">
            <div class="countdown my-4 d-flex align-items-center font-weight-bold p-4">
                <div>
                    <span id="days">269</span>
                    <p>Days</p>
                </div>
                <div>
                    <span id="hours">21</span>
                    <p>Hours</p>
                </div>
                <div>
                    <span id="mins">58</span>
                    <p>Minutes</p>
                </div>
                <div>
                    <span id="seconds">30</span>
                    <p>Seconds</p>
                </div>
            </div>
            <div class="p-3 lead">The countdown begins</div>
        </div>
        
    </div>
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
