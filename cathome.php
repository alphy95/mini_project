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
      font-size: 12px !important;
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
        <li><a href="#about">PRODUCTS</a></li>
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
<!--Table code-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php

$link = mysqli_connect("localhost", "root", "", "alphy");
 
// Check connection
if($link === false)
	{
    		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
$sql = "SELECT * FROM categories ";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0)
	{
?>

<div class="container">

<table>
<col width=1000>
<col width=200>
<thead>
</thead>
<tbody>

<tr>
<td>
</td>
<td>
<input class="form-control" id="myInput" type="text" placeholder="Search..." padding-right="100px" width="100px">
</td>
</tr>
</tbody>
</table>

<table class="table table-hover" padding-top="100px">
<col width=500>
<col width=20>
<col width=50>

    		<thead>
      		  <tr>
        			<th>CATEGORIES</th>
        			<th>ACTIONS</th>
     		</tr>
			</thead>
			<tbody id="myTable">
            <?php 
            while($row = mysqli_fetch_array($result))
            {
                $g=$row['name'];
                ?>
            <tr>
            
                 <td> <?php echo $g ; ?></td>
                 <td>
                
                
                <form action="cedit.php" method="post">
                <a href="gjg.php" data-toggle="tooltip" data-placement="top" title="Edit">
                <button type="submit" name="b1" class="btn btn-default" value=" <?php echo $g ?>">
                
                <span class="glyphicon glyphicon-pencil">
      
    </span>
     </button>
     </a>
      </form>
      </td>
      <td>
                
                
                <form action="cdel.php" method="post">
                <a href="gjg.php" data-toggle="tooltip" data-placement="top" title="Delete">
                <button type="submit" name="b2" class="btn btn-default" value=" <?php echo $g ?>">
                
                <span class="glyphicon glyphicon-remove">
      
    </span>
     </button>
     </a>
      </form>
      </td>
    
            <?php }?>
    </tbody>    
			</table>
            </div>
            <?php
  }
             else
             {
                echo " No categories";
             }
                  ?>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>