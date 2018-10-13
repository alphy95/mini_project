<if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0)
	{
			?> 
  			<table class="table table-hover" padding-top="100px">
    		<thead>
      		  <tr>
        			<th>Category name</th>
        			<th>Action</th>
     		</tr>
			</thead>
			<tbody>
       		</*
        		while($row = mysqli_fetch_array($result))
			      {

            	echo "<tr>
                echo "<td>" . $row['name'] . "</td>";"
                
                echo "<td>";
                
                echo'<a href="gjg.php" data-toggle="tooltip" data-placement="top" title="Edit">';
                echo'<form action="cedit.php" method="post">';
                echo'<button type="submit" name="b1" class="btn btn-default" value="';
                
                echo'<span class="glyphicon glyphicon-pencil">';
      
      echo"</span>";
      echo" </button>";
      echo'</form>';
      echo"</a>";
   
                echo'<div class="btn-group">';
                echo'<a class="btn btn-default" href="k.php" data-toggle="tooltip" data-placement="top" title="Edit">';
                echo'<i class="fa fa-pencil">';
                echo"</i>";
                echo"</a>";
                echo"</td>";

                  
				    	echo "</tr>";
			    	}
				?>
				</tbody>    
			</table>
			<?php
       
    } 
	  
 } 
 else
 {
    echo "ERROR: Could not able to execute $sql. " .   	mysqli_error($link);
 }
      ?>
 </div>*/