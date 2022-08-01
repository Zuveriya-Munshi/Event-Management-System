<?php

  if(isset($_POST['submit']))
  {
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        echo "Connection is Successful!"."</br>";
    }
    else
    {
        echo "Connection is Fail"."</br>";
    }
    mysqli_select_db($con,"project");
    $pUname=$_POST['Uname'];
    $pPwd=$_POST['Pwd'];
    echo "</br>";
    
    $sql = "Select Usercat,Username,Password from registration where Username='$pUname'"; 
    $query=mysqli_query($con,$sql);
    echo "Query Successful!"."<br>";
    
    while($rs = mysqli_fetch_assoc($query))
    {
        
        $rUCat=$rs['Usercat'];
        $rUname=$rs['Username'];
        $rPwd=$rs['Password'];
    }
    
    if(($rUname==$pUname && $rPwd==$pPwd) && $rUCat=="USER" )
      {
        $sql2 = "insert into loginform values ('$pUname','$pPwd')";
        if(mysqli_query($con,$sql2))
        {
            echo  "<script type='text/javascript'>
    alert('Welcom $rUname to our site')
 window.location.href='index1.htm'
 </script>";  

        }
    }
    else
    {
        echo  "<script type='text/javascript'>
    alert('Please enter correct username or Password!')
 window.location.href='LoginForm.htm'
 </script>";  

    }
   
  }
  
 mysqli_close($con);

?>