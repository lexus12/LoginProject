<?php
	session_start();
	if (!isset($_SESSION['nick'])&&!isset($_SESSION['password'])) {
		header("location: index.php");
	}
?>
<html>

	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	
	<body>
	
		<div id="header">
			<ul>
				<li><a href="userpage.php">Back to User Page</a></li>
				<li><a href="accountdelete.php">Delete Your Account</a></li>
				<li style="float:right"><a href="classes/logout.class.php">Logout</a>	</li>
			</ul>
		</div>
		

			<div class="container">
				
				<div  class="pageText">
					<h1 class="info"><strong>Delete Your Account</strong></h1>
					<form action="routers/delete.router.php" method="post">
						Type Your current password: 
						<input type="text" name="pass" placeholder="CURRENT PASSWORD" required="required" class="input-txt"/>
						Retype Your password: 
						<input type="text" name="pass2" placeholder="REPEAT PASSWORD" required="required" class="input-txt"/>
						<div class="login-footer">
							<button type="submit" class="btn btn--right" name="accountDelete">Delete Your Account</button>
						</div>
					</form>
				</div>

					
				<div class="err">
					<?php
						//adds a comunicats when user need to know something
						include_once('classes/errors.class.php');
					?>
				</div>
			</div>

				 

			

	</body>
</html>
