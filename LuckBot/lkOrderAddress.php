<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
$uid=$_GET['uid'];
$lkpid=$_GET['lkpid'];
$price=$_GET['p'];
$cid=$_GET['c'];
$clrid=$_GET['clrid'];
$siid=$_GET['siid'];

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
                            <li class="scroll-to-section"><a href="customerHome.php?uid=<?=$uid?>" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="luckyDraw.php?uid=<?=$uid?>">Lucky Draw</a></li>
                            
                           <!-- <li class="submenu">
                                <a href="javascript:;">My Orders</a>
                                <ul>
                                    <li><a href="CustomerViewNewOrder.php?uid=<?=$uid?>">New Orders</a></li>
                                    <li><a href="?all=1?uid=<?=$uid?>">All orders</a></li>
                                    <li><a href="single-product.html">Order Status</a></li>
                                </ul>
                            </li>-->
                            <!-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                                </ul>
                            </li> -->
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


 <div class="container">
        <div class="row">
             <div class="col-12">




            
<br>
<br>
<br>
<br>
<br>
<br>

<form action="doaction.php?lkorderaddress=1" method="POST" enctype="multipart/form-data">
<!---*** ordrer start ***--->
<table background="assets\images\imgx\bg\o_bg.jpg" style="background-repeat: repeat-x; background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="0" cellpadding="0" border="1" width="1000">
<tr>
    <td>
    <!-- customer details table start-->

                    <table style="margin-left: 10px; margin-right: 20px; margin-bottom: 20px; border: 1px solid darkred; color: White;">
                    <tr>
                    <td>

                            <table align="center" border="0" width="500" cellpadding="10">
                                    <tr>
                                    <td colspan="2" style="color: #fd9612;font-size: 20px;" align="center">Customer Details</th>
                                    </tr>
                                    <tr>
                                    <td>House name</td><td><input type="text" name="house" id="house" placeholder="House Name" style="padding: 12px 20px; width: 100%;"></td>
                                    </tr>
                                    <tr>
                                    <td>Place</td>
                                    <td>
                                    <input type="text" name="place" id="place" placeholder="Place" style="padding: 12px 20px; width: 100%;">
                                    </td>
                                    <tr>
                                        <td>Estimate date:</td>
                                        <td><input type="text" name="hgsfs" readonly="readonly" value="7 days after current Date "style="padding: 8px 20px;  color: green;"></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                    <td>
                                    Country:</td>
                                    <td>
                                    <select class="input--style-3" type="text" placeholder="Country" name="coid" id="coid"  onChange="getpanchayath();">
                                    <option value="0" selected="selected">- -Select- -</option>
                                    <?php
                                    $sql="SELECT * FROM countries";
                                    $result=$conn->query($sql);
                                    while($row = mysqli_fetch_array($result))
                                    echo '<option value="'.$row['coid'].'" selected="selected">'.$row['country'].'</option>';                                          
                                    ?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>State:</td>
                                    <td>
                                    <select class="input--style-3" type="text" placeholder="Country" name="sid" id="sid"  onChange="getpanchayath();">
                                    <option value="0" selected="selected">- -Select- -</option>
                                    <?php
                                    $sql="SELECT * FROM states";
                                    $result=$conn->query($sql);
                                    while($row = mysqli_fetch_array($result))
                                    echo '<option value="'.$row['sid'].'" selected="selected">'.$row['state'].'</option>';
                                    ?>
                                    </td>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>
                                    District:</td>
                                    <td>
                                    <select class="input--style-3" type="text" placeholder="Country" name="did" id="did"  onChange="getpanchayath();">
                                    <option value="0" selected="selected">- -Select- -</option>
                                    <?php
                                    $sql="SELECT * FROM districts";
                                    $result=$conn->query($sql);
                                    while($row = mysqli_fetch_array($result))
                                    echo '<option value="'.$row['did'].'" selected="selected">'.$row['district'].'</option>';
                                    ?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>Panchayath:</td>
                                    <td>
                                    <select class="input--style-3" type="text" placeholder="Country" name="paid" id="paid"  onChange="getpanchayath();">
                                    <option value="0" selected="selected">- -Select- -</option>
                                    <?php
                                    $sql="SELECT * FROM panchayath";
                                    $result=$conn->query($sql);
                                    while($row = mysqli_fetch_array($result))
                                    echo '<option value="'.$row['paid'].'" selected="selected">'.$row['panchayath'].'</option>';                                          
                                    ?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>Post:</td>
                                    <td>
                                    <input type="text" name="post" id="post" placeholder="Post" style="padding: 12px 20px; width: 100%;">
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>Pin Code:</td>
                                    <td>
                                    <input type="text" name="pin" id="pin" placeholder="Pin Code" style="padding: 12px 20px; width: 100%;">
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>Land Mark:</td>
                                    <td>
                                    <input type="text" name="landmark" id="landmark" placeholder="Land Mark" style="padding: 12px 20px; width: 100%;">
                                    </td>
                                    </tr>

                                    <tr>
                                    <td><input type="hidden" name="uid" value="<?=$uid?>"></td>
                                    <td><input type="hidden" name="lkpid" value="<?=$lkpid?>"></td>
                                    </tr>
                                    <tr>
                                    <td><input type="hidden" name="disprice" value="<?=$price?>"></td>
                                    <td><input type="hidden" name="cid" value="<?=$cid?>"></td>
                                    <td><input type="hidden" name="clrid" value="<?=$clrid?>"></td>
                                    <td><input type="hidden" name="siid" value="<?=$siid?>"></td>
                                    </tr>
                                    <tr>
                                    <td colspan="2" align="center">
                                    <input type="button" name="cancel" value="Cancel" style="background-color:Red">&nbsp; &nbsp;
                                    <input type="submit" name="submit" value="Confirm Order" style="background-color:Orange">
                                    </td>
                                    </tr>
                            </table>

                    </td>
                    </tr>
                </table>

                

            
</td>
</tr>
</table>

        <!--*** customer detail table end***-->
    </form>



           
        
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

