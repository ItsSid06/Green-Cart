<?php
require_once"dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Green Cart</title>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link href="style.css" rel="stylesheet">
     <link rel="icon" type="image/x-icon" href="img\favicon.PNG">

    <link href="css/responsive/responsive.css" rel="stylesheet">

    <style>


.bg-img {
    width: 100%; /* Adjust as needed */
    height: 100%; /* Adjust as needed */
    background-size: cover; /* Ensure the background image covers the entire element */
    background-position: center; /* Center the background image */
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1)); /* Add drop shadow effect directly to the background image */
}

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
        
        .dorne-signin-btn .nav-link {
        color: black;
    }
        .navbar-brand {
            color: #000
        }

        .bg-img {
            height:500px;
        }
        
        .navbar-brand:hover{
            color :#008000;
        }

        .nav-link:hover{
            color :#008000;
        }
    
    .hero-content h3 {
        text-align:center;
    }
    .hero-content h3 span {
        color:green;
    }
    .hero-content p {
        text-align:center;
    }
    .hero-content p span {
        color:green;
    }
    .hero-content h5{
        text-align:center;
    }
    .hero-content h5 span{
        color:green;
    }
    .d-flex {
    align-items: center;
}


    </style>

<script src="jquery.min.js"></script>
	<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();
aler(query);		   
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchinput.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                          
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      }); 

$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });	  
 });  
 </script>  
</head>

<body>
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
    
</a>
                       
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
                              
								<a class="nav-link" href="mycart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart</a>
								<a class="nav-link" href="category.php">Category</a>
                                <a class="nav-link" href="contact.php"> Contact Us</a>
                                <a class="nav-link" href="logout.php"><i class="fa fa-user" aria-hidden="true"></i> Logout</a>
                                    
                                    
                               
								   
								   <?php
							   }
								   else
								   {
									?>
									   
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								<a class="nav-link" href="category.php">Category</a>
                                <a class="nav-link" href="ragister.php">Sign In or Register</a>
                                <a class="nav-link" href="contact.php">Contact Us</a>
                              
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
     <section class="dorne-welcome-area bg-img" style="background-image: url(img/bg-img/hero-bg.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-6"></br></br>
                <div class="shadow-wrapper">
                    
                <div class="hero-content"></br></br>
                <h3>Fresh And <span> Organic </span> Products For You </h3>
                <p>“ Freshness Delivered To Your Doorstep ” </p>
                <h5> Search <span> Your </span> Products </h5>
                </div>
                    
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<form class="d-flex" method="post" action="search_view.php">  

  
<div class="form-group mr-2">
<input type="text" class="form-control" name= "country" id="country"  placeholder="Type here...">
</div>

<div class="form-group mr-2">
<select class="form-control" name="category">
<option> Select..</option>
<option value="Fruits And Vegetables">Fruits And Vegetables</option>
<option value="Foodgrains, Oils And Spices"> Foodgrains, Oils And Spices</option>
<option value="Bakery, Cakes And Dairy">Bakery, Cakes And Dairy</option>
<option value="Snacks">Snacks</option>
<option value="Beverage">Beverage</option>
<option value="Cleaning Household">Cleaning Households</option>
</select>




</select>     
	 </div>
  </div>
   
<div class="col-lg-4">
  <button type="submit" name="onsearch" id="search_click" class="btn btn-success ">Search</button></div>
</form>	
		 	
</div>
</div>
<div id="countryList" style="background-color:yellow"></div>	

                </div>
            </div>
        </div>
       
        
    </section>
    

    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Grocery Collection</h4>
                        <p>Best Items</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='Fruits And Vegetables'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <div class="single-features-area">
                            <a href="view_detail.php?id=<?=$itemid?>"><img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5></br>
								     </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                    
                            </div></a>
                        </div>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			<div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='Foodgrains, Oils And Spices'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>

			<div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='Bakery, Cakes And Dairy'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			<div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='	
                     Snacks'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			<div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='Beverage'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			<div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 $result=select("select * from items where category='CLEANING HOUSE HOLD'");
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <a href="view_detail.php?id=<?=$itemid?>"><div class="single-features-area">
                            <img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5>
                                    </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                     
                            </div>
                        </div></a>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div></br></br>
			
        </div>
    </section>
    

    <!-- ***** Clients Area Start ***** -->
    

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | GREEN CART <a> </p>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

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