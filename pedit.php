
<?php
$n=$_POST['t1'];
$n=trim($n);
$conn = mysqli_connect("localhost", "root", "", "alphy");
//Check connection
if($conn === false)
{
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
$s="SELECT category,price,tax,description FROM products WHERE pro_name='$n'";
$re=mysqli_query($conn,$s);
if($re === false){echo "not connected";}
$row=mysqli_fetch_array($re,MYSQLI_NUM);
$c=$row[0];
$d=$row[1];
//echo $c;
//echo $d;
$e=$row[2];
$f=$row[3];
?>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar {
      margin-bottom: 0;
      background-color: #3BB9FF;
      z-index: 9999;
      border: 0;
      font-size: 17px !important;
      line-height: 0.05 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
	  display:block;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #3BB9FF !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
ul{
    padding:12px;
  }
</style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
      <a class="navbar-brand" href="#myPage">FORKROADS</a>
	  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="prohome.php">PRODUCTS</a></li>
        <li><a href="cathome.php">CATEGORIES</a></li>
        <li><a href="#portfolio">SALES</a></li>
        <li><a href="userhome.php">USERS</a></li>
        <li><a href="#contact">SETTINGS</a></li>
		    
      </ul>
    </div>
    <br>
    <div class="collapse navbar-collapse" id="myNavbar">
    <img src="im10.png" style="height:50px;width:50px;">
      <ul class="nav navbar-nav navbar-right">
        <li><img src="admin.jpg" class="img-circle" alt="Admin image" height="42" width="42"></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
    </div>
  </div>
</nav>

<div class="container ">
<div class="row" style="margin-top:200px; margin-left:300px; margin-right:300px; ">
<form action="edit_product.php" method="post">
        <div class="form-group" >
          <label for="product">Product name</label>
            <input type="text" class="form-control" name="k1" value="<?php echo $n?>" maxlength="50" readonly><br>
            <label for="new_category">New Product name</label>
            <input type="text" class="form-control" name="k2" maxlength="50"value="<?php echo $n?>" ><br>

            <label for="category">  Category </label>
            <input type="text" class="form-control" name="h1"  maxlength="50" value="<?php echo $c?>"><br>

            <label for="price">Price</label>
            <input type="text" class="form-control" name="h2"  maxlength="50" value="<?php echo $d?>"><br>

            <label for="tax">Tax </label>
            <input type="text" class="form-control" name="h3"  maxlength="50" value="<?php echo $e?>"><br>

            <label for="description">Description</label>
            <input type="text" class="form-control" name="h4"  maxlength="50" value="<?php echo $f?>"><br>

          
            <button type="submit" class="btn btn-default" style="background-color:#3BB9FF;">Submit</button>
            </div>
            </form>
            <form action="prohome.php">
            <div class="form-group" >
            <button class="btn btn-default float-right" onclick="cathome.php">Back</button>
        </div>
</form>
</div>
</div>
</body>
</html>