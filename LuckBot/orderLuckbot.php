<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
$uid=$_GET['uid'];
$lkpid=$_GET['lkpid'];
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
                                <a href="javascript:;">My Orders</a>
                                <ul>
                                    <li><a href="CustomerViewNewOrder.php?uid=<?=$uid?>">New Orders</a></li>
                                    <li><a href="?all=1?uid=<?=$uid?>">All orders</a></li>
                                    <li><a href="single-product.html">Order Status</a></li>
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
                            <li class="scroll-to-section"><a href="#index.php">Logout</a></li>
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
                

<html>
  <head>
  	  <title></title>
  </head>

  <body>


  		<?php

				$sql='SELECT * from luckbotproducts where lkpid='.$lkpid;
				$result=$conn->query($sql);
				$row=mysqli_fetch_array($result);
				$name=$row['name'];
				$photo=$row['photo'];
				$price=$row['price'];
				$slots=$row['slots'];
				$cid=$row['cid'];
                $clrid=$row['clrid'];
                $siid=$row['siid'];


				/*$company=$row['company'];
				$cid=$row['cid']; */

			?>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
            

<!---*** ordrer start ***--->
   <table align="center" bgcolor="#BF40BF" border="1"  width="1010">
   	  <tr>
   	  	<td>
   	  		    <table align="center" bgcolor="white" border="0" width="1000">
			   	  <tr>
			   	  	<td>


<!---*** Main table ***--->

<form method="POST" enctype="multipart/form-data">

<table background="assets\images\imgx\bg\o_bg.jpg" style="background-repeat: repeat-x; background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="0" cellpadding="0" border="0" width="1000">
	<tr>
		<td colspan="2" align="center" style="color: blue; font-size: 30px;">Products</td>
	</tr>
	<tr>
		<td colspan="2" style="padding: 20px;" align="center"><img src="assets/images/LUCKBOT_PRODUCTS/<?=$photo?>" align="center" width="250" height="250"></td>
	</tr>
	<tr>
		<td colspan="2" style="color: red;" align="center"><?=$name?></td>
	</tr> 
	<!---<tr>
		<td colspan="2" style="color: green;" align="center">Product company:<?=$company?></td>
	</tr> -->
	<tr>
		<td colspan="2" style="color: green;" align="center">Product price:<?=$price?></td>
	</tr>
	<tr>
		<td><input type="hidden" name="lkpid" value="<?=$lkpid?>">
            <input type="hidden" name="uid" value="<?=$uid?>">
            <input type="hidden" name="cid" value="<?=$cid?>"></td>
        <td><input type="hidden" name="price" value="<?=$price?>"></td>
	<tr>
		<td colspan="2" align="center">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </td>
	</tr>

<tr>
	<td>

	<!---------***** slots *****------>
<?php
$sql1="select * from luckbotorderaddress where lkpid=".$lkpid;
$result1=$conn->query($sql1);

$count1=mysqli_num_rows($result1);


?>

                                       
<table align="center" width="100" cellpadding="20" cellspacing="20" border="2" style="margin-bottom: 20px; background-color:darkgreen;">
	<?php
	$count=1;
	while($count<=$slots)
	{
		if($count<=$count1)
		{
			
			echo '<td style="margin-bottom: 20px; background-color:Red;">&nbsp;</td>';


		}
		else
		{
			echo '<td>&nbsp;</td>';
		}
			
			
			if($count%10==0)
			{
			echo '</tr><tr>';


			}
			$count++;
			continue;
		
		
	}
	?>
</table>


<!---------***** End slots *****------>
     </td>
 </tr>

	
		
		
		<tr>
			<td colspan="2" align="center">
				<input type="button" name="cancel" value="Cancel">&nbsp; &nbsp;
				<a href="lkOrderAddress.php?lkpid=<?=$lkpid?>&uid=<?=$uid?>&p=<?=$price?>&c=<?=$cid?>&clrid=<?=$clrid?>&siid=<?=$siid?>">order</a>
			</td>
		</tr>
	</table>
</form>
<!---------- main table end --------->

 </td>
    </tr>
       </table>





   </td>
	    </tr>
	       </table>


<!---*** ordrer end ***--->

				
	
  </body>
 </html>

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

