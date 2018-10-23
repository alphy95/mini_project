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
<!--dashboard-->
<<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
      <a class="navbar-brand" href="#myPage" style="font-size:24px;">FORKROADS</a>
	  
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
</body>
<html>