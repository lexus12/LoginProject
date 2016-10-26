<div id="register">
		<form action="classes/user.manage.class.php" method="post">
			<h1>Login: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="text" name="nick" value="<?php if (isset($_SESSION['nick'])) echo $_SESSION['nick'];?>"></h1>
			<h1>Hasło:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="password" name="pass"></h1>
			<h1>Powtórz hasło: &nbsp <input type="password" name="rpass"></h1>
			<h1>E-mail:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="text" name="email" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'];?>"> </h1>
			<h1>Akceptuję regulamin <input type="checkbox" name="check" value="<?php if (isset($_SESSION['check'])) echo $_SESSION['check'];?>"> </h1>
			<center><div class="g-recaptcha" data-sitekey="6Ld0QhgTAAAAAPF_hOeNYTbo8-PiUikeUUxHAFOa"></div><center>
			<center><input type="submit" value="Zarejestuj" name="send"><center>
		</form>
			<div class="red">
					<?php
						if (isset($_SESSION['bad'])) {
						echo $_SESSION['bad'];
						session_unset();
						}
					
						?>
			</div>
		</div>
	<?php
		include_once('classes/class.footer.php');
	?>
