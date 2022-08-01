
<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  echo "Connection successful...!!!"."<br/>";
   mysql_select_db("project");
   $pUname=$_POST['Uname'];
   echo $pUname;
   $sql1 = "select Emailid,Fullname,Mobileno from registration where Username='$pUname'";
    $query1 = mysql_query($sql1,$con);
while($rs = mysql_fetch_assoc($query1))
{
        
$REamil=$rs['Emailid'];
$RFullname=$rs['Fullname'];
$RMobileno=$rs['Mobileno'];
}
echo  $REamil,$RFullname,$RMobileno;  
   
}
}
?>

<?php
if(isset($_POST['Submit']))
{
     $con=mysql_connect("localhost","root","");
     if($con)
     {
        echo "Connection Successful.."."<br/>";
     }
    mysql_select_db("project");
    
    $Rate=$_POST['Star'];
    $Comments=$_POST['comment'];

     $sql="insert into feedback values('$pUname','$RFullname',$RMobileno,'$REamil','$Rate','$Comments')";
    mysql_query($sql,$con);
     if($sql)
     {
        echo  "<script type='text/javascript'>
    alert('Record Inserted..')
 window.location.href='Feedback.htm'
 </script>";  

        
     }
     else
     {
        echo  "<script type='text/javascript'>
    alert('Insert Fail....')
 window.location.href='Feedback.htm'
 </script>";  

     }
    mysql_close($con);
   
    
}

?>