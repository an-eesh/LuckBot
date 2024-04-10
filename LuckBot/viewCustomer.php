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
   <td colspan="12" align="center"><h3>View Applicants</h3></td>
   </tr> 
    <tr>
        <th align="left">Sl.No</th> 
        <th align="left">Name</th> 
        <th align="left">Gender</th>
        <th align="left">House</th>
        <th align="left">Place</th>
        <th align="left">Country</th>
        <th align="left">State</th>
        <th align="left">District</th>
        <th align="left">Panchayath</th>
        <th align="left">Post</th>
        <th align="left">phone</th>
        <th align="left">E-mail</th>
    </tr>
  
    <?php

     $sql="SELECT customer.cuid ,customer.name ,customer.house ,customer.gender ,customer.place ,customer.post ,customer.phone ,customer.email ,customer.user ,countries.country ,states.state ,districts.district ,panchayath.panchayath FROM customer LEFT JOIN countries ON customer.coid=countries.coid LEFT JOIN states ON customer.sid=states.sid LEFT JOIN districts ON customer.did=districts.did LEFT JOIN panchayath ON customer.paid=panchayath.paid";
        $result=$conn->query($sql);
        $slno;
        $slno=1;
        while($row=mysqli_fetch_array($result))
        {
            $name=$row['name'];
            $gender=$row['gender'];
            $house=$row['house'];
            $place=$row['place'];
            $post=$row['post'];
            $phone=$row['phone'];
            $email=$row['email'];
            $country=$row['country'];
            $state=$row['state'];
            $district=$row['district'];
            $panchayath=$row['panchayath'];
            ?>
            <tr>
            <td><?=$slno?></td>
            <td><?=$name?></td>
            <td><?=$gender?></td>
            <td><?=$house?></td>
            <td><?=$place?></td>
            <td><?=$country?></td>
            <td><?=$state?></td>
            <td><?=$district?></td>
            <td><?=$panchayath?></td>
            <td><?=$post?></td>
            <td><?=$phone?></td>
            <td><?=$email?></td>
            </tr> 
            <?php 
            $slno++;
        }
?>
</table>