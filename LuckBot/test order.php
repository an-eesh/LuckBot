<?php


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
$uid=$_GET['uid'];
$pid=$_GET['pid'];






?>

<html>
  <head>
  	  <title></title>
  </head>

  <body>


  		<?php

				$sql='SELECT * from products where pid='.$pid;
				$result=$conn->query($sql);
				$row=mysqli_fetch_array($result);

				$pname=$row['pname'];
				$photo=$row['photo'];
				$prize=$row['pprize'];
				$cid=$row['cid'];

			?>
				
	<table style="background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="10" cellpadding="10" border="1" width="900">
							<tr>
							<td>

							<h1 align="center">Product Details</h1>

							<table border="0" align="center" width="700">
							<tr>
							<td>


    <form action="doaction.php?order=1" method="POST" enctype="multipart/form-data">     
		<table style="background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="10" cellpadding="10" border="1" width="700">
			 
							<tr>
							<td align="center"><img src="assets\images\PRODUCTS\<?=$photo?>" height="350" width="350"></td>


							</tr>
							<tr>
							<th><font size="6" color="red"><?=$pname?></font></th>
							</tr>

							<tr>
							<td style="color:green;">Product prize:<?=$prize?></td>
							</tr>

							<tr>
							<td style="color:green;">Product Company:</td>
							</tr>

							<tr>
							<td style="color:green;">Product prize:</td>
							</tr>

							

							<tr>
							<td align="center"><label>choose color:</label></td>
							<td> 

							<select class="input--style-3" type="text" placeholder="State" name="clrid" id="clrid"  onChange="getpanchayath();">
							<option value="0" selected="selected">- -Select- -</option>
							<?php
							$sql="SELECT * FROM colors";
							$result=$conn->query($sql);
							while($row = mysqli_fetch_array($result))
							echo '<option value="'.$row['clrid'].'" selected="selected">'.$row['color'].'</option>';                                          
							?>
							</select>
							</td>
							</tr>
							<tr>
							<td align="center"><label>choose size:</label></td>
							<td>
									<select class="input--style-3" type="text" placeholder="State" name="siid" id="siid"  onChange="getpanchayath();">
									<option value="0" selected="selected">- -Select- -</option>
									<?php
									$sql="SELECT * FROM sizes";
									$result=$conn->query($sql);
									while($row = mysqli_fetch_array($result))
									echo '<option value="'.$row['siid'].'" selected="selected">'.$row['size'].'</option>';
		              ?>
		              </select>
							<tr>
							<td align="center"><input type="text" name="quantity" id="quantity" placeholder="Quantity" style="padding: 8px 20px; width: 100%; color: green;">
							</td>
							</tr>
							
							<tr>
							<td align="center"><input type="text" name="eddate" id="eddate" placeholder="Estimate Delivery Date" style="padding: 8px 20px; width: 100%; color: green;"></td>
							</tr>                                           
							
							
							</td>
							</tr>

			</table>

	   	    
	  



  <table style="background-color:#CCCCCC color:#FFFFFF"align="center" cellspacing="10" cellpadding="10" border="1" width="700">

					<tr>
					<td align="center" style="color: red; font-size:40px;">Order Details</td>
					</tr>
					<tr>
					<td align="center"><input type="text" name="house" id="house" placeholder="House Name" style="padding: 12px 20px; width: 100%;"></td>
					</tr>

					<tr>
							<td align="center">
							<input type="text" name="place" id="place" placeholder="Place" style="padding: 12px 20px; width: 100%;">
					</td>
					</tr>

					<tr>
							<td><font color="green" size="5">country:</font>
							<select class="input--style-3" type="text" placeholder="Country" name="coid" id="coid"  onChange="getpanchayath();">
							        <option value="0" selected="selected">- -Select- -</option>
							        <?php
							        $sql="SELECT * FROM countries";
							        $result=$conn->query($sql);
							        while($row = mysqli_fetch_array($result))
							        echo '<option value="'.$row['coid'].'" selected="selected">'.$row['country'].'</option>';                                          
							        ?>
							</select>
							</td>
					</tr>
					<tr>
							<td><font color="green" size="5">States:</font>
							<select class="input--style-3" type="text" placeholder="State" name="sid" id="sid"  onChange="getpanchayath();">
							        <option value="0" selected="selected">- -Select- -</option>
							        <?php
							        $sql="SELECT * FROM states";
							        $result=$conn->query($sql);
							        while($row = mysqli_fetch_array($result))
							        echo '<option value="'.$row['sid'].'" selected="selected">'.$row['state'].'</option>';                                          
							        ?>
							</select>
							</td>
					</tr>
					<tr>
							<td><font color="green" size="5">District:</font>
							<select class="input--style-3" type="text" placeholder="District" name="did" id="did"  onChange="getpanchayath();">
							        <option value="0" selected="selected">- -Select- -</option>
							        <?php
							        $sql="SELECT * FROM districts";
							        $result=$conn->query($sql);
							        while($row = mysqli_fetch_array($result))
							        echo '<option value="'.$row['did'].'" selected="selected">'.$row['district'].'</option>';                                          
							        ?>
							</select>
							</td>
					</tr>
					<tr>
							<td><font color="green" size="5">Panchayath:</font>
							<select class="input--style-3" type="text" placeholder="Panchayath" name="paid" id="paid"  onChange="getpanchayath();">
							        <option value="0" selected="selected">- -Select- -</option>
							        <?php
							        $sql="SELECT * FROM panchayath";
							        $result=$conn->query($sql);
							        while($row = mysqli_fetch_array($result))
							        echo '<option value="'.$row['paid'].'" selected="selected">'.$row['panchayath'].'</option>';                                          
							        ?>
							</select>
							</td>
					</tr>
					<tr>
							<td align="center"><input type="text" name="post" id="post" placeholder="Post" style="padding: 12px 20px; width: 100%;"></td>
					</tr>

          <tr>
							<td align="center"><input type="text" name="pin" id="pin" placeholder="Pin Code" style="padding: 12px 20px; width: 100%;"></td>
					</tr>

					<tr>
							<td align="center"><input type="text" name="landmark" id="landmark" placeholder="Land Mark" style="padding: 12px 20px; width: 100%;"></td>
          </tr>
          <tr>
          	<td><input type="hidden" name="uid" value="<?=$uid?>"></td>
          	<td><input type="hidden" name="pid" value="<?=$pid?>"></td>
          </tr>
          <tr>
          		<td><input type="hidden" name="prize" value="<?=$prize?>"></td>
          		<td><input type="hidden" name="cid" value="<?=$cid?>"></td>
          </tr>
          </tr>
          <tr>
							<td align="center">
								<input type="submit" value="Order" name="order">
								<input type="submit" value="Cancel" name="cancel">
							</td>
          </tr>
         
</table>
</form>	 

	</td>
   </tr>
  </table>


  </body>
 </html>
