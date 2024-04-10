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

     $sql='SELECT products.pname,categories.category,products.pprize,companies.company,colors.color,sizes.size,products.others,products.description,products.photo from products LEFT JOIN categories ON products.cid=categories.cid LEFT JOIN companies ON products.comid=companies.comid LEFT JOIN colors on products.clrid=colors.clrid LEFT JOIN sizes ON products.siid=sizes.siid';

     $result=$conn->query($sql);

        $pno;
        $pno=1;
        while($row=mysqli_fetch_array($result))
        {
            $name=$row['pname'];
            $category=$row['category'];
            $price=$row['pprize'];
            $company=$row['company'];
            $color=$row['color'];
            $size=$row['size'];
            $other=$row['others'];
            $description=$row['description'];
            $photo=$row['photo'];
            ?>
            <tr>
            <td><?=$pno?></td>
            <td><?=$name?></td>
            <td><?=$category?></td>
            <td><?=$price?></td>
            <td><?=$company?></td>
            <td><?=$color?></td>
            <td><?=$size?></td>
         


           <td><img src="assets\images\PRODUCTS\<?=$photo?>" height="50" width="50"></td>
            </tr> -->
            <?php 
            $pno++;
        }
?>
</table>