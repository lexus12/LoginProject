<?php

			if(isset($_SESSION['nickChange']) && $_SESSION['nickChange'] == true) {
				echo "Your Nick was changed";
				$_SESSION['nickChange'] = false;
			}
			
			if(isset($_SESSION['passChange']) && $_SESSION['passChange'] == true) {
				echo "Your Password was changed";
				$_SESSION['passChange'] = false;
			}
			
			//shows info about about successful registration
			if(isset($_SESSION['user_registered']) && $_SESSION['user_registered'] == true) {
				echo "Register new account<br/> Login please!";
				$_SESSION['user_registered'] = false;
			}
