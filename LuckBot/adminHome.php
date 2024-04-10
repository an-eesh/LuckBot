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
                            
                            <li class="submenu">
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
                                    <li><a href="luckbotProductWiseDisplay.php">View Luckbot Order</a></li>


                                                                        
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Lucky Draw</a>
                                <ul>
                                   
                                   <!-- <li><a href="?viewlk=1">Find Lucky Winner</a></li> -->
                                    <li><a href="?newWinner=1">New Winners</a></li>
                                    <li><a href="?adwinner=1">Winners Report</a></li>



                                                                        
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
                                    <!-- <li><a href="adminLuckbotOrderView.php">Luckbot Winners</a></li> -->

                                    
                                </ul>
                            </li>
                            
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

    <!-- ***** Main Banner Area Start ***** -->


     <!--NEW FILES SECION BEGIN------------->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div align="center">
                        <br>

                 <?php 

                        //Basic settings

                     if(ISSET($_REQUEST['newcountry']))
                        include('newCountry.php');

                    if(ISSET($_REQUEST['newstate']))
                        include('newState.php');

                    if(ISSET($_REQUEST['newdistrict']))
                        include('newDistrict.php');

                    if(ISSET($_REQUEST['newpanchayath']))
                        include('newPanchayath.php');

                    if(ISSET($_REQUEST['adwinner']))
                        include('adminWinner.php');
                    
                    if(ISSET($_REQUEST['newWinner']))
                        include('adminViewNewWinners.php');




                   /* if(ISSET($_REQUEST['newluckydrawproduct']))
                        include('newLuckyDrawProduct.php');

                    if(ISSET($_REQUEST['newluckydrawdiscount']))
                        include('newLuckyDrawDiscount.php'); */


                        /* VIEW */

                    if(ISSET($_REQUEST['viewcustomer']))
                        include('viewCustomer.php');
                    if(ISSET($_REQUEST['newproduct']))
                        include('newProduct.php');
                     if(ISSET($_REQUEST['viewproduct']))
                        include('viewProduct.php');

                    if(ISSET($_REQUEST['neworder']))
                        include('AdminViewNewOrders.php');

                    if(isset($_REQUEST['allorder']))
                        include('AdminViewAllOrders.php');





                    // ****** Luckbot Settings *****
                    if(isset($_REQUEST['addlk']))
                        include('newLuckbotProduct.php');

                    if(isset($_REQUEST['viewlk']))
                        include('viewLuckbotProduct.php');

                /* if(isset($_REQUEST['viewlkproductwise']))
                        include('LuckbotProductWiseDisplay.php'); */
           

                    
                  ?>

                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
     <!--NEW FILES SECION END------------->
     


    
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