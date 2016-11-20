<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
	
		  <div class="container">
				  <div class="login">
					<h1 class="login-heading">
					  <strong>Witaj</strong> Zaloguj się</h1>
					  <form action="class/login.class.php" method="post">
						<input type="text" name="nick" placeholder="LOGIN" required="required" class="input-txt" />
						  <input type="password" name="password" placeholder="HASŁO" required="required" class="input-txt" />
						  <div class="login-footer">
							 <a href="#" class="lnk">
							  Zapomniałem hasła
							</a>
							<button type="submit" class="btn btn--right" name="submit">Zaloguj </button>
								<div>
									<a href="register.php" class="lnk">Zarejestruj nowe konto</a>
								</div>
								<div class="comm">
									<?php
                  //adds a comunicats when user need to know something
                  include_once('class/communicats.class.php');
                  ?>
								</div>
						  </div>
					  </form>
				  </div>
			</div>
  
    <script src="js/index.js"></script>

