<?php
require_once"dbconfig.php";
//$result=select("select * from items where itemid='".$_REQUEST['id']."'")
$q="SELECT * FROM items where category='".$_REQUEST['cat']."'";
$result=select($q);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title> GREEN CART </title>

    
    <link rel="icon" href="img\favicon.PNG">

    
    <link href="style.css" rel="stylesheet">

  
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
            color: #000        }
        .navbar-brand i.fa-shopping-basket {
            color: #198754;
        }

        .single-features-area {
        text-align: center;
        padding: 20px;
        border: 1px solid #ddd;
        margin: 20px auto; /* Adjusted margin for better spacing */
        width: 280px; /* Set width to 25% (4 cards in a row) */
        transition: transform 0.3s ease-in-out;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        display: inline-block; /* Display as inline-block to fit 4 in a row */
        box-sizing: border-box;
        float: left; /* Use float to achieve a horizontal layout */
    }

    .single-features-area:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .feature-content {
        margin-top: 15px;
    }

    .feature-title p {
        margin-bottom: 8px;
        font-size: 16px;
        color: #333;
    }

    .feature-title h5 {
        font-size: 24px;
        font-weight: bold;
        color: #198754;
        margin-bottom: 0;
    }

    .price-start {
        font-size: 18px;
        color: #555;
    }

    /* Clearfix to prevent layout issues */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
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
  
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

  
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="mycart.php"></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php"></a>
                                </li>
                            </ul>
                            
                           
						       <div class="dorne-signin-btn">
							   <?php
							   if(isset($_SESSION['login']))
							   {
								   ?><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                              
								<a class="nav-link" href="mycart.php">My Cart</a>
								<a class="nav-link" href="category.php">Category</a>
                              
                                	<a class="nav-link" href="logout.php">Logout</a>
								   
								   <?php
							   }
								   else
								   {
									   ?>
								<a class="nav-link" href="ragister.php">Sign In  or Register</a>
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								
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
    
    <div class="breadcumb-area" style="background-image: url(img/bg-img/hero-1.jpg)"></div>
	</br>
    
    <div class="row" style="padding-left:3rem; display:flex;">
        <?php
        while ($r = mysqli_fetch_array($result)) {
            extract($r);
        ?>
            <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-features-area">
                    <a href="view_detail.php?id=<?= $itemid ?>"><img src="admin/images/<?= $image ?>" style="height:200px;width:400px">
                        <div class="price-start"></div>
                        <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                            <div class="feature-title">
                                <p><?= $Title ?></p>
                                <h5><?= $price ?>/-</h5><br>
                            </div>
                            <?php for ($i = 1; $i <= $item_rating; $i++) : ?>
                                <i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                            <?php endfor; ?>
                        </div></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
	
	<footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | GREEN CART
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>


  
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