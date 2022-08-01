
<?php

if(isset($_POST['submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  echo "Connection successful...!!!"."<br/>";
   mysql_select_db("project");
   $BID=$_POST['EBOOKID'];
   echo $BID;
   $sql1 = "select EventID,Eventname,Eventdate,Performername,Clientname,Venue,Starttime,Endtime,Permissionstatus,Instrumentstatus from booking where Bookingid=$BID";
    $query1 = mysql_query($sql1,$con);
while($rs = mysql_fetch_assoc($query1))
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
   $query2=mysql_query($sql2,$con);
   while($rs2 = mysql_fetch_assoc($query2))
   {
     $Evehicle=$rs2['Vehicleno'];
     $Enmtransport=$rs2['Drivername'];
     $EContactNo=$rs2['Contactno'];
     
   }
}
}


$Enostaff=$_POST['ENOSTAFF'];



$sql="insert into eventlist values($REventid,'$REventname','$REdate','$REvenue','$REperformernm','$REstarttime','$REendtime',$BID,'$REcname','$REpermissionstatus',$Enostaff,'$REinstrumentstatus','$Etransportid','$Evehicle','$Enmtransport',$EContactNo)";
mysql_query($sql,$con);
echo  "<script type='text/javascript'>
    alert('Record inserted Successfully!')
 window.location.href='Eventlist.htm'
 </script>";  

mysql_close($con);

?>