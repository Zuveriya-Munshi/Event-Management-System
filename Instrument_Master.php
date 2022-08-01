<?php
if(isset($_POST['Submit']))
{
$con = mysql_connect("localhost","root","");

if($con)
{
    echo "connection successful"."</br>";
}
mysql_select_db("project");
$instrumentid = $_POST['InstrumentID'];
$instruDESC = $_POST['InstrumentDESC'];
$Company_name = $_POST['Company'];
$PDate = $_POST['PurchaseDate'];
$Quantity = $_POST['QUANTITY'];
$Price = $_POST['PRICE'];
$AdvanAMT = $_POST['AdvanceAMT'];
$Status = $_POST['STATUS'];
$warranty_guarantee = $_POST['WG'];
$ins ="insert into instrunmentmaster values( '$instrumentid','$instruDESC','$Company_name','$PDate',$Quantity,$Price,$AdvanAMT,'$Status','$warranty_guarantee')";
if(mysql_query($ins,$con))
{
    echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Instrument_Master.htm'
 </script>";  

   
}
else 
{
echo  "<script type='text/javascript'>
    alert('Record Not Inserted')
 window.location.href='Instrument_Master.htm'
 </script>"; 
   
}
mysql_close($con);
}
?>