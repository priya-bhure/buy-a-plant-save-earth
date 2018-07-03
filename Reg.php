<?php


$db = mysqli_connect('localhost','root','','dbmsproject') or die("Unable to connect");
session_start();

      
        $Username=$_POST['username'];
        $Password=$_POST['password'];
        $Email=$_POST['email'];
        $Phone=$_POST['phone'];
  	    $Address=$_POST['address'];
		
        $query = "INSERT INTO register(Username,Password,Phone,Email,Address)
               VALUES('$Username','$Password','$Phone','$Email','$Address')";     
      $result = mysqli_query($db,$query);
       if($result)
       {
       $newr=mysqli_insert_id($db);
       $_SESSION['id']=$newr;
       header('Location:Home.html');
       } 
       else
       echo ('Not yet done');
       mysqli_close($db);
?>