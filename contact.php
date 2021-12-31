<?php

$resultError="";
$resultSuccess="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    //echo '<pre>'; print_r($_POST); exit;

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 0;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name 
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='collegevsgoi@gmail.com';
$mail->Password='Hacker@143';

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('collegevsgoi@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);

$mail->isHTML(true);
$mail->Subject='Form Submission: ' .$_POST['subject'];
$mail->Body='<h1 align=center>Name : ' .$_POST['name']. '<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg_'].'</h1>';

if(!$mail->send()){
  $resultError="Something went wrong.Please try again after some time";
}
else{
  $resultSuccess="Thanks ".$_POST['name']." for contacting. I will get back to you soon.";
}
}
?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>📧 Contact me - Prateek Kumar Singh - Full-Stack-Web Developer</title>
        <link rel="icon" type="image/jpg" href="images/icon-2.PNG" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/af5476175e.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
    </head>
    <!--Body-->

    <body class="background-contact-me">
        <div class="main-custom-div">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-color">
                <div class="container-fluid nav-font pt-1">
                    <div class="col-2 d-none d-sm-none d-md-none d-lg-none d-xl-block"></div>
                    <div class="col-1 d-none d-sm-none d-md-none d-lg-block d-xl-none"></div>
                    <a class="navbar-brand col-2 nav-name" href="index.html">
    Prateek Kumar Singh</a
  >
  <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span
      class="
        navbar-toggler-icon
        position-relative
        justify-content-sm-end
      "
    ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav justify-content-center">
      <li class="nav-item services">
        <a
          class="nav-link active"
          aria-current="page"
          href="index.html#services"
          >Services</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.html#projects"
          >Projects</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.html#about">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html#contact">Contact</a
        >
      </li>
      <li class="nav-item work-link d-none d-lg-block">
        <a class="nav-link work-link-color" href="index.html"
          ><i class="fas fa-chevron-left pe-1"></i> Back to main page
        </a>
                    </li>
                    </ul>
                </div>
        </div>
        </nav>
        <!--Contact Me card-->
        <div class="container-fluid">
            <!--Navbar-->

            <!--Image Memoji-->
            <div class="row">
                <div class="col-12" align="center">
                    <div class="card padding-contact padding-body-contact">
                        <div class="card-body">
                            <div class="col-12 exit d-lg-none d-xl-none" align="end">
                                <a href="index.html" class="link-email"><i class="fas fa-times"></i
                ></a>
                            </div>
                            <div class="col-12" align="center">
                                <img src="images/icon-1.png" class="image-contact img-fluid" alt="Icon of Mili" />
                            </div>
                        </div>
                        <!--Email-->
                        <div class="container">
                            <div class="row" align="center">
                                <div class="col-12">
                                    <h3 class="email-contact">
                                        Prateek Kumar SIngh
                                    </h3>
                                </div>
                                <div class="col-12">
                                    <h3 class="email-contact" style="font-size: 30px !important;">
                                        <a href="mailto:prateekvs62@gmail.com" class="link-email">prateekvs62@gmail.com</a
                    >
                  </h3>
                </div>
              </div>
            </div>
            <!--Another contact option-->
            <div class="container contact-information">
              <div class="row icons-contact" align="center">
                <div class="col-4">
                  <a
                    class="link-email"
                    href="https://www.linkedin.com/in/prateekvns62/"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                                </div>
                                <div class="col-4 margin-mobile-instagram">
                                    <a class="link-email" href="https://www.instagram.com/prateekvns62/"><i class="fab fa-instagram"></i
                  ></a>
                                </div>
                                <div class="col-4">
                                    <a class="link-email" href="https://twitter.com/prateekvns62"><i class="fab fa-twitter"></i
                  ></a>
                                </div>
                            </div>
                        </div>
                        <!--End of Card background-->
                    </div>

                    <div class="card padding-contact padding-body-contact" style="margin-top: -5rem !important;">
                        <form class="row form wrapper d-block text-lg-start" action="#" method="post" id="form-box">
                            <h3 class="email-contact text-center mb-lg-5 mb-4 text-decoration-underline" style="margin-top: 0rem !important;">Leave A Message</h3>
                            <div class="col-lg-12" style="position: relative;">
                                <div class="col-sm-4 col-xs-12 form-group ">
                                    <label class="sr-only">Name</label>
                                    <input name="name" class="form-control" type="text" placeholder="Name" required>
                                </div>
                                </br>
                                <!-- /.form-group -->
                                <div class="col-sm-4 col-xs-12 form-group">
                                    <label class="sr-only">Email</label>
                                    <input name="email" class="form-control" type="email" placeholder="Email address" required>
                                </div>
                                </br>
                                <!-- /.form-group -->
                                <div class="col-sm-4 col-xs-12 form-group">
                                    <label class="sr-only">Subject</label>
                                    <input name="subject" class="form-control" type="text" placeholder="Subject" required>
                                </div>
                                </br>
                                <div class="col-lg-2 d-lg-block d-none" style="position: absolute; top: 30px;
                        right: 160px;"><img src="images/contact_icon.png " style="width: 100px; height: 100px; " alt="s "></div>
                            </div>
                            <!-- /.form-group -->
                            <div class="row ">
                                <div class="col-md-12 col-xs-12 form-group ">
                                    <label class="sr-only">Message</label>
                                    <textarea name="msg_" id="msg_" class="message form-control " placeholder="Write message " cols="30 " rows="4 " required></textarea></br>
                                </div>
                                </br>

                                <!-- /.form-group -->
                                <input class="btn btn-sm btn-primary " name="submit" id="submit " type="submit" value="Submit">
                               <div style="color:green; margin-top: 15px; font-size: 24px;"> <?php echo $resultSuccess; ?> </div>
                               <div style="color:red; margin-top: 15px; font-size: 24px;"> <?php echo $resultError; ?> </div>
                            </div>
                        </form>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <!--Contact information-->
            <!--End of container-->
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ " crossorigin="anonymous "></script>
        <script src="javascript/jsc.js "></script>
    </body>

    </html>