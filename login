<?php
	session_start();
	if (isset($_SESSION['zalogowano'])){
		header('Location: index.php');
	}

?>
			
	<div style"clear: both"></div>
		<div>
			<div>
					<?php
					
						if (isset($_SESSION['ok'])) {
							
							echo $_SESSION['ok'];
							session_unset();
							
						}
						echo '
							</div>
							<div class="Login">
								<form action="classes/user.manage.class.php" method="post">
								<h1>Login:  <input type="text" name="nick"></h1>
								<h1>Hasło:  <input type="password" name="pass"></h1>
								<center><input type="submit" value="Zaloguj" name="log"></center>
							</form></div>';
											
						echo '<div class="red">';
						
						if (isset($_SESSION['bad'])) {
							echo $_SESSION['bad'];
							session_unset();
						}
								
					?>
								</div><!-- End red div -->
		</div><!-- End login2 div -->
		

