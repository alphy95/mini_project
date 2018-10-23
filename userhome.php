<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar {
      margin-bottom: 0;
      background-color: #3BB9FF;
      
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
<nav class="navbar navbar-default navbar-fixed-top">
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
$sql = "SELECT * FROM users ";
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
<!--<col width=500>
<col width=20>
<col width=20>-->

    		<thead>
      		  <tr>
        			<th>FIRST NAME</th>
        			<th>LAST NAME</th>
                    <th>USER NAME</th>
                    <th>PASSWORD</th>
                    
     		</tr>
			</thead>
			<tbody id="myTable">
            <?php 
            while($row = mysqli_fetch_array($result))
            {
                $g=$row['firstname'];
                $h=$row['lastname'];
                $i=$row['username'];
                $j=$row['password'];
                ?>
            <tr>
            
                 <td> <?php echo $g ; ?></td>
                 <td> <?php echo $h ; ?></td>
                 <td> <?php echo $i ; ?></td>
                 <td> <?php echo $j ; ?></td>
                 <td>
                
                
                <form action="uedit.php" method="post">
                <a href="gjg.php" data-toggle="tooltip" data-placement="top" title="Edit">
                <button type="submit" name="t1" class="btn btn-default" value=" <?php echo $g ?>">
                
                <span class="glyphicon glyphicon-pencil">
      
    </span>
     </button>
     </a>
      </form>
      </td>
      <td>
                
                
                <form action="udel.php" method="get">
                <a href="gjg.php" data-toggle="tooltip" data-placement="top" title="Delete">
                <button type="submit" name="c1" class="btn btn-default" value="<?php echo $g ?>">
                
                <span class="glyphicon glyphicon-remove">
      
    </span>
     </button>
     </a>
      </form>
      </td>
    
            <?php }?>
    </tbody>    
			</table>
            
            <?php
  }
             else
             {
                echo " No categories";
             }
                  ?>
<!--<a href="newcat.php" class="btn btn-info" role="button" syle="background-color:#3BB9FF:">Add new category</a>

<button type="button" class="btn btn-info" style="background-color:#3BB9FF;">Add new category</button>
<button type="button" style="color:#ffffff;background-color:#3BB9FF;">Add</button>-->

<!--trigger the model with a button-->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add User</button>
 <!-- Modal -->
 <div class="modal fade" id="myModal"  role="dialog">
    <div class="modal-dialog">
    
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#3BB9FF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body">
            
        <form action="add_user.php" method="post">
        <div class="form-group">
    <label for="fname"> First name</label>
    <input type="text" class="form-control" name="q1">
    <label for="lname"> Last name</label>
    <input type="text" class="form-control" name="q2">
    <label for="uname"> User name</label>
    <input type="text" class="form-control" name="q3">
    <label for="pass"> Password</label>
    <input type="text" class="form-control" name="q4">
    <label for="role"> Role</label>
    <input type="text" class="form-control" name="q5">
    <label for="role">Email</label>
    <input type="text" class="form-control" name="q6">
  
  </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default" style="background-color:#3BB9FF;">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
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