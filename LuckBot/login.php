<script language="javascript" type="text/javascript">
function validate()
{
    var msg='';
     if(document.getElementById("user").value=="")
     {

     alert(" Enter User Name!");

     document.getElementById("user").focus();

     return false;

    }
    
    if(document.getElementById("password").value=="")
         {

     alert(" Enter your Password!");

     document.getElementById("password").focus();

     return false;
        }
        
    
    if(document.getElementById("mobno").value.length<10)

     {

                alert("Your Mobile No. seems incorrect!");

               document.getElementById("mobno").focus();

               return false;

     }

     var digits="0123456789";

     var temp;

     for (var i=0;i<document.getElementById("mobno").value.length;i++)

     {

               temp=document.getElementById("mobno").value.substring(i,i+1);

               if (digits.indexOf(temp)==-1)

               {

                        alert(" Enter correct Mobile Number!");

                        document.getElementById("mobno").focus();

                        return false;

               }
        }
        
    if(document.getElementById("email").value=="")

    {

     alert("Enter your E-mail ID");

     document.getElementById("email").focus();

     return false;

    }

     var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("email").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

    {

               alert("Your Email ID seems incorrect. Enter Correct Email ID.");

               document.getElementById("email").focus();

               return false;

    }
    
        
    
        
    if(document.getElementById('pwd').value=='')
         {

     alert(" Enter password!");

     document.getElementById("pwd").focus();

     return false;
        }
        
    if(document.getElementById("pwd").value.length<6)

    {

    alert("Password must be of 6 or more characters");

    document.getElementById("pwd").focus();

    return false;

    }
     if(document.getElementById("repwd").value.length<6)

    {

    alert("Enter Correct Password again");

    document.getElementById("repwd").focus();

    return false;

    }

    else

     {

      var pwd1=document.getElementById("pwd").value;

      var pwd2=document.getElementById("repwd").value; 

      if(pwd1!=pwd2)

      {

      alert("Password Mismatch");

      document.getElementById("pwd").focus();

      return false;

      }

      }
      
      if(document.getElementById("place").value=="")

    {

     alert("Enter your City/Place!");

     document.getElementById("place").focus();

     return false;

    }

      
      if(document.getElementById("dist").value=="")

    {

     alert("Select Your District!");

     document.getElementById("dist").focus();

     return false;

    }

if(msg!=''){
        alert(msg);
        return false;    

    }
    return true;
    }
</script>






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

    <link rel="stylesheet" href="assets/css/login.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
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
                          <!--  <li class="scroll-to-section"><a href="#men">Lucky Draw Discounts</a></li>
                            <li class="scroll-to-section"><a href="#women">Accessories</a></li>
                            <li class="scroll-to-section"><a href="#kids">Costumes</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#explore">Explore</a></li> -->
                            <li class="scroll-to-section"><a href="#explore">Login</a></li>
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

         <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body bgcolor="blue">


           



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                   


                    <h2 style="font-weight: bold;
  text-transform:uppercase;
  font-size: clamp(5px, 5vw, 30px);
  line-height: 1.1em;
  color: #c80bb8;
  text-align:center;" class="heading-section">Login</h2>
                </div>
            </div>



            <p style="text-align: center; color: red;">
                        <?php
                        if(isset($_REQUEST['message']))
                        {
                        $msg=$_REQUEST['message'];
                               
                        ?>
                        <td style="color: red; text-align: center;"><?=$msg?></td>
                        <?php
                          }       
                        ?>

                    </p>
            <table border="1" align="center">


                <tr>
                    <td>

                 <table border="1"  align="center" background="assets\images\imgx\bg\299.jpg">
                    
                    <tr>
                        <td align="center" ><img src="assets\images\imgx\otherimg\sec.png" ></td>
                    </tr>

                    <tr >
                      <!-- <td><img src="assets\images\imgx\logo\logo.pn" width="100"></td> -->

                                        

                    
                        <!--<td background="assets\images\imgx\bg\logobg.jpg">-->
                            <td>


                                    <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                     
                <!--<div class="img d-flex align-items-center justify-content-center" style="background-image: url(assets\images\1.jpg);"></div> -->

                <div style="color: green;"> 

                <b><h3 class="text-center mb-0"><font color="#a52a2a">Welcome</h3></b>
                <p style="color: white;" class="text-center">Sign in by entering the information below</p>
                        <form action="doaction.php?login=1" method="POST" onSubmit="return validate();" class="login-form">
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                        <input type="text" class="form-control" placeholder="Username" name="user" id="user">
                    </div>
                <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                </div>
                <div class="form-group d-md-flex">
                                <div class="w-100 text-md-right">
                                   <!-- <a href="#">Forgot Password</a> -->
                                </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
                </div>
              </form>
              <div class="w-100 text-center mt-4 text">
                <p style="color: white;" class="mb-0">Don't have an account?</p>
                  <a href="customerRegistration.php">Sign Up</a>
              </div>
            </div>
                </div>
            </div>
        </div>

    </td>


             </td>
</tr>
</table>

</td>
</tr>
</table>


            </section>





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