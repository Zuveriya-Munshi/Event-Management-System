<?php

 if(isset($_POST['submit']))
 {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "Connection is successfull!!";
    }
    else
    {
        echo "Connection is Fail!";
    }
    mysql_select_db("project");
    $pYourName=$_POST['YourName'];
    $pEmailAddress=$_POST['EmailAddress'];
    $pMesg=$_POST['Mesg'];
    echo $pYourName,$pMesg;
    
    $sql="insert into contactus values('$pYourName','$pEmailAddress','$pMesg')"; 
    mysql_query($sql,$con);
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
    mysql_close($con);
 }

?>