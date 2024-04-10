<?php


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>

<table style="background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="10" cellpadding="10" border="2" width="700">   
   <tr>
   <td colspan="12" align="center"><h3>View Product</h3></td>
   </tr> 
    <tr>
        <th align="left">pno</th> 
        <th align="left">Product Name</th> 
        <th align="left">Product Category</th>
        <th align="left">Product Prize</th>
        <th align="left">Product Company</th>
        <th align="left">Product Color</th>
        <th align="left">Product Size</th>
        <th align="left">Others</th>
        <th align="left">Product Description</th>
        <th align="left">Product Photos</th>
        
    </tr>

<?php

	$sql='SELECT luckbotproducts.name,luckbotproducts.price,categories.category,colors.color,sizes.size,luckbotproducts.photo FROM luckbotproducts LEFT JOIN categories ON luckbotproducts.cid=categories.cid LEFT JOIN colors ON luckbotproducts.clrid=colors.clrid LEFT JOIN sizes ON luckbotproducts.siid=sizes.siid';
	$result=$conn->query($sql);

	$slno;
	$slno=1;

	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		$price=$row['price'];
		$category=$row['category'];
		$color=$row['color'];
		$size=$row['size'];
		$photo=$row['photo'];
		?>
	<tr>
    <td><?=$name?></td>
    <td><?=$category?></td>
    <td><?=$price?></td>
    <td><?=$color?></td>
    <td><?=$size?></td>
    <td><img src="assets\images\LUCKBOT_PRODUCTS\<?=$photo?>" height="50" width="50"></td> 
  </tr> 

    <?php
      $slno++;
      }
    ?>
  </table>