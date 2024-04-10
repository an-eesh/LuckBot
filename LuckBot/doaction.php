<?php
define("photopath","./assets/images/PRODUCTS/");
define("luckbotphotopath","./assets/images/LUCKBOT_PRODUCTS/");
//include('include/userfunctions.php');
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//login

if(isset($_REQUEST['login']))
{
	$user=$_POST['user'];
	$password=$_POST['password'];

	$sql="select * from users where user='".$user."' AND password='".$password."'";

	$result=$conn->query($sql);

	$count=mysqli_num_rows($result);

	if($count==0)
	{
		$msg="Incorrect Username and password! Try Again";	  
		header('location:login.php?message='.$msg);
	}
	else
	{
		$row=mysqli_fetch_array($result);

		$uid=$row['uid'];

		$utype=$row['utype'];

		if($utype=="A")
		  {
		  	header('location:adminHome.php');
		  }
		else
		  {
			  header('location:customerHome.php?uid='.$uid);	
		  }
  }
}


//login end




//customer registration

if(isset($_REQUEST['registration']))
{
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$house=$_POST['house'];
	$place=$_POST['place'];
	$coid=$_POST['coid'];
	$sid=$_POST['sid'];
	$did=$_POST['did'];
	$paid=$_POST['paid'];
	$post=$_POST['post'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$user=$_POST['user'];
	$password=$_POST['password'];

	$utype="C";

	$sql='INSERT INTO users (user,password,utype) VALUES ("'.$user.'","'.$password.'","'.$utype.'")';

  $result=$conn->query($sql);

  if($result)
  {
  	$uid=mysqli_insert_id($conn);
 
  $sql1='INSERT INTO customer (name,gender,house,place,coid,sid,did,paid,post,phone,email,user,password,uid) values ("'.$name.'","'.$gender.'","'.$house.'","'.$place.'","'.$coid.'","'.$sid.'","'.$did.'","'.$paid.'","'.$post.'","'.$phone.'","'.$email.'","'.$user.'","'.$password.'","'.$uid.'")';

    $result1=$conn->query($sql1);

		    if($result1)
		    {
		    	header('location:customerRegistration.php?msg='.$suc);
		    }
		    
		    else
		    {
		    	$suc="Registration failure, Try Again";
		         
		    }
   }

   // header(' ');

 }

  //customer registration end


 // Customer View

/* $sql="SELECT customer.cuid ,customer.name ,customer.house ,customer.gender ,customer.place ,customer.post ,customer.phone ,customer.email ,customer.user ,countries.country ,states.state ,districts.district ,panchayath.panchayath FROM customer LEFT JOIN countries ON customer.coid=countries.coid LEFT JOIN states ON customer.sid=states.sid LEFT JOIN districts ON customer.did=districts.did LEFT JOIN panchayath ON customer.paid=panchayath.paid;"

 $result=$conn->query($sql);

 i=1;

while($row=mysqli_fetch_array($resul))
{

	$name=$row['name'];
	$gender=$row['gender'];
	$house=$row['house'];
	$place=$row['place'];
	$coid=$row['coid'];
	$sid=$row['sid'];
	$did=$row['did'];
	$paid=$row['paid'];
	$post=$row['post'];
	$phone=$row['phone'];
	$email=$row['email'];


}
*/

//View Customer end





//Add country

if(isset($_REQUEST['addCountry']))
{
	$country=$_POST['country'];

$sql='INSERT INTO countries (`Country`) values ("'.$country.'")';

$result=$conn->query($sql);

  if($result)
  {
  	$msg="country Added Successfully";
  }
  else
  {
    $msg="Error Occured! Try Again";
  } 
  header('location:adminHome.php?newcountry=1&msg='.$msg);
} 

//add country end




//add state

if(isset($_REQUEST['addState']))
{
	$coid=$_POST['coid'];
	$state=$_POST['state'];

$sql='INSERT INTO states (coid,state) values ("'.$coid.'","'.$state.'")';

$result=$conn->query($sql);

if($result)
  {
  	$msg="State Added Successfully";
  }
  else
  {
    $msg="Error Occured! Try Again";
  } 
  header('location:adminHome.php?newstate=1&msg='.$msg);
} 


//add state end


//add district end


if(isset($_REQUEST['addDistrict']))
{
	$district=$_POST['district'];

$sql='INSERT INTO districts (sid,district) values ("3","'.$district.'")';

$result=$conn->query($sql);

if($result)
  {
  	$msg="District Added Successfully";
  }
  else
  {
    $msg="Error Occured! Try Again";
  } 
  header('location:adminHome.php?newdistrict=1&msg='.$msg);
} 

//add district end



//add panchayath

if(isset($_REQUEST['addPanchayath']))
{
	$panchayath=$_POST['panchayath'];
	$did=$_POST['did'];

$sql='INSERT INTO panchayath (did,panchayath) values ("'.$did.'","'.$panchayath.'")';

$result=$conn->query($sql);

if($result)
  {
  	$msg="Panchayath Added Successfully";
  }
  else
  {
    $msg="Error Occured! Try Again";
  } 
  header('location:adminHome.php?newpanchayath=1&msg='.$msg);
} 
//end add panchayath





//Delete country

if(isset($_REQUEST['deletecountry']))
{
	$country=$_POST['country'];

	$sql='delete from countries where country="'.$country.'"';

	$result=$conn->query($sql);
}

//Delete country end


//option delete


if(isset($_REQUEST['optiondelete']))
{
	$toption=$_POST['toption'];
	$coption=$_POST['coption'];
	$soption=$_POST['soption'];



	$sql='delete from "'.$toption.'" where "'.$coption.'"="'.$soption.'"';

	$result=$conn->query($sql);
}







//add product
    
   if(isset($_REQUEST['newproduct']))
   {

     $pname=$_POST['pname'];
     $pcategory=$_POST['pcategory'];
     $pprize=$_POST['pprize'];
     $pcompany=$_POST['pcompany'];
     $pcolor=$_POST['pcolor'];
     $psize=$_POST['psize'];
     $other=$_POST['other'];

     $pdescription=$_POST['pdescription'];
     $photo=$_FILES["photo"]["name"];
		//Insert to Photo field
		if(count($_FILES)>0)
		{
			foreach($_FILES as $serfile)
			{			
				if(is_file($serfile['tmp_name']))
				{
					//$ser_name=$_FILES["photo"]['name'];
					$photofile=$_FILES["photo"]['name'];
					//$destfilename = $cid.'_client'.strtolower(substr($ser_name,strpos($photofile,'.')));
					$destfile = constant("photopath").$photofile;
					move_uploaded_file($_FILES["photo"]['tmp_name'],$destfile);
					//$client_photo=', photo_file="'.$destfilename.'"';
				}
			}
		}


     	$sql='INSERT INTO products (pname,cid,pprize,comid,clrid,siid,others,description,photo) values("'.$pname.'","'.$pcategory.'","'.$pprize.'","'.$pcompany.'","'.$pcolor.'","'.$psize.'","'.$other.'","'.$pdescription.'","'.$photo.'")';
      
			$result=$conn->query($sql);
			if($result)
			{
				$msg="Product Added Successfully";	
				header('location:adminHome.php?newproduct=1&msg='.$msg);
				  
			}

			else
			{
				$msg="Error! Try Again";	
			}
   }










   //+++++++++++++++++++++++++++++++++++++++++++++++order ++++++++++++++++++++++++++++++++++++++++++++++++++++

   // ***** start order ********


  // ***** start order ********


  if(isset($_REQUEST['order']))
  {
		$uid=$_POST['uid'];
  	$pid=$_POST['pid'];
  	$cid=$_POST['cid'];
  	$prize=$_POST['prize'];
  	$discount="0";
  	$quantity=$_POST['quantity'];
  	$odate=date('Y-m-d');
  	$date = date('Y-m-d');
		$eddate = date('Y-m-d',strtotime('+7 day',strtotime($date)));
  	$clrid=$_POST['clrid'];
  	$siid=$_POST['siid'];
  	$house=$_POST['house'];
  	$place=$_POST['place'];
  	$coid=$_POST['coid'];
  	$sid=$_POST['sid'];
  	$did=$_POST['did'];
  	$paid=$_POST['paid'];
  	$post=$_POST['post'];
  	$pin=$_POST['pin'];
  	$landmark=$_POST['landmark'];
  	$status='N';
  	$amount= (int)$prize * (int)$quantity;

  	$sql='INSERT INTO `orders` (`uid`, `pid`, `prize`,`discount`, `cid`, `clrid`, `siid`, `quantity`, `odate`, `eddate`, `house`, `place`, `coid`, `sid`, `did`, `paid`, `post`, `pin`, `landmark`,`amount`,`netamount`,`status`) VALUES ("'.$uid.'","'.$pid.'","'.$prize.'","'.$discount.'","'.$cid.'","'.$clrid.'","'.$siid.'","'.$quantity.'","'.$odate.'","'.$eddate.'","'.$house.'","'.$place.'","'.$coid.'","'.$sid.'","'.$did.'","'.$paid.'","'.$post.'","'.$pin.'","'.$landmark.'","'.$amount.'","'.$amount.'","'.$status.'")';
  	$result=$conn->query($sql);
    $oid=mysqli_insert_id($conn);

  	//discount calculation
  		
    	






  	
  	 	$sql='select * from winner where uid='.$uid;
  	  $result=$conn->query($sql);
  	  $count=mysqli_num_rows($result);
			if($count==0)
			{
				$sql1='select * from products where pid='.$pid;
				
				$result1=$conn->query($sql1);
				$slno1;
				$slno1=1;
				$row1=mysqli_fetch_array($result1);				
					$pprize=$row1['pprize'];
						//Disount 
						$sql2='select * from temporder left join luckbotproductsbackup on temporder.lkpid=luckbotproductsbackup.lkpid where temporder.uid='.$uid;
						$result2=$conn->query($sql2);
						$row2=mysqli_fetch_array($result2);	
						$price=$row2['price'];
					$discount=$price;
					$netamount=$amount-$discount;
			//------------------------------------------------------------------------------------------------------
		  $sql3='select * from orders where uid='.$uid.' order by oid ASC LIMIT 1';
  	  $result3=$conn->query($sql3);
  	  $count3=mysqli_num_rows($result3);
			if($count3>0)
			{
					$row3=mysqli_fetch_array($result3);		
					$ooid=$row3['oid'];
					$sqlu='UPDATE orders SET discount='.$discount.', netamount='.$netamount.' where oid='.$ooid;
					$resultu=$conn->query($sqlu);
					if($resultu)
					{
					$msg="Your Order Placed Successfully";
					}
					else
					{
					$msg="Error.Try Again";	
					}

			}
			//-------------------------------------------------------------------------------------------------------		
		}
			header('location:showMyorder.php?uid='.$uid.'&pid='.$pid.'&msg='.$msg);
   }
 //---------------------------------------------------------
       







  		




 
			
       //  *****order end********



       //Luck bot new product

       if(isset($_REQUEST['luckbotnewproduct']))
       {
       	$name=$_POST['name'];
       	$price=$_POST['price'];
       	$slots=$_POST['slot'];
       	$cid=$_POST['category'];
       	$comid=$_POST['company'];
       	$clrid=$_POST['color'];
       	$siid=$_POST['size'];
       	$others=$_POST['others'];
       	$description=$_POST['description'];
       	
       	$photo=$_FILES["photo"]["name"];
				//Insert to Photo field
				if(count($_FILES)>0)
				{
					foreach($_FILES as $serfile)
					{			
						if(is_file($serfile['tmp_name']))
						{
							//$ser_name=$_FILES["photo"]['name'];
							$photofile=$_FILES["photo"]['name'];
							//$destfilename = $cid.'_client'.strtolower(substr($ser_name,strpos($photofile,'.')));
							$destfile = constant("luckbotphotopath").$photofile;
							move_uploaded_file($_FILES["photo"]['tmp_name'],$destfile);
							//$client_photo=', photo_file="'.$destfilename.'"';
						}
					}
				}

			 $sql='INSERT INTO luckbotproducts (name,price,slots,cid,comid,clrid,siid,others,description,photo) values("'.$name.'","'.$price.'","'.$slots.'","'.$cid.'","'.$comid.'","'.$clrid.'","'.$siid.'","'.$others.'","'.$description.'","'.$photo.'")';
			$result=$conn->query($sql);
			$lkpid=mysqli_insert_id($conn);
			if($result)
			{
          $sql1='INSERT INTO luckbotproductsbackup (lkpid,name,price) VALUES("'.$lkpid.'","'.$name.'","'.$price.'")';
         	$result1=$conn->query($sql1);

         	if($result1)
         	{
         		$msg="Product Added Successfully";	
         	}
         	  else
         	 {
         	 	$msg="Error! Try again";	
         	 }
         	header('location:adminHome.php?addlk=1&msg='.$msg);
      }	
	 }

		   // ******** Luckbot Order ************

		  if(isset($_REQUEST['dresslkorder']))
		  {
		  	$lkpid=$_POST['lkpid'];
		  	$uid=$_POST['uid'];

		    $sql='INSERT INTO luckbotorders (lkpid,uid) VALUES("'.$lkpid.'","'.$uid.'")';
		  	$result=$conn->query($sql);
		  	if($result)
		  	{
		  		$msg="Order Succesfully Placed";
		  	}
		  	else
		  	{
		  		$msg="Somethimg Went Wrong,Try again";
		  	}
		  	//header('location:orderLuckbot.php?lkpid='.$lkpid.'&uid='.$uid);
		  }


		   //********* Luckbot order end *********


		   // ***** start order address********


if(isset($_REQUEST['lkorderaddress']))
{
		$uid=$_POST['uid'];
		$lkpid=$_POST['lkpid'];
		$disprice=$_POST['disprice'];
		$cid=$_POST['cid'];
		$clrid=$_POST['clrid'];
		$siid=$_POST['siid'];
		$odate=date('Y-m-d');
		$date = date('Y-m-d');
		$eddate = date('Y-m-d',strtotime('+7 day',strtotime($date)));
		$house=$_POST['house'];
		$place=$_POST['place'];
		$coid=$_POST['coid'];
		$sid=$_POST['sid'];
		$did=$_POST['did'];
		$paid=$_POST['paid'];
		$post=$_POST['post'];
		$pin=$_POST['pin'];
		$landmark=$_POST['landmark'];
		

		$sql='INSERT INTO luckbotorders (lkpid,uid) VALUES("'.$lkpid.'","'.$uid.'")';
		$result=$conn->query($sql);
		$lkoid=mysqli_insert_id($conn);

		if($result)
		{
				$sql1='INSERT INTO luckbotorderaddress (lkoid,lkpid, uid, disprice, cid, clrid, siid, odate, eddate, house, place, coid, sid, did, paid, post, pin, landmark) VALUES ("'.$lkoid.'","'.$lkpid.'","'.$uid.'","'.$disprice.'","'.$cid.'","'.$clrid.'","'.$siid.'","'.$odate.'","'.$eddate.'","'.$house.'","'.$place.'","'.$coid.'","'.$sid.'","'.$did.'","'.$paid.'","'.$post.'","'.$pin.'","'.$landmark.'")';

				$result1=$conn->query($sql1);
				$oaid=mysqli_insert_id($conn);
					if($result1)
					{   
              
                 $lkbk_id=$lkpid;
							   $sql2='INSERT INTO temporder (lkoid,lkpid,lkbk_id,oaid,uid) values("'.$lkoid.'","'.$lkpid.'","'.$lkbk_id.'","'.$oaid.'","'.$uid.'")';
									$result2=$conn->query($sql2);
									if($result2)
									$tcid=mysqli_insert_id($conn);
													if($result2)
													{
													$msg="Your Order Placed Successfully";		
													}
													else
													{
													$msg="Error Occured!. Try again with correct values";	
							            }
					}
		 }
		header('location:luckyDraw.php?uid='.$uid.'&msg='.$msg);

}
//  *****order end********


//  ****** View Luckbot Orders ********
/* $sql='SELECT luckbotproducts.name,customer.name,luckbotorderaddress.disprice,categories.category,colors.color,sizes.size,luckbotorderaddress.odate,luckbotorderaddress.eddate,luckbotorderaddress.house,luckbotorderaddress.place,countries.country,states.state,districts.district,panchayath.panchayath,luckbotorderaddress.post,luckbotorderaddress.pin,luckbotorderaddress.landmark from luckbotorderaddress LEFT JOIN luckbotproducts ON luckbotorderaddress.lkpid=luckbotproducts.lkpid LEFT JOIN categories ON luckbotorderaddress.cid=categories.cid LEFT JOIN colors ON luckbotorderaddress.clrid=colors.clrid LEFT JOIN sizes ON luckbotorderaddress.siid=sizes.siid LEFT JOIN customer ON luckbotorderaddress.uid=customer.uid'; */





//  ****** End View Luckbot Orders *******






//*******************************************  Main Module *******************************************************


// ***** temperary Random selection ********

if(isset($_REQUEST['lucktry']))
{
		$lkpid=$_REQUEST['lkpid'];
		$sql='SELECT luckbotorders.lkoid,customer.name AS cname,customer.uid,luckbotproducts.name,luckbotorderaddress.oaid,luckbotproducts.lkpid FROM luckbotorderaddress LEFT JOIN luckbotorders ON luckbotorders.lkoid=luckbotorderaddress.lkoid LEFT JOIN customer ON luckbotorderaddress.uid=customer.uid LEFT JOIN luckbotproducts ON luckbotproducts.lkpid=luckbotorderaddress.lkpid where luckbotorderaddress.lkpid='.$lkpid.' ORDER BY RAND() LIMIT 1';
		$result=$conn->query($sql);
		while($row=mysqli_fetch_array($result))
		{
				$lkoid=$row['lkoid'];
				$uid=$row['uid'];
				$user=$row['cname'];
				$pname=$row['name'];
				$lkpid=$row['lkpid'];
				$oaid=$row['oaid'];

				if($result)
				{
						$sqln='select * from temporder where lkoid="'.$lkoid.'"';
						$resultn=$conn->query($sqln);
						$row=mysqli_fetch_array($resultn);
						$tcid=$row['tcid']; 

		       $sql1='INSERT INTO tempselection1 (cname,pname,lkpid,uid,lkoid,oaid,tcid) VALUES("'.$user.'","'.$pname.'","'.$lkpid.'","'.$uid.'","'.$lkoid.'","'.$oaid.'","'.$tcid.'")';
						$result1=$conn->query($sql1);
						$tsid=mysqli_insert_id($conn);

						if($result1)
						{ 
								$sql2='SELECT  customer.name AS cusname,luckbotproducts.name AS proname,luckbotproducts.lkpid AS tlkpid,customer.uid AS tuid,luckbotorders.lkoid AS tlkoid,luckbotorderaddress.oaid AS toaid FROM temporder LEFT JOIN customer ON customer.uid=temporder.uid LEFT JOIN luckbotproducts ON luckbotproducts.lkpid=temporder.lkpid LEFT JOIN luckbotorderaddress ON luckbotorderaddress.oaid=temporder.oaid LEFT JOIN luckbotorders ON luckbotorders.lkoid=temporder.lkoid GROUP BY temporder.uid HAVING count(temporder.uid)>=2';
								$result2=$conn->query($sql2);

								while($row=mysqli_fetch_array($result2))
								{
										$cusname=$row['cusname'];
										$proname=$row['proname'];
										$tlkpid=$row['tlkpid'];
										$tuid=$row['tuid'];
										$tlkoid=$row['tlkoid'];
										$toaid=$row['toaid'];

										if($result2)
										{
											$sql3='INSERT INTO tempselection2 (cname,pname,lkpid,uid,lkoid,oaid,tsid,tcid) VALUES("'.$cusname.'","'.$proname.'","'.$tlkpid.'","'.$tuid.'","'.$tlkoid.'","'.$toaid.'","'.$tsid.'","'.$tcid.'")';
												$result3=$conn->query($sql3);
												
										}
								}
						}

				}

		
}
		 //---------------PREETHI CLOSE

			 // *********** INSERT TO INNER TABLE *******************


          $sql4='SELECT * FROM tempselection1';
          $result4=$conn->query($sql4);
          while($row=mysqli_fetch_array($result4))
          {

						$cname=$row['cname'];
						$pname=$row['pname'];
						$lkpid=$row['lkpid'];
						$uid=$row['uid'];
          	$lkoid=$row['lkoid'];
						$oaid=$row['oaid'];
						$tcid=$row['tcid'];

						$sql5='INSERT INTO joint_table (cname,pname,lkpid,uid,lkoid,oaid,tcid) VALUES ("'.$cname.'","'.$pname.'","'.$lkpid.'","'.$uid.'","'.$lkoid.'","'.$oaid.'","'.$tcid.'")';
						$result5=$conn->query($sql5);
						$jid=mysqli_insert_id($conn);
          }

          //2nd table
          $sql6='SELECT * FROM tempselection2';
          $result6=$conn->query($sql6);
          while($row=mysqli_fetch_array($result6))
          {

						$cname=$row['cname'];
						$pname=$row['pname'];
						$lkpid=$row['lkpid'];
						$uid=$row['uid'];
          	$lkoid=$row['lkoid'];
						$oaid=$row['oaid'];
						$tcid=$row['tcid'];

				    $sql7='INSERT INTO joint_table (cname,pname,lkpid,uid,lkoid,oaid,tcid) VALUES ("'.$cname.'","'.$pname.'","'.$lkpid.'","'.$uid.'","'.$lkoid.'","'.$oaid.'","'.$tcid.'")';
						$result7=$conn->query($sql7);
					}
						$sql8='SELECT jid, cname AS jcname,pname AS jpname,lkpid AS jlkpid,uid AS juid,lkoid AS jlkoid,oaid AS joaid,tcid AS jtcid FROM joint_table ORDER BY RAND() LIMIT 1';
						$result8=$conn->query($sql8);                    	
						$row=mysqli_fetch_array($result8);  
						if($result8)  
						{
								$jid=$row['jid'];
								$jcname=$row['jcname'];
								$jpname=$row['jpname'];
								$jlkpid=$row['jlkpid'];
								$juid=$row['juid'];
								$jlkoid=$row['jlkoid'];
								$joaid=$row['joaid'];
								$jtcid=$row['jtcid'];
								$date=date('Y-m-d');
								$time=date('H:i:s',time());
								$status="N";
							  $sql9='INSERT INTO winner (date,time,name,lkpid,oaid,tcid,lkoid,jid,uid,status) values ("'.$date.'","'.$time.'","'.$jcname.'","'.$jlkpid.'","'.$joaid.'","'.$jtcid.'","'.$jlkoid.'","'.$jid.'","'.$juid.'","'.$status.'")';
								$result9=$conn->query($sql9);
								if($result9)
								{
									  $sql10='TRUNCATE tempselection1';
										$result10=$conn->query($sql10);
									  $sql11='TRUNCATE tempselection2';
										$result11=$conn->query($sql11);
										$sql12='TRUNCATE joint_table';
										$result12=$conn->query($sql12);

										 

										//========deleting temporary order=======
										  $sqlD='SELECT * FROM temporder';
											$resultD=$conn->query($sqlD);
											while($rowD=mysqli_fetch_array($resultD))
											{
													$uid=$juid;
												 $sqlDD='DELETE FROM temporder where uid='.$uid;
													$resultDD=$conn->query($sqlDD);

													//====***DELETE LUCKBOT PRODUCTS FROM LIST***=====

									  $sql13='SELECT * from winner where uid='.$uid;
										$result13=$conn->query($sql13);
									  $row3=mysqli_fetch_array($result13);
										$lkpid=$row3['lkpid'];
										$sql14='DELETE FROM luckbotproducts where lkpid='.$lkpid;
										$result14=$conn->query($sql14);
										if($result14)
												{
														$msg="Success";
												}
												else
												{
														$msg="try";
												}

                     //====*** END DELETE LUCKBOT PRODUCTS FROM LIST***=====
											} 
										//======end delete===================
								}
						}     
						

			 //**************END INSERTION **************************


			header('location:winner.php?uid='.$uid.'&message='.$msg);
}

// date('H:i:s',time());


//*******************************************  Main Module *******************************************************

 //****  Winner Prize Delevery  ********

if(isset($_REQUEST['winnerDelivery']))
{
		$wid=$_GET['wid'];

	 $sql='UPDATE  winner SET status="Y" where wid="'.$wid.'"';
	 $result=$conn->query($sql);
	 if($result)
	 {
	 	$msg="Delivery to the winner made Succesfully";
	 }
	 else
		{
				$msg="Error! Try Again";	
		}
		
		header('location:adminHome.php?newWinner=1&message='.$msg);
}

//*******************************************  Main Module *******************************************************









if(isset($_REQUEST['winnerDelivery1']))
{
		$oaid=$_GET['oaid'];

	 $sql='UPDATE  luckbotorderaddress SET status="Y" where oaid="'.$oaid.'"';

		$result=$conn->query($sql);
		if($result)
		{
			
				$status="N";
				$ddate=date('Y-m-d'); //Getting Current System Date

				$sql1='INSERT INTO winnerdelivery (oaid,ddate,status) VALUES ("'.$oaid.'","'.$ddate.'","'.$status.'")';
				$result1=$conn->query($sql1);
				if($result1)
				{
					$msg="Delivery to the winner made Succesfully";
				}

		}

		else
		{
				$msg="Error! Try Again";	
		}
		
		header('location:adminHome.php?newWinner=1&message='.$msg);
}



?>






