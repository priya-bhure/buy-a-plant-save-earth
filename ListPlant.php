<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
body{
  padding: 0;
  margin: 0;
}
.outlines{
border: 2px solid black;
margin-left: 65px;
margin-bottom: 40px;
}
.topnav {
  top:0;
  width:100%;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  z-index:999;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
 
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

.parallax {
    background-image: url("secpageplant1.jpg");
    min-height: 500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.center-left {
    position: absolute;
    top: 50%;
    left: 15px;
    
}


<!--finished here-->

form {
    border: 3px solid #f1f1f1;
}

input[type="text"], input[type=password] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button{
  width: 100px;
  margin-bottom: 10px;
  margin-top: 10px;
  transition: .5s;
  background: #007bff;
}
button:hover {
    width: 120px;
    transition: .5s;
}
.buybutton{
  position: relative;
}
.giftbutton{
  position: relative;
  left: 50%;
  transform: translate(-50%);
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


.container2 {
    padding: 16px;
}
p.heading1 {
    font-family: "Algerian";
  font-size:80px;
}

p.heading2 {
    font-family: "Bernard MT Condensed";
  font-size:70px;
  color:#FFF;
}
p.col{
color:#FFF;
}

p.col2{
    font-family: "Bernard MT Condensed";
  font-size:30px;
    color:#52BE80;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  width:100px;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<body>
<div class="topnav">
  <a href="Home.html">Home</a>
  <a class="active" href="ListPlant.php">Plants Available</a>
  <a href="Sell.html">Sell</a>
   <a href="Plantinfo.php">Information desk</a>
 <a href="Logout.php">Logout</a>
  <a href="Cart.php">Order History</a>
   </div>
  <br><br><br>

<h2 style="text-align:center"> <font color="#52BE80"><p class="col2">List of Available Plants </p> </font></h2>   
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<?php
    session_start();
    $db=mysqli_connect('localhost','root','','dbmsproject');
    $query="SELECT * FROM plantdet WHERE Status=0";
    $res = mysqli_query($db,$query);
    echo "<div class='container'><div class='row'>";
    while($row = mysqli_fetch_array($res))
      { 
?> 
     <div class="col-md-3 offset outlines">
                <br><img src="Images/<?php echo $row['Image']; ?>" height="200px" width="250px">
                <br><b>Plant Name : </b> <?php echo $row['Plantname']; ?>
                <br><b>Description : </b><?php echo $row['Plantdesc']; ?>
                <br><b>Price : </b> <?php echo $row['Plantprice']; ?>
                <br> <b> Plantid : </b> <?php echo $row['Plantid']; ?>
                <br><a target="_blank" href="Intermediate.php?product_id=<?php echo $row['Plantid']; ?>"><button class="buybutton btn btn-default">Buy</button></a>
                <a target="_blank" href="InterGift.php?product_id=<?php echo $row['Plantid']; ?>"><button class="buybutton btn btn-default">Gift</button></a>
          </div>   
        <br>
         
<?php
      }
?>
        </div>
     </div> 
  <a name="contactus">
  <div style="background:#000;min-height:100px;text-align:center">
 
  <h6><font color="#FFF"><br>
  Contact Number: 98989898989<br>
  Email id:adoptaplant@gmail.com<br>
  Address:Sir Mvit , Bangalore <br>
  <br>
  Created by Prabhat And Priya . All Rights Reserved.
  <br>
  <br>
  <br>
  </div>
  

  </body>
  </html>