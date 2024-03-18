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

.header_area {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    background: #c0d56f; /* Add this line to set the background color */
    box-shadow: var(--box-shadow);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    color: #c0d56f;
    border-bottom: 1px solid transparent;
    height: 90px;
}
    
    .navbar-brand {
            color: #000
        }
    
        .contact-form-area{
        text-align:center;
        width:100%;
        display:center;
    }
    .navbar-brand:hover{
            color :#FFA500;
        }
        .nav-link:hover{
            color :#FFA500;
        }
        
        .contact-text{
            text-align:justify;
        }
        .contact-text h4{
            text-align:center;
        }
        .contact-text h4 span{
            color:green;
        }
        .dorne-signin-btn .nav-link {
        color: black;
    }
        
        .navbar-brand:hover{
            color :#008000;
        }

        .nav-link:hover{
            color :#008000;
        }



</style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    
    

    <header class="header_area bg-#c0d56f" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                    <img src="img\favicona.PNG" alt="" style= "height: 150px; width: auto; margin-right:0px">

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
    <div class="breadcumb-area" style="background-image: url(img/bg-img/hero-1.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex justify-content-center" id="contact">
        <!-- Contact Form Area -->
        <div class="contact-form-area equal-height">
            <div class="contact-text">
                <h4>Hello, Get in <span> touch</span> with us</h4>
                <p>“Welcome To Green Cart! We’re Your Go-To Destination For Fresh, Locally-Sourced Produce. Our Mission Is To Connect Farmers With Customers, Offering Healthy, Sustainable Food Options. Since 2020, We’ve Partnered Directly With Local Farmers, Providing The Freshest Produce While Supporting Our Community. Thank You For Choosing Green Cart—We Look Forward To Serving You!”</p>
                
                <div class="contact-info d-lg-flex justify-content-center">
                    <div class="single-contact-info">
                        <h6> <i class="fa fa-map-marker" aria-hidden="true"></i>Patna, Bihar</h6>
                        <h6><i class="fa fa-map-pin" aria-hidden="true"></i>800012</h6>
                    </div>
                    <div class="single-contact-info justify-content-center">
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

    <script>
    window.addEventListener('scroll', function() {
    var header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.style.backgroundColor = '#c0d56f'; // Set background color when scrolled
    } else {
        header.style.backgroundColor = '#c0d56f'; // Set background color when at the top
    }
});
</script>
</body>

</html>