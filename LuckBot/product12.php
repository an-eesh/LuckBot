<?php 
$servername = "localhost";
$username = "root";
$password = '';
$conn = "luckbot";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$conn);
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
	$sql='SELECT luckbotproducts.name,luckbotorders.lkoid,luckbotproducts.price,companies.company,categories.category,colors.color,sizes.size from luckbotorders LEFT JOIN luckbotproducts ON luckbotproducts.lkpid=luckbotorders.lkpid LEFT JOIN companies ON companies.comid=luckbotproducts.comid LEFT JOIN categories ON categories.cid=luckbotproducts.cid LEFT JOIN colors ON luckbotproducts.clrid=colors.clrid LEFT JOIN sizes ON luckbotproducts.siid=sizes.siid where luckbotproducts.lkpid="12"';
	$result=$conn->query($sql);
	$slno;
	$slno=1;
	while($row=mysqli_fetch_array($result))
	{
	        $name=$row['name'];
	        $lkoid=$row['lkoid'];
            $category=$row['category'];
            $price=$row['price'];
            $company=$row['company'];
            $color=$row['color'];
            $size=$row['size'];
            /*$other=$row['others'];
            $pdescription=$row['description'];
            $photo=$row['photo'];*/
            ?>
            <tr>
            <td><?=$name?></td>
            <td><?=$category?></td>
            <td><?=$price?></td>
            <td><?=$company?></td>
            <td><?=$color?></td>
            <td><?=$size?></td>
           <!-- <td><?=$other?></td>
            <td><?=$description?></td>
            <td><?=$photo?></td>-->
        </tr>

	  <?php
	  $slno++;
      
      }
	  ?>
       
	  	  </table>


	


	





