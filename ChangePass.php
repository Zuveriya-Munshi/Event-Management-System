<?php
if(isset($_POST['Submit']))
{
$con=mysqli_connect("localhost","root","");
if($con)
{
    echo "Connected Successfully"."</br>";
}
mysqli_select_db($con,"project");
$uname=$_POST['UserName'];
$upass=$_POST['Oldpassword'];
$newpass=$_POST['Newpassword'];
//echo $uname,$upass;
$sql=mysqli_query($con,"Select Password from registration where Username like '%$uname%'");
$rs=mysqli_fetch_array($sql);
$validate=$rs['Password'];
$update="Update registration set Password='$newpass' where Username like '%$uname%'";
if($validate!=$upass)
{
    echo  "<br><script type='text/javascript'>
    alert('Please enter correct password!!')
 window.location.href='ChangePass.htm'
 </script>";
  
   
}
else{
if(mysqli_query($con,$update))
{
    echo  "<br><script type='text/javascript'>
    alert('Password Changed Successfully')
 window.location.href='ChangePass.htm'
 </script>";
   }
else
 {
   echo  "<br><script type='text/javascript'>
    alert('Not Changed')
 window.location.href='ChangePass.htm'
 </script>";  
   
 }
 }
mysqli_close($con);
}
?>