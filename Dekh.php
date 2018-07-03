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
  left: 50%;
  transform: translate(-50%);
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
.offset{

}
</style>
<body>
<div class="topnav">
  <a href="Home.html">Home</a>
  <a class="active" href="ListPlant.php">Plants Available</a>
  <a href="Sell.html">Sell</a>
  <a href="#contactus">Contact Us</a>
  <a href="Front.html">Logout</a>
  </div>

  <div class="parallax">
<div class="container">
<div class="centered"><p class="heading2" color="#12686F">
<b>Adopt a plant<h2></p>
<p class="col">"A garden is a grand teacher. It teaches patience and careful <br>
watchfulness , it teaches industry and thrift , above all it teaches<br> entire trust..."
</p>
<!-- — Gertrude Jekyll-->
<br>
<br>
<br><br>
</p>
<br>
</div>
</div>
</div>
<br><br>

<h2 style="text-align:center"> <font color="#52BE80"><p class="col2">List of Available Plants </p> </font></h2>   

<?php
		session_start();
		$db=mysqli_connect('localhost','root','','dbmsproject');
		$query="SELECT * FROM plantdet";
		$res = mysqli_query($db,$query);
    echo "<div class='container'><div class='row'>";
		while($row = mysqli_fetch_array($res))
			{ 
?> 
     <div class="col-md-3 offset outlines">
                <br><img src="Images/<?php echo $row['Image']; ?>" height="200px" width="200px">
                <br>Plant Name : <?php echo $row['Plantname']; ?>
                <br>Description : <?php echo $row['Plantdesc']; ?>
                <br>Price : <?php echo $row['Plantprice']; ?>
                <br>Quantity : <?php echo $row['Quantity']; ?>
                <br>  Plantid : <?php echo $row['Plantid']; ?>
                <br><a target="_blank" href="Buy.php?product_id=<?php echo $row['Plantid']; ?>"><button class="buybutton btn btn-default">Buy</button></a>
                <br><a target="_blank" href="Gift.php?product_id=<?php echo $row['Plantid']; ?>"><button class="buybutton btn btn-default">Gift</button></a>
          </div>   
        <br>
         
<?php
      }
?>
        </div>
     </div> 
	</body>
	</html>