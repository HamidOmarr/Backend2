<?php
	function get_greeting() {
		$hour = date('H');
		if ($hour >= 6 && $hour < 12) {
			return "morning";
		} elseif ($hour >= 12 && $hour < 18) {
			return "afternoon";
		} elseif ($hour >= 18 && $hour < 24) {
			return "evening";
		} else {
			return "night";
		}
	}
	
	function get_time() {
		return date('H:i');
	}
?>
