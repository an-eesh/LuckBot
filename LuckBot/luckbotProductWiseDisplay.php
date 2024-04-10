<?php
define("photopath","./assets/images/PRODUCTS/");
define("luckbotphotopath","./assets/images/LUCKBOT_PRODUCTS/");
//include('include/userfunctions.php');
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>luck bot</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
   
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">



                           <!-- <img src="assets/images/logo.png">-->
                            <img src="assets\images\imgx\logo\logo.png">



                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="adminHome.php" class="active">Home</a></li>
                            
                           <!-- <li class="submenu">
                                <a href="javascript:;">Basic Settings</a>
                                <ul>
                                    <li><a href="?newcountry=1">Add Country</a></li>
                                    <li><a href="?newstate=1">Add State</a></li>
                                     <li><a href="?newdistrict=1">Add District</a></li>
                                      <li><a href="?newpanchayath=1">Add Panchayath</a></li>
                                    <li><a href="?newproduct=1">Add Product</a></li>

                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Luckbot Settings</a>
                                <ul>
                                    <li><a href="?addlk=1">Add Luckbot products</a></li>
                                    <li><a href="?viewlk=1">view Luckbot products</a></li>

                                                                        
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Views</a>
                                <ul>
                                    <li><a href="?viewcustomer=1">All Customers</a></li>
                                    <li><a href="?viewproduct=1">All Products</a></li>
                                    

                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Orders</a>
                                <ul>
                                    <li><a href="?neworder=1">New Orders</a></li>
                                    <li><a href="?allorder=1">All Orders</a></li>
                                    
                                </ul>
                            </li> -->
                            
                            <li class="scroll-to-section"><a href="index.php">Logout</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


     <div class="container">
            <div class="row">
                 <div class="col-12">

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    



                    <table style="background-color:black; color:#FFFFFF" align="center" cellspacing="10" cellpadding="10" border="0" width="900">
                        <tr>
                        <td colspan="4" align="center"><img src="assets\images\imgx\bg.gif" width="300" height="300"></td>
                        <td colspan="4" align="center"><img src="assets\images\imgx\bg.gif" width="300" height="300"></td>
                        <td colspan="4" align="center"><img src="assets\images\imgx\bg.gif" width="300" height="300"></td>
                        </tr>  
                        <tr>
                            <td colspan="12"><h3 align="center">Find Lucky Winners</h3></td>
                        </tr>
                        <tr>
                            <td colspan="12" align="center"><h6>Click on Product to find the Lucky Winner for each Product</h6></td>
                        </tr>
                        <tr>
                            <?php
                                $sql='SELECT * FROM luckbotproducts';
                                $result=$conn->query($sql);
                                $slno;
                                $slno=1;
                                while($row=mysqli_fetch_array($result))
                                {
                                    $lkpid=$row['lkpid'];

                                ?>

                                 <td align="center"><a href="?product=1&lkpid=<?=$lkpid?>">Product&nbsp;<?=$slno?></a></td>
                            <?php
                            $slno++;
                             }
                            ?>
                            
                        </tr>
                        <tr>
                            <td colspan="12">

                            <?php
                             if(isset($_REQUEST['product']))
                                include('product1.php');
                            
                            ?>
                        </td>

                        </tr>

                    </table>

                 </div>
            </div>
     </div>


<!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets\images\imgx\logo\logo.png" alt="luck bot ecommerce">
                        </div>
                        <ul>
                            <li><a href="#">Chennai, Tamil Nadu, India</a></li>
                            <li><a href="#">luckbot@company.com</a></li>
                            <li><a href="#">8848138934</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Mobile Shopping</a></li>
                        <li><a href="#">Watch Shopping</a></li>
                        <li><a href="#">Accessories Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © Aneesh G,Fahad Shabeeb,Unnikrishnan Third Year Bsc Ihrd Model College. 
                        
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>


