<?php


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

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
   	<form action="doaction.php?newproduct=1" method="POST" enctype="multipart/form-data">
   		<table border="0" align="center" cellpadding="0" width="1100">
            <?php
         if(isset($_REQUEST['msg']))
         {
         $msg=$_REQUEST['msg'];
         echo'<tr><td colspan="13" style="color: red;" align="center">'.$msg.'</td></tr>';
         }        
         ?>
             <tr>
               <td>
                  <table id="table1" border="1" align="center" >
                     <tr>
                        <td>

                           <table id="table1" border="0" align="center" cellpadding="0" cellpadding="0">
                              <tr>
                                 <td>

                           <tr>
                           <td colspan="2" align="center" cellspacing="30" ><b><font size="5" color="#6f1cf4">New Product</font></b></td>
                           </tr>

                           <tr>
                           <td><label>Product Name :</label></td>
                           <td><input type="text" name="pname" id="pname"></td>
                           </tr>
                           <tr>
                           <td><label>Product Category:</label></td>
                           <td> 

                           <select class="input--style-3" type="text" placeholder="category" name="pcategory" id="pcategory"  onChange="getpanchayath();">
                           <option value="0" selected="selected">- -Select- -</option>
                           <?php
                           $sql="SELECT * FROM categories";
                           $result=$conn->query($sql);
                           while($row = mysqli_fetch_array($result))
                           echo '<option value="'.$row['cid'].'" selected="selected">'.$row['category'].'</option>';                                          
                           ?>
                           </select>

                           </td>
                           </tr>


                           <tr>
                           <td><label>Product Prize:</label></td>
                           <td><input type="text" name="pprize"></td>
                           </tr>


                           <tr>
                           <td><label>Product Company:</label></td>
                           <td><select class="input--style-3" type="text" placeholder="category" name="pcompany" id="pcompany"  onChange="getpanchayath();">
                           <option value="0" selected="selected">- -Select- -</option>
                           <?php
                           $sql="SELECT * FROM companies";
                           $result=$conn->query($sql);
                           while($row = mysqli_fetch_array($result))
                           echo '<option value="'.$row['comid'].'" selected="selected">'.$row['company'].'</option>';                                          
                           ?>
                           </select>
                           </td>
                           </tr>


                           <tr>
                           <td><label>Product Color:</label></td>
                           <td><select class="input--style-3" type="text" placeholder="category" name="pcolor" id="pcolor"  onChange="getpanchayath();">
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
                           <td><label>Product Size:</label></td>
                           <td><select class="input--style-3" type="text" placeholder="category" name="psize" id="psize"  onChange="getpanchayath();">
                           <option value="0" selected="selected">- -Select- -</option>
                           <?php
                           $sql="SELECT * FROM sizes";
                           $result=$conn->query($sql);
                           while($row = mysqli_fetch_array($result))
                           echo '<option value="'.$row['siid'].'" selected="selected">'.$row['size'].'</option>';                                          
                           ?>
                           </select>
                           </td>
                           </tr>

                           <tr>
                           <td><label>Other Details:</label></td>
                           <td><input type="text" name="other" id="other"></td>
                           </tr>


                           <tr>
                           <td><label>Product Description:</label></td>
                           <td><input type="text" name="pdescription"></td>
                           </tr>



                           <tr>
                           <td><label>Upload Product Photo:</label></td>
                           <td><input type="file" name="photo" id="photo"></td>
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