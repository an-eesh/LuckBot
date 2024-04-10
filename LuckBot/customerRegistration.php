




<?php


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
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            
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

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Luckbot</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets\css\formreg.css" rel="stylesheet" media="all">
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div >
        <div class="wrapper wrapper--w780">
            <?php
                        if(isset($_REQUEST['msg']))
                        {
                        $msg=$_REQUEST['msg'];
                        echo'<tr><td colspan="13" style="color: red;" align="center">'.$msg.'</td></tr>';
                        }        
                        ?>
            <div>
            <table border="0" style="background-color:#260144;" width="900px;">
            <tr>
                <td>
            <table border="0" style="background-color:#260144;" width="700px;">
            <tr>
                <td>   


                    <center><h2 class="title">Customer Registration</h2></center>

                    <form action="doaction.php?registration=1" method="POST" onSubmit="return validate();" enctype="multipart/form-data">

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" id="name">
                        </div>

                        <div class="rs-select2 js-select-simple select--no-search">
                                <label class="input--style-3">Gender:</label>

                                <input class="input--style-3" type="radio" value="Male" name="gender" id="male"><label class="input--style-3">Male</label>
                                <input class="input--style-3" type="radio" value="Female" name="gender" id="female"><label class="input--style-3">Female</label>
                                <input class="input--style-3" type="radio" value="Other" name="gender" id="other"><label class="input--style-3">Other</label>
                                

                        </div>
                           <br>
                           <br>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="House Name" name="house" id="house">
                        </div>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Place" name="place" id="place">
                        </div>

                        

                        <div class="input-group">


                            <label class="input--style-3">Country</label>
                                <select class="input--style-3" type="text" placeholder="State" name="coid" id="coid"  onChange="getpanchayath();">
                                <option value="0" selected="selected">- -Select- -</option>
                                <?php
                                $sql="SELECT * FROM countries";
                                $result=$conn->query($sql);
                                while($row = mysqli_fetch_array($result))
                                echo '<option value="'.$row['coid'].'" selected="selected">'.$row['country'].'</option>';                                          
                                ?>
                                </select>

                        </div>




                        <div class="input-group">


                            <label class="input--style-3">State</label>
                                <select class="input--style-3" type="text" placeholder="State" name="sid" id="sid"  onChange="getpanchayath();">
                                <option value="0" selected="selected">- -Select- -</option>
                                <?php
                                $sql="SELECT * FROM states";
                                $result=$conn->query($sql);
                                while($row = mysqli_fetch_array($result))
                                echo '<option value="'.$row['sid'].'" selected="selected">'.$row['state'].'</option>';                                          
                                ?>
                                </select>

                        </div>



                         <div class="input-group">

                             <label class="input--style-3">District</label>


                                <select class="input--style-3" type="text" placeholder="State" name="did" id="did"  onChange="getpanchayath();">
                                <option value="0" selected="selected">- -Select- -</option>
                                <?php
                                $sql="SELECT * FROM districts";
                                $result=$conn->query($sql);
                                while($row = mysqli_fetch_array($result))
                                echo '<option value="'.$row['did'].'" selected="selected">'.$row['district'].'</option>';                                          
                                ?>
                                </select>
                        </div>



                            <label class="input--style-3">Panchayath</label>
                                 <select class="input--style-3" type="text" placeholder="State" name="paid" id="paid"  onChange="getpanchayath();">
                                    <option value="0" selected="selected">- -Select- -</option>
                                    <?php
                                    $sql="SELECT * FROM panchayath";
                                    $result=$conn->query($sql);
                                    while($row = mysqli_fetch_array($result))
                                    echo '<option value="'.$row['paid'].'" selected="selected">'.$row['panchayath'].'</option>';                                          
                                    ?>
                        
                                </select>



                        </div>

                       

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Post Office" name="post" id="post">
                        </div>
                        

                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" id="phone">
                        </div>



                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Email" name="email" id="email">
                        </div>

                        <div class="input-group">
                            <h6 style="color: red;" >User Credintial</h6>
                        </div>

                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="User Name" name="user" id="user">
                        </div>

                         <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" id="password">
                        </div>

                       
                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" type="submit" value="Submit">
                            
                        </div>
                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" type="submit" value="Cancel">
                        </div>    
                    </form>
               </td>
               </tr>
               </table> 
        </td>
               </tr>
               </table> 


        </div>
    </div>

    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document--


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


