


<?php

$servername="localhost";
$username="root";
$password="";
$dbname="luckbot";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

?>


<html>
  <head>
     <style>

       td{
         padding: 5px;
         font-size: 14px;
      }
      #table1{
         /*background-color: grey;*/

      }

     </style>
   </head>
   <body>
   	<form action="doaction.php?addState=1" method="POST">
   		<table border="0" align="center" cellpadding="0" width="1100">

            
             <tr>
               <td>
                  <table id="table1" border="1" align="center" >
                     <tr>

                        <td>

                           <table id="table1" border="0" align="center" cellpadding="0" cellpadding="0">
                              <tr>
                              	<?php
         if(isset($_REQUEST['msg']))
         {
         $msg=$_REQUEST['msg'];
         echo'<tr><td colspan="13" style="color: red;" align="center">'.$msg.'</td></tr>';
         }        
         ?>
                                 <td>

                           <tr>
                           <td colspan="2" align="center" cellspacing="30" ><b><font size="5" color="#6f1cf4">Add State</font></b></td>
                           </tr>

                           <tr>
                           <td><label>Select Country:</label></td>
                           <td><select class="input--style-3" type="text" placeholder="Country" name="coid" id="coid"  onChange="getpanchayath();">
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
				                 	<td><label>New State:</label></td>
				                 	<td>
				                 		<input type="text" name="state">
				                 	</td>
				                 </tr>
                           



                           <tr>
                           <td colspan="2" align="center"><input type="submit" value="Add" style="background-color:#6f1cf4;color:white;">&nbsp;&nbsp;
                              <input type="submit" value="Cancel" style="background-color:#fd9612;color:white;"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
              </td>
         </tr>
      </table>

   	</form>
   </body>
</html>