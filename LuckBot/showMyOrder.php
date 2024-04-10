<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
$uid=$_GET['uid'];
$pid=$_GET['pid'];
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

<html>
   <head>
   	 <style> 
   	 	td {
   	 		color: white;

   	 	}
   	 	
   	 </style>
   </head>

      <?php

				$sql='SELECT products.pname,products.pprize,companies.company,products.cid,categories.category,products.photo from products LEFT JOIN companies ON products.comid=companies.comid LEFT JOIN categories ON products.cid=categories.cid where pid='.$pid;


				//select * from orders where orders.uid NOT IN (select uid from winner);


				$result=$conn->query($sql);
				$row=mysqli_fetch_array($result);

				$pname=$row['pname'];
				$photo=$row['photo'];
				$prize=$row['pprize'];
				$company=$row['company'];
				$category=$row['category'];
				$cid=$row['cid'];

			?>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

<!---*** ordrer start ***--->
 


<!---*** Main table ***--->



<table border="0" background="assets\images\imgx\bg\o_bg.jpg" shttps://png.pngtree.com/background/20210710/original/pngtree-simple-technology-quality-light-effect-hd-background-picture-image_1064261.jpgtyle="background-repeat: repeat-x; background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="0" cellpadding="0" border="0" width="1000">
	
	<tr>
		<td colspan="4" align="center" style="color: blue; font-size: 30px;">Products</td>
	</tr>
	<tr>
		<td colspan="4" align="center" style="color: white; font-size: 15px;">This is your order product,&nbsp;&nbsp;Thank you for purchasing</td>
	</tr>
	<tr>
		<td colspan="4" style="padding: 20px;" align="center"><img src="assets/images/PRODUCTS/<?=$photo?>" align="center" width="250" height="250"></td>
	</tr>
	<tr>
		<td colspan="4" style="color: red;" align="center"><?=$pname?></td>
	</tr> 
	<tr>
		<td colspan="4" style="color: green;" align="center">Product company:<?=$company?></td>
	</tr>
	<tr>
		<td colspan="4" style="color: green;" align="center">Product prize:<?=$prize?></td>
	</tr>
	</tr>
	<tr>
    	<td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
    	<td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
    	<td>&nbsp;</td><td>&nbsp;</td>
    </tr>
   <tr><td colspan="4" align="center">-----------------------------------------------------------------------------------------------------------</td></tr>

	      



















	
	
			<!-- <table align="center" bgcolor="black" border="1"  width="900"> -->
				<tr>
					<th>Product Price</th><th>Quantity</th><th>Discount</th><th>Amount</th>
				</tr>

<?php
$sql='SELECT * FROM orders where uid="'.$uid.'" AND pid="'.$pid.'"';
$result=$conn->query($sql);

$slno;
$slno=0;
while ($row=mysqli_fetch_array($result)) 
{
	$price=$row['prize'];
	$discount=$row['discount'];
	$quantity=$row['quantity'];
	$netamount=$row['netamount'];
   ?>

        
		<tr>
  	<td><?=$price?></td><td><?=$quantity?></td><td><?=$discount?></td><td><?=$netamount?></td>
		</tr>
				

    <?php
    $slno++;
    }
  ?>
    <tr>
    	<td>&nbsp;</td><td>&nbsp;</td>
    </tr>


            
   
	</table>
</body>



</div>
</div>
</div>








    
    <!-- ***** Subscribe Area Ends ***** -->
    
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