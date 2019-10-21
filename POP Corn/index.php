<!DOCTYPE html>
<html>
	<body>


		<?php
			include_once './includes/header.php';

			//fonction de deconnexion pour le salarie
			if (isset($_GET['deconnexion']))
			{
				// On écrase le tableau de session
				$_SESSION = array();

				// Puis on la détruit la session donc le numéro unique de session
				session_destroy();

				unset($_SESSION);

				unset($_COOKIE);


				echo "<script>document.location.href='index.php' </script>";

				exit;
			}

			include_once(get_path('outils/connexpdo.inc.php'));
			$cnx = connexpdo('bdpopcorn','myparam');
					include_once(get_path('fonction/recherche.php'));
			  $instance = new recherche();
				echo "<div class='autocomplete'>
					<span>Recherche:</span>
					<div class='searchbarwithbutton'>";
				$instance->funcrecherche();
				echo "<input id='recherchebutton' type='submit' value='Rechercher'/>
				</div></div>";

		?>
		<?php

			include_once './includes/footer.php';
		?>
	</body>
</html>
