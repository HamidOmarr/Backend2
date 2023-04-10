<?php
		if (isset($_GET["naam"]) && isset($_GET["email"])) {
			$naam = $_GET["naam"];
			$email = $_GET["email"];
			echo "<h1>De ingevulde gegevens zijn:</h1>";
			echo "<p>Naam: " . $naam . "</p>";
			echo "<p>Emailadres: " . $email . "</p>";
		} else {
			echo "<p>Geen gegevens ontvangen.</p>";
		}
	?>
