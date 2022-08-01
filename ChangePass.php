<?php
if(isset($_POST['Submit']))
{
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected Successfully"."</br>";
}
mysql_select_db("project");
$uname=$_POST['UserName'];
$upass=$_POST['Oldpassword'];
$newpass=$_POST['Newpassword'];
//echo $uname,$upass;
$sql=mysql_query("Select Password from registration where Username like '%$uname%'");
$rs=mysql_fetch_array($sql);
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
if(mysql_query($update,$con))
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
mysql_close($con);
}
?>