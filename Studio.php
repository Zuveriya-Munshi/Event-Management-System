<?php
if(isset($_POST['Submit']))
{
$con = mysql_connect("localhost","root","");
if($con)
{
    echo "connection successful"."</br>";
}
mysql_select_db("project");
$Studio_Code = $_POST['StudioCode'];
$Studio_name = $_POST['StudioName'];
$Studio_Address = $_POST['StudioAddress'];
$Owner_name = $_POST['OwnerName'];
$Owner_Address = $_POST['OwnerAddress'];
$Mob_no = $_POST['Mobileno'];
$Email_Id = $_POST['EmailId'];
$Booking_Price = $_POST['BookingPrice'];
$Min_AdvanAMT = $_POST['Advamount'];
echo $Studio_Code,$Owner_name,$Min_AdvanAMT;
$ins ="insert into studio values('$Studio_Code','$Studio_name','$Studio_Address','$Owner_name','$Owner_Address',$Mob_no,'$Email_Id',$Booking_Price,$Min_AdvanAMT)";
if(mysql_query($ins,$con))
{
      echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Studio.htm'
 </script>";
}
else 
{
      echo  "<script type='text/javascript'>
    alert('Record Not Inserted')
 window.location.href='Studio.htm'
 </script>";
   
}
mysql_close($con);
}
?>