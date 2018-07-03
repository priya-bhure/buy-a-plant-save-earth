<?php
	$db=mysqli_connect('localhost','root','','dbmsproject') ;
	if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

       session_start();            
       $Username=$_POST['username'];
       $Password=$_POST['password'];
       
       $query = "SELECT * FROM register WHERE Username ='$Username' AND Password='$Password'";
       $result = mysqli_query($db,$query);
      if(mysqli_num_rows($result) == 1)
      while($row = mysqli_fetch_assoc($result))
	{	$_SESSION['id']=$row['Userid'];
		header('Location:Home.html');
	}		
	else
   echo "<script type='text/javascript'>alert('Wrong details !!');</script>";
mysqli_close($db);
?>