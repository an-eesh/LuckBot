<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
$uid=$_GET['uid'];



/*if(isset($_REQUEST['uid']))
{
    $uid=REQUEST['uid'];
    $sql='SELECT * from users where uid='.$uid;
    $result=$conn->query($sql);
    $row=mysqli_fetch_array($result);
    $uid=$row['uid'];
*/
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
    <style>
        th {
            color: green;
        }
         td {
            text-align: center;
         }
    </style>
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
                            <li class="scroll-to-section"><a href="customerHome.php?uid=<?=$uid?>" class="active">Home</a></li>
                            
                            
                           
                           <li class="submenu">
                                <a href="javascript:;">My Orders</a>
                                <ul>
                                    <li><a href="CustomerViewNewOrder.php?uid=<?=$uid?>">New Orders</a></li>
                                   <li><a href="CustomerViewAllOrder.php?uid=<?=$uid?>">All orders</a></li>
                                    <!-- <li><a href="single-product.html">Order Status</a></li> -->
                                </ul>
                            </li>
                           <!-- <li class="scroll-to-section"><a href="#explore">Explore</a></li> -->
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


<section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
 <br>
 <br>

              <table border="1" cellpadding="50" cellspacing="100" width="1200">
                <tr>
                    <td>
                      <table align="center" border="0" cellpadding="10" cellspacing="10" width="1000">
                        <tr>
                           <th colspan="9"><font size="4" color="red"><center>My new orders</center></font></th>
                        </tr>
                        <tr>
                           <th>Product Name</th>
                           <th>Price</th>
                           <th>Category</th>
                           <th>Color</th>
                           <th>Size</th>
                           <th>Quantity</th>
                           <th>Order Date</th>
                           <th>Estimate Delivery Date</th>
                        </tr>
                        <tr>
                            <th colspan="8">------------------------------------------------------------------------------------------------</th>

                      <?php
                            $uid=$_GET['uid'];
                            $sql='SELECT products.pname,orders.prize,categories.category,colors.color,sizes.size,orders.quantity,orders.odate,orders.eddate,products.photo FROM orders LEFT JOIN products ON orders.pid=products.pid LEFT JOIN categories ON orders.cid=categories.cid LEFT JOIN colors ON orders.clrid=colors.clrid LEFT JOIN sizes ON orders.siid=sizes.siid where orders.uid="'.$uid.'"';
                            $result=$conn->query($sql);
                            $slno;
                            $slno=1;
                            while($row=mysqli_fetch_array($result))
                            {
                              $pname=$row['pname'];
                              $prize=$row['prize'];
                              $category=$row['category'];
                              $color=$row['color'];
                              $size=$row['size'];
                              $quantity=$row['quantity'];
                              $odate=$row['odate'];
                              $eddate=$row['eddate'];
                              $photo=$row['photo'];

                              ?>

                              <tr>
                                <td><?=$pname?></td>
                                <td><?=$prize?></td>
                                <td><?=$category?></td>
                                <td><?=$color?></td>
                                <td><?=$size?></td>
                                <td><?=$quantity?></td>
                                <td><?=$odate?></td>
                                <td><?=$eddate?></td>
                                <td><img src="assets/images/PRODUCTS/<?=$photo?>" width="50" height="50"></td>
                              </tr>
                              <?php
                              $slno++;
                            }
                            ?>
                        </table>
                      </td>
                    </tr>
                  </table>
                  </div>

                  </div>
                </div>
              </section>
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


