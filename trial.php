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
<?php

$link = mysqli_connect("localhost", "root", "", "alphy");
 
// Check connection
if($link === false)
	{
    		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
$sql = "SELECT * FROM categories ";
$result = mysqli_query($link, $sql)
?>
<div class="container">
<table class="table table-hover" padding-top="100px">
    		<thead>
      		  <tr>
        			<th>Category name</th>
        			<th>Action</th>
     		</tr>
			</thead>
			<tbody>
            <?php 
            while($row = mysqli_fetch_array($result))
            {
                $g=$row['name'];
                ?>
            <tr>
            
                 <td> <?php echo $g ; ?></td>
                 <td>
                
                <a href="gjg.php" data-toggle="tooltip" data-placement="top" title="Edit">
                <form action="cedit.php" method="post">
                <button type="submit" name="b1" class="btn btn-default" value=" <?php echo $g ?>">
                
                <span class="glyphicon glyphicon-pencil">
      
    </span>
     </button>
      </form>
    </a>
            <?php }?>
    </tbody>    
			</table>
            </div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>