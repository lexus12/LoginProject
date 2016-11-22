<?php
session_start();
?>
<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
		<div class="header">
		
		<div>
				<a href="userpage.php" class="lnk">Back to User Page</a>
				---------------------
				<a href="classes/logout.class.php" class="lnk">Logout</a>
			</div>
		
		</div>
		
		<div>
			<div class="container">
				 <div>
					<h1 class="info"><strong>Change your profile</strong></h1>
						<div class="lnk">
						<b>Change Your Nick - </b>( Current Nick is: <b><?php echo $_SESSION['nick']; ?></b> )<br/>
						 <form action="classes/profile.class.php" method="post">
							<input type="text" name="nick" placeholder="NEW LOGIN" required="required" class="input-txt"/>
							   <div class="login-footer">
									<button type="submit" class="btn btn--right" name="changeNick">Change Your Nick</button>
								</div>
						  </form>
						 </div>
					</div>
					
					 <div  class="lnk">
						<form action="classes/profile.class.php" method="post">
							<b>Change Your Password:</b><br/>
							Type Your current password: 
							<input type="text" name="pass" placeholder="CURRENT PASSWORD" required="required" class="input-txt"/>
							Type new password: 
							<input type="text" name="newpass" placeholder="NEW PASSWORD" required="required" class="input-txt"/>
							<div class="login-footer">
								<button type="submit" class="btn btn--right" name="changePass">Change Your PASSWORD</button>
							</div>
						</form>
					</div>
					
					<div>
						<div class="lnk">
							<b>Change Your Email - </b>( Current E-MAIL is: <b><?php echo $_SESSION['email']; ?></b> )<br/>
							<form action="classes/profile.class.php" method="post">
							
							<input type="text" name="email" placeholder="NEW E-MAIL" required="required" class="input-txt"/>
							<div class="login-footer">
								<button type="submit" class="btn btn--right" name="changeEmail">Change Your E-MAIL</button>
							</div>
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
							</form>
						</div>
					</div>
				 
			</div>
			
		</div>
	</body>
</html>
