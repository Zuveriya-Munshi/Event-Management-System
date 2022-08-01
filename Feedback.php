
<?php

if(isset($_POST['Submit']))
{
    $con=mysqli_connect("localhost","root","");
 if($con)
 {
    
  echo "Connection successful...!!!"."<br/>";
   mysqli_select_db($con,"project");
   $pUname=$_POST['Uname'];
   echo $pUname;
   $sql1 = "select Emailid,Fullname,Mobileno from registration where Username='$pUname'";
    $query1 = mysqli_query($con,$sql1);
while($rs = mysqli_fetch_assoc($query1))
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
     $con=mysqli_connect("localhost","root","");
     if($con)
     {
        echo "Connection Successful.."."<br/>";
     }
    mysqli_select_db($con,"project");
    
    $Rate=$_POST['Star'];
    $Comments=$_POST['comment'];

     $sql="insert into feedback values('$pUname','$RFullname',$RMobileno,'$REamil','$Rate','$Comments')";
    mysqli_query($con,$sql);
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
    mysqli_close($con);
   
    
}

?>