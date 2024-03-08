<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>	
<div id="formContainer">
  <h2 id="formHeader">Login</h2>
  <form action="db/login.php" method="POST">
  	<div class="inputContainer">
  		<label for="username">Username</label>
   	    <input type="text" id="username" placeholder="Enter your username..." name="username">   		
  	</div>
  	<div class="inputContainer">
  		<label for="password">Password</label>
   	    <input type="password" id="password" placeholder="Enter your password..." name="password">   		
  	</div>

  	<div class="inputContainer">
  	    <input type="submit" value="Submit">   		
  	</div>
  </form>
</div>	  
</body>
</html> 