<?php
include 'goed2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Goede, ....</title>
    <link rel="stylesheet" href= "goed.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container <?php echo get_greeting(); ?>" >
	<h1 class="welkom"><?php echo get_greeting(); ?></h1>
		<span class="time"><?php echo get_time(); ?></span>
	</div>
</body>
</html>



