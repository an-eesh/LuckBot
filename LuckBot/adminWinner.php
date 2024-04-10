<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>

<table border="1" cellpadding="10" cellspacing="10" >
                    <tr>
                       <th colspan="9"><font size="4" color="red">Winners</font></th>
                    </tr>
                    <tr>
                       <th>Date</th>
                       <th>Time</th>
                       <th>Name</th>
                    </tr>

<?php
 $sql='SELECT * FROM winner';
 $result=$conn->query($sql);

 $slno;
 $slno=1;
 while($row=mysqli_fetch_array($result))
 {
 	$date=$row['date'];
 	$time=$row['time'];
 	$name=$row['name'];
 	?>
 	  <tr>
 	  	<td><?=$date?></td><td><?=$time?></td><td><?=$name?></td>
 	  </tr>

 	  <?php
 	  $slno++;
      }
      ?>

     </table>

