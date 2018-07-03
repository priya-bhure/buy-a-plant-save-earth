<?php

   session_start();
   if(isset($_POST['upload']))
{
   $target="About/".basename($_FILES['image']['name']);
  $db=mysqli_connect('localhost','root','','dbmsproject');
   $image=$_FILES['image']['name'];
   $text=$_POST['pdesc'];
   $Name=$_POST['pname'];
   $SName=$_POST['psname'];
   $Area=$_POST['parea']; 
 $sql="INSERT INTO aboutplant(Psci,Pname,Parea,Pdetails,Pimage) VALUES('$SName','$Name','$Area','$text','$image')";
   mysqli_query($db,$sql);
   if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
       header('Location:Home.html');
	   
   }
   
   else{
         echo('Problem in Uploading data ');
   }
   }
   
?>
