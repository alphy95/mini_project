<!DOCTYPE html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="style.css">


</head>
<body>
<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Forkroad</span></h1>
		</div>
            <?php
                echo "<h2> Login Failed...Redirecting!!!</h2>";
                echo "<h2>Username or password is invalid !!!</h2>";
                header( "refresh:3;url=nlogin.html" );
              ?>
</div>
</body>
</html>