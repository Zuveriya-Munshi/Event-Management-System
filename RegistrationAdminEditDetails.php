<!DOCTYPE HTML>
<html>
 <head>
   <title>Registration Page</title>
   <link rel="stylesheet" type="text/css" href="css.css" /> 
 </head>
 <body>
 <marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>
   <center>
   <form method="POST" action="RegistrationAdminEditSave.php">
     <h3 style='color:white;'>Details of Registration Record</h3>
     <table>
     <?php
       $con=mysql_connect("localhost","root","");
       if($con)
       {
       // echo "Connected Successfull";
       }
    mysql_select_db("project",$con);
     $RUname=$_GET['Username'];
     $res=mysql_query("Select * from registration where Username like '%$RUname%'");
     $row=mysql_fetch_array($res);
     {
        $RUtype=$row['Usertype'];
        $RUCat=$row['Usercat'];
        $RUname=$row['Username'];
        $RPass=$row['Password'];
        $RegEmail=$row['Emailid'];
        $RFullnm=$row['Fullname'];
        $RAddr=$row['Addr'];
        $RMobno=$row['Mobileno'];
        $RSecurityQuestion=$row['SecQuetion'];
        $RSecurityAnswer=$row['SecAnswer'];
     }
?>
<tr>
<td>  User Type :</td>
<td><input type="text" name="Utype"  value="<?php echo $RUtype;?>" required=""/></td>    
</tr>

<tr>
<td> User Category :</td>        
<td><input type="text" name="Ucat"  value="<?php echo $RUCat;?>" required="" /></td>    
</tr>



<tr>
<td> User Name : </td>       
<td><input type="text" name="Uname"  value="<?php echo $RUname;?>" required="" /></td>    
</tr>

<tr>
<td>  Password :</td>        
<td><input type="password" name="Password"  value="<?php echo $RPass;?>" required="" /></td>    
</tr>

<tr>
<td>  Email Id :</td>        
<td><input type="email" name="Email"  value="<?php echo $RegEmail;?>" required="" /></td>    
</tr>

<tr>
<td>  Full Name : </td>    
<td> <input type="text" name="Fullnm"  value="<?php echo $RFullnm;?>" required="" /></td>     
</tr>



<tr>
<td>  Address : </td> 
<td><input type="text" name="Addr"   value="<?php echo $RAddr;?>"required="" /></td>    
</tr>


<tr>
<td>  Mobile No :  </td>  
<td><input type="text" name="Mobile"  value="<?php echo $RMobno;?>" required="" /></td>     
</tr>




<tr>
<td> Security Question :</td>        
<td><input type="text" name="SecQuestion"  value="<?php echo $RSecurityAnswer;?>"  /></td> 
</tr>

<tr>
<td>  Security Answer :</td>     
<td><input type="text" name="SecAnswer" value="<?php echo $RSecurityAnswer;?>"/></td>  
</tr>
    

<tr>
<td colspan="2" align="center">
<input class="submit" type="submit" name="SAVE" value="Submit"/>
<input  type="button" class="button" name="Back" value="BACK" onclick="history.back()"/></td>
</tr>
</table>
   </form>
   <?php
     
     
    mysql_close($con);
    ?>
    </center>
 </body>
</html>

