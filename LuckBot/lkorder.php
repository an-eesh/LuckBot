<?php


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>


<form action="doaction.php?lucktry=1&?lkpid='.$lkpid" method="POST">
<table border="1" cellpadding="5" cellspacing="0" align="left" style="font-size:12px;">  
   <tr>
   <td colspan="12" align="center"><h3>View Applicants</h3></td>
   </tr> 
    <tr>
   <th>sl NO</th>
   <th>Customer</th>
   <th>Product</th>
   <th>Price</th>
   <th>Category</th>
   <th>Color</th>
   <th>Size</th>
   <th>Order Date</th>
   <th>Delivery Date</th>
   <th>House Name</th>
   <th>Place</th>
   <th>Country</th>
   <th>State</th>
   <th>District</th>
   <th>Panchayath</th>
   <th>Post</th>
   <th>Pin</th>
   <th>Landmark</th>   
   <th>Action</th>
  </tr>
    
      <?php

   $lkpid=$_GET['lkpid'];

    $sql='SELECT * FROM winner where lkpid='.$lkpid;

   $result=$conn->query($sql);
        $slno;
        $slno=1;
        while($row=mysqli_fetch_array($result))
        {

      $date=$row['date'];
      $name=$row['name'];
      $lkpid=$row['lkpid'];
      $oaid=$row['oaid'];
      $tcid=$row['tcid'];
      $tsid=$row['tsid'];
      $ts2id=$row['ts2id'];
      $lkoid=$row['lkoid'];
      ?>
      <tr>
         <td><?=$slno?></td>
         <td><?=$date?></td>
         <td><?=$name?></td>
         <td><?=$lkpid?></td>
         <td><?=$oaid?></td>
         <td><?=$tcid?></td>
         <td><?=$tsid?></td>
         <td><?=$ts2id?></td>
         <td><?=$lkoid?></td>
         <td><input type="submit" value="Confirm"></td>
      </tr>
      <?php
      $slno++;
      }
       ?>
      
 </table>
</form>
