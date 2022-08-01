<html>
 <head>
  <title>SAVE</title>
  <link rel="stylesheet" type="text/css" href="css.css" /> 
 </head>
 <body>
  <center>
  <marquee><h1 class=impact style='color:white;' ><b><i>MUSICAL EVENT MANAGEMENT SYSTEM</i></b></h1></marquee>
<?php
if(isset($_POST['SAVE']))
{
        $RegUtype=$_POST['Utype'];
        $RegUcat=$_POST['Ucat'];
        $RegUname=$_POST['Uname'];
        $RegPassword=$_POST['Password'];
        $RegEmailid=$_POST['Email'];
        $RegFullname=$_POST['Fullnm'];
        $RegAddr=$_POST['Addr'];
        $RegMobileno=$_POST['Mobile'];
        $RegSecQuestion=$_POST['SecQuestion'];
        $RegSecAnswer=$_POST['SecAnswer'];
        echo $RegUname;
        $con=mysqli_connect("localhost","root","");
        if($con)
        {
            //echo "Connection Succesfull";
        }
        mysqli_select_db($con,"project");
        $update="Update registration set Usertype='$RegUtype',Usercat='$RegUcat',Password='$RegPassword',Emailid='$RegEmailid',Fullname='$RegFullname',Addr='$RegAddr',Mobileno=$RegMobileno,SecQuetion='$RegSecQuestion',SecAnswer='$RegSecAnswer' where Username like '".$RegUname."'";
        if(mysqli_query($con,$update))
        {
            echo  "<script type='text/javascript'>
    alert('Record updated Successfully!')
 window.location.href='AdminEdit.htm'
 </script>";  
        }
        else
        {
            echo  "<script type='text/javascript'>
    alert('Record not updated')
 window.location.href='AdminEdit.htm'
 </script>";  
           
        }

      mysqli_close($con);
}

?>
</center>
</body>
</html>