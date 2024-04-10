<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
$uid=$_GET['uid'];
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
                            
                            <li class="submenu">
                                <a href="javascript:;">Win</a>
                                <ul>
                                    <li><a href="ViewWin.php?uid=<?=$uid?>">Winned products</a></li>

                                </ul>
                            </li>
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
                            <li class="scroll-to-section"><a href="userInfo.php?uid=<?=$uid?>"><img src="assets\images\imgx\logo\user1.png" height="30" width="30"></a></li>
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

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



     <div class="container">
            <div class="row">
                 <div class="col-12">



                <table border="0" bgcolor="black" width="700">
                    <tr>
                        <td>

                    <table border="0" width="1000" background="assets\images\imgx\bg.gif" >
                      <tr>
                        <td>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                                <td align="center">
                                    <h1 style="color: royalblue; size: 14px;">Welcome To Lucky Draw</h1>
                                </td>
                               <tr>
                                <td>&nbsp;</td>
                               </tr>
                               <tr>
                                <td>&nbsp;</td>
                               </tr>

                            </tr>
                         </td>
                      </tr>  
                    </table>


                    <!-------******** Lucky Draw *********---------->

                    <!-- **** Products **** -->

  
  
  <br>
  <br>
  <br>
  <Br>
     <table style="background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="10" cellpadding="10" border="0" width="700">  
     
   <tr>
    <?php
         if(isset($_REQUEST['msg']))
         {
         $msg=$_REQUEST['msg'];
         echo'<tr><td colspan="13" style="color: red;" align="center">'.$msg.'</td></tr>';
         }        
         ?>
   <td colspan="12" align="center"><h3>Product</h3></td>
   </tr> 

       
 
   
    <tr>

        <?php
            $sql='SELECT * from luckbotproducts';          
            $result=$conn->query($sql);
            $slno;
            $slno=1;
            while($row=mysqli_fetch_array($result))
            {
                $lkpid=$row['lkpid'];
                $name=$row['name'];
                $price=$row['price'];
                $photo=$row['photo'];
                $slot=$row['slots'];
                ?>
                <td align="center"><img src="assets\images\LUCKBOT_PRODUCTS\<?=$photo?>" height="250" width="250">
                <p><font color="#6f1cf4"><b><?=$name?></b></font></p>
                <p style="color: orange;";><b>&#8377;<?=$row['price']?></b></p>
                <!--<p><a href="orderLuckbot.php?lkpid=<?=$lkpid?>&uid=<?=$uid?>"><b><font color="#fd9612">Order Now</font></b></a></p>-->
                <?php
                $sql1="select * from luckbotorders where lkpid=".$lkpid;
                $result1=$conn->query($sql1);
                $count1=mysqli_num_rows($result1);
                
                if($count1>=$slot)
                {
                    ?>
                    <p style="background-color:#FFA07A;"><font color="White"><b>Sold Out</b></font></p></td> 
                    <?php
                }
                else
               {
                ?>
                 <p style="background-color:#fd9612;"><a href="orderLuckbot.php?lkpid=<?=$lkpid?>&uid=<?=$uid?>"><b><font color="White">Order Now</font></b></a></p>
                 <?php
               } 
                ?>
                <?php   
                if($slno%4==0)
                {
                    echo '</tr><tr>';
                    
                   
                } 
                $slno++;
                continue;
            }
            ?>
    
    </tr>                  
    </table>
</form>


                    <!-------******** Lucky Draw *********---------->




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

