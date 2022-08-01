<html>
 <head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css.css" /> 
  </head>
  <body>
   <marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>
   <center>
      <h3 style='color:white;'>Registration Form</h3>
      <table >
      <td align='left' colspan='2'>
        <input type='button' name='Button' class='button' value='Home' onclick='history.back()' /></td>
        
      <tr>
       <th>User Type</th>
       <th>User Category</th>
       <th>User Name</th>
       <th>Password</th>
       <th>Email Id</th>
       <th>Full Name</th>
       <th>Address</th>
       <th>Mobile No.</th>
       <th>Security Question</th>
       <th>Security Answer</th>
       <th>Action</th>
       </tr>
      
<?php
$uname=$_POST['Username'];
$con=mysqli_connect("localhost","root","");
if($con)
 //echo "Connection Successfull";
 mysqli_select_db($con,"project");
 $sql="Select * from registration where Username='$uname' and Usercat='USER'";
 $result=mysqli_query($con,$sql);
 if($result==" ")
 {
    echo "<script>alert('User not found');</script>"; 
 }
 else
 {
  while($row=mysqli_fetch_array($result))
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
?>
 <tr>
 <td><?php echo $RUtype;?></td>
 <td><?php echo $RUCat;?></td>
 <td><?php echo $RUname;?></td>
 <td><?php echo $RPass;?></td>
 <td><?php echo $RegEmail;?></td>
 <td><?php echo $RFullnm;?></td>
 <td><?php echo $RAddr;?></td>
 <td><?php echo $RMobno;?></td>
 <td><?php echo $RSecurityQuestion;?></td>
 <td><?php echo $RSecurityAnswer;?></td>
 <td><a href="RegistrationUserEditDetails.php?Username=<?php echo $RUname;?>">Edit</a></td>
 </tr>
 <?php
 }
 
 
 
 mysqli_close($con);
 }
 ?>
</table>
   </center>
  </body>
</html>