<?php

   session_start();
   if(isset($_POST['upload']))
{
   $target="Images/".basename($_FILES['image']['name']);
  $db=mysqli_connect('localhost','root','','dbmsproject');
   $image=$_FILES['image']['name'];
   $text=$_POST['pdesc'];
   $Name=$_POST['pname'];
   $Price=$_POST['pprice'];
   $Id=$_SESSION['id'];
   $sql="INSERT INTO plantdet(Plantname,Plantprice,Plantdesc,Image,Userid) VALUES('$Name','$Price','$text','$image','$Id')";
   mysqli_query($db,$sql);
   if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
       header('Location:Sucssel.html');
	   
   }
   
   else{
         echo('Problem in Uploading data ');
   }
   }
   
?>
