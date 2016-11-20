<?php

			//shows info about about successful registration
			if(isset($_SESSION['user_registered']) && $_SESSION['user_registered'] == true) {
				echo "Zarejestrowano nowe konto<br/> Zaloguj się!";
				$_SESSION['user_registered'] = false;
			}
			//shows info about not all fields filled propertly
			if(isset($_SESSION['fill_all_fields']) && $_SESSION['fill_all_fields'] == true) {
				echo "Wypełnij wszystkie pola<br/>";
				$_SESSION['fill_all_fields'] = false;
			}

			//shows info about not all fields filled propertly
			if(isset($_SESSION['data_err']) && $_SESSION['data_err'] == true) {
				echo "Nieprawidłowy login lub hasło<br/>";
				$_SESSION['data_err'] = false;
			}
			
			if(isset($_SESSION['pass_err']) && $_SESSION['pass_err'] == true) {
				echo "Wpisz hasło - minimum 10 znaków";
				$_SESSION['pass_err'] = false;
			}

			if(isset($_SESSION['pass_err2']) && $_SESSION['pass_err2'] == true) {
				echo "Hasła powinny być takie same";
				$_SESSION['pass_err2'] = false;
			}

			if(isset($_SESSION['email_err']) && $_SESSION['email_err'] == true) {
				echo "Wpisz poprawny email";
				$_SESSION['email_err'] = false;
			}

			if(isset($_SESSION['user_exists_err']) && $_SESSION['user_exists_err'] == true) {
				echo "Użytkownik o takim email lub loginie istnieje";
				$_SESSION['user_exists_err'] = false;
			}

			if(isset($_SESSION['fill_all_fields']) && $_SESSION['fill_all_fields'] == true) {
				echo "Wypełnij wszystkie pola";
				$_SESSION['fill_all_fields'] = false;
			}

			if(isset($_SESSION['register_err']) && $_SESSION['register_err'] == true) {
				echo "Błąd rejestracji spróbuj później";
				$_SESSION['register_err'] = false;
		}
?>
