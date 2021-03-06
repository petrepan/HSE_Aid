<?php
    require('config.php');

    $msg = "";
    $msgClass = "";

    //check for a submit
    if(isset($_POST['submit'])){
        // get form data
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $sql_e = "SELECT id FROM emails WHERE email='$email'";
        $res_e = mysqli_query($conn, $sql_e);

        if(mysqli_num_rows($res_e) > 0){
                $msg = "Cheers! Your email has been added already";
                $msgClass = "alert-danger";
        }else{
             $sql = "INSERT INTO emails(email) VALUES('$email')";

        if(mysqli_query($conn, $sql)){
            session_start(); // Start the session

		    $_SESSION['email'] = htmlentities($_POST['email']);
            header('Location: confirm.php');
             
        }else{
            echo 'ERROR: ' . mysqli_error($conn);
        }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap-css/custom.css" />
    <link rel="stylesheet" href="/css/bootstrap-css/bootstrap.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <title>HSE_Aid | Safety App</title>
     <meta name="title" content="HSE_Aid | Safety App">
        <meta name="description" content="Keep your work environment safe with ease.">

        <meta property="og:type" content="website">
        <meta property="og:url" content="https://hse-aid.herokuapp.com/">
        <meta property="og:title" content="HSE_Aid | Safety App">
        <meta property="og:description" content="Keep your work environment safe with ease.">
        <meta property="og:image"
            content="https://res.cloudinary.com/petrepan/image/upload/v1594971879/wavemockup3_2_pwemtb.png">

        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://hoteltemplate.netlify.app/">
        <meta property="twitter:title" content="HSE_Aid | Safety App">
        <meta property="twitter:description" content="Keep your work environment safe with ease">
        <meta property="twitter:image"
            content="https://res.cloudinary.com/petrepan/image/upload/v1594971879/wavemockup3_2_pwemtb.png">
  </head>
  <body>
    <header class="text-light">
        <div class="container">
            <nav class="navbar navbar-light container py-md-4">
                <a class="navbar-brand" href="index.php">
                    <img src="img/SafetyLogo.png" width="60" height="45" alt="" loading="lazy">
                </a>
            </nav>
            
            <?php if($msg != ''): ?>
                <div class="msg alert <?php echo $msgClass; ?> alert-dismissible fade show" role="alert">
                    <div><?php echo $msg; ?></div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
                    <?php endif; ?>
          
            
            <div class="safety animate__animated animate__rubberBand">
                <img src="/img/safetyimg.png" alt="safety">
            </div>
            <div class="header-text mt-3 container py-md-5">
                <div class="py-1">
                    <h2 class="text-uppercase">
                        hse_aid
                    </h2>
                    <p class="lead text-capitalize">We are launching soon</p>
                    <p>With Safety_Aid, at the comfort of your office you can monitor your working environment for
                        unsafe acts and unsafe
                        conditions, and make appropriate report.</p>
                </div>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mb-2 px-3" id="form">
                <div class="position-relative">
                    <div class="d-flex">
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                        <input type="submit" name="submit" class="btn btn-success" value="Notify me">
                    </div>
                </div>
            </form>

            <div class="phone-graphic">
                <div class="mockup wave-mockup1 animate__animated animate__bounceInLeft">
                    <img class="wave-img" src="/img/wavemockup1.png" alt="Light/Dark mode">
                </div>
                <div class="mockup wave-mockup2 animate__animated animate__bounceInDown">
                    <img class="wave-img" src="/img/wavemockup2.png" alt="Tool box topics">
                </div>
                <div class="mockup wave-mockup3 animate__animated animate__bounceInRight">
                    <img class="wave-img" src="/img/wavemockup3.png" alt="HSE_Aid">
                </div>
            </div>

            <div id="myModal" class="modal">
                <span class="closebtn text-white">X</span>
                <div class="content-wrap">
                    <img class="modal-content" id="img01">
                </div>
                <div id="caption"></div>
            </div>
        </div>
    
    </header>

    <section class="py-5 features">
        <div class="featurescontainer container pb-md-4 pt-5">
            <div class="phone-track pt-md-4">
               <div class="mockup features-mockup" data-aos="zoom-in-right">
                   <img class="wave-img" src="/img/featuremockup1.png" alt="Safety report writing">
               </div>
               <div class="mockup features-mockup2" data-aos="zoom-out-up">
                   <img class="wave-img" src="/img/featuremockup2.png" alt="General HSE Tracker">
               </div>
               <div class="mockup features-mockup3" data-aos="zoom-in">
                   <img class="wave-img" src="/img/featuremockup3.png" alt="Job hazard analysis">
               </div>
            </div>
            <div class="features-text pt-lg-4">
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
        <img class="w-100" src="/img/wave2.svg" alt="wave">
    </div>
    <div class="mb-4 text-center py-5 container">
        <h4 class="text-uppercase py-3">
            key benefits
        </h4>
        <div class="benefits container position-relative py-3">
            <div class="d-flex m-3 align-items-center pr-2">
                <img src="/img/mark.png" alt="mark">
                <p>Work made easier</p>
            </div>
            <div class="d-flex m-3 align-items-center pr-2">
                <img src="/img/mark.png" alt="mark">
                <p>Saves time and energy</p>
            </div>
            <div class="d-flex m-3 align-items-center pr-2">
                <img src="/img/mark.png" alt="mark">
                <p>Accurate KPI keeping</p>
            </div>
        </div>
    </div>
    <div class="countdownsection d-flex mt-3 justify-content-around flex-md-row flex-column mt-5 py-5">
        <div class="greatworkimg">
            <img src="/img/greatwork.png" alt="greatwork">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/js/app.js"></script>
    <script src="/js/bootstrap-js/jquery.js"></script>
    <script src="/js/bootstrap-js/popper.js"></script>
    <script src="/js/bootstrap-js/bootstrap.js"></script>
  </body>
</html>
