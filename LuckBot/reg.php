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
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

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
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <!-- <div class="wrapper wrapper--w780"> -->
            <?php
                        if(isset($_REQUEST['msg']))
                        {
                        $msg=$_REQUEST['msg'];
                        echo'<tr><td colspan="13" style="color: red;" align="center">'.$msg.'</td></tr>';
                        }        
                        ?>
            <!-- <div class="card card-3"> -->
             <!-- <div class="card-heading"></div> -->
               <!-- <div class="card-body"> -->


                    <h2 class="title">Customer Registration</h2>

                    <form action="doaction.php?registration=1" method="POST">
    <center><table bgcolor="black" width="700">
        <tr>
            <td>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" id="name">
                        </div>
            </td>
         <tr>
            <td>

                        <div class="rs-select2 js-select-simple select--no-search">
                                <label class="input--style-3">Gender:</label>

                                <input class="input--style-3" type="radio" value="Male" name="gender" id="male"><label class="input--style-3">Male</label>
                                <input class="input--style-3" type="radio" value="Female" name="gender" id="female"><label class="input--style-3">Female</label>
                                <input class="input--style-3" type="radio" value="Other" name="gender" id="other"><label class="input--style-3">Other</label>
                                

                        </div>
        </td>
         <tr>
            <td>

                           <br>
                           <br>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="House Name" name="house" id="house">
                        </div>
        </td>
         <tr>
            <td>


                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Place" name="place" id="place">
                        </div>
               </td> 
         <tr>
            <td>


                        

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
                    </td> 
         <tr>
            <td>


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
                </td> 
         <tr>
              <td>



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
            </td> 
         <tr>
            <td>




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

                </td> 
         <tr> 
         <td>


                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Post Office" name="post" id="post">
                        </div>
            </td> 
         <tr>
               <td>         

                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" id="phone">
                        </div>

         </td> 
         <tr>
            <td>

                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Email" name="email" id="email">
                        </div>
        </td> 
         <tr>
            <td>

                        <div class="input-group">
                            <h6 style="color: red;" >User Credintial</h6>
                        </div>
        </td> 
         <tr>
            <td>

                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="User Name" name="user" id="user">
                        </div>
        </td> 
         <tr>
            <td>

                         <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" id="password">
                        </div>
        </td> 
         <tr>
            <td>

                       
                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" type="submit" value="Submit">
                            
                        </div>
        </td> 
         <tr>
            <td>

                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" type="submit" value="Cancel">
                        </div>
         </td>
     </tr>
  </table>    
                    </form>
                </div>
            
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document--