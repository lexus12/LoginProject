<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
	
		  <div class="container">
				  <div class="login">
					<h1 class="login-heading">
					  <strong>Welcome - </strong> Login to account</h1>
					  <form action="classes/login.class.php" method="post">
						<input type="text" name="nick" placeholder="LOGIN" required="required" class="input-txt" />
						  <input type="password" name="password" placeholder="PASSWORD" required="required" class="input-txt" />
						  <div class="login-footer">
							 <a href="#" class="lnk">
							  I forgot my password
							</a>
							<button type="submit" class="btn btn--right" name="submit">Login</button>
								<div>
									<a href="register.php" class="lnk">Register new account</a>
								</div>
								<div class="comm">
									<?php
                  //adds a comunicats when user need to know something
                  include_once('classes/communicats.class.php');
                  ?>
								</div>
						  </div>
					  </form>
				  </div>
			</div>
