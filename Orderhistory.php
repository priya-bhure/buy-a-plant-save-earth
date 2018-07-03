<?php
        session_start();     
       
       $plantid=$_SESSION['plantid'];
       $userid=$_SESSION['id'];
       $name=$_SESSION['pname'];
       $price=$_SESSION['pprice'];
       

       $db=mysqli_connect('localhost','root','','dbmsproject');
       $query="INSERT INTO orderhistory(Plantname,Plantprice,Userid,Plantid)values ('$name','$price','$userid','$plantid')";
       $result = mysqli_query($db,$query);
      if($result)
       {
       $newr=mysqli_insert_id($db);
       
       $que="UPDATE plantdet SET Status=1 WHERE Plantid='$plantid'";
       $res = mysqli_query($db,$que);
       
       header('Location:SucsBuy.html');
       }
       else {
        echo 'bug in orderhistory.php';
        } 

?>
