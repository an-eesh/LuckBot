<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "luckbot";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

?>


<!-- validatin -->

<script language="javascript" type="text/javascript">

   function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
           {
            alert("Enter the value in numeric");
            return false;

           }
            
         return true;

      }


function validate()
{
   var msg='';
    if(document.getElementById("name").value=="")
     {

     alert(" Enter Product Name!");

     document.getElementById("name").focus();

     return false;

    }
   
   if(document.getElementById("price").value=="")
       {

     alert(" Enter The Product Price!");

     document.getElementById("price").focus();

     return false;
      }



    if(document.getElementById("photo").value=="")
       {

     alert(" Upload Product Image!");

     document.getElementById("photo").focus();

     return false;
      }

      
    if(document.getElementById("mobno").value=="")

    {

     alert("Enter Mobile No.!");

     document.getElementById("mobno").focus();

     return false;

    }

    if(document.getElementById("mobno").value.length<10)

     {

                alert("Your Mobile No. seems incorrect!");

               document.getElementById("mobno").focus();

               return false;

     }

     var digits="0123456789";

     var temp;

     for (var i=0;i<document.getElementById("mobno").value.length;i++)

     {

               temp=document.getElementById("mobno").value.substring(i,i+1);

               if (digits.indexOf(temp)==-1)

               {

                        alert(" Enter correct Mobile Number!");

                        document.getElementById("mobno").focus();

                        return false;

               }
      }
      
   if(document.getElementById("email").value=="")

    {

     alert("Enter your E-mail ID");

     document.getElementById("email").focus();

     return false;

    }

     var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

     var emailid=document.getElementById("email").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

    {

               alert("Your Email ID seems incorrect. Enter Correct Email ID.");

               document.getElementById("email").focus();

               return false;

    }
    
      
   
      
   if(document.getElementById('pwd').value=='')
       {

     alert(" Enter password!");

     document.getElementById("pwd").focus();

     return false;
      }
      
   if(document.getElementById("pwd").value.length<6)

    {

    alert("Password must be of 6 or more characters");

    document.getElementById("pwd").focus();

    return false;

    }
    if(document.getElementById("repwd").value.length<6)

    {

    alert("Enter Correct Password again");

    document.getElementById("repwd").focus();

    return false;

    }

    else

     {

      var pwd1=document.getElementById("pwd").value;

      var pwd2=document.getElementById("repwd").value; 

      if(pwd1!=pwd2)

      {

      alert("Password Mismatch");

      document.getElementById("pwd").focus();

      return false;

      }

      }
     
     if(document.getElementById("place").value=="")

    {

     alert("Enter your City/Place!");

     document.getElementById("place").focus();

     return false;

    }

     
     if(document.getElementById("dist").value=="")

    {

     alert("Select Your District!");

     document.getElementById("dist").focus();

     return false;

    }

if(msg!=''){
      alert(msg);
      return false;    

   }
   return true;
   }
</script>

<!-- End Validation -->





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
    <form action="doaction.php?luckbotnewproduct=1" method="POST" onSubmit="return validate();" enctype="multipart/form-data">
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
                           <td colspan="2" align="center" cellspacing="30" ><b><font size="5" color="#6f1cf4">New Luckbot Product</font></b></td>
                           </tr>

                           <tr>
                           <td><label>Product Name :</label></td>
                           <td><input type="text" name="name" id="name"></td>
                           </tr>
                           <tr>
                           <td><label>Product Category:</label></td>
                           <td> 

                           <select class="input--style-3" type="text" placeholder="category" name="category" id="category"  onChange="getpanchayath();">
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
                           <td><label>Product Price:</label></td>
                           <td><input type="text" name="price" id="price" onkeypress="return isNumberKey(event)"></td>
                           </tr>

                           <tr>
                              <td><label>No. Slots</label></td>
                              <td><input type="text" name="slot" onkeypress="return isNumberKey(event)"></td>
                           </tr>

                           <tr>
                           <td><label>Product Company:</label></td>
                           <td><select class="input--style-3" type="text" placeholder="company" name="company" id="company"  onChange="getpanchayath();">
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
                           <td><select class="input--style-3" type="text" placeholder="color" name="color" id="pcolor"  onChange="getpanchayath();">
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
                           <td><select class="input--style-3" type="text" placeholder="Size" name="size" id="size"  onChange="getpanchayath();">
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
                           <td><input type="text" name="others" id="other"></td>
                           </tr>


                           <tr>
                           <td><label>Product Description:</label></td>
                           <td><input type="text" name="description"></td>
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