<?php
if(isset($_POST['submit']))
{
$con = mysql_connect("localhost","root","");
if($con)
{
    echo "connection successful"."</br>";
}
mysql_select_db("project");
$staffid = $_POST['STAFFID'];
$staffname = $_POST['STAFFNM'];
$gender = $_POST['Gender'];
$skill = $_POST['SKILL'];
$staffaddress = $_POST['Addr'];
$stafftype = $_POST['STYPE'];
$staffcontact = $_POST['ConNum'];
$staffemail = $_POST['MAILID'];
$ins ="insert into staffmaster values( $staffid ,'$staffname','$gender','$skill','$staffaddress','$stafftype',$staffcontact,'$staffemail')";
if(mysql_query($ins,$con))
{
    echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Staff_Master.htm'
 </script>";
    
}
else 
{
    echo  "<script type='text/javascript'>
    alert('Record Not Inserted')
 window.location.href='Staff_Master.htm'
 </script>";
   
}
mysql_close($con);
}
?>