<?php

  if(isset($_POST['submit']))
  {
    $con=mysql_connect("localhost","root","");
    if($con)
    {
        echo "Connection is Successful!"."</br>";
    }
    else
    {
        echo "Connection is Fail"."</br>";
    }
    mysql_select_db("project");
    //$pUcat=$_POST['UCat'];
    $pUname=$_POST['Uname'];
    $pPwd=$_POST['Pwd'];
    echo $pUname."<br>".$pPwd;
    echo "</br>";
    
    $sql = "Select Usercat,Username,Password from registration where Username='$pUname'"; 
    $query=mysql_query($sql,$con);
    echo "Query Successful!"."<br>";
    
    while($rs = mysql_fetch_assoc($query))
    {
        
        $rUCat=$rs['Usercat'];
        $rUname=$rs['Username'];
        $rPwd=$rs['Password'];
    }
    echo $rUCat."<br>".$rUname."<br>".$rPwd;
    
    if(($rUname==$pUname && $rPwd==$pPwd) && $rUCat=="ADMIN" )
      {
        $sql2 = "insert into loginform values ('$pUname','$pPwd')";
        if(mysql_query($sql2,$con))
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
 mysql_close($con);

?>