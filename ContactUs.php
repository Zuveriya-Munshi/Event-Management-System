<?php

 if(isset($_POST['submit']))
 {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        echo "Connection is successfull!!";
    }
    else
    {
        echo "Connection is Fail!";
    }
    mysqli_select_db($con,"project");
    $pYourName=$_POST['YourName'];
    $pEmailAddress=$_POST['EmailAddress'];
    $pMesg=$_POST['Mesg'];
    echo $pYourName,$pMesg;
    
    $sql="insert into contactus values('$pYourName','$pEmailAddress','$pMesg')"; 
    mysqli_query($con,$sql);
    if($sql)
    {
        echo  "<script type='text/javascript'>
    alert('Comment inserted Successfully!')
 window.location.href='ContactUs.htm'
 </script>";  

       
    }
    else
    {
        echo  "<script type='text/javascript'>
       alert('Comments are not Inserted!')
       window.location.href='ContactUs.htm'
        </script>";  
 }
    mysqli_close($con);
 }

?>