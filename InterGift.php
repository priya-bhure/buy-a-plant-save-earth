<?php
        session_start();     
        $_SESSION['plantid']=$_GET['product_id'];
        echo $_SESSION['plantid'];

       $id=$_SESSION['plantid']; 
       $db=mysqli_connect('localhost','root','','dbmsproject');
       $query="SELECT Plantname,Plantprice from  plantdet where plantid='$id'";
       $res = mysqli_query($db,$query);
       while($row = mysqli_fetch_array($res))
       {
          $_SESSION['pname']=$row['Plantname'];
          $_SESSION['pprice']=$row['Plantprice'];


       }

        header('Location:Gift.html');

?>
