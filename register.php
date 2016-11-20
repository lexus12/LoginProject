<?php
session_start();
?>

<html>
	<header>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
	
		  <div class="container">
				  <div class="login">
					<h1 class="login-heading">
					  <strong>Witaj</strong> Zarejestruj się</h1>
					  <form action="class/register.class.php" method="post">
						<input type="text" name="nick" placeholder="NICK" required="required" class="input-txt" />
						  <input type="password" name="password" placeholder="HASŁO" required="required" class="input-txt" />
						  <input type="password" name="password2" placeholder="POWTÓRZ HASŁO" required="required" class="input-txt" />
						  <input type="text" name="email" placeholder="E-MAIL" required="required" class="input-txt" />
						  <div class="login-footer">
							
							<button type="submit" class="btn btn--right" name="zarejestruj">Zarejestruj </button>
							<div class="comm">
									<?php
                  //adds communicats to user
                  include_once('classes/communicats.class.php'); 
                  ?>
							</div>
						  </div>
					  </form>
				  </div>
			</div>
  
    <script src="js/index.js"></script>

<html>
	<body>

		
