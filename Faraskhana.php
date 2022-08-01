<?php
if(isset($_POST['Submit']))
{
$con = mysql_connect("localhost","root","");
if($con)
{
    echo "connection successful"."</br>";
}
mysql_select_db("project");
$Far_code = $_POST['FaraskhanaCode'];
$Des_tion = $_POST['Des'];
$Vendor_code = $_POST['VenCode'];
$Name = $_POST['Stagenm'];
$Mob_no = $_POST['Contactno'];
$Email_Id = $_POST['Gmail'];
$Price = $_POST['StaPrice'];
$AdvanAMT = $_POST['Advamount'];

$ins ="insert into faraskhana values( '$Far_code','$Des_tion','$Vendor_code','$Name',$Mob_no,'$Email_Id',$Price,$AdvanAMT)";
if(mysql_query($ins,$con))
{
    
    echo  "<br><script type='text/javascript'>
    alert('Record Inserted Succesfully')
 window.location.href='Faraskhana.htm'
 </script>";
}
else 
{
    echo  "<br><script type='text/javascript'>
    alert('Record Not Inserted')
 window.location.href='Faraskhana.htm'
 </script>";
 
}
mysql_close($con);
}
?>