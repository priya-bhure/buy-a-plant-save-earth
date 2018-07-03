<?php


$db=mysqli_connect('localhost','root','','dbmsproject') or die("Unable to connect");


        session_start();
        $Name=$_POST['name'];
        $Message=$_POST['message'];
        $Email=$_POST['email'];
        $Phone=$_POST['phone'];
        $Address=$_POST['address'];
        $Userid= $_SESSION['id'];
        $Plantid=$_SESSION['plantid'];

        $query = "INSERT INTO gift(Userid,Plantid,Name,Address,Phone,Email,Message)
               VALUES('$Userid','$Plantid','$Name','$Address','$Phone','$Email','$Message')";     
      $result = mysqli_query($db,$query);
       if($result)
       {
       $newr=mysqli_insert_id($db);
       $_SESSION['giftid']=$newr;
       header('Location:Payment2.html');
       } 
       else
       echo ('Not yet done');
       mysqli_close($db);
?>