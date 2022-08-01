<?php
if(isset($_POST['Submit']))
{
$con = mysqli_connect("localhost","root","");
if($con)
{
    echo "connection successful"."</br>";
}
mysqli_select_db($con,"project");
$Pat_code = $_POST['PatternCode'];
$Des_tion = $_POST['Des'];
$Vendor_code = $_POST['VenCode'];
$Name = $_POST['Stagenm'];
$Mob_no = $_POST['Contactno'];
$Email_Id = $_POST['Gmail'];
$Price = $_POST['StaPrice'];
$AdvanAMT = $_POST['Advamount'];

$ins ="insert into lighting values( '$Pat_code','$Des_tion','$Vendor_code','$Name',$Mob_no,'$Email_Id',$Price,$AdvanAMT)";
if(mysqli_query($con,$ins))
{
    echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Lighting.htm'
 </script>";  

    
}
else 
{
    echo  "<script type='text/javascript'>
    alert('Record Not Inserted')
 window.location.href='Lighting.htm'
 </script>";  

}
mysqli_close($con);
}

?>