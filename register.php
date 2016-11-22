<?php
session_start();
?>

<html>
	<header>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
	
		  <div class="container">
				  <div class="login">
					<h1 class="login-heading">
					  <strong>WELCOME - </strong> Register new account</h1>
					  <form action="classes/register.class.php" method="post">
						<input type="text" name="nick" placeholder="NICK" required="required" class="input-txt" />
						  <input type="password" name="password" placeholder="PASSWORD" required="required" class="input-txt" />
						  <input type="password" name="password2" placeholder="REPEAT PASSWORD" required="required" class="input-txt" />
						  <input type="text" name="email" placeholder="E-MAIL" required="required" class="input-txt" />
						  <div class="login-footer">
							
							<button type="submit" class="btn btn--right" name="zarejestruj">Register </button>
							<div class="comm">
									<?php
										//adds a comunicats when user need to know something
										include_once('classes/communicats.class.php');
									?>
								</div>
								<div class="err">
									<?php
										//adds a comunicats when user need to know something
										include_once('classes/errors.class.php');
									?>
								</div>
						  </div>
					  </form>
				  </div>
			</div>
  
	</body>

</html>

		
