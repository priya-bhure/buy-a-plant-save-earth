<?php

$db=mysqli_connect('localhost','root','','dbmsproject') ;
	if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
        session_start();     
        
        $Userid=$_SESSION['id'];
        $Plantid=$_SESSION['plantid'];
        $payment=$_SESSION['paymentid'];
        $Giftid=$_SESSION['giftid'];

	    $sql="INSERT INTO Buy(USerid,Plantid,Paymentid,Giftid) VALUES('$Userid','$Plantid','$payment','$Giftid')";
   
        if(mysqli_query($db,$sql)){
     
        
    	header('Location:Orderhistory.php');
	
        }
   
    else{
         echo 'Problem in Uploading data ';
    	}
   
   mysqli_close($db);
?>	

		