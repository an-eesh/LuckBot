<?php


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>

<table border="1" cellpadding="5" cellspacing="0" align="left" style="font-size:12px;">
  <tr>
    <th colspan="21"><font size="4" color="red">New Orders From Customers</font></th>
  </tr>

  <tr>
   <th>Customer</th>
   <th>Product</th>
   <th>Price</th>
   <th>Category</th>
   <th>Color</th>
   <th>Size</th>
   <th>Qty</th>
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
   <th>Amount</th> 
   <th>Discount</th>
   <th>Action</th>
  </tr>

 <?php
  $sql='SELECT users.user,products.pname,orders.oid,orders.prize,categories.category,colors.color,sizes.size,orders.quantity,orders.odate,orders.eddate,orders.house,orders.place,countries.country,states.state,districts.district,panchayath.panchayath,orders.post,orders.pin,orders.landmark,orders.amount,orders.discount FROM orders LEFT JOIN users ON orders.uid=users.uid LEFT JOIN products ON orders.pid=products.pid LEFT JOIN categories ON orders.cid=categories.cid LEFT JOIN colors ON orders.clrid=colors.clrid LEFT JOIN sizes ON orders.siid=sizes.siid LEFT JOIN countries ON orders.coid=countries.coid LEFT JOIN states ON orders.sid=states.sid LEFT JOIN districts ON orders.did=districts.did LEFT JOIN panchayath ON orders.paid=panchayath.paid';

  $result=$conn->query($sql);
  $slno;
  $slno=1;
  while($row=mysqli_fetch_array($result))
        {
            $oid=$row['oid'];


            $user=$row['user'];
            $pname=$row['pname'];
            $prize=$row['prize'];

            $category=$row['category'];
            $color=$row['color'];
            $size=$row['size'];

            $quantity=$row['quantity'];
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

            $amount=$row['amount'];
            $discount=$row['discount'];
          ?>

            <tr>
              <td><?=$user?></td>
              <td><?=$pname?></td>
              <td><?=$prize?></td>
              <td><?=$category?></td>
              <td><?=$color?></td>
              <td><?=$size?></td>
              <td><?=$quantity?></td>
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
              <td><?=$discount?></td>
              <td><?=$amount?></td>
              <td><b><a href="delivery.php?oid=<?=$oid?>" style="background-color:darkgreen;color:white;">&nbsp;DELIVER&nbsp;</a></b></td>
            </tr>
    <?php
      $slno++;
      }
    ?>
  </table>
         

            