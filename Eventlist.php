
<?php

if(isset($_POST['submit']))
{
    $con=mysqli_connect("localhost","root","");
 if($con)
 {
    
  echo "Connection successful...!!!"."<br/>";
   mysqli_select_db($con,"project");
   $BID=$_POST['EBOOKID'];
   echo $BID;
   $sql1 = "select EventID,Eventname,Eventdate,Performername,Clientname,Venue,Starttime,Endtime,Permissionstatus,Instrumentstatus from booking where Bookingid=$BID";
    $query1 = mysqli_query($con,$sql1);
while($rs = mysqli_fetch_assoc($query1))
{
        
$REventid=$rs['EventID'];
$REventname=$rs['Eventname'];
$REdate=$rs['Eventdate'];
$REvenue=$rs['Venue'];

$REperformernm=$rs['Performername'];
$REcname=$rs['Clientname'];

$REstarttime=$rs['Starttime']; 
$REendtime=$rs['Endtime'];
$REpermissionstatus=$rs['Permissionstatus'];
$REinstrumentstatus=$rs['Instrumentstatus'];
}
$Etransportid=$_POST['ETRANSVENTID'];
   $sql2= "select Vehicleno,Drivername,Contactno from transportermaster where Transporterid=$Etransportid";
   $query2=mysqli_query($con,$sql2);
   while($rs2 = mysqli_fetch_assoc($query2))
   {
     $Evehicle=$rs2['Vehicleno'];
     $Enmtransport=$rs2['Drivername'];
     $EContactNo=$rs2['Contactno'];
     
   }
}
}


$Enostaff=$_POST['ENOSTAFF'];



$sql="insert into eventlist values($REventid,'$REventname','$REdate','$REvenue','$REperformernm','$REstarttime','$REendtime',$BID,'$REcname','$REpermissionstatus',$Enostaff,'$REinstrumentstatus','$Etransportid','$Evehicle','$Enmtransport',$EContactNo)";
mysqli_query($con,$sql);
echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Eventlist.htm'
 </script>";  

mysqli_close($con);

?>