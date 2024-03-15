<?php
try{
    $db= new mysqli("localhost", "root","", "online_grocery");
}
    catch (Exception $exc){
        echo $exc->getTraceAsString();
    }
    if ((isset($_POST['name'])) && isset($_POST['email']) && isset($_POST['subject']) && (isset($_POST['message'])))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $db-> query("INSERT INTO `contact`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>GREEN CART</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon1.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <style> 
    
    .navbar-brand i.fa-shopping-basket {
        color: #198754;
    }
    .navbar-brand {
            color: #000
        }
    
        .contact-form-area{
        width:100%;
        display:block;
    }
    .navbar-brand:hover{
            color :#FFA500;
        }
        .nav-link:hover{
            color :#FFA500;
        }    


</style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    
    

    <header class="header_area bg-success" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        
                    <a class="navbar-brand" href="index.php"> <i class="fa fa-shopping-basket"> </i> GREEN CART </a>
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    
                                </li>
                                
                            </ul>
                             <div class="dorne-signin-btn">
							   <?php
							   if(isset($_SESSION['login']))
							   {
								   ?><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                              
								
                                <a class="nav-link" href="logout.php">Logout</a>
                                    
                                    
                               
								   
								   <?php
							   }
								   else
								   {
									   ?>
									   
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			
                                <a class="nav-link" href="ragister.php">Sign In  or Register</a>
                                
                              
								   <?php
								   }
							   
							   ?>
                                
                            </div>
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
        <!-- Contact Form Area -->
        <div class="contact-form-area equal-height">
            <div class="contact-text">
                <h4>Hello, Get in touch with us</h4>
                <p>“Welcome to GreenCart! We’re your go-to destination for fresh, locally-sourced produce. Our mission is to connect farmers with customers, offering healthy, sustainable food options. Since 2020, we’ve partnered directly with local farmers, providing the freshest produce while supporting our community. Thank you for choosing GreenCart—we look forward to serving you!”</p>
                
                <div class="contact-info d-lg-flex">
                    <div class="single-contact-info">
                        <h6> <i class="fa fa-map-marker" aria-hidden="true"></i>Patna, Bihar</h6>
                        <h6><i class="fa fa-map-pin" aria-hidden="true"></i>800012</h6>
                    </div>
                    <div class="single-contact-info">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> greencartofficial@gmail.com</h6>
                        <h6><i class="fa fa-phone" aria-hidden="true"></i> +91 9122974807</h6>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="contact-form-title">
                    <h6>Contact Business</h6>
                </div>
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn dorne-btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!-- ***** Contact Area End ***** -->



    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>