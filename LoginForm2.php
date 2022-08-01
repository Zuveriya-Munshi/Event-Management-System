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
    //$pUcat=$_POST['UCat'];
    $pUname=$_POST['Uname'];
    $pPwd=$_POST['Pwd'];
    echo $pUname."<br>".$pPwd;
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
    echo $rUCat."<br>".$rUname."<br>".$rPwd;
    
    if(($rUname==$pUname && $rPwd==$pPwd) && $rUCat=="ADMIN" )
      {
        $sql2 = "insert into loginform values ('$pUname','$pPwd')";
        if(mysqli_query($con,$sql2))
        {
            
        echo  "<script type='text/javascript'>
    alert('Welcom $rUname to our site')
 window.location.href='index2.html'
 </script>";  
        }
    }
    else
    {
        echo  "<script type='text/javascript'>
    alert('Please enter correct Admin name or Password!')
 window.location.href='LoginForm2.htm'
 </script>";  
        
    
    }
  }
 mysqli_close($con);

?>