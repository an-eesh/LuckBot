<?php


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>

<?php
	$sql='SELECT luckbotorders.lkoid,customer.name AS cname,luckbotproducts.name FROM luckbotorders LEFT JOIN customer ON luckbotorders.uid=customer.uid LEFT JOIN luckbotproducts ON luckbotproducts.lkpid=luckbotorders.lkpid ORDER BY RAND() LIMIT 1';
	$result=$conn->query($sql);

	$row=mysqli_fetch_array($result);

	$lkoid=$row['lkoid'];
	$user=$row['cname'];
	$pname=$row['name'];
?>

<h1>SELETED PERSON IS=<?=$lkoid?></h1><br>
<h1>SELETED PERSON IS=<?=$user?></h1><br>
<h1>SELETED PERSON IS=<?=$pname?></h1><br>