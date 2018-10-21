
<?php
$n=$_POST['t1'];
/*echo $n;
$conn = mysqli_connect("localhost", "root", "", "alphy");
//Check connection
if($conn === false)
{
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
$connectDb=mysqli_select_db($conn,'alphy');
$result = mysqli_query($conn,"SELECT category,price FROM products where pro_name='$n'");

while($row= mysqli_fetch_array($result))
{
    echo $row['price'];
}*/  
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
        <li><a href="#pricing">USERS</a></li>
        <li><a href="#contact">SETTINGS</a></li>
		    <li><img src="im10.png" style="height:50px;width:50px;"></li>
      </ul>
    </div>
    <br>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ADMIN</a></li>
        <li><a href="#services">LOGOUT</a></li>
    </div>
  </div>
</nav>

<div class="container ">
<div class="row" style="margin-top:200px; margin-left:300px; margin-right:300px; ">
<form action="edit_product.php" method="post">
        <div class="form-group" >
          <label for="product">Product name</label>
            <input type="text" class="form-control" name="k1" value="<?php echo $n?>" maxlength="50"><br>
            <label for="new_category">New name</label>
            <input type="text" class="form-control" name="k2" maxlength="50"><br>

            <label for="category"> New Category </label>
            <input type="text" class="form-control" name="h1"  maxlength="50"><br>

            <label for="price">New Price</label>
            <input type="text" class="form-control" name="h2"  maxlength="50"><br>
          
            <button type="submit" class="btn btn-default" style="background-color:#3BB9FF;">Submit</button>
            <button class="btn btn-default float-right" onclick="cathome.php">Back</button>
        </div>
</form>
</div>
</div>
</body>
</html>