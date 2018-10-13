<?php

$link = mysqli_connect("localhost", "root", "", "alphy");
 
// Check connection
if($link === false)
	{
    		die("ERROR: Could not connect. " . mysqli_connect_error());
	}





if($_SERVER["REQUEST_METHOD"] == "POST")
 {

      $user = mysqli_real_escape_string($link,$_POST['username']);

      $pas = mysqli_real_escape_string($link,$_POST['password']);

       $sql = "SELECT id FROM users WHERE username = '$user' and password = '$pas'";
	
	$result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	

      $count = mysqli_num_rows($result);
	

	 if($count == 1) 
		{
         		//session_register("user");
        		 //$_SESSION['login_student'] = $user;
         		 header("location: home.php");
      	}else 
      	{
			header( "location: login_failed.php");

      	}

   }
?>