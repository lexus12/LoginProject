<?php
session_start();
?>
<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
		<div class="info">
			<div class="container">
				  <div class="login">
					<h1 class="login-heading"><strong>Change your profile</strong></h1>
					  <form action="classes/profile.class.php" method="post">
						Current Nick: <b><?php echo $_SESSION['nick'], ': '; ?></b>
						<input type="text" name="nick" placeholder="LOGIN" required="required" class="input-txt" value="New nick"/>
						   <div class="login-footer">
								<button type="submit" class="btn btn--right" name="changeNick">Change Your Nick</button>
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
			
			<div>
				<a href="userpage.php" class="lnk">Back to User Page</a>
			</div>
			
			<div>
				<a href="classes/logout.class.php" class="lnk">Logout</a>
			</div>
		</div>
	</body>
</html>	
