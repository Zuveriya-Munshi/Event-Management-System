<?php
if(isset($_POST['submit']))
{
 $con=mysqli_connect("localhost","root","");
 echo '</a> <link rel="stylesheet" type="text/css" href="css.css"> ';
 if($con)
 {
    mysqli_select_db($con,"project");
    $sBID=$_POST['eBID'];
    $sIC=$_POST['eIC'];
    $sIAA=$_POST['eIAA'];
    $sIAD=$_POST['eIAD'];
    $sIFA=$_POST['eIFA']; 
    $sIFD=$_POST['eIFD'];
    $sFC=$_POST['eFC'];
    $sFAA=$_POST['eFAA'];
    $sFAD=$_POST['eFAD'];
    $sFFA=$_POST['eFFA'];
    $sFFD=$_POST['eFFD'];
    $sLC=$_POST['eLC'];
    $sLAA=$_POST['eLAA'];
    $sLAD=$_POST['eLAD'];
    $sLFA=$_POST['eLFA'];
    $sLFD=$_POST['eLFD'];
    $sSC=$_POST['eSC'];
    $sSAA=$_POST['eSAA'];
    $sSAD=$_POST['eSAD'];
    $sSFA=$_POST['eSFA'];
    $sSFD=$_POST['eSFD'];
    
    $sIFA1=$sIC-$sIAA; //Calculation of Final Payment 
    $sFFA1=$sFC-$sFAA;
    $sLFA1=$sLC-$sLAA;
    $sSFA1=$sSC-$sSAA; 
     
     
    $update="Update payment_details Set ICharges=$sIC,IAdvamt=$sIAA,IAdvamtDate='$sIAD',IFinalPay='$sIFA1',IFinalPayDate='$sIFD',FPrice=$sFC,FAdvamt=$sFAA,FAdvamtDate='$sFAD',FFinalPay=$sFFA1,FFinalPayDate='$sFFD',PPrice=$sLC,PAdvamt=$sLAA,PAdvamtDate='$sLAD',PFinalPay=$sLFA1,PFinalPayDate='$sLFD',SPrice=$sSC,SAdvamt=$sSAA,SAdvamtDate='$sSAD',SFinalPay='$sSFA1',SFinalPayDate='$sSFD' where Bookingid like '%$sBID%'";
    if(mysqli_query($con,$update))
    {
        echo  "<script type='text/javascript'>
    alert('Record Updated Successfully')
 window.location.href='Payment_detailsEdit.php'
 </script>";  

    }
 
  }
  mysqli_close($con);
}

?>