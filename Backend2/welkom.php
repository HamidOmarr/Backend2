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




<!--POST-->
<!-- ?php
if (isset($_POST['naam']) && isset($_POST['email'])) {
	$naam = $_POST['naam'];
	$email = $_POST['email'];
}
?>

	<h1>De ingevulde gegevens zijn:</h1>
	<p>Naam: ?php echo $naam; ?></p>
	<p>E-mailadres: ?php echo $email; ?></p> -->

