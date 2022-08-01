<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","");
    if($con)
     {
        echo "Connection Successful";
     }
     else
     {
        echo "Connection Failed";
     }
     mysqli_select_db($con,"project");
     $Username=$_POST['usernm'];
     $SecQuestion=$_POST['SecQues'];
     $SecAnswer=$_POST['SecAns'];
     //echo $Username,$SecAnswer;
     $sql="Select Username,Password,SecQuetion,SecAnswer from registration where Username='$Username'";
     $query=mysqli_query($con,$sql);
     while($rs=mysqli_fetch_assoc($query)){
        
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
mysqli_close($con);
?>