<html>
  <head>
     <style>
       th{
         font-size: 15px;
         padding-bottom: 20px;
       }
     </style>
  </head>

<?php
$lkpid=$_GET['lkpid'];
?>
<form action="doaction.php?lucktry=1&lkpid=<?=$lkpid?>" method="POST">
<table border="0" cellpadding="5" cellspacing="0" align="left" style="font-size:12px;"> 
   
   <tr>
   <td colspan="19" align="center"><h3 style="text-decoration-line: underline; padding-bottom: 5px;">Lucky Winner Participants &  Orders</h3></td>
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

   

    $sql='SELECT luckbotproducts.name,customer.name AS cname,luckbotorderaddress.disprice,categories.category,colors.color,sizes.size,luckbotorderaddress.odate,luckbotorderaddress.eddate,luckbotorderaddress.house,luckbotorderaddress.place,countries.country,states.state,districts.district,panchayath.panchayath,luckbotorderaddress.post,luckbotorderaddress.pin,luckbotorderaddress.landmark from luckbotorderaddress LEFT JOIN luckbotproducts ON luckbotorderaddress.lkpid=luckbotproducts.lkpid LEFT JOIN categories ON luckbotorderaddress.cid=categories.cid LEFT JOIN colors ON luckbotorderaddress.clrid=colors.clrid LEFT JOIN sizes ON luckbotorderaddress.siid=sizes.siid LEFT JOIN customer ON luckbotorderaddress.uid=customer.uid LEFT JOIN countries ON customer.coid=countries.coid LEFT JOIN states ON customer.sid=states.sid LEFT JOIN districts ON customer.did=districts.did LEFT JOIN panchayath ON customer.paid=panchayath.paid where luckbotorderaddress.lkpid='.$lkpid;

   $result=$conn->query($sql);
        $slno;
        $slno=1;
        while($row=mysqli_fetch_array($result))
        {

      $product=$row['name'];
      $user=$row['cname'];
      $disprice=$row['disprice'];
      $category=$row['category'];
      $color=$row['color'];
      $size=$row['size'];
      $odate=$row['odate'];
      $eddate=$row['eddate'];
      $house=$row['house'];
      $place=$row['place'];
      $country=$row['country'];
      $state=$row['state'];
      $district=$row['district'];
      $panchayath=$row['panchayath'];
      $post=$row['post'];
      $pin=$row['pin'];
      $landmark=$row['landmark'];
      ?>
      <tr>
         <td><?=$slno?></td>
         <td><?=$user?></td>
         <td><?=$product?></td>
         <td><?=$disprice?></td>
         <td><?=$category?></td>
         <td><?=$color?></td>
         <td><?=$size?></td>
         <td><?=$odate?></td>
         <td><?=$eddate?></td>
         <td><?=$house?></td>
         <td><?=$place?></td>
         <td><?=$country?></td>
         <td><?=$state?></td>
         <td><?=$district?></td>
         <td><?=$panchayath?></td>
         <td><?=$post?></td>
         <td><?=$pin?></td>
         <td><?=$landmark?></td>
      <?php
      $slno++;
      }
       ?>

      
      <td><input type="submit" value="Try luck"></td>
      
      </tr>
      
 </table>
</form>
