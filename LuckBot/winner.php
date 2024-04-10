<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
$uid=$_GET['uid'];

?>





                 	<?php
                 	$sql='SELECT * FROM winner where uid='.$uid.'';
                 	$result=$conn->query($sql);
                 	
                 	$row=mysqli_fetch_array($result);

                 	$winner=$row['name'];
                 	?>




<html>
  <head>
    <style>
			img {
			opacity: 1;
			animation: disappear 5s linear 2s infinite alternate;
			}

			h3 {
			opacity: 0;
			animation: disappear 10s linear 0s infinite alternate;
			color: white;
			text-align: center;
			}
			h1{
				color: white;
				margin-top: 30px;
				margin-left: 20;
				font-size: 20px;
			}

			/* The animation code */
			@keyframes disappear {
			from {opacity: 1;}
			to {opacity: 0;}
			}
    </style>
   </head>
   <body bgcolor="black">
   	<a href="adminHome.php"><u><h1>Home</h1></u></a>
   	<div id="promo" class="gif" style="margin-top:33px;">
     <center><img width="320" height="267" src="assets\images\imgx\win2.gif"></center>
     <marque><h3><?=$winner?></h3></marque>
     <center><img width="320" height="267" src="assets\images\imgx\win2.gif"></center>
    </div>
   </body>
</html>
