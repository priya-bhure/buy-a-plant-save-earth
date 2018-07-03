<?php

   $db=mysqli_connect('localhost','root','','dbmsproject') ;
	if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
    session_start();            
   $Name=$_POST['name'];
   $Card=$_POST['cardno'];
   $Exp=$_POST['expdate'];
   $CVV=$_POST['cvv'];
   $Userid=$_SESSION['id'];

       
   $sql="INSERT INTO payment(CardName,CardNo,Expiry,CVV,Userid) VALUES('$Name','$Card','$Exp','$CVV','$Userid')";
   
   if(mysqli_query($db,$sql)){
    $newr=mysqli_insert_id($db);
       $_SESSION['paymentid']=$newr;
    	header('Location:Buy2.php');
	
   }
   
   else{
         echo 'Problem in Uploading data ';
		 }
   
   mysqli_close($db);
?>
