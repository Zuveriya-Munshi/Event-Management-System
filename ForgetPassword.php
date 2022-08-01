<?php
if(isset($_POST['submit'])){
    $con=mysql_connect("localhost","root","");
    if($con)
     {
        echo "Connection Successful";
     }
     else
     {
        echo "Connection Failed";
     }
     mysql_select_db("project");
     $Username=$_POST['usernm'];
     $SecQuestion=$_POST['SecQues'];
     $SecAnswer=$_POST['SecAns'];
     //echo $Username,$SecAnswer;
     $sql="Select Username,Password,SecQuetion,SecAnswer from registration where Username='$Username'";
     $query=mysql_query($sql,$con);
     while($rs=mysql_fetch_assoc($query)){
        
        $Usernm=$rs['Username'];
        $SecQ=$rs['SecQuetion'];
        $SecA=$rs['SecAnswer'];
        $password=$rs['Password'];
        
        
        if(($SecQuestion==$SecQ)&&( $SecAnswer==$SecA  ))
        {
            $PassShow=$password;
            echo  "<script type='text/javascript'>
    alert('Your Password is $PassShow')
 window.location.href='ForgetPassword.htm'
 </script>";
            
        }
        else
         {
            echo  "<script type='text/javascript'>
    alert('Please Enter correct security question and security answer!')
 window.location.href='ForgetPassword.htm'
 </script>";
           
         }
        
         
         
     } 
        
}
mysql_close($con);
?>