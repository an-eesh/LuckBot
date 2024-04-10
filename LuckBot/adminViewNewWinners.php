<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>

<table border="1" cellpadding="10" cellspacing="10" width="900" >
<?php
if(isset($_REQUEST['message']))
{
  echo'<tr><td colspan="6" style="color:darkred;">'.$_REQUEST['message'].'</td></tr>';
}

?>

                    <tr>
                       <th colspan="6" align="center"><font size="4" color="red">Winners in the Current Sales Process & Delivery</font></th>
                    </tr>
                    <tr>
                       <th>Date</th>
                       <th>Time</th>
                       <th>Name</th>
                       <th>Product</th>
                       <th>&nbsp;</th>                       
                       <th style="width: 20%;">Action</th>
                    </tr>

<?php
 $status="N";
 $sql='SELECT winner.*, luckbotproducts.name AS pname,luckbotproducts.photo,luckbotorderaddress.oaid FROM winner LEFT JOIN luckbotorderaddress ON luckbotorderaddress.lkoid= winner.lkoid LEFT JOIN luckbotproducts ON luckbotproducts.lkpid=winner.lkpid where winner.status="'.$status.'"';
 $result=$conn->query($sql);

 $slno;
 $slno=1;
 while($row=mysqli_fetch_array($result))
 {
   $wid=$row['wid'];
 	$date=$row['date'];
 	$time=$row['time'];
 	$name=$row['name'];
   $photo=$row['photo'];
   $pname=$row['pname'];
 	?>
 	  <tr>
 	  	<td><?=$date?></td><td><?=$time?></td><td><?=$name?></td><td><?=$pname?></td><td><img src="assets\images\LUCKBOT_PRODUCTS\<?=$photo?>" height="150" width="150"></td>
      <td><b><a href="doaction.php?winnerDelivery=1&wid=<?=$wid?>" style="background-color:Red;color:white;">&nbsp;Make Delivery</a></b></td>
 	  </tr>

 	  <?php
 	  $slno++;
      }
      ?>

     </table>

